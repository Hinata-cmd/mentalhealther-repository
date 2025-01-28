<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    @if(Auth::user()->type === 0)
    <div class="support">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="">
                        <h3>サポーターの方はこちらも登録ください</h3>
                        <form method="post" action="{{ route('profile.supporter') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('patch')

                            <div>
                                <x-input-label for="work" :value="__('職種')" />
                                @foreach($works as $work)
                                <input type="checkbox" name="supporter[work_id]" value="{{ $work->id }}"> {{ $work->name }}
                                @endforeach
                            </div>

                            <div>
                                <x-input-label for="area" :value="__('エリア')" />
                                @foreach($areas as $area)
                                <input type="checkbox" name="supporter[area_id]" value="{{ $area->id }}"> {{ $area->name }}
                                @endforeach
                            </div>

                            <div>
                                <x-input-label for="condition" :value="__('条件')" />
                                @foreach($conditions as $condition)
                                <input type="checkbox" name="supporter[condition_id]" value="{{ $condition->id }}"> {{ $condition->name }}
                                @endforeach
                            </div>
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
