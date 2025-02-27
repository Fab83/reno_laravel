<x-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Créer Contact
        </h2>
    </x-slot>
    <div class="container mx-auto mt-5 p-5">
        <h2 class="text-2xl font-bold mb-5">Créer Contact</h2>
        <form action="{{ route('contacts.store') }}" method="POST">
            @csrf
            <div class="mb-4 flex space-x-4">
            <div class="w-1/2">
                <label for="nom" class="block text-gray-700">Nom</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="nom" name="nom" required>
            </div>
            <div class="w-1/2">
                <label for="prenom" class="block text-gray-700">Prénom</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="prenom" name="prenom" required>
            </div>
            </div>

            <div class="mb-4">
                <label for="statut" class="block text-gray-700">Statut</label>
                <select class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="statut" name="statut" required>
                    <option value="Propriétaire Occupant">Propriétaire Occupant</option>
                    <option value="Propriétaire Bailleur">Propriétaire Bailleur</option>
                    <option value="Locataire">Locataire</option>
                </select>
            </div>
            <div class="mb-4 flex space-x-4">
                <div class="w-1/2">
                    <label for="adresse_proprietaire" class="block text-gray-700">Adresse Propriétaire</label>
                    <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="adresse_proprietaire" name="adresse_proprietaire">
                </div>
                <div class="w-1/2">
                    <label for="commune_proprietaire" class="block text-gray-700">Commune Propriétaire</label>
                    <select class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="commune_proprietaire" name="commune_proprietaire">
                        <option value="Adrets de l'Esterel">Adrets de l'Esterel</option>
                        <option value="Fréjus">Fréjus</option>
                        <option value="Puget-sur-Argens">Puget-sur-Argens</option>
                        <option value="Roquebrune-sur-Argens">Roquebrune-sur-Argens</option>
                        <option value="Saint-Raphael">Saint-Raphael</option>
                        <option value="DPVA">DPVA</option>
                        <option value="CCPF">CCPF</option>
                        <option value="Autre">Autre</option>
                    </select>
                </div>
            </div>
            <div class="mb-4 flex space-x-4">
                <div class="w-1/2">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="email" name="email" required>
                </div>
                <div class="w-1/2">
                    <label for="telephone" class="block text-gray-700">Téléphone</label>
                    <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="telephone" name="telephone" required>
                </div>
            </div>
            <div class="mb-4 flex space-x-4">
                <div class="w-1/2">
                    <label for="acces_numerique" class="block text-gray-700">Difficultés accès numérique ?</label>
                    <div class="mt-1">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="acces_numerique" value="1">
                            <span class="ml-2">Oui</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio" name="acces_numerique" value="0" checked>
                            <span class="ml-2">Non</span>
                        </label>
                    </div>
                </div>
                <div class="w-1/2">
                    <label for="tierce_personne" class="block text-gray-700">Tierce Personne</label>
                    <div class="mt-1">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="tierce_personne" value="1">
                            <span class="ml-2">Oui</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio" name="tierce_personne" value="0" checked>
                            <span class="ml-2">Non</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="mb-4 flex space-x-4">
                <div class="w-1/2">
                    <label for="tierce_personne_nom" class="block text-gray-700">Nom de la Tierce Personne</label>
                    <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="tierce_personne_nom" name="tierce_personne_nom">
                </div>
                <div class="w-1/2">
                    <label for="tierce_personne_prenom" class="block text-gray-700">Prénom de la Tierce Personne</label>
                    <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="tierce_personne_prenom" name="tierce_personne_prenom">
                </div>
            </div>
            <div class="mb-4 flex space-x-4">
                <div class="w-1/2">
                    <label for="rfr" class="block text-gray-700">RFR en €</label>
                    <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="rfr" name="rfr">
                </div>
                <div class="w-1/2">
                    <label for="annee_rfr" class="block text-gray-700">Année RFR</label>
                    <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="annee_rfr" name="annee_rfr" required>
                </div>
            </div>
            <div class="mb-4 flex space-x-4">
                <div class="w-1/2">
                    <label for="nb_adultes" class="block text-gray-700">Nombre d'Adultes</label>
                    <input type="number" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="nb_adultes" name="nb_adultes" required>
                </div>
                <div class="w-1/2">
                    <label for="nb_enfants" class="block text-gray-700">Nombre d'Enfants</label>
                    <input type="number" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="nb_enfants" name="nb_enfants" required>
                </div>
            </div>
            <div class="mb-4 flex space-x-4">
                <div class="w-1/2">
                    <label for="locataire_annee_entree" class="block text-gray-700">Année d'Entrée (Locataire)</label>
                    <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="locataire_annee_entree" name="locataire_annee_entree">
                </div>
                <div class="w-1/2">
                    <label for="locataire_loyer" class="block text-gray-700">Loyer (Locataire)</label>
                    <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="locataire_loyer" name="locataire_loyer">
                </div>
            </div>
            <div class="mb-4">
                <label for="projet" class="block text-gray-700">Projet</label>
                <textarea class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="projet" name="projet" required></textarea>
            </div>
            <div class="mb-4">
                <label for="financement" class="block text-gray-700">Financement</label>
                <textarea class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="financement" name="financement" required></textarea>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
        </form>
    </div>
</x-layout>
