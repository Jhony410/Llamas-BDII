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
    <form class="bg-white p-4 rounded shadow w-100" style="max-width: 400px;" method="POST"
      action="controller/verifi_user.php" id="loginForm">
      <h2 class="text-center mb-4">Iniciar Sesión</h2>
      <div class="mb-4">
        <label for="Emailfor" class="form-label">Email</label>
        <input type="text" class="form-control" name="Email" id="Emailfor">
      </div>
      <div class="mb-4">
        <label for="Paswordfor" class="form-label">Password</label>
        <input type="text" class="form-control" name="Pasword" id="Paswordfor">
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-primary" name="login">Sign in</button>
      </div>
      <div class="text-center mt-3">
        ¿No tienes una cuenta? <a href="register.php">Regístrate aquí</a>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script>
    document.getElementById('loginForm').addEventListener('submit', function (e) {
      const emailInput = document.getElementById('Emailfor');
      const passwordInput = document.getElementById('Paswordfor');

      const valorEmail = emailInput.value.trim();
      const valorPassword = passwordInput.value.trim();

      const soloValidos = /^[a-zA-Z0-9@._-]+$/;
      const sinInyeccionSQL = /^[^'"=;<>`%]+$/;

      const emailValido = soloValidos.test(valorEmail) && sinInyeccionSQL.test(valorEmail);
      const passwordValido = soloValidos.test(valorPassword) && sinInyeccionSQL.test(valorPassword);

      if (!emailValido || !passwordValido) {
        e.preventDefault();
        swal("Entrada inválida", "No uses comillas, signos raros ni código SQL en los campos", "error");
      }
    });
  </script>

  <script>
    <?php if (isset($_GET['registro']) && $_GET['registro'] === 'exitoso'): ?>

    swal(':D', "Usuario registrado correctamente", 'info').then(() => {
      window.history.replaceState({}, document.title, window.location.pathname);
    });

    <?php endif; ?>
    <?php if (isset($_GET['register']) && $_GET['register'] === 'not'): ?>

    swal('¡Hasta pronto!', "Cerrando sesión", 'warning').then(() => {
      window.history.replaceState({}, document.title, window.location.pathname);
    });

    <?php endif; ?>
  </script>

  </script>
</body>

</html>