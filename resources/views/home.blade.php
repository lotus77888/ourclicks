@extends('layout.app')

@section('content')
<h1>Home</h1>
      <form action = "/create" method = "post" enctype="multipart/form-data">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

	<input type="file" name="userimage">
<br>
<input type="submit" name="" value = "Add Image">
</form>

@parent
@endsection