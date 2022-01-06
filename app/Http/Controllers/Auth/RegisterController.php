<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'namagroup' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8','regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/', 'confirmed'],
            'binus' =>['required'],
            'name' => ['required', 'string', 'max:255'] ,
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'whatsapp' => ['required', 'min:9','unique:users'],
            'line' => ['required','unique:users'],
            'github'  => ['required'],
            'place'  => ['required'],
            'date'  => ['required'],
            'cv'   => ['required'],
            'card'  => ['required'],
            // 'mimes:png,jpg,jpeg,pdf'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'namagroup' => $data['namagroup'],
            'password' => Hash::make($data['password']),
            'binus' => $data['binus'],
            'name' => $data['name'] ,
            'email' =>$data['email'] ,
            'whatsapp' => $data['whatsapp'],
            'line' => $data['line'],
            'github'  => $data['github'],
            'place'  => $data['place'] ,
            'date'  => $data['date'] ,
            'cv'   => $data['cv'] ,
            'card'  => $data['card'],
        ]);
    }

    // public function register(Request $request){

    //     $cv = $request->file('cv'); /*menyimpan data file yang diupload ke variabel $file */
    //     $card = $request->file('card');

	//     $filecv = time()."_".$cv->getClientOriginalName();
    //     $filecard = time()."_".$card->getClientOriginalName();

	//     $tujuan_upload = 'data_file'; /*isi dengan nama folder tempat kemana file diupload */
	//     $cv->move($tujuan_upload,$filecv);
    //     $card->move($tujuan_upload,$filecard);

    //     User::create([
    //         'cv1'=> $filecv,
    //         'card1'=> $filecard,
    //     ]);
    // }
}
