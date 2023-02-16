@extends('layouts.default')

@section('content')
    <section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>Data Flight</h1>
                <a href="{{url('flights/create')}}" class="btn btn-primary">+ Tambah Data</a>
            </div>

            <div class="col-lg-8 mt-5">
                <table class="table-bordered">
                    <tr>
                        <th>Airline</th>
                        <th>Flight no.</th>
                        <th>Departure</th>
                        <th>Destination</th>
                        <th>Price</th>
                    </tr>
                    @foreach ($data as $dataFlight)
                    <tr>
                    <td>{{ $dataFlight -> airline }}</td>
                    <td>{{ $dataFlight -> flight_no }}</td>
                    <td>{{ $dataFlight -> departure }}</td>
                    <td>{{ $dataFlight -> destination }}</td>
                    <td>{{ $dataFlight -> price }}</td>
                    <td>
                        <a href="#" class="btn btn-warning">edit</a>
                        <a href="#" class="btn btn-danger">delete</a>
                    </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>
@endsection