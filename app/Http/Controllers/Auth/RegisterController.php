<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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

        $userData = [
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone_number' => $data['phone_number'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ];

        $user = User::create($userData);

        //Send confirmation email
        //dispatch(new SendEmailJob($data));

        //SendEmailJob::dispatch(new RegistrationCompleted ($data));

        return $user;

        $this->flashMessages('You have been successfully registered. Please confirm your registration by going into your emails and clicking the link provided.');

    }

//    public function guests()
//    {
//        $users = User::all();
//        return view('guests', ['guests' => $users]);
//    }

//    public function update(User $user)
//    {
//        //Method 1
//        if(request()->has('admin'))
//        {
//            $user->setAdmin();
//        }else{
//            $user->setGuest();
//        }
//
//        //Method 2
//        //request()->has('completed') ? $task->complete() : $task->incomplete();
//
//        //Method 3
//        //$method = request()->has('completed') ? 'complete' : 'incomplete';
//        //$task->$method();
//
//        //$task->complete(request()->has('completed'));
//        //
//        //dd(\request()->all());
//        //With the method below we allowing the controller to update models whereas with the method above we further
//        // encapsulate by giving models control over manipulation of the data
////        $task->update([
////            'completed' => \request()->has('completed')
////        ]);
//
//        return back();
//    }

    public function flashMessages($message)
    {
        session()->flash('message', $message);
    }
}
