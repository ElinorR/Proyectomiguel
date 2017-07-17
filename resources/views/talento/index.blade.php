<form action="{{ url('talento/guardar') }}" method="post">
	{{csrf_field()}}
<input type="text" placeholder="Nombre" name="nombre">
<br>
<input type="text" placeholder="Apellido" name="apellido">
<br>
<input type="date" name="fecha_nacimiento">
<br>

<select name="sexo">
  <option value="M">Masculino</option> 
  <option value="F">Femenino</option>
  
</select>
<br>
<button>Registrar </button>

</form>