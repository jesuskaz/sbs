<x-app-layout>

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h4>Ajout | Utilisateur</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.register') }}">
                                @csrf
                                <div class="row">

                                    <!-- Name -->
                                    <div class="form-group col-6">
                                        <x-input-label for="name" :value="__('Nom d\'utilisateur')" />

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-user"></i>
                                                </div>
                                            </div>
                                            <x-text-input id="name"  class="block  w-full" type="text" name="name" :value="old('name')" required autofocus />

                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>
                                    </div>

                                    <!-- Email Address -->
                                    <div class="form-group col-6">
                                        <x-input-label for="email" :value="__('Adresse email')" />

                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-envelope"></i>
                                                </div>
                                            </div>
                                            <x-text-input id="email" class="block w-full" type="email" name="email" :value="old('email')" required />

                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <!-- Password -->
                                    <div class="form-group col-6">
                                        <x-input-label for="password" :value="__('Mot de passe')" />
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-lock"></i>
                                                </div>
                                            </div>
                                            <x-text-input id="password" class="block w-full"
                                                          type="password"
                                                          name="password"
                                                          required autocomplete="new-password" />

                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="form-group col-6">
                                        <x-input-label for="password_confirmation" :value="__('Confirmez mot de passe')"/>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-lock"></i>
                                                </div>
                                            </div>
                                            <x-text-input id="password_confirmation" class="block  w-full"
                                                          type="password"
                                                          name="password_confirmation" required />

                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <div class="form-group col-12">
                                        <x-primary-button class="ml-4">
                                            {{ __('Enregister un utilisateur') }}
                                        </x-primary-button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
