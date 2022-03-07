<?php

namespace Tests\Unit;
use Tests\TestCase;
use App\Models\User;
use App\Models\Report;
use  Illuminate\Database\Eloquent\Collection;

class UserTest extends TestCase
{
  
    public function test_example()
    {
       $user = new User;
       $this->assertInstanceOf(Collection::class , $user ->wards);
    
    }
}
