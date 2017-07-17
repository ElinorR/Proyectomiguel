<form method='post'	action="{{url('cursos/guardar')}}">
{{csrf_field()}}
	<select name="cursos" id="">
		<option value="Redes"> Redes</option>
		<option value="Laravel"> Laravel</option>
		<option value="PHP"> Php</option>

	</select>
	<button>Inscribir</button>
	<h1>probando con otra rama</h1>

</form>