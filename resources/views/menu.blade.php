@extends('base')

@section('title', 'Menu')

@section('content')
    <section>
      <h2>Menu</h2>
      @foreach ($categories as categorie)
      <div>
        <h3>({ $categorie })</h3>
        <ul class="plats">
          @for ($1 =0; $1 < 3; $i++)
          <li>
            <img src="/images/eaters-collective-ddZYOtZUnBk-unsplash.jpg" alt="pasta" />
            <h4>Lorem ipsum dolor</h4>
            <span class="price">9,99 eur</span>
          </li>
          @endfor
        </ul>
      </div>
      @endforeach
      
      <footer>
        <!-- TODO -->
      </footer>
    </section>
  @endsection
  </body>
</html>
