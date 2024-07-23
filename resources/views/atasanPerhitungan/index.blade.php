@extends('partials.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">PERHITUNGAN FCFS</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> No. </th>
                                    <th> Inisial </th>
                                    <th> Arrival Time </th>
                                    <th> Burst Time </th>
                                    <th> Start Time </th>
                                    <th> Finish Time </th>
                                    <th> Waiting Time </th>
                                    <th> Turn Around Time </th>
                                    <th> Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($atasanPerhitungan as $atasanPerhitungans)
                                        <tr>
                                            <td class="align-middle justify-center">{{ $loop->iteration }}</td>
                                            <td class="align-middle justify-center">{{ $atasanPerhitungans->inisial }}</td>
                                            <td class="align-middle justify-center">{{ $atasanPerhitungans->arrival_time }}</td>
                                            <td class="align-middle justify-center">{{ $atasanPerhitungans->burst_time }}</td>
                                            <td class="align-middle justify-center">{{ $atasanPerhitungans->start_time }}</td>
                                            <td class="align-middle justify-center">{{ $atasanPerhitungans->finish_time }}</td>
                                            <td class="align-middle justify-center">{{ $atasanPerhitungans->waiting_time }}</td>
                                            <td class="align-middle justify-center">{{ $atasanPerhitungans->turn_around_time }}</td>
                                        </tr>
                                    @endforeach
                                <tr>
                                    <td colspan="2">Total</td>
                                    <td>{{ $totalBurstTime }}</td>
                                    <td colspan="2"></td>
                                    <td>{{ $totalWaitingTime }}</td>
                                    <td>{{ $totalTurnAroundTime }}</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td colspan="6">Average Turn Around Time</td>
                                    <td>{{ $averageTurnAroundTime }}</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
