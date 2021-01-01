<?php

namespace App\Actions;

use App\Models\Game;
use Lorisleiva\Actions\Action;

class StartNewGame extends Action
{
    public $middleware = [
        'auth'
    ];

    public function handle()
    {
        // End all previous games
        $this->user()->games()->whereNull('ended_at')->update([
            'ended_at' => now()
        ]);

        // Start new game
        return $this->user()->games()->create([
            'started_at' => now(),
        ]);
    }

    public function response(Game $game)
    {
        return redirect()->route('home');
    }
}
