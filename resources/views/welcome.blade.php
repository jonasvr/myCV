@extends('layout.master')
@section('content')
    <div class="row">
        <div class="col-md-offset-4 col-md-4">
            <h1>Mijn Curriculum Vitae</h1>
            <hr>
        </div>
    </div>

    <div class="row">
        @include('home.profile')
        @include('home.exp')
        @include('home.opleiding')
        @include('home.skills')
        @include('home.projects')

    </div>

    @include('home.modals.modal-exp')
    @include('home.modals.modal-skills')
    @include('home.modals.modal-edu')
@endsection