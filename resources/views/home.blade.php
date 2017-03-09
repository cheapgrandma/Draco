@extends('layouts.app')
@section('title') Dashboard @endsection
@section('breadcrumb') <a href="/home">Dashboard</a> @endsection

@section('scripts')
<script>
    $('#menu-dashboard').addClass('active');
</script>
@endsection