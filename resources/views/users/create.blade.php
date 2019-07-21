@extends('templade.templade')

@section('body')

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Crear Usuarios
                </h2>
            </div>
            <div class="body">
                <form action="{{ route('user.store') }}" id="form_advanced_validation" method="POST" enctype="multipart/form-data"  >
                    @csrf    
                    <div class="col-sm-12">
                        <div class="col-sm-3">
                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('name') ? 'focused error' : '' }}" >
                                    <label>Nombre*</label>
                                    <input type="text" name="name" class="form-control" required  value="{{ old('name') }}" maxlength="255">
                                </div>
                                     @if ($errors->has('name'))
                                    <span class="invalid-feedback {{ $errors->has('name') ? 'col-pink' : '' }}">
                                        <p>{{ $errors->first('name') }}</p>
                                    </span>
                                    @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-3">
                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('lastName') ? 'focused error' : '' }}" >
                                    <label>Apellido*</label>
                                    <input type="text" name="lastName" class="form-control" required  value="{{ old('lastName') }}" maxlength="255" >
                                </div>
                                     @if ($errors->has('lastName'))
                                    <span class="invalid-feedback {{ $errors->has('lastName') ? 'col-pink' : '' }}">
                                        <p>{{ $errors->first('lastName') }}</p>
                                    </span>
                                    @endif
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-12">
                        <div class="col-sm-3">
                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('email') ? 'focused error' : '' }}" >
                                    <label>Email*</label>
                                    <input type="email" name="email" class="form-control" required  value="{{ old('email') }}" maxlength="255" >
                                </div>
                                     @if ($errors->has('email'))
                                    <span class="invalid-feedback {{ $errors->has('email') ? 'col-pink' : '' }}">
                                        <p>{{ $errors->first('email') }}</p>
                                    </span>
                                    @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="col-sm-3">
                            <div class="form-group form-float">
                                <div class="form-line {{ $errors->has('password') ? 'focused error' : '' }}" >
                                    <label>Password*</label>
                                    <input type="password" name="password" class="form-control" required  value="{{ old('password') }}" maxlength="255" >
                                </div>
                                     @if ($errors->has('password'))
                                    <span class="invalid-feedback {{ $errors->has('password') ? 'col-pink' : '' }}">
                                        <p>{{ $errors->first('password') }}</p>
                                    </span>
                                    @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12" >
                        <div class="col-sm-3">
                            <div class="dz-message ">
                               
                                <h4>Suelte una foto aquí o haga clic para subir.</h4>
                                
                            </div>
                            <div class="fallback">
                                <input name="photo" type="file" required>
                            </div>
                        </div>
                    </div>
                          
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="col-sm-3">
                                <div class="demo-button-sizes"> 
                                    <button type="submit" class="btn btn-block bg-blue waves-effect">
                                        <i class="material-icons">verified_user</i>
                                        <span>GUARDAR</span>
                                    </button>
                                </div>
                            </div>   
                            <div class="col-sm-3">
                                <div class="button-demo">
                                    <a type="button" href="{{ route('user.index') }}">
                                        <button type="button" class="btn btn-block bg-teal waves-effect">
                                            <i class="material-icons">arrow_back</i>
                                            <span>ATRAS</span>
                                        </button>
                                    </a>        
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>       

@endsection