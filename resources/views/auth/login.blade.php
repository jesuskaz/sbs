<x-login-layout>
    <x-auth-card>
        <x-slot name="text">
            <a href="{{ route('login') }}">
                <x-login-text class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
                <div class="form-group">
                    <div class="d-block">
                        <x-input-label for="email" :value="__('Adresse email')" />

                        <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus />

                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>

            <!-- Password -->
                <div class="form-group">
                    <div class="d-block">
                        <x-input-label for="password" :value="__('Mot de passe')" />

                        <x-text-input id="password"
                                      type="password"
                                      name="password"
                                      required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
            </div>

            <!-- Remember Me -->
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                        <label class="custom-control-label" for="remember-me">{{ __('Souviens-toi de moi') }}</label>
                    </div>
                </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Mot de passe oublié?') }}
                    </a>
                @endif

                <x-primary-button class="mt-3">
                    {{ __('Se connecter') }}
                </x-primary-button>
            </div>
        </form>
    </x-auth-card>
</x-login-layout>
