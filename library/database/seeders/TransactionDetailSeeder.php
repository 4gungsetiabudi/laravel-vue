<?php

namespace Database\Seeders;

use App\Models\TransactionDetail;
use Faker\Factory as Faker; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i=0; $i < 20; $i++) {
            $book = new TransactionDetail;

            $book->transaction_id = rand(9,28);
            $book->book_id = rand(49,68);

            $book->qty = rand(10,20);

            $book->save();
        }
    }
    
}
