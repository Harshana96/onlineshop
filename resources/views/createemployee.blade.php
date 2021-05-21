@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h4 class="heading-small mb-1 text-gray-dark">{{__('Create New Employee')}}</h4></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form id="createEmployee" method="POST" action="/create">
                            @csrf
                            <div class="form-group">
                                <label for="employee_name">Employee Name</label>
                                <input type="text" class="form-control" id="employee_name" name="employee_name" aria-describedby="emailHelp" placeholder="Employee Name" required>
                            </div>
                            <div class="form-group">
                                <label for="employee_email">Employee Emaill</label>
                                <input type="email" class="form-control" id="employee_email" name="employee_email" placeholder="Employee Emaill" required>
                            </div>
                            <div class="form-group">
                                <label for="employee_address">Employee Address</label>
                                <textarea class="form-control" id="employee_address" name="employee_address" rows="3" placeholder="Employee Address" required></textarea>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="employee_contact_no">Employee Contact no</label>
                                    <input type="text" class="form-control" id="employee_contact_no" name="employee_contact_no" placeholder="Employee Contact no" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="employee_nic">Employee NIC no</label>
                                    <input type="text" class="form-control" id="employee_nic" name="employee_nic" placeholder="Employee NIC no" required>
                                </div>
                            </div>
                            <div class="col-md-12 text-center px-5">
                                <button type="submit" class="btn btn-primary ">Submit</button>
                                <button type="reset" class="btn btn-primary">Clear</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
