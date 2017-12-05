@extends('master')

@section('titulo','Crear objeto')

    @section('contenido')
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3> Crear nuevo objeto</h3>
                        </div>
                        <div class="panel-body">
                            <p class="requerido"><i>Todos los campo son requeridos</i></p>
                            {!! Form::open(['url'=>'objetos/create','method'=>'post','class'=>'form-horizontal']) !!}
                            <div class="form-group {{ $errors->has('nombre') ? ' has-error' : '' }}">
                                {!! Form::label('nombre','Nombre',['class'=>'col-md-3']) !!}
                                <div class="col-md-9">
                                    {!! Form::text('nombre',null,['class'=>'form-control','required']) !!}
                                    @if ($errors->has('nombre'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('cantidad') ? ' has-error' : '' }}">
                                {!! Form::label('cantidad','Cantidad',['class'=>'col-md-3']) !!}
                                <div class="col-md-9">
                                    {!! Form::text('cantidad',null,['class'=>'form-control','required']) !!}
                                    @if ($errors->has('cantidad'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('cantidad') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                        </div>
                        <div class="panel-footer">
                            {!! Form::submit('Ingresar envio',['class'=>'btn btn-primary btn-block btn-lg']) !!}
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>

        @stop