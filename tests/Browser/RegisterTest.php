<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function ($browser) {
            $browser->visit('/register')
                    ->type('name', 'SASIN MAHARJAN')
                    ->type('email', 'sasin@gmail.com')
                    ->type('password', 's@sin12345')
                    ->type('password_confirmation', 's@sin12345')
                    ->type('phoneno', '9860665021')
                    ->type('address', 'Kathmandu')
                    ->press('Register')
                    ->assertPathIs('/home');
        });
    }
}
