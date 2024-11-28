<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConversorApiTest extends TestCase
{
    public function testQuilometrosParaAnosLuz()
    {
        $response = $this->withoutMiddleware()
                         ->postJson('/api/quilometros', [
                             'quilometros' => 9460730472580.8
                         ]);

        $response->assertStatus(200)
                 ->assertJson([
                     'anosLuz' => 1.0000
                 ]);
    }

    public function testQuilometrosComEntradaInvalida()
    {
        $response = $this->withoutMiddleware()
                         ->postJson('/api/quilometros', [
                             'quilometros' => -10
                         ]);

        $response->assertStatus(400)
                -> assertJson(['erro' =>'parâmetros inválidos']);;
    }

    public function testAnosLuzParaQuilometros()
    {
        $response = $this->withoutMiddleware()
                         ->postJson('/api/anosLuz', [
                             'anosLuz' => 1
                         ]);

        $response->assertStatus(200)
                 ->assertJson([
                     'quilometros' => 9460730472580.8
                 ]);
    }

    public function testAnosLuzComEntradaInvalida()
    {
        $response = $this->withoutMiddleware()
                         ->postJson('/api/anosLuz', [
                             'anosLuz' => -1
                         ]);

        $response->assertStatus(400)
                -> assertJson(['erro' =>'parâmetros inválidos']);
    }

}
