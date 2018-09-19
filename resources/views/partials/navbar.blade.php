{{-- sections vient du parent dans lequel il est inclu (layouts/main.blade.php) --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="navbar">
    <a class="navbar-brand" href="#" id="brand"><span class="entite">&lt;</span> Augustin Doat <span class="entite">/&gt;</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="#home">{{strtoupper('Accueil')}}<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">{{strtoupper('A Propos')}}<span class="sr-only">(current)</span></a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="#services">{{strtoupper('Services')}}<span class="sr-only">(current)</span></a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="#portfolio">{{strtoupper('Portfolio')}}<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#mes-acti">{{strtoupper('Mes Activites')}}<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#contact-cheat">{{strtoupper('Contact')}}<span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <div class="dropdown" id="lang">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{strtoupper('Langue')}}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item active" href="#">FR<FR</a>
                <a class="dropdown-item" href="#">EN</a>
            </div>
        </div>
    </div>
</nav>
