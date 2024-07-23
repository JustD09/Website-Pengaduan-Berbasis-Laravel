@extends('layouts.app')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">PERHITUNGAN FCFS</h4>
            <p class="card-description"></p>
            <form action="{{ route('perhitungan.store') }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                @csrf
                <div class="form-group">
                    <label for="inisial">Inisial:</label>
                    <input name="inisial" type="text" class="form-control" id="inisial" placeholder="Inisial:">
                </div>
                <div class="form-group">
                    <label for="arrival_time">Arrival Time:</label>
                    <input name="arrival_time" type="text" class="form-control" id="arrival_time" placeholder="Arrival Time:">
                </div>
                <div class="form-group">
                    <label for="burst_time">Burst Time:</label>
                    <input name="burst_time" type="text" class="form-control" id="burst_time" placeholder="Burst Time:">
                </div>
                <button type="submit" class="btn btn-gradient-primary me-2">Hitung!</button>
            </form>
        </div>
    </div>
</div>
@endsection