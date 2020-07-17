<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Badger</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/bootstrap/bootstrap.css">
</head>
<body>   
    <section>
        <div class="header">
            <div class="wrapper">
            <div class="logo">moviebadger</div>
            <div class="showcase">
                <div class="showcase-text animated slideInLeft">
                    <h1>Never struggle to remember
                            a movie ever again!</h1>
                    <p>By typing in a phrase you remember from the movie OR uploading 
                    a screenshot,  moviebadger can get you the title of any 
                    movie!... Find and save movies to your favourite list, 
                    get movie info and even movie download links!
                    </p>
                    
                    <form method="POST" id="subscribe">
                    <h6 class="mb-3">BE THE FIRST TO GET ACCESS WHEN THE APP GOES LIVE</h6>
                        <div class="alert alertOne"></div>
                        <div class="form-pair">
                            <input type="email" name="email" id="email" placeholder="Enter your email address">
                            <button type="submit"><img src="./images/Vector.svg" alt=""></button>
                            </div>
                    </form>
                </div>
                <div class="img-contain ">
                <img class="bg-1 animated slideInRight" src="./images/screen.png" alt="" >
                    <img class="bg-2 animated slideInRight" src="./images/screen2.png" alt="" >
                </div>
            
            </div>
        </div>
            </div>
    </section>
    <div class="main">
    
    </div> 

    <section>
        <div class="steps-container">
            <h2 class="text-center mb-5 wow fadeInRight">How It Works</h2>
            <div class="steps d-flex flex-column align-items-center justify-content-center">
            <div class="container d-flex flex-row justify-content-between align-items-start">
                <div class="step wow slideInLeft">
                    <div class="serial">
                                1
                    </div>
                    <div class="step-text">
                    <p>
                    Create an account on moviebadger to get detailed info and download link.
                    </p>
                    </div>
                </div>
                <div class="step wow slideInUp">
                    <div class="serial">
                                2
                    </div>
                    <div class="step-text">
                    <p>
                    Get the title of any movie you’re trying to remember by inputing a phrase or screenshot from the movie.
                    </p>
                    </div>
                    
                </div>
                <div class="step wow slideInRight">
                    <div class="serial">
                                3
                    </div>
                    <div class="step-text">
                    <p>
                    View detailed info of the movie and also get download link.
                    </p>
                    </div>
                </div>
                </div>
            </div>
        </div>
            
    </section>

    <section  class="content-container">
        <div class="container">
            <div class="content d-flex flex-row flex-wrap justify-content-start align-items-center wow bounceInLeft">
                <div class="img mr-5">
                    <img src="./images/create-acct.png" alt="">
                </div>
                <div class="text ml-5">
                    <h2 class="mb-4 text-right">Create Account</h2>
                    <p class="text-right">create an account to get movie info and even download links!</p>
                </div>
            </div>
        </div>
    
    
    
    <div class="container">
            <div class="content d-flex flex-row flex-wrap justify-content-start align-items-center flex-row-reverse mt-5 wow bounceInRight my-5">
                <div class="img ml-5">
                    <img src="./images/search.png" alt="">
                </div>
                <div class="text mr-5">
                    <h2 class="mb-4 text-left" id="mobile-white">Find Forgotten Movies</h2>
                    <p class="text-left" id="mobile-white">Find movie by uploading a screenshot or inputing a phrase you remember from the movie.</p>
                </div>
            </div>
        </div>
    

    
        <div class="container">
        <div class="content d-flex flex-row flex-wrap justify-content-start align-items-center wow bounceInLeft">
        <div class="img mr-5">
                    <img src="./images/favorite.png" alt="">
                </div>
                <div class="text ml-5">
                    <h2 class="mb-4 text-right">Favorite List</h2>
                    <p class="text-right" id="white">Get overview of your favourite movies, watch trailers or select a movie to get detailed info and download link.
                    </p>
                </div>
            </div>
        </div>
    

    <div class="rotate">

    </div>

    
        <div class="container">
            <div class="content d-flex flex-row flex-wrap justify-content-start align-items-center flex-row-reverse mt-5 my-5 wow bounceInRight">
                <div class="img ml-5">
                    <img src="./images/customization.png" alt="">
                </div>
                <div class="text mr-5">
                    <h2 class="mb-4 text-left">Customization</h2>
                    <p class="text-left">Customize your settings, change themes and manage your subscription</p>
                </div>
            </div>
        </div>
    </section>
    <footer>
           <div class="footer">
           <div class="container d-flex flex-column justify-content-center align-items-center wow fadeInUp">
           <h6 class="text-center mb-5">BE THE FIRST TO GET ACCESS WHEN THE APP GOES LIVE</h6>
            <form method
            ="POST" id="subscribe2">
                        <div class="alert alertTwo"></div>
                            <div class="form-pair">
                            <input type="email" name="email" id="email2" placeholder="Enter your email address">
                            <button type="submit"><img src="./images/Vector.svg" alt=""></button>
                            </div>
    </form>
            </div>
           </div>
    </footer>
    
    



</body>
<script src="./includes/wow.js"></script>
    <script>
        new WOW().init()
    </script>
    <script src="./includes/script.js"></script>
</html>