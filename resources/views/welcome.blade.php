<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FILTROS WEB</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {


                /* Color de Fondo */
                background-color: #c6ff00;
                /* background-color: #ffca28; */
                
                /* Color del Titulo */

                color: #424242 ;  
                
                /* color:#ff3d00 */
                color:gradient-145deg-orange-amber;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {

            /* color de los link */

                /* color: #fffde7; */
                color:#ff3d00;

             
             /* distancia de los link interno */

                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            
            

  @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('equivals') }}">Buscador</a>
                    @else
                        <a href="{{ route('login') }}">Ingresar</a>
                        <a href="{{ route('register') }}">Registro</a>
                    @endauth
                </div>
            @endif




            <div class="content">
                <div class="title m-b-md">
                    Filtros Web 2020
                </div>

                <div class="links">
                    <!-- <a href="vehiculos">Vehículos</a> -->
                    <a href="buscadors">Vehículos</a>
                    <a href="equivals">Filtros</a>
                    <a href="buscadors">Cruce de Aplicaciones</a>
                    
                </div>
            </div>
        </div>
    </body>
</html>
