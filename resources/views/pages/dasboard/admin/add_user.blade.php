@extends('layouts.admin')
@section('title', 'Add User Directory - Anandham Mindcare')
@section('content')
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "on-tertiary": "#ffffff",
                        "tertiary-fixed": "#cae7f6",
                        "surface-container-lowest": "#ffffff",
                        "surface-container": "#eceef1",
                        "on-error-container": "#93000a",
                        "secondary-fixed-dim": "#f0c12c",
                        "outline-variant": "#c4c6d1",
                        "on-primary": "#ffffff",
                        "on-tertiary-fixed-variant": "#2f4a57",
                        "tertiary-fixed-dim": "#aecbda",
                        "secondary-fixed": "#ffdf90",
                        "on-secondary-fixed-variant": "#584400",
                        "inverse-primary": "#acc7ff",
                        "surface-container-highest": "#e0e3e6",
                        "primary-fixed": "#d8e2ff",
                        "tertiary": "#0c2a35",
                        "on-primary-fixed-variant": "#28467b",
                        "primary-container": "#1b3b6f",
                        "on-tertiary-fixed": "#001f2a",
                        "secondary-container": "#fccc38",
                        "secondary": "#755b00",
                        "surface-bright": "#f7f9fc",
                        "inverse-surface": "#2d3133",
                        "surface": "#f7f9fc",
                        "on-primary-container": "#8aa7e1",
                        "on-error": "#ffffff",
                        "surface-variant": "#e0e3e6",
                        "on-tertiary-container": "#8fabba",
                        "on-secondary-fixed": "#241a00",
                        "on-primary-fixed": "#001a41",
                        "primary-fixed-dim": "#acc7ff",
                        "on-surface": "#191c1e",
                        "on-secondary": "#ffffff",
                        "surface-tint": "#415e94",
                        "error": "#ba1a1a",
                        "background": "#f7f9fc",
                        "inverse-on-surface": "#eff1f4",
                        "surface-dim": "#d8dadd",
                        "on-background": "#191c1e",
                        "primary": "#002555",
                        "surface-container-high": "#e6e8eb",
                        "surface-container-low": "#f2f4f7",
                        "outline": "#747780",
                        "on-surface-variant": "#43474f",
                        "on-secondary-container": "#6f5600",
                        "error-container": "#ffdad6",
                        "tertiary-container": "#25404c"
                    },
                    fontFamily: {
                        "headline": ["Newsreader", "serif"],
                        "body": ["Work Sans", "sans-serif"],
                        "label": ["Work Sans", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    animation: {
                        'fade-in-up': 'fadeInUp 0.6s ease-out forwards',
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(10px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body { font-family: 'Work Sans', sans-serif; }
        h1, h2, h3 { font-family: 'Newsreader', serif; }
        
        .premium-input-group:focus-within label {
            color: theme('colors.primary');
        }
        .premium-input-group input:focus {
            background-color: white;
            box-shadow: 0 4px 12px -2px rgba(0, 37, 85, 0.05);
        }
        .stagger-1 { animation-delay: 0.1s; }
        .stagger-2 { animation-delay: 0.2s; }
        .stagger-3 { animation-delay: 0.3s; }
        .stagger-4 { animation-delay: 0.4s; }
    </style>
<div class="pt-28 px-8 pb-12 space-y-12">
<!-- Header Section -->
<div class="mb-14 flex flex-col md:flex-row md:items-end justify-between gap-6 opacity-0 animate-fade-in-up">
<div class="flex-1">
<p class="text-secondary font-label text-xs uppercase tracking-[0.2em] font-bold mb-3">Institutional Stewardship</p>
<h2 class="text-5xl font-headline font-bold text-primary tracking-tight leading-tight">{{ isset($user) ? 'Edit Clinical User' : 'Create Clinical User' }}</h2>
</div>
<div class="hidden lg:block">
<div class="relative">
<img alt="Institutional Detail" class="w-28 h-28 rounded-2xl object-cover shadow-2xl shadow-primary/5 grayscale opacity-80" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBhuxLkysiDVMna-fAVwXffkMUQQy_wNQy-_l_Os2n3OApSBAztwCeWLXhHMwZa5KrcafcsaIP7kgunIx1PJg9ME-_Iz3MiLTlDzLslsdcAXVbm7mGR_Ag-upUsLtpucCdr0EAEX4B9vXQgzX98tkNBaNQ4tGaTFnLXdoJ6_HDG8rkNG0O14YbAIqEyG5V6HbHFbVNTD4Ey4K6ERO6HIQ4dIOp7biSVWU65zDdDdXqVWBWBrVEqUxkDYiDVC7QcZ6euLeSJnJiHox-F"/>
<div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-black/5"></div>
</div>
</div>
</div>

<div class="bg-surface-container-lowest rounded-xl border border-outline-variant/15 overflow-hidden transition-all duration-300">
<div class="p-10">
<form method="POST" action="{{ isset($user) ? route('admin.users.update', $user->id) : route('users.store') }}">
    @csrf

    @if(isset($user))
        @method('POST')
    @endif
<!-- Form Section: Identity -->
<div class="space-y-8">
<div class="border-l-4 border-primary/20 pl-4">
<h3 class="font-headline text-xl font-bold text-primary">Identity</h3>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-10">
<div class="space-y-1">
<label class="block font-label text-xs font-bold text-primary tracking-wide" for="full_name">FULL NAME</label>
<input class="w-full bg-surface-container-low border-0 border-b-2 border-surface-container-high focus:border-secondary focus:ring-0 transition-all font-body text-lg py-3 px-0" id="full_name" name="name" value="{{ old('name', isset($user) ? $user->name : '') }}" placeholder="e.g. Dr. Sarah Jenkins" type="text"/>
</div>
<div class="space-y-1">
<label class="block font-label text-xs font-bold text-primary tracking-wide" for="email">EMAIL ADDRESS</label>
<input class="w-full bg-surface-container-low border-0 border-b-2 border-surface-container-high focus:border-secondary focus:ring-0 transition-all font-body text-lg py-3 px-0" id="email" name="email" value="{{ old('email', isset($user) ? $user->email : '') }}" placeholder="sarah.j@anandham.com" type="email"/>
</div>
</div>
</div>
<!-- Form Section: Clinical Designation -->
<div class="space-y-8">
<div class="border-l-4 border-primary/20 pl-4">
<h3 class="font-headline text-xl font-bold text-primary">Clinical Designation</h3>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-10">
<div class="space-y-1">
<label class="block font-label text-xs font-bold text-primary tracking-wide" for="role">
    USER ROLE
</label>

<div class="relative">
    <select
        class="w-full bg-surface-container-low border-0 border-b border-surface-container-highest focus:border-primary focus:ring-0 appearance-none transition-all font-body text-lg py-3 px-4 pr-10 cursor-pointer rounded-t-lg"
        id="role"
        name="role">

        <option value="">Select Role</option>

        @foreach($tags as $tag)
            <option
                value="{{ $tag->name }}"
                {{ old('role', $user->role ?? '') == $tag->name ? 'selected' : '' }}>
                {{ ucfirst($tag->name) }}
            </option>
        @endforeach

    </select>

    <span class="material-symbols-outlined absolute right-0 top-4 pointer-events-none text-slate-400">
        expand_more
    </span>
</div>
</div>

<div class="space-y-1">
<label class="block font-label text-xs font-bold text-primary tracking-wide" for="specialization">CLINICAL SPECIALIZATION</label>
<input class="w-full bg-surface-container-low border-0 border-b-2 border-surface-container-high focus:border-secondary focus:ring-0 transition-all font-body text-lg py-3 px-0" id="specialization" name="specialization" value="{{ old('specialization', isset($user) ? $user->specialization : '') }}" placeholder="e.g. Cognitive Behavioral Therapy" type="text"/>
</div>
</div>
<div class="grid grid-cols-1 gap-10">
<div class="space-y-1">
<label class="block font-label text-xs font-bold text-primary tracking-wide" for="license_number">PROFESSIONAL LICENSE NUMBER</label>
<input class="w-full bg-surface-container-low border-0 border-b-2 border-surface-container-high focus:border-secondary focus:ring-0 transition-all font-body text-lg py-3 px-0" id="license_number" name="license_number" value="{{ old('license_number', isset($user) ? $user->license_number : '') }}" placeholder="e.g. LIC-9876543210" type="text"/>
</div>
</div>
</div>
<!-- Form Section: Contact Details -->
<div class="space-y-8">
<div class="border-l-4 border-primary/20 pl-4">
<h3 class="font-headline text-xl font-bold text-primary">Contact Details</h3>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-10">
<div class="space-y-1">
<label class="block font-label text-xs font-bold text-primary tracking-wide" for="phone">PHONE NUMBER</label> 
<input class="w-full bg-surface-container-low border-0 border-b-2 border-surface-container-high focus:border-secondary focus:ring-0 transition-all font-body text-lg py-3 px-0" id="phone" name="phone" value="{{ old('phone', isset($user) ? $user->phone : '') }}" placeholder=" 98765 43210
" type="tel"/>
</div>
<div class="space-y-1">
<label class="block font-label text-xs font-bold text-primary tracking-wide" for="address">STREET ADDRESS</label>
<input class="w-full bg-surface-container-low border-0 border-b-2 border-surface-container-high focus:border-secondary focus:ring-0 transition-all font-body text-lg py-3 px-0" id="address" name="address" value="{{ old('address', isset($user) ? $user->address : '') }}" placeholder="123 Clinical Way" type="text"/>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-10">
<div class="space-y-1">
<label class="block font-label text-xs font-bold text-primary tracking-wide" for="city">CITY</label>
<input class="w-full bg-surface-container-low border-0 border-b-2 border-surface-container-high focus:border-secondary focus:ring-0 transition-all font-body text-lg py-3 px-0" id="city" name="city" value="{{ old('city', isset($user) ? $user->city : '') }}" placeholder="Healthcare City" type="text"/>
</div>
<div class="space-y-1">
<label class="block font-label text-xs font-bold text-primary tracking-wide" for="state">STATE</label>
<input class="w-full bg-surface-container-low border-0 border-b-2 border-surface-container-high focus:border-secondary focus:ring-0 transition-all font-body text-lg py-3 px-0" id="state" name="state" value="{{ old('state', isset($user) ? $user->state : '') }}" placeholder="State" type="text"/>
</div>
<div class="space-y-1">
<label class="block font-label text-xs font-bold text-primary tracking-wide" for="zip">ZIP CODE</label>
<input class="w-full bg-surface-container-low border-0 border-b-2 border-surface-container-high focus:border-secondary focus:ring-0 transition-all font-body text-lg py-3 px-0" id="zip" name="zip" value="{{ old('zip', isset($user) ? $user->zip : '') }}" placeholder="00000" type="text"/>
</div>
</div>
</div>
<!-- Form Section: Status & Toggle -->

<!-- Hidden input (this goes to backend) -->
<input type="hidden" name="status" id="status" value="{{ old('status', $user->status ?? 1) }}">

<div class="bg-surface-container-low p-6 rounded-lg flex items-center justify-between">
    
    <div class="flex items-center gap-4">
        <div class="p-3 bg-white rounded-full text-secondary">
            <span class="material-symbols-outlined">verified_user</span>
        </div>
        <div>
            <h4 class="font-headline text-xl font-semibold text-primary">Account Status</h4>
            <p class="font-body text-sm text-on-surface-variant">
                Active users can access patient records immediately
            </p>
        </div>
    </div>

    <div class="flex items-center">
        <span class="mr-3 font-label text-sm text-on-surface-variant">Inactive</span>

        <!-- Toggle Button -->
        <button 
            id="statusToggle"
            aria-checked="true"
            type="button"
            class="relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full transition duration-200 ease-in-out bg-primary">

            <span id="toggleCircle"
                class="translate-x-5 inline-block h-5 w-5 transform rounded-full bg-white shadow transition duration-200 ease-in-out">
            </span>
        </button>

        <span class="ml-3 font-label text-sm font-semibold text-primary">Active</span>
    </div>
</div>
<!-- Footer Actions -->
<div class="flex flex-col sm:flex-row items-center justify-end gap-6 pt-8 border-t border-outline-variant/10">
<button class="w-full sm:w-auto px-8 py-3 text-on-surface-variant hover:text-primary font-label text-sm font-semibold transition-colors" type="button">
                                Cancel
                            </button>
<button class="w-full sm:w-auto px-10 py-3 bg-gradient-to-r from-primary to-primary-container text-white rounded-xl shadow-lg shadow-primary/15 font-label text-sm font-semibold hover:scale-[1.02] active:scale-95 transition-all" type="submit">
                                Save User
                            </button>
</div>
</form>
</div>
</div>

</div>

<script>
    const toggle = document.getElementById('statusToggle');
    const circle = document.getElementById('toggleCircle');
    const statusInput = document.getElementById('status');

    function updateToggleUI() {
    if (isActive) {
        toggle.classList.add('bg-primary');
        toggle.classList.remove('bg-gray-300');
        circle.classList.add('translate-x-5');
        circle.classList.remove('translate-x-0');
    } else {
        toggle.classList.remove('bg-primary');
        toggle.classList.add('bg-gray-300');
        circle.classList.remove('translate-x-5');
        circle.classList.add('translate-x-0');
    }
}

updateToggleUI();

    let isActive = true; // default ON

    toggle.addEventListener('click', () => {
        let isActive = {{ isset($user) ? ($user->status ? 'true' : 'false') : 'true' }};

        // Update backend value
        statusInput.value = isActive ? 1 : 0;

        // Update UI
        toggle.setAttribute('aria-checked', isActive);

        if (isActive) {
            toggle.classList.remove('bg-gray-300');
            toggle.classList.add('bg-primary');
            circle.classList.remove('translate-x-0');
            circle.classList.add('translate-x-5');
        } else {
            toggle.classList.remove('bg-primary');
            toggle.classList.add('bg-gray-300');
            circle.classList.remove('translate-x-5');
            circle.classList.add('translate-x-0');
        }
    });
</script>
@endsection