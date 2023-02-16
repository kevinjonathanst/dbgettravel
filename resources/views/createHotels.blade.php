@extends('layouts.default')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{url('hotels')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="hotel_name">Hotel Name</label>
                            <input type="text" name="hotel_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="hotel_location">Hotel Location</label>
                            <input type="text" name="hotel_location" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" class="form-control">
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