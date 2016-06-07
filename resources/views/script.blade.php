@extends('layout.master')
@section('js')
<script>
$.get( "http://challenge.zenchef.tech/calcul", function( data ) {
  console.log(data);
});
</script>
@endsection
