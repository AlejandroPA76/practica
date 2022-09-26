<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>  

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">nombre</th>
      <th scope="col">apellidos</th>
      <th scope="col">correo</th>
    </tr>
  </thead>
  <tbody>
    @foreach($usuarios as $usuario)
    <tr>
      <td>{{$usuario->id}}</td>
      <td>{{$usuario->name}}</td>
      <td>{{$usuario->apellidos}}</td>
      <td>{{$usuario->email}}</td>
      <td><a href="usuario/{{$usuario->id}}/edit">editar</a></td>
      <td>
        <form action="usuario/{{$usuario->id}}" method="POST">
          @csrf
          @method('delete')
          <button type="submit">eliminar</button>
        </form>
      </td>
    </tr>
    
   @endforeach

  </tbody>
</table>
</body>

</html>