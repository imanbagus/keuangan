@extends('layout')

@section('content')


  
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">   
 <table class="table">
    <tr>
       <th>No</th>
        <th>No Bukti</th>
       <th>Tanggal</th>
       <th>Nominal</th>
       <th>Tipe Transaksi</th>
       <th>Action</th>
    </tr>
   
      <tr>
        @foreach ($datatransaksi as $data1)
          <td>{{ $data1->id}}</td>
          <td>{{ $data1->no_bukti}}</td>
          <td>{{ $data1->tanggal}}</td>
          <td>{{ $data1->nominal }}</td>
          <td>{{ $data1->tipe_transaksi }}</td>
        @endforeach
      </tr>
   
 </table>
</div>

