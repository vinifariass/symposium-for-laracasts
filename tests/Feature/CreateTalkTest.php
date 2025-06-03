<?php

use App\Enums\TalkType;
use App\Models\User;

test('a user can create a talk', function () {
    $user = User::factory()->create();

    $response = $this
        ->actingAs($user)
        ->from('/profile')
        ->post('talks.store', [
            'title' => $title = fake()->sentence(),
            'type' => TalkType::KEYNOTE->value,
        ]);

    $response
        ->assertRedirect(route('talks.index'));

    $this->assertDatabaseHas('talks', [
        'title' => $title,
    ]);
});
