<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'Taro1234',
            'roll' => 1,
            'first_name' => '佐藤',
            'last_name' => '太郎',
            'first_name_kana'=>'さとう',
            'last_name_kana'=>'たろう',
            'tel1'=>'090',
            'tel2'=>'1234',
            'tel3'=>'5678',
            'email'=>'test@example.com',
            'sex'=>1, 
            'zip1'=>'100',
            'zip2'=>'8111',
            'pref'=>'東京都',
            'city'=>'千代田区千代田',
            'town'=>'1-1',
            'password'=>'password', 
        ]);
    }
}
