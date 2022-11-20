<x-layout title='Vizualizar Maquina'>

    <a href="{{route('machines.index')}}">Listar</a>

    <h1>Vizualizar Máquina</h1>

    ID: {{$machine->id}}<br>
    Nome: {{$machine->name}}

</x-layout>
