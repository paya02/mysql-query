@extends('layouts.app')

@section('content')
<table>
    <tr>
        <th>目的地id</th>
        <th>name</th>
        <th>last_flight</th>
    </tr>
    @foreach($destinations1 as $destination)
        <tr>
            <td>{{ $destination->id }}</td>
            <td>{{ $destination->name }}</td>
            <td>{{ $destination->last_flight }}</td>
        </tr>
    @endforeach
</table>

<table>
    <tr>
        <th>目的地id</th>
        <th>name</th>
        <th>last_flight</th>
        <th>arrived_at</th>
    </tr>
    @foreach($destinations2 as $destination)
        <tr>
            <td>{{ $destination->id }}</td>
            <td>{{ $destination->name }}</td>
            <td>{{ $destination->flights_name }}</td>
            <td>{{ $destination->flights_arrived_at }}</td>
        </tr>
    @endforeach
</table>

<table>
    <tr>
        <th>目的地id</th>
        <th>name</th>
        <th>last_flight</th>
    </tr>
    @foreach($destinations3 as $destination)
        <tr>
            <td>{{ $destination->id }}</td>
            <td>{{ $destination->name }}</td>
            <td>{{ $destination->last_flight }}</td>
        </tr>
    @endforeach
</table>
@endsection
