<?php

namespace Tests\Unit;
use Tests\TestCase;
use App\Models\Role;

use  Illuminate\Database\Eloquent\Collection;
class RolesTest extends TestCase
{
    
    public function test_example()
    {
       $role = new Role;
       $this->assertInstanceOf(Collection::class , $role ->users);
    
    }

   
}
