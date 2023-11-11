<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
class LoginTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $response = $this->postJson('/api/login', ['email' => 'admin@gmail.com', 'password' => '12345678','token' => csrf_token()]);
        $response->assertStatus(200);
        
    }
    public function testLogout()
    {
        $response = $this->postJson('/api/logout', ['token' => csrf_token()]);
        $response->assertStatus(200);
        
    }
}
