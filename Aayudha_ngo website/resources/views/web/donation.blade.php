@extends('web.template.master')
@section('content')


<!--Start Page Header-->
<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{asset('web/assets/img/donation.jpg')}})">
    </div>
    <div class="container">
        <div class="page-header__inner text-center">
            <h2>Donations</h2>
            <ul class="thm-breadcrumb">
                <li><a href="{{route('web.index')}}">Home</a></li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->



<div class="card">
    <h2>Account Details For Donation</h2>
    <p>
        <span>Name of Account Holder :
        </span>
        "AAYURDHA"
    </p>

    <p>
        <span1>Name of Bank : </span1>
        "HDFC"
    </p>

    <p>
        <span2>Branch of Bank :</span2>
        "NOONMATI BRANCH"
    </p>

    <p>
        <span3>Account No :</span3>
        "50200076555121"
    </p>
<p>
    <span3>IFSC Code : </span3>
    "HDFC0000758"
    </p>

</div>


@endsection