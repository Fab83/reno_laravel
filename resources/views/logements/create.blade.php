<x-layout>
    <div class="container mx-auto mt-5 p-5">
        <h2 class="text-2xl font-bold mb-5">Créer Logement</h2>
        <form action="{{ route('logements.store') }}" method="POST">
            @csrf
            <div class="mb-4 flex space-x-4">
                <div class="w-1/4">
                <label for="contact_id" class="block text-gray-700">Propriétaire</label>
                <select class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="contact_id" name="contact_id" required>
                    @foreach ($contacts as $contact)
                        <option value="{{ $contact->id }}">{{ $contact->nom }}</option>
                    @endforeach
                </select>
                </div>
                <div class="w-1/2">
                    <label for="adresse_logement" class="block text-gray-700">Adresse</label>
                    <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="adresse_logement" name="adresse_logement" required>
                </div>
                <div class="w-1/4">
                    <label for="commune_logement" class="block text-gray-700">Commune</label>
                    <select class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="commune_logement" name="commune_logement" required>
                        <option value="Les Adrets">Les Adrets</option>
                        <option value="Fréjus">Fréjus</option>
                        <option value="Puget-sur-Argens">Puget-sur-Argens</option>
                        <option value="Roquebrune-sur-Argens">Roquebrune-sur-Argens</option>
                        <option value="Saint-Raphaël">Saint-Raphaël</option>
                        <option value="DPVA">DPVA</option>
                        <option value="CCPF">CCPF</option>
                        <option value="Autre">Autre</option>
                    </select>
                </div>
            </div>
            <div class="mb-4 flex space-x-4">
                <div class="w-1/4">
                <label for="logement_vacant" class="block text-gray-700">Logement Vacant</label>
                <select class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="logement_vacant" name="logement_vacant" required>
                    <option value="vacant">Oui</option>
                    <option value="non vacant" selected>Non</option>
                </select>
                </div>
                <div class="w-1/4">
                    <label for="aide_percue" class="block text-gray-700">Aide Perçue</label>
                    <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="aide_percue" name="aide_percue" value="0">
                </div>
                <div class="w-1/4">
                    <label for="type" class="block text-gray-700">Type</label>
                    <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="type" name="type">
                </div>
                <div class="w-1/4">
                    <label for="annee_construction" class="block text-gray-700">Année de Construction</label>
                    <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="annee_construction" name="annee_construction" value="0000">
                </div>
            </div>
            <div class="mb-4 flex space-x-4">
                <div class="w-1/4">
                    <label for="surface" class="block text-gray-700">Surface</label>
                    <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="surface" name="surface">
                </div>
                <div class="w-1/4">
                    <label for="nombre_pieces" class="block text-gray-700">Nombre de Pièces</label>
                    <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="nombre_pieces" name="nombre_pieces">
                </div>
                {{-- Mitoyenneté --}}
                <div class="w-1/4">
                    <label for="mitoyennete" class="block text-gray-700">Mitoyenneté</label>
                    <div class="mt-1">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="mitoyennete" value="non" checked>
                            <span class="ml-2">Non</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio" name="mitoyennete" value="Un côté">
                            <span class="ml-2">Un côté</span>
                        </label>
                        <label class="inline-flex items-center ml-6">
                            <input type="radio" class="form-radio" name="mitoyennete" value="Deux côtés">
                            <span class="ml-2">Deux côtés</span>
                        </label>
                    </div>
                </div>
                <div class="w-1/4">
                    <label for="type_energie" class="block text-gray-700">Type d'Énergie</label>
                    <select class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="type_energie" name="type_energie">
                        <option value="Fioul">Fioul</option>
                        <option value="Bois">Bois</option>
                        <option value="Electrique">Electrique</option>
                        <option value="Gaz de ville">Gaz de ville</option>
                        <option value="Propane">Propane</option>
                        <option value="Autre">Autre</option>
                    </select>
                </div>
            </div>
            <div class="mb-4 flex space-x-4">
                <div class="w-1/4">
                    <label for="chauffage_principal" class="block text-gray-700">Chauffage Principal</label>
                    <select class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="chauffage_principal" name="chauffage_principal">
                        <option value="Individuel">Individuel</option>
                        <option value="Collectif">Collectif</option>
                        <option value="Chaudières">Chaudières</option>
                        <option value="Radiateurs électriques">Radiateurs électriques</option>
                        <option value="PAC">PAC</option>
                        <option value="Plancher chauffant">Plancher chauffant</option>
                        <option value="Autre">Autre</option>
                    </select>
                </div>
                <div class="w-1/4">
                    <label for="type_chaudiere" class="block text-gray-700">Type de Chaudière</label>
                    <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="type_chaudiere" name="type_chaudiere">
                </div>
                <div class="w-1/4">
                    <label for="chauffage_appoint" class="block text-gray-700">Chauffage d'Appoint</label>
                    <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="chauffage_appoint" name="chauffage_appoint">
                </div>
                <div class="w-1/4">
                    <label for="production_ecs" class="block text-gray-700">Production ECS</label>
                    <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="production_ecs" name="production_ecs">
                </div>
            </div>
            <div class="mb-4 flex space-x-4">
                <div class="w-1/4">
                    <label for="cave" class="block text-gray-700">Cave</label>
                    <select class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="cave" name="cave">
                        <option value="cave">Oui</option>
                        <option value="pas de cave">Non</option>
                        <option value="cave inconnue" selected>Ne sais pas</option>
                    </select>
                </div>
                <div class="w-1/4">
                    <label for="combles" class="block text-gray-700">Combles</label>
                    <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="combles" name="combles">
                </div>
                <div class="w-1/4">
                    <label for="combles_isoles" class="block text-gray-700">Combles Isolés</label>
                    <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="combles_isoles" name="combles_isoles">
                </div>
                <div class="w-1/4">
                    <label for="murs_isoles" class="block text-gray-700">Murs Isolés</label>
                    <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="murs_isoles" name="murs_isoles">
                </div>
            </div>
            <div class="mb-4 flex space-x-4">

            <div class="w-1/4">
                <label for="ventilation" class="block text-gray-700">Ventilation</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="ventilation" name="ventilation">
            </div>
            <div class="w-1/4">
                <label for="humidite_moisissure" class="block text-gray-700">Humidité/Moisissure</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="humidite_moisissure" name="humidite_moisissure">
            </div>
            <div class="w-1/4">
                <label for="menuiseries" class="block text-gray-700">Menuiseries</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="menuiseries" name="menuiseries">
            </div>
            <div class="w-1/4">
                <label for="volets" class="block text-gray-700">Volets</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="volets" name="volets">
            </div>
        </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Créer</button>
        </form>
    </div>
</x-layout>