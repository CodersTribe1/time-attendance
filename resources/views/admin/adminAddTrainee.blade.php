@extends('layout.adminLayout')
@section('content')
<div class="admin d-flex flex-row m-0 p-0">
    @include('layout.adminSidebar')
    <div class="container p-3">
        <div class="container d-flex align-items-center">
            <a class="back-icon d-flex justify-content-start" href="{{ route('admin') }}">
                <i class="fa-solid fa-circle-arrow-left"></i>
            </a>
            <div class="container d-flex justify-content-center">
                <h3>Add Trainee</h3>
            </div>
        </div>
        <hr>
        <div class="container profile mt-0 pt-0">
            <form action="">
                <div class="form-container d-flex flex-column p-0">
                    <div class="container d-flex flex-row p-0 m-0">
                        <div class="container picture d-flex flex-column justify-content-center m-0 p-0 ">
                            <div class="container d-flex flex-column justify-content-center align-items-center m-0">
                                <img src="" alt="">
                                <input class="mt-2" type="file" id="formFile">
                            </div>
                            <div class="container m-0 mt-2">
                                <div class="mb-2">
                                    <label for="civilstatus" class="form-label">Civil Status: </label>
                                    <input type="text" name="civilstatus" class="form-control" id="civilstatus">
                                </div>
                                <div class="mb-2">
                                    <label for="nationality" class="form-label">Nationality: </label>
                                    <input type="text" name="nationality" class="form-control" id="nationality">
                                </div>
                                <div class="mb-2">
                                    <label for="trainingstatus" class="form-label">Training Status: </label>
                                    <input type="text" name="trainingstatus" class="form-control" id="trainingstatus" placeholder="Scholar">
                                </div>
                            </div>
                        </div>

                        <div class="container d-flex flex-column">
                            <div class="container d-flex flex-row align-items-start">
                                <div class="container d-flex flex-column justify-content-between">
                                    <div class="mb-2">
                                        <label for="fname" class="form-label">First Name</label>
                                        <input type="text" name="fname" class="form-control" id="fname">
                                    </div>
                                    <div class="mb-2">
                                        <label for="contactNum" class="form-label">Contact Number</label>
                                        <input type="number" name="contactNum" class="form-control" id="contactNum" placeholder="+639999999999">
                                    </div>
                                    <div class="mb-2">
                                        <label for="batchNum" class="form-label">Batch: </label>
                                        <input type="number" name="batchNum" class="form-control" id="batchNum" placeholder="3">
                                    </div>
                                    <div class="mb-2">
                                        <label for="gradecompleted" class="form-label">Highest Grade Completed: </label>
                                        <input type="text" name="gradecompleted" class="form-control" id="gradecompleted">
                                    </div>
                                    <div class="mb-2">
                                        <label for="street" class="form-label">Street: </label>
                                        <input type="text" name="street" class="form-control" id="street">
                                    </div>
                                    <div class="mb-2">
                                        <label for="district" class="form-label">District: </label>
                                        <input type="text" name="district" class="form-control" id="district">
                                    </div>
                                </div>

                                <div class="container d-flex flex-column justify-content-between">
                                    <div class="mb-2">
                                        <label for="mname" class="form-label">Middle Name: </label>
                                        <input type="text" name="mname" class="form-control" id="mname">
                                    </div>
                                    <div class="mb-2">
                                        <label for="sex" class="form-label">Sex: </label>
                                        <input type="text" name="sex" class="form-control" id="sex" placeholder="Male/Female">
                                    </div>
                                    <div class="mb-2">
                                        <label for="uniqueid" class="form-label">Unique ID: </label>
                                        <input type="text" name="uniqueid" class="form-control" id="uniqueid">
                                    </div>
                                    <div class="mb-2">
                                        <label for="clientclassification" class="form-label">Classification of client: </label>
                                        <input type="text" name="clientclassification" class="form-control" id="clientclassification" placeholder="Unemployed">
                                    </div>
                                    <div class="mb-2">
                                        <label for="brgy" class="form-label">Barangay: </label>
                                        <input type="text" name="brgy" class="form-control" id="brgy">
                                    </div>
                                    <div class="mb-2">
                                        <label for="province" class="form-label">Province: </label>
                                        <input type="text" name="province" class="form-control" id="province">
                                    </div>
                                </div>

                                <div class="container d-flex flex-column justify-content-between">
                                    <div class="mb-2">
                                        <label for="lname" class="form-label">Last Name: </label>
                                        <input type="text" name="lname" class="form-control" id="lname">
                                    </div>
                                    <div class="mb-2">
                                        <label for="bday" class="form-label">Birthdate: </label>
                                        <input type="date" name="bday" class="form-control" id="bday">
                                    </div>
                                    <div class="mb-2">
                                        <label for="age" class="form-label">Age: </label>
                                        <input type="number" name="age" class="form-control" id="age">
                                    </div>
                                    <div class="mb-2">
                                        <label for="scholarship" class="form-label">Type of scholarship: </label>
                                        <input type="number" name="scholarship" class="form-control" id="scholarship" placeholder="NFTWSP">
                                    </div>
                                    <div class="mb-2">
                                        <label for="municipality" class="form-label">Municipality: </label>
                                        <input type="number" name="municipality" class="form-control" id="municipality" >
                                    </div>
                                    <div class="mb-2">
                                        <label for="trainingresult" class="form-label">Training Result: </label>
                                        <input type="number" name="trainingresult" class="form-control" id="trainingresult" placeholder="Active">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
            </form>
        </div>
        <div class="container d-flex justify-content-center mt-3">
            <button type="button" class="btn btn-primary">Add</button>
        </div>
    </div>
</div>
@endsection
