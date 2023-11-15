@extends('layout/template')

@section('title', 'Muebleria Vanguardia - Catálogo de productos')

@section('styles')
<style type="text/css">
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-image: url('https://th.bing.com/th/id/R.8fd6ffa811b46ea593fea1566d749c97?rik=x%2fRi%2fyzkEWLHbg&riu=http%3a%2f%2f1.bp.blogspot.com%2f-2Gasb7hHsvQ%2fUTNynh9u52I%2fAAAAAAAAkIM%2fDhRSJLBTQQI%2fs1600%2fsala-grande-muy-moderna.jpg&ehk=Hivk94MkUui5IfIdWite2NHoHiuiqXUWzh2WqywFkjM%3d&risl=&pid=ImgRaw&r=0');
        background-repeat: no-repeat;
        background-size: cover;
    }

    h4 {
        font-family: 'Century Gothic';
        font-style: initial;
        font-size: 30px;
        font-weight: 600;
        color: #000000;
        text-align: center;
    }

    .mt-3, h5 {
        font-family: 'Century Gothic';
        font-style: initial;
        font-size: 22px;
        font-weight: normal;
        text-align: center;
        color: #000000;
        margin-bottom: 15px;
    }

    .navbar-brand {
        font-family: 'Century Gothic';
        color: #FAFAFA;
        font-weight: 600;
        text-align: left;
    }

    .btn-info {
        border-style: groove;
        border-color: aqua;
        border-radius: 7px;
        font-family: 'Century Gothic';
        font-style: initial;
        font-size: 16px;
        font-weight: 600;
        color: black;
        text-align: center;
    }

    .btn-info:hover {
        border-style: groove;
        border-color: #00E5FF;
        border-radius: 7px; 
        background: linear-gradient(320deg, #18FFFF,#00B0FF,#1A237E);
        color: darkblue;
        font-family: 'Century Gothic';
        font-style: initial;
        font-size: 16px;
        font-weight: 600;
        text-align: center;
        cursor: pointer;
    }

    .btn-danger {
        border-style: groove;
        border-color: #FF5252;
        background-color: #B71C1C;
        border-radius: 7px;
        font-family: 'Century Gothic';
        font-style: initial;
        font-size: 16px;
        font-weight: 600;
        color: whitesmoke;
        text-align: center;
    }

    .btn-danger:hover {
        border-style: groove;
        border-color: #D81B60;
        border-radius: 7px;
        background: linear-gradient(320deg, #FF80AB,#F50057,#880E4F);
        color: #FFFFFF;
        font-family: 'Century Gothic';
        font-style: initial;
        font-size: 16px;
        font-weight: 600;
        text-align: center;
        cursor: pointer;
    }

    .bi-backspace {
        margin-right: 10px;
    }

    table {
        font-family: 'Century Gothic';
        font-style: initial;
        font-weight: normal;
    }
</style>
@endsection

@section('navbar')
<nav class="navbar  fixed-top  navbar-expand-lg navbar-dark" style="background: hsla(0, 0%, 10%, 0.55); backdrop-filter: blur(10px);">
    <div class="container-fluid">
        <span class="navbar-brand">
            <img src="https://images.vexels.com/media/users/3/200117/isolated/preview/454ff5e4e43e4ee304b6400b4454704d-casa-simple-icono-casa-by-vexels.png" height="30" class="d-inline-block align-top" 
            alt="mdb logo" style="margin-right: 10px;">Muebleria Vanguardia</span>
        <a class="d-flex btn btn-info" href="{{ url('productos/login') }}"><i class="bi bi-backspace"></i><strong>Regresar</strong></a>
    </div>
</nav>
<br><br>
@endsection
<br>
@section('contenido')

<div class="container-fluid bg-white rounded shadow"><br>
    <center>
        <img class="icono-productos" src="">
    </center>
    <h4 class="fw-bold text-center">Catálogo de Productos</h4><hr>
    <h5 class="mt-3" align="center">Dentro de esta sección se pueden ver los detalles de todos los productos de mueblería, línea blanca, comedores y entre muchos otros.</h5><br>
    <a href="{{ url('productos/create') }}" class="btn btn-primary btn-sm"><i class="bi bi-patch-plus-fill" style="margin-right:7.5px;"></i>Nuevo producto</a><br><br>
    <div class="table-responsive">
        <table id="tblProductos" class="table table-striped table-bordered" style="width:100%;">
            <thead>
                <tr>
                    <th scope="col" style="background-color: #D500F9; color: #000000;">ID_Producto</th>
                    <th scope="col" style="background-color: #D500F9; color: #000000;">Código</th>
                    <th scope="col" style="background-color: #D500F9; color: #000000;">Descripción</th>
                    <th scope="col" style="background-color: #D500F9; color: #000000;">Precio unitario</th>
                    <th scope="col" style="background-color: #D500F9; color: #000000;">Cantidad</th>
                    <th scope="col" style="background-color: #D500F9; color: #000000;">Imagen</th>
                    <th scope="col" style="background-color: #D500F9; color: #000000;">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                <tr>
                    <th scope="row" style="color: #000000; font-weight: 600;">{{ $producto->id_producto }}</th>
                    <td>{{ $producto->codigo }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->precio_unitario }}</td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>
                        <center>
                            <img src="{{ asset($producto->imagen) }}" alt="{{ $producto->descripcion }}" class="img-fluid" width="100px">
                        </center>
                    </td>
                    <td>
                        <center>
                            <a href="{{ url('productos/'.$producto->id_producto) }}" class="btn btn-info"><i class="bi bi-info-circle-fill"></i></a>
                            <form action="{{ url('productos/'.$producto->id_producto) }}" method="post">
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                            </form>
                        </center>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
    </div>
</div>
<br><br>
@endsection

@section('scripts')
<script type="text/javascript">
    new DataTable('#tblProductos');
</script>
@endsection