<?php

namespace App\Http\Controllers;

use App\Models\BusinessCard;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Str; // untuk membuat slug


class BusinessCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cards = BusinessCard::all();
        return view('business_cards.index', compact('cards'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('business_cards.create');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'photo' => 'required|image',
            'position' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
        ]);

        // Upload foto
        $photoPath = $request->file('photo')->store('photo', 'public'); // Simpan foto ke storage/public/avatars

        BusinessCard::create([
            'name' => $request->name,
            'photo' => $photoPath, // Simpan path foto di database
            'position' => $request->position,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
        ]);

        return redirect()->route('admin.business-cards.index')->with('success', 'Kartu nama berhasil ditambahkan.');
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $card = BusinessCard::find($id); // Mendapatkan data kartu nama dari database
        return view('business_cards.show', compact('card')); // Kirim data ke view
    }




    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $card = BusinessCard::findOrFail($id);
        return view('business_cards.edit', compact('card'));
    }

    public function adminIndex()
    {
        $cards = BusinessCard::all(); // Mengambil semua data kartu nama
        return view('admin.business_cards.index', compact('cards'));
    }


    public function showByUsername($username)
    {
        $card = BusinessCard::where('name', $username)->firstOrFail();
        return view('business_cards.show', compact('card'));
    }


    public function showByName($name)
    {
        $card = BusinessCard::where('name', $name)->firstOrFail(); // Cari kartu nama berdasarkan nama
        return view('business_cards.vcard', compact('card'));
    }




    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $card = BusinessCard::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'photo' => 'nullable|image',
            'position' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
        ]);

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
            $card->photo = $photoPath;
        }

        $card->update([
            'name' => $request->name,
            'position' => $request->position,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
        ]);

        return redirect()->route('business-cards.index')->with('success', 'Kartu nama berhasil diperbarui.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $card = BusinessCard::findOrFail($id);
        $card->delete();

        return redirect()->route('admin.business-cards.index')->with('success', 'Kartu nama berhasil dihapus.');
    }


}
