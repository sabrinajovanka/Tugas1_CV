<html>      
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </head>
    <body class="antialiased">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
        <div class="container">
          <a class="navbar-brand" href="/welcome">CV</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/welcome">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  More
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/datapribadi">Data Pribadi</a></li>
                  <li><a class="dropdown-item" href="/pendidikan">Pendidikan</a></li>
                  <li><a class="dropdown-item" href="/kontak">Kontak</a></li>
                  <li><a class="dropdown-item" href="/pengalaman">Pengalaman</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
        {{-- <header style="text-align: center;">
            <h2>Data Pribadi</h2>
        </header> --}}
        <style>
          body{
            background-image: url("background.jpg")
          }
          /* table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
          } */
        </style>
        <div class="wrap">
          <h1 class="class" align="center">BIODATA DIRI</h1>
          <hr/ align="center"style="border-top: 3px double #8c8b8b;">
          <table style="display: flex;
          align-items: center;
          justify-content: center;"">
          <tr><td rowspan="10" width="100px">
          <img src="portrait.jpg" width="200px" style="display: block;border-radius: 50%;border-color:white;margin-right:30px" border="2px" ></td></tr>
          <tr><td><b>Nama</b></td><td>:</td> <td>Sabrina Jovanka</td></tr>
          <tr><td><b>Jenis Kelamin</b></td><td>:</td> <td>Perempuan</td></tr>
          <tr><td><b>Alamat</b></td><td>:</td> <td>Jl. Imam Bonjol No.6</td></tr>
          <tr><td><b>TTL</b></td><td>:</td> <td>Medan, 19 Oktober 2022</td></tr>
          <tr><td><b>Perguruan Tinggi</b></td><td>:</td> <td>Universitas Pelita Harapan</td></tr>
          <tr><td><b>Fakultas</b></td><td>:</td> <td>Sistem Informasi</td></tr></table>
          <div>


        {{-- <table border="1" cellpadding="10" style="
        display: flex;
        align-items: center;
        justify-content: center;
        ">
          <tr>
            <td>Nama</td>
            <td>Sabrina Jovanka</td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td>Perempuan</td>
          </tr>
          <tr>
            <td>Tempat, Tanggal Lahir</td>
            <td>Medan, 19 Oktober 2002</td>
          </tr>
          <tr>
            <td>Fakultas</td>
            <td>Ilmu Komputer</td>
          </tr>
          <tr>
            <td>Program Studi</td>
            <td>Sistem Informasi</td>
          </tr>
          <tr>
            <td>Perguruan Tinggi</td>
            <td>Universitas Pelita Harapan</td>
          </tr>
          <tr>
            <td>Instagram</td>
            <td>sabrina.alwin</td>
        </tr>
      </table> --}}
    </body>
</html>