<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture_payment_method extends Model
{
    use HasFactory;

    public function payment_methods(){
        return $this->belongsTo(Payment_method::class,'payment_method_id','id');
    }
}
