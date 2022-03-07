<?php

namespace Tests\Unit;
use Tests\TestCase;
use App\Models\Ward;
use  Illuminate\Database\Eloquent\Collection;

class JailTest extends TestCase
{
    public function test_example()
    {
       $ward = new Ward;
       $this->assertInstanceOf(Collection::class , $ward ->jails);
    
    }
}
