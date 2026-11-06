@extends('layouts.app')

@section('title', 'UCC IT Department')
@section('main-class', 'home')

@section('hero')
    <header class="hero">
        <div class="hero-inner">
            <img src="{{ asset('icons/icon-192.png') }}" alt="UCC logo" class="hero-logo">
            <div>
                <p class="hero-uni">University of the Commonwealth Caribbean</p>
                <h1>Department of Information Technology</h1>
                <p class="hero-tag">Staff contacts, courses, and how to apply.</p>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <div class="facts">
        <div><span class="fact-value">124</span><span class="fact-label">credits</span></div>
        <div><span class="fact-value">4 years</span><span class="fact-label">full length</span></div>
        <div><span class="fact-value">Blended</span><span class="fact-label">or 100% online</span></div>
    </div>

    <nav class="menu-grid" aria-label="Main menu">
        <a href="{{ route('directory') }}" class="menu-item">
            <span class="menu-tile"><svg class="icon"><use href="#i-people"/></svg></span>
            <span class="menu-text">
                <span class="menu-title">Faculty/Staff Directory</span>
                <span class="menu-desc">Call or email lecturers and administrators</span>
            </span>
            <svg class="icon chev"><use href="#i-right"/></svg>
        </a>
        <a href="{{ route('courses.index') }}" class="menu-item">
            <span class="menu-tile"><svg class="icon"><use href="#i-book"/></svg></span>
            <span class="menu-text">
                <span class="menu-title">Courses</span>
                <span class="menu-desc">Ten IT courses with credits and prerequisites</span>
            </span>
            <svg class="icon chev"><use href="#i-right"/></svg>
        </a>
        <a href="{{ route('admissions') }}" class="menu-item">
            <span class="menu-tile"><svg class="icon"><use href="#i-cap"/></svg></span>
            <span class="menu-text">
                <span class="menu-title">Admissions</span>
                <span class="menu-desc">Entry requirements and how to apply</span>
            </span>
            <svg class="icon chev"><use href="#i-right"/></svg>
        </a>
        <a href="{{ route('social') }}" class="menu-item">
            <span class="menu-tile"><svg class="icon"><use href="#i-chat"/></svg></span>
            <span class="menu-text">
                <span class="menu-title">Social Media</span>
                <span class="menu-desc">UCC on Facebook, X, and Instagram</span>
            </span>
            <svg class="icon chev"><use href="#i-right"/></svg>
        </a>
    </nav>
@endsection
