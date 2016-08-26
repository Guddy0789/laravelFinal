@extends('layouts.app')
@section('content')
  <div class="row">

      <div class="col-lg-12 margin-tb">

          <div class="pull-left">

              <h2>Noticias</h2>

          </div>

          <div class="pull-right">

              <a class="btn btn-success" href="{{ route('admin.create') }}">Nueva Noticia</a>

              {{-- <a href="{{ route('registro.create') }}">Agregar nuevo</a> --}}
          </div>

      </div>

  </div>

{{--
  @if ($message = Session::get('success'))

      <div class="alert alert-success">

          <p>{{ $message }}</p>

      </div>

  @endif --}}


  <table class="table table-bordered">

      <tr>

          <th>No</th>

          <th>Titulo</th>

          <th>Descripcion</th>

          <th width="280px">Action</th>

      </tr>

  @foreach ($noticias as $key => $item)

  <tr>

      <td>{{ ++$i }}</td>

      <td>{{ $item->title }}</td>

      <td>{{ $item->text }}</td>

      <td>

           <a class="btn btn-info" href="{{ route('admin.show',$item->id) }}">Ampliar</a>

           <a class="btn btn-primary" href="{{ route('admin.edit',$item->id) }}">Editar</a>

          {!! Form::open(['method' => 'DELETE','route' => ['admin.destroy', $item->id],'style'=>'display:inline']) !!}

          {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

          {!! Form::close() !!}

      </td>

  </tr>

  @endforeach

  </table>


  {!! $noticias->render() !!}

@endsection
