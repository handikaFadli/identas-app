<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{

		User::updateOrCreate(
			[
				'email' => 'admin@identas.id',
			],
			[
				'client_id' => null,
				'name' => 'Administrator IDENTAS',
				'role' => 'admin',
				'password' => Hash::make('password'),
				'is_active' => true,
			]
		);
	}
}
