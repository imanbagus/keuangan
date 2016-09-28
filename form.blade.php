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
				<h1 class="page-header">Form Input Data</h1>
			</div>
		</div><!--/.row-->

 {{ Form::open(array('url' => 'foo/bar')) }}

 {{Form::label('no', 'No') }}

 {{Form::text('no', '', array('class' => 'form-control'))}}

 {{Form::label('tanggal', 'Tanggal') }}

 {{Form::text('tanggal', '', array('class' => 'form-control'))}}

 {{Form::label('keterangan', 'Keterangan') }}

 {{Form::textarea('keterangan', '', array('class' => 'form-control'))}}

 {{Form::label('noperk', 'No Perkiraan') }}

 {{Form::text('noperk', '', array('class' => 'form-control'))}}

 {{Form::label('debet', 'Debet') }}

 {{Form::text('debet', '', array('class' => 'form-control'))}}

 {{Form::label('kredit', 'Kredit') }}

 {{Form::text('kredit', '', array('class' => 'form-control'))}}

 {{Form::submit('Submit', array('class' => 'btn btn-primary custom-btn')) }}

    
 {{ Form::close()}}

