@extends('master')

@section('title')
    {{ $data['name'] }} Detail
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ $data['image'] }}" alt="" class="w-75"/>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <h2>{{ $data['name'] }}</h2>
                        <h4>{{ $data['price'] }}</h4>
                        <p>{{ $data['description'] }}</p>
                        <hr/>
                        <button type="button" class="btn btn-success">Add To cart</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
