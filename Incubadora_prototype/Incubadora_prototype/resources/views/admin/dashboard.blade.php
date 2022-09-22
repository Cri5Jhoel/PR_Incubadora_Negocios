@extends('layouts.app')

@section('content')
<link rel="stylesheet" href=".../">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               
            </div>
        </div>
    </div>
</div>

<header class="container-fluid bg-dark p-3">
        <h2 class="text-white">Administrar Docentes</h2>
    </header>

    <section class="main_container bg-dark border-top border-white">
        <div class="menu text-white mt-2">
            <div class="logo_menu">
                <i class="fa fa-bars float-end fa-2x"></i>
            </div>
            <div class="user_style">
                <i class="fa fa-user fa-6x"></i>
            </div>
            <div class="user_style h3">
                Administrador
            </div>
        </div>
        <div class="content bg-white">
            <div class="text-white m-5 row body_main">
                <form class="form">
                    <input type="search" class="search-form">
                    <button type="submit" class="btn btn-primary" style="font-size: 20px;">
                        <i class="fa-solid fa-1x fa-magnifying-glass"></i>
                        Buscar
                    </button>
                    <button type="submit" class="btn btn-dark text-white float-end" style="font-size: 20px;">Agregar Docente</button>
                </form>
                <div class="p-4 mt-3 rounded-4 body_card">
                    <form class="form">
                        <div class="forms_crud">
                            <input type="text">
                            <button type="submit" class="btn btn-warning buttons_style">Modificar</button>
                            <button type="submit" class="btn btn-danger buttons_style">Eliminar</button>
                        </div>
                        <div class="forms_crud">
                            <input type="text">
                            <button type="submit" class="btn btn-warning buttons_style">Modificar</button>
                            <button type="submit" class="btn btn-danger buttons_style">Eliminar</button>
                        </div>
                        <div class="forms_crud">
                            <input type="text">
                            <button type="submit" class="btn btn-warning buttons_style">Modificar</button>
                            <button type="submit" class="btn btn-danger buttons_style">Eliminar</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </section>

@endsection


