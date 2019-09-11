@extends('website')

@section('content')
    <div class="row">
        <div class="col">
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <td>Producto</td>
                    <td>Precio Unitario</td>
                </tr>
                </thead>

                <tbody>
                @foreach($cart->items as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->unit_price }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <a href="{{ url('/productos') }}">Seguir Comprando</a>

            <hr>

            <form action="{{ url('/carrito/confirmar') }}" method="post">
                @csrf
                <button class="btn btn-primary">Comprar</button>
            </form>
        </div>
    </div>
@endsection
