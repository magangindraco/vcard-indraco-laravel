<?php

namespace App\Http\Controllers;

use App\Models\BusinessCard;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;
use Str; // untuk membuat slug


class BusinessCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    // Menampilkan semua kartu bisnis
    public function index()
    {
        $businessCards = BusinessCard::all();
        return view('business_cards.index', compact('businessCards'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('Create Method Hit');
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
            'mobile' => 'required',
            'office' => 'required',
            'email' => 'required|email',
        ]);

        // Upload foto
        $photoPath = $request->file('photo')->store('photo', 'public'); // Simpan foto ke storage/public/avatars

        BusinessCard::create([
            'name' => $request->name,
            'photo' => $photoPath, // Simpan path foto di database
            'position' => $request->position,
            'mobile' => $request->mobile,
            'office' => $request->office,
            'email' => $request->email,
        ]);

        return redirect()->route('business-cards.index')->with('success', 'Kartu nama berhasil ditambahkan.');
    }



    /**
     * Display the specified resource.
     */
    // Menampilkan detail kartu bisnis berdasarkan nama
    public function show($name)
    {
        $businessCard = BusinessCard::where('name', $name)->firstOrFail(); // Mendapatkan data kartu nama dari database
        return view('business_cards.show', compact('businessCard')); // Kirim data ke view
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($name)
    {
        $businessCard = BusinessCard::where('name', $name)->firstOrFail(); // Menggunakan where untuk mencari berdasarkan nama
        return view('business_cards.edit', compact('businessCard'));
    }




    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $name) // Ganti $id dengan $name
    {
        $card = BusinessCard::where('name', $name)->firstOrFail(); // Menggunakan where untuk mencari berdasarkan nama

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
    public function destroy($name) // Ganti $id dengan $name
    {
        $card = BusinessCard::where('name', $name)->firstOrFail(); // Menggunakan where untuk mencari berdasarkan nama
        $card->delete();

        return redirect()->route('business-cards.index')->with('success', 'Kartu nama berhasil dihapus.');
    }



}