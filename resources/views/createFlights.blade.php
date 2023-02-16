@extends('layouts.default')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{url('flights')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="airline">Airline</label>
                            <input type="text" name="airline" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="flight_no">Flight no.</label>
                            <input type="text" name="flight_no" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="departure">Departure</label>
                            <input type="text" name="departure" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="destination">Destination</label>
                            <input type="text" name="destination" class="form-control">
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