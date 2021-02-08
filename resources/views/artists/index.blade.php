@extends ('layouts.main')

@section('content')
    <div class='container'>
        <h1 class='text-center'>Elenco Artisti</h1>

        @foreach ($artist as $artist)
            <ul>
                <li class='mb-5'>
                <h4>{{$artist->name}} </h4> <br>
                Nato a : {{$artist->luogo_di_nascita}} <br>
                Morto a : {{$artist->luogo_di_morte}} <br>
                Opera: {{$artist->opere}}

                </li>            
            </ul>
        @endforeach
    </div>
@endsection