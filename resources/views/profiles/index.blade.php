@extends('layouts.app')

@section('content')
<div class="container" style="width: 65%; margin: auto;">
    <div class="row" >
        <div class="col-sm-3 p-5">
            <img src="/storage/{{ $user->profile->profileImage() }}" alt="pimg" class="rounded-circle w-100 ">
        </div>

        <div class="col-sm-9 p-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-3">
                    <div class="h3">{{ $user->username }}</div>
                    <follow-button user-id="{{ $user->id }}" following="{{ $follows }}"></follow-button>
                </div>
                @can('update', $user->profile)
                    <a href="/p/create">Add New Post</a>
                @endcan
            </div>
                @can('update', $user->profile)
                    <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
                @endcan
            <div class="d-flex">
                <div class="pr-4"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-4"><strong>{{ $user->profile->followers->count() }}</strong> followers</div>
                <div class="pr-4"><strong>{{ $user->following->count() }}</strong> following</div>
            </div>


            <div class="pt-3" style="color:#333;">
                <strong>{{ $user->profile->username }}</strong>
            </div>

            <div style="color: #333; font-size: 12px;">
              <p>{{$user->profile->description}}</p>
            </div>

            <div class="">
                <a href="#">{{$user->profile->url}}</a>
            </div>
        </div>


    </div>

    <div>
        <div class="row profile-row">

            @foreach($user->posts as $post)
            <div class="col-sm-4  img-3 pt-3" style="height: 300px; width: 300px;">
                <a href="/p/{{$post->id}}">
                    <img src="/storage/{{  $post->image }}" alt="post" class="img" style="max-height: 100%">
                </a>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection
