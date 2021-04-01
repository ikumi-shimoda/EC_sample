@extends ('common.app')
@section ('main')

<main>
  <div class="inner">
    <h1 class="heading">Sale</h1>
    {{ $sales[0]->title }}
    <p>{{ $sales[0]->contents }}</p>
    <article class="main_contents">
      <ul class="items">
        @foreach ($spring_sales as $spring_sale)
        @if($loop->index <= 7)
          <li>
            <a href="#"><img class="products_img" src="{{ asset('/img/' . $spring_sale->image) }}" alt="商品画像"></a>
            <p>{{$spring_sale->name}}</p>
            <small>¥ {{ $spring_sale->price }}</small>
          </li>
        @endif
        @endforeach
      </ul>
    </article>
  </div>
</main>

@endsection