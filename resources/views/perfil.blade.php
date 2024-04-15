<!doctype html>
<html lang="es">

<head>
    <title>innovaTech - Perfil</title>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @vite(['/resources/js/perfil.js'])
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main>
        <div class="container mt-3">
            <div class="row">
                <form action="{{route('perfil')}}" class="needs-validation" method="get">
                    <div class="col-12">
                        <div>
                            <p id="datos_personales">Datos personales</p>
                        </div>
                        <div id="bloque_datos" style="display: none;">
                            <div class="input-group mb-3">
                                <div style="width: 50%;" class="pe-1">
                                    <label class="form-label me-2" for="perfilNombre">Nombres</label>
                                    <input type="text" class="form-control me-2" placeholder="nombres" required id="perfilNombre" value="{{$persona->Nombre}}">
                                </div>
                                <div style="width: 50%;" class="ps-1">
                                    <label class="form-label" for="perfilApellido">Apellidos</label>
                                    <input type="text" class="form-control" value="{{$persona->Apellido}}" placeholder="apellidos" required id="perfilApellido">
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div style="width: 50%;" class="pe-1">
                                    <label class="form-label me-2" for="perfilIdentificacion">Identificacion</label>
                                    <input type="number" class="form-control me-2" placeholder="Identificacion" value="{{$persona->Identificacion}}" required id="perfilIdentificacion" required>
                                </div>
                                <div style="width: 50%;" class="ps-1">
                                    <label class="form-label" for="perfilCelular">Celular</label>
                                    <input type="number" class="form-control" placeholder="Celular" value="{{$persona->Celular}}" id="perfilCelular">
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div style="width: 100%;">
                                    <label class="form-label me-2" for="perfilEmail">Correo&nbsp;Electronico</label>
                                    <input type="text" class="form-control me-2" placeholder="Correo electronico" value="{{$persona->Email}}" required id="perfilEmail">
                                </div>
                            </div>

                            <p>Cambiar contraseña</p>
                            <div class="input-group mb-3">
                                <div style="width: 50%;" class="pe-1">
                                    <label class="form-label me-2" for="perfilContrasena">Contraseña</label>
                                    <input type="password" class="form-control me-2" placeholder="Contraseña" id="perfilContrasena">
                                </div>
                                <div style="width: 50%;" class="ps-1">
                                    <label class="form-label" for="perfilConfirmarContrasena">Confirmar&nbsp;contraseña</label>
                                    <input type="password" class="form-control" placeholder="Confirmar contraseña" id="perfilConfirmarContrasena">
                                </div>
                            </div>
                        </div>
                        <p>Direccion</p>
                        <div>
                            <div class="input-group mb-3">
                                <div style="width: 33.3333333%;" class="pe-1">
                                    <label class="form-label me-2" for="perfilPais">Pais</label>
                                    <select name="" required id="perfilPais" class="form-control" wire:model='selectedPaises'>
                                        <option value="">-- Seleccionar --</option>
                                        @foreach($paises as $pais)
                                        <option value="{{$pais->idPaises}}">{{$pais->Pais}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div style="width: 33.3333333%;" class="ps-1 pe-1">
                                    <label class="form-label" for="perfilDepartamento">Departamento</label>
                                    <select name="" required id="perfilDepartamento" class="form-control">
                                        <option value="">-- Seleccionar --</option>
                                    </select>
                                </div>
                                <div style="width: 33.3333333%;" class="ps-1">
                                    <label class="form-label" for="perfilMunicipio">Ciudad</label>
                                    <select name="" required id="perfilMunicipio" class="form-control">
                                        <option value="">-- Seleccionar --</option>
                                    </select>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <div style="width: 33.3333333%;" class="pe-1">
                                    <label class="form-label me-2" for="perfilBarrio">Barrio</label>
                                    <input required id="perfilBarrio" class="form-control" type="text">
                                </div>
                                <div style="width: 33.3333333%;" class="pe-1 ps-1">
                                    <label class="form-label me-2" for="perfilDireccion">Direccion</label>
                                    <input required id="perfilDireccion" class="form-control" type="text">
                                </div>
                                <div style="width: 33.3333333%;" class="ps-1">
                                    <label class="form-label me-2" for="perfilPiso">Piso</label>
                                    <input id="perfilPiso" class="form-control" type="text">
                                </div>
                            </div>
                        </div>
                        <div>
                        </div>
                        <input type="submit">
                </form>
                <p>Compras</p>
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th># Orden</th>
                            <th>producto</th>
                            <th>metodo de pago</th>
                            <th>Cantidad</th>
                            <th>Fecha de compra</th>
                            <th>Estado de compra</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    @foreach($productosComprados as $productos)
                    <tbody>
                        <tr>
                            <td>{{$productos->idDetalleCompra}}</td>
                            <td>{{$productos->Nombre_producto}}</td>
                            <td>{{$productos->Metodo_pago}}</td>
                            <td>{{$productos->Cantidad}}</td>
                            <td>{{$productos->Fecha_registro}}</td>
                            <td>@if($productos->Estado == 0)
                                Cancelado
                                @elseif($productos->Estado == 1)
                                En proceso
                                @elseif($productos->Estado == 2)
                                Aprobado
                                @else
                                Entregado
                                @endif
                            </td>
                            <td>{{$productos->Fecha_registro}}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <p><a href="http://">Cerrar session</a></p>
            </div>
        </div>
    </main>
    <footer>

    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

    <script>
        const csrfToken = document.head.querySelector("[name~=csrf-token][content]").content;
        document.getElementById("perfilPais").addEventListener("change", (e) => {
            fetch('departamentos', {
                method : 'POST',
                body: JSON.stringify({"texto" : e.target.value}),
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-Token': csrfToken
                }

            }).then(response => {
                return response.json();
            }).then(data => {
                var opciones = '<option value="">-- Seleccionar --</option>';
                for (let i in data.datos) {
                    opciones += `<option value="${data.datos[i].idDepartamento}">${data.datos[i].Departamento}</option>`;
                }
                document.getElementById("perfilDepartamento").innerHTML = opciones;
                document.getElementById("perfilMunicipio").innerHTML = '<option value="">-- Seleccionar --</option>';
            }).catch(error => console.error(error));
        });

        document.getElementById("perfilDepartamento").addEventListener("change", (e) => {
            console.log("e.target.value = " + e.target.value);
            fetch('municipios', {
                method : 'POST',
                body: JSON.stringify({"texto" : e.target.value}),
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-Token': csrfToken
                }

            }).then(response => {
                return response.json();
            }).then(data => {
                var opciones = '<option value="">-- Seleccionar --</option>';
                for (let i in data.muni) {
                    opciones += `<option value="${data.muni[i].idMunicipios}">${data.muni[i].Municipio}</option>`;
                }
                document.getElementById("perfilMunicipio").innerHTML = opciones;
            }).catch(error => console.error(error));
        });
    </script>
</body>

</html>