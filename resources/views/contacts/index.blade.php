<x-layout>
    <div class="container mx-auto mt-8">
        <a href="{{ route('contacts.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create Contact</a>
    </div></div>
        <h1 class="text-2xl font-bold mb-4">Contacts</h1>
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Nom</th>
                    <th class="py-2 px-4 border-b">Ville (prop.)</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Téléphone</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $contact->nom }}</td>
                        <td class="py-2 px-4 border-b">{{ $contact->commune_proprietaire }}</td>
                        <td class="py-2 px-4 border-b">{{ $contact->email }}</td>
                        <td class="py-2 px-4 border-b">{{ $contact->telephone }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('contacts.edit', $contact->id) }}" class="text-blue-500">Edit</a>
                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 ml-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>