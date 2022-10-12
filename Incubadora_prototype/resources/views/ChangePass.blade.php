@extends('layouts.Dashboard')


@section('script')
@stop
@section('content')
<div class="container">

              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div
                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Cambia tu contraseña</h6>
                    
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <form>
                       
                        <div>
                            <label for="oldPass">Contraseña anterior:</label>
                            <input id="oldPass" type="password" class="form-control" >
                        </div>
                        <br>
                        <div>
                            Nuava contraseña:
                            <input type="password" class="form-control">
                        </div>
                        <br>
                        <div>
                            Confirmar nueva contraseña:
                            <input type="password" class="form-control" >
                        </div>
                        <br>
                        <center>
                            <button type="submit" class="btn btn-primary"> Confirmar</button>
        
                        </center>
        
                    </form>
                </div>
            </div>
            
        </div>
@stop