<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top fs-5">
          <div class="container-fluid">
              <a class="navbar-brand mx-5" href="/">
                <img src="/img/logo1.png" style="width: 80px; height:50px;">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                  <a class="nav-link {{ ($active == "home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link {{ ($active =="profil") ? 'active' : '' }}" href="/profil">Profil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ ($active =="pendidikan") ? 'active' : '' }}" href="/pendidikan">
                      Pendidikan
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{ ($active =="lainnya") ? 'active' : '' }}" href="/lainnya">
                      Unit Lainnya
                    </a>
                  </li>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link {{ ($active =="berita") ? 'active' : '' }}"  href="/berita">Berita</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="#">Galeri</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="#">Kontak</a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="#">Alumni</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link btn btn-warning " href="#">PSB</a>
                  </li>
              </ul>
              </div>
          </div>
        </nav>
    </div>