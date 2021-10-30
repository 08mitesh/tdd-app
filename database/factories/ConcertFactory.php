<?php

namespace Database\Factories;

use App\Models\Concert;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ConcertFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Concert::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'Fake Testing12',
            'subtitle'=> 'Fake Sub title',
            'date' => Carbon::parse('+2 weeks'),
            'ticket_price'=> 2000,
            'venue'=>'Fake venue',
            'venue_address'=>'Fake line 1',
            'state'=> 'Fake Maharashtra',
            'city'=>'Fake mumbai',
            'zip' =>'400064',
            'additional_info'=> 'Fake Additional info regarding concert'
            
        ];
    }
}
