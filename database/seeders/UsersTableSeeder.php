<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        $users = 20;
        for($i = 0; $i < $users; $i++) {

        
        User::create([
            'name' => Str::random(10),
            'email' => Str::random(10). '@gmail.com',
            'password' => bcrypt('password'),
        
        ]);
    
        }   
    }
}