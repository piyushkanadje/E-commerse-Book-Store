@extends('pages.layout-page')

@section('content')

    <div class="container first-container">
        <div class="row first-row">
            <div class="col-md-6 col-sm-12 col-12 mt-5 ">
                <h1 class="main-head finalCol">
                    What we are?
                </h1>
                <p class="main-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>

                <p class="main-content">
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat
                </p>
                <div class="py-3">
                    <a href="#" class="btn btn-p btn-c mr-2 " role="button">GET STARTED </a>
                    <a href="#" class="btn btn-p btn-nc btn-outline-dark " role="button">KNOW MORE</a>
                </div>
            </div>
            {{-- <div class="col-md-1">

            </div> --}}
            <div class="col-md-6 col-sm-12 col-12 " id="">
                <img class="stand-img topbot" src="/images/img2.png" alt="">
            </div>
        </div>
    </div>
    <div class="container second-container">
        <div class="text-center my-2">
            <img src="/images/com.png" alt="">
        </div>
        <h3 class="how text-center ">
            HOW IT WORKS
        </h3>
        <h2 class="second-head text-center">
            Steps to follow.
        </h2>
        <p class="text-center p-3 text-col">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
            irure dolor in
            reprehenderit in voluptate velit esse cillum dolore.
        </p>
    </div>

    {{-- <div class="container">
        <div class="row">
            <div class="col-md-3 col-12 detail-card topbot">
                <div class="detail-img text-center">
                    <img src="/images/card1.png" alt="" class="img-fluid">
                </div>
                <div class="detail-head text-center">
                    <b>STEP 1</b>
                </div>
                <div class="detail-body text-center">
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                </div>
            </div>
            <div class="col-md-1 col-sm-12 col-12">

            </div>
            <div class="col-md-3 col-12 detail-card topbot">
                <div class="detail-img text-center">
                    <img src="/images/ccard.png" alt="" class="img-fluid">
                </div>
                <div class="detail-head text-center">
                    <b>STEP 2</b>
                </div>
                <div class="detail-body text-center">
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                </div>
            </div>
            <div class="col-md-1 col-sm-12 col-12">

            </div>
            <div class="col-md-3 col-12 detail-card topbot">
                <div class="detail-img text-center">
                    <img src="/images/card2.png" alt="" class="img-fluid">
                </div>
                <div class="detail-head text-center">
                    <b>STEP 3</b>
                </div>
                <div class="detail-body text-center">
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                </div>
            </div>
            <div class="col-md-1 col-sm-12 col-12">
                  <p class="text-center details-view my-5">
                <a href="">view details
                </a>
            </p>
            </div>
          
        </div>




    </div> --}}
    <div class="container">
        <div class="row pb-5">
            <div class="col-lg-4 col-md-4 mb-4 mb-lg-0 ">
                <!-- Card-->
                <div class="card rounded shadow-sm border-0 ">
                    <div class="card-body detail-card  p-5">

                        <div class="detail-img text-center">
                            <img src="/images/card1.png" alt="" class="img-fluid">
                        </div>
                        <div class="detail-head text-center">
                            <b>STEP 1</b>
                        </div>
                        <div class="detail-body text-center">
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 mb-4 mb-lg-0">
                <!-- Card -->
                <div class="card rounded shadow-sm border-0">
                    <div class="card-body detail-card  p-5">
                        <div class="detail-img text-center">
                            <img src="/images/ccard.svg" alt="" class="img-fluid">
                        </div>
                        <div class="detail-head text-center">
                            <b>STEP 2</b>
                        </div>
                        <div class="detail-body text-center">
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 mb-4 mb-lg-0">
                <!-- Card -->
                <div class="card rounded shadow-sm border-0">
                    <div class="card-body detail-card  p-5">
                        <div class="detail-img text-center">
                            <img src="/images/card2.png" alt="" class="img-fluid">
                        </div>
                        <div class="detail-head text-center">
                            <b>STEP 3</b>
                        </div>
                        <div class="detail-body text-center">
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-center details-view my-5">
                <a href="" class="text-col text-decoration-none" style="border-bottom: 2px solid #8786A4">view details...
                </a>
            </p>
        
        </div>
    </div>



    
        <div class="university  m-top " style="background:#F5F6F8;" >
            <div class="row">
                <div class="col-md-4 col-12 col-sm-12">
                    <h3 class="color color-text">
                        Associated Universities _____
                    </h3>
                    <p class="main-content text-col">
                        Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut
                        labore et dolore magna aliqua
                    </p>
                </div>
                <div class="col-md-1 col-sm-12 col-12 p-3 mr-5">
                    <img src="/images/uni.png" alt="">
                </div>
                <div class="col-md-1 col-sm-12 col-12 p-3 mr-5  ">
                    <img src="/images/uni.png" alt="">
                </div>
                <div class="col-md-1 col-sm-12 col-12 p-3  mr-5  ">
                    <img src="/images/uni.png" alt="">
                </div>
                <div class="col-md-1 col-sm-12 col-12 p-3 mr-5  ">
                    <img src="/images/uni.png" alt="">
                </div>
                <div class="col-md-1 col-sm-12 col-12 p-3 mr-5 ">
                    <img src="/images/uni.png" alt="">
                </div>
               
            </div>
        </div>

  

    <div class="container m-top margin-f">
        <div class="row">
            <div class="col-md-6 col-12 col-sm-12">
                <div class="my-2">
                    <img src="/images/com.png" alt="">
                </div>
                <h3 class="how">
                    OUR USP
                </h3>
                <h2 class="main-head my-4">
                    What we promise?
                </h2>
                <p class="main-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                    ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore
                </p>
                <div class="my-3">
                    <a href="#" class="btn btn-p btn-c mr-2 " role="button">GET STARTED </a>

                </div>

            </div>
            <div class="col-md-1 col-12 col-sm-12">

            </div>
            <div class="col-md-4 col-12 col-sm-12 right">
                <div class="row mt-4 " style="margin-bottom:20px;">
                    <h3 class="color color-text">
                        MOLESTIE CONSEQUAT
                    </h3>
                    <p  class="text-col">
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt

                    </p>

                </div>
                <div class="row"  style="margin-bottom:20px;">
                    <h3 class="color color-text">
                        MOLESTIE CONSEQUAT
                    </h3>
                    <p  class="text-col">
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt

                    </p>
                </div>
                <div class="row">
                    <h3 class="color color-text">
                        MOLESTIE CONSEQUAT
                    </h3>
                    <p  class="text-col">
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                        officia deserunt

                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container m-top margin-f">
        <div class="my-2 text-center">
            <img src="/images/com.png" alt="">
        </div>
        <h3 class="how text-center mb-3">
            TESTIMONIALS

        </h3>
        <h2 class="main-head text-center my-3">
            What our clients say about us
        </h2>
        <p class="text-col">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
            ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat. Duis aute irure dolor in

        </p>
    </div>
    <div class="lo user">
        <div class="row ">
            <div class="col-md-4 col-sm-12 col-12 ">
                <h6 class=" user-title">LOREM IPSUM</h6>
                <p class="user-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore
                </p>
                <p class=" user-title"><i class="fas fa-user"></i> <span>Name Surname</span></p>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <h6 class=" user-title">LOREM IPSUM</h6>
                <p class="user-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore
                </p>
                <p class=" user-title"><i class="fas fa-user"></i> <span>Name Surname</span></p>
            </div>
            <div class="col-md-4 col-sm-12 col-12">
                <h6 class=" user-title">LOREM IPSUM</h6>
                <p class="user-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                    sed do eiusmod tempor incididunt ut labore
                </p>
                <p class=" user-title"><i class="fas fa-user"></i> <span>Name Surname</span></p>
            </div>
        </div>
    </div>









@stop
