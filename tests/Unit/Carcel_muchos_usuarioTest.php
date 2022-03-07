<?php


namespace Tests\Unit;
use Tests\TestCase;
use App\Models\Jail;
use  Illuminate\Database\Eloquent\Collection;

class Carcel_muchos_usuarioTest extends TestCase
{
    
    public function test_example()
    {
       $jail = new Jail;
       $this->assertInstanceOf(Collection::class , $jail ->users);
    
    }
}
