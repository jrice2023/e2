<?php

namespace App\Commands;

use Faker\Factory;

class AppCommand extends Command
{
    public function fresh()
    {
        $this->migrate();
        $this->seed();
    }
    
    public function migrate(){
        $this->app->db()->createTable('rounds', [
            'playerChoice' => 'varchar(8)',
            'won' => 'tinyint(1)', #boolean
            'timestamp' => 'timestamp',
]);
        dump('Migrations complete');
    }
    public function seed() 
    {
        $faker = Factory::create();

        for ($i = 10; $i > 0; $i--) {
            $this->app->db()->insert('rounds', [
                'playerChoice' => ['rock', 'paper', 'scissors'][rand(0,2)],
                'won' => rand(0,1),
                'timestamp' => $faker->dateTimeBetween('-'.$i.' days', '-'.$i.' days')->format('Y-m-d H:i:s')
            ]);
      }
      dump('Seeds complete');
    }
}