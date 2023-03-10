<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>NAABOL | AIP</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="../favicon.ico" type="image/x-icon" />

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('resources/plantilla/plugins/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/plantilla/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/plantilla/plugins/ionicons/dist/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/plantilla/plugins/icon-kit/dist/css/iconkit.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('resources/plantilla/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/plantilla/dist/css/theme.min.css') }}">

    <!-- norific8 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css"
        media="screen">
    <script src="{{ asset('resources/plantilla/src/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    <link rel="stylesheet"
        href="{{ asset('resources/plantilla/plugins/jquery-toast-plugin/dist/jquery.toast.min.css') }}">
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="auth-wrapper">
        <div class="container-fluid h-100">
            <div class="row flex-row h-100 bg-white">
                <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                    <div class="lavalite-bg" style="background-image: url('resources/plantilla/img/auth/login-bg.png')">
                        <div class="lavalite-overlay"></div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                    <div class="authentication-form mx-auto">
                        <div class="logo-centered">
                            <a href="../index.html"><img src="" alt=""></a>
                        </div>
                        <h3><strong>NAABOL | </strong> PUBLICACI??N DE INFORMACI??N AERONAUTICA</h3>
                        <div class="row">
                            <div class=" col-6"><button class="btn btn-block btn-sm btn-theme"
                                    onclick="showform(1)">INICIAR SESSI??N</button></div>
                            <div class=" col-6"><button class="btn btn-block btn-sm btn-purple"
                                    onclick="showform(2)">REGISTRARSE</button></div>

                        </div>
                        <div id="objLogin" style="display: block">
                            <form id="formLogin">
                                @csrf
                                <p>Inicio de sessi??n</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="usu_codigo"
                                        placeholder="Codigo de usuario" required="" value="">
                                    <i class="ik ik-user"></i>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Contrase??a"
                                        required="" value="">
                                    <i class="ik ik-lock"></i>
                                </div>
                                <div class="sign-btn text-center">
                                    <button type="submit" class="btn btn-theme">INGRESAR</button>
                                </div>
                            </form>
                        </div>
                        <div id="objRegister" style="display: none">
                            <form id="formRegis" onsubmit="event.preventDefault(); registerClie()">
                                @csrf
                                <p>Registro de Cliente</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="usu_nombre" placeholder="Nombre Completo"
                                        required="" value="" required>
                                    <i class="ik ik-user"></i>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="usu_empresa" placeholder="Nombre Empresa"
                                        required="" value="" required>
                                    <i class="ik ik-user"></i>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="usu_telf" placeholder="# Telefonico"
                                        required="" value="" required>
                                    <i class="ik ik-user"></i>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="Correo Electronico"
                                        placeholder="Correro Electronico" required="" value="" required>
                                    <i class="ik ik-lock"></i>
                                </div>
                                <p>
                                    Una ves enviada su solicitud, el Personal acargo se contactara para proceder con su
                                    correspondiente Pago y entrega de Credenciales de Acceso
                                </p>
                                <div class="sign-btn text-center">
                                    <button type="submit" class="btn btn-purple">REGISTRARSE</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('resources/plantilla/src/js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('resources/plantilla/plugins/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('resources/plantilla/plugins/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('resources/plantilla/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('resources/plantilla/plugins/screenfull/dist/screenfull.js') }}"></script>
    <script src="{{ asset('resources/plantilla/dist/js/theme.js') }}"></script>
    <script src="{{ asset('resources/plantilla/plugins/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>
    <!-- notific8 -->
    <script>
        function showform(tipo) {
            div1 = document.getElementById('objLogin');
            div2 = document.getElementById('objRegister');
            if (tipo == 1) {
                div1.style.display = 'block';
                div2.style.display = 'none';

            }
            if (tipo == 2) {
                div1.style.display = 'none';
                div2.style.display = 'block';
            }
        }


        $('#formLogin').submit(function(e) {
            e.preventDefault();
            login_1()
        });

        function login_1() {
            $.ajax({
                type: "post",
                url: "log1",
                data: $('#formLogin').serialize(),
                success: function(e) {
                    console.log(e);
                    if (e == 'accepted') {

                        window.location.href = 'doc';

                    } else if (e == 'noUser') {
                        params = {

                            text: 'Usuario no Registrado',
                            showHideTransition: "slide",
                            icon: "info",
                            loaderBg: "#46c35f",
                            position: "top-right",
                        };
                        $.toast(params);
                    } else if (e == 'noPass') {
                        params = {

                            text: 'Contrase??a Incorrecta!',
                            showHideTransition: "slide",
                            icon: "info",
                            loaderBg: "#46c35f",
                            position: "top-right",
                        };
                        $.toast(params);
                    }
                }
            });
        }

        let registerClie = () => {
            $.ajax({
                type: "post",
                url: "user/registerCliente",
                data: $('#formRegis').serialize(),
                success: function(response) {
                    if (response.est == 'success') {
                        params = {
                            text: 'Informacion Enviada!',
                            showHideTransition: "slide",
                            icon: "info",
                            loaderBg: "#46c35f",
                            position: "top-right",
                        };
                        $.toast(params);
                        $('#formRegis').trigger('reset');
                        showform(1);
                        return
                    }
                    params = {
                        text: 'ERROR!',
                        showHideTransition: "slide",
                        icon: "danger",
                        loaderBg: "#46c35f",
                        position: "top-right",
                    };
                    $.toast(params);
                }
            });
        }
    </script>

</body>

</html>
