<?php

namespace Tests\Feature;
use App\Models\Concert;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ViewConcertTicketTest extends TestCase
{
    use RefreshDatabase;

    function test_user_can_view_a_concert(){
        //create
        $concert = Concert::create([
            'title' => 'Testing12',
            'subtitle'=> 'Sub title',
            'date' => Carbon::parse('January 26, 2021 10:00am'),
            'ticket_price'=> 3250,
            'venue'=>'venue',
            'venue_address'=>'line 1',
            'state'=> 'Maharashtra',
            'city'=>'mumbai',
            'zip' =>'400064',
            'additional_info'=> 'Additional info regarding concert'
        ]);
        //Act
        //View the concert details

        $response = $this->get('/concerts/'.$concert->id);

        //Assert
        //see the concert
//        $response->assertStatus(200);
        $response->assertSee('Testing12');
        $response->assertSee('Sub title');
        $response->assertSee(Carbon::parse('January 26, 2021 10:00am'));
        $response->assertSee(3250);
        $response->assertSee('venue');
        $response->assertSee('line 1');
        $response->assertSee('Maharashtra');
        $response->assertSee('mumbai');
        $response->assertSee('400064');
        $response->assertSee('Additional info regarding concert');


    }
}
