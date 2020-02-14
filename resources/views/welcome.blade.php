<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
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
                position: right;
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
                font-size: 35px;				
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .10rem;
                text-decoration: none;
                text-transform: uppercase;
			}
            .links > p {
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
			}

            .m-b-md {
                margin-bottom: 30px;
				color:blue;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a href="{{ route('login') }}">Ingresar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif

            
			<div class="content">
				<div class="box box-primary">
					<div class="box-body">
						<div class="row">
							<div class="title m-b-md">
								<strong>VENEZOLANOS EN RD</strong>
							</div>
							<div class="links">
								<p>Registro De Venezolanos para Permiso Temporal de Permanencia (PTP)</p>							
							</div>
								<p>Este Registro es un plan que se está diseñando para Regularización por 1 año, solo debe ingresar la información de Contacto de 3 o más amigos Dominicanos</p>
						</div>
					</div>
				</div>

            </div>
        </div>
    </body>
</html>
