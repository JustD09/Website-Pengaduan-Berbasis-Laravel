@extends('layouts.app')

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">PERHITUNGAN FCFS</h4>
                <p class="card-description"></p>
                <div class="form-group">
                    <label for="inisial">Nama Ruas</label>
                    <input name="inisial" type="text" class="form-control" id="inisial" disabled
                        value="{{ $perhitungan->inisial }}">
                </div>
                <div class="form-group">
                    <label for="arrival_time">Panjang (Km)</label>
                    <input name="arrival_time" type="text" class="form-control" id="arrival_time" disabled
                        value="{{ $perhitungan->arrival_time }}">
                </div>
                <div class="form-group">
                    <label for="burst_time">Lebar (m)</label>
                    <input name="burst_time" type="text" class="form-control" id="burst_time" disabled
                        value="{{ $perhitungan->burst_time }}">
                </div>
                <div class="form-group">
                    <label for="start_time">Kondisi Jalan</label>
                    <input name="start_time" type="text" class="form-control" id="start_time" disabled
                        value="{{ $perhitungan->start_time }}">
                </div>
                <div class="form-group">
                    <label for="finish_time">Status Jalan</label>
                    <input name="finish_time" type="text" class="form-control" id="finish_time" disabled
                        value="{{ $perhitungan->finish_time }}">
                </div>
                <div class="form-group">
                    <label for="waiting_time">Kelas Jalan</label>
                    <input name="waiting_time" type="text" class="form-control" id="waiting_time" disabled
                        value="{{ $perhitungan->waiting_time }}">
                </div>
                <div class="form-group">
                    <label for="turn_around_time">Kelas Jalan</label>
                    <input name="turn_around_time" type="text" class="form-control" id="turn_around_time" disabled
                        value="{{ $perhitungan->turn_around_time }}">
                </div>
            </div>
        </div>
    </div>
@endsection
