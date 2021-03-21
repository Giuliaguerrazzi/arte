@extends ('layouts.main')

@section('content')
    <div class="body-color">
    <div class="container">

<h1 class='text-center'>Elenco Artisti</h1>

    <ul>
    @foreach ($artist as $artist)
        <li class='me-5 mb-5 my-5'>
        <a href="{{route('artists.show', $artist->id)}}">
            <h4>{{$artist->name}} </h4>
            <img src="{{$artist->image}}" alt="">
        </a> <br>
        Nato a : {{$artist->luogo_di_nascita}} <br>
        Morto a : {{$artist->luogo_di_morte}} <br>


        </li> 
    @endforeach              
    </ul>

</div>
    </div>
       
       

       

        
@endsection