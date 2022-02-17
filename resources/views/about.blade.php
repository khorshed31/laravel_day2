@extends('master')

@section('title')
    About Page
@endsection

@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-4 py-4">
                    <div class="card">
                        <img src="{{ $product['image'] }}" alt=""class="card-img-top h-300"/>
                        <div class="card-body">
                            <h3 class="card-title">{{ $product['name'] }}</h3>
                            <h5 class="card-text">Price: {{ $product['price'] }}</h5>
                            <p class="card-text">{{ $product['brand'] }}</p>
                            <hr/>
                            <a href="{{ route('detail', ['id' => $product['id']]) }}" class="btn btn-dark">Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
