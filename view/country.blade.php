
@foreach($country_data as $country => $data)

<h1>{{$country}}</h1>

<table>

<tr>
    <th>br.transakcija</th>
    <th>ukupan iznos</th>

  </tr>

  <tr>
  @foreach($data as $da)
    <td>{{$da}}</td>
  @endforeach
  </tr>

</table>
 <br><br>
 @endforeach
