@extends('pages.layout-page')
@section('content')
    <link rel="stylesheet" href="/css/login.css">
    <div class="login-body  ">
        <div class="container login-container">
            <div class="card login-card">
                <div class="card-body">
                    <form method="POST" id="form2" class="" enctype="multipart/form-data">
                        @csrf
                        <h4 class="text-center">LOG IN</h4>

                        <h5>Enter your Mobile Number</h5>
                        <div class="form-group mb-4 mt-3">
                            <input id="mobilenum1" type="tel" class="form-control" value="" name="mobile" required autofocus
                                placeholder="Mobile Number">
                        </div>
                        <div class="form-group mb-4 otp-block">
                            <input id="otpVal" type="number" name="otp" class="form-control" value=""
                                placeholder="Enter OTP">
                        </div>

                        <div class="pb-3 resendOtpDiv d-none" style="text-align: end;">
                            <a class="finalc resendOtpText" onclick="reSendOtp()" style="font-weight:bolder;"> Resend
                                OTP </a>
                            <a class="finalc resendOtpTextTimer" style="font-weight:bolder;"> in <span
                                    id="time2">01:00</span> </a>
                        </div>

                        <div class="form-group mb-3 login-btn">
                            <button type="button" id="loginBtn" onclick="checkOtp()" class="btn bg-2 btn-block">LOG
                                IN</button>
                        </div>

                    </form>


                    <div class="form-group mb-3 otp-btn">
                        <button type="button" onclick="sendOtp()" class="btn bg-2 btn-block">SEND OTP</button>
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
    <script type="text/javascript">
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

        // $('#loginBtn').click(function() {


        // });

        $('.otp-block').hide();
        $('.login-btn').hide();
        // function sendOtp() {
        //   console.log("Checii---"+$('#mobilenum1').val());
        //   $.ajaxSetup({
        //       headers: {
        //           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //       }
        //   });
        //   $.ajax( {
        //       url:'sendOtp',
        //       type:'post',
        //       data: {'mobile': $('#mobilenum1').val()},
        //       // alert(data);
        //       success:function(data,status,xhr) {
        //         if(xhr.status==200) {
        //             $('.otp-block').show();
        //             $('.login-btn').show();
        //             $('.otp-btn').hide();
        //             $('.resendOtpDiv').removeClass('d-none');
        //             $('.resendOtpText').css('cursor','not-allowed');
        //             $('.resendOtpText').css('pointer-events','none');
        //             // var fiveMinutes = 60 * 1,
        //             var display2 = document.querySelector('#time2');
        //             var timer2 = new CountDownTimer(10);
        //             timer2.onTick(format(display2)).start();

        //             function format(display) {
        //               return function (minutes, seconds) {
        //                 minutes = minutes < 10 ? "0" + minutes : minutes;
        //                 seconds = seconds < 10 ? "0" + seconds : seconds;
        //                 display.textContent = minutes + ':' + seconds;
        //                 console.log("Check---"+seconds);
        //                 if(seconds == 0) {
        //                   $('.resendOtpTextTimer').addClass('d-none');
        //                   $('.resendOtpText').css('pointer-events','auto');
        //                   $('.resendOtpText').css('cursor','pointer');
        //                 }
        //               };
        //             }   
        //         }
        //         if(xhr.status==250) {
        //           window.location.replace("/register");
        //         }
        //       },
        //       error:function () {
        //           console.log('error');
        //       }
        //   });

        // }
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
                        // alert(xhr.responseText, "", "warning");
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

    </script>


@stop
