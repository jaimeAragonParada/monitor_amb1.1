@extends('views_monitorAmb.monitorAmb_templates.mainLayout_monitorAmb')

@section('title','Welcome')

@section('mainHeader')
    @include('views_monitorAmb.monitorAmb_partials.welcomeHeader_monitorAmb')
@endsection

@section('mainContent')	
    @include('views_monitorAmb.monitorAmb_partials.welcomeContent_monitorAmb')
@endsection

@section('mainFooter')
    @include('views_monitorAmb.monitorAmb_partials.footer_monitorAmb')
@endsection
