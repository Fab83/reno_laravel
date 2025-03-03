<!-- filepath: /c:/Users/FabriceVITEAU/Desktop/code/reno_laravel/resources/views/logements/index.blade.php -->
<x-layout>
    <div class="container mx-auto mt-5 p-5">
        <h2 class="text-2xl font-bold mb-5">Liste des Logements</h2>
        <a href="{{ route('logements.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-5">Créer Logement</a>
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Adresse</th>
                    <th class="py-2 px-4 border-b">Commune</th>
                    {{-- <th class="py-2 px-4 border-b">Ville</th> --}}
                    <th class="py-2 px-4 border-b">Logement Vacant</th>
                    <th class="py-2 px-4 border-b">Propriétaire</th>
                    {{-- <th class="py-2 px-4 border-b">Aide Perçue</th> --}}
                    <th class="py-2 px-4 border-b">Type</th>
                    <th class="py-2 px-4 border-b">Année de Construction</th>
                    {{-- <th class="py-2 px-4 border-b">Surface</th> --}}
                    <th class="py-2 px-4 border-b">Nombre de Pièces</th>
                    {{-- <th class="py-2 px-4 border-b">Mitoyenneté</th> --}}
                    <th class="py-2 px-4 border-b">Type d'Énergie</th>
                    <th class="py-2 px-4 border-b">Chauffage Principal</th>
                    {{-- <th class="py-2 px-4 border-b">Type de Chaudière</th> --}}
                    {{-- <th class="py-2 px-4 border-b">Chauffage d'Appoint</th> --}}
                    <th class="py-2 px-4 border-b">Production ECS</th>
                    {{-- <th class="py-2 px-4 border-b">Cave</th> --}}
                    {{-- <th class="py-2 px-4 border-b">Combles</th> --}}
                    {{-- <th class="py-2 px-4 border-b">Combles Isolés</th> --}}
                    {{-- <th class="py-2 px-4 border-b">Murs Isolés</th> --}}
                    {{-- <th class="py-2 px-4 border-b">Ventilation</th> --}}
                    {{-- <th class="py-2 px-4 border-b">Humidité/Moisissure</th> --}}
                    {{-- <th class="py-2 px-4 border-b">Menuiseries</th> --}}
                    {{-- <th class="py-2 px-4 border-b">Volets</th> --}}
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($logements as $logement)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $logement->contact->nom }}</td>
                        <td class="py-2 px-4 border-b">{{ $logement->adresse_logement }}</td>
                        <td class="py-2 px-4 border-b">{{ $logement->commune_logement }}</td>
                        {{-- <td class="py-2 px-4 border-b">{{ $logement->ville }}</td> --}}
                        <td class="py-2 px-4 border-b">{{ $logement->logement_vacant ? 'Oui' : 'Non' }}</td>
                        {{-- <td class="py-2 px-4 border-b">{{ $logement->aide_percue }}</td> --}}
                        <td class="py-2 px-4 border-b">{{ $logement->type }}</td>
                        <td class="py-2 px-4 border-b">{{ $logement->annee_construction }}</td>
                        {{-- <td class="py-2 px-4 border-b">{{ $logement->surface }}</td> --}}
                        <td class="py-2 px-4 border-b">{{ $logement->nombre_pieces }}</td>
                        {{-- <td class="py-2 px-4 border-b">{{ $logement->mitoyennete }}</td> --}}
                        <td class="py-2 px-4 border-b">{{ $logement->type_energie }}</td>
                        <td class="py-2 px-4 border-b">{{ $logement->chauffage_principal }}</td>
                        {{-- <td class="py-2 px-4 border-b">{{ $logement->type_chaudiere }}</td> --}}
                        {{-- <td class="py-2 px-4 border-b">{{ $logement->chauffage_appoint }}</td> --}}
                        <td class="py-2 px-4 border-b">{{ $logement->production_ecs }}</td>
                        {{-- <td class="py-2 px-4 border-b">{{ $logement->cave }}</td>
                        <td class="py-2 px-4 border-b">{{ $logement->combles }}</td>
                        <td class="py-2 px-4 border-b">{{ $logement->combles_isoles }}</td>
                        <td class="py-2 px-4 border-b">{{ $logement->murs_isoles }}</td>
                        <td class="py-2 px-4 border-b">{{ $logement->ventilation }}</td>
                        <td class="py-2 px-4 border-b">{{ $logement->humidite_moisissure }}</td>
                        <td class="py-2 px-4 border-b">{{ $logement->menuiseries }}</td>
                        <td class="py-2 px-4 border-b">{{ $logement->volets }}</td> --}}
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('logements.edit', $logement->id) }}" class="text-blue-500">Modifier</a>
                            <form action="{{ route('logements.destroy', $logement->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 ml-2">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>