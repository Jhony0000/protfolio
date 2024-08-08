<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="first_app\css\main.css">
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;

    }

    span {
        font-weight: bold;
        color: red;
    }

    a {
        text-decoration: none;
    }

    #testi-img img {
        max-width: 70px;
        height: 70px;
    }

    @media (max-width : 576px) {
        .contact {
            flex-direction: column;
        }
    }
</style>

<body class="bg-light">
    <?php
include("database.php");

if (isset($_POST['name']) && isset($_POST['Email']) && isset($_POST['Subject']) && isset($_POST['Messages'])) {
    $name = $_POST['name'];
    $Email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $messages = $_POST['Messages'];

    if (!empty($name) && !empty($Email) && !empty($messages)) {
        if (strlen($messages) <= 30) {
            echo "<script>
                         alert('Must be 30 Character')
                </script>";
        } else {
            $sql = "INSERT INTO user (Name,Email,Subject,Messages) VALUES ('$name','$Email','$subject','$messages')";
            $qury = mysqli_query($con, $sql);
            echo "<script>
                         alert('Messages Was Send')
                </script>";
        }
    } else {
        echo "<script>
                     alert('Empty')
            </script>";
    }
}
?>
    <!-- nav start  -->
    <nav class="navbar navbar-light  fixed-top  bg-white nav border-bottom">
        <div class="container">
            <span>Welcome</span>
            <div class="dropdown">
                <button class="btn btn-secondary btn-danger px-3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="ri-menu-fill"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#home">Home</a></li>
                    <li><a class="dropdown-item" href="#about">About</a></li>
                    <li><a class="dropdown-item" href="#services">Services</a></li>
                    <li><a class="dropdown-item" href="#protfolio">Protfolio</a></li>
                    <li><a class="dropdown-item" href="#testimonials">Testimonials</a></li>
                    <li><a class="dropdown-item" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>

    </nav>
    <!-- nav End  -->

    <!-- Home section start  -->
    <section class="home" id="home">
        <div class="home py-5">
            <div class="container-lg">
                <div class="row min-vh-100 align-items-center align-content-center">
                    <div class="col-md-6 mt-5 mt-md-0 ">
                        <div class="img text-center">
                            <img class="rounded-circle mw-100" src="img\pngtree-programmer-it-developer-png-image_10439723.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 mt-5 mt-md-0 order-md-first">
                        <div class="home_text">
                            <p class="text-muted mb-1">Hello I'm</p>
                            <h1 class="text-danger text-uppercase fs-1 fw-bold">Web Devoloper</h1>
                            <h2 class="fs-4">Jhony</h2>
                            <p class="mt-4 text-muted ">My name is jhony.I am devoloper last 7 to 8 manth.</p>
                            <a href="#protfolio" class="btn btn-danger px-3 mt-3">My Work</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Home section End  -->

    <!-- Start about   -->

    <section class="about  py-5" id="about">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 ">
                    <div class="section-title text-center">
                        <h2 class="fw-bold mb-5">About Me</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-text">
                        <h3 class="fs-4 mb-3">Lorem Molestias at repellendus explicabo hic eum aliquam.</h3>
                        <p class="text-muted"> Lorem sit architecto iure repellendus! Adipisci placeat earum accusamus id dolorum incidunt voluptate, aspernatur sit in tenetur veniam quibusdam soluta quod cumque fuga deleniti debitis eaque alias aut cupiditate. Nihil commodi aliquid fugit sed sit possimus ut veniam quas, facere eligendi animi dolor voluptas dolorum magni dolore, impedit eaque.</p>
                    </div>
                    <div class="row text-center text-uppercase my-3">
                        <div class="col-sm-4">
                            <div class="fact-item">
                                <h4 class="fs-1 fw-bold">05</h4>
                                <p class="text-muted">Project Completed</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="fact-item">
                                <h4 class="fs-1 fw-bold">00</h4>
                                <p class="text-muted">Not Work For Client</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="fact-item">
                                <h4 class="fs-1 fw-bold">00</h4>
                                <p class="text-muted">Positive Reviews</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex align-items-center">
                            <a href="#" class="btn btn-danger me-5 px-3">Download CV</a>
                            <div class="social-links ">
                                <a href="https://x.com/MdTofail123623" class="text-dark me-2 "><i class="ri-twitter-fill text-danger"></i></a>
                                <a href="#" class="text-dark me-2"><i class="ri-instagram-fill text-danger "></i></a>
                                <a href="#" class="text-dark me-2"><i class="ri-linkedin-box-fill text-danger "></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                    </div>
                </div>
                <div class="col-md-6 mt-5 mt-md-0">
                    <div class="skill-item mb-4">
                        <h3 class="fs-6">Html</h3>
                        <div class="progress  " role="progressbar" aria-label="Example with label" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar  bg-danger " style="width: 50%">50%</div>
                        </div>
                    </div>
                    <div class="skill-item mb-4">
                        <h3 class="fs-6">Css</h3>
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar  bg-danger" style="width: 60%">60%</div>
                        </div>
                    </div>
                    <div class="skill-item mb-4">
                        <h3 class="fs-6">Php</h3>
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar  bg-danger" style="width: 70%">70%</div>
                        </div>
                    </div>
                    <div class="skill-item mb-4">
                        <h3 class="fs-6">Database My-Sql</h3>
                        <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar  bg-danger" style="width: 80%">80%</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <!-- about End  -->

    <!-- Start Service -->
    <section class="services  py-5" id="services">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 ">
                    <div class="section-title text-center">
                        <h2 class="fw-bold mb-5">What I Do</h2>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-item shadow-sm p-4 rounded bg-white">
                        <div class="icon my-3 text-danger fs-2 ">
                            <i class="ri-code-s-slash-line"></i>
                        </div>
                        <h3 class="fs-5 py-2">Web Devolopment</h3>
                        <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi, placeat.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-item shadow-sm p-4 rounded bg-white">
                        <div class="icon my-3 text-danger fs-2 ">
                            <i class="ri-vip-crown-line"></i>
                        </div>
                        <h3 class="fs-5 py-2">Creative Design </h3>
                        <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi, placeat.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 ">
                    <div class="service-item shadow-sm p-4 rounded bg-white">
                        <div class="icon my-3 text-danger fs-2 ">
                            <i class="ri-database-2-line"></i>
                        </div>
                        <h3 class="fs-5 py-2">Fontend + Backend </h3>
                        <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi, placeat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service -->

    <!-- protfolio section start -->
    <section class="protfolio  py-5" id="protfolio">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 ">
                    <div class="section-title text-center">
                        <h2 class="fw-bold mb-5">Latest Works</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="protfolio-item">
                        <img class="w-100 img-thumbnail" src="img\E-comarse store - Google Chrome 7_27_2024 9_39_07 PM.png" alt="">
                        <h3 class="text-capitalize fs-5 my-2">real work</h3>
                        <p class="mb-4"><a href="https://github.com/Jhony0000/mintra" class="text-danger text-decoration-none">Live Work</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="protfolio-item">
                        <img class="w-100 img-thumbnail" src="img\431 (1).png" alt="">
                        <h3 class="text-capitalize fs-5 my-2">demo work</h3>
                        <p class="mb-4"><a href="#" class="text-danger text-decoration-none">Live Demo</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="protfolio-item">
                        <img class="w-100 img-thumbnail" src="img\431 (2).png" alt="">
                        <h3 class="text-capitalize fs-5 my-2">demo work</h3>
                        <p class="mb-4"><a href="#" class="text-danger text-decoration-none">Live Demo</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="protfolio-item">
                        <img class="w-100 img-thumbnail" src="img\431 (3).png" alt="">
                        <h3 class="text-capitalize fs-5 my-2">demo work</h3>
                        <p class="mb-4"><a href="#" class="text-danger text-decoration-none">Live Demo</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="protfolio-item">
                        <img class="w-100 img-thumbnail" src="img\431.png" alt="">
                        <h3 class="text-capitalize fs-5 my-2">demo work</h3>
                        <p class="mb-4"><a href="#" class="text-danger text-decoration-none">Live Demo</a></p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="protfolio-item">
                        <img class="w-100 img-thumbnail" src="img\431 (3).png" alt="">
                        <h3 class="text-capitalize fs-5 my-2">demo work</h3>
                        <p class="mb-4"><a href="#" class="text-danger text-decoration-none">Live Demo</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- protfolio section end  -->

    <!-- freelancer available section start  -->
    <section class="freelancer-available py-5 bg-danger">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <p class="text-light fs-5">Do you have any project?</p>
                    <h2 class="fs-1 text-white mb-4">I'm Available For Freelancer Projects</h2>
                    <a id="contact" href="#contact" class="btn btn-outline-light #contact">Hire Me</a>
                </div>
            </div>
        </div>
    </section>
    <!-- freelancer available section end  -->

    <!-- testimonials section start  -->
    <section class="testimonials py-5" id="testimonials">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="section title text-center">
                        <h2 class="fw-bold mb-5">Testimonials</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center ">
                <div class="col-lg-8 col-xl-7">
                    <div id="carousel1" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carousel1" data-bs-slide-to="0" class="active bg-danger"></li>
                            <li class="bg-danger" data-bs-target="#carousel1" data-bs-slide-to="1"></li>
                            <li class="bg-danger" data-bs-target="#carousel1" data-bs-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner p-1">
                            <!-- testi item start  -->
                            <div class="testimoni-item carousel-item active bg-white shadow-sm rounded p-4 mb-5">
                                <div id="testi-img" class="testi-author-info d-flex align-items-center ">
                                    <img src="img\pngtree-programmer-it-developer-png-image_10439723.png" class="img-thumbnail img-fluid rounded-circle" alt="">
                                    <div class="author ms-3">
                                        <h3 class="fs-6 mb-1">Jhony</h3>
                                        <p class="text-muted m-0">Programer</p>
                                    </div>
                                </div>
                                <p class="text-muted mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus, dolor. Doloremque veniam, fugit culpa suscipit odio nemo! A, aut recusandae?</p>
                                <div class="rating text-danger">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <!-- testi item end  -->
                            <!-- testi item start  -->
                            <div class="testimoni-item bg-white carousel-item  shadow-sm rounded p-4 mb-5">
                                <div id="testi-img" class="testi-author-info d-flex align-items-center ">
                                    <img src="img\istockphoto-1398385367-612x612.jpg" class="img-thumbnail img-fluid rounded-circle" alt="">
                                    <div class="author ms-3">
                                        <h3 class="fs-6 mb-1">Jui</h3>
                                        <p class="text-muted m-0">Programer</p>
                                    </div>
                                </div>
                                <p class="text-muted mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus, dolor. Doloremque veniam, fugit culpa suscipit odio nemo! A, aut recusandae?</p>
                                <div class="rating text-danger">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <!-- testi item end  -->
                            <!-- testi item start  -->
                            <div class="testimoni-item carousel-item  bg-white shadow-sm rounded p-4 mb-5">
                                <div id="testi-img" class="testi-author-info d-flex align-items-center ">
                                    <img src="img\72702478-smiling-young-business-woman-crossed-arms-standing-against-office-with-panoramic-windows.jpg" class="img-thumbnail  rounded-circle" alt="">
                                    <div class="author ms-3">
                                        <h3 class="fs-6 mb-1">Juthy</h3>
                                        <p class="text-muted m-0">Programer</p>
                                    </div>
                                </div>
                                <p class="text-muted mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus, dolor. Doloremque veniam, fugit culpa suscipit odio nemo! A, aut recusandae?</p>
                                <div class="rating text-danger">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                            </div>
                            <!-- testi item end  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonials section end  -->
    <!-- contct section start -->
    <section class="contact  py-5" id="contact">
        <div class="container-lg py-4 ">
            <div class="row justify-content-center">
                <div class="col-lg-8 ">
                    <div class="section title text-center">
                        <h2 class="fw-bold mb-5">Contact Me</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="container d-flex contact">
                    <div class="col-md-5">
                        <div class="contect-item d-flex d-flex mb-3">
                            <div class="icon fs-4 text-danger">
                                <i class="ri-mail-fill"></i>
                            </div>
                            <div class="text ms-3">
                                <h3 class="fs-5">Email</h3>
                                <p class="text-muted ">mdjony4540@gmail.com</p>
                            </div>
                        </div>
                        <div class="contect-item d-flex mb-3">
                            <div class="icon fs-4 text-danger">
                                <i class="ri-phone-fill"></i>
                            </div>
                            <div class="text ms-3">
                                <h3 class="fs-5">Phone</h3>
                                <p class="text-muted">+880 1880963820</p>
                            </div>
                        </div>
                        <div class="contect-item d-flex mb-3">
                            <div class="icon fs-4 text-danger">
                                <i class="ri-whatsapp-fill"></i>
                            </div>
                            <div class="text ms-3">
                                <h3 class="fs-5">Whats's up</h3>
                                <p class="text-muted">+880 1880963820</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-7 ">
                        <div class="contact-form ">
                            <form action="#" method="post">
                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                        <input type="text" name="name" placeholder="Your Name" class="form-control form-control-lg fs-6 border-0 shadow-sm">
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <input type="email" name="Email" placeholder="Email" class="form-control form-control-lg fs-6 border-0 shadow-sm">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 mb-4">
                                        <input type="text" name="Subject" placeholder="Subject" class="form-control form-control-lg fs-6 border-0 shadow-sm">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 mb-4">
                                        <textarea rows="5" type="text" name="Messages" placeholder="Your Message" class="form-control form-control-lg fs-6 border-0 shadow-sm"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn-danger px-3" onclick="openPopup()">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contect sectrion end  -->
    <!-- footer start  -->
    <footer class="footer border-top py-4">
        <div class="container-lg">
            <div class="row">
                <div class="col-lg-12">
                    <p class="m-0 text-center text-muted">&copy; 2024 This is Footer</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end  -->


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
