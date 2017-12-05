@extends('master')

@section('titulo',"Indice")

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Lista de objetos</h3>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                </thead>
                                @foreach($objetos as $objeto)
                                    <tr data-id="{{$objeto->ENV_ID}}">
                                        <td>{{$objeto->id}}</td>
                                        <td>{{$objeto->nombre}}</td>
                                        <td>{{$objeto->cantidad}}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" data-toggle="tooltip"
                                               title="Informacion detallada"
                                               href="{{URL::to('objetos/'.$objeto->ENV_ID)}}">
                                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                            </a>
                                        </td>
                                        <td>
                                            <a class="btn btn-warning btn-sm" data-toggle="tooltip"
                                               title="Editar informacion"
                                               href="{{URL::to('cliente/envio/edit/'.$objeto->ENV_ID)}}">
                                                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                                            </a>
                                        </td>
                                        <td>
                                            <a id="boton-eliminar" class="btn btn-danger btn-sm" data-toggle="tooltip"
                                               title="Eliminar envio"
                                               href="#">
                                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <div class="text-center"> {!! $objetos->render() !!}</div>
        </div>
    </div>


@stop
