@extends('layouts.app')

@section('content')

<h1 class="text-center">Liste des formations</h1>

<a class="btn btn-success m-2" href="{{url('liste_apprenants')}}">Voir apprenants</a>

<table class="table table-bordered">
    <tr>
    <th>Nom</th>
    <th>Duree</th>
    <th>Formateurr</th>
    <th>Cout</th>
    </tr>
    @foreach($formations as $formation)
    <tr>
         <td>{{$formation->nom}}</td>
         <td>{{$formation->duree}} ans</td>
         <td>{{$formation->formateur}}</td>
         <td>{{$formation->cout}} francs</td>
    </tr>
    @endforeach
</table>

@endsection