@extends('layouts.app')

@section('content')

<section class="container">
Lista de usuários
@foreach($users as $user)

    <ul>
        <li>{{$user->name}}</li>
    </ul>
    
@endforeach
</section>
@endsection