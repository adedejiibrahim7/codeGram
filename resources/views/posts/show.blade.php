@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 ">
            <img src="/storage/{{ $post->image }}" alt="post" class="w-100">
        </div>
        <div class="col-4">
            <div class="d-flex">
                <div>
                    <img src="/storage/{{ $post->user->profile->image }}" class="w-100 rounded-circle" style="max-width: 60px;">
                </div>
                <div class="d-flex p-3 align-content-between">
                    <h5>
                        <a href="/profile/{{$post->user->id}}">
                            <span class="text-dark text-decoration-none">{{ $post->user->username }}</span>
                        </a>
                    </h5>
                    <a href="#" class="pl-4">Follow</a>
                </div>
            </div>
            <hr>
            <p>
                <span class="font-weight-bold pr-2">
                    <a href="/profile/{{$post->user->id}}">
                        <span class="text-dark text-decoration-none">{{ $post->user->username }}</span>
                    </a>
                </span>
                {{ $post->caption }}
            </p>
        </div>
    </div>
</div>
@endsection

