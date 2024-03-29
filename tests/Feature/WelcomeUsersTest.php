<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
   /** @test */
   function it_welcomes_users_with_nickname()
   {
       $this->get('saludo/christian/chris')
            ->assertStatus(200)
            ->assertSee('Bienvenido Christian, tu apodo es chris');
   }

   /** @test */
   function it_welcomes_users_without_nickname()
   {
        $this->get('saludo/christian')
            ->assertStatus(200)
            ->assertSee('No tinenes apodo Christian');
   }
}
