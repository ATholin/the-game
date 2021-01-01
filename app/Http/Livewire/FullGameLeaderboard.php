<?php

namespace App\Http\Livewire;

use App\Models\Game;
use Livewire\Component;

class FullGameLeaderboard extends Component
{
    public function render()
    {
        $games = Game::all()->sortBy(function (Game $game) {
            return -($game->ended_at ?? now())->diffInDays($game->started_at);
        });
        return view('livewire.full-game-leaderboard', [
            'games' => $games
        ]);
    }
}
