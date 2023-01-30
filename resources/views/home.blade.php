@extends('layouts.app')

@section('title', 'Home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body px-5">

                   @livewire('records.create')
                   @livewire('records.show')

                </div>
            </div>
        </div>
    </div>
</div>
@endsection