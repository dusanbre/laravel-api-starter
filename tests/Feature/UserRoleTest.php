<?php

it('can fetch user roles', function () {
    $user = \App\Models\User::factory()->create();
    $res = \Pest\Laravel\actingAs($user)->json('GET', '/api/user-roles');

    expect($res->status())->toBe(200);
    expect($res->json())->toBeArray();
});

it('can fetch user roles with pagination', function () {
    $user = \App\Models\User::factory()->create();
    $res = \Pest\Laravel\actingAs($user)->json('GET', '/api/user-roles', ['limit' => 1]);

    expect($res->status())->toBe(200);
    expect($res->json())->toHaveKeys(['data', 'meta', 'links']);
});