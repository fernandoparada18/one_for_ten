<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SISTEMA DE MOVILIZACIÓN ELECTORAL</title>

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

            .login-page-image {
                align-items: center;
                background-image: url('images/fondo.jpg');
                background-repeat: no-repeat;
                background-size: 100% 100%;
                display: flex;
                flex-direction: column;
                height: 100vh;
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
                font-size: 40px;				
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
        </style>
    </head>
    <body class="login-page-image">
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
							<div class="title">
								<strong>SISTEMA DE MOVILIZACIÓN ELECTORAL</strong>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>
							</div>
						</div>
					</div>
				</div>

            </div>
        </div>
    </body>
</html>
