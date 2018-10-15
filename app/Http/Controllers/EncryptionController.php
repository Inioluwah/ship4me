<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Keygen\Keygen;

class EncryptionController extends Controller
{
    public function getEncryption()
    {
        return md5(time().rand());
    }

    public function generateNumericKey()
    {
        return Keygen::numeric(8)->prefix(mt_rand(1, 9))->generate(true);
    }

    public function generateNumericCode()
    {
        return Keygen::numeric(6)->prefix(mt_rand(1, 9))->generate(true);
    }
}
