@extends('layouts.modal')

@section('content')
<!--Add Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Student Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action = "{{ route('add.student') }}" method="POST">
        @csrf
        <div class="modal-body">
          
          <div class="mb-3">
            <label for="name">Full Name:</label>
            <input type="text" class="form-control" name="name" >
          </div>
          <div class="mb-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" >
          </div>
          <div class="mb-3">
            <label for="course">Course:</label>
            <input type="text" class="form-control" name="course">
          </div>
          <div class="mb-3">
            <label for="phonenumber">Contact:</label>
            <input type="number"class="form-control" name="phonenumber">
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!--Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit and Update Student Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action = "{{ route('update.student') }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" id="stud_id" name="stud_id"/>
        <div class="modal-body">
          <div class="mb-3">
            <label for="name">Full Name:</label>
            <input type="text" class="form-control" name="name" id="name" >
          </div>
          <div class="mb-3">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" id="email">
          </div>
          <div class="mb-3">
            <label for="course">Course:</label>
            <input type="text" class="form-control" name="course" id="course">
          </div>
          <div class="mb-3">
            <label for="phonenumber">Contact:</label>
            <input type="number"class="form-control" name="phonenumber" id="phonenumber">
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
      </form>
    </div>
  </div>
</div>

<h3>Student Data
  <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add Student
  </button></h3>
  <table class="table table-bordered table-striped mt-4">
    <thead>
      <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Course</td>
        <td>Contact</td>
        <td>Action</td>
      </tr>
    </thead>
    <tbody>
      @foreach ($data as $id => $students)
      <tr>
        <td>{{$id+1}}</td>
        <td>{{$students->name }}</td>
        <td>{{$students->email}}</td>
        <td>{{$students->course}}</td>
        <td>{{$students->phonenumber}}</td>
        <td><button type= "button" value="{{ $students->id }}" class="btn btn-warning editbtn">Edit</button></td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endsection
  
  @section('scripts')
  <script>
    $(document).ready(function (){
      $(document).on('click','.editbtn', function (){
        var stud_id = $(this).val();
        $('#editModal').modal('show');
        
        $.ajax({
          type:"GET",
          url:"edit-student/"+stud_id,
          success: function (response) {
            $('#stud_id').val(stud_id);
            $('#name').val(response.data.name);
            $('#email').val(response.data.email);
            $('#course').val(response.data.course);
            $('#phonenumber').val(response.data.phonenumber);
          }
        });
      });
    });
    
  </script>
  @endsection