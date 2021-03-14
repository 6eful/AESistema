<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model {
  protected $fillable = [
    'ContractIDPayment', 'PaymentAmount', 'PaymentDate',
  ];

  public function contratos(){
    return $this->belongsToMany(Contract::class, 'ContractIDPayment');
    // return $this->hasOne(Contract::class, 'ContractIDPayment');
  }
}
