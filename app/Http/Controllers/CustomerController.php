<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){

        $customers = Cliente::orderByDesc('id')->get();

        //carregar view
        return view('customers', ['customers' => $customers]);

    }

    public function show(Cliente $customer){
//        dd($customer);
      return view('editCustomer', ['customer' => $customer ]);
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
