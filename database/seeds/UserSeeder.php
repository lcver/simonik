<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        
        $d = new User;
        $d->name = "Romadhan";
        $d->email = "romadhanedy@gmail.com";
        $d->password = Hash::make('123321123');
        $d->role = "Super Admin";

        $d->save();
    }
}
