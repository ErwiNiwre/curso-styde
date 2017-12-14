<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    function it_welcome_users_with_nickame()
    {
    	$this->get('saludo/erwin/niwre')
    	->assertStatus(200)
    	->assertSee('Bienvenido Erwin, tu apodo es niwre');
    }

    /** @test */
    function it_welcome_users_without_nickame()
    {
    	$this->get('saludo/erwin')
    	->assertStatus(200)
    	->assertSee('Bienvenido Erwin, no tienes apodo');
    }
}