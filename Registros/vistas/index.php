<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Buscar datos en tiempo real con PHP, MySQL y AJAX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/styles.css">

</head>

<body>
    <main>
        <div class="container py-4 text-center">
            <img src="src/img/logoItec.png" alt="">
            <h2 class="titulo">PARTICIPANTES</h2>

            <div class="row justify-content-md-center">
                <div class="col-md-4">
                    <form action="" method="post">
                        <label for="campo"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="36" height="36" viewBox="0 0 24 24" stroke-width="2" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <circle cx="10" cy="10" r="7" />
                                <line x1="21" y1="21" x2="15" y2="15" />
                            </svg></label>
                        <input type="text" name="campo" id="campo">
                    </form>
                </div>
            </div>

            <div class="row py-4">
                <div class="col">
                    <table class="table table-sm table-bordered">
                        <thead class="textotbl">
                            <th>DNI</th>
                            <th>CELULAR</th>
                            <th>NOMBRE Y APELLIDO</th>
                            <th>CURSO</th>
                            <th>NIVEL</th>
                            <th>NOTA</th>
                            <th>HORAS</th>
                            <th>MES</th>
                            <th>AÑO</th>
                        </thead>
                        <tbody id="content">
                        </tbody>
                    </table>
                    
                    <div id="menu">
                        <!--<ul>                           
                            <a class="cerrar_sesion" href="includes/logout.php">Cerrar sesión</a>
                        </ul>-->
                        <button class="btn"><a class="cerrar_sesion" href="includes/logout.php">Cerrar sesión</a></button>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </main>
    <script src="src/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>