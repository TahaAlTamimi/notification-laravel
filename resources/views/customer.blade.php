@extends('layouts.app')

@section('content')
<div class='row'>
<div class='col-6'>
  <a  href='/add'><button>add customer</button></a>
<h3>active customer</h3>

@foreach($activecustomers as $activecustomer)

<li> <a href='/customer/{{$activecustomer->id}}'>{{ $activecustomer->name}} </a> </li>

@endforeach

</div>


<div class='col-6'>
<h3>inactive customer</h3>
@foreach($inactivecustomers as $inactivecustomer)

<li><a href='/customer/{{$inactivecustomer->id}}'>{{ $inactivecustomer->name}} </a></li>

@endforeach

</div>

</div>

@endsection
