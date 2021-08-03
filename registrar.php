
<!doctype html>
    <html lang="en">
    <head>
        <title>Registro de usuario</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="public/style1.css">
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
                <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
                <div class="card-img-left d-none d-md-flex">
                    <!-- Background image for card set in CSS! -->
                </div>
                <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fw-light fs-5">Registrarse</h5>
                    <form action="servidor/registro.php" method="post">

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre" required autofocus>
                            <label for="nombre">Nombre</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="paterno" placeholder="Apellido paterno" name="paterno" required autofocus>
                            <label for="paterno">Apellido paterno</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="materno" placeholder="Apellido materno" name="materno" required autofocus>
                            <label for="materno">Apellido materno</label>
                        </div>
                        <div class="form-floating mb-3">
                            <select name="sexo" id="sexo" class="form-control">
                                <option value="mujer">Mujer</option>
                                <option value="hombre">Hombre</option>
                            </select>
                            <label for="sexo">Sexo:</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="tel" class="form-control" id="telefono" placeholder="Telefono" name="telefono" required autofocus>
                            <label for="telefono">Numero de telefono</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
                            <label for="email">Email</label>
                        </div>
                        <hr>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="usuario" placeholder="Usuario" required autofocus name="usuario">
                            <label for="usuario">Usuario</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                            <label for="password">Password</label>
                        </div>

                        <div class="d-grid mb-2">
                            <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit">Registrarse</button>
                        </div>

                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>