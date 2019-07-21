@extends('templade.templade')

@section('body')

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Usuario
                </h2>
            </div>
            <div class="body">
                <div class="form-horizontal">
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label>Nombre</label>
                        </div>
                        <div class="col-lg-2 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text"  class="form-control" value="{{ $user->name }}" disabled >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-horizontal">
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label>Apellido</label>
                        </div>
                        <div class="col-lg-2 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text"  class="form-control" value="{{ $user->lastName }}" disabled >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="form-horizontal">
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label>Email</label>
                        </div>
                        <div class="col-lg-2 col-md-10 col-sm-8 col-xs-7">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text"  class="form-control" value="{{ $user->email }}" disabled >
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-horizontal">
                    <div class="row clearfix">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                            <label>Foto</label>
                        </div>
                       
                        <img src="{{ asset('imagenes/'.$user->photo) }}" width="150x" height="150px">
             
                    </div>
                </div>
                <br>
                <div class="row clearfix">
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-0"></div>
                    <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
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
    </div>
</div>

     
@endsection
