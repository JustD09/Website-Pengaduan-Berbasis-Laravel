@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">PERHITUNGAN FCFS</h4>
                    <a href="{{ route('perhitungan.create') }}" class="btn btn-primary text">Buat Hitungan !</a>
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
                                    @foreach ($perhitungan as $perhitungans)
                                        <tr>
                                            <td class="align-middle justify-center">{{ $loop->iteration }}</td>
                                            <td class="align-middle justify-center">{{ $perhitungans->inisial }}</td>
                                            <td class="align-middle justify-center">{{ $perhitungans->arrival_time }}</td>
                                            <td class="align-middle justify-center">{{ $perhitungans->burst_time }}</td>
                                            <td class="align-middle justify-center">{{ $perhitungans->start_time }}</td>
                                            <td class="align-middle justify-center">{{ $perhitungans->finish_time }}</td>
                                            <td class="align-middle justify-center">{{ $perhitungans->waiting_time }}</td>
                                            <td class="align-middle justify-center">{{ $perhitungans->turn_around_time }}</td>
                                            <td class="align-middle justify-center">
                                                <a href="{{ route('perhitungan.show', $perhitungans->id) }}"
                                                    class="btn-outline-grey"><i class="mdi mdi-eye-outline"></i></a>
                                                <a href="{{ route('perhitungan.edit', $perhitungans->id) }}"
                                                    class="btn-outline-grey"><i class="mdi mdi-file-edit"></i></a>
                                                <form action="{{ route('perhitungan.destroy', $perhitungans->id) }}" method="POST"
                                                    onsubmit="return confirm('Hapus ?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn-outline-grey"><i class="mdi mdi-delete"></i></button>
                                                </form>
                                            </td>
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
