@extends('layout.adminLayout')
@section('content')
    <div class="admin d-flex flex-row m-0 p-0">
        @include('layout.adminSidebar')
        <div class="container p-3 d-flex flex-column ">
            <div class="container d-flex justify-content-around align-items-center">
                <h1>Add User</h1>
            </div>
            <hr>
            <div class="container d-flex justify-content-evenly">
                <a href="{{ route('adminAddTrainee') }}" class="btn btn-primary">Add Trainee</a>
                <a href="{{ route('adminAddFacilitator') }}" class="btn btn-primary">Add Facilitator</a>
            </div>
            <div class="container-table d-flex flex-row justify-content-between text-center mt-5">
                <div class="container d-flex flex-column">
                    <div class="container">
                        <h2>Trainees</h2>
                    </div>
                    <div class="container">
                        <table class="table table-striped text-center">
                            <div class="container">
                            <thead>
                                <tr>
                                    <th>Batch</th>
                                    <th>Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10</td>
                                    <td>Paul</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="container d-flex flex-column">
                    <div class="container">
                        <h2>Facilitators</h2>
                    </div>
                    <div class="container">
                        <table class="table table-striped text-center">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Paul</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
