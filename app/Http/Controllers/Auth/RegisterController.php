<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Loja;
use App\Providers\RouteServiceProvider;
use App\Services\lojaService;
use App\User;
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

    private $lojaService;

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
     * @param lojaService $lojaService
     */
    public function __construct(lojaService $lojaService)
    {
        $this->middleware('guest');
        $this->lojaService = $lojaService;
    }

    public function attributes()
    {
        return [
            'nome' => 'Nome de negócio',
        ];
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
            'name' => ['required', 'string', 'max:255'],
            'nome' => ['required', 'string', 'max:255', 'unique:lojas'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
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
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        Loja::create([
            'nome' => $data['nome'],
            'url' => $this->lojaService->createUrlFromName($data['nome']),
            'user_id' => $user->id,
        ]);

        return $user;
    }
}
