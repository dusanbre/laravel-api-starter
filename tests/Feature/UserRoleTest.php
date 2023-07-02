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

it('can create user role', function () {
    $user = \App\Models\User::factory()->create();
    $res = \Pest\Laravel\actingAs($user)->json('POST', '/api/user-roles', [
        'name' => 'test'
    ]);

    $this->assertDatabaseHas('user_roles', ['name' => 'test']);
    expect($res->status())->toBe(201);
});