<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class InquiryTest extends DuskTestCase
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
                    ->type('email', 'msasin@gmail.com')
                    ->type('password', 'sasin12345')
                    ->press('Login')
                    ->assertPathIs('/home')
                    ->visit('/inquiries/create')
                    ->type('title', 'TITLE')
                    ->type('body', 'BODY')
                    ->press('Submit Inquiry')
                    ->assertPathIs('/home');


        });
    }
}
