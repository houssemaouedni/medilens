<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class Register_client extends Controller
{
    //
    public function create()
    {
        return view('admin.register.register_client');
    }
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'raison_sociale' => ['required', 'string', 'max:255'],
                'responsable' => ['required', 'string', 'max:255'],
                'adresse' => ['required', 'string', 'max:255'],
                'telephone' => ['required', 'string', 'max:255'],
                'MF' => ['required', 'string', 'max:255'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'role' => '0',
                'raison_sociale' => $request->raison_sociale,
                'MF' => $request->MF,
                'code' => $request->code,
                'adresse' => $request->adresse,
                'telephone' => $request->telephone,
                'fax' => $request->fax,
                'responsable' => $request->responsable,
                'password' => Hash::make($request->password),
            ]);
            return redirect()->route('admin')->with('success', 'Client ajouté avec succès');
        } catch (\Throwable $th) {
            return redirect()->route('register_client')->with('error', 'Erreur lors de l\'ajout du client');
        }


    }
}
