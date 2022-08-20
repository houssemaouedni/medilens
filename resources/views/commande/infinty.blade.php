<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Commande Lentile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        @foreach ($produits as $produit)
                        <div class="card m-3" style="width: 10rem;">
                            <img src="storage/{{ $produit->thumbnail }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">{{ $produit->nom }}</p>
                            </div>
                            <div class="flex justify-content-end">
                                <!-- Button trigger modal -->
                                <button class="btn btn-sm btn-primary m-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $produit->id }}">
                                    Commander
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop{{ $produit->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="staticBackdropLabel">Commande Nikon </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                            <div class="row">

                                            <div class="col-9">
                                            <form method="POST" action="{{ route('commande_post') }}" class="">
                                                @csrf
                                                <input type="text" value="{{ $produit->id }}" hidden name="produit_id">
                                                <input type="text" value="{{ $produit->prix }}" hidden name="prix_ht">
                                                <input type="text" value="{{ $produit->prix * 1.2 }}" hidden name="prix_total">
                                                <div class="mb-6">
                                                    <label for="OD" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                                        OD
                                                    </label>
                                                    <input class="border rounded-xl border-gray-400 p-2 w-16" placeholder="SPH" type="number" name="od_sph" id="od_sph" required >
                                                    <input class="border rounded-xl border-gray-400 p-2 w-16" placeholder="CYL" type="number" name="od_cyl" id="od_cyl" required >
                                                    <input class="border rounded-xl border-gray-400 p-2 w-16" placeholder="AXE" type="number" name="od_axe" id="od_axe" required >
                                                    <input class="border rounded-xl border-gray-400 p-2 w-16" placeholder="ADD" type="text" inputmode="numeric" name="od_add" id="od_add" required >
                                                    <input class="border rounded-xl border-gray-400 p-2 w-16" placeholder="QTE" type="number" name="od_quantite" id="quantite" required >
                                                </div>
                                                <div class="mb-6">
                                                    <label for="OD" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                                        OG
                                                    </label>
                                                    <input class="border rounded-xl border-gray-400 p-2 w-16" placeholder="SPH" type="number" name="og_sph" id="og_sph" required >
                                                    <input class="border rounded-xl border-gray-400 p-2 w-16" placeholder="CYL" type="number" name="og_cyl" id="og_cyl" required >
                                                    <input class="border rounded-xl border-gray-400 p-2 w-16" placeholder="AXE" type="number" name="og_axe" id="og_axe" required >
                                                    <input class="border rounded-xl border-gray-400 p-2 w-16" placeholder="ADD" type="text" inputmode="numeric" name="og_add" id="og_add" required >
                                                    <input class="border rounded-xl border-gray-400 p-2 w-16" placeholder="QTE" type="number" name="og_quantite" id="quantite" required >
                                                </div>


                                            </div>
                                            <div class="col-3">
                                                <span>Prix HT</span>
                                                <p class="font-bold text-xl text-gray-800">{{ $produit->prix }}</p>
                                                <br>
                                                <span>Prix TTC</span>
                                                <p class="font-bold text-xl text-gray-800">{{ $produit->prix * 1.2 }}</p>
                                            </div>
                                            <div class="mb-6">
                                                <label for="OD" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                                                    Porteur
                                                </label>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <input class="border rounded-xl border-gray-400 m-2 w-100 p-2" placeholder="NOM" name="nom" id="os_sph" required >
                                                        <input class="border rounded-xl border-gray-400 m-2 w-100 p-2" placeholder="PRENOM" name="prenom" id="os_cyl" required >
                                                    </div>
                                                    <div class="col-6">

                                                        <input class="border rounded-xl border-gray-400 m-2 w-100 p-2" placeholder="EMAIL" name="email" id="os_axe" required >
                                                        <input class="border rounded-xl border-gray-400 m-2 w-100 p-2" placeholder="TELEPHONE" name="telephone" id="os_add" required >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm text-white bg-secondary" data-bs-dismiss="modal">Retour</button>
                                                <button type="submit" class="btn btn-sm text-white bg-primary">Envoyer</button>
                                            </div>
                                        </form>

                                            </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
