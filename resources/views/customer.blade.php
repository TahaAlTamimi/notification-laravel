@extends('layouts.app')

@section('content')
<div class="container" >
add customers
<form action='/addcustomer' method='post'>
@csrf
<div class="form-group">
<label for='customer'>name</label>
<input class="form-control" name='name' value="{{old('name')}}"/>
@error('customer')
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
    <label for="status">status</label>
    <select name='status'  class="form-control" id="status" >
    
      <option  value=1>active</option>
      <option value=0>inactive</option>

    </select>
    @error('status')
<p>{{$message}}</p>
@enderror
  </div>





<button type='submit'>add</button>
</form>
<div class='row'>
<div class='col-6'>
<h3>active customer</h3>
@foreach($activecustomers as $activecustomer)

<li>{{ $activecustomer->name}}  {{$activecustomer->email}}</li>

@endforeach

</div>


<div class='col-6'>
<h3>inactive customer</h3>
@foreach($inactivecustomers as $inactivecustomer)

<li>{{ $inactivecustomer->name}}  {{$inactivecustomer->email}}</li>

@endforeach

</div>

</div>
@endsection
