Hola 

@if( $sexo == 'M') 
	Señor 
@else 
	Señora 
@endif
<br>
Tu informacion es
<br>
Nombre: {{ $nombre}} y tu apellido {{$apellido}} <br> tu Fecha de Nacimiento es:{{$fecha_nacimiento}} <br>


