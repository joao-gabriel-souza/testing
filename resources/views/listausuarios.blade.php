@extends('layouts.app')

@section('content')
Lista de usuários
<section class="container">
@foreach($users as $user)

    <ul>
        <li>{{$user->name}}</li>
        <li></li>
    </ul>
    
@endforeach
</section>
@endsection