<?php
function get_CURL($url)
{
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);


  return json_decode($result, true);
}


$result = get_CURL('https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UC_kNMOaCEokMHk--HMzpYoQ&key=AIzaSyBbyM5CTdTub_rByAMj_4kL08s54pTq0c0');


$youtubeProfilePic = $result['items'][0]['snippet']['thumbnails']['medium']['url'];
$channelName = $result['items'][0]['snippet']['title'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];


// Latest Video
$urlLatestVideo = 'https://www.googleapis.com/youtube/v3/search?key=AIzaSyBbyM5CTdTub_rByAMj_4kL08s54pTq0c0&channelId=UC_kNMOaCEokMHk--HMzpYoQ&maxResults=1&order=date&part=snippet';
$result = get_CURL($urlLatestVideo);
$latestVideoId = $result['items'][0]['id']['videoId'];

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

  <!-- My CSS -->
  <link rel="stylesheet" href="css/style.css">

  <title>My Portfolio</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#home">Kura Sulthan</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#portfolio">Collection</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="jumbotron" id="home">
    <div class="container">
      <div class="text-center">
        <img src="img/kur.jpg" class="rounded-circle img-thumbnail">
        <h1 class="display-4">Kura Sulthan</h1>
        <h3 class="lead">Hobbies | Seller | Youtuber</h3>
      </div>
    </div>
  </div>


  <!-- About -->
  <section class="about" id="about">
    <div class="container">
      <div class="row mb-4">
        <div class="col text-center">
          <h2>About</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-5">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, molestiae sunt doloribus error ullam expedita cumque blanditiis quas vero, qui, consectetur modi possimus. Consequuntur optio ad quae possimus, debitis earum.</p>
        </div>
        <div class="col-md-5">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, molestiae sunt doloribus error ullam expedita cumque blanditiis quas vero, qui, consectetur modi possimus. Consequuntur optio ad quae possimus, debitis earum.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- youtube dan IG -->
  <section class="social bg-light" id="social">
    <div class="container">
      <div class="row pt-1 mb-4"></div>
      <div class="col text-center">
        <h2>Social Media</h2>
      </div>


      <div class="row pt-5 justify-content-center">
        <div class="col-md-5">
          <div class="row">
            <div class="col-md-4">
              <img src="<?= $youtubeProfilePic; ?>" class="rounded-circle img-thumbnail" width="200">
            </div>
            <div class="col-md-8">
              <h5><?= $channelName; ?></h5>
              <p><?= $subscriber; ?> <b>Subscribers</b></p>
              <div class="g-ytsubscribe" data-channelid="UC_kNMOaCEokMHk--HMzpYoQ" data-layout="default" data-count="default"></div>
            </div>
          </div>

          <div class="row mt-3 pb-3">
            <div class="col">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe src="https://www.youtube.com/embed/<?= $latestVideoId; ?>" title="YouTube video" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio -->
  <section class="portfolio " id="portfolio">
    <div class="container">
      <div class="row pt-4 mb-4">
        <div class="col text-center">
          <h2>Collection</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md mb-4">
          <div class="card">
            <img class="card-img-top" src="img/damer1.jpg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-text"><b>Damer x Daput Hybrid</b></h4>
              <p class="card-text"> Kura Kura Dada Merah (Emydura subglobosa), penyu leher samping perut merah muda, atau penyu Sungai Jardine adalah salah satu spesies penyu dalam famili Chelidae.</p>
            </div>
          </div>
        </div>

        <div class="col-md mb-4">
          <div class="card">
            <img class="card-img-top" src="img/hamiltoni.jpg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-text"><b>Hamiltoni</b></h4>
              <p class="card-text">Kura-kura Kolam Hitam (Geoclemys hamiltonii ), merupakan kura-kura air tawar, endemik di Asia Selatan. Ia tergolong dalam genus monotypik Geoclemys.</p>
            </div>
          </div>
        </div>

        <div class="col-md mb-4">
          <div class="card">
            <img class="card-img-top" src="img/yb.jpg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-text"><b>Yellow Belly x RES Hybrid</b></h4>
              <p class="card-text"> Kura Kura Slider perut kuning (Trachemys scripta scripta) adalah Kura Kura darat dan air yang termasuk dalam famili Emydidae.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md mb-4">
          <div class="card">
            <img class="card-img-top" src="img/missmap.jpg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-text"><b>Missisipi Map</b></h4>
              <p class="card-text"> Kura Kura Missisipi Map (Graptemys pseudogeographica kohni) adalah subspesies Kura Kura darat dan air yang termasuk dalam famili Emydidae.</p>
            </div>
          </div>
        </div>
        <div class="col-md mb-4">
          <div class="card">
            <img class="card-img-top" src="img/hermani.jpg" height="350" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-text"><b>Hermani Tortoise</b></h4>
              <p class="card-text"> Kura-kura Hermanni (Testudo hermanni) adalah salah satu spesies dalam genus Testudo. Ada dua subspesies yang diketahui: kura-kura Hermann barat (T. h. Hermanni) </p>
            </div>
          </div>
        </div>

        <div class="col-md mb-4">
          <div class="card">
            <img class="card-img-top" src="img/cst.jpg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-text"><b>Common Snapping Turtle</b></h4>
              <p class="card-text">Kura Common Snapping ( Chelydra serpentina ) adalah kura-kura air tawar yang termasuk kura air besar dari keluarga Chelydridae .</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Contact -->
  <section class="contact bg-light" id="contact">
    <div class="container">
      <div class="row pt-4 mb-4">
        <div class="col text-center">
          <h2>Contact</h2>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-4">
          <div class="card bg-success text-white mb-4 text-center">
            <div class="card-body">
              <h5 class="card-title">Contact Me</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>

          <ul class="list-group mb-4">
            <li class="list-group-item">
              <h3>Location</h3>
            </li>
            <li class="list-group-item">My Office</li>
            <li class="list-group-item">Jl. Setiabudhi No. 193, Bandung</li>
            <li class="list-group-item">West Java, Indonesia</li>
          </ul>
        </div>

        <div class="col-lg-6">

          <form>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" id="nama">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="text" class="form-control" id="phone">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" id="message" rows="3"></textarea>
            </div>
            <div class="form-group">
              <button type="button" class="btn btn-success">Send Message</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>


  <!-- footer -->
  <footer class=" bg-success text-white mt-5">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <p>Copyright &copy; Kura Sulthan <?= date('Y'); ?></p>
        </div>
      </div>
    </div>
  </footer>







  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <script src="https://apis.google.com/js/platform.js"></script>
</body>

</html>