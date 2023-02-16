@extends('layouts.default')

@section('content')
    <section>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <h1>Data</h1>
                <a href="{{url('tours')}}" class="btn btn-primary">Tours</a>
                <br>
            </div>
            <div class="col-lg-8">
                <a href="{{url('flights')}}" class="btn btn-primary">Flight</a>
                <br>
            </div>
            <div class="col-lg-8">
                <a href="{{url('hotels')}}" class="btn btn-primary">Hotel</a>
                <br>
            </div>
        </div>
    </div>
</section>
@endsection