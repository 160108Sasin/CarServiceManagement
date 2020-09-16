<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class BookingTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function ($first, $second) {
            $first->visit('/login')
                    ->type('email', 'sasin@gmail.com')
                    ->type('password', 'sasin12345')
                    ->press('Login')
                    ->assertPathIs('/home')
                    ->visit('/bookings')
                    ->type('vehicle_brand', 'tesla')
                    ->type('vehicle_name', 'tesla')
                    ->type('vehicle_number', '9756')
                    ->select('service_type', 'Advance')
                    ->select('mechanic_id', 'Ram Stha')
                    ->select('service_date', '2020-08-17')
                    ->select('service_time', '11-1')
                    ->press('Summit')
                    ->assertPathIs('/home');

        });
    }
}
