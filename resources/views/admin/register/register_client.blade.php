<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register_nv_client') }}">
            @csrf

            <!-- Name -->
            <div class="row">
                <div class="col-6">
                    <x-label for="name" :value="__('Name')" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                </div>

                <div class="col-6" >
                    <x-label for="email" :value="__('Email')" />

                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>
            </div>

            <!-- donner socité -->
            <div>
                <x-label for="raison_sociale" :value="__('raison_sociale')" />
                <x-input id="raison_sociale" class="block mt-1 w-full" type="text" name="raison_sociale" :value="old('raison_sociale')" required autofocus />
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <x-label for="mf" :value="__('Matricule Fiscal')" />
                    <x-input id="mf" class="block mt-1 w-full" type="text" name="MF" :value="old('matricule_fiscal')" required autofocus />
                </div>

                <div class="col-6" >
                    <x-label for="code_client" :value="__('Code client')" />

                    <x-input id="code_client" class="block mt-1 w-full" type="text" name="code" :value="old('code_client')" required />
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <x-label for="adresse" :value="__('adresse')" />
                    <x-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required autofocus />
                </div>

                <div class="col-6" >
                    <x-label for="responsable" :value="__('Responsable Magasin')" />

                    <x-input id="responsable" class="block mt-1 w-full" type="text" name="responsable" :value="old('responsable')" required />
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-6">
                    <x-label for="telephone" :value="__('Telephone')" />
                    <x-input id="telephone" class="block mt-1 w-full" type="text" name="telephone" :value="old('telephone')" required autofocus />
                </div>

                <div class="col-6" >
                    <x-label for="fax" :value="__('Fax')" />

                    <x-input id="fax" class="block mt-1 w-full" type="text" name="fax" :value="old('fax')" required />
                </div>
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('admin') }}">
                    {{ __('Retour') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
