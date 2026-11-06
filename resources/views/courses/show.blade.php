@extends('layouts.app')

@section('title', $course->code)
@section('heading', $course->code)

@section('content')
    <article class="course-detail">
        <div class="course-head">
            <span class="code">{{ $course->code }}</span>
            <h2>{{ $course->name }}</h2>
        </div>

        <dl class="course-facts">
            <div><dt>Credits</dt><dd>{{ $course->credits }}</dd></div>
            <div><dt>Prerequisites</dt><dd>{{ $course->prerequisites ?? 'None' }}</dd></div>
        </dl>

        <p class="course-text">{{ $course->description }}</p>

        <a href="{{ route('courses.index') }}" class="btn btn-outline"><svg class="icon"><use href="#i-left"/></svg>All courses</a>
    </article>
@endsection
