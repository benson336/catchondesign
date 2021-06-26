<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    
    public function inspirations()
    {
        return $this->hasMany('App\Models\Inspiration');
    }

    /*public function deleteRelated(){
        $this->inspirations()->delete();
        return parent::delete();
    }*/

    
}

