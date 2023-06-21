<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <style>
      .jumbotron {
        padding-top: 6rem;
        background-color: #e2edff
      }
      #article {
        background-color: #e2edff
      }
      section {
        padding-top: 4rem;
      }
    </style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  </head>

  {{-- <body>
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Muhammad Nasrul</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#article">Articles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Portfolio</a>
            </li>
        </div>
      </div>
    </nav>
    <section class="jumbotron text-center">
      <img src="img/img.jpg" width="200" class="rounded-circle img-thumbnail">
      <h1 class="display-4">Muhammad Nasrul</h1>
      <p class="lead">Software Enginner</p>  
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L40,224C80,224,160,224,240,202.7C320,181,400,139,480,144C560,149,640,203,720,208C800,213,880,171,960,170.7C1040,171,1120,213,1200,234.7C1280,256,1360,256,1400,256L1440,256L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    </section>
    <section id="about">
      <div class="container">
        <div class="row text-center  mb-3 mt-3">
          <div class="col">
           <h2>
            About Me
           </h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4 mb-3">
            <p> Lorem20 </p> 
          </div>
          <div class="col-md-4 mb-3">
            <p> Lorem20 </p> 
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,224L40,224C80,224,160,224,240,202.7C320,181,400,139,480,144C560,149,640,203,720,208C800,213,880,171,960,170.7C1040,171,1120,213,1200,234.7C1280,256,1360,256,1400,256L1440,256L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    <section class="jumbotron" id="article">
      <div class="container">     
        <div class="row text-center  mb-3">
        <div class="col">
         <h2>
          My Articles
         </h2>
        </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/articles1.jpg" class="card-img-top" alt="...">
              <div class="card-body"> 
                <p class="card-text"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque similique est in quod veniam minima non. Repellendus ducimus nisi incidunt labore veritatis in ullam praesentium quidem! Pariatur excepturi voluptatem corporis. </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/articles2.png" class="card-img-top" alt="...">
              <div class="card-body"> 
                <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe modi facilis officia id voluptas earum maiores, ducimus enim at odit. </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/articles3.jfif" class="card-img-top" alt="...">
              <div class="card-body"> 
                <p class="card-text"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum, deserunt! </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/articles4.png" class="card-img-top" alt="...">
              <div class="card-body"> 
                <p class="card-text"> Lorem ipsum dolor sit amet. </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/articles5.jpg" class="card-img-top" alt="...">
              <div class="card-body"> 
                <p class="card-text"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae doloremque, odit provident excepturi animi possimus facilis aliquam expedita nulla aspernatur qui nisi earum, doloribus fuga rerum sequi eveniet? Veritatis, dicta. </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row text-center  mt-4">
          <div class="col">
              <a href="" class="btn btn-primary">Selengkapnya </a>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,224L40,224C80,224,160,224,240,202.7C320,181,400,139,480,144C560,149,640,203,720,208C800,213,880,171,960,170.7C1040,171,1120,213,1200,234.7C1280,256,1360,256,1400,256L1440,256L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    </section>
    <section id="portfolio">
      <div class="container">    
        <div class="row text-center  mb-3">
          <div class="col">
          <h2>
            My Portfolio
          </h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/articles1.jpg" class="card-img-top" alt="...">
              <div class="card-body"> 
                <p class="card-text"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eaque similique est in quod veniam minima non. Repellendus ducimus nisi incidunt labore veritatis in ullam praesentium quidem! Pariatur excepturi voluptatem corporis. </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/articles2.png" class="card-img-top" alt="...">
              <div class="card-body"> 
                <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe modi facilis officia id voluptas earum maiores, ducimus enim at odit. </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/articles3.jfif" class="card-img-top" alt="...">
              <div class="card-body"> 
                <p class="card-text"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum, deserunt! </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/articles4.png" class="card-img-top" alt="...">
              <div class="card-body"> 
                <p class="card-text"> Lorem ipsum dolor sit amet. </p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/articles5.jpg" class="card-img-top" alt="...">
              <div class="card-body"> 
                <p class="card-text"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quae doloremque, odit provident excepturi animi possimus facilis aliquam expedita nulla aspernatur qui nisi earum, doloribus fuga rerum sequi eveniet? Veritatis, dicta. </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row text-center  mt-4">
          <div class="col">
              <a href="" class="btn btn-primary">Selengkapnya </a>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#e2edff" fill-opacity="1" d="M0,224L40,224C80,224,160,224,240,202.7C320,181,400,139,480,144C560,149,640,203,720,208C800,213,880,171,960,170.7C1040,171,1120,213,1200,234.7C1280,256,1360,256,1400,256L1440,256L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
    
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>--}}
  <body> 
    <x-header/>
    {{ $slot }}
    <x-footer />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>