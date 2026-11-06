@extends('layouts.app')

@section('title', 'Faculty/Staff Directory')
@section('heading', 'Faculty/Staff Directory')

@section('content')
    <div class="staff-list">
        @foreach ($staff as $member)
            <article class="staff-card">
                @if (file_exists(public_path($member['photo'])))
                    <img src="{{ asset($member['photo']) }}" alt="{{ $member['name'] }}" class="avatar">
                @else
                    <div class="avatar initials" aria-hidden="true">{{ collect(explode(' ', $member['name']))->map(fn($w) => $w[0])->take(2)->implode('') }}</div>
                @endif

                <div class="staff-info">
                    <h2>{{ $member['name'] }}</h2>
                    <p class="role">{{ $member['title'] }}</p>
                    <p>{{ $member['phone'] }}</p>
                    <p>{{ $member['email'] }}</p>

                    <div class="actions">
                        <a href="tel:{{ $member['phone'] }}" class="btn"><svg class="icon"><use href="#i-phone"/></svg>Call</a>
                        <a href="mailto:{{ $member['email'] }}" class="btn btn-outline"><svg class="icon"><use href="#i-mail"/></svg>Email</a>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
@endsection
