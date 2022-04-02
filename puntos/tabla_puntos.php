<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <title>Aprende Mexico LSM</title>

    <style>
        .button {
        background: linear-gradient(102deg, #1a2537 40%, #1a2537 60%);
        color: white;
        display: inline-block;
        padding: 1rem 2rem;
        border-radius: .25rem;
        min-width: 200px;
        text-decoration: none;
        box-shadow: 0 0 0 0 rgba(0, 0, 0, .5);
        animation: pulse 1.5s infinite;   
        }

        @keyframes pulse {
            0% {
                transform: scale(.99);
                box-shadow: 0 0 0 0 rgba(256, 256, 256, .1);
            }
            70% {
                transform: scale(1);
                box-shadow: 0 0 0 30px rgba(256, 256, 256, 0);
            }
            100% {
                transform: scale(.99);
                box-shadow: 0 0 0 0 rgba(256, 256, 256, 0);
            }
        }  
        .button:hover{
            transform: scale(1.09);
            cursor: pointer;
        }
    </style>
</head>
<body style="background-color: slategray;"> 
    <h1 style="color:#1a2537; text-align: center;"> Aprendo  México  en LSM </h1>
    <h3 style="color: black; text-align: center; margin-top: 1em;">Tabla de puntos general</h3>    
    <a href="../index.html"><img src="../img/flecha.png" style=" width: 80px; margin-left: 5em; margin-top: -6em; position: absolute;"></a>

    <main>
        <div id="tablaDiv">
            <h3>Jugadores mejor puntuados:</h3>
            <table class="table table-striped table-dark" id="tabla_puntos_jugadores">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre de usuario</th>
                        <th scope="col">Puntuaje</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Marko</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Marko</td>
                        <td>0</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>