<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('app2025/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('app2025/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('app2025/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="bg-light d-flex justify-content-center align-items-center vh-100">
  <div class="card shadow" style="width: 400px;">
    <div class="card-body">
      <h3 class="text-center mb-4">Iniciar Sesión</h3>
      <form action="{{ action('App\Http\Controllers\LoginController@iniciar_sesion') }}" method="post">
        {{ csrf_field() }}

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" value="">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" value="">
        </div>

        <div class="text-center">
          <input type="submit" class="btn btn-info shadow" name="operacion" value="Iniciar sesion">
        </div>

      </form>

    </div>
  </div>
  <!-- jQuery -->
  <script src="{{asset('app2025/plugins/jquery/jquery.min.js')}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset('app2025/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('app2025/dist/js/adminlte.min.js')}}"></script>
</body>

</html>