<x-menuPerfil>

    <x-slot name="usuario">
        {{session('Nombre')}}
    </x-slot>

    <h1 class="mb-3" >Mis Direcciones</h1>
    @foreach ($direcciones as $direccion)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{$direccion->departamento}} / {{$direccion->municipio}}</h5>
            <p class="card-text">
                {{$direccion->barrio}} / {{$direccion->direccion}}
                @if(isset($direccion->piso))
                / Piso: {{$direccion->piso}}
                @endif
            </p>
        </div>
        <div>
            <div class="float-end mb-1 me-2">

                <form action="{{ route('direcciones.destroy',$direccion) }}" method="post">
                    <a href="{{route('direcciones.edit', $direccion)}}" class="btn btn-warning me-1">Editar</a>
                    @csrf
                    @method('delete')
                <input  type="submit" value="Eliminar" class="btn-danger btn">
                </form>
            </div>
        </div>
        
    </div>
    @endforeach

    <div class="">
        <div class="float-end mb-3 mt-4">
            <a class="btn btn-primary" href="{{ route('direcciones.create') }}" role="button">Agregar direccion</a>
        </div>
    </div>
</x-menuPerfil>