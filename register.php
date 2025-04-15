<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<body>
  <div class="d-flex justify-content-center align-items-center min-vh-100">
    <form class="bg-white p-4 rounded shadow w-100" style="max-width: 500px;" method="POST"
      action="controller/insert_user.php">
      <h2 class="text-center mb-4">Registrarse</h2>

      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="Username" required>
      </div>

      <div class="mb-3">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="tel" class="form-control" id="telefono" name="Telefono" required>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" id="email" name="Email" required>
      </div>

      <div class="mb-4">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="Password" required>
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-success">Registrarse</button>
      </div>
      <div class="text-center mt-3">
        ¿Ya tienes una cuenta? <a href="index.php">Inicia sesión</a>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
    crossorigin="anonymous"></script>
</body>

</html>