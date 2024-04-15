@extends('layouts.contenedor')
<!DOCTYPE html>
<html>
<head>
  <title>Envío exitoso</title>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Cabin:wght@400;600&display=swap');
    body {
      font-family: "Cabin", sans-serif;
    }
    .container {
      text-align: center;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container-card {
      border: 1px solid white;
      border-radius: 12px;
      width: 400px;
      align-items: center;
      justify-content: center;
      padding: 10px;
      background-color: whitesmoke;
    }
    svg {
      color: rgb(114, 184, 8);
    }
    .container p {
      font-size: 18px; /* Ajusta el tamaño de fuente según tus necesidades */
    }
    
    .btn-primary{
      background-color: green;
      border-radius: 12px;
    }
  </style>
</head>
<body>
  @section('component')
  <div class="container">
    <div class="container-card">
      <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
      </svg>
      <h1>Envío exitoso</h1>
      <p>Gracias por contactarnos</p>
      
      @if(session('formSubmitted'))
        <a href="{{ route('pqrs.create') }}" class="btn btn-primary" style="margin-top: 10px;">
          <i class="bi bi-chevron-bar-left"></i>
          Nuevo
        </a>
      @endif
    </div>
  </div>
  @endsection
</body>
</html>
