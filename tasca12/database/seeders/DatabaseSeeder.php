<?php

namespace Database\Seeders;

use App\Models\equipos;
use Database\Factories\equiposFactory;
use Database\Factories\partidosFactory;
use Illuminate\Database\Seeder;
use App\Models\partido;
use Illuminate\Database\Eloquent\Factories\Factory;
Use Database\Factories\UserFactory;
Use App\Models\User;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        equipos::factory(10)->create();

        partido::factory(10)->create();

        //User::factory(10)->create();
        Role::create(['name'=>'Admin']);

        $admin=User::create([

            'name'=>'Admin',
            'email'=>'admin@admin.com',
            'email_verified_at'=>now(),
            'password'=> bcrypt('password'),
            'cargo'=>'cargo',
            'remember_token' => Str::random(10),
            
        ]);

        $user1=User::create([

            'name'=>'Yolanda',
            'email'=>'yolanda@goro.com',
            'email_verified_at'=>now(),
            'password'=> bcrypt('password'),
            'cargo'=>'cargo',
            'remember_token' => Str::random(10),
            
        ]);

        $user2 = User::create([

            'name'=>'David',
            'email'=>'david@goro.com',
            'email_verified_at'=>now(),
            'password'=> bcrypt('password'),
            'cargo'=>'cargo',
            'remember_token' => Str::random(10),
            
        ]);
        $admin->assignRole('Admin');
     }
}
