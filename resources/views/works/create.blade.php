@extends('layouts.app')
@section('section')
<form method="POST" action="/work/store" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="description">name</label>
        <input name="name" class="form-control" id="description" >
    </div>
    <div class="form-group">
        <label for="description">about</label>
        <textarea name="about" class="form-control" id="description" ></textarea>
    </div>

  

    <div class="form-group">
        <label for="image">Image</label>
        <input name="image" type="file" class="form-control-file" id="image">
        <small class="form-text text-muted">Choose an image to upload.</small>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection