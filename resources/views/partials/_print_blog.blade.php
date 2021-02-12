@foreach($dataEncoded as $key1 => $data)
<section class="blog_row">
  <h2>{{$data[0]['tipo']}}</h2>
  @foreach($data as $key2 => $dato)
  <div class="card">
    <img src="{{$dato['src']}}" alt="">
    <div class="overlay">
      <a href="/prodotti/{{$key1}}/{{$key2}}">
        <h3>{{$dato['titolo']}}</h3>
        <img src="{{asset('img/icon.svg')}}" alt="">
      </a>
    </div>
  </div>
  @endforeach

</section>

@endforeach
