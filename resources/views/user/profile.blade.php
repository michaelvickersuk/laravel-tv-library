<?php /** @var \App\Models\User\User $user */ ?>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex mb-3 justify-content-between align-items-center">
            <h1>{{ $user->name }}</h1>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <h2 class="card-title">Recently Watched</h2>
                <div class="list-group">
                    ...
                </div>
            </div>
        </div>

        @if($user->watchlist)
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h2 class="card-title mb-0">Watchlist</h2>
                        <form action="{{ route('watchlist.visibility', $user->watchlist) }}" method="post">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-primary">
                                Make {{ $user->watchlist->private ? 'Public' : 'Private' }}
                            </button>
                        </form>
                    </div>
                    <div class="list-group">
                        @each('shows._showRow', $user->watchlist->shows, 'show')
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
