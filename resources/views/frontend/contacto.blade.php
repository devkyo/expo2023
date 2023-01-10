@extends('layouts.frontend')

@section('title','Contacto')
@section('content')
	<x-header/>

  <div class="head">
    <div class=" head__title">
      <div class="container head__title-content">
        <div>
          <h1>Contacto</h1>
        </div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('frontend.feria')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Visitantes</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>

 


@endsection
