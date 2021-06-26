@extends('layouts.app')

@section('content')


<section id="cover" class="min-vh-100">
    <div id="cover-caption">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                    <h2 class="">Create Blog Post</h2>
                    <div class="px-2">
                        <form action="{{route('submitForm')}}" class="justify-content-center" method="post">
                        @csrf
                            <div class="form-group">
                                <label for="title" class="sr-only">Title</label>
                                <input type="text" class="form-control @error('title') border-danger @enderror" name="title" 
                                placeholder="Enter Title" value="{{old('title')}}">
                                @error('title')
                                <div class="text-danger mt-2 text-sm">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="body" class="sr-only">Body</label>
                                <textarea type="text" class="form-control @error('body') border-danger @enderror" name="body" 
                                placeholder="Enter Content" rows="4" cols="50" value="{{old('body')}}"></textarea>
                                 @error('body')
                                <div class="text-danger mt-2 text-sm">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary btn-lg">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 
@endsection