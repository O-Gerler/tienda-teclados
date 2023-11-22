<x-app-layout>
  <div class="container mx-auto my-10">
    <a class="px-10 py-2 bg-blue-400 font-bold text-xl" href="{{route('teclado.create')}}">Insertar</a>
  </div>
  <div class="container mx-auto grid grid-cols-3 gap-10">
    @foreach ($teclados as $teclado)
      <div class="flex flex-col bg-white text-xl font-bold items-center">
        <h2>{{$teclado->nombre}}</h2>
        <p>{{$teclado->modelo}}</p>
        <p>{{$teclado->distribucion}}</p>
        <p>{{$teclado->marca}}</p>
        <p>{{$teclado->cantidad}}</p>
        <p>{{$teclado->precio}}</p>
        <form class="w-full" action="{{route('teclado.destroy', $teclado)}}" method="post">
          @method('DELETE')
          @csrf
          <input type="submit" class="bg-red-500 w-full text-center py-1" href="" value="Eliminar"/>
        </form>
        <a class="bg-green-500 w-full text-center py-1" href="{{route('teclado.edit', $teclado)}}">Modificar</a>
      </div>
    @endforeach  
  </div>
  
</x-app-layout>