@extends('welcome')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      
    <a href="{{route('add.category')}}" class="btn btn-danger"> Add Category</a>
          <a href="{{route('all.category')}}"class="btn btn-info"> All Category</a>
     <hr>
     @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
      
    <form method="POST" action="{{ route('store.category') }}">
          @csrf
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Category Name</label>
            <input type="text" class="form-control" placeholder="Category Name" name="category" >
          </div>
        </div>

        
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Slug Name</label>
            <input type="text" class="form-control" placeholder="Slug Name" name="slugx" ></textarea>
          </div>
        </div>
        <br>
       
        <div class="form-group">
          <button type="submit" class="btn btn-primary" id="insert">Submit</button>
        </div>
      </form>
    </div>
  </div>
  </div>
    
@endsection