@extends('layouts.app')
@section('section')
<form method="POST" action="/about/update">
    @csrf
 
    <div class="form-group">
        <label for="description">Overview</label>
        <textarea value="{{$about->overview}}" name="overview"  class="form-control" id="description" ></textarea>
    </div>
    <div class="form-group">
        <label for="description">Our_mission</label>
        <textarea name="our_mission" class="form-control" id="description" ></textarea>
    </div>
  
   <div class="form-group">
        <label for="description">ourteams</label>
        <textarea  name="ourteams" class="form-control" id="description" ></textarea>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input name="image" type="file" class="form-control-file" id="image">
        <small class="form-text text-muted">Choose an image to upload.</small>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    
</form>

@endsection