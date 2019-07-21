@extends('templade.templade')

@section('body')


<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Tabla Usuarios
                </h2>
                <br>
                <a href="{{ route('user.create') }}" class="btn btn-success waves-effect">
                  <i class="material-icons">add</i>
                  <span>REGISTRAR</span>
                </a>

            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th width="10px">N°</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Foto</th>
                                <th>Email</th>
                               
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                 
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->lastName }}</td>
                            <td ><img src="{{ asset('imagenes/'.$user->photo) }}" width="60px" height="60px"></td>
                            <td>{{ $user->email }}</td>
                    
                            <td width="10px">
                                <a href="{{ route('user.show', $user->id) }}" class="btn bg-grey btn-circle waves-effect waves-circle waves-float"  title="Ver">
                                    <i class="material-icons">remove_red_eye</i>
                                </a>
                            </td>
                         
                            <td width="10px">
                                <a href="{{ route('user.edit', $user->id) }}" class="btn bg-light-blue btn-circle waves-effect waves-circle waves-float"  title="Editar">
                                    <i class="material-icons">edit</i>
                                </a>
                            </td>
                      
                            <td width="10px">
                                <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button class="btn bg-red btn-circle waves-effect waves-circle waves-float waves-light btndelete" title="Eliminar" >
                                   <i class="material-icons">delete_forever</i>
                                </button>
                                </form>
                            </td>
                       
                            
                            </tr>
                            @endforeach
                           

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>         


@endsection