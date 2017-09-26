<?php

use Illuminate\Database\Seeder;
use App\Models\Message;
use Faker\Factory as Faker;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Message::class, 1000)
        ->create()
        ->each(
            function ($message)
            {
                $faker = Faker::create();
                $recipent_count = rand ( 1 , 5 );
                $recipent_ids = [];
                for($i=0; $i<=$recipent_count; $i++)
                {
                    $recipent_ids[rand ( 1 , 10 )] = [
                        'status'        => $faker->randomElement(['new', 'readed', 'spam']),
                        'created_at'    => new DateTime(),
                        'updated_at'    => new DateTime(),
                    ];
                }
                $message->recipents()->sync($recipent_ids);
            }
        );
    }
}
