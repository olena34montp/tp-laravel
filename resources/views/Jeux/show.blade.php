<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Détails du jeu n {{$jeu->id}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <p class="mt-5 mb-5">{{__('Game Details')}}</p>
                <h2 class="pl-5 text-center md:text-left font-bold text-3xl">Titre : {{$jeu->titre}}</h2>
                <p class="mt-5 mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus posuere massa ac magna mollis, vitae auctor eros vestibulum. In nec justo vehicula, fermentum risus non, iaculis risus. Aenean at volutpat dolor. Praesent sagittis bibendum iaculis. Praesent nisi purus, tincidunt ac vulputate nec, tristique vitae tortor. Pellentesque nec mauris nunc. Praesent tempor enim a magna fringilla, vel dictum libero condimentum. Aliquam cursus bibendum massa eget scelerisque. Donec consequat quam enim, sit amet commodo mi volutpat eget. Cras feugiat varius tortor, sed egestas eros iaculis et. Pellentesque tempus ipsum nec leo rhoncus placerat. Fusce vehicula turpis at quam pellentesque commodo. Donec faucibus nunc et risus aliquet, quis ornare neque varius. Praesent ornare, diam et sodales iaculis, metus tellus convallis eros, a sollicitudin lectus libero eu magna.</p>
                <ul class="flex justify-end">
                    <li class="mr-5">
                        <a href="{{ route('jeux.edit', $jeu->id) }}">
                            <x-change-button>Modifier</x-change-button>
                        </a>
                    </li>
                    <li>
                        <x-delete-button>Supprimer</x-delete-button>
                    </li>
                </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

