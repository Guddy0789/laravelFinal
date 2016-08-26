@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
          @include('common.errors')


        <!-- Nueva Noticia Form -->
        <form action="{{ url('noticia') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Title -->
            <div class="form-group">
                <label for="noticia-title" class="col-sm-3 control-label">Titulo</label>

                <div class="col-sm-6">
                    <input type="text" name="title" id="noticia-title" class="form-control" value="{{ old('title') }}">
                </div>
            </div>
            <!-- Text -->
            <div class="form-group">
                <label for="noticia-text" class="col-sm-3 control-label">Texto</label>

                <div class="col-sm-6">
                    <input type="text" name="text" id="noticia-text" class="form-control" value="{{ old('text') }}">
                </div>
            </div>
            {{-- <!-- Task Name -->
            <div class="form-group">
                <label for="task-name" class="col-sm-3 control-label">Task</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control" value="{{ old('task') }}">
                </div>
            </div> --}}

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Añadir Noticia
                    </button>
                </div>
            </div>
        </form>
    </div>


    <!-- Listado de noticias -->
       @if (count($noticias) > 0)

            <div class="panel panel-default">
               <div class="panel-heading">
                  Noticias Actuales
               </div>

               <div class="panel-body">
                   <table class="table table-striped noticia-table">

                       <!-- Table Headings -->
                       <thead>
                           <th>Encabezado</th>

                           <th>Noticia</th>
                           <th>&nbsp;</th>
                       </thead>

                       <!-- Table Body -->
                       <tbody>
                           @foreach ($noticias as $noticia)
                               <tr>
                                   <!-- Titulo noticia -->
                                   <td class="table-text">
                                       <div>{{ $noticia->title }}</div>
                                   </td>

                                   <!-- Texto noticia -->
                                   <td class="table-text">
                                       <div>{{ $noticia->text }}</div>
                                   </td>

                                   <td>
                                       <!-- TODO: Delete Button -->
                                       <form action="{{ url('noticias/'.$noticia->id) }}" method="POST">
                                         {{ csrf_field() }}
                                         {{ method_field('DELETE') }}

                                         <button type="submit" class="btn btn-danger">
                                             <i class="fa fa-trash"></i> Delete
                                         </button>
                                     </form>
                                     </td>
                               </tr>
                           @endforeach
                       </tbody>
                   </table>
               </div>
           </div>
       @endif

    <!-- TODO: Current Tasks -->
@endsection
