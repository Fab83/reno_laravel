<x-layout>
    <div class="container mx-auto mt-5 p-5">
        <div class="flex justify-center">
            <div class="w-8/12 bg-white p-6 rounded-lg">
                <h1 class="text-3xl font-bold text-red-500 mb-5">Modifier Contact</h1>
                <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <label for="nom" class="block text-gray-700">Nom</label>
                        <input type="text" name="nom" id="nom" placeholder="Nom" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" value="{{ $contact->nom }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="prenom" class="block text-gray-700">Prénom</label>
                        <input type="text" name="prenom" id="prenom" placeholder="Prénom" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" value="{{ $contact->prenom }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="statut" class="block text-gray-700">Statut</label>
                        <select name="statut" id="statut" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" required>
                            <option value="Propriétaire Occupant" {{ $contact->statut == 'Propriétaire Occupant' ? 'selected' : '' }}>Propriétaire Occupant</option>
                            <option value="Propriétaire Bailleur" {{ $contact->statut == 'Propriétaire Bailleur' ? 'selected' : '' }}>Propriétaire Bailleur</option>
                            <option value="Locataire" {{ $contact->statut == 'Locataire' ? 'selected' : '' }}>Locataire</option>
                            <option value="Occupant gratuit" {{ $contact->statut == 'Occupant gratuit' ? 'selected' : '' }}>Occupant gratuit</option>
                            <option value="Usufruitier" {{ $contact->statut == 'Usufruitier' ? 'selected' : '' }}>Usufruitier</option>
                            <option value="Autre" {{ $contact->statut == 'Autre' ? 'selected' : '' }}>Autre</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="adresse_proprietaire" class="block text-gray-700">Adresse Propriétaire</label>
                        <input type="text" name="adresse_proprietaire" id="adresse_proprietaire" placeholder="Adresse Propriétaire" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" value="{{ $contact->adresse_proprietaire }}" required>
                    </div>
                    <div class="mb-4">
                        <label for="commune_proprietaire" class="block text-gray-700">Commune Propriétaire</label>
                        <select name="commune_proprietaire" id="commune_proprietaire" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" required>
                            <option value="Les Adrets de l'Esterel" {{ $contact->commune_proprietaire == "Les Adrets de l'Esterel" ? 'selected' : '' }}>Les Adrets de l'Esterel</option>
                            <option value="Fréjus" {{ $contact->commune_proprietaire == "Fréjus" ? 'selected' : '' }}>Fréjus</option>
                            <option value="Puget-sur-Argens" {{ $contact->commune_proprietaire == 'Puget-sur-Argens' ? 'selected' : '' }}>Puget-sur-Argens</option>
                            <option value="Roquebrune-sur-Argens" {{ $contact->commune_proprietaire == 'Roquebrune-sur-Argens' ? 'selected' : '' }}>Roquebrune-sur-Argens</option>
                            <option value="Saint-Raphaël" {{ $contact->commune_proprietaire == 'Saint-Raphaël' ? 'selected' : '' }}>Saint-Raphaël</option>
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
                    <div>
                        <button type="submit" class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full">Mettre à jour</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>