<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function index()
    {
        $offers = Offer::latest()->get();

        return view('pages.dasboard.admin.add_offers', compact('offers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'            => 'required|string|max:255|unique:offers,name',
            'discount_type'   => 'required|in:percentage,fixed',
            'discount_value'  => 'required|numeric|min:0',
            'description'     => 'nullable|string',
            'status'          => 'nullable|boolean',
        ]);

        Offer::create([
            'name'            => $validated['name'],
            'discount_type'   => $validated['discount_type'],
            'discount_value'  => $validated['discount_value'],
            'description'     => $validated['description'] ?? null,
            'status'          => $request->boolean('status'),
        ]);

        return back()->with('success', 'Offer created successfully.');
    }

    public function update(Request $request, Offer $offer)
    {
        $validated = $request->validate([
            'name'            => 'required|string|max:255|unique:offers,name,' . $offer->id,
            'discount_type'   => 'required|in:percentage,fixed',
            'discount_value'  => 'required|numeric|min:0',
            'description'     => 'nullable|string',
            'status'          => 'nullable|boolean',
        ]);

        $offer->update([
            'name'            => $validated['name'],
            'discount_type'   => $validated['discount_type'],
            'discount_value'  => $validated['discount_value'],
            'description'     => $validated['description'] ?? null,
            'status'          => $request->boolean('status'),
        ]);

        return back()->with('success', 'Offer updated successfully.');
    }

    public function destroy(Offer $offer)
    {
        $offer->delete();

        return back()->with('success', 'Offer deleted successfully.');
    }
}