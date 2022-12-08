<!-- Modal -->
<div class="modal fade" id="agregarProducto{{ $product->idProducto }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="agregarProducto" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    
    <div class="modal-content">
      
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">¿Deseas Agregar Este Producto Al Carrito?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <div class="modal-body text-center">
        <p class="card-text text-center"> 
          Articulo: <br>
          <b> {{ $product->nombre_tipo }} </b> <br>
        </p>
        <p class="card-text text-center"> 
          Precio: <br>
          <i> {{$product->precioVenta}} </i>
        </p>
        <form action="{{route('carrito.create', $product->idProducto)}}" method="POST">
            @csrf
        <p class="card-text text-center">
            Cantidad:
        </p>
        <input class="text-center" type="number" value="1" name="txtCantida">
      </div>
      
      <div class="modal-footer">
        <a type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</a>
        <button type="submit" class="btn btn-success">Agregar</button>
        </form>
       </div>
    </div>
  
   </div>
</div>
