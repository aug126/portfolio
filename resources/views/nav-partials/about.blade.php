<section id="about" class="text-center">
  <div class="container">
    <h2 class="hide">{{strtoupper('A Propos')}}</h2>
    <div class="row">
    @foreach ($abouts as $about)
    <div class="col-4 hide item" id="test1">
      {{-- <img src="/images/about-bg-1.png" alt=""> --}}
    <span><i class="fas {{$about->icon}}"></i></span>
      <h3>{{$about->title}}</h3>
      <p>{{$about->text}}</p>
    </div>
      @if (($loop->index + 1) % 3 == 0)
      </div>
      <div class="row">
      @endif
    @endforeach
    </div>
    
  </div>
</section>

