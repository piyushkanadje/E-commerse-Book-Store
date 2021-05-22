@extends('pages.layout-page')

@section('content')
    <link rel="stylesheet" href="/css/login.css">
    <style type="text/css">
    input[type="text"]{
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

    </style>
    <div>
        <br><br>
    </div>
    
    <div class="container">

        <div>
            <br>
            
            <div class="apply">
                {{-- <h2 class="color-3 m-top-o text-center"> <b> CONTACT US FORM</b></h2> --}}
                <div class="col-md-12 col-sm-12 col-12 text-center">
                    <img src="/images/contact.png" alt="">
                </div>

                <form action="{{ route('contact.create') }}" method="POST">
                    @csrf
                    <div class="row mt-5">
                        <div class="col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                {{-- <label for="name" class="text-secondary">Name</label>
                                <input type="text" name="name" class="form-control input" id="" aria-describedby=""
                                    placeholder="Enter Name"> --}}
                                <label for="name" class="label ">Name</label>
                                {{-- <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control input inputbg" aria-describedby=""  placeholder="Enter Name"> --}}
                                   
                                    @if (Auth::check())
                                    <input type="text" name="name" value="{{Auth::user()->name}}" class="form-control  input inputbg" aria-describedby=""  placeholder="Enter Name">
                                    @else
                                    <input type="text" name="name" value="" class="form-control input inputbg" aria-describedby=""  placeholder="Enter Name">
                                    @endif
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="mobileno" class=" label">Mobile Number</label>
                                {{-- <input type="text" name="mobileno"  value="{{Auth::user()->mobile }}"  class="form-control input inputbg" id="" aria-describedby=""
                                    placeholder="Enter Mobile"> --}}
                                    @if (Auth::check())
                                    <input type="text" name="mobileno"  value="{{Auth::user()->mobile }}"  class="form-control input inputbg" id="" aria-describedby=""
                                    placeholder="Enter Mobile">                                    @else
                                    <input type="text" name="mobileno"    class="form-control input inputbg" id="" aria-describedby=""
                                    placeholder="Enter Mobile">                                    @endif
                                @error('mobileno')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="email" class="label">Email</label>
                                {{-- <input type="email" name="email" value="{{Auth::user()->email}}" class="form-control input inputbg" id="" aria-describedby=""
                                    placeholder="Enter Email"> --}}
                                    @if (Auth::check())
                                    <input type="email" name="email" value="{{Auth::user()->email}}" class="form-control input inputbg" id="" aria-describedby=""
                                    placeholder="Enter Email">                                    @else
                                    <input type="email" name="email"  class="form-control input inputbg" id="" aria-describedby=""
                                    placeholder="Enter Email">                                    @endif
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="subject" class="label">Subject</label>
                                <input type="text" name="subject" class="form-control input inputbg" id="" aria-describedby=""
                                    placeholder="Enter Subject">
                                @error('subject')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="message" class="label">Message</label>
                                <textarea name="message" id="" class="input-text inputbg" placeholder="Message"></textarea>
                                @error('message')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="text-center my-3">
                        {{-- <a href="#" class="btn btn-p btn-c width-2"
                            role="button">SEND</a> --}}
     
                        <button type="submit" class="btn-p btn-c " style="width:180px;"> SEND</button>
                    </div>


                </form>

            </div>
            <br>
            <br>
            <br>
        </div>

    </div>

    </div>
    <div>
        <br>
       
   
        </div>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-12">
                <div class=" my-2">
                    <img src="/images/com.png" alt="">
                  </div>
                <h3 class="how">
                    CONTACT US
                </h3>
                <h2 class="main-head">
                    Where can you find us?
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat.
                </p>
                <h3 class="color color-text">
                    ADDRESS :
                </h3>
                <p>
                    497 Evergreen Rd. Roseville, <br>
                    CA 95673
                </p>
                <h3 class="color color-text">
                    CONTACT :
                </h3>
                <p>
                    +44 345 688 903
                </p>
                <h3 class="color color-text">
                    EMAIL:
                </h3>
                <p>
                    adobexd@mail.com

                </p>
            </div>
            <div class="col-md-6 col-sm-12 col-12">
                <div class="mapouter mt-5"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=aasa%20tech&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://soap2day-to.com">soap2day</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">add google map to website</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
            </div>
        </div>
        <br>
    </div>
    <script>
        $('.delete-confirm').on('click', function(event) {
            event.preventDefault();
            const url = $(this).attr('href');
            swal({
                title: 'Are you sure?',
                text: 'This record and it`s details will be permanantly deleted!',
                icon: 'warning',
                buttons: ["Cancel", "Yes!"],
            }).then(function(value) {
                if (value) {
                    window.location.href = url;
                }
            });
        });

    </script>


@stop
