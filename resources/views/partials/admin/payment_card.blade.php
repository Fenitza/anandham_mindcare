<div class="group bg-surface-container-lowest hover:bg-white border border-outline-variant/15 p-6 rounded-xl flex items-start shadow-sm hover:shadow-md transition-all duration-200">

    <!-- ICON -->
    <div class="w-12 h-12 rounded-full bg-surface-container-low flex items-center justify-center mr-6 mt-1">
        <span class="material-symbols-outlined text-primary">person</span>
    </div>

    <!-- DATA GRID -->
    <div class="flex-1 grid grid-cols-5 gap-6 items-start">

        <!-- USER -->
        <div class="flex flex-col gap-1">
            <p class="text-xs text-on-surface-variant uppercase">Student Name</p>
            <p class="font-bold text-primary leading-tight">
                {{ $payment->user->name ?? 'User' }}
            </p>
            <p class="text-xs text-on-surface-variant">
                ID: AM-{{ $payment->id }}
            </p>
        </div>

        <!-- COURSE -->
        <div class="flex flex-col gap-1">
            <p class="text-xs text-on-surface-variant uppercase">Course</p>
            <p class="font-medium leading-tight">
                {{ $payment->course->title ?? 'Course' }}
            </p>
            <p class="text-xs text-secondary italic">
                {{ ucfirst($payment->course->type ?? '') }}
            </p>
        </div>

        <!-- AMOUNT -->
        <div class="flex flex-col gap-1">
            <p class="text-xs text-on-surface-variant uppercase">Amount</p>
            <p class="text-xl font-bold text-primary leading-tight">
                ₹{{ number_format($payment->course->fee ?? 0) }}
            </p>
        </div>

        <!-- SCREENSHOT -->
        <div class="flex flex-col gap-2">
            <p class="text-xs text-on-surface-variant uppercase">Proof</p>

            @if($payment->payment_screenshot)
                <img 
                    src="{{ asset('storage/'.$payment->payment_screenshot) }}"
                    class="w-16 h-16 object-cover rounded-lg border cursor-pointer hover:scale-105 transition"
                    onclick="openImageModal('{{ asset('storage/'.$payment->payment_screenshot) }}')"
                >
            @else
                <span class="text-xs text-gray-400 mt-2">No Image</span>
            @endif
        </div>

        <!-- STATUS -->
        <div class="flex flex-col gap-2">
            <p class="text-xs text-on-surface-variant uppercase">Status</p>

            @if($type === 'pending')
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-amber-100 text-amber-800 w-fit">
                    Awaiting
                </span>
            @elseif($type === 'approved')
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-green-100 text-green-700 w-fit">
                    Approved
                </span>
            @else
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-bold bg-red-100 text-red-700 w-fit">
                    Rejected
                </span>
            @endif
        </div>

    </div>

    <!-- ACTIONS -->
    <div class="flex items-center justify-end space-x-3 ml-6 min-w-[240px]">

        {{-- PENDING --}}
        @if($type === 'pending')

            <form action="{{ route('admin.payments.reject', $payment->id) }}" method="POST">
                @csrf
                <button class="px-4 py-2 text-sm font-bold text-red-600 hover:bg-red-50 rounded-lg flex items-center">
                    <span class="material-symbols-outlined text-lg mr-1">close</span>
                    Reject
                </button>
            </form>

            <form action="{{ route('admin.payments.approve', $payment->id) }}" method="POST">
                @csrf
                <button class="px-6 py-2 bg-primary text-white rounded-lg text-sm font-bold flex items-center hover:opacity-90">
                    <span class="material-symbols-outlined text-lg mr-1">check_circle</span>
                    Approve
                </button>
            </form>

        {{-- APPROVED --}}
        @elseif($type === 'approved')

            <form action="{{ route('admin.payments.reject', $payment->id) }}" method="POST">
                @csrf
                <button class="px-6 py-2 bg-red-100 text-red-700 rounded-lg text-sm font-bold flex items-center">
                    <span class="material-symbols-outlined text-lg mr-1">close</span>
                    Reject
                </button>
            </form>

            <form action="{{ route('admin.payments.revert', $payment->id) }}" method="POST">
                @csrf
                <button class="px-4 py-2 text-sm font-bold text-gray-600 hover:bg-gray-100 rounded-lg flex items-center">
                    <span class="material-symbols-outlined text-lg mr-1">undo</span>
                    Undo
                </button>
            </form>

        {{-- REJECTED --}}
        @elseif($type === 'rejected')

            <form action="{{ route('admin.payments.approve', $payment->id) }}" method="POST">
                @csrf
                <button class="px-6 py-2 bg-green-100 text-green-700 rounded-lg text-sm font-bold flex items-center">
                    <span class="material-symbols-outlined text-lg mr-1">check_circle</span>
                    Approve
                </button>
            </form>

            <form action="{{ route('admin.payments.revert', $payment->id) }}" method="POST">
                @csrf
                <button class="px-4 py-2 text-sm font-bold text-gray-600 hover:bg-gray-100 rounded-lg flex items-center">
                    <span class="material-symbols-outlined text-lg mr-1">undo</span>
                    Undo
                </button>
            </form>

        @endif

    </div>

</div>