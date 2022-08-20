<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Liste des commandes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 row">

                    <div class="col-xl-3 col-md-6 mb-4">
                            <a href="{{ route('enattente') }}">
                            <div class="card border-l-blue-500 border-l-4 shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="font-weight-bold text-primary text-uppercase mb-1">
                                                En attente</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($commandes->where('etat', '0')) }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                            <a href="{{ route('encours') }}">
                            <div class="card border-l-orange-400 border-l-4 shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="font-weight-bold text-orange-500 text-uppercase mb-1">
                                                En cours de livraison</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($commandes->where('etat', '2')) }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                            <a href="{{ route('livree') }}">
                            <div class="card border-l-green-600 border-l-4 shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="font-weight-bold text-green-500 text-uppercase mb-1">
                                                Livré</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($commandes->where('etat', '1')) }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-md-6 mb-4">
                            <a href="{{ route('annulee') }}">
                            <div class="card border-l-red-600 border-l-4 shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="font-weight-bold text-red-500 text-uppercase mb-1">
                                                annuler</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($commandes->where('etat', '5')) }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
