<form action="/usuario/{{$user->id}}" method="POST" >
@csrf
@method('PUT')	
	<label>id</label>
<input type="text" name="id" value="{{$user->id}}" disabled>
<label>nombre</label>
<input type="text" name="nombre" value="{{$user->name}}">
<label>apellidos</label>
<input type="text" name="apellidos" value="{{$user->apellidos}}">
<label>email</label>
<input type="text" name="email" value="{{$user->email}}">

<button type="submit">enviar</button>
</form>





