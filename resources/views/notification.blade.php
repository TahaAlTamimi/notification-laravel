@extends('layouts.app')

@section('content')
<div class="container">
   show alll from notifacation.

   <ul>
   @foreach($notifies as $notifie )

   @if($notifie->type==='App\Notifications\PaymentReceive')
   @if($notifie->data['amount']===null)

<li>does not buy  </li>
@endif
  <li>we recieved a payment amount {{$notifie->data['amount']}}</li>

  @endif
  
   @endforeach
   </ul>
</div>
@endsection
