@extends ('layouts.main')

@section('content')
    <div class="body-color">
    <div class="container">

<h1 class='text-center'>Elenco Artisti</h1>
@foreach ($artist as $artist)
    <ul>
        <li class='mb-5'>
        <a href="{{route('artists.show', $artist->id)}}">
            <h4>{{$artist->name}} </h4>
            <img src="{{asset('../img/Caravaggio.jpg')}}" alt="">
        </a> <br>
        Nato a : {{$artist->luogo_di_nascita}} <br>
        Morto a : {{$artist->luogo_di_morte}} <br>
        Opera: {{$artist->opere}}

        </li>            
    </ul>
@endforeach
</div>
    </div>
       
       

       

        
@endsection