<x-app-layout>
  <form action="{{route('teclado.update', $teclado)}}" class="flex flex-col gap-2 container mx-auto my-10 bg-white p-10 justify-center items-center" method="POST">
    @csrf
    @method('PUT')
    <h1 class="text-center font-bold text-2xl w-full xl:w-1/3 mb-5">Editar teclado</h1>
    <div class="flex justify-between items-center w-2/3 xl:w-1/3">
      <label for="">Nombre</label>
      <input type="text" name="nombre" value="{{$teclado->nombre}}">
    </div>
    <div class="flex justify-between items-center w-2/3 xl:w-1/3">
      <label for="">Modelo</label>
      <input type="text" name="modelo" value="{{$teclado->modelo}}">
    </div>
    <div class="flex justify-between items-center w-2/3 xl:w-1/3">
      <label for="">Distribucion</label>
      <input type="text" name="distribucion" value="{{$teclado->distribucion}}">
    </div>
    <div class="flex justify-between items-center w-2/3 xl:w-1/3">
      <label for="">Marca</label>
      <input type="text" name="marca" value="{{$teclado->marca}}">
    </div>
    <div class="flex justify-between items-center w-2/3 xl:w-1/3">
      <label for="">Cantidad</label>
      <input type="number" name="cantidad" value="{{$teclado->cantidad}}">
    </div>
    <div class="flex justify-between items-center w-2/3 xl:w-1/3">
      <label for="">Precio</label>
      <input type="number" name="precio" value="{{$teclado->precio}}">
    </div>
    <div class="flex justify-between items-center w-2/3 xl:w-1/3">
      <a class="text-xl bg-red-500 font-bold px-10 py-1" href="{{route('teclado.index')}}">Volver</a>
      <input class="text-xl bg-blue-400 font-bold px-10 py-1" type="submit" value="Añadir" name="" id="">
    </div>
  </form>
</x-app-layout>