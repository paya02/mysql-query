<style>
    table {
        margin-bottom: 20px;
    }

    table, th, td {
        border-collapse: collapse;
        border: 1px solid #ccc;
        line-height: 1.5;
    }

    table th {
        width: 150px;
        padding: 10px;
        font-weight: bold;
        vertical-align: top;
        background: #3f3f3f;
        color: #ffffff;
    }
    table td {
        width: 150px;
        padding: 10px;
        vertical-align: top;
    }
</style>
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
