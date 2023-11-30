<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elysium Vaikuntha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Display:ital,wght@0,400;0,600;1,400;1,600&family=Source+Serif+4:ital,opsz,wght@0,8..60,400;0,8..60,500;0,8..60,600;1,8..60,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <style>
        *{
            font-family: 'Source Serif 4', serif;  
        }
        .h-font{
            font-family: 'Noto Serif Display', serif;
        }
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }

        input[type=number] {
        -moz-appearance: textfield;
        }
        </style>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">ELYSIUM VAIKUNTHA</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active me-2" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">About</a>
                    </li>
                </ul>   
                <div class="d-flex">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                        Login
                    </button>
                    <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
                        Register
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">
                        <i class="bi bi-person-circle"></i> User Login
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
                            <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-lines-fill fs-3 me-2"></i> User Registration
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                            Note: Your details must match with your ID (Aadhaar card, Passport, Driving License, etc.)
                            that will be required during check-in.
                        </span> 
                        <div class="container-fluid">
                            <div class="row">
                               <div class="col-md-6 ps-0">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control shadow-none">
                               </div>
                               <div class="col-md-6 ps-0">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control shadow-none">
                               </div> 
                               <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Phone Number</label>
                                    <input type="number" class="form-control shadow-none">
                               </div>
                               <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Picture</label>
                                    <input type="file" class="form-control shadow-none">
                               </div>
                               <div class="col-md-12 ps-0 mb-3">
                                    <label class="form-label">Address</label>
                                    <textarea class="form-control shadow-none" rows="1"></textarea>
                               </div>
                               <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Pincode</label>
                                    <input type="number" class="form-control shadow-none">
                               </div>
                               <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Date of birth</label>
                                    <input type="date" class="form-control shadow-none">
                               </div>
                               <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control shadow-none">
                               </div>
                               <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control shadow-none">
                               </div>
                        
                            </div>

                        </div>   

                        <div class="text-center my-1">
                            <button type="submit" class="btn btn-dark shadow-none">REGISTER</button>
                        </div>
                        
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Carousel -->

    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container swiper-fade swiper-initialized swiper-horizontal swiper-watch-progress swiper-backface-hidden">
            <div class="swiper-wrapper" id="swiper-wrapper-105ca2ae6dcb8bf0e" aria-live="polite" style="transition-duration: 0ms; transition-delay: 0ms;">
                <div class="swiper-slide swiper-slide-prev" role="group" aria-label="1 / 4" style="width: 902px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;">
                    <img src="img/main/1.jpg" class="w-100 d-block " style="max-height: 33.33vw;" >
                </div>
                <div class="swiper-slide swiper-slide-visible swiper-slide-fully-visible swiper-slide-active" role="group" aria-label="2 / 4" style="width: 902px; opacity: 1; transform: translate3d(-902px, 0px, 0px); transition-duration: 0ms;">
                    <img src="img/main/2.jpg" class="w-100 d-block " style="max-height: 33.33vw;">
                </div>
                <div class="swiper-slide swiper-slide-next" role="group" aria-label="3 / 4" style="width: 902px; opacity: 0; transform: translate3d(-1804px, 0px, 0px); transition-duration: 0ms;">
                    <img src="img/main/3.jpg" class="w-100 d-block" style="max-height: 33.33vw;">
                </div>
                <div class="swiper-slide" role="group" aria-label="4 / 4" style="width: 902px; opacity: 0; transform: translate3d(-2706px, 0px, 0px); transition-duration: 0ms;">
                    <img src="img/main/4.jpg" class="w-100 d-block" style="max-height: 33.33vw;">
                </div>
            </div>
        </div>
    </div>

    <!-- Check Availability Form -->

    <div class="container">
        <div class="row">
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".swiper-container", {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            }
        });
    </script>
        
</body>
</html>