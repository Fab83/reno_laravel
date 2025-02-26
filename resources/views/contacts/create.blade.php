<x-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Créer Contact
        </h2>
    </x-slot>
    <div class="container mx-auto mt-5 p-5">
        <h2 class="text-2xl font-bold mb-5">Create Contact</h2>
        <form action="{{ route('contacts.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nom" class="block text-gray-700">Nom</label>
                <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="nom" name="nom" required>
            </div>
            <div class="mb-4">
                <label for="prenom" class="block text-gray-700">Prénom</label>
                <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="prenom" name="prenom" required>
            </div>
            <div class="mb-4">
                <label for="statut" class="block text-gray-700">Statut</label>
                <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="statut" name="statut" required>
                    <option value="Propriétaire Occupant">Propriétaire Occupant</option>
                    <option value="Propriétaire Bailleur">Propriétaire Bailleur</option>
                    <option value="Locataire">Locataire</option>
                    <option value="Occupant gratuit">Occupant gratuit</option>
                    <option value="Usufruitier">Usufruitier</option>
                    <option value="Autre">Autre</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="adresse_proprietaire" class="block text-gray-700">Adresse Propriétaire</label>
                <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="adresse_proprietaire" name="adresse_proprietaire" required>
            </div>
            <div class="mb-4">
                <label for="commune_proprietaire" class="block text-gray-700">Commune Propriétaire</label>
                <select class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="commune_proprietaire" name="commune_proprietaire" required>
                    <option value="Les Adrets de l'Esterel">Les Adrets de l'Esterel</option>
                    <option value="Fréjus">Fréjus</option>
                    <option value="Puget-sur-Argens">Puget-sur-Argens</option>
                    <option value="Roquebrune-sur-Argens">Roquebrune-sur-Argens</option>
                    <option value="Saint-Raphaël">Saint-Raphaël</option>
                    <option value="DPVA">DPVA</option>
                    <option value="CCPF">CCPF</option>
                    <option value="Autre">Autre</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="email" name="email" required>
            </div>
            <div class="mb-4">
                <label for="telephone" class="block text-gray-700">Téléphone</label>
                <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="telephone" name="telephone" required>
            </div>
            <div class="mb-4">
                <label for="acces_numerique" class="block text-gray-700">Accès Numérique</label>
                <div class="flex items-center space-x-4">
                    <div class="flex items-center">
                        <input type="radio" class="mr-2 leading-tight" id="acces_numerique_oui" name="acces_numerique" value="1" required>
                        <label for="acces_numerique_oui" class="text-gray-700">Oui</label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" class="mr-2 leading-tight" id="acces_numerique_non" name="acces_numerique" value="0" required>
                        <label for="acces_numerique_non" class="text-gray-700">Non</label>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <label for="tierce_personne" class="block text-gray-700">Tierce Personne</label>
                <div class="flex items-center space-x-4">
                    <div class="flex items-center">
                        <input type="radio" class="mr-2 leading-tight" id="tierce_personne_oui" name="tierce_personne" value="1">
                        <label for="tierce_personne_oui" class="text-gray-700">Oui</label>
                    </div>
                    <div class="flex items-center">
                        <input type="radio" class="mr-2 leading-tight" id="tierce_personne_non" name="tierce_personne" value="0">
                        <label for="tierce_personne_non" class="text-gray-700">Non</label>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <label for="tierce_personne_nom" class="block text-gray-700">Nom de la Tierce Personne</label>
                <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="tierce_personne_nom" name="tierce_personne_nom">
            </div>
            <div class="mb-4">
                <label for="tierce_personne_prenom" class="block text-gray-700">Prénom de la Tierce Personne</label>
                <input type="text" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="tierce_personne_prenom" name="tierce_personne_prenom">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
        </form>
    </div>
</x-layout>
