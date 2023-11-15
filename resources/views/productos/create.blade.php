@extends('layout/template')

@section('title', 'Muebleria Vanguardia - Nuevo Producto')

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

    .navbar-brand {
        font-family: 'Century Gothic';
        color: #FAFAFA;
        font-weight: 600;
        text-align: left;
    }

    h4 {
        font-family: 'Century Gothic';
        font-style: initial;
        font-size: 30px;
        font-weight: 600;
        color: #000000;
        text-align: center;
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

    .input-group-text {
        border-style: groove;
        border-color: #FF6F00;
        border-radius: 10px;
        font-family: 'Century Gothic';
        color: black;
        font-style: initial;
        width: 40px;
    }

    .form-label {
        font-family: 'Century Gothic';
        font-style: initial;
        font-weight: 600;
        font-size: 16px;
        text-align: left;
        color: black;
    }

    .form-control {
        border-style: groove;
        border-color: #FF6F00;
        border-radius: 10px;
        font-family: 'Century Gothic';
        color: black;
        font-style: initial;
    }

    .bi-backspace {
        margin-right: 10px;
    }

    .bi-upc-scan {
        color: #000000;
    }

    .bi-info-square-fill {
        color: #000000;
    }

    .bi-coin {
        color: black;
    }

    .bi-box-seam-fill {
        color: #000000;
    }

    .bi-image-fill {
        color: #000000;
    }

    .btn-warning {
        border-style: groove;
        border-color: orangered;
        border-radius: 7px;
        width: 100%;
        height: 92%;
        font-family: 'Century Gothic';
        font-style: initial;
        font-size: 16px;
        font-weight: 600;
        color: black;
        text-align: center;
        padding: 3px 3px;
        margin-top: 15px;
        margin-bottom: 7px;
    }

    .btn-warning:hover {
        border-style: groove;
        border-color: #FFC400;
        border-radius: 7px;
        width: 100%;
        height: 92%;
        padding: 3px 3px;
        background: linear-gradient(320deg, #FFFF00,#FFC400,#E65100);
        color: #000000;
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
        width: 100%;
        height: 92%;
        font-family: 'Century Gothic';
        font-style: initial;
        font-size: 16px;
        font-weight: 600;
        color: whitesmoke;
        text-align: center;
        padding: 3px 3px;
        margin-top: 15px;
        margin-bottom: 7px;
    }

    .btn-danger:hover {
        border-style: groove;
        border-color: #D81B60;
        border-radius: 7px;
        width: 100%;
        height: 92%;
        padding: 3px 3px;
        background: linear-gradient(320deg, #FF80AB,#F50057,#880E4F);
        color: #FFFFFF;
        font-family: 'Century Gothic';
        font-style: initial;
        font-size: 16px;
        font-weight: 600;
        text-align: center;
        cursor: pointer;
    }

    .bi-send-plus-fill {
        margin-right: 10px;
    }

    .bi-trash-fill {
        margin-right: 10px;
    }

    .bi-backspace {
        margin-right: 10px;
    }
</style>
@endsection

@extends('layout/navbar')
<br><br>
@section('contenido')

<div class="container-fluid bg-white rounded shadow"><br>
    <center>
        <img class="icono-nuevo-producto" src="">
    </center>
    <h4 class="fw-bold text-center">Nuevo Producto</h4><hr>
    <form class="row" id="new_product_form" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-6">
            <label for="codigo" class="form-label">Código</label>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-upc-scan"></i></span>
                <input type="text" class="form-control" name="codigo" id="codigo" value="{{ old('codigo') }}" aria-label="codigo" aria-describedby="addon-wrapping">
            </div>
        </div>
        <div class="col-6">
            <label for="descripcion" class="form-label">Descripción</label>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-info-square-fill"></i></span>
                <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{ old('descripcion') }}" aria-label="descripcion" aria-describedby="addon-wrapping">
            </div>
        </div>
        <div class="col-6">
            <label for="precio_unitario" class="form-label" style="margin-top: 15px;">Precio Unitario</label>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-coin"></i></span>
                <input type="text"  class="form-control" name="precio_unitario" id="precio_unitario"  value="{{ old('precio_unitario') }}" aria-label="precio_unitario" aria-describedby="addon-wrapping">
            </div>
        </div>
        <div class="col-6">
            <label for="cantidad" class="form-label" style="margin-top: 15px;">Cantidad</label>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-box-seam-fill"></i></span>
                <input type="text" class="form-control" name="cantidad" id="cantidad" value="{{ old('cantidad') }}" aria-label="stock" aria-describedby="addon-wrapping">
            </div>
        </div>
        <div class="col-12">
            <label for="imagen" class="form-label" style="margin-top: 15px;">Imagen</label>
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping"><i class="bi bi-image-fill"></i></span>
                <input type="file" class="form-control" name="imagen" id="imagen" aria-label="imagen" aria-describedby="addon-wrapping">
            </div>
        </div>
        <div class="d-grid col-6">
            <button type="submit" class="btn btn-warning" name="cargar" id="cargar"><i class="bi bi-send-plus-fill"></i>Subir Producto</button>
        </div>
        <div class="d-grid col-6">
            <button type="reset" class="btn btn-danger" name="limipar" id="limipar"><i class="bi bi-trash-fill"></i>Limpiar Formulario</button>
        </div>
    </form>
    <br><br>
</div>
<br><br>
@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#cargar').click(function(){
            if ($('#codigo').val() == "") {
                Swal.fire({
                    icon: 'warning',
                    title: '¡Código Vacío!',
                    text: '¡Escribe un código de un producto!',
                    showConfirmButton: true,
                    confirmButtonColor: '#F50057',
                    confirmButtonText: '<i class="bi bi-check-circle-fill" style="margin-right:7.5px;"></i>Aceptar'
                })
                return false;
            } else if ($('#descripcion').val() == "") {
                Swal.fire({
                    icon: 'warning',
                    title: '¡Descripción Vacía!',
                    text: '¡Escribe una descripción de un producto!',
                    showConfirmButton: true,
                    confirmButtonColor: '#F50057',
                    confirmButtonText: '<i class="bi bi-check-circle-fill" style="margin-right:7.5px;"></i>Aceptar'
                })
                return false;
            } else if ($('#precio_unitario').val() == "") {
                Swal.fire({
                    icon: 'warning',
                    title: '¡Precio Vacío!',
                    text: '¡Escribe un precio de un producto!',
                    showConfirmButton: true,
                    confirmButtonColor: '#F50057',
                    confirmButtonText: '<i class="bi bi-check-circle-fill" style="margin-right:7.5px;"></i>Aceptar'
                })
                return false;
            } else if ($('#cantidad').val() == "") {
                Swal.fire({
                    icon: 'warning',
                    title: '¡Cantidad Vacía!',
                    text: '¡Ingresa una cantidad en stock de un producto!',
                    showConfirmButton: true,
                    confirmButtonColor: '#F50057',
                    confirmButtonText: '<i class="bi bi-check-circle-fill" style="margin-right:7.5px;"></i>Aceptar'
                })
                return false;
            } else if ($('#imagen').val() == "") {
                Swal.fire({
                    icon: 'question',
                    title: '¡Imagen sin seleccionar!',
                    text: '¡Selecciona una imagen de un producto!',
                    showConfirmButton: true,
                    confirmButtonColor: '#F50057',
                    confirmButtonText: '<i class="bi bi-check-circle-fill" style="margin-right:7.5px;"></i>Aceptar'
                })
                return false;
            } else {
                var formData = new FormData(document.querySelector('#new_product_form'));

                $.ajax({
                    type: "POST",
                    url: "{{ url('productos') }}",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(resultado) {
                        if (resultado==1) {
                            Swal.fire(
                                '¡Error al subir el producto!',
                                'Surgió un error y el producto no se pudo guardar',
                                'error'
                            )
                            $('#codigo').val('');
                            $('#descripcion').val('');
                            $('#precio_unitario').val('');
                            $('#cantidad').val('');
                            $('#imagen').val('');
                        } else {
                            Swal.fire(
                                '¡Producto registrado!',
                                'El producto se registró con éxito',
                                'success'
                            ).then((result) => {
                                window.location.href = '{{ url("productos") }}';
                                $('#codigo').val('');
                                $('#descripcion').val('');
                                $('#precio_unitario').val('');
                                $('#cantidad').val('');
                                $('#imagen').val('');
                            });
                        }
                    }
                });
                return false;
            }
        });
    });
</script>
@endsection