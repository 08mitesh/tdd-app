<?php

namespace Tests\Unit;


use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Database\Factories\ConcertFactory;
use Carbon\Carbon;
use Tests\TestCase;
use App\Models\Concert;

class ConcertTest extends TestCase
{
    use RefreshDatabase;
    /** @test */
     function test_can_get_formatted_date(){

        //create

        $concert = Concert::factory()->make([
            'date' => Carbon::parse('2021-10-30 8pm'),
        ]);
        
        //retrive
        $date = $concert->formatted_date;


        //verify
        $this->assertEquals('October 30, 2021',$date);


    }
}
