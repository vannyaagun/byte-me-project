<?php
// app/Http/Controllers/RegisterController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function show()
    {
        return view('register');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'first-name' => 'required|string|max:50',
            'last-name' => 'required|string|max:50',
            'identity_number' => 'required|string|max:20|unique:pengguna,identity_number',
            'phone' => 'required|string|max:15',
            'email' => 'required|email|unique:pengguna,email',
            'password' => 'required|min:8|confirmed',
        ]);

        User::create([
            'first_name' => $request->input('first-name'),
            'last_name' => $request->input('last-name'),
            'identity_number' => $request->input('identity_number'),
            'phone' => '+62' . ltrim($request->input('phone'), '0'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->route('data.diri')->with('success', 'Registrasi berhasil!');
    }
}
