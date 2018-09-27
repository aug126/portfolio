<section id="about" class="text-center">
  <div class="container">
    <h2 class="hide">{{strtoupper('A Propos')}}</h2>
    <div class="row">
    @foreach ($abouts as $about)
    <div class="col-4 hide item" id="test1">
      <img src="/images/about-bg-1.png" alt="">
      <span><i class="fas fa-user"></i></span>
      <h3>Moi {{$loop->index + 1}}</h3>
      <p>Je m'appelle Augustin Doat, je suis développeur web ...</p>
    </div>
      @if (($loop->index + 1) % 3 == 0)
      </div>
      <div class="row">
      @endif
        
    @endforeach
      <div class="col-4 hide item">
        <span><i class="fas fa-laptop"></i></span>
        <h3>Sites</h3>
        <p>Je fais des sites sur demande ...</p>
      </div>
      <div class="col-4 hide item">
        <span><i class="fas fa-star"></i></span>
        <h3>titre</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit natus aut perspiciatis quis reprehenderit delectus. Quo minima laborum blanditiis ?</p>
      </div>
    </div>
    <div class="row">
      <div class="col-4 hide item">
        <span><i class="fas fa-map-marker-alt"></i></span>
        <h3>Localisation</h3>
        <p>Je travaille à Molengeek, à Bruxelles. ...</p>
      </div>
      <div class="col-4 hide item">
        <span><i class="fas fa-users"></i></span>
        <h3>communauté</h3>
        <p>Je suis dans une communauté ...</p>
      </div>
      <div class="col-4 hide item">
        <span><i class="fas fa-handshake"></i></span>
        <h3>Commande</h3>
        <p>Vous voulez commander un site ? ...</p>
      </div>
    </div>
  </div>
</section>