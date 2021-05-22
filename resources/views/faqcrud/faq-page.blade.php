@extends('pages.layout-page')

@section('content')

    <div class="container my-5" id="faqs">
        <h1 class="main-head text-center my-5">Frequently Asked Questions (FAQ's)
        </h1>
        <div class="container">
            <div id="accordion">
                @foreach ($users as $user)
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link faq-title-btn" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    {{ $user->faqtitle }}
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body faq-card">
                                <td>{{ $user->faqdescription }}</td>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    
@stop
{{-- $raise = Raise::get();
$contact = Contact::get();
$faq = Faq::get();
return view('/faq-page',compact('raise','contact',)) --}}
{{-- <section id="faqs">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="main-head text-center my-5">Frequently Asked Questions (FAQ's)</h1>
                <div class="accordion mt-5" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="clearfix mb-0">

                                <a href="" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    {{ $user->faqtitle }} <i class="fa fa-angle-down"></i>
                                </a>
                            </h2>

                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                {{ $user->faqdescription }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

