@csrf
<label>
	Nombre del proyecto <br>
	<input type="text" name="name" value="{{ old('name', $project->name)}}">

</label>
<br>
<label>
	presupuesto <br>
	<input type="text" name="presupuesto" value="{{ old('presupuesto', $project->presupuesto)}}">

</label>
<br>
<label>
	fecha ejecucion <br>
 <input type="date" name="fecha_ejecucion" value="{{ old('fecha_ejecucion', $project->fecha_ejecucion)}}">
</label>
	<button>{{ $btnText}}</button>