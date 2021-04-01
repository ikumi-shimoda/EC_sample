@extends ('common.app')
@section ('main')

<main>
  <div class="inner">
    <article class="main_contents">
    <h1 class="heading"><i>Search Results</i></h1>
      <ul class="items">
      @foreach ($products as $product)
      @if($loop->index <= 7)
        <li>
          <a href="#"><img class="products_img" src="{{ asset('/img/' . $product->image) }}" alt="商品画像"></a>
          <p>{{$product->name}}</p>
          <small>¥ {{ $product->price }}</small>
        </li>
      @endif
      @endforeach
      </ul>
    </article>
  </div>
</main>

@endsection