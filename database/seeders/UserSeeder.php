<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         $user = User::create([
            'name'      => 'Kepala Sekolah',
            'username'  => 'kepsek',
            'email'     => 'kepsek@sch.id',
            'role'      => 'Admin',
            'status'    => 'Aktif',
            'password'  => bcrypt('Bismillah')
        ]);

        $user->assignRole('Admin');

        $user = User::create([
            'name'      => 'diki',
            'username'  => 'dican',
            'email'     => 'guru@sch.id',
            'role'      => 'Guru',
            'status'    => 'Aktif',
            'password'  => bcrypt('Bismillah')
        ]);

        $user->assignRole('Guru');

        $user = User::create([
            'name'      => 'dii',
            'username'  => 'diii',
            'email'     => 'staf@sch.id',
            'role'      => 'Staf',
            'status'    => 'Aktif',
            'password'  => bcrypt('Bismillah')
        ]);

        $user->assignRole('Staf');

        $user = User::create([
            'name'      => 'cand',
            'username'  => 'zul',
            'email'     => 'ortu@sch.id',
            'role'      => 'Orang Tua',
            'status'    => 'Aktif',
            'password'  => bcrypt('Bismillah')
        ]);

        $user->assignRole('Orang Tua');

        $this->command->info('Data User '.$user->name.' has been saved.');
       
    }
}
