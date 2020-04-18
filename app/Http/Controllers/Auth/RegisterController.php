<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Loja;
use App\Providers\RouteServiceProvider;
use App\Services\lojaService;
use App\Services\metodoPagamentoService;
use App\Services\negocioService;
use App\Services\opcaoCartaoService;
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

    private $negocioService;
    private $opcaoCartaoService;
    private $metodoPagamentoService;

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
     * @param negocioService $negocioService
     * @param opcaoCartaoService $opcaoCartaoService
     */
    public function __construct(negocioService $negocioService, opcaoCartaoService $opcaoCartaoService, metodoPagamentoService $metodoPagamentoService)
    {
        $this->middleware('guest');
        $this->negocioService = $negocioService;
        $this->opcaoCartaoService = $opcaoCartaoService;
        $this->metodoPagamentoService = $metodoPagamentoService;
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
            'name' => ['required', 'string', 'max:120'],
            'nome' => ['required', 'string', 'max:80', 'unique:negocios'],
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

        $this->negocioService->create($data, $user);
        $this->opcaoCartaoService->create($user);
        $this->metodoPagamentoService->create($user);

        return $user;
    }
}
