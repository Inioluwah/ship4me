<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Keygen\Keygen;

class OrderController extends Controller
{
    public function newOrder()
    {
        return view('home');
    }

    public function generateReferenceID()
    {
        $key = new EncryptionController();
        $parcel_reference_id = $key->generateNumericKey();
        while (Order::whereparcel_reference_id($parcel_reference_id)->count() > 0)
        {
            $parcel_reference_id = $key->generateNumericKey();
        }
        return $parcel_reference_id;
    }

    public function generatePickUpCode()
    {
        $key = new EncryptionController();
        $pick_up_code = $key->generateNumericCode();
        while (Order::wherepick_up_code ($pick_up_code )->count() > 0)
        {
            $pick_up_code = $key->generateNumericCode();
        }
        return $pick_up_code ;
    }

    public function generateBatchId()
    {
        $key = new EncryptionController();
        $batch_id = $key->generateNumericCode();
        while (Order::wherebatch_id ($batch_id )->count() > 0)
        {
            $batch_id = $key->generateNumericCode();
        }
        return $batch_id ;
    }

    public function addNewOrder(Request $request)
    {
        $encrypt = new EncryptionController();
        $order = Order::create([
            'encryption_id' => $encrypt,
            'parcel reference_id' => $this->generateReferenceID(),
            'pick_up_code' => $this->generatePickUpCode(),
            'batch_id' => $this->generateBatchId(),
            'receiver_name' => $request->receiver_name,
            'receiver_phone' => $request->receiver_phone,
            'receiver_email' => $request->receiver_email,
            'receiver_address' => $request->receiver_address,
        ]);
        dd($order);
    }

    public function destroy(Order $order)
    {
        //
    }
}
//return Validator::make($data, [
//            'name' => 'required|string|max:255',
//            'email' => 'required|string|email|max:255|unique:users',
//            'phone' => 'required|string|min:11|unique:users',
//            'address' => 'string',
//            'admin' => 'required',
//            'password' => 'required|string|min:6|confirmed',
//        ]);
