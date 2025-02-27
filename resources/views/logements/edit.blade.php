<!-- filepath: /c:/Users/FabriceVITEAU/Desktop/code/reno_laravel/resources/views/logements/edit.blade.php -->
<x-layout>
    <div class="container mx-auto mt-5 p-5">
        <h2 class="text-2xl font-bold mb-5">Modifier Logement</h2>
        <form action="{{ route('logements.update', $logement->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="adresse_logement" class="block text-gray-700">Adresse</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="adresse_logement" name="adresse_logement" value="{{ $logement->adresse_logement }}" required>
            </div>
            <div class="mb-4">
                <label for="commune_logement" class="block text-gray-700">Commune</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="commune_logement" name="commune_logement" value="{{ $logement->commune_logement }}" required>
            </div>
            <div class="mb-4">
                <label for="ville" class="block text-gray-700">Ville</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="ville" name="ville" value="{{ $logement->ville }}" required>
            </div>
            <div class="mb-4">
                <label for="logement_vacant" class="block text-gray-700">Logement Vacant</label>
                <select class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="logement_vacant" name="logement_vacant" required>
                    <option value="1" {{ $logement->logement_vacant == 1 ? 'selected' : '' }}>Oui</option>
                    <option value="0" {{ $logement->logement_vacant == 0 ? 'selected' : '' }}>Non</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="contact_id" class="block text-gray-700">Propriétaire</label>
                <select class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="contact_id" name="contact_id" required>
                    @foreach ($contacts as $contact)
                        <option value="{{ $contact->id }}" {{ $logement->contact_id == $contact->id ? 'selected' : '' }}>{{ $contact->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="aide_percue" class="block text-gray-700">Aide Perçue</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="aide_percue" name="aide_percue" value="{{ $logement->aide_percue }}">
            </div>
            <div class="mb-4">
                <label for="type" class="block text-gray-700">Type</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="type" name="type" value="{{ $logement->type }}">
            </div>
            <div class="mb-4">
                <label for="annee_construction" class="block text-gray-700">Année de Construction</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="annee_construction" name="annee_construction" value="{{ $logement->annee_construction }}">
            </div>
            <div class="mb-4">
                <label for="surface" class="block text-gray-700">Surface</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="surface" name="surface" value="{{ $logement->surface }}">
            </div>
            <div class="mb-4">
                <label for="nombre_pieces" class="block text-gray-700">Nombre de Pièces</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="nombre_pieces" name="nombre_pieces" value="{{ $logement->nombre_pieces }}">
            </div>
            <div class="mb-4">
                <label for="mitoyennete" class="block text-gray-700">Mitoyenneté</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="mitoyennete" name="mitoyennete" value="{{ $logement->mitoyennete }}">
            </div>
            <div class="mb-4">
                <label for="type_energie" class="block text-gray-700">Type d'Énergie</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="type_energie" name="type_energie" value="{{ $logement->type_energie }}">
            </div>
            <div class="mb-4">
                <label for="chauffage_principal" class="block text-gray-700">Chauffage Principal</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="chauffage_principal" name="chauffage_principal" value="{{ $logement->chauffage_principal }}">
            </div>
            <div class="mb-4">
                <label for="type_chaudiere" class="block text-gray-700">Type de Chaudière</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="type_chaudiere" name="type_chaudiere" value="{{ $logement->type_chaudiere }}">
            </div>
            <div class="mb-4">
                <label for="chauffage_appoint" class="block text-gray-700">Chauffage d'Appoint</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="chauffage_appoint" name="chauffage_appoint" value="{{ $logement->chauffage_appoint }}">
            </div>
            <div class="mb-4">
                <label for="production_ecs" class="block text-gray-700">Production ECS</label>
                <input type="text" class="h-9 mt-1 block<!-- filepath: /c:/Users/FabriceVITEAU/Desktop/code/reno_laravel/resources/views/logements/edit.blade.php -->
<x-layout>
    <div class="container mx-auto mt-5 p-5">
        <h2 class="text-2xl font-bold mb-5">Modifier Logement</h2>
        <form action="{{ route('logements.update', $logement->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="adresse_logement" class="block text-gray-700">Adresse</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="adresse_logement" name="adresse_logement" value="{{ $logement->adresse_logement }}" required>
            </div>
            <div class="mb-4">
                <label for="commune_logement" class="block text-gray-700">Commune</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="commune_logement" name="commune_logement" value="{{ $logement->commune_logement }}" required>
            </div>
            <div class="mb-4">
                <label for="ville" class="block text-gray-700">Ville</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="ville" name="ville" value="{{ $logement->ville }}" required>
            </div>
            <div class="mb-4">
                <label for="logement_vacant" class="block text-gray-700">Logement Vacant</label>
                <select class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="logement_vacant" name="logement_vacant" required>
                    <option value="1" {{ $logement->logement_vacant == 1 ? 'selected' : '' }}>Oui</option>
                    <option value="0" {{ $logement->logement_vacant == 0 ? 'selected' : '' }}>Non</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="contact_id" class="block text-gray-700">Propriétaire</label>
                <select class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="contact_id" name="contact_id" required>
                    @foreach ($contacts as $contact)
                        <option value="{{ $contact->id }}" {{ $logement->contact_id == $contact->id ? 'selected' : '' }}>{{ $contact->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="aide_percue" class="block text-gray-700">Aide Perçue</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="aide_percue" name="aide_percue" value="{{ $logement->aide_percue }}">
            </div>
            <div class="mb-4">
                <label for="type" class="block text-gray-700">Type</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="type" name="type" value="{{ $logement->type }}">
            </div>
            <div class="mb-4">
                <label for="annee_construction" class="block text-gray-700">Année de Construction</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="annee_construction" name="annee_construction" value="{{ $logement->annee_construction }}">
            </div>
            <div class="mb-4">
                <label for="surface" class="block text-gray-700">Surface</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="surface" name="surface" value="{{ $logement->surface }}">
            </div>
            <div class="mb-4">
                <label for="nombre_pieces" class="block text-gray-700">Nombre de Pièces</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="nombre_pieces" name="nombre_pieces" value="{{ $logement->nombre_pieces }}">
            </div>
            <div class="mb-4">
                <label for="mitoyennete" class="block text-gray-700">Mitoyenneté</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="mitoyennete" name="mitoyennete" value="{{ $logement->mitoyennete }}">
            </div>
            <div class="mb-4">
                <label for="type_energie" class="block text-gray-700">Type d'Énergie</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="type_energie" name="type_energie" value="{{ $logement->type_energie }}">
            </div>
            <div class="mb-4">
                <label for="chauffage_principal" class="block text-gray-700">Chauffage Principal</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="chauffage_principal" name="chauffage_principal" value="{{ $logement->chauffage_principal }}">
            </div>
            <div class="mb-4">
                <label for="type_chaudiere" class="block text-gray-700">Type de Chaudière</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="type_chaudiere" name="type_chaudiere" value="{{ $logement->type_chaudiere }}">
            </div>
            <div class="mb-4">
                <label for="chauffage_appoint" class="block text-gray-700">Chauffage d'Appoint</label>
                <input type="text" class="h-9 mt-1 block w-full border-gray-300 rounded-md shadow-sm border-2" id="chauffage_appoint" name="chauffage_appoint" value="{{ $logement->chauffage_appoint }}">
            </div>
            <div class="mb-4">
                <label for="production_ecs" class="block text-gray-700">Production ECS</label>
                <input type="text" class="h-9 mt-1 block