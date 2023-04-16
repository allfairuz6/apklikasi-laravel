<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="home.css" />
</head>

<section class="jumbotron text-center">
    <div class="container">
      <img src="https://kotabogor.go.id/assets/img/landing_baru/logo.png" alt="logo" width="180"/>
    </div>
  </section>

  <div class="container">

    <div class="row height d-flex justify-content-center align-items-center">

      <div class="col-md-8">

        <div class="search">
          <i class="fa fa-search"></i>
          <input type="text" class="form-control" placeholder="Pencarian">
          <button class="btn btn-primary">Search</button>
        </div>
        
      </div>
      
    </div>
</div>

<body>
    

    <div class="container d-flex justify-content-between" style="margin-top:1%">
    <div class="button">
		<div id="dropdown" data-id="atas"><img src="/img/umbrella.png" width="50" height="50"></div>
        <a href="menu.blade.php" class="btn" target="_blank">Sekilas Kota Bogor</a>
    </div>
    <div class="button">
		<div id="dropdown" data-id="atas"><img src="/img/speaker.png" width="50" height="50"></div>
        <div class="font-wrap">Pengumuman</div>
    </div>
    <div class="button">
		<div id="dropdown" data-id="atas"><img src="/img/support.png" width="50" height="50"></div>
        <div class="font-wrap">Pelayanan Publik</div>
    </div>
    <div class="button">
		<div id="dropdown" data-id="atas"><img src="/img/bank.png" width="50" height="50"></div>
        <div class="font-wrap">Pemerintahan</div>
    </div>
    <div class="button">
		<div id="dropdown" data-id="atas"><img src="/img/rupiah.png" width="50" height="50"></div>
        <div class="font-wrap">Investasi</div>
    </div>
    <div class="button">
		<div id="dropdown" data-id="atas"><img src="/img/cube.png" width="50" height="50"></div>
        <div class="font-wrap">Transparansi</div>
    </div>
    </div>
    <br>
    <div class="container d-flex justify-content-around">
    <div class="button">
        <div id="dropdown" data-id="bawah"><img src="/img/calendar.png" width="50" height="50"></div>
        <div class="font-wrap">Kalender Kota</div>
    </div>
    <div class="button">
        <div id="dropdown" data-id="bawah"><img src="/img/newspaper.png" width="50" height="50"></div>
        <div class="font-wrap">Berita</div>
    </div>
    <div class="button">
        <div id="dropdown" data-id="bawah"><img src="/img/chat.png" width="50" height="50"></div>
        <div class="font-wrap">Aspirasi Warga</div>
    </div>
    <div class="button">
        <div id="dropdown" data-id="bawah"><img src="/img/camera.png" width="50" height="50"></div>
        <div class="font-wrap">Pariwisata</div>
    </div>
    <div class="button">
        <div id="dropdown" data-id="bawah"><img src="/img/touch.png" width="50" height="50"></div>
        <div class="font-wrap">Smart City</div>
    </div>
    </div>
    
</body>
</html>