<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {
  protected $fillable = [
    'ClientCompanyName', 'ClientTradingName', 'ClientCNPJ', 'ClientCPF', 'ClientAddress' 'ClientEmail', 'ClientPhone', 'ClientOwnerName', 'ClientPhoneNumber',
  ];

}
