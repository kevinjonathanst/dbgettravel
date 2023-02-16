@extends('layouts.default')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{url('tours')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="destination">Destination</label>
                            <input type="text" name="destination" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nameoftravel">Name of Travel</label>
                            <input type="text" name="nameoftravel" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="picname">PIC Name</label>
                            <input type="text" name="picname" class="form-control">
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