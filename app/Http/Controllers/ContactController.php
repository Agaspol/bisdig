<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\Contact;

// class ContactController extends Controller
// {
//     public function create(Request $request)
//     {
//         // Validasi request
//         $request->validate([
//             'nama' => 'required|string',
//             'email' => 'required|email',
//             'pesan' => 'required|string',
//         ]);

//         // Simpan data ke database
//         $contact = new Contact();
//         $contact->nama = $request->nama;
//         $contact->email = $request->email;
//         $contact->pesan = $request->pesan;
//         $contact->save();

//         return redirect()->route('home')->with(['success' => 'Data Berhasil!']);

//         // Redirect atau beri respons sesuai kebutuhan
//         // return response()->back()->with('success', 'Pesan berhasil dikirim!');

//         // return response()->json(['success' => true]);

//     }
//     public function show($id)
// {
//     $contacts = Contact::findOrFail($id); // Mengambil semua data kontak dari model Contact

//         return view('contacts.show', compact('contacts'));

// }

// }
