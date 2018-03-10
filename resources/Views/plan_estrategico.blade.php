@extends('layouts.default')
@section('titulo', 'ONIX | PLAN')
@push('js')
	<script>
		var $imagen1, $imagen2;
		$imagen1 ="{{url('public/img/logos/blanco.png')}}"
		$imagen2 ="{{url('public/img/logos/blanco.png')}}"
	</script>
@endpush
@push('css')
<style type="text/css">
	
</style>
@endpush

@section('content')
	<div class="clearfix" style="min-height: 70px;"></div>
	<section class="container-fluid" style="padding: 0px;">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center" style="padding: 0px;">
				@if(Session::get('locale') == 'en')
					<img src="{{url('public/pagina/img/strategic.jpg?')}}" class="img-responsive" style="width: 100%" alt="Strategic Plan Onix Coin">					
				@else
					<img src="{{url('public/pagina/img/estrategico.jpg?')}}" class="img-responsive" style="width: 100%" alt="Plan Estratégico Onix Coin">	
				@endif
			</div>
		</div>
	</section>
@endsection