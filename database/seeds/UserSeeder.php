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
      $data = [
        'name'        =>    "alonso",
        'email'       =>    "alonso@gmail.com",
        'password'    =>    Hash::make("teste123"),
        'accessLevel' =>    true
      ];

      if(User::where('email','=',$data['email'])->count()){
        $UserData = User::where('email','=',$data['email'])->first();
        $UserData->update($data);
        echo "Usuario Alterado!";
      }else{
        User::create($data);
        echo "Usuario Criado!";
      }
    }
}
