<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $contact = new Contact();
        $contact->nom = $request->nom;
        $contact->prenom = $request->prenom;
        $contact->statut = $request->statut;
        $contact->adresse_proprietaire = $request->adresse_proprietaire;
        $contact->commune_proprietaire = $request->commune_proprietaire;
        $contact->email = $request->email;
        $contact->telephone = $request->telephone;
        $contact->acces_numerique = $request->acces_numerique;
        $contact->tierce_personne = $request->tierce_personne;
        $contact->tierce_personne_nom = $request->tierce_personne_nom;
        $contact->tierce_personne_prenom = $request->tierce_personne_prenom;
        $contact->save();
        return redirect()->route('contacts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->nom = $request->nom;
        $contact->prenom = $request->prenom;
        $contact->statut = $request->statut;
        $contact->adresse_proprietaire = $request->adresse_proprietaire;
        $contact->commune_proprietaire = $request->commune_proprietaire;
        $contact->email = $request->email;
        $contact->telephone = $request->telephone;
        $contact->acces_numerique = $request->acces_numerique;
        $contact->tierce_personne = $request->tierce_personne;
        $contact->tierce_personne_nom = $request->tierce_personne_nom;
        $contact->tierce_personne_prenom = $request->tierce_personne_prenom;
        $contact->save();
        return redirect()->route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect()->route('contacts.index');
    }
}
