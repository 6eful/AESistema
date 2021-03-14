<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
// use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Response;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'accessLevel'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'accessLevel', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Function.
     *
     */

     static function store($dadosHTTP){
      $user = new User;
      $user->name           = $dadosHTTP['name'];
      $user->email          = $dadosHTTP['email'];
      $user->password       = Hash::make($dadosHTTP['password']);
      $user->remember_token = $dadosHTTP['_token'];

      $user->save();

      $user_confirm = User::where('email', $dadosHTTP['email'])->count();

       if ($user_confirm == 1){
         $response = [
           'message' => 'Usuário criado!',
           'code_status' => 200
         ];
       } else {
         $response = [
           'message' => 'Erro ao tentar criar usuário!',
           'code_status' => 400
         ];
       }

       return $response;
     }

     static function getInformationbyID($id){
       return $DataUser = User::Find($id);
     }

     static function deletebyID($id){
       $user = User::find($id)->delete();
       $userAlert = [
         'message' => 'Usuário excluido!',
         'code_status' => 200
       ];

       return $userAlert;
     }
}
