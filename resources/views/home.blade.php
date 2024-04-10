@extends('layout/app')

@section('content')
<div class="container p-5 ">

    <h1 class="text-warning text-center pb-5">Lista Treni</h1>

    <div>
        <table class="table table-hover table-light border  border-2 border-warning ">
            <tr>
                <th class="border-end border-warning">Compagnia</th>
                <th class="border-end border-warning">Stazione di partenza</th>
                <th class="border-end border-warning">Stazione d'arrivo</th>
                <th class="border-end border-warning">Orario di partenza</th>
                <th class="border-end border-warning">Orario di arrivo</th>
                <th class="border-end border-warning">Codice treno</th>
                <th class="border-end border-warning">N° carrozze</th>
                <th class="border-end border-warning">In orario</th>
                <th>Stato del treno</th>
            </tr>

            @foreach ($trains as $train)

            <tr>
                <td class="border-end border-warning">{{$train->company}}</td>
                <td class="border-end border-warning">{{$train->departure_station}}</td>
                <td class="border-end border-warning">{{$train->arrival_station}}</td>
                <td class="border-end border-warning">{{$train->departure_time}}</td>
                <td class="border-end border-warning">{{$train->arrival_time}}</td>
                <td class="border-end border-warning">{{$train->train_code}}</td>
                <td class="border-end border-warning">{{$train->number_carriages}}</td>
                <td class="border-end border-warning">{{$train->on_time}}</td>
                <td >{{$train->cancelled}}</td>
            </tr>
                
            @endforeach
        </table>
    </div>
    
</div>
@endsection
