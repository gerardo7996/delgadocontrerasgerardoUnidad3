@extends('layout/template')

@section('title', 'Muebleria Vanguardia - Detalles del producto')

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

    h2 {
        font-family: 'Century Gothic';
        font-style: initial;
        color: #000000;
    }

    h4 {
        font-family: 'Century Gothic';
        font-style: initial;
        font-size: 30px;
        font-weight: 600;
        color: #000000;
        text-align: center;
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

    .bi-backspace {
        margin-right: 10px;
    }

    .bi-paypal {
        margin-right: 10px;
    }

    .bi-cart {
        margin-right: 10px;
    }
</style>
@endsection

@extends('layout/navbar')
<br>
@section('contenido')

<div class="container-fluid bg-white rounded shadow"><br>
    <center>
        <img class="icono-nuevo-producto" src="">
    </center>
    <h4 class="fw-bold text-center">Detalles del producto</h4><hr>
    <div class="row">
        <div class="col-md-6 order-md-1">
            <center>
            <img src="{{ asset($producto->imagen) }}" alt="" class="img-fluid">
            </center>
        </div>
        <div class="col-md-6 order-md-2">
            <h2 style="font-weight:600;">{{ $producto->descripcion }}</h2>
            <h2>{{ $producto->precio_unitario }}</h2>
            <p class="lead">
                {{ $producto->descripcion }}
            </p>

            <div class="d-grid gap-3 col-10 mx-auto">
                <div id="paypal-button-container"></div>
            </div>
        </div>
    </div>
    <br>
</div>
<br>
@endsection
@section('scripts')
<script type="text/javascript">
    paypal.Buttons({
        style:{
            shape: 'pill',
            label: 'pay'
        },
        createOrder: function(data, actions){
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: {{ $producto->precio_unitario }}
                    }
                }]
            });
        },
        onApprove: function(data, actions){
            actions.order.capture().then(function (detalles){
                Swal.fire(
                    "¡Pago completado!",
                    "Tu pago se ha realizado con exito",
                    "success"
                )
                console.log(detalles);
            });
        },
        onCancel: function(data){
            Swal.fire(
                "Pago cancelado",
                "Tu pago fue cancelado y no se pudo realizar la transacción",
                "info"
            )
            console.log(data);
        }
    }).render('#paypal-button-container');
</script>
@endsection