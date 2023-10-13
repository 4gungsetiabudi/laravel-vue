<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Faker\Factory as Faker; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        $faker = Faker::create();

        for ($i=0; $i < 20; $i++) {
            $member = new Transaction;

         

            $member->member_id = rand(42,61);
            
            $member->date_start = $faker->dateTimeBetween('next Monday', 'next Monday +7 days');
            $member->date_end = $faker->dateTimeBetween(('Y-m-d H:i:s').' +2 days');
           
            
            $member->save();
        }

    }
}
 