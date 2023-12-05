@extends('layouts.app')

@section('content')
  
<h1 class="text-center">Liste des apprenants</h1>

<a class="btn btn-success m-2" href="{{url('liste_formations')}}">Voir formations</a>

<table class="table table-bordered">
    <tr>
    <th>Prenom</th>
    <th>Nom</th>
    </tr>
    @foreach ($liste as $apprenant)
    <tr>
    <td>{{$apprenant->prenom}}</td>
    <td>{{$apprenant->nom}}</td>
    </tr>
    @endforeach
    
</table>

@endsection
