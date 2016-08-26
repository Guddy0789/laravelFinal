@extends('layouts.app')

@section('content')

      <div class="row">

          <div class="col-lg-12 margin-tb">

              <div class="pull-left">

                  <h2>Editar Noticia</h2>

              </div>

              <div class="pull-right">

                  <a class="btn btn-primary" href="{{ route('admin.index') }}"> Back</a>

              </div>

          </div>

      </div>


      @if (count($errors) > 0)

          <div class="alert alert-danger">

              <strong>Whoops!</strong> There were some problems with your input.<br><br>

              <ul>

                  @foreach ($errors->all() as $error)

                      <li>{{ $error }}</li>

                  @endforeach

              </ul>

          </div>

      @endif


      {!! Form::model($item, ['method' => 'PATCH','route' => ['admin.update', $item->id]]) !!}

      <div class="row">


          <div class="col-xs-12 col-sm-12 col-md-12">

              <div class="form-group">

                  <strong>Titulo:</strong>

                  {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}

              </div>

          </div>


          <div class="col-xs-12 col-sm-12 col-md-12">

              <div class="form-group">

                  <strong>Descripcion:</strong>

                  {!! Form::textarea('text', null, array('placeholder' => 'Description','class' => 'form-control','style'=>'height:100px')) !!}

              </div>

          </div>


          <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                  <button type="submit" class="btn btn-primary">Guardar</button>

          </div>


      </div>

      {!! Form::close() !!}

@endsection
