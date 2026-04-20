<h2 class="text-xl font-bold mb-4">
    Courses on {{ \Carbon\Carbon::parse($date)->format('F d, Y') }}
</h2>

@forelse($courses as $course)
<div class="p-4 border rounded-lg mb-3">
    <h4 class="font-semibold">{{ $course->title }}</h4>
    <p class="text-sm text-gray-500">
        Enrolled: {{ $course->enrollments_count }} / {{ $course->capacity }}
    </p>
</div>
@empty
<p>No courses scheduled.</p>
@endforelse