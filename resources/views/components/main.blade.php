<main>
  <div class="container d-flex d-column">
    @foreach ($comics as $comic)
    <div class="item">
      <a href=""><img src="{{ $comic['thumb'] }}" alt=""></a>
      <h5 class="d-flex mx-2">
        {{ $comic['title'] }}
      </h5>
    </div>
    @endforeach
  </div>
  <div class="load-more">
    <a href="#">Load More</a>
  </div>
</main>