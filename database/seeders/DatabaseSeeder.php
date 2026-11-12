<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        User::create(['name' => 'admin', 'email' =>'admin@perpus.test', 'password' => 'password', 'role' => 'admin']);
        User::create(['name' => 'namira', 'email' =>'siswa@perpus.test', 'password' => 'siswapassword', 'role' => 'siswa', 'kelas' => 'XII RPL 4']);

        Book::create(['title' => 'Harry Potter', 'author' => 'J.K Rowling', 'publisher' => 'Gramedia', 'year' => 2000, 'stock' => 10]);
        Book::create(['title' => 'Hujan', 'author' => 'Tere Liye', 'publisher' => 'Gramedia', 'year' => 2013, 'stock' => 4]);
        Book::create(['title' => 'Musim Yang Tak Sempat Kita Miliki', 'author' => 'Rintik Sedu', 'publisher' => 'Gramedia', 'year' => 2024, 'stock' => 8]);
        Book::create(['title' => 'Informatika', 'author' => 'Dimas Agung', 'publisher' => 'Gramedia', 'year' => 2026, 'stock' => 5]);
        Book::create(['title' => 'Sosiologi', 'author' => 'Naya Syafira', 'publisher' => 'Gramedia', 'year' => 2023, 'stock' => 6]);
    }

}