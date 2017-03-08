@extends('layouts.app')

@section('content')
<section class="container">
    @foreach($posts as $post)
        <article>
           <ul class="list-group">
                <a href="{{action('PostsController@mostraartigo', [$post->id])}}"><li class="list-group-item">{{$post->titulo}}</li></a>
                <li class="list-group-item">{{str_limit($post->conteudo, 80, "...")}}</li>
           </ul>
        </article>
    @endforeach
    {{$posts->links()}}
</section>
@endsection