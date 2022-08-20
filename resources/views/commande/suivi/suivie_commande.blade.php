<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('suivi de commande') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">numero de commande</th>
                            <th scope="col">produit</th>
                            <th scope="col">client</th>
                            <th scope="col">etat</th>
                            <th scope="col">detaille</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($commandes as $commande)
                                <tr>
                                    <td>202207{{ $commande->id }}</td>
                                    <td>{{ $commande->produit->nom}}</td>
                                    <td>{{ $commande->client->nom }}</td>
                                    <td>
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
                                    </td>
                                    <td>
                                        <a href="{{ route('commande_show', $commande->id) }}" class="btn btn-primary">
                                            Voir
                                        </a>
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
