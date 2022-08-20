<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('detaille de commande') }}
        </h2>
        <div class="flex justify-end">
        @if($commande->etat == 0)
            <span class="bg-red-500 text-white px-2 py-1 rounded">
                en attente
            </span>
        @elseif($commande->etat == 1)
            <span class="bg-green-500 text-white px-2 py-1 rounded">
                livré
            </span>
        @elseif($commande->etat == 2)
            <span class="bg-orange-500 text-white px-2 py-1 rounded">
                en cours de livraison
            </span>
        @elseif($commande->etat == 3)
            <span class="bg-blue-500 text-white px-2 py-1 rounded">
                en attente de retour
            </span>
        @elseif($commande->etat == 4)
            <span class="bg-blue-500 text-white px-2 py-1 rounded">
                retourné
            </span>
         @elseif($commande->etat == 5)
            <span class="bg-red-500 text-white px-2 py-1 rounded">
                annulé
            </span>
        @endif
    </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row m-1">
                        <div class="col-3 mr-5">
                            <h1 class="font-bold">Porteur</h1>
                            <div class="row">
                                    <label for="" class="border rounded-xl border-b-black p-3 m-2">Nom et prénom : {{ $commande->client->nom }} {{ $commande->client->prenom }}</label>
                                    <label for="" class="border rounded-xl border-b-black p-3 m-2">Email : {{ $commande->client->email }}</label>
                                    <label for="" class="border rounded-xl border-b-black p-3 m-2">telephone : {{ $commande->client->telephone }}</label>
                            </div>
                        </div>
                        <div class="col-8 ml-5">
                            <span class="mb-5 font-bold">Commande</span>
                            <div class="row">
                                <div class="col-6 row">
                                    <label class="border rounded-xl border-b-black p-3 m-2">Numero de commande : 202207{{ $commande->id }}</label>
                                    <label class="border rounded-xl border-b-black p-3 m-2">Categories : {{ $commande->produit->categorie->nom }}</label>
                                    <label class="border rounded-xl border-b-black p-3 m-2">Article : {{ $commande->produit->nom }}</label>
                                    <label class="border rounded-xl border-b-black p-3 m-2">Description : {{ $commande->produit->description }}</label>
                                </div>
                                <div class="col-6">
                                    <label class="border border-b-black ml-8 mt-4 p-2 rounded-xl">Date de commande :{{ $commande->created_at }}</label>
                                    <table class="ml-10 mt-16 table table-hover ">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">sph</th>
                                                <th scope="col">cyl</th>
                                                <th scope="col">axe</th>
                                                <th scope="col">add</th>
                                                <th scope="col">Qté</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <th scope="row">od</th>
                                                <td>{{ $commande->od_sph }}</td>
                                                <td>{{ $commande->od_cyl }}</td>
                                                <td>{{ $commande->od_axe }}</td>
                                                <td>{{ $commande->od_add }}</td>
                                                <td>{{ $commande->od_quantite }}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">og</th>
                                                <td>{{ $commande->og_sph }}</td>
                                                <td>{{ $commande->og_cyl }}</td>
                                                <td>{{ $commande->og_axe }}</td>
                                                <td>{{ $commande->og_add }}</td>
                                                <td>{{ $commande->og_quantite }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="flex justify-content-end">
                                <a href="{{ route('suivi') }}" class="btn btn-sm btn-primary"> Retour</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
