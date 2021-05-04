@include('includes.header')

    
<body class="contact">

    @include('includes/colors')
    @include('includes/nav')


<!-- Page Title Starts -->
<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>get in <span>touch</span></h1>
    <span class="title-bg">contact</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            <!-- Left Side Starts -->
            <div class="col-12 col-lg-4">
                <h3 class="text-uppercase custom-title mb-0 ft-wt-600 pb-3">Don't be shy !</h3>
                <p class="open-sans-font mb-3">Feel free to get in touch with me. I am always open to discussing new projects, creative ideas or opportunities to be part of your visions.</p>
                <p class="open-sans-font custom-span-contact position-relative">
                    <i class="fa fa-envelope-open position-absolute"></i>
                    <span class="d-block">mail me</span>steve@mail.com
                </p>
                <p class="open-sans-font custom-span-contact position-relative">
                    <i class="fa fa-phone-square position-absolute"></i>
                    <span class="d-block">call me</span>+216 21 184 010
                </p>
                <ul class="social list-unstyled pt-1 mb-5">
                    <li class="facebook"><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li class="twitter"><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li class="youtube"><a title="Youtube" href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                    <li class="dribbble"><a title="Dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                    </li>
                </ul>
            </div>
            <!-- Left Side Ends -->
            
            <!-- Contact Form Starts -->
            <div class="col-12 col-lg-8">
                <div class="alert alert-danger alert-msg-wrong" role="alert">
                    Invalid Form Please Fix Your Data
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="alert alert-success alert-msg-done" role="alert">
                    Done Send Data
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                  </div>

                <form class="" >
                    @csrf
                    @method('post')
                    <div class="contactform">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <input type="text" name="name" class="name" placeholder="YOUR NAME" required>
                               
                            </div>
                            <div class="col-12 col-md-4">
                                <input type="email" name="email" class="email" placeholder="YOUR EMAIL" required="required">
                            </div>
                            <div class="col-12 col-md-4">
                                <input type="text" name="subject" class="subject" placeholder="YOUR SUBJECT" required>
                            </div>
                            <div class="col-12">
                                <textarea name="message" class="msg" placeholder="YOUR MESSAGE" required></textarea>
                                <button type="button" class="button">
                                    <span class="button-text">Send Message</span>
                                    <span class="button-icon fa fa-send"></span>
                                </button>
                            </div>
                            <div class="col-12 form-message">
                                <span class="output_message text-center font-weight-600 text-uppercase"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Contact Form Ends -->
        </div>
    </div>

</section>

@include('includes/footer')

<script>
$(".alert-msg-wrong").hide();
$(".alert-msg-done").hide();
    $(".button").click(function(){

    var name    = $(".name").val(),
        email   = $(".email").val(),
        subject = $(".subject").val(),
        msg     = $(".msg").val();

        // Validation Email------------------------------
 var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        // Validation Email------------------------------

                //reset setting ----------------------
                $(".alert-msg-wrong").hide();
                $(".alert-msg-done").hide();
                $(".name").css("border-color",'#111');
                $(".email").css("border-color",'#111');
                $(".subject").css("border-color",'#111');
                $(".msg").css("border-color",'#111');

                 //reset border style----------------------

        if(name  != '' && email != '' && email.match(mailformat) && subject !='' && msg != ''){
            console.log(name);
            console.log(email);
            console.log(subject);
            console.log(msg);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
                });

            $.ajax({
              
              type: "POST",
              url: "{{ route('contact.store') }}",
              data:{
                name: name ,
                email: email,
                subject: subject,
                msg: msg
              },success: function(){
                  console.log("Done");
                  $(".alert-msg-done").show();
                  $(".name").val('');
                  $(".email").val('');
                  $(".subject").val('');
                  $(".msg").val('');
              }
            });
        }else{
            $(".alert-msg-wrong").show();
            if(name  == ''){
                $(".name").css("border-color",'#f00');
            }
            if(email  == '' || !email.match(mailformat) ){
                $(".email").css("border-color",'#f00');
            }
           
            if(subject  == ''){
                $(".subject").css("border-color",'#f00');
            }
            if(msg  == ''){
                $(".msg").css("border-color",'#f00');
            }
        }
           
    });
  



</script>