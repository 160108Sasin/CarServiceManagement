<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        // $user = factory(User::class)->create([
        //     'email' => 'taylor@laravel.com',
        // ]);

        $this->browse(function ($browser) {
            $browser->visit('/login')
                    ->type('email', 'msasin@gmail.com')
                    ->type('password', 'sasin12345')
                    ->press('Login')
                    ->assertPathIs('/home');
        });
    }
}
