@extends('layouts.app')

@section('content')
<section class="container">
    <h1>Perfil</h1>
    <ul>
        <li>{{Auth::user()->name}}</li>
        <li>{{Auth::user()->email}}</li>
    </ul>
</section>


@endsection