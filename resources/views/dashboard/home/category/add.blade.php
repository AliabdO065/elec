@extends('dashboard.layouts.layout')
@section('content')
<div class="wrapper">
    <!-- .page -->
    <div class="page">
        <div class="page-inner">
        <!-- .page-inner -->
        <form action="{{route('dashboard.category.store')}}" method="POST" enctype="multipart/form-data">
            @csrf 
            @method('POST')
            <div class="mb-3">
              <label >Title</label>  @error('title')<div class="alert alert-danger">{{ $message }}</div>@enderror
              <input type="text" class="form-control" name="title" class="@error('title') is-invalid @enderror">
            </div>
            <div class="mb-3"> 
                <label >Details</label> @error('details')<div class="alert alert-danger">{{ $message }}</div>@enderror
                <input type="text" class="form-control" name="details" class="@error('details') is-invalid @enderror"> 
            </div>

            <div class="mb-3"> 
                <label >Status</label>
                <select name="status" class="form-control" name="status" class="@error('status') is-invalid @enderror"> 
                    @error('status')<div class="alert alert-danger">{{ $message }}</div>@enderror
                    <option selected value="appear">appear</option>
                    <option value="disappear">disappear</option>
                  </select>
            </div>
            <div class="mb-3"> @error('img')<div class="alert alert-danger">{{ $message }}</div>@enderror
                <label  >The Image</label>
                <input  class="form-control" type="file" name="img" class="@error('img') is-invalid @enderror">
            </div>
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
        </div>
    </div>
    </div>
@endsection

