<?php

use Illuminate\Database\Seeder;
use App\Models\Message;
use App\Models\User;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Message::class, 10000)
        ->create()
        ->each(
            function ($message)
            {

                $recipent_count = rand ( 1 , 5 );
                $recipent_ids = [];
                for($i=0; $i<=$recipent_count; $i++)
                {
                    $recipent_ids[rand ( 1 , 50 )] = [
                        'is_readed' => rand ( 0 , 1 ),
                        'created_at' => new DateTime(),
                        'updated_at' => new DateTime(),
                    ];
                }
                $message->recipents()->sync($recipent_ids);
            }
        );
    }
}
