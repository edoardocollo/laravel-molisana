<div class="product_container">
  <img src="{{$prodotto['src-h']}}" alt="">
  <img src="{{$prodotto['src-p']}}" alt="">
  <div class="description_wrap">
    <div class="short_description">
      <div class="short_col">
        <img src="{{asset ('img/logo.png')}}" alt="">
      </div>
      <div class="short_col_center">

        <span>Tipo pasta: {{$prodotto['tipo']}}</span>
      </div>
      <div class="short_col">
        <img src="https://www.lamolisana.it/wp-content/uploads/2017/05/marchio-matese-tab.png" alt="">
      </div>
      <div class="short_col">
        <span>{{$prodotto['titolo']}}</span>

      </div>
      <div class="short_col_center">

        <span>Cottura pasta: {{$prodotto['cottura']}}</span>
      </div>
      <div class="short_col">
        <span>Peso: {{$prodotto['peso']}}</span>

      </div>
    </div>
    <p>{!!$prodotto['descrizione']!!}</p>
  </div>
</div>
