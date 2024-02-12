@extends('layouts.main-layout')
@section('main')
  <main>
    <div class="container d-flex d-column">
      @foreach ($comics as $comic)
      <div class="item">
        <a href="/comic">
          <img src="{{ $comic['thumb'] }}" alt="">
          <h5 class="d-flex mx-2">
            {{ $comic['title'] }}
          </h5>
        </a>
      </div>
      @endforeach
    </div>
    <div class="load-more">
      <a href="#">Load More</a>
    </div>
  </main>
@endsection

@section('shop-icon')
<section>
    <div class="shop">
      <div class="digital-comics">
        <img src="{{ Vite::asset('/resources/img/buy-comics-digital-comics.png') }}" alt="">
        DIGITAL COMICS
      </div>
      <div class="merchandise">
        <img src="{{ Vite::asset('/resources/img/buy-comics-merchandise.png') }}" alt="">
        DC MERCHANDISE
      </div>
      <div class="sub">
        <img src="{{ Vite::asset('/resources/img/buy-comics-subscriptions.png') }}" alt="">
        SUBSCRIPTION
      </div>
      <div class="shop-locator">
        <img src="{{ Vite::asset('/resources/img/buy-comics-shop-locator.png') }}" alt="">
        COMIC SHOP LOCATOR
      </div>
      <div class="visa">
        <img src="{{ Vite::asset('/resources/img/buy-dc-power-visa.svg') }}" alt="">
        DC POWER VISA
      </div>
    </div>
  </section>
@endsection


