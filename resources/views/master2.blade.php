<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> 5026221036 - Dicky Febri Primadhani </title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="#">5026221036 - Dicky Febri Primadhani</a>

            <!-- Links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="/pegawai">Pegawai</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/nilai">Nilai Kuliah</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/mobil">Mobil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/kategori">Kategori</a>
              </li>

              {{-- <!-- Dropdown -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Database
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="/pegawai">Pegawai</a>
                  <a class="dropdown-item" href="/nilaikuliah">Link 2</a>
                  <a class="dropdown-item" href="#">Link 3</a>
                </div>
              </li> --}}
            </ul>
          </nav>
        <hr/>
        <br/>
        <br/>
        <!-- bagian judul halaman blog -->
        <h3> @yield('judul_halaman') </h3>

        <!-- bagian konten blog -->
	    @yield('konten')

        @yield('header')
        @yield('isihalaman')
        <br/>
        <br/>
        <hr/>
        <footer>
            {{-- <p>&copy; <a href="https://www.malasngoding.com">www.malasngoding.com</a>. 2018 - 2019</p> --}}
        </footer>
    </div>
</body>
</html>

