@extends('layouts.app')
   
@section('content')
<div class="container">
<h1>Resize Image Uploading Demo</h1>

   

   
<Form action="" method="post" enctype="multipart/form-data">
   @csrf
    <div class="row">
        <div class="col-md-4">
            <br/>
            <input type="text" class="form-control" placehoder="Add Title" name="title"/>
            
        </div>
        <div class="col-md-12">
            <br/>
            <input type="file" class="image" name="image">
        </div>
        <div class="col-md-12">
            <br/>
            <button type="submit" class="btn btn-success">Upload Image</button>
        </div>
    </div>
</Form>
</div>
@endsection