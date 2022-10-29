
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
                  <li><a class="dropdown-item" href="/lihatkrs">Lihat KRS</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div>
      <h4>Nama       
        <?php
        $nama = DB::table('mahasiswa')
        ->where('id', '1')
        ->value('Nama');
        echo $nama;
        ?></h4>
    </div>
    
    <div>
      <h4>NIM       
        <?php
            $studentID = DB::table('mahasiswa')
            ->where('id', '1')
            ->value('StudentID');
            echo $studentID;
        ?></h4>
    </div>

    <div>
      <h4>Term       
        <?php
        $term = DB::table('mahasiswa')
        ->where('id', '1')
        ->value('term');
        echo $term;
    ?></h4>
    </div>

    <div>
      <h4>SKS       
        <?php
        $total=0;
        $id=1;
        while($id<7){                    
            $temp = $total + DB::table('matakuliah')->where('id_matkul',$id)->value('sks');
            $total = $temp;
            $id++;
        }
        echo $total;
    ?></h4>
    </div>
    <hr>

        <table width="700px">
            <tr>
                <th>No.</th>
                <th>Kode Mata Kuliah</th>
                <th>Nama Mata Kuliah</th>
                <th style='text-align:center'>SKS</th>
            </tr>
            <?php
                $no=1;
                while ($no<7) {
                    
                    $kodematkul = DB::table('matakuliah')
                    ->where('id_matkul', $no)
                    ->value('kode_matakuliah');

                    $namamatkul = DB::table('matakuliah')
                    ->where('id_matkul', $no)
                    ->value('nama_matakuliah');

                    $sks = DB::table('matakuliah')
                    ->where('id_matkul', $no)
                    ->value('sks');

                    echo "<tr>";
                    echo "<td>".$no."</td>";                        
                    echo "<td>".$kodematkul."</td>";
                    echo "<td>".$namamatkul."</td>";
                    echo "<td style='text-align:center'>".$sks."</td>";
                    echo "</tr>";

                    $no++;
                }  
            ?>
        
        </table>
    </body>
</html>