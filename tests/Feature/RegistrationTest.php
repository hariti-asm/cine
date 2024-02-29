<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class RegistrationTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_a_user_can_register(): void
    { $response = $this->get('/register');

        $response->assertStatus(200);
    }
    
    public function testRegistersAValidUser()
    {
        // Create a new user using the factory with unique email
        $user = User::factory()->create([
            'email' => 'test@example.com',
        ]);
    
        $response = $this->post('/register', [
            'name' => 'John Doe',
            'email' => $user->email, 
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);
    
        // Check if registration fails due to duplicate email
        $response->assertStatus(302);
        
        // Assert that the user is not authenticated
        $this->assertGuest();
    }
    
    
    
}
