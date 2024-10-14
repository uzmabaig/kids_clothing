<!doctype html>
<html lang="en">
<head>
  <title>Products- @yield('title','website')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
</head>
<body>
  <div class="row">
    <div class="col-6 offset-3 mt-4">
      <h3>All Products:</h3>
      <a href="{{ route('add.product') }}" class="btn btn-success btn-sm mb-3">Add new</a> 
      <a href='{{route('welcome')}}' class="btn btn-secondary btn-sm mb-3">Back</a>
      
      <table id="myTable">
        <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Price</th>
          <th>Image</th>
          <th>Action</th>
       </tr>
      </thead>
      <tbody>
        @foreach ($data as $id => $products)
        <tr>
          <td>{{$id+1}}</td>
          <td>{{$products->name}}</td>
          <td>{{$products->price}}</td>
          <td>{{ "image" }}</td>
          <td><a href="{{ route('view.product',$products->id) }}" class="btn btn-primary btn-sm">View</a>
            <a href= "{{ route('update.product',$products->id)}}" class="btn btn-warning btn-sm">Update</a>
            <a href= "{{ route('delete.product',$products->id)}}" class="btn btn-danger btn-sm">Delete</a></td>
          </tr>
          @endforeach
      </tbody>
        </table>
        {{-- <div class="mt-4">
          {{ $data->links('pagination::bootstrap-5')}}
        </div> --}}
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <script>
      
      $(document).ready( function () {
        $('#myTable').DataTable();
      });
    </script>
  </body>
  </html>
  
  
  
  
