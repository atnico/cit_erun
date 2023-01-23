<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('user/profile', [
            'user' => $user,
        ]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    
        public function update(Request $request, $id)
{

    $user = User::findOrFail($id);
    $validatedData = $request->validate([
        'pseudo' => 'required|max:255',
        'rue' => 'required|max:255',
        'code_postal' => 'required|max:255',
        'ville' => 'required|max:255',
        'email' => 'required|min:6|max:50'
    ]);

    $user->pseudo = $validatedData['pseudo'];
    $user->rue = $validatedData['rue'];
    $user->code_postal = $validatedData['code_postal'];
    $user->ville = $validatedData['ville'];
    $user->email = $validatedData['email'];
    $user->save();

    return redirect()->route('user.show', [
        'user'=> $user
    ])->with('message', 'L\'utilisateur a été mis à jour avec succès.');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
