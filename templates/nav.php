  <nav class="navbar navbar-expand-lg background shadow-lg" style="display: block;">
    <div class="container">
      <a class="navbar-brand text-white" href="/">GymFit</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item pe-2">
            <a class="nav-link text-white" href="/members/login">Login</a>
          </li>
          <li class="nav-item pe-2">
            <a class="nav-link text-white" href="/members/create">Cadastre-se</a>
          </li>
          <li class="nav-item pe-2">
            <a class="nav-link text-white" href="/logout">Sair</a>
          </li>
          <li class="nav-item pe-2">
            <a class="nav-link text-white" href="#">
              <?php
              if (isset($_SESSION['user'])) {
                echo $_SESSION['user'];
              }
              ?>
            </a>
          </li>
          <li class="nav-item pe-2">
            <a class="nav-link text-white" href="/gestor">
              <?php
              if (isset($_SESSION['user']) && $_SESSION['profile'] === 'admin') {
                echo "Área do gestor";
              }
              ?>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php
  ?>