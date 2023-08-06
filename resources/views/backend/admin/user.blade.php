@extends('backend.master')
@section('content')
<div class='container-fluid' style='padding-left:400px; margin-top:-350px;'>
<div class='col-md-12' >
<table bgcolor='grey' border='3px'>
    <tr>
        <th style='padding:15px;' >Name</th>
        <th style='padding:15px;'> Email </th>
        <th style='padding:15px;'> Action</th>
       
 </tr>
    @foreach($data as $datum)
    <tr>
        <td style='padding:15px;'>{{$datum->name}}</td>
        <td style='padding:15px;'>{{$datum->email}}</td>
        @if($datum->usertype=='0')
        <td style='padding:15px;'><a href="{{ url('/deleteuser/'.$datum->id) }}">Delete</a></td>   
        @else
        <td style='padding:15px;'>Not Allowed<td>
       @endif
    </tr>
    @endforeach
</table>
</div>
</div>
@endsection