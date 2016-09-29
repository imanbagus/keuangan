@extends('layout')

@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active"></li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Form Input Data Transaksi</h1>
			</div>
		</div><!--/.row-->

 {{Form::open(array('action' => 'InputTransaksiController@store')) }}

 {{Form::label('no_bukti', 'No Bukti') }}

 {{Form::text('no_bukti', '', array('class' => 'form-control' ,'required' => 'required'))}}

 {{Form::label('tanggal', 'Tanggal') }}

 {{Form::text('tanggal', '', array('class' => 'form-control' , 'required' => 'required'))}}

 {{Form::label('nominal', 'Nominal') }}

 {{Form::text('nominal', '', array('class' => 'form-control' , 'required' => 'required'))}}

 {{Form::label('tipe_transaksi', 'Tipe') }}

 {{Form::text('tipe_transaksi', '', array('class' => 'form-control' , 'required' => 'required'))}}

 {{Form::submit('submit', array('class' => 'btn btn-primary custom-btn')) }}
  
    
{{ Form::close()}}
@stop
