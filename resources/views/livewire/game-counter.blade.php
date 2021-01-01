<div wire:poll.1s>
    <p class="text-center">Current game started:</p>
    <p class="text-3xl font-bold text-center " title="{{ $game->started_at }}">{{ $game->started_at->diffForHumans() }}</p>
</div>
