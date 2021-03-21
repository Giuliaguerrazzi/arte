@extends ('layouts.main')

@section('content')
    <div class="body-color">
    <div class='container'>
        <h1 class='text-center'>Biografia</h1>

                <h4>{{$artist->name}} </h4> 

                <img src="{{$artist->image}}" alt="">
                </a> <br>
                Nato a : {{$artist->luogo_di_nascita}} <br>
                Morto a : {{$artist->luogo_di_morte}} <br>
        
                <p> Opera: {{$artist->opere}}  </p>
                                     
           
    
    </div>
    
    </div>
 
@endsection