@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Producto</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @if($errors->any())
                                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                    <strong>¡Revise los campos!</strong>
                                    @foreach($errors->all() as $e)
                                        <span class="badge badge-danger">{{$e}}</span>
                                    @endforeach
                                    <button type="button" class="close" data-dismis="alter" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <form action="{{route('productos.update',$p->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="nombre">Nombre</label>
                                            <input class="form-control" type="text" name="nombre" value="{{$p->nombre}}">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="descripcion">Descripcion</label>
                                            <textarea name="descripcion" cols="30" rows="10" class="form-control">{{$p->descripcion}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="precio">Precio</label>
                                            <input class="form-control" type="number" name="precio" value="{{$p->precio}}">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="form-group">
                                            <label for="imagen">Imagen</label>
                                            <input class="form-control" type="file" name="imagen" value="{{$p->imagen}}">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-outline-success">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
