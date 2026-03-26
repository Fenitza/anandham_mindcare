@extends('layouts.hosp')

@section('content')
<div class="max-w-2xl mx-auto py-16 px-4">
    <h1 class="text-3xl font-headline font-bold text-primary mb-6">Enroll in Course</h1>
    <p class="text-on-surface-variant mb-8">Enrollment form or instructions will appear here.</p>
    <a href="{{ route('courses.detail') }}" class="text-primary underline hover:text-secondary">Back to Course Detail</a>
</div>
@endsection
