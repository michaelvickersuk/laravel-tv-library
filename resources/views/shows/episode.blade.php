<?php /** @var \App\Models\Show\Episode $episode */ ?>
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <h3 class="mb-0">
                    <a href="{{ route('show', $episode->season->show) }}" class="text-muted small">
                        {{ $episode->season->show->name }}
                    </a>
                </h3>
                <h2 class="mb-0">
                    <a href="{{ route('show.season', $episode->season) }}" class="text-muted small">
                        {{ $episode->Season->name }}
                    </a>
                </h2>
                <h1>{{ $episode->name }}</h1>
                <p>
                    <span class="badge badge-class">
                        Aired:
                        {{ $episode->aired->format('j M Y, H:i') }}
                    </span>
                    <span class="badge badge-class">
                        Plays:
                        {{ $episode->plays }}
                    </span>
                </p>
            </div>
            <div>
                @if($episode->hasAired())
                    <form action="{{ route('show.episode.watched', $episode) }}" method="post">
                        @csrf
                        @if($episode->hasUserWatched(auth()->user()))
                            <button class="btn btn-primary">
                                Mark as Unwatched
                            </button>
                        @else
                            <button class="btn btn-primary">
                                Mark as Watched
                            </button>
                        @endif
                    </form>
                @endif
            </div>
        </div>

        @if($episode->hasAired())
            <div class="card mb-3">
                <div class="card-body">
                    <h2 class="card-title">Watched by</h2>
                    <p class="text-muted">X people have watched this episode</p>
                    <div class="list-group">
                        ...
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
