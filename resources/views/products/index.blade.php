@extends('website')

@section('content')
    <div class="row">
        @foreach($products as $product)
            <div class="col-4">
                <div class="card">
                    <img src="{{ $product->picture_url }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->title }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text">{{ $product->currency_id }} {{ $product->unit_price }}</p>
                    </div>
                    <div class="card-footer">
                        <form action="{{ url('/carrito', $product->id) }}" method="post">
                            @csrf
                            <button class="btn btn-primary">Comprar</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row">
        <div class="col">
            {{ $products->links() }}
        </div>
    </div>
@endsection
