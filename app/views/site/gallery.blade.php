@extends('site.layouts.default')
{{-- Web site Title --}}
@section('title')
:: {{{ Lang::get('site.contact_us') }}} 
@parent
@stop

{{-- Content --}}
@section('content')

{{{ Lang::get('site.gallery_para_1') }}}

@stop


{{-- Footer --}}
@section('footer')

{{{ Lang::get('site.gws_slogan') }}}

@stop