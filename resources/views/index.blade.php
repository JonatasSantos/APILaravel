<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <title>Climatempo</title>
</head>
<body>
    <header class="header-site">
        <div class="container">
            <nav class="navbar navbar-light" style="width: 80%;">
                <div class="row nav-bar">
                    <div class="col-6 col-sm-4 col-md-4">
                        <a class="navbar-brand" href="#">
                            <img id="logo" src="/images/logo-white.png" alt="ClimaTempo" width="120" height="31">
                        </a>
                    </div>
                    <div class="col-6 col-lg-8 col-md-6 col-sm-8">
                        <form class="d-flex nav-search">
                            <input class="form-control me-2 " type="search" placeholder="Pesquisar" aria-label="Pesquisar" value="<?php echo $date . $text?>">
                            <img class="search-img" src="/images/icons/search.png" alt="search" width="2%" height="30">
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div id="mainContent" class="container">
        <div class="container col-12">
            <h2>Previsao para Osasco</h2>
            <div id="card" class="card">
                <div class="card-body">
                    <h5 class="card-title">01/02/2017</h5>
                    <p class="card-text">Sol com muitas nuvens durante o dia. Periodos de nublado, com chuva a qualquer hora.</p>
                
                </div>
                <div class="card-body cardBody2" style="background-color: #dee2e6; width: 100%;">
                    <div class="row card-row1">
                        <div class="col-6">
                        <span><img src="/images/icons/upload.png" alt="maxima">&nbsp;20&#176;C</span>
                        </div>
                        <div class="col-6">
                            <span><img src="/images/icons/download.png" alt="minima">&nbsp;20&#176;C</span>
                        </div>
                    </div>
                    <div class="row card-row2">
                        <div class="col-6">
                            <span><img src="/images/icons/raindrop-close-up.png" alt="umidade">&nbsp;20&#176;C</span>
                        </div>
                        <div class="col-6">
                            <span><img src="/images/icons/umbrella.png" alt="chuva">&nbsp;20&#176;C</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>