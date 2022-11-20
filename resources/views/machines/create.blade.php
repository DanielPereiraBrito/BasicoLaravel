<x-layout title='Cadastrar Maquina'>

    <a href="{{route('machines.index')}}">Listar</a>

    <h1>Cadastrar Máquina</h1>

    <form action="{{route('machines.store')}}" method="post">
        @csrf
        <label>Nome: </label>
        <input type="text" name="name" id="name" placeholder="Nome da Máquina"/><br><br>

        <button type="submit">Cadastrar</button>

    </form>

</x-layout>
