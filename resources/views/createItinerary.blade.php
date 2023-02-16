@extends('layouts.default')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{url('itinerary')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="tour_id" value="{{ $tour_id }}">
                        <div class="form-group">
                            <label for="day">Day</label>
                            <input type="text" name="day" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="location" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="meals">Meals</label>
                            <input type="text" name="meals" class="form-control">
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