<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Machine;

class MachinesController
{
    public function index()
    {
        // $machines = DB::select('SELECT id, name FROM machines');
        // dd($machines);
        $machines = Machine::all();
        // dd($machine);
        return view('machines.index')->with('machines', $machines);
    }

    public function show(Machine $machine)
    {
        return view('machines.show')->with('machine', $machine);
    }

    public function create()
    {
        return view('machines.create');
    }

    public function store(Request $request)
    {
//    $machines = new Machine();
//    $machines->name = $request->name;s
//    $machines->save();

        //Pega todos os campos
//      Machine::create($request->all());

        //pode passar os campos que deseja gravar
        Machine::create($request->only('name'));

        return redirect('machines')->with('sucesso', 'Máquina Cadastrada com Sucesso');
    }

    public function edit(Machine $machine)
    {
            return view('machines.edit')->with('machine', $machine);
    }

    public function update(Request $request, Machine $machine)
    {
        $machine->fill($request->all())->save();
        return redirect()->route('machines.index')->with('sucesso', 'Máquina Editada com Sucesso');
    }

    public function destroy(Machine $machine)
    {
        $machine->delete();

        return redirect()->route('machines.index')->with('sucesso', 'Máquina Apagada com Sucesso');
    }
}
