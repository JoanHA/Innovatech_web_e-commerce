<x-menuPerfil>

    <x-slot name="usuario">
        {{session('Nombre')}}
</x-slot>

    <h1 class="mb-3"></h1>
    <form action="{{route('direcciones.store')}}" method="POST">
        @csrf
        <div>
            <div class="input-group mb-3">
                <div style="width: 33.3333333%;" class="pe-1">
                    <label class="form-label me-2" for="perfilPais">Pais</label>
                    <select name="pais" required id="perfilPais" class="form-control" wire:model='selectedPaises'>
                        <option value="">-- Seleccionar --</option>
                        @foreach($paises as $pais)
                        <option value="{{$pais->id}}">{{$pais->pais}}</option>
                        @endforeach
                    </select>
                </div>
                <div style="width: 33.3333333%;" class="ps-1 pe-1">
                    <label class="form-label" for="perfilDepartamento">Departamento</label>
                    <select name="departamento" required id="perfilDepartamento" class="form-control">
                        <option value="">-- Seleccionar --</option>
                    </select>
                </div>
                <div style="width: 33.3333333%;" class="ps-1">
                    <label class="form-label" for="perfilMunicipio">Ciudad</label>
                    <select name="ciudad" required id="perfilMunicipio" class="form-control">
                        <option value="">-- Seleccionar --</option>
                    </select>
                </div>
            </div>
            <div class="input-group mb-3">
                <div style="width: 33.3333333%;" class="pe-1">
                    <label class="form-label me-2" for="perfilBarrio">Barrio</label>
                    <input name="barrio" required id="perfilBarrio" class="form-control" type="text">
                </div>
                <div style="width: 33.3333333%;" class="pe-1 ps-1">
                    <label class="form-label me-2" for="perfilDireccion">Direccion</label>
                    <input name="direccion" required id="perfilDireccion" class="form-control" type="text">
                </div>
                <div style="width: 33.3333333%;" class="ps-1">
                    <label class="form-label me-2" for="perfilPiso">Piso</label>
                    <input name="piso" id="perfilPiso" class="form-control" type="text">
                </div>
            </div>
            <a href="{{route('direcciones')}}" class="btn btn-secondary mb-3 mt-4">Volver</a>
            <input type="submit" class="btn btn-primary float-end mb-3 mt-4" value="Guardar">
        </div>
        <script>
            var departamento = "{{route('departamentos')}}";
            var municipios = "{{route('municipios')}}";
        </script>
        @vite('resources/js/ubicaciones.js')
    </form>
</x-menuPerfil>