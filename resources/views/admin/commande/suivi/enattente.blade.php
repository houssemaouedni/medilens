<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('En attante') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">N° commande</th>
                            <th scope="col">Client</th>
                            <th scope="col">Telephone</th>
                            <th scope="col">Produit</th>
                            <th scope="col">Correction</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @for($i = 1; $i > count($commandes); $i++)
                            @endfor
                                @foreach ($commandes as $commande)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>0000{{ $commande->id }}</td>
                                    <td>{{ $commande->user->name }}</td>
                                    <td>{{ $commande->user->telephone }}</td>
                                    <td>{{ $commande->produit->nom }}</td>
                                    <td>
                                        <div class="">
                                            <span class="badge badge-sm bg-gray-800">OD</span>
                                            <span class="badge badge-sm bg-gray-500">SPH: {{ $commande->od_sph }}</span>
                                            <span class="badge badge-sm bg-gray-500">CYL: {{ $commande->od_cyl }}</span>
                                            <span class="badge badge-sm bg-gray-500">AXE: {{ $commande->od_axe }}</span>
                                        </div>
                                        <div class="">
                                            <span class="badge badge-sm bg-gray-800">OG</span>
                                            <span class="badge badge-sm bg-gray-500">SPH: {{ $commande->og_sph }}</span>
                                            <span class="badge badge-sm bg-gray-500">CYL: {{ $commande->og_cyl }}</span>
                                            <span class="badge badge-sm bg-gray-500">AXE: {{ $commande->og_axe }}</span>
                                        </div>
                                        <div class="collapse" id="collapseExample{{ $commande->id }}">
                                            <div class="card card-body">
                                                <em class="font-bold">Porteur</em>
                                                <div class="row">
                                                    <div class="col-6">
                                                        Nom et prenom :
                                                        {{ $commande->client->nom }}
                                                        {{ $commande->client->prenom }}
                                                        <div class="">
                                                            Telephone :
                                                            {{ $commande->client->telephone }}

                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        Email:
                                                        {{ $commande->client->email }}
                                                    </div>
                                                </div>
                                            </div>
                                          </div>
                                    </td>
                                    <td>
                                        <div class="">
                                            <button class="btn btn-sm bg-primary text-white " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample{{ $commande->id }}" aria-expanded="false" aria-controls="collapseExample">
                                                Voir
                                              </button>

                                            <a class="btn btn-sm btn-primary" href="{{ route('validee',['id' => $commande->id]) }}">Validé</a>
                                            <a class="btn btn-sm btn-primary" href="{{ route('livraison',['id' => $commande->id]) }}">livré</a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                        </tbody>
                      </table>
                      {{ $commandes->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
