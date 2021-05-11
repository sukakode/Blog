<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Me Gilang R',
                'email' => 'megilangr1@mail.com',
                'password' => Hash::make('nanozero1'),
            ],
            [
                'name' => 'Me Nazoru',
                'email' => 'admin@admin.com',
                'password' => Hash::make('nanozero1'),
            ],
        ];

        try {
            foreach ($data as $key => $value) {
                $user = User::firstOrCreate($value);
            }
        } catch (\Throwable $th) {

        }
    }
}
