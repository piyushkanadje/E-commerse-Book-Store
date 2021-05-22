@extends('pages.layout-page')

@section('content')

    <link rel="stylesheet" href="/css/login.css">
 <style>
     label{
        font-size: 18px;
    font-weight: bold;
    font-family: Arial;
    color: #8786A4;
     }
     input[type="text"]{
        font-size:16px;
    font-weight: bold;
    font-family: Arial;
    color: #0C0948 !important;
    border: 1px solid #e3f5f9;
    }
    input[type="number"]{
        font-size:16px;
    font-weight: bold;
    font-family: Arial;
    color: #0C0948 !important;
    border: 1px solid #e3f5f9;
    }
    input[type="email"]{
        font-size: 16px;
    font-weight: bold;
    font-family: Arial;
    color: #0C0948 !important;
    border: 1px solid #e3f5f9;
    }
    textarea{
        font-size: 16px;
    font-weight: bold;
    font-family: Arial;
    color: #0C0948 !important;
    border: 1px solid #e3f5f9;
    }
    select, option{
        font-size: 16px;
    font-weight: bold;
    font-family: Arial;
    color: #0C0948 !important;
    border: 1px solid #e3f5f9; 
    }
   
 </style>

    <div>
        <br><br><br>
    </div>
    <div class="login-content">
        <div class="container">
            <div class="apply" >
                {{-- <h2 class="color-3 m-top-o text-center"> <b> APPLICATION FORM</b></h2> --}}
                <div class="col-md-12 col-sm-12 col-12 text-center">
                    <img src="/images/apply.png" style=" "alt="">
                </div>
                {{-- @if (Session::get('apply_create'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ Session::get('apply_create') }}
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">Ok</button> -->
                    </div>

                @endif --}}

                <form id="applyForm" action="{{ route('apply.create') }}" method="POST">
                    @csrf
                    <h4 class="color-3 m-tb ">PERSONAL DETAILS</h4>
                    <div class="row my-2">

                        <div class="col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="name">Name</label>
                                @if (Auth::check())
                                    <input type="text" name="name" value="{{ Auth::user()->name }}"
                                        class="form-control input inputbg" aria-describedby="" placeholder="Enter Name"
                                        readonly>
                                @else
                                    <input type="text" name="name" class="form-control input inputbg" aria-describedby=""
                                        placeholder="Enter Name">
                                @endif
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="mobile" >Mobile Number</label>
                                @if (Auth::check())
                                    <input type="text" name="mobile" value="{{ Auth::user()->mobile }}"
                                        class="form-control input inputbg " id="" aria-describedby=""
                                        placeholder="Enter Mobile">
                                @else
                                    <input type="text" name="mobile" class="form-control input inputbg " id=""
                                        aria-describedby="" placeholder="Enter Mobile">
                                @endif
                                @error('mobile')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="email" >Email</label>
                                @if (Auth::check())
                                    <input type="text" name="email" value="{{ Auth::user()->email }}"
                                        class="form-control input default inputbg" id="" aria-describedby=""
                                        placeholder="Enter Email" readonly>
                                @else
                                    <input type="text" name="email" class="form-control input default inputbg" id=""
                                        aria-describedby="" placeholder="Enter Email">
                                @endif
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <hr class="hr-1">
                    <h4 class="color-3 m-tb ">UNIVERSITY DETAILS</h4>
                    <div class="row my-2">
                        <div class="col-md-6 col-sm-12 col-12">

                            <label for="university">University / Institute</label><br>
                            <select name="university" id="universitySelect" class="select-inp dynamic inputbg"
                                data-dependant="course">
                                <option value="select-1">SELECT UNIVERSITY</option>
                                @foreach ($universityName as $uni)
                                    <option id="universityId" value="{{ $uni->id }}">
                                        {{ $uni->universityName }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 col-sm-12 col-12">
                            <label for="cource">Course</label><br>
                            <select name="course" id="courseId" class="select-inp  inputbg">
                                <option value="select-1" id="corId" class="select-inp">SELECT COURSE</option>
                                {{-- @foreach ($course as $cor)
                                    <option  value="{{ $cor->courseName }}">{{ $cor->courseName }}
                                    </option>
                                @endforeach --}}
                            </select>
                        </div>
                        <div class="col-md-2 col-sm-12 col-12">
                            <label for="passing">Passing Year</label><br>
                            <select name="passing" class="select-inp inputbg">
                                <option value="select-1" class="select-inp">Select 1</option>
                                <option value="select-2" class="select-inp">Select 2</option>
                                <option value="select-3" class="select-inp">Select 3</option>
                                <option value="select-4" class="select-inp">Select 4</option>
                            </select>
                        </div>

                    </div>
                    <br><br>
                    <br>

                    <hr class="hr-1">
                    <h4 class="color-3 m-tb">DELIVERY DETAILS</h4>
                    <div class="row my-2">
                        <div class="col-md-5 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="sets">Number of Sets</label>
                                <input type="number" value="1" name="sets" class="form-control input inputbg" id="setId"
                                    aria-describedby="" placeholder="Enter Number Sets">
                                @error('sets')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12 col-12">

                        </div>
                        <div class="col-md-5 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="shipping" >Shipping Type
                                </label>
                                <input type="text" class="form-control input inputbg" name="shipping" aria-describedby=""
                                    placeholder="Enter Shipping Type">
                                @error('shipping')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="delivery" >Delivery Address 1
                                </label>
                                <textarea name="delivery" id="" placeholder="Enter Delivery Address" class="input-text inputbg"></textarea>
                                @error('delivery')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2">

                        </div>

                    </div>
                    <div class="row justify-content-center price-block">
                        <div class="col-md-6 col-sm-12 col-12">
                            <div class="justify-content-center">
                                <label for="price" > Total Price
                                </label>
                                <br>
                                <div class="justify-content-center ">
                                    <input type="text" name="price" id="priceId" class="form-control input inputbg"
                                        placeholder="Total Price" readonly>
                                    <input type="hidden" name="hiddenPrice" id="hiddenPrice">

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="text-center my-5">

                        @if (Auth::check())
                            <button type="submit" id="alertlogin" class="btn-p btn-c width-2">PROCEED TO PAYMENT</button>
                        @else
                            <button type="button" class="btn-p btn-c width-2" data-toggle="modal"
                                data-target="#loginWithOTPModal">PROCEED TO PAYMENT</button>

                        @endif
                    </div>

                </form>
            </div>
        </div>
    </div>
    <div class="div">
        <br><br><br>
    </div>


    <!-- Modal -->


    <div class="modal fade" id="loginWithOTPModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body bg-2 signup-modal">
                    <div class="login-body ">
                        <div class="container login-container">
                            <div class="card login-card">
                                <div class="card-body">
                                    <form method="POST" id="form2" class="" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" id="formData" value="" name="formData">
                                        <h4 class="text-center">LOG IN</h4>

                                        <h5>Enter your Mobile Number</h5>
                                        <div class="form-group mb-4 mt-3">
                                            <input id="mobilenum1" type="tel" class="form-control" value="" name="mobile"
                                                required autofocus placeholder="Mobile Number">
                                        </div>
                                        <div class="form-group mb-4 otp-block">
                                            <input id="otpVal" type="number" name="otp" class="form-control" value=""
                                                placeholder="Enter OTP">
                                        </div>

                                        <div class="pb-3 resendOtpDiv d-none" style="text-align: end;">
                                            <a class="color-3 resendOtpText" onclick="reSendOtp()"
                                                style="font-weight:bolder;"> Resend OTP </a>
                                            <a class="color-3 resendOtpTextTimer" style="font-weight:bolder;"> in <span
                                                    id="time2">01:00</span> </a>
                                        </div>

                                        <div class="form-group mb-3 login-btn">
                                            <button type="button" id="loginBtn" onclick="ApplycheckOtp()"
                                                class="btn btn-c  btn-block">LOG IN</button>
                                        </div>

                                    </form>


                                    <div class="form-group mb-3 otp-btn">
                                        <button type="button" onclick="sendOtp()" class="btn btn-c  btn-block">SEND
                                            OTP</button>
                                    </div>

                                    <div class="text-center">
                                        <h4>OR</h4>
                                    </div>

                                    <div class="text-center ">
                                        <a href="/login" style="font-weight:bolder;" class="color-3">Login with password</a>
                                    </div>


                                    <div class="text-center p-2 login-msg">
                                        <h6>Want to setup your Account?
                                            <a href="/register" class="color-3" style="font-weight:bolder;"> SIGN UP </a>
                                        </h6>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <script type="text/javascript">
        function ApplycheckOtp() {
            // window.location()
            $mobileNumber = $('#mobilenum1').val();
            $formData = $("#formData").val();
            $otp = $('#otpVal').val();
            console.log("OTP-----" + $otp);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/applyafterLogin',
                type: 'get',
                data: {
                    'mobile': $mobileNumber,
                    'otp': $otp,
                    'formData': $formData
                },
                // alert(data);
                success: function(data, status, xhr) {
                    console.log("Data--" + JSON.stringify(xhr));
                    if (xhr.status == 250) {
                        alert(xhr.responseText);
                    }
                    if (xhr.status == 200) {
                        // window.location.href="/";

                    }
                }
            });
        }
        $('#loginWithOTPModal').on('show.bs.modal', function(e) {

            applyForm
            $formData = $("#applyForm").serialize();
            $("#formData").val($formData)


        });

        // $('#loginBtn').click(function() {


        // });
        function checkOtp() {
            // window.location()
            $mobileNumber = $('#mobilenum1').val();
            $otp = $('#otpVal').val();
            console.log("OTP-----" + $otp);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/afterLogin',
                type: 'get',
                data: {
                    'mobile': $mobileNumber,
                    'otp': $otp
                },
                // alert(data);
                success: function(data, status, xhr) {
                    console.log("Data--" + JSON.stringify(xhr));
                    if (xhr.status == 250) {
                        alert(xhr.responseText);
                    }
                    if (xhr.status == 200) {
                        window.location.href = "/user-ongoing-order";
                    }
                }
            });
        }

        $('.otp-block').hide();
        $('.login-btn').hide();

        function sendOtp() {
            console.log("Checii---" + $('#mobilenum1').val());
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: 'sendOtp',
                type: 'post',
                data: {
                    'mobile': $('#mobilenum1').val()
                },
                // alert(data);
                success: function(data, status, xhr) {
                    if (xhr.status == 200) {
                        $('.otp-block').show();
                        $('.login-btn').show();
                        $('.otp-btn').hide();
                        $('.resendOtpDiv').removeClass('d-none');
                        $('.resendOtpText').css('cursor', 'not-allowed');
                        $('.resendOtpText').css('pointer-events', 'none');
                        // var fiveMinutes = 60 * 1,
                        var display2 = document.querySelector('#time2');
                        var timer2 = new CountDownTimer(10);
                        timer2.onTick(format(display2)).start();

                        function format(display) {
                            return function(minutes, seconds) {
                                minutes = minutes < 10 ? "0" + minutes : minutes;
                                seconds = seconds < 10 ? "0" + seconds : seconds;
                                display.textContent = minutes + ':' + seconds;
                                console.log("Check---" + seconds);
                                if (seconds == 0) {
                                    $('.resendOtpTextTimer').addClass('d-none');
                                    $('.resendOtpText').css('pointer-events', 'auto');
                                    $('.resendOtpText').css('cursor', 'pointer');
                                }
                            };
                        }
                    }
                    if (xhr.status == 250) {
                        Swal.fire({
                            title: 'Custom animation with Animate.css',
                            showClass: {
                                popup: 'animate__animated animate__fadeInDown'
                            },
                            hideClass: {
                                popup: 'animate__animated animate__fadeOutUp'
                            }
                        })
                        window.location.replace("/register");

                    }
                },
                error: function() {
                    console.log('error');
                }
            });

        }

        function reSendOtp() {
            $.ajax({
                url: 'sendOtp',
                type: 'post',
                data: {
                    'mobile': $('#mobilenum1').val()
                },
                // alert(data);
                success: function(data, status, xhr) {
                    if (xhr.status == 200) {
                        $('.otp-block').show();
                        $('.login-btn').show();
                        $('.otp-btn').hide();
                        $('.resendOtpTextTimer').removeClass('d-none');
                        $('.resendOtpDiv').removeClass('d-none');
                        $('.resendOtpText').css('pointer-events', 'none');
                        $('.resendOtpText').css('cursor', 'not-allowed');

                        // var fiveMinutes = 60 * 1,
                        var display2 = document.querySelector('#time2');
                        var timer2 = new CountDownTimer(10);
                        timer2.onTick(format(display2)).start();

                        function format(display) {
                            return function(minutes, seconds) {
                                minutes = minutes < 10 ? "0" + minutes : minutes;
                                seconds = seconds < 10 ? "0" + seconds : seconds;
                                display.textContent = minutes + ':' + seconds;
                                console.log("Check---" + seconds);
                                if (seconds == 0) {
                                    $('.resendOtpTextTimer').addClass('d-none');
                                    $('.resendOtpText').css('pointer-events', 'auto');
                                    $('.resendOtpText').css('cursor', 'pointer');
                                }
                            };
                        }
                    }
                    if (xhr.status == 250) {
                        swal(xhr.responseText, "", "warning");
                    }
                },
                error: function() {
                    console.log('error');
                }
            });
        }


        // CountDown Timer Code-------------------------------

        function CountDownTimer(duration, granularity) {
            this.duration = duration;
            this.granularity = granularity || 1000;
            this.tickFtns = [];
            this.running = false;
        }

        CountDownTimer.prototype.start = function() {
            if (this.running) {
                return;
            }
            this.running = true;
            var start = Date.now(),
                that = this,
                diff, obj;

            (function timer() {
                diff = that.duration - (((Date.now() - start) / 1000) | 0);

                if (diff > 0) {
                    setTimeout(timer, that.granularity);
                } else {
                    diff = 0;
                    that.running = false;
                }

                obj = CountDownTimer.parse(diff);
                that.tickFtns.forEach(function(ftn) {
                    ftn.call(this, obj.minutes, obj.seconds);
                }, that);
            }());
        };

        CountDownTimer.prototype.onTick = function(ftn) {
            if (typeof ftn === 'function') {
                this.tickFtns.push(ftn);
            }
            return this;
        };

        CountDownTimer.prototype.expired = function() {
            return !this.running;
        };

        CountDownTimer.parse = function(seconds) {
            return {
                'minutes': (seconds / 60) | 0,
                'seconds': (seconds % 60) | 0
            };
        };
        // CountDown Timer Code End-------------------------------


        // #SELECTED OPTIONS

        $("#universitySelect").on("change", function(event) {
            $university = $('#universitySelect').val();
            console.log("University Changed---" + $('#universitySelect').val());
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "/getCourse",
                method: 'POST',
                data: {
                    'university': $university
                },
                success: function(data, status, xhr) {
                    console.log("XHRData---" + JSON.stringify(data));

                    var course = '';
                    if (data !== []) {
                        course += "<option selected>SELECT COURSE</option>";
                        data.map((value, index) => {

                            console.log(value.id);
                            course += "<option value=" + value.id + " >" + value.courseName +
                                "</option>";
                            // $partsData+='<option value="'+val.id+',solid">'+val.part_name+'&nbsp(Solid)&nbsp ₹'+val.solid+'</option>';
                            console.log("Not EMpty" + JSON.stringify(value));
                        })
                        $('#courseId').html(course);
                    }
                }
            });

        });

        $('.price-block').hide();
        $("#courseId").on("change", function(event) {
            $course = $('#courseId').val();
            console.log("Course Changed---" + $('#courseId').val());
            $('.price-block').show();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: "/getPrice",
                method: 'POST',
                data: {
                    'course': $course,
                    'university': $university
                },
                success: function(data, status, xhr) {
                    console.log("XHRData---" + JSON.stringify(data));
                    $('.price-block').show();

                    $('#priceId').val(data);
                    $('#hiddenPrice').val(data);
                }
            });

        });

        function totalPrice() {
            var set = $("#setId").val();
            var price = $("#hiddenPrice").val();
            var data = 0;
            console.log(price);
            if (set > 0) {
                data = set * price;
            }


            console.log(data);
            $('#priceId').val(data);
        }
        $(document).ready(function() {
            $("#setId").keyup(totalPrice);
        });

    </script>

@stop
