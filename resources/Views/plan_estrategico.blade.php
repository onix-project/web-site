@extends('layouts.default')
@section('titulo', 'ONIX | PLAN')

@push('css')
<style type="text/css">
	
</style>
@endpush

@section('content')
	<div class="clearfix" style="min-height: 70px;"></div>
	<section class="container-fluid" style="padding: 0px;">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding: 0px;">
				@if(Session::get('locale') == 'es')
					<img src="{{url('public/pagina/img/estrategico.jpg')}}" class="img-responsive" style="width: 100%" alt="Plan Estratégico Onix Coin">
				@else
					<img src="{{url('public/pagina/img/strategic.jpg')}}" class="img-responsive" style="width: 100%" alt="Strategic Plan Onix Coin">
				@endif
			</div>
		</div>
	</section>
@endsection