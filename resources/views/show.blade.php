@extends('layouts.app')

@section('show')

<div class='row'>
<div class='col-6'>
  <a  href='/customer/{{$customer->id}}/edit'><button>edit customer</button></a>
<h3>active customer</h3>

<div></div>

</div class='row'>
<h1>Detail for : </h1>

<h1>

{{$customer->name}}

</h1>
<h1>

{{$customer->email}}
({{$customer->company->name}})
</h1>




</div>



@endsection
