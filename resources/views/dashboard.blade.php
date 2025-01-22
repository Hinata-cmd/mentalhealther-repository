<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    You're logged in!

                    <table class="table" style="width :1000px; max-width: 0 auto;">
                        <tr>
                            <td><img style="width:80px;" src="{{ Auth::user()->image ? asset(Auth::user()->image) : asset('/image/icon.png')  }}"></td>
                            <td>{{ Auth::user()->name }}</td>
                            <td>{{ Auth::user()->age->range }}</td>
                            <td>
                                @if(Auth::user()->sex === 0)
                                    男
                                @elseif(Auth::user()->sex === 1)
                                    女
                                @else
                                    その他
                                @endif
                            </td>
                            <td>
                                @if(Auth::user()->type === 1)
                                    患者
                                @else
                                    サポーター
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                @if($user?->works !== null)
                                    @foreach($user->works as $work)
                                    {{ $work->name }}
                                    @endforeach
                                @endif
                            </td>
                            <td>
                                @if($user?->areas !== null)
                                    @foreach($user->areas as $area)
                                    {{ $area->name }}
                                    @endforeach
                                @endif
                            </td>
                            <td>
                                @if($user?->conditions !== null)
                                    @foreach($user->conditions as $condition)
                                    {{ $condition->name }}
                                    @endforeach
                                @endif
                            </td>
                            <td>
                            </td>
                        </tr>                      
                    </table>
                    <br><a href="{{url('/chat')}}">Chat</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
