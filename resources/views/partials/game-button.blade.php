<form method="POST" action="{{ route('game.create') }}">
    @csrf

    <button type="submit" class="block mx-auto bg-red-600 hover:bg-red-500 text-white text-lg sm:text-2xl leading-6 font-semibold py-3 px-6 border border-transparent rounded-xl focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-red-900 focus:outline-none transition-colors duration-200">I lost The Game!</button>
</form>
