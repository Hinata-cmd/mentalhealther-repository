<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('名前')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Sex -->
        <div>
            <x-input-label for="sex" :value="__('性別')" />
            <input type="radio" name="sex" value="0" >男性
            <input type="radio" name="sex" value="1" >女性
            <input type="radio" name="sex" value="2" checked>未選択
        </div>

        <!-- Age -->
        <div>
            <x-input-label for="age" :value="__('年齢')" />
            <input type="radio" name="age" value="1" checked>20~30歳
            <input type="radio" name="age" value="2" >31~40歳
            <input type="radio" name="age" value="3" >41~50歳
            <input type="radio" name="age" value="4" >51~60歳
            <input type="radio" name="age" value="5" >61歳~
        </div>

        <!-- Type -->
         <div>
            <x-input-label for="type" :value="__('どちら側か選択')" />
            <input type="radio" name="type" value="0" >サポーター
            <input type="radio" name="type" value="1" >患者
        </div>
        
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Eメール')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('パスワード')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('パスワード再入力')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
