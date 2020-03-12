<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\settings;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Mail\newregisteration;
use App\Mail\htmlRegister;
use App\Mail\htmlconnect;

use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

   

    /*
    protected function redirectTo()
    {
        return '/login';
    }
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'l_name'=>'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'phone' => 'required|string|max:15',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $settings = settings::where('id','1')->first();
        //send email
        $objDemo = new \stdClass();
      $objDemo->receiver_email = $data['email'];
       $objDemo->receiver_password = $data['password'];
      $objDemo->sender = "$settings->site_name";
      $objDemo->receiver_name = $data['name'].' '.$data['l_name'];
      $objDemo->subject = 'Enregistrement';
      $objDemo->acct_activate_link = $settings->site_address."/activate/".session()->getId();

      Mail::to($data['email'])->send(new htmlRegister($objDemo));

      $objDemo1 = new \stdClass();
      $objDemo1->sender = "$settings->site_name";
      $objDemo1->receiver_name = $data['name'].' '.$data['l_name'];
      $objDemo1->subject = 'Connection';
      $objDemo1->url ="https://privilege-coin.com/login";

      Mail::to($data['email'])->send(new htmlconnect($objDemo1));
        
        return User::create([
            'name' => $data['name'],
            'l_name'=>$data['l_name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'phone_number' => $data['phone'],
            'act_session' => session()->getId(),
        ]);
        
    }
    public function apiReg(Request $request){
        dd($request);

    }
    
}
