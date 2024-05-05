<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveClientRequest;
use App\Models\Car;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::paginate(10);
        return view('clients.index', compact('clients'));
    }

    public function store(SaveClientRequest $request)
    {
        Client::created($request->validated());
        return redirect()->route('clients.index');
    }

    public function viewCreate()
    {
        return view('clients.create');
    }
}
