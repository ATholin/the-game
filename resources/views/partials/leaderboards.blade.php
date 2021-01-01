@if (\App\Models\Game::all()->count() > 0)
<div x-data="{ tab: 0 }">
    <div class="flex justify-center space-x-4 mb-5">
        <button @click="tab = 0" :class="{ 'bg-gray-300': tab === 0 }" class="text-gray-800 rounded px-3 py-1 focus:outline-none transition-colors duration-200">
            Active games
        </button>
        <button @click="tab = 1" :class="{ 'bg-gray-300': tab === 1 }" class="text-gray-800 rounded px-3 py-1 focus:outline-none transition-colors duration-200">
            All games
        </button>
    </div>

    <div x-show="tab === 0">
        <livewire:active-game-leaderboard />
    </div>

    <div x-show="tab == 1">
        <livewire:full-game-leaderboard />
    </div>
</div>
@endif
