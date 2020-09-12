<h1>User</h1>

<table>

<tr>
  @foreach($usr as $key => $value)
    <th>{{$key}}</th>
  @endforeach
  </tr>

  <tr>
    @foreach($usr as $key => $value)
    <td>{{$value}}</td>
  @endforeach
  </tr>

</table>
 <br><br>

<h1>Transactions</h1>
 @foreach($user_transaction as $transaction)
 <table>

 <tr>
   @foreach($transaction as $key => $value)
     <th>{{$key}}</th>
   @endforeach
   </tr>

   <tr>
     @foreach($transaction as $key => $value)
     <td>{{$value}}</td>
   @endforeach
   </tr>

 </table><br><br>
 @endforeach
