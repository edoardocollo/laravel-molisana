@foreach($dataEncoded as $data)
<section class="blog_row">
  <h2>{{$data[0]['tipo']}}</h2>
  @foreach($data as $dato)
  <div class="card">
    <img src="{{$dato['src']}}" alt="">
    <div class="overlay">
      <h3>{{$dato['titolo']}}</h3>
      <img src="{{asset('img/icon.svg')}}" alt="">
    </div>
  </div>
  @endforeach

</section>

@endforeach
