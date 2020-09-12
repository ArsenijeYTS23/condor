
@foreach(array_combine($country->pluck('name')->toArray(), $usc) as $d1 => $d2)

<h1>{{$d1}}</h1>

<table>

<tr>
    <th>br.transakcija</th>
    <th>ukupan iznos</th>

  </tr>

  <tr>
  @foreach($d2 as $dee)
    <td>{{$dee}}</td>
  @endforeach
  </tr>

</table>
 <br><br>
 @endforeach
