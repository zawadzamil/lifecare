@extends('layouts.mainLayout')
@section('body_parts')
    <div class="container col-lg m-md-4" style="margin-right: 10%;">
    <form action="addDoctor" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Image</label>
            <input type="file" name="image" class="form-control" id="exampleInputPassword1" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Type</label>
            <input type="text" name="type" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

        </div>
        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Degree</label>
                <input type="text" name="degree" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

            </div>
        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Address</label>
                <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

            </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Phone</label>
            <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
           <textarea class="form-control" name="description" type="text" id="exampleInputEmail1"></textarea>

        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Department Id</label>
            <input type="text" name="department_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    @endsection
