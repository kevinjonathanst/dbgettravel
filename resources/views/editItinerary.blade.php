@extends('layouts.default')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{route('itinerary.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="location" class="form-control" value="{{$data->location}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control"value="{{$data->description}}">
                        </div>
                        <div class="form-group">
                            <label for="meals">Meals</label>
                            <input type="text" name="meals" class="form-control"value="{{$data->meals}}">
                        </div>
                    
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add Data</button> 
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection