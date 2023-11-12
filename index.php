<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <style>
        body{
            background: rgb(150,82,93);
            background: linear-gradient(97deg, rgba(150,82,93,1) 0%, rgba(142,127,168,1) 98%, rgba(144,129,170,1) 100%);
        }
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
<header>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="#">Action 1</a>
                            <a class="dropdown-item" href="#">Action 2</a>
                        </div>
                    </li>
                </ul>
                <form class="d-flex my-2 my-lg-0">
                    <input class="form-control me-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        
    </div>
</header>
<div class="container my-5">
    <div class="row">
        <div class="col-lg-4"><img src="photos/pro.jpg" class="img-fluid rounded"></div>
            <div class="col-lg-8">
                <h1>Shane A. Alambra</h1>
                <p class="small">Web Developer</p>
            </div>
        </div>
</div>
<div class="container mt-3">
  <h2>About Me</h2>
  <div class="mt-4 p-5 text-dark rounded bg-light">
    <h1>About Me</h1> 
    <p>I'm Shane Alambra, a recent IT graduate, and I'm driven to excel in the tech industry. 
        My education has equipped me with a strong foundation, and I'm enthusiastic about 
        applying the technical skills I've gained. As an aspiring web developer, I'm excited 
        to become proficient in coding and to stay up-to-date with the latest trends and technologies 
        in web development. My proactive approach and dedication to constant improvement reflect my 
        commitment to making meaningful contributions in the field.</p> 
  </div>
</div>
<div class="container mt-5">
    <h2>Projects</h2>
    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div
                class="h-100 p-5 text-dark bg-light rounded">
                <h2>1. OLFU Strand Evaluator</h2>
                <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then,
                    mix and match with additional component themes and more.</p>
                <button class="btn btn-outline-primary" type="button"><a href="http://strandevaluator.epizy.com">Check out!</a></button>
            </div>
        </div>
        <div class="col-md-6">
            <div
                class="h-100 p-5 text-dark bg-light rounded">
                <h2>######</h2>
                <p>Video provides a powerful way to help you prove your point. When you click Online Video,
                    you can paste in the embed code for the video you want to add. You can also type a 
                    keyword to search online for the video that best fits your document.</p>
                <button class="btn btn-outline-primary" type="button">Check out!</button>
            </div>
        </div>
    </div>
    
</div>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>