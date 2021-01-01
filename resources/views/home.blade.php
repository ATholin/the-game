<x-app-layout>

    <!-- Main button container -->
    <div class="container mx-auto mt-16 max-w-xl">
        @auth
            <livewire:game-counter />
            <div class="mt-6">
                @include('partials.game-button')
            </div>
        @else
            <a class="flex justify-center sm:text-lg sm:text-2xl font-bold underline text-blue-500 hover:text-blue-400 active:text-blue-600 transition-colors duration-200" href="{{ route('provider.redirect', 'google') }}">Log in with Google to start your game!</a>
        @endauth

    </div>

    <!-- Leaderboard container -->
    <div class="container mx-auto mt-16 px-4 md:px-0">
        @include('partials.leaderboards')
    </div>
</x-app-layout>
