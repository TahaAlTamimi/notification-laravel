@extends('layouts.app')

@section('contact')
<div class="container" >
add customers
<form action='/contact' method='post'>
@csrf
<div class="form-group">
<label for='customer'>name</label>
<input class="form-control" name='name' value="{{old('name')}}"/>
@error('name')
<p>{{$message}}</p>
@enderror
</div>


<div class="form-group">
<label for='email'>emaiil</label>
<input class="form-control" name='email' value="{{old('email')}}"/>
@error('email')
<p>{{$message}}</p>
@enderror
</div>


<div class="form-group">
<label for='contact'>contact</label>
<textarea class="form-control" name='contact' value="{{old('contact')}}"></textarea>
@error('contact')
<p>{{$message}}</p>
@enderror
</div>



  



<button type='submit'>add</button>
</form>
@endsection