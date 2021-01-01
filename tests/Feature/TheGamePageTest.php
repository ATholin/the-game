<?php

use App\Models\Game;
use App\Models\User;

it('has home page', function () {
    $response = $this->get('/');

    $response->assertSee('Log in with Google to start your game!');
    $response->assertStatus(200);
});

it('authenticated user sees active game', function () {
    \Pest\Laravel\withoutExceptionHandling();
    $response = $this->actingAs(User::factory()->has(Game::factory()->state(['ended_at' => null]))->create())->get('/');

    $response->assertSee('Current game');
    $response->assertSee('I lost The Game!');
    $response->assertStatus(200);
});
