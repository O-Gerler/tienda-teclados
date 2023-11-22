<x-app-layout>
  <form action="{{route('teclado.store')}}" class="flex flex-col gap-2 container mx-auto my-10 bg-white p-10 justify-center items-center" method="POST">
    @csrf
    <h1 class="text-center font-bold text-2xl w-1/3 mb-5">Añadir teclado</h1>
    <div class="flex justify-between items-center w-1/3">
      <label for="">Nombre</label>
      <input type="text" name="nombre">
    </div>
    <div class="flex justify-between items-center w-1/3">
      <label for="">Modelo</label>
      <input type="text" name="modelo">
    </div>
    <div class="flex justify-between items-center w-1/3">
      <label for="">Distribucion</label>
      <input type="text" name="distribucion">
    </div>
    <div class="flex justify-between items-center w-1/3">
      <label for="">Marca</label>
      <input type="text" name="marca">
    </div>
    <div class="flex justify-between items-center w-1/3">
      <label for="">Cantidad</label>
      <input type="number" name="cantidad">
    </div>
    <div class="flex justify-between items-center w-1/3">
      <label for="">Precio</label>
      <input type="number" name="precio">
    </div>
    <div class="flex justify-between items-center w-1/3">
      <a class="text-xl bg-red-500 font-bold px-10 py-1" href="{{route('teclado.index')}}">Volver</a>
      <input class="text-xl bg-blue-400 font-bold px-10 py-1" type="submit" value="Añadir" name="" id="">
    </div>
  </form>
</x-app-layout>