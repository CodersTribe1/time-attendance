@extends('layout.layout')
@section('content')
    <h1>Trainee</h1>
    <div class="container">
        <div class="container d-flex flex-column justify-content-center">
            <div class="container d-flex justify-content-center">
                <h1>DATE</h1>
            </div>
            <div class="container timein-out d-flex justify-content-center">
                <button type="button" class="me-5">Time IN</button>
                <button type="button">Time OUT</button>
            </div>
        </div>
        <div class="container trainee-report mt-3">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Time in</th>
                        <th>Time out</th>
                        <th>Late/Early departure</th>
                        <th>Absences</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2020</td>
                        <td>09:00</td>
                        <td>17:00</td>
                        <td>40 min</td>
                        <td>3 day/s</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
