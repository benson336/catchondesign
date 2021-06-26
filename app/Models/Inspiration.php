<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspiration extends Model
{
    use HasFactory;
    protected $fillable = ['project_id', 'image_info', 'image_url', 'description'];

    public function project()
    {
        return $this->belongsTo('App\Models\Project');
    }

}
