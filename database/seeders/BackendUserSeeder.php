<?php

namespace Database\Seeders;

use App\Models\BackendUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class BackendUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BackendUser::query()->create([
            'name' => 'Admin',
            'email' => 'admin@sss.com',
            'password' => Hash::make('sss123'),
        ]);
    }
}
