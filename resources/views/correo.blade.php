
<!-- Modal -->
<div class="modal fade" id="eliminarProveedor{{ $prov->idProveedor }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="eliminarProveedor" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    
    <div class="modal-content">
      
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">¿Seguro Que Deseas Eliminar Este Proveedor?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body">
        <p class="card-text text-center"> Estaras eliminando al proveedor: <br><b> {{ $prov->empresa }} </b></p>
            <form action="{{route('prov.destroy', $prov->idProveedor)}}" method="POST">
                @csrf
                @method('delete')
      </div>
      
      <div class="modal-footer">
        <a type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</a>
        <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
       </div>
    </div>
  
   </div>
</div>
