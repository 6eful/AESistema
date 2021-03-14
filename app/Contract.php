<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model {
  protected $fillable = [
    'ClientIDContract', 'ContractAmount', 'ContractInitialValue', 'ContractQtPayment', 'ContractFile', 'ContractStatus',
  ];

  public function clientes(){
    return $this->belongsToMany(Client::class,'ClientIDContract');
    // return $this->hasOne(Client::class, 'ClientIDContract');
  }
}
