<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['encryption_id', 'parcel_reference_id', 'pick_up_code', 'batch_id', 'receiver_name', 'receiver_email', 'receiver_phone', 'receiver_address',];
}
