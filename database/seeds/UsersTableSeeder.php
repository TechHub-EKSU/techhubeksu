<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    User::create([
      'id' => 1,
      'name' => 'TechHub EKSU',
      'email' => 'techhubeksu@gmail.com',
      'username' => 'techhubeksu',
      'role' => 'admin',
      'category' => 'exco',
      'email_verified_at' => now(),
      'password' => bcrypt('password'),
      'created_at' => now(),
      'updated_at' => now()
    ]);
    
    User::create([
      'id' => 2,
      'name' => 'Moderator User',
      'email' => 'moderator@techhubeksu.com',
      'username' => 'moderator',
      'role' => 'admin',
      'category' => 'moderator',
      'email_verified_at' => now(),
      'password' => bcrypt('password'),
      'created_at' => now(),
      'updated_at' => now()
    ]);

    User::create([
      'id' => 3,
      'name' => 'Individual User',
      'email' => 'individual@techhubeksu.com',
      'username' => 'individual',
      'role' => 'user',
      'category' => 'individual',
      'email_verified_at' => now(),
      'password' => bcrypt('password'),
      'created_at' => now(),
      'updated_at' => now()
    ]);

    User::create([
      'id' => 4,
      'name' => 'Community User',
      'email' => 'community@techhubeksu.com',
      'username' => 'community',
      'role' => 'user',
      'category' => 'community',
      'email_verified_at' => now(),
      'password' => bcrypt('password'),
      'created_at' => now(),
      'updated_at' => now()
    ]);

    User::create([
      'id' => 5,
      'name' => 'StartUp User',
      'email' => 'startup@techhubeksu.com',
      'username' => 'startup',
      'role' => 'user',
      'category' => 'startup',
      'email_verified_at' => now(),
      'password' => bcrypt('password'),
      'created_at' => now(),
      'updated_at' => now()
    ]);
  }
}