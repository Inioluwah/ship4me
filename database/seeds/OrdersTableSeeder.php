<?php

use App\Http\Controllers\EncryptionController;
use App\Order;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class OrdersTableSeeder extends Seeder
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
        Order::create([
            'parcel_reference_id' => $encrypt->generateNumericKey(),
            'encryption_id' => $encrypt->getEncryption(),
            'pick_up_code' => $encrypt->generateNumericCode(),
            'batch_id' => $encrypt->generateNumericCode(),
            'receiver_name' => $faker->name,
            'receiver_email' => $faker->email,
            'receiver_phone' => $faker->phoneNumber,
            'price' => 300,
            'receiver_address' => $faker->address,
            'user_id' => 2,
        ]);

    }
}
