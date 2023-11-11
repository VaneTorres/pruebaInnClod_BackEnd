<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\Models\User;
class DocumentosTest extends TestCase
{
    use DatabaseTransactions;
    protected $user;
    protected function setUp(): void
    {
        parent::setUp();

        // Crear un usuario y autenticarlo
        $this->user = User::factory()->create();
        $this->actingAs($this->user);
    }

    public function testConsultarDocumentos()
    {
        $response = $this->getJson('/api/documentos');
        $response->assertStatus(200);
    }
    public function testCrearDocumento()
    {
        $response = $this->postJson('/api/documentos', ['doc_nombre' => 'Documento de prueba', 'tip_id' => '1','pro_id' => '1','doc_contenido' => 'Contenido de prueba']);
        $response->assertStatus(200);
    }
    public function testConsultarDocumento()
      {
          $response = $this->getJson('/api/documentos/1');
          $response->assertStatus(200);
      } 
      public function testActualizarDocumento()
    {
        $response = $this->putJson('/api/documentos/1', ['doc_nombre' => 'Documento de prueba', 'tip_id' => '1','pro_id' => '1','doc_contenido' => 'Contenido de prueba']);
        $response->assertStatus(200);
    }
    public function testEliminarDocumento()
    {
        $response = $this->deleteJson('/api/documentos/1');
        $response->assertStatus(200);
    }   
    protected function tearDown(): void
    {
        $this->user->delete();
        parent::tearDown();
    }
}
