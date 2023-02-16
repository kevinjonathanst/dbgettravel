@extends('layouts.default')

@section('content')
    <section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>Data Tour</h1>
                <a href="{{url('tours/create')}}" class="btn btn-primary">+ Tambah Data</a>
            </div>

            <div class="col-lg-8 mt-5">
                <table class="table-bordered">
                    <tr>
                        <th>Destination</th>
                        <th>Travel Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>PIC Name</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($data as $dataTour)
                    <tr>
                    <td>{{ $dataTour -> destination }}</td>
                    <td>{{ $dataTour -> nameoftravel }}</td>
                    <td>{{ $dataTour -> email }}</td>
                    <td>{{ $dataTour -> phone }}</td>
                    <td>{{ $dataTour -> picname }}</td>
                    <td>
                        
                        <a href="{{route('tours.edit', $dataTour->id)}}" class="btn btn-warning">edit</a>
                        <form action="{{ route('tours.destroy', $dataTour->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        <a href="{{route('tours.show', $dataTour->id)}}" class="btn btn-success">details</a>
                    </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>
@endsection