<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

//seed some data
class ChatRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chat_rooms')->insert([
            'name'=> 'General'
        ]);
        DB::table('chat_rooms')->insert([
            'name'=> 'Tech Talk'
        ]);
    }
}
