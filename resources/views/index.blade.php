

    
    @include('includes/main')

        
    
<body class="home">
    <!-- Live Style Switcher Starts - demo only -->
   @include('includes/colors')

    <!-- Live Style Switcher Ends - demo only -->
    <!-- Header Starts -->
    @include('includes/nav')
    <!-- Header Ends -->
    <!-- Main Content Starts -->
    <section class="container-fluid main-container container-home p-0 revealator-slideup revealator-once revealator-delay1">
        <div class="color-block d-none d-lg-block"></div>
        <div class="row home-details-container align-items-center">
            <div class="col-lg-4 bg position-fixed d-none d-lg-block"></div>
            <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
                <div>
                    <img src="img/WhatsApp Image 2020-08-11 at 5.19.30 PM (2).jpeg" class="img-fluid main-img-mobile d-none d-sm-block d-lg-none" alt="my picture">
                    <h1 class="text-uppercase poppins-font">I'm {{ $data -> name }}.<span>{{ $data -> title }}</span></h1>
                    <p class="open-sans-font">{{ $data -> description }}</p>
                    <a class="button" href="{{ route('about') }}">
                        <span class="button-text">more about me</span>
                        <span class="button-icon fa fa-arrow-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Main Content Ends -->
    
   
    @include("includes/footer")
