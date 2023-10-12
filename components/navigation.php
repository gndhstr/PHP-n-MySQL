  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex justify-content-between align-items-center">

      <div id="logo">
        <h1><a href="index.html">X</a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#" onclick="loadContent('home')">Home</a></li>
          <li><a class="nav-link scrollto" href="#" onclick="loadContent('agents')">Agents</a></li>
          <li><a class="nav-link scrollto" href="#" onclick="loadContent('customers')">Customers</a></li>
          <li class="dropdown"><a href="#"><span>Tambah Data</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#" onclick="loadContent('add-agent')">Tambah Data Agent</a></li>
              <li><a href="#" onclick="loadContent('add-customer')">Tambah Data Customer</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->