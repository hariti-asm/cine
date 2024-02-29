<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Carbon\Carbon;
class testTimeCanBeManipulatedTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $beforeTraveling=Carbon::now();
        $this->travelTo(now()->subHours(6));
        $afterTraveling=Carbon::now();
        $this->assertEquals($beforeTraveling->timestamp -6*3600
         , $afterTraveling->timestamp);
       echo "time after traveling is ". $afterTraveling;
    }
}
