<?php 
session_start(); 
if(!isset($_SESSION['id'])){
    die(header("location: 404.php"));
}
?>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Stylish Portfolio - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><a href="#page-top">Navigation</a></li>
                <li class="sidebar-nav-item"><a href="/final/logout.php">Logout</a></li>
            </ul>
        </nav>
        <!-- Header-->
        <br/>
        <br/>
        <header class="d-flex align-items-center">
            <div class="container px-4 px-lg-5 text-center">
                <h1 class="mb-1">Current Articles</h1>
                <h3 class="mb-5"><em>Here is your selection of business articles today</em></h3>
        </div>
        </header>
        <!-- Article1-->
        <section class="content-section bg-light" id="about">
            <div class="container px-4 px-lg-5 text-center">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-10">
                        <h2>Sunak ‘confident’ of reaching tech tax agreement</h2>
                        <h4 class = text-secondary>Source: BBC</h4>
                        <p class="lead mb-5">
                            Chancellor Rishi Sunak says he is "confident" of reaching a global agreement on digital taxation ahead of a meeting of world finance leaders.
                        </p>
                        <a class="btn btn-dark btn-xl" href="https://www.bbc.co.uk/news/business-57349803">Visit Article</a>
                        <br/>
                        <br/>
                    </div>
                </div>
            </div>
        </section>
        <!-- Article2-->
        <section class="content-section bg-secondary" id="about">
            <div class="container px-4 px-lg-5 text-center">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-10">
                        <h2>The 'Warren Buffett of Canada' could score a $1 billion return on BlackBerry as retail investors target the meme stock</h2>
                        <h4 class = text-white>Source: Business Insider</h4>
                        <p class="lead mb-5">
                            A billionaire investor hailed as the "Warren Buffett of Canada" stands to make a fortune on BlackBerry after an agonizing seven-year wait, thanks to day traders pumping its stock price higher this week.
                        </p>
                        <a class="btn btn-dark btn-xl" href="https://markets.businessinsider.com/news/stocks/warren-buffett-canada-prem-watsa-fairfax-financial-blackberry-stock-price-2021-6-1030492859">Visit Article</a>
                        <br/>
                        <br/>
                    </div>
                </div>
            </div>
        </section>
        <!-- Article1-->
        <section class="content-section bg-light" id="about">
            <div class="container px-4 px-lg-5 text-center">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-10">
                        <h2>UK and EU agree deal on fishing rights</h2>
                        <h4 class = text-secondary>Source: Finical Times</h4>
                        <p class="lead mb-5">
                            Agreement follows disputes over how to maximise access while also meeting environmental objectives.
                        </p>
                        <a class="btn btn-dark btn-xl" href="https://www.ft.com/content/3a6d1e9d-e39d-4085-ba7f-be94eb85bbf4">Visit Article</a>
                        <br/>
                        <br/>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container px-4 px-lg-5">
                <ul class="list-inline mb-5">
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white mr-3" href="#!"><i class="icon-social-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a class="social-link rounded-circle text-white" href="#!"><i class="icon-social-instagram"></i></a>
                    </li>
                </ul>
                <p class="text-muted small mb-0">Copyright &copy; In The Biz/p>
            </div>
        </footer>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top"><i class="fas fa-angle-up"></i></a>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>