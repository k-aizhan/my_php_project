<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    /**
     * A basic feature test example
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }*/

    use DatabaseTransactions;

    public function testCreateUser()
    {
        $response = $this->post('/users', [
            'company_name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'password123',
            'login'=> 'John123',
            'bin' => '1256365422',
            'phone' => '77012521352',
        ]);

        $response->assertStatus(201);
        $this->assertDatabaseCount('users', 1);
        $this->assertDatabaseHas('users', [
            'company_name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'password123',
            'login'=> 'John123',
            'bin' => '1256365422',
            'phone' => '77012521352',
        ]);
    }

    public function testUpdateUser()
    {
        $user = User::factory()->create();

        $response = $this->put('users'.$user->id, [
            'company_name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'password123',
            'login'=> 'John123',
            'bin' => '1256365422',
            'phone' => '77012521352',
        ]);

        $response->assertStatus(200);
        $this->assertDatabaseHas('users', [
            'company_name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => 'password123',
            'login'=> 'John123',
            'bin' => '1256365422',
            'phone' => '77012521352',
        ]);
    }

    public function testDeleteUser()
    {
        $user = User::factory()->create();

        $response = $this->delete('users'.$user->id);

        $response->assertStatus(204);
        $this->assertDatabaseMissing('users', [
            'id' => $user->id,
        ]);
    }
}
