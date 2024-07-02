@extends('layout.default')

@section('content')
    <!--page-title-->
    <div class="ttm-page-title-row">
        <div class="ttm-page-title-row-inner ttm-bgcolor-darkgrey">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="page-title-heading">
                            <h2 class="title">Billet d'invitation</h2>
                        </div>
                        <div class="heading-seperator">
                            <span></span>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('home') }}">Accueil</a>
                            </span>
                            <span class="ttm-bread-sep">&gt;</span>
                            <span>Billet d'invitation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--page-title end-->


    <!--site-main start-->
    <div class="site-main">
        <!--broken-section-->
        <section class="ttm-row broken-section ttm-bg ttm-bgimage-yes ttm-bgcolor-grey clearfix">
            <div class="container">



                @if (isset($registration))
                    <br><br>
                    <div class="row">
                        <div class="col-lg-12">
                            @include('layout.alert')
                            <div class="ttm-team-member-single-content-wrapper">
                                <div class="row">
                                    <div class="col-md-5">
                                        <!--featured-thumbnail-->
                                        <div class="featured-thumbnail pr-25 res-991-pr-0 ">
                                            {!! $qrcode !!}
                                        </div><!--featured-thumbnail end-->
                                    </div>
                                    <div class="col-md-7 d-flex align-items-center">
                                        <div class="ttm-team-member-single-list">
                                            <h2 class="ttm-team-member-single-title">
                                                {{ $registration->attendee->first_name }}
                                                {{ $registration->attendee->last_name }}</h2>
                                            <p>Téléphone : &nbsp;<a href="#"
                                                    tabindex="0">{{ $registration->attendee->phone }}</a></p>
                                            <p>Email : &nbsp;<a href="#">{{ $registration->attendee->email }}</a></p>
                                            <p>Présence :&nbsp;<a
                                                    href="#">{{ $registration->presence == 0 ? 'Non' : 'Oui' }}</a>
                                            </p>
                                            <p>N° de table :&nbsp;<a
                                                    href="#">{{ $registration->number_table == '0' ? '-' : $registration->number_table }}</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <!--row-->
                    <div class="row">
                        <div class="col-lg-2">
                        </div>
                        <div class="col-lg-8">

                            <br><br>
                            <div class="col-bg-img-five ttm-col-bgimage-yes ttm-bg ttm-bgcolor-white box-shadow spacing-5">
                                <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                                <div class="layer-content">
                                    <div class="section-title text-center">
                                        <!--section title-->
                                        <div class="title-header">
                                            <h5>Invitation</h5>
                                            <h2 class="title">On vous attends avec impatience !</h2>
                                        </div><!--section title end-->
                                    </div>
                                    <form id="request_form" class="request_form wrap-form clearfix" method="post"
                                        action="{{ route('store.attendee') }}">
                                        @csrf
                                        @include('layout.alert')
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label>
                                                    <span class="text-input"><input name="last_name" type="text"
                                                            placeholder="Nom" required="required"></span>
                                                </label>
                                            </div>
                                            <div class="col-lg-12">
                                                <label>
                                                    <span class="text-input"><input name="first_name" type="text"
                                                            placeholder="Prénom" required="required"></span>
                                                </label>
                                            </div>
                                            <div class="col-lg-12">
                                                <label>
                                                    <span class="text-input"><input name="email" type="email"
                                                            placeholder="Email" required="required"></span>
                                                </label>
                                            </div>
                                            <div class="col-lg-12">
                                                <label>
                                                    <span class="text-input">
                                                        <input type="tel" name="phone" placeholder="Téléphone"
                                                            required="required">
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label>
                                                    <span class="text-input">
                                                        <input name="presence" type="radio" value="1"
                                                            checked="checked">Oui je serais là
                                                    </span>
                                                </label>
                                            </div>
                                            <div class="col-lg-12">
                                                <label>
                                                    <span class="text-input">
                                                        <input name="presence" type="radio" value="0">Désolé, je ne
                                                        peux pas être là
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">

                                        </div>

                                        <button
                                            class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor w-100"
                                            type="submit">Valider</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                        </div>
                    </div><!--row end-->
                @endif

            </div>

            <br><br>
        </section>
        <!--broken-section end-->

    </div><!-- site-main end -->
@endsection
