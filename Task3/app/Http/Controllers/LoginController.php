<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Seeker;

class LoginController extends Controller
{
    public function login(){
        return view('pages.login');
    }
    public function loginCheck(Request $request){
        $this->validate(
            $request,
            [
                
                'username' => 'required',
                'password'=>'required'
            ],
            [
                'username.required'=> 'Enter your username',
                
            ]
        );

        $seekers = Seeker::all();
        $Check=False;
        foreach($seekers as $user)
        {
            if($user->username== $request->username && $user->password==md5($request->password))
                {
                    $request=session()->put('user',$user->username);
                    $request=session()->put('userid',$user->id);
                    return redirect()->route('dashboard');
                    $Check=True;
                }
                
        }
        if($Check==False)
        {
           return ("User Id Or Password Not Matched");
        }
    }
}
