@foreach($dataEncoded as $data)
<section class="blog_row">
  <h2>{{$data[0]['tipo']}}</h2>
  @foreach($data as $dato)
  <div class="card">
    <img src="{{$dato['src']}}" alt="">
  </div>
  @endforeach

</section>

@endforeach
