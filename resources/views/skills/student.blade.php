@extends('backpack::layout')

@section('header')
<section class="content-header">
    <h1>
        @lang('Edit Student Skills')
    </h1>
</section>
@endsection


@section('content')

<div class="row" id="app">
  
    <student-skills-component
        :saved_skills="{{ json_encode($skills) }}"
        :student="{{ json_encode($student) }}"
        :skill_scales="{{ json_encode($skillScales) }}"
        :course="{{ json_encode($course) }}"
        route="{{ route('storeSkillEvaluation') }}">
    </student-skills-component>

    <course-result-component
        :student="{{ json_encode($student) }}"
        :enrollment="{{ json_encode($enrollment) }}"
        :results="{{ json_encode($results) }}"
        :stored_comments="{{ json_encode($result->comments ?? null) }}"
        :result="{{ json_encode($result) }}">
    </course-result-component>


</div>

@endsection


@section('before_scripts')

@endsection


@section('after_scripts')
    <script src="/js/app.js"></script>
@endsection
