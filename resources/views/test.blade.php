@extends('layouts.app')

@section('content')
<section class="container">
    <h1>Perfil</h1>
    <ul>
        <li>{{Auth::user()->name}}</li>
        <li>{{Auth::user()->email}}</li>
    </ul>
</section>
Essa alteração foi feita a partir de um clone, simulando um remoto


@endsection