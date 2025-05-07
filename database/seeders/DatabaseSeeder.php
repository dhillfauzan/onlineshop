<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Kategori;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
        'nama' => 'Administrator',
        'email' => 'admin@gmail.com',
        'role' => '1',
        'status' => 1,
        'hp' => '0812345678901',
        'password' => bcrypt('admin123'),
        ]);
    
        #untuk record berikutnya silahkan, beri nilai berbeda pada nilai: nama, email, hp dengan nilai masing-masing anggota kelompok
    User::create([
        'nama' => 'fadhil rafif fauzan',
        'email' => 'fadhil@gmail.com',
        'role' => '0',
        'status' => 1,
        'hp' => '081234567892',
        'password' => bcrypt('admin123'),
        ]);
        User::create([
        'nama' => 'ikhwan cahya diraya',
        'email' => 'ikhwan@gmail.com',
        'role' => '0',
        'status' => 1,
        'hp' => '081234567892',
        'password' => bcrypt('admin123'),
        ]);
        User::create([
        'nama' => 'tri anggun fitriyani',
        'email' => 'anggun@gmail.com',
        'role' => '0',
        'status' => 1,
        'hp' => '081234567892',
        'password' => bcrypt('admin123'),
        ]);
        User::create([
        'nama' => 'faiz tamam',
        'email' => 'faiz@gmail.com',
        'role' => '0',
        'status' => 1,
        'hp' => '081234567892',
        'password' => bcrypt('admin123'),
        ]);
        User::create([
        'nama' => 'adnan firdaus',
        'email' => 'adnan@gmail.com',
        'role' => '0',
        'status' => 1,
        'hp' => '081234567892',
        'password' => bcrypt('admin123'),
        ]);

        #data kategori
        Kategori::create([
            'nama_kategori' => 'Brownies',
        ]);
        Kategori::create([
            'nama_kategori' => 'Combro',
        ]);
        Kategori::create([
            'nama_kategori' => 'Dawet',
        ]);
        Kategori::create([
            'nama_kategori' => 'Mochi',
        ]);
        Kategori::create([
            'nama_kategori' => 'Wingko',
        ]);
    }
}
