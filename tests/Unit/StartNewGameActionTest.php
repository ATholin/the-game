<?php

use App\Actions\StartNewGame;
use App\Models\Game;
use App\Models\User;
use function Pest\Laravel\actingAs;
use function PHPUnit\Framework\assertEquals;

test('start new game with new user', function () {
    /** @var User $user */
    actingAs($user = User::factory()->create());

    $action = new StartNewGame();
    $action->run();

    assertEquals($user->games()->active()->count(), 1);
});

test('starting a new game finishes active games', function () {
    /** @var User $user */
    actingAs($user = User::factory()->has(Game::factory()->state([
        'ended_at' => null
    ]))->create());

    assertEquals(1, $user->games()->count());
    assertEquals($user->games()->first()->ended_at, null);

    $action = new StartNewGame();
    $action->run();

    assertEquals(2, $user->games()->count());
});
