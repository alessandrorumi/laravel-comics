<header class="d-flex align-items-center">
  <div class="logo">
    <img src="{{ Vite::asset('/resources/img/dc-logo.png') }}" alt="">
  </div>
    <nav class="justify-content-center">
      <ul class="d-flex h-100">
        @foreach ($links as $link)
        <li class="d-flex mx-2">
            <a href="">{{ $link['text'] }}</a>
        </li>
        @endforeach
      </ul>
    </nav>
    <form class="d-flex align-items-center justify-content-center">
      <div class="form-group">
        <input type="text" class="form-control" id="searchInput" placeholder="Search...">
      </div>
      <button type="submit" class="btn btn-primary">Search</button>
    </form>
  </div>
</header>