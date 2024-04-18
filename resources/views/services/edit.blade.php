@extends('layouts.form')

@section('content')

            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">EDITAR SERVICIOS</h3>
                        </div>
                        <div class="col text-right">
                            <a href="{{ url('/servicios') }}" class="btn btn-sm btn-succsess">Regresar</a>
                            <i class="fas fa-chevron-left"></i>
                        </div>
                    </div>
                </div>

        <div class="card-body"> 

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert aler-dangert" role="alert">
            <i class="fas fa-exclamation-triagle"></i>
            <strong>por favor!!</strong> {{$error}}
        </div>
    @endforeach
@endif

            <form action="{{ url('/servicios/'.$services->id) }}" method="POST">
                @csrf
                @method ('PUT')
                <div class="from-group">
                    <label for="name">Nombre del servicio</label>
                    <input type="text" name="name" class="form-control" value=" {{old('name', $services->name)}} " required>
                </div>

                <div class="from-group">
                    <label for="description">Descripcion</label>
                    <input type="text" name="description" class="form-control" value=" {{old('description'$services->description)}}" >
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Guardar servicio</button>
            </form>
        </div>

            </div>

@endsection