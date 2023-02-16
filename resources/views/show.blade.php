@extends('layouts.default')

@section('content')
    <section>
    <div class="container mt-5">
        <div class="row">
            <h1>Data Tour</h1>
            <div class="col-lg-8 mt-3">
                <table class="table-bordered">
                    <tr>
                        <th>Id</th>
                        <th>Destination</th>
                        <th>Travel Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>PIC Name</th>
                    </tr>
                    <tr>
                    <td>{{ $tour -> id }}</td>
                    <td>{{ $tour -> destination }}</td>
                    <td>{{ $tour -> nameoftravel }}</td>
                    <td>{{ $tour -> email }}</td>
                    <td>{{ $tour -> phone }}</td>
                    <td>{{ $tour -> picname }}</td>
                    </tr>
                </table>
            </div>
            <div class="col-lg-8 mt-3">
                <a href="{{ url('/itinerary/create', ['tour_id' => $tour->id]) }}" class="btn btn-primary">+ Tambah Itinerary</a>

            </div>
        </div>
        <div class="col-lg-8 mt-3">
            <table class="table-bordered">
                <tr>
                    <th>Day</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Meals</th>
                    <th>Action</th>
                </tr>
                @foreach ($data as $dataTour)
                    <tr>
                    <td>{{ $dataTour -> day }}</td>
                    <td>{{ $dataTour -> location }}</td>
                    <td>{{ $dataTour -> description }}</td>
                    <td>{{ $dataTour -> meals }}</td>
                    <td>
                        <a href="{{route('itinerary.edit', $dataTour->id)}}" class="btn btn-warning">edit</a>
                        <form action="{{ route('itinerary.destroy', $dataTour->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</section>
@endsection