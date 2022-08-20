<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Nikon') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="row">
                        <div class="col-6 border">
                            
                            <br>
                            <table class="table-responsive table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Marque</th>
                                        <th scope="col">description</th>
                                        <th scope="col">categorie</th>
                                        <th scope="col">prix</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($produits as $produit)
                                    <tr>
                                        <th scope="row">{{ $produit->id }}</th>
                                        <td>{{ $produit->nom }}</td>
                                        <td>{{ $produit->description }}</td>
                                        <td>{{ $produit->categorie->nom }}</td>
                                        <td>{{ $produit->prix }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $produits->links() }}

                        </div>

                        <div class="col-6">
                            <form action="{{ route('ajouter_lentille_post') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-6">
                                    <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                        Nikon
                                    </label>
                                    <input class="border border-gray-400 p-2 w-full" type="text" name="nom" id="name" required>
                                </div>
                                <div class="mb-6">
                                    <label for="description" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                        description
                                    </label>
                                    <input class="border border-gray-400 p-2 w-full" type="text" name="description" id="description" required>
                                </div>
                                <div class="mb-6">
                                    <label for="description" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                        Categorie
                                    </label>
                                    <div class="border border-gray-400 p-2 w-full">Verre</div>
                                    <input value="2" name="categorie_id" hidden>
                                </div>
                                <div class="mb-6">
                                    <label for="prix_ht" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                        Prix
                                    </label>
                                    <input class="border border-gray-400 p-2 w-full" type="text" name="prix" id="prix" required>
                                </div>
                                <div class="mb-6">
                                    <label for="image" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                        Image
                                    </label>
                                    <input class="border border-gray-400 p-2 w-full" type="file" name="thumbnail" id="image" required>
                                </div>
                                <button type="submit" class="btn btn-primary text-black">Sauvgarder</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
