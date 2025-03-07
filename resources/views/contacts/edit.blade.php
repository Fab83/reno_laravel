<x-layout>
    <div class="container mx-auto mt-5 p-5">
        <div class="flex justify-center">
            <div class="w-8/12 bg-white p-6 rounded-lg">
                <h1 class="text-3xl font-bold text-red-500 mb-5">Modifier Contact</h1>
                <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4 flex space-x-4">
                        <div class="w-1/3">
                            <label for="nom" class="block text-gray-700">Nom</label>
                            <input type="text" name="nom" id="nom" placeholder="Nom" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" value="{{ $contact->nom }}" required>
                        </div>
                        <div class="w-1/3">
                            <label for="prenom" class="block text-gray-700">Prénom</label>
                            <input type="text" name="prenom" id="prenom" placeholder="Prénom" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" value="{{ $contact->prenom }}" required>
                        </div>
                        <div class="w-1/3">
                            <label for="type" class="block text-gray-700">Type</label>
                            <select name="type" id="type" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" required>
                                <option value="Propriétaire" {{ $contact->type == 'Propriétaire' ? 'selected' : '' }}>Propriétaire</option>
                                <option value="Locataire" {{ $contact->type == 'Locataire' ? 'selected' : '' }}>Locataire</option>
                                <option value="Bailleur" {{ $contact->type == 'Bailleur' ? 'selected' : '' }}>Bailleur</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-4 flex space-x-4">
                        <div class="w-2/3">
                            <label for="adresse_proprietaire" class="block text-gray-700">Adresse Propriétaire</label>
                            <input type="text" name="adresse_proprietaire" id="adresse_proprietaire" placeholder="Adresse Propriétaire" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" value="{{ $contact->adresse_proprietaire }}">
                        </div>
                        <div class="w-1/3">
                            <label for="statut" class="block text-gray-700">Statut</label>
                            <select name="statut" id="statut" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" required>
                                <option value="Propriétaire Occupant" {{ $contact->statut == 'Propriétaire Occupant' ? 'selected' : '' }}>Propriétaire Occupant</option>
                                <option value="Propriétaire Bailleur" {{ $contact->statut == 'Propriétaire Bailleur' ? 'selected' : '' }}>Propriétaire Bailleur</option>
                                <option value="Locataire" {{ $contact->statut == 'Locataire' ? 'selected' : '' }}>Locataire</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="commune_proprietaire" class="block text-gray-700">Commune Propriétaire</label>
                        <select name="commune_proprietaire" id="commune_proprietaire" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2">
                            <option value="Adrets de l'Esterel" {{ $contact->commune_proprietaire == "Adrets de l'Esterel" ? 'selected' : '' }}>Adrets de l'Esterel</option>
                            <option value="Fréjus" {{ $contact->commune_proprietaire == 'Fréjus' ? 'selected' : '' }}>Fréjus</option>
                            <option value="Puget-sur-Argens" {{ $contact->commune_proprietaire == 'Puget-sur-Argens' ? 'selected' : '' }}>Puget-sur-Argens</option>
                            <option value="Roquebrune-sur-Argens" {{ $contact->commune_proprietaire == 'Roquebrune-sur-Argens' ? 'selected' : '' }}>Roquebrune-sur-Argens</option>
                            <option value="Saint-Raphael" {{ $contact->commune_proprietaire == 'Saint-Raphael' ? 'selected' : '' }}>Saint-Raphael</option>
                            <option value="DPVA" {{ $contact->commune_proprietaire == 'DPVA' ? 'selected' : '' }}>DPVA</option>
                            <option value="CCPF" {{ $contact->commune_proprietaire == 'CCPF' ? 'selected' : '' }}>CCPF</option>
                            <option value="Autre" {{ $contact->commune_proprietaire == 'Autre' ? 'selected' : '' }}>Autre</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" value="{{ $contact->email }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="telephone" class="block text-gray-700">Téléphone</label>
                        <input type="text" name="telephone" id="telephone" placeholder="Téléphone" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" value="{{ $contact->telephone }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="acces_numerique" class="block text-gray-700">Accès Numérique</label>
                        <input type="text" name="acces_numerique" id="acces_numerique" placeholder="Accès Numérique" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" value="{{ $contact->acces_numerique }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="tierce_personne" class="block text-gray-700">Tierce Personne</label>
                        <select name="tierce_personne" id="tierce_personne" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" required>
                            <option value="1" {{ $contact->tierce_personne ? 'selected' : '' }}>Oui</option>
                            <option value="0" {{ !$contact->tierce_personne ? 'selected' : '' }}>Non</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="tierce_personne_nom" class="block text-gray-700">Nom de la Tierce Personne</label>
                        <input type="text" name="tierce_personne_nom" id="tierce_personne_nom" placeholder="Nom de la Tierce Personne" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" value="{{ $contact->tierce_personne_nom }}">
                    </div>
                    <div class="mb-4">
                        <label for="tierce_personne_prenom" class="block text-gray-700">Prénom de la Tierce Personne</label>
                        <input type="text" name="tierce_personne_prenom" id="tierce_personne_prenom" placeholder="Prénom de la Tierce Personne" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" value="{{ $contact->tierce_personne_prenom }}">
                    </div>
                    <div class="mb-4">
                        <label for="rfr" class="block text-gray-700">RFR</label>
                        <input type="text" name="rfr" id="rfr" placeholder="RFR" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" value="{{ $contact->rfr }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="annee_rfr" class="block text-gray-700">Année RFR</label>
                        <input type="text" name="annee_rfr" id="annee_rfr" placeholder="Année RFR" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" value="{{ $contact->annee_rfr }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="nb_adultes" class="block text-gray-700">Nombre d'Adultes</label>
                        <input type="number" name="nb_adultes" id="nb_adultes" placeholder="Nombre d'Adultes" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" value="{{ $contact->nb_adultes }}" required>
                    </div>
                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Mettre à jour</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>