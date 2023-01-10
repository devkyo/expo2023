@extends('layouts.frontend')

@section('title','Galeria')
@section('content')
	<x-header/>

  <div class="head">
    <div class=" head__title">
      <div class="container head__title-content">
        <div>
          <h1>Galeria</h1>
        </div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('frontend.feria')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Galeria</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
 
  


@endsection
