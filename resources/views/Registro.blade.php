<form action="{{ url('/registrar') }}" method="post"> 
	{{ csrf_field() }}
	<input type="text" name="Nombre" id="nombre" />
    <input type="text" name="Apellido">

<button type="submit">Registrar</button>
<button type="reset">Limpiar</button>  
<button type="button" onclick="LimpiarNombre()">Limpiar Nombre</button>    

</form>

<ul>
	<li>el numero de la lista es 1</li>
	<li>el numero de la lista es 2</li>
	<li>el numero de la lista es 3</li>
	<li>el numero de la lista es 4</li>
	<li>el numero de la lista es 5</li>
	<li>el numero de la lista es 6</li>
	<li>el numero de la lista es 7</li>
	<li>el numero de la lista es 8</li>
	<li>el numero de la lista es 9</li>
	<li>el numero de la lista es 10</li>
</ul>

<script type="text/javascript">
	
function LimpiarNombre() {
	document.getElementById('nombre').value='';
}

</script>