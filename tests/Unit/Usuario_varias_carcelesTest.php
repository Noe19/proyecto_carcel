<?php

namespace Tests\Unit;
use Tests\TestCase;
use App\Models\User;
use  Illuminate\Database\Eloquent\Collection;

class Usuario_varias_carcelesTest extends TestCase
{
    
    public function test_example()
    {
       $user = new User;
       $this->assertInstanceOf(Collection::class , $user ->jails);
    
    }
}
