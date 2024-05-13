@extends('layout.adminLayout')
@section('content')
<div class="admin d-flex flex-row m-0 p-0">
    @include('layout.adminSidebar')
    <div class="container p-3">
        <div class="container m-0 d-flex justify-content-between align-items-center">
            <div class="container m-0">
                <h1>Trainees List</h1>
            </div>
            <div class="container m-0 d-flex align-items-center justify-content-center">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-secondary" type="submit">Search</button>
                  </form>
            </div>
            <div class="container m-0 d-flex justify-content-end align-items-center">
                <button type="button" class="btn btn-secondary">Generate Report</button>
            </div>
        </div>
        <div class="container">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th>Unique ID</th>
                        <th>Name</th>
                        <th>Batch</th>
                        <th>Date</th>
                        <th>Time in</th>
                        <th>Time out</th>
                        <th>Late/Early departure</th>
                        <th>Absences</th>
                        <th>Total duty hour</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Paul</td>
                        <td>10</td>
                        <td>2020</td>
                        <td>09:00</td>
                        <td>17:00</td>
                        <td>40 min</td>
                        <td>3 day/s</td>
                        <td>40 hrs</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
