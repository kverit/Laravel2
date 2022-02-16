<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function loginVk()
    {
        if(\Auth::id()){
            return redirect()->route('parser::parser::index');
        }

       return Socialite::with('vkontakte')->redirect();
    }

    public function responseVk()
    {
        $user = Socialite::driver('vkontakte')->user();
        $userInSoc = User::query()
            ->where('id_in_soc', $user->getId())
            ->first();
        
        if(is_null($userInSoc)) {
            
            $userInSoc = new User();
            $userInSoc->fill([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => \Hash::make('qwertyasdfgh'),
                'id_in_soc' => $user->getId(),
            ])->save();
        }

        \Auth::login($userInSoc);

        return redirect()->route('home');
    }
}
