@extends('layouts.app')

@section('title', 'Admissions')
@section('heading', 'Admissions')

@section('content')
    <div class="info-card">
        <h2>BSc Information Technology</h2>
        <p>124 credits &bull; Blended, or 100% online via UCC Global</p>
        <p>Four-year programme. Advanced Standing with an Associate degree or equivalent can shorten it by up to two years.</p>
    </div>

    <div class="info-card">
        <h2>Entry Requirements (Jamaican Students)</h2>
        <ul>
            <li>At least <strong>five subjects</strong> at CSEC/GCE, including <strong>English Language</strong> and <strong>Mathematics</strong>, at grades 1&ndash;3 (A&ndash;C). A CSEC Grade 3 must have been earned since 1998.</li>
            <li><strong>Four CXC passes:</strong> you may apply while subjects are outstanding, or take UCC replacement courses (Core Mathematics, English for Academic Purposes, Fundamentals of Accounting).</li>
            <li><strong>Mature Entry:</strong> age 25+ with at least five years of work experience. You'll need academic qualifications, a résumé, a job letter, and three professional references.</li>
        </ul>
    </div>

    <div class="info-card">
        <h2>Honours Programme</h2>
        <p>Students with eight CXC/GCE subjects, including Mathematics and English Language at Grade 1, may qualify for a 25% tuition waiver in the first year.</p>
    </div>

    <div class="info-card">
        <h2>International Students</h2>
        <a href="{{ config('ucc.international_url') }}" target="_blank" rel="noopener noreferrer" class="btn btn-outline">View international requirements</a>
    </div>

    <div class="info-card">
        <h2>More information</h2>
        <a href="{{ config('ucc.structure_url') }}" target="_blank" rel="noopener noreferrer" class="btn btn-outline">Programme structure (PDF)</a>
        <a href="{{ config('ucc.programme_url') }}" target="_blank" rel="noopener noreferrer" class="btn btn-outline">Full programme page</a>
    </div>

    <a href="{{ config('ucc.application_url') }}" target="_blank" rel="noopener noreferrer" class="btn btn-block">
        Apply to UCC &rarr;
    </a>
@endsection
