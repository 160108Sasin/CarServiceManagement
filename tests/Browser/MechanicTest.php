<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class MechanicTest extends DuskTestCase
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
                    ->type('email', 'admin@gmail.com')
                    ->type('password', 'admin12345')
                    ->press('Login')
                    ->assertPathIs('/admin')
                    ->visit('/mechanics/create')
                    ->type('name', 'Samir Maharjan')
                    ->type('address', 'Kathamndu')
                    ->type('contact', '9841309681')
                    ->select('type', 'Advance')
                    ->press('Add Mechanic')
                    ->assertPathIs('/admin');


        });
    }
}
