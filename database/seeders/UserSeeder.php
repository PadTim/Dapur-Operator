<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;
        $user->name = 'avex';
        $user->username = 'avexKD';
        $user->email = 'avexKD@KopiHideung.com';
        $user->email_verified_at = now();
        $user->password = Hash::make('1234567890');
        $user->hp = '085294033000';
        $user->is_admin = '1';
        $user->is_online = '0';
        $user->pp = 'user.jpg';
        $user->remember_token = Str::random(10);
        $user->save();

       $user1 = new User;
       $user1->name = 'admin';
       $user1->username = 'admin';
       $user1->email = 'admin@KopiHideung.com';
       $user1->email_verified_at = now();
       $user1->password = Hash::make('1234567890');
       $user1->hp = '1234567890';
       $user1->is_admin = '1';
       $user1->is_online = '0';
       $user1->pp = 'user.jpg';
       $user1->remember_token = Str::random(10);
       $user1->save();
       
       $user2 = new User;
       $user2->name = 'Win-Win';
       $user2->username = 'winwin';
       $user2->email = 'winwin@win-win.com';
       $user2->email_verified_at = now();
       $user2->password = Hash::make('1234567890');
       $user2->hp = '1234567890';
       $user2->is_admin = '1';
       $user2->is_online = '0';
       $user2->pp = 'user.jpg';
       $user2->remember_token = Str::random(10);
       $user2->save();
    }
}
