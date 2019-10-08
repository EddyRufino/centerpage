<?php

use App\Message;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Message::truncate();

        Message::create([
        	'name' => 'Administrador',
        	'email' => 'eddyjaair@gmail.com',
        	'subject' => "Mensaje de prueba 1",
        	'body' => 'Contenido de prueba 1',
        	'user_id' => '1',
        	'created_at' => Carbon::now()
        ]);

        Message::create([
            'name' => 'Administrador',
            'email' => 'eddyjaair@gmail.com',
            'subject' => "Mensaje de prueba 2",
            'body' => 'Contenido de prueba 2',
            'user_id' => '1',
            'created_at' => Carbon::now()
        ]);

        Message::create([
            'name' => 'Moderador',
            'email' => 'eddyjaair@gmail.com',
            'subject' => "Mensaje de prueba 1",
            'body' => 'Contenido de prueba 1',
            'user_id' => '2',
            'created_at' => Carbon::now()
        ]);
    }
}
