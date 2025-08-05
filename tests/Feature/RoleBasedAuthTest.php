<?php

use App\Models\User;

test('admin can access admin dashboard', function () {
    $admin = User::factory()->create(['role' => 'admin']);

    $response = $this->actingAs($admin)->get('/admin');

    $response->assertStatus(200);
    $response->assertViewIs('admin.dashboard');
});

test('dokter can access dokter dashboard', function () {
    $dokter = User::factory()->create(['role' => 'dokter']);

    $response = $this->actingAs($dokter)->get('/dokter');

    $response->assertStatus(200);
    $response->assertViewIs('dokter.dashboard');
});

test('resepsionis can access resepsionis dashboard', function () {
    $resepsionis = User::factory()->create(['role' => 'resepsionis']);

    $response = $this->actingAs($resepsionis)->get('/resepsionis');

    $response->assertStatus(200);
    $response->assertViewIs('resepsionis.dashboard');
});

test('dokter cannot access admin dashboard', function () {
    $dokter = User::factory()->create(['role' => 'dokter']);

    $response = $this->actingAs($dokter)->get('/admin');

    $response->assertStatus(403);
});

test('resepsionis cannot access admin dashboard', function () {
    $resepsionis = User::factory()->create(['role' => 'resepsionis']);

    $response = $this->actingAs($resepsionis)->get('/admin');

    $response->assertStatus(403);
});

test('admin cannot access dokter dashboard', function () {
    $admin = User::factory()->create(['role' => 'admin']);

    $response = $this->actingAs($admin)->get('/dokter');

    $response->assertStatus(403);
});

test('user login redirects based on role', function () {
    // Test admin redirect
    $admin = User::factory()->create([
        'email' => 'admin@test.com',
        'password' => bcrypt('password'),
        'role' => 'admin'
    ]);

    $response = $this->post('/login', [
        'email' => 'admin@test.com',
        'password' => 'password'
    ]);

    $response->assertRedirect('/admin');

    // Test dokter redirect - logout first
    $this->post('/logout');
    
    $dokter = User::factory()->create([
        'email' => 'dokter@test.com',
        'password' => bcrypt('password'),
        'role' => 'dokter'
    ]);

    $response = $this->post('/login', [
        'email' => 'dokter@test.com',
        'password' => 'password'
    ]);

    $response->assertRedirect('/dokter');

    // Test resepsionis redirect - logout first
    $this->post('/logout');
    
    $resepsionis = User::factory()->create([
        'email' => 'resepsionis@test.com',
        'password' => bcrypt('password'),
        'role' => 'resepsionis'
    ]);

    $response = $this->post('/login', [
        'email' => 'resepsionis@test.com',
        'password' => 'password'
    ]);

    $response->assertRedirect('/resepsionis');
});

test('guest cannot access role dashboards', function () {
    $response = $this->get('/admin');
    $response->assertRedirect('/login');

    $response = $this->get('/dokter');
    $response->assertRedirect('/login');

    $response = $this->get('/resepsionis');
    $response->assertRedirect('/login');
});