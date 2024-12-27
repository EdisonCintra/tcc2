<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        //carregar view
        return view('customers');
    }

    public function create(){
        return view('newCustomer');
    }

    public function store(CustomerRequest $request){
        $request->validated();

        Cliente::create([
            'name' => $request->name,
            'email' => $request->email,
            'cpf' => $request->cpf,
            'phone' => $request->phone
        ]);

        return redirect()->route('customers')->with('success', 'Cliente cadastrado com sucesso!');
    }
}
