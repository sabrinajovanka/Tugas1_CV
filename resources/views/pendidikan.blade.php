<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
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
      <style>
        body{
            background-image: url("background.jpg")
        }
    
        .our-team{
          padding: 30px 0 40px;
          background: #fff;
          text-align: center;
          overflow: hidden;
          position: relative;
        }
    
        .our-team .pic{
          display: inline-block;
          width: 130px;
          height: 130px;
          margin-bottom: 50px;
          /*background:#ff00ac;*/
          position: relative;
          z-index: 1;
        }
    
        .our-team .pic:before
        {
          content: "";
          width: 100%;
          background: #ff00ac;
          position: absolute;
          bottom: 135%;
          right: 0;
          left: 0; 
          transform: scale(3);
          transition: all 0.3s linear 0s;
        }
    
        /* .our-team:hover .pic:before
        {
          height: 100%;
        } */
    
        .our-team .pic:after
        {
          content: "";
          width: 100%;
          height: 100%;
          border-radius: 50%;
          background: #ff00ac;
          position: absolute;
          top: 0;
          left: 0; 
          z-index: -1;
        }
    
        .our-team .pic img{
          width: 100%;
          height: auto;
          border-radius: 50%;
          transform: scale(1);
          transition: all 0.9s ease 0s;
        }
    
        .our-team:hover .pic img
        {
          box-shadow: 0 0 0 14px #ff00ac;
          transform: scale(0.7);
        }
    
        .our-team .team-content
        {
          margin-bottom: 30px;
        }
        
        .our-team .title{
          font-size: 22px;
          font-weight: 700;
          color:#4e5052;
          letter-spacing: 1px;
          text-transform: capitalize;
          margin-bottom: 5px;
        }
    
        .our-team .post{
          display: block;
          font-size: 15px;
          color:#4e5052;
          text-transform: capitalize;
        }
    
        .our-team .social{
          width: 100%;
          padding:0;
          margin:0;
          background: #eb1768;
          position: absolute;
          bottom: -100px;
          left:0;
          transition: all 0.5 ease 0s;
        }
    
        .our-team:hover .social{
          bottom:0;
        }
    
        .our-team .social li{
          display: inline-block;
        }
    
        .our-team .social li a{
          display: block;
          padding:10px;
          font-size: 17px;
          color:#fff;
          transition: all 0.3s ease 0s;
        }
    
        .our-team .social li a:hover{
          color:#eb1768;
          background: #f7f5ec;
          text-decoration: none;
          
        }
      </style>
        <header style="text-align: center;">
          <h1>Pendidikan</h1>
          <img src="buku.png" width="200" height="200" style="border-radius: 50%;"/>
        </header>
        <div class="container mt-5">
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="our-team">
                <div class="pic">
                  <img src="TKcrop.png" alt="">
                </div>
                <div class="team-content">
                  <h3 class="title">TK Santo Yoseph Medan</h3>
                  <span class="post">2006-2008</span>
                </div>
                {{-- <ul class="social">
       
                  <li><a href="" class="fab fa-facebook-f"></a></li>
                  <li><a href="" class="fab fa-instagram"></a></li>
                  <li><a href="" class="fab fa-linkedin-in"></a></li>
                  <li><a href="" class="fab fa-twitter"></a></li>
       
                </ul> --}}
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="our-team">
                <div class="pic">
                  <img src="sdcrop.jpg" alt="">
                </div>
                <div class="team-content">
                  <h3 class="title">SD Methodist-2 Medan</h3>
                  <span class="post">2008-2014</span>
                </div>
                {{-- <ul class="social">
       
                  <li><a href="" class="fab fa-facebook-f"></a></li>
                  <li><a href="" class="fab fa-instagram"></a></li>
                  <li><a href="" class="fab fa-linkedin-in"></a></li>
                  <li><a href="" class="fab fa-twitter"></a></li>
       
                </ul> --}}
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="our-team">
                <div class="pic">
                  <img src="SMPcrop.jpg" alt="">
                </div>
                <div class="team-content">
                  <h3 class="title">SMP Methodist-2 Medan</h3>
                  <span class="post">2014-2017</span>
                </div>
                {{-- <ul class="social">
       
                  <li><a href="" class="fab fa-facebook-f"></a></li>
                  <li><a href="" class="fab fa-instagram"></a></li>
                  <li><a href="" class="fab fa-linkedin-in"></a></li>
                  <li><a href="" class="fab fa-twitter"></a></li>
       
                </ul> --}}
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="our-team">
                <div class="pic">
                  <img src="SMAcrop.jpg" alt="">
                </div>
                <div class="team-content">
                  <h3 class="title">SMA Methodist-2 Medan</h3>
                  <span class="post">2017-2020</span>
                </div>
                {{-- <ul class="social">
       
                  <li><a href="" class="fab fa-facebook-f"></a></li>
                  <li><a href="" class="fab fa-instagram"></a></li>
                  <li><a href="" class="fab fa-linkedin-in"></a></li>
                  <li><a href="" class="fab fa-twitter"></a></li>
       
                </ul> --}}
              </div>
            </div>
          </div>
        </div>
    </body>
</html>