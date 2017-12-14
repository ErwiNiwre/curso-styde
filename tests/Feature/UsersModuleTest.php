<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    // /**
    //  * A basic test example.
    //  *
    //  * @return void
     
    // public function test_it_loads_the_users_list_page()
    // // public function testExample()
    // {
    //     // $this->assertTrue(true);
    //     $this->get('/usuarios')
    //     ->assertStatus(200)
    //     ->assertSee('Usuarios');
    // }*/

    /** @test */

    function it_shows_the_users_list()
    // public function testExample()
    {
        // $this->assertTrue(true);
        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('Listado de Usuarios')
        ->assertSee('Joel')
        ->assertSee('Ellie');//con esto verificamos los datos q se colocaron y lo verificamos en la terminal
    }

    /** @test */

    function it_shows_a_default_message_if_the_users_list_is_empy()
    // public function testExample()
    {
        // $this->assertTrue(true);
        $this->get('/usuarios?empty')
        ->assertStatus(200)
        ->assertSee('No hay Usuarios Registrados.');
    }

    /** @test */
    function it_loads_the_users_details_page()
    {
    	$this->get('/usuarios/5')
    	->assertStatus(200)
        ->assertSee("Mostrando detalle del usuario: 5");
    }

    /** @test */
    function it_loads_the_new_users_page()
    {
        // $this->withoutExceptionHandling();
    	$this->get('/usuarios/nuevo')
    	->assertStatus(200)
        ->assertSee('Crear nuevo usuario');
    }
}
