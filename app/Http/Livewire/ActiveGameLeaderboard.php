<?php

namespace App\Http\Livewire;

use App\Models\Game;
use Livewire\Component;

class ActiveGameLeaderboard extends Component
{
    public function render()
    {
        $games = Game::active()->orderBy('started_at')->get();
        return view('livewire.active-game-leaderboard', [
            'games' => $games
        ]);
    }
}
