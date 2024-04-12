<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //   foreach(User::all() as $user)
    //   {
    //     DB::table('users')->insert([
    //         'name' => Str::random(10),
    //         'email' => 'user'.$user->id.'@erp.com',
    //         'password' => Hash::make(123456),
    //     ]);
    //   }
      
    }  
       
   }
