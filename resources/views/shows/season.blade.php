<?php /** @var \App\Models\Show\Season $season */ ?>
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-0">
            <a href="{{ route('show', $season->show) }}" class="text-muted small">
                {{ $season->show->name }}
            </a>
        </h2>
        <h1>{{ $season->name }}</h1>

        @if($season->episodes)
            <div class="card mb-3">
                <div class="card-body">
                    <h2 class="card-title">Episodes</h2>
                    <div class="list-group">
                        @foreach($season->episodes as $episode)
                            <a href="{{ route('show.episode', $episode) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <span>{{ $episode->name }}</span>
                                <span class="text-muted small">{{ $episode->aired->format('j M Y') }}</span>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
