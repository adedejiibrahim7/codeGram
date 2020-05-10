@extends('layouts.app')

@section('content')
<div class="container" style="width: 65%; margin: auto;">
<form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
    @csrf
    @method('PATCH')
    <div class="row">
            <div class="col-8 offset-2">
                <h2 class="">Edit Profile</h2>
                <div class="form-group  ">
                    <label for="username" class="col-md-4 col-form-label ">Title</label>

                    <input id="username" name="username" type="text"
                    class="form-control @error('username') is-invalid @enderror" 
                    value="{{ old('username') ?? $user->profile->username }}"
                    autocomplete="username" autofocus>

                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group  ">
                    <label for="description" class="col-md-4 col-form-label ">Description</label>

                    <input id="description" name="description" type="text"
                    class="form-control @error('description') is-invalid @enderror" 
                    value="{{ old('description') ?? $user->profile->description }}"
                    autocomplete="description" autofocus>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
                <div class="form-group  ">
                    <label for="url" class="col-md-4 col-form-label ">Url</label>

                    <input id="url" name="url" type="text"
                    class="form-control @error('url') is-invalid @enderror" 
                    value="{{ old('url') ?? $user->profile->url }}"
                    autocomplete="url" autofocus>

                    @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="">
                    <label for="image" class="col-md-4 col-form-label ">Profile Image</label>
                    <input type="file" class="form-control-file" name="image" id="image">

                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row pt-3 ml-auto">
                    <button class="btn btn-primary">
                        Save
                    </button>
                </div>
            </div>
        </div>
   </form>
     
</div>
@endsection
