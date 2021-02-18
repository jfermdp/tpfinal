<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario= new User();
        $usuario->name='Laravel';
        $usuario->email='laravel@email.com';
        $usuario->password = bcrypt('123456');
        $usuario->save();
    }
}
