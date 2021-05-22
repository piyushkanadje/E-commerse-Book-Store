@extends('admin.admin-layout')

@section('content')
<style>
    h6{ 
        font: arial;
        font-weight: bold;
        color: #0E2099;
    }
    p{
        font-family: inter;
        font-size:16px;
        font-weight: bold;
        color: #0c0948;
    }
    .col-md-3,.col-md-5 ,.col-md-4{
        border-bottom: 1px solid #dee2e6;
    }
    h4 {
        font-family: inter;
        
    }
</style>
    
<div class="container">
    <div class="row ">
        <div class="col-md-6 col-12 col-sm-6 ">
            <div class=" mt-5 shadow " style="padding: 16px">
                <h4 class=""> Transcript Orders</h4>
                <div class="col-md-12" style="display: flex; padding-left:0px;">                            
                    <img src="/images/current.PNG" alt="" />                          
                  </div>
                <div class="row itemrow mt-3">
                    @foreach ($applys as $apply)
    
    
                        <div class="col-md-3 border-right" >
                            <h6 class="">
                                ORDER BY
                            </h6>
                            <p>
                                {{ $apply->name }}
                            </p>
                        </div>
                        <div class="col-md-5 border-right">
                            <h6 class="">
                                University
                            </h6>
                            <p>
                                @foreach ($university as $uni )
                                @if ($uni->id==$apply->university)                                        
                                {{$uni->universityName}}                                          
                                @endif
                            @endforeach
                                {{ $apply->university }}
                            </p>
                        </div>
                        <div class="col-md-3">
                            <h6 class="">
                                Total Amount
                            </h6>
                            <p>
                                ₹ 9000.00
    
                            </p>
                        </div>
                      <div class="col-md-12">
                   
                      </div>
                    @endforeach
                </div>
            </div>
          


            <div class="box">

            </div>
            <div class=" mt-4 shadow" style="padding: 16px">
                <h4 class=""> New Users</h4>
                <div class="col-md-12" style="display: flex; padding-left:0px;">                            
                    <img src="/images/current.PNG" alt="" />                          
                </div>
                <div class="row justify-content-center">
                    @foreach ($userdata as $userdata)
                      
                            <div class="col-md-4 border-right">
                                <p>
                                    {{ $userdata->created_at }}
    
                                </p>
                            </div>
                            <div class="col-md-4 border-right">
                                {{ $userdata->name }}
                            </div>
                            <div class="col-md-4">
                                <p>
                                    {{ $userdata->email }}
                                </p>
                            </div>
                       
                        <div class="col-md-12">
                      
                          </div>
                    @endforeach
                </div>
    
            </div>
            
        </div>
        <div class="col-md-1">

        </div>
  <div>

    
  </div>
        <div class="col-md-5 col-12 col-sm-6 pl-3 mt-5 box ">
            <div class="row btn-c" style="border-radius: 8px 8px 0px 0px;">
                <h3 class="mx-3 my-4">
                    TOTAL <br>
                    PAYMENT
                </h3>
            </div>

            <div class="row mb-3">
                <div class="navigation-admin mt-2">
                    <span class="mr-2">
                        <a href="/adminTranscriptToday" class="side-nav-li ">Today</a>
                    </span>
                    <span class="mr-2">
                        <a href="/adminTranscriptWeek" class="side-nav-li">This Week</a>
                    </span>
                    <span class="mr-2">
                        <a href="/adminTranscriptMonth" class="side-nav-li admin-activeli">This Month</a>
                    </span>
                    <div class="col-md-12" style="display: flex; padding-left:0px;">                            
                        <img src="/images/today.PNG" alt="" />                          
                    </div>
                </div>
            </div>

            @foreach ($applys as $order)

                <div class="row justify-content-center mt-2 ">
                    <div class="col-md-4 border-right ">
                        <h6 class=" ">
                            ORDER BY
                        </h6>
                        <p>
                            {{ $order->name }}
                        </p>
                    </div>
                    <div class="col-md-4 border-right">
                        <h6 class="">
                            University
                        </h6>
                        <p>
                            {{ $order->university }}
                        </p>
                    </div>
                    <div class="col-md-4">
                        <h6 class="">
                            Total Amount
                        </h6>
                        <p>
                            ₹ 9000.00

                        </p>
                    </div>
                    
                </div>
                <div class="col-md-12">
           
                </div>
            @endforeach


        </div>
    </div>
</div>





@stop
