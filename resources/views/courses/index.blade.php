@extends('layouts.app')

@section('title', 'Courses')
@section('heading', 'Courses')

@section('content')
    <div class="course-list">
        @foreach ($courses as $course)
            <a href="{{ route('courses.show', $course) }}" class="course-card">
                <span class="code">{{ $course->code }}</span>
                <span class="course-body">
                    <h2>{{ $course->name }}</h2>
                    <p>{{ $course->prerequisites ? 'Prerequisite: ' . $course->prerequisites : 'No prerequisites' }}</p>
                </span>
                <span class="course-credits">{{ $course->credits }} credits</span>
            </a>
        @endforeach
    </div>
@endsection
