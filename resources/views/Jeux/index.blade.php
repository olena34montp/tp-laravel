<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{__('List of all games')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <table class="ml-4 bg-white">
                        <tr class="border">
                            <td class="pl-5">ID</td>
                            <td>TITRE</td>
                            <td colspan="2">ACTIONS</td>
                            <td class="p-5">
                                <a href="{{ route('jeux.create') }}">
                                    <x-create-button>CREER</x-create-button>
                                </a>
                            </td>
                        </tr>
                        @foreach($jeux as $jeu)
                        <tr class="shadow">
                            <td class="p-5">
                                <!--<a href="{{ route('jeux.show', $jeu->id) }}">{{$jeu -> id}}</a>-->
                                <span class="pr-10">
                                    {{$jeu -> id}}
                                </span>
                            </td>
                            <td class="p-5">
                                <!--<a href="{{ route('jeux.show', $jeu->id) }}">{{$jeu -> titre}}</a>-->
                                <span class="pr-20">
                                    {{$jeu -> titre}}
                                </span>
                            </td>
                            <td class="p-5">
                                <a href="{{ route('jeux.edit', $jeu->id) }}">
                                    <x-change-button>Modifier</x-change-button>
                                </a>
                            </td>
                            <td class="p-5">
                                <a href="{{ route('jeux.show', $jeu->id) }}">
                                    <x-show-button>Voir</x-show-button>
                                </a>
                            </td>
                            <td class="p-5">
                                <x-delete-button>Supprimer</x-delete-button>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

{{-- This comment will not be present in the rendered HTML --}}
