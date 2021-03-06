@extends('layout')
@section('name')
Proyecto
@endsection
@section('content')
<h1>Proyecto</h1>
<a href="{{ route('projects.create') }}">Crear proyecto</a>

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<ul>
	@forelse($projects as $project)
	<li><a href="{{ route('projects.show', $project->id) }}">{{$project->name}}<a/></li>
	@empty
	<li>No hay elementos que mostrar</li>
	@endforelse
  {{ $projects->links() }}

</ul>
@endsection