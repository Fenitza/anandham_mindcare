@extends('layouts.admin')

@section('title', 'Manage Offers')

@section('content')

<div class="pt-24 px-6 pb-10 max-w-7xl mx-auto space-y-8">


<div>
    <h2 class="text-3xl font-bold text-primary">
        Offer Management
    </h2>

    <p class="text-sm text-gray-500 mt-1">
        Create and manage course discounts and promotional offers.
    </p>
</div>

@include('partials.alerts')

<div class="grid lg:grid-cols-3 gap-8">

    <!-- CREATE OFFER -->
    <div>

        <div class="bg-white rounded-xl shadow border p-6">

            <h3 class="text-lg font-semibold text-primary mb-6">
                Create Offer
            </h3>

            <form action="{{ route('admin.offers.store') }}" method="POST">
                @csrf

                <div class="space-y-4">

                    <div>
                        <label class="block text-sm font-medium mb-2">
                            Offer Name
                        </label>

                        <input
                            type="text"
                            name="name"
                            class="w-full border rounded-lg px-4 py-3"
                            placeholder="Early Bird"
                            required
                        >
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-2">
                            Discount Type
                        </label>

                        <select
                            name="discount_type"
                            class="w-full border rounded-lg px-4 py-3"
                            required
                        >
                            <option value="percentage">
                                Percentage (%)
                            </option>

                            <option value="fixed">
                                Fixed Amount (₹)
                            </option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-2">
                            Discount Value
                        </label>

                        <input
                            type="number"
                            step="0.01"
                            name="discount_value"
                            class="w-full border rounded-lg px-4 py-3"
                            placeholder="20"
                            required
                        >
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-2">
                            Description
                        </label>

                        <textarea
                            name="description"
                            rows="3"
                            class="w-full border rounded-lg px-4 py-3"
                        ></textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-2">
                            Start Date
                        </label>

                        <input
                            type="date"
                            name="start_date"
                            class="w-full border rounded-lg px-4 py-3"
                        >
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-2">
                            End Date
                        </label>

                        <input
                            type="date"
                            name="end_date"
                            class="w-full border rounded-lg px-4 py-3"
                        >
                    </div>

                    <div class="flex items-center gap-2">
                        <input
                            type="checkbox"
                            name="status"
                            value="1"
                            checked
                        >

                        <span class="text-sm">
                            Active Offer
                        </span>
                    </div>

                    <button
                        type="submit"
                        class="w-full bg-primary text-white py-3 rounded-lg font-medium"
                    >
                        Create Offer
                    </button>

                </div>

            </form>

        </div>

    </div>

    <!-- OFFER LIST -->
    <div class="lg:col-span-2">

        <div class="bg-white rounded-xl shadow border overflow-hidden">

            <div class="px-6 py-4 border-b">
                <h3 class="font-semibold text-primary">
                    Existing Offers
                </h3>
            </div>

            <table class="w-full">

                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-3 text-left">Name</th>
                        <th class="px-4 py-3 text-left">Type</th>
                        <th class="px-4 py-3 text-left">Value</th>
                        <th class="px-4 py-3 text-left">Status</th>
                        <th class="px-4 py-3 text-left">Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($offers as $offer)

                    <tr class="border-t">

                        <form
                            action="{{ route('admin.offers.update', $offer->id) }}"
                            method="POST"
                        >
                            @csrf
                            @method('PUT')

                            <td class="px-4 py-4">
                                <input
                                    type="text"
                                    name="name"
                                    value="{{ $offer->name }}"
                                    class="border rounded px-2 py-1 w-full"
                                >
                            </td>

                            <td class="px-4 py-4">
                                <select
                                    name="discount_type"
                                    class="border rounded px-2 py-1"
                                >
                                    <option value="percentage"
                                        {{ $offer->discount_type == 'percentage' ? 'selected' : '' }}>
                                        %
                                    </option>

                                    <option value="fixed"
                                        {{ $offer->discount_type == 'fixed' ? 'selected' : '' }}>
                                        ₹
                                    </option>
                                </select>
                            </td>

                            <td class="px-4 py-4">
                                <input
                                    type="number"
                                    step="0.01"
                                    name="discount_value"
                                    value="{{ $offer->discount_value }}"
                                    class="border rounded px-2 py-1 w-24"
                                >
                            </td>

                            <td class="px-4 py-4">

                                <input type="hidden" name="status" value="0">

                                <label class="flex items-center gap-2">
                                    <input
                                        type="checkbox"
                                        name="status"
                                        value="1"
                                        {{ $offer->status ? 'checked' : '' }}
                                    >

                                    <span class="text-sm">
                                        {{ $offer->status ? 'Active' : 'Inactive' }}
                                    </span>
                                </label>

                            </td>

                            <td class="px-4 py-4 flex gap-2">

                                <button
                                    type="submit"
                                    class="bg-blue-600 text-white px-3 py-1 rounded text-sm"
                                >
                                    Update
                                </button>

                        </form>

                        <form
                            action="{{ route('admin.offers.destroy', $offer->id) }}"
                            method="POST"
                            onsubmit="return confirm('Delete this offer?')"
                        >
                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="bg-red-600 text-white px-3 py-1 rounded text-sm"
                            >
                                Delete
                            </button>

                        </form>

                            </td>

                    </tr>

                    @empty

                    <tr>
                        <td colspan="5" class="text-center py-8 text-gray-500">
                            No offers created yet.
                        </td>
                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>


</div>

@endsection
