<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GameCounter extends Component
{
    public function render()
    {
        $game = auth()->user()->games()->active()->first();
        return view('livewire.game-counter', [
            'game' => $game
        ]);
    }
}
