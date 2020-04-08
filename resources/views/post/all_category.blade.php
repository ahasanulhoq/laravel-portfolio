@extends('welcome')

@section('content')
<hr>
<div class="container">
          
        <a href="{{route('add.category')}}" class="btn btn-danger"> Add Category</a>
        <a href="{{route('all.category')}}"class="btn btn-info"> All Category</a>
      <table class="table table-responsive">
  <thead>
    <tr>
      <th scope="col">LS</th>
      <th scope="col">Category Name</th>
      <th scope="col">Category Slug</th>
      <th scope="col">Created At</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($x as $row)
    <tr>
      <td>{{ $row->id }}</td>
      <td>{{ $row->name }}</td>
      <td>{{ $row->slug }}</td>
      <td>{{ $row->created_at }}</td>
      <td>
          <a href="" class="btn btn-sm btn-info">Edit</a>
          <a href="{{URL::to('delete/x/'.$row->id)}}" class="btn btn-sm btn-danger" id="delete">Delete</a>
          <a href="{{URL::to('view/x/'.$row->id)}}" class="btn btn-sm btn-success">View</a>
      </td>
    </tr>
    @endforeach
  </tbody>
 </table>
 </div>
 </div>
</div>
    
@endsection