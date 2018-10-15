<?php

use App\Http\Controllers\EncryptionController;
use App\User;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $encrypt = new EncryptionController();
        $faker = Faker::create();
        User::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'encryption_id' => $encrypt->getEncryption(),
            'admin' => 0,
            'phone' => $faker->phoneNumber,
            'address' => $faker->address,
            'password' => bcrypt('123'),
        ]);
    }
}
