@extends('layouts.default')

@section('content')
    <section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>Data Hotel</h1>
                <a href="{{url('hotels/create')}}" class="btn btn-primary">+ Tambah Data</a>
            </div>

            <div class="col-lg-8 mt-5">
                <table class="table-bordered">
                    <tr>
                        <th>Hotel Name</th>
                        <th>Location</th>
                        <th>Price</th>
                    </tr>
                    @foreach ($data as $dataHotels)
                    <tr>
                    <td>{{ $dataHotels -> hotel_name }}</td>
                    <td>{{ $dataHotels -> hotel_location }}</td>
                    <td>{{ $dataHotels -> price }}</td>
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