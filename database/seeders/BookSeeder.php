<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ModelBook;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(ModelBook $book): void
    {
        $book->create([
            'title' => 'O senhor dos anéis 3',
            'pages' => '100',
            'price' => '59.90',
            'id_user' => '1',
        ]);

        $book->create([
            'title' => 'A onda',
            'pages' => '40',
            'price' => '59.90',
            'id_user' => '1',
        ]);

        $book->create([
            'title' => 'Titanic',
            'pages' => '400',
            'price' => '59.90',
            'id_user' => '1',
        ]);
    }
}
