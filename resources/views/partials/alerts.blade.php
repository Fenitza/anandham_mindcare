@if(session('success'))
    <div class="mb-6 p-4 rounded-lg bg-green-100 text-green-800 border border-green-200">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="mb-6 p-4 rounded-lg bg-red-100 text-red-800 border border-red-200">
        {{ session('error') }}
    </div>
@endif

@if ($errors->any())
    <div class="mb-6 p-4 rounded-lg bg-red-100 text-red-800 border border-red-200">
        <ul class="list-disc pl-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif