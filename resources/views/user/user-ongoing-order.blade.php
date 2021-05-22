@extends('user.user-layout')

@section('content')
 <style>
     h6{ 
         font: arial;
         font-weight: bold;
         color: #0E2099;
     }
     p{
         color: #0c0948;
     }
 </style>
    <div class="container">
        <div class="row mt-5 ">
            <div class="col-md-6 col-sm-12 col-12">
                <div class="row  shadow " style="padding: 16px; width:630px">
                        <h4 class="font-weight-light">Ongoing Order</h4>
                        <div class="col-md-12" style="display: flex; padding-left:0px;">                            
                            <img class="img-res" src="/images/Capture.PNG" alt="" />                          
                    </div>
                    <div class="row itemrow justify-content-center" style="padding:0px 20px 0px 20px;">
                        @foreach ($userdata as $user)
                            <div class="row mt-4  widtht " >
                                <div class="col-md-4 border-right " class="">
                                    <h6 class=" ">
                                        ORDERED ON
                                    </h6>
                                    <p>
                                        {{ $user->created_at }}
                                    </p>
                                </div>

                                <div class="col-md-4 border-right">
                                    <h6 class=" ">
                                        TOTAL AMOUNT
                                    </h6>
                                    <p>
                                        ₹ 9000.00

                                    </p>
                                </div>
                                <div class="col-md-4 ">
                                    <h6 class=" ">
                                        UNIVERSITY/INSTITUTE
                                    </h6>
                                    <p>
                                        @foreach ($university as $uni )
                                            @if ($uni->id==$user->university)                                        
                                            {{$uni->universityName}}                                          
                                            @endif
                                        @endforeach
                                      
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <hr>
                              </div>
                            <div class="row mt-2 widtht" style="padding:0px 20px 0px 20px; border-bottom:1px solid grey;"  >
                                <div class="col-md-6 border-right">
                                    <h6 class=" ">
                                        DELIVERY ADDRESS
                                    </h6>
                                    <p>
                                        {{ $user->shipping }}
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <h6 class=" ">
                                        ORDER STATUS
                                    </h6>
                                    <p>
                                        {{$user->status}}
                                    </p>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
                <div class="row mt-5 shadow "  style="padding: 16px; width:630px;">
                    <h4 class="font-weight-light">Contact Details</h4>
                    <div class="col-md-12" style="display: flex; padding-left:0px;">                            
                        <img class="img-res" src="/images/Capture.PNG" alt="" />                          
                </div>
                    <div class="row mt-4 justify-content-center"  >
                        <div class="col-md-4 border-right">
                            <h6 class=" ">
                                ADDRESS
                            </h6>
                            <p>Sample Address
                            </p>
                        </div>
                        <div class="col-md-4 border-right">
                            <h6 class=" ">
                                CONTACT
                            </h6>
                            <p>+91 9823233708
                            </p>
                        </div>
                        <div class="col-md-4">
                            <h6 class=" ">
                                EMAIL ID
                            </h6>
                            <p>sample@gmail.com

                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-6 col-sm-12 col-12 border-shadow" style="position: relative; height:570px; ">
                <div style="border:1px solid; padding:0px 70px;">
                    <img src="/images/img2.png" class=" stand-img" alt="">
                    <div class="text-block">
                       <p class="text-secondary text-center">
                        Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore  
                       </p>
                       <div class="text-center">
                        <a href="/apply-page" class="  mb-5" style="font-size: 20px; font-weight:bold;">APPLY NOW</a>
                       </div>
                    
                    </div>

                </div>
               
            </div> --}}
            <div class="col-md-1">

            </div>
            <div class="col-md-5 col-sm-12 col-12 shadow resp" >
                   <div style="padding: 20px">
                    <img src="/images/img2.png" class=" stand-img" alt="">
                   </div>
                    <div class="text-block mt-4 respb">
                       <p class="text-col text-center">
                        Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore  
                       </p>
                       <div class="text-center ">
                        <a href="/apply-page" class="text-decoration-none mb-5" style="font-size: 20px; font-weight:bold; color:#0e2099;">APPLY NOW</a>
                       </div>
                    
                    </div>

                </div>
               
            </div>
        </div>
     
    </div>














@stop
