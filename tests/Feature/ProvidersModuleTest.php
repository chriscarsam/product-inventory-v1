<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProvidersModuleTest extends TestCase
{
    /** @test */
    function it_show_the_provider_web_page()
    {
        $this->get('/proveedores')
            ->assertStatus(200)
            ->assertSee('Listado de proveedores')
            ->assertSee('Darling');
    }
}
