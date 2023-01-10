@extends('layouts.frontend')

@section('title','Visitantes')
@section('content')
	<x-header/>

  <div class="head">
    <div class=" head__title">
      <div class="container head__title-content">
        <div>
          <h1>Visitantes</h1>
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

 
  
  <div class="container">
    <div class="visitantes">
      <p>Expo Detalles contempla gran parte productores, fabricantes y empresarios de calzado. Expo Detalles Perú es una excelente oportunidad para quien necesita entrar en contacto con todos los segmentos necesarios para emprender o actualizar su negocio.</p>
      <p>La feria se realiza los tres primeros días de agosto, en el centro de Exposiciones Jockey, en el departamento de Lima ciudad capital de la República del Perú, región que contempla gran parte productores, fabricantes y empresarios de calzado. Expo Detalles Perú es una excelente oportunidad para quien necesita entrar en contacto con todos los segmentos necesarios para emprender o actualizar su negocio</p>
    </div>
  </div>



@endsection
