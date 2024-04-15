@extends('layouts.contenedor')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro de Ayuda</title>
    <link rel="stylesheet" href="../../css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
      
      @import url('https://fonts.googleapis.com/css2?family=Cabin:wght@400;600&display=swap');
      
      body{
        margin-top: 10px;
        font-family: "Cabin", sans-serif;
      }
      
      h1{
        font-size: 25px;
      }
      p{
        font-size: 13px;
      }

      input{
        margin-bottom: 12px;
        outline: none;
        box-shadow: none;
      }

      label{
        font-size: 18px;
        padding-left: 5px;
        font-weight: bold;
      }

      svg{
        margin-right: 5px;
      }

      .form-check-label{
        font-size: 13px;
      }
      .form-check-input{
        background-color: white;
      }
      .form-check-input::after{
        background-color: red;
      }
      
      .justify-content-center{
        padding: 15px;
        margin: 12px;
      }
      
      .card-footer{
        padding: 5px;
      }
      .btn-primary{
        background-color: black;
        color: white;
        width: 125px;
      }
    </style>
</head>

<body>
@section('component')
  <div class="container">
    <h1 class="text-center mt-2">¿En qué te podemos ayudar?</h1>
    <div class="row justify-content-center">
      <div class="col-md-4">
        <form method="POST" action="{{ route('pqrs.store') }}">
          @csrf
          <div class="mb-5">
          <label for="nombres" class="form-label custom-label">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
           </svg>
           Nombres
           </label>
            <input placeholder="Nombres" type="text" name="nombres" id="nombres" class="form-control" required>
            @if ($errors->has('nombres'))
            <div class="alert alert-danger">{{ $errors->first('nombres') }}</div>
            @endif

          </div>
          <div class="mb-3">
          <label for="telefono" class="form-label custom-label">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
          <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
          </svg>
          Teléfono
          </label>
            <input placeholder="Telefono" type="number" name="telefono" id="telefono" class="form-control" required>
            @if ($errors->has('telefono'))
            <div class="alert alert-danger">{{ $errors->first('telefono') }}</div>
            @endif
          </div>
        </div>
        <div class="col-md-4">
          <div class="mb-5">
          <label for="apellidos" class="form-label custom-label">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg>
          Apellidos
          </label>
            <input placeholder="Apellidos" type="text" name="apellidos" id="apellidos" class="form-control" required>
            @if ($errors->has('apellidos'))
            <div class="alert alert-danger">{{ $errors->first('apellidos') }}</div>
            @endif
          </div>
          <div class="mb-3">
          <label for="correo" class="form-label custom-label">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-at" viewBox="0 0 16 16">
          <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"/>
          </svg>
          Correo
          </label>
            <input placeholder="E-mail" type="email" name="correo" id="correo" class="form-control" required>
            @if ($errors->has('correo'))
            <div class="alert alert-danger">{{ $errors->first('correo') }}</div>
            @endif
          </div>
        </div>
        <div class="col-md-4">
          <div class="mb-5">
            <label for="tipo" class="form-label">Tipo de PQRS</label>
            <select name="tipo" id="tipo" class="form-select" required>
              <option value="Peticiones">Peticiones</option>
              <option value="Quejas">Quejas</option>
              <option value="Reclamos">Reclamos</option>
              <option value="Sugerencias">Sugerencias</option>
            </select>
          </div>
          <div class="mb-4">
            <label for="asunto" class="form-label">Asunto</label>
            <input placeholder="Asunto" type="text" name="asunto" id="asunto" class="form-control" required>
          </div>
        </div>
        <div class="col-md-12">
          <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control" required></textarea>
          </div>
          <div class="card-footer">
            <p class="mt-3">
              Al marcar esta casilla, confirmo que he leído, entendido y aceptado los términos y condiciones de Innovatech. <br>
              Entiendo que el uso de ciertas funciones de la página web, como la presentación PQRS, está sujeto a estos términos y condiciones, y me comprometo a cumplir con todos ellos. <br>
              Además, confirmo que he leído y entendido las políticas de privacidad de Innovatech, y acepto que mis datos personales sean procesados de acuerdo con esta política. <br>
            </p>
            <div class="form-check mt-3">
              <input class="form-check-input" type="checkbox" id="terminos" name="terminos" required>
              <label class="form-check-label" for="terminos">Acepto términos y condiciones.</label>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Enviar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  @endsection
</body>
</html>
