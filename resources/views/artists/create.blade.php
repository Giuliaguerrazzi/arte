@extends('layouts.main')

@section('content')

    <div class="container">
        <h1 class='text-white pt-3 pb-3 text-center title-menu'>Crea nuovo artista</h1>

        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error )
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif



        <form action="{{route('artists.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="name">Nome</label>
                <input class='form-control' type="text" id="name" name="name" value="{{old('name')}}">
            </div>
    
             <div class="form-group">
                <label for="luogo_di_nascita">Luogo di nascita</label>
                <textarea class="form-control" id="luogo_di_nascita" name="luogo_di_nascita">{{ old('luogo_di_nascita') }}</textarea>
            </div>

            <div class="form-group">
                <label for="luogo_di_morte">Luogo di morte</label>
                <textarea class="form-control" id="luogo_di_morte" name="luogo_di_morte">{{ old('luogo_di_morte') }}</textarea>
            </div>

            <div class="form-group">
                <label for="opere">Opera</label>
                <textarea class="form-control" id="opere" name="opere">{{ old('opere') }}</textarea>
            </div>

            <div class="form-group">
                <label for="image">Post image</label>
               <input class='form-cotrol' type="file" name="image" id="image" accept="image/*">
            </div>
    
            <input class='btn btn-primary' type="submit" value="Crea">
        </form>

    </div>



    
@endsection
