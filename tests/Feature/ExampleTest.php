<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Models\User;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $user = factory(User::class)->create();

        $response = $this->actingAs($user)
        ->get('/');


        $response->assertStatus(200, '---------------');

//         $response
//         ->assertStatus(200, 'Wrong response status')
//         ->assertJson(
//             [
//                 'created' => true,
//             ],
//             'Wrong JSON response'
//         );
    }
}
