@extends('layouts.app')

@section('edit')
<div class="container" >
edit

<form action='/customer/{{$customer[0]->id}}' method='post'>
@csrf
@method('PUT')
<div class="form-group">
<label for='customer'>name</label>
<input class="form-control" name='name' value="{{$customer[0]->name}}"/>
@error('name')
<p>{{$message}}</p>
@enderror
</div>
<div class="form-group">
<label for='email'>emaiil</label>
<input class="form-control" name='email' value="{{$customer[0]->email}}"/>
@error('email')
<p>{{$message}}</p>
@enderror
</div>




<div class="form-group">
    <label for="status">status</label>
    <select name='status'  class="form-control" id="status" >
    <option  >choose..</option>
      <option  value=1>active</option>
      <option value=0>inactive</option>

    </select>
    @error('status')
<p>{{$message}}</p>
@enderror
  </div>

  <div class="form-group">
    <label for="company">company</label>
    <select name='company_id'  class="form-control" id="company_id" >
    <option  >choose..</option>
   @foreach($companies as $company)
      <option  value='{{$company->id}}'>{{$company->name}}</option>
      @endforeach

    </select>
    @error('company_id')
<p>{{$message}}</p>
@enderror
  </div>



<button type='submit'>add</button>
</form>
@endsection