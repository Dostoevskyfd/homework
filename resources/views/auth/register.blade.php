<x-guest-layout>
    <div class="logo flex place-content-center ">
        <p class="text-sky-600 text-2xl font-bold">НАРУШЕНИЙ</p>
        <p class="text-red-600 text-2xl font-bold">.НЕТ</p>
    </div>
    <div class="flex place-content-center">
    <p class="flex  text-sky-600"> Регистрация </p>
    </div>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="_('Введите имя')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="имя"/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        
        </div>
         <!-- middlename -->
         <div>
            <x-input-label for="middlename" :value="_('Введите отчество')" />
            <x-text-input id="middlename" class="block mt-1 w-full" type="text" name="middlename" :value="old('middlename')" required autofocus autocomplete="middlename" placeholder="отчество" />
            <x-input-error :messages="$errors->get('middlename')" class="mt-2" />
        </div>
        <!-- FName -->
        <div>
            <x-input-label for="fname" :value="_('Введите фамилия')" />
            <x-text-input id="fname" class="block mt-1 w-full" type="text" name="fname" :value="old('fname')" required autofocus autocomplete="fname" placeholder="фамилия"/>
            <x-input-error :messages="$errors->get('fname')" class="mt-2" />
        </div>

        <!-- login Address -->
        <div class="mt-4">
            <x-input-label for="login" :value="__('Введите логин')" />
            <x-text-input id="login" class="block mt-1 w-full" type="text" name="login" :value="old('login')" required autocomplete="login" placeholder="логин"/>
            <x-input-error :messages="$errors->get('login')" class="mt-2" />
        </div>

        <!-- tel Address -->
        <div class="mt-4">
            <x-input-label for="tel" :value="__('Введите телефон')" />
            <x-text-input id="tel" class="block mt-1 w-full" type="tel" name="tel" :value="old('tel')" required autocomplete="tel" placeholder="телефон"/>
            <x-input-error :messages="$errors->get('tel')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" placeholder="пароль"/>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Авторизоваться') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('создать аккаунт') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
