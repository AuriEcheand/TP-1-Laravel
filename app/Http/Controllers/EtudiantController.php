<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\Ville;
use Illuminate\Support\Facades\DB;

class EtudiantController extends Controller
{
    //
    public function index()
    {
        $etudiants = DB::table('etudiants')->get();

        return view('etudiants', ['etudiants' => $etudiants]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $villes = Ville::all();
        return view('creerEtudiant', compact('villes'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $etudiant = new Etudiant();
        $etudiant->nom = $request->input('nom');
        $etudiant->adresse = $request->input('adresse');
        $etudiant->phone = $request->input('phone');
        $etudiant->email = $request->input('email');
        $etudiant->date_de_naissance = $request->input('date_de_naissance');
        $etudiant->ville_id = $request->input('ville_id'); 

        $etudiant->save();

        return redirect()->route('etudiants');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        return view('etudiant', compact('etudiant'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        return view('editerEtudiant', compact('etudiant'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $etudiant = Etudiant::findOrFail($id);
        $etudiant->nom = $request->input('nom');
        $etudiant->email = $request->input('email');
        $etudiant->phone = $request->input('phone');
        $etudiant->adresse = $request->input('adresse');
        $etudiant->ville_id = $request->input('ville_id'); // add this line to update ville_id
        $etudiant->save();

        return redirect()->route('etudiant.show', $etudiant->id)->with('succès', 'Etudiant modifié avec succès');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        $etudiant->delete();

        return redirect()->route('etudiants')
            ->with('succès', 'Etudiant supprimé avec succès');
    }
}
