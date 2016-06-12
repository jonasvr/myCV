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
        @include('home.plus')
        @include('home.connection')

    </div>

    @include('home.modals.modal-exp')
    @include('home.modals.skills2')
    @include('home.modals.modal-edu')
    @include('home.modals.modal-projects')
    @include('home.modals.modal-plus')
    @include('home.modals.modal-conn')
@endsection