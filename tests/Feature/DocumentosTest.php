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
 
        $this->user = User::find(1);
        $this->actingAs($this->user);
    }

    public function testConsultarDocumentos()
    {
        $response = $this->getJson('/api/documentos',['Authorization' => 'Bearer '.$this->user->createToken('authToken')->accessToken]);
        $response->assertStatus(200);
    }
    public function testCrearDocumento()
    {
        $response = $this->postJson('/api/documentos', ['doc_nombre' => 'Documento de prueba', 'tip_id' => '1','pro_id' => '1','doc_contenido' => 'Contenido de prueba'],['Authorization' => 'Bearer '.$this->user->createToken('authToken')->accessToken]);
        $response->assertStatus(200);
    }
    public function testConsultarDocumento()
      {
          $response = $this->getJson('/api/documentos/1',['Authorization' => 'Bearer '.$this->user->createToken('authToken')->accessToken]);
          $response->assertStatus(200);
      } 
      public function testActualizarDocumento()
    {
        $response = $this->putJson('/api/documentos/1', ['doc_nombre' => 'Documento de prueba', 'tip_id' => '1','pro_id' => '1','doc_contenido' => 'Contenido de prueba'],['Authorization' => 'Bearer '.$this->user->createToken('authToken')->accessToken]);
        $response->assertStatus(200);
    }
    public function testEliminarDocumento()
    {
        $response = $this->deleteJson('/api/documentos/1',[],['Authorization' => 'Bearer '.$this->user->createToken('authToken')->accessToken]);
        $response->assertStatus(200);
    }   
    protected function tearDown(): void
    {
        parent::tearDown();
    }
}
