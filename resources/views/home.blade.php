<x-app-layout>

    <!-- Main button container -->
    <div class="container mx-auto mt-16 max-w-xl">
        @auth
            <livewire:game-counter />
            <div class="mt-6">
                @include('partials.game-button')
            </div>
        @else
            <a class="text-center text-2xl font-bold underline" href="{{ route('provider.redirect', 'google') }}">Log in with Google to start your game!</a>
        @endauth

    </div>

    <!-- Leaderboard container -->
    <div class="container mx-auto mt-16">
        @include('partials.leaderboards')
    </div>
</x-app-layout>
