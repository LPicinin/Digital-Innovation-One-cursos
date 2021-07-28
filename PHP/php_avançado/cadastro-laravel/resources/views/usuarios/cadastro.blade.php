@extends('layout.base')

@section('title', 'Cadastro de usuáro')

@section('conteudo')
    <p>Formulário</p>
    <form action="{{ route('salvar') }}" method="post">
        {{ csrf_field() }}
        <div class="field">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome">
            @if ($errors->has('nome'))
                @foreach ($errors->get('nome') as $erro)
                    <strong class="erro">{{ $erro }}</strong>
                @endforeach
            @endif
        </div>
        <div class="field">
            <label for="email">E-Mail: </label>
            <input type="email" name="email" id="email">
            @if ($errors->has('email'))
                @foreach ($errors->get('email') as $erro)
                    <strong class="erro">{{ $erro }}</strong>
                @endforeach
            @endif
        </div>
        <div class="field">
            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha">
            @if ($errors->has('senha'))
                @foreach ($errors->get('senha') as $erro)
                    <strong class="erro">{{ $erro }}</strong>
                @endforeach
            @endif
        </div>
        <div class="btn">
            <input type="submit" value="Salvar">
        </div>

    </form>
@endsection
