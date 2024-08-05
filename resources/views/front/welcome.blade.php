@extends('layout.default')

@push('styles')
    <style>
        .mobile-name {
            display: none;
        }

        .desktop-name {
            display: none;
        }

        @media (max-width: 768px) {
            .mobile-name {
                display: block;
            }
        }

        @media (min-width: 769px) {
            .desktop-name {
                display: block;
            }
        }
    </style>
@endpush

@section('content')
    <!--START REVOLUTION SLIDER 6.0.1-->
    <rs-module-wrap id="rev_slider_2_1_wrapper" data-source="gallery">
        <rs-module id="rev_slider_2_1" data-version="6.1.2" class="rev_slider_2_1_height">
            <rs-slides>
                <rs-slide data-key="rs-8" data-title="Slide" data-anim="ei:d;eo:d;s:d;r:0;t:blurlight;sl:d;">

                    <img src="{{ asset('front/images/slides/slider-mainbg-05.png') }}" title="slider-main-img05"
                        width="1920" height="845" class="rev-slidebg" data-no-retina>

                    <rs-layer id="slider-4-slide-8-layer-0" data-type="text" data-color="#272727" data-rsp_ch="on"
                        data-xy="x:l,l,c,c;xo:26px,26px,0,0;y:m;yo:-67px,-67px,-140px,-70px;"
                        data-text="w:normal;s:50,50,70,53;l:80,80,100,80;fw:700;a:center;" data-frame_0="sX:0.9;sY:0.9;"
                        data-frame_1="e:power2.inOut;st:200;sp:800;sR:200;" data-frame_999="o:0;st:w;sR:8000;"
                        style="z-index:10;font-family:Cormorant;">
                        <div class="mobile-name">
                            Denise
                        </div>
                        <div class="desktop-name">
                            &#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;Denise
                        </div>

                    </rs-layer>

                    <rs-layer id="slider-4-slide-8-layer-1" data-type="text" data-color="#000000" data-rsp_ch="on"
                        data-xy="x:c;xo:-469px,-469px,0,627px;y:m;yo:193px,193px,123px,30px;"
                        data-text="w:normal;s:17,17,17,13;l:26,26,30,20;fw:400,400,500,500;a:center;" data-vbility="t,t,t,f"
                        data-frame_0="sX:0.9;sY:0.9;" data-frame_1="e:power2.inOut;st:770;sp:500;sR:770;"
                        data-frame_999="o:0;st:w;sR:7730;"
                        style="z-index:16;font-family:Hind;text-transform:uppercase;"><span
                            class="ttm-textcolor-skincolor">À 12 heure <br /> Hôtel de ville
                            <br /> Libreville, Gabon</span>
                    </rs-layer>

                    <rs-layer id="slider-4-slide-8-layer-7" data-type="shape" data-rsp_ch="on"
                        data-xy="xo:173px,173px,409px,255px;yo:411px,411px,140px,145px;"
                        data-text="w:normal;s:20,20,12,7;l:0,0,15,9;" data-dim="w:68px,68px,42px,25px;h:1px;"
                        data-frame_0="y:50,50,31,19;" data-frame_1="st:590;sR:590;" data-frame_999="o:0;st:w;sR:8110;"
                        style="z-index:12;background-color:#272727;">
                    </rs-layer>

                    <rs-layer id="slider-4-slide-8-layer-8" data-type="text" data-color="#000000" data-rsp_ch="on"
                        data-xy="x:c;xo:-464px,-464px,801px,594px;y:m;yo:-140px,-140px,-110px,-75px;"
                        data-text="w:normal;s:17,17,16,13;l:26,26,25,20;a:center;" data-vbility="t,t,f,f"
                        data-frame_0="sX:0.9;sY:0.9;" data-frame_1="e:power2.inOut;st:130;sp:400;sR:130;"
                        data-frame_999="o:0;st:w;sR:8470;"
                        style="z-index:9;font-family:Hind;text-transform:uppercase;"><span
                            class="ttm-textcolor-skincolor">Rejoignez nous pour <br />notre mariage</span>
                    </rs-layer>

                    <rs-layer id="slider-4-slide-8-layer-9" data-type="text" data-color="#000000" data-rsp_ch="on"
                        data-xy="x:c;xo:-469px,-469px,0,0;y:m;yo:-10px,-10px,-85px,-30px;"
                        data-text="w:normal;s:35,35,30,19;l:50,50,40,25;fw:400,400,600,600;a:center;"
                        data-frame_0="sX:0.9;sY:0.9;" data-frame_1="e:power2.inOut;st:580;sR:580;"
                        data-frame_999="o:0;st:w;sR:8120;"
                        style="z-index:13;font-family:Cormorant;text-transform:uppercase;"><span
                            class="ttm-textcolor-skincolor">&</span>
                    </rs-layer>

                    <rs-layer id="slider-4-slide-8-layer-10" data-type="text" data-color="#000000" data-rsp_ch="on"
                        data-xy="x:c;xo:-469px,-469px,0,0;y:m;yo:105px,105px,38px,81px;"
                        data-text="w:normal;s:18,18,18,17;l:26,26,25,25;fw:500;a:center;" data-frame_0="sX:0.9;sY:0.9;"
                        data-frame_1="e:power2.inOut;st:630;sp:500;sR:630;" data-frame_999="o:0;st:w;sR:7870;"
                        style="z-index:15;font-family:Hind;text-transform:uppercase;"><span
                            class="ttm-textcolor-skincolor">21.09.2024</span>
                    </rs-layer>

                    <rs-layer id="slider-4-slide-8-layer-11" data-type="text" data-color="#272727" data-rsp_ch="on"
                        data-xy="x:l,l,c,c;xo:23px,23px,0,0;y:m;yo:40px,40px,-27px,16px;"
                        data-text="w:normal;s:50,50,70,53;l:80,80,100,80;fw:700;a:center;" data-frame_0="sX:0.9;sY:0.9;"
                        data-frame_1="e:power2.inOut;st:460;sp:800;sR:460;" data-frame_999="o:0;st:w;sR:7740;"
                        style="z-index:14;font-family:Cormorant;">
                        <div class="mobile-name">
                            Guy
                        </div>
                        <div class="desktop-name">
                            &#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;&#xa0;Guy
                        </div>
                    </rs-layer>

                    <rs-layer id="slider-4-slide-8-layer-13" data-type="shape" data-rsp_ch="on"
                        data-xy="xo:62px,62px,328px,198px;yo:412px,412px,140px,146px;"
                        data-text="w:normal;s:20,20,12,7;l:0,0,15,9;" data-dim="w:68px,68px,42px,25px;h:1px;"
                        data-frame_0="y:50,50,31,19;" data-frame_1="st:600;sR:600;" data-frame_999="o:0;st:w;sR:8100;"
                        style="z-index:11;background-color:#272727;">
                    </rs-layer>

                    <rs-layer id="slider-4-slide-8-layer-14" data-type="shape" data-rsp_ch="on"
                        data-xy="x:l,l,c,c;xo:-356px,-356px,0,0;y:t,t,m,m;yo:28px,28px,0,0;"
                        data-text="w:normal;s:20,20,12,7;l:0,0,15,9;"
                        data-dim="w:300px,300px,1000px,616px;h:180px,180px,800px,493px;" data-vbility="f,f,t,t"
                        data-frame_999="o:0;st:w;" style="z-index:8;background-color:rgba(255,255,255,0.84);">
                    </rs-layer>
                </rs-slide>
            </rs-slides>
        </rs-module>
    </rs-module-wrap>
    <!--END REVOLUTION SLIDER-->


    <!--site-main start-->
    <div class="site-main">


        <!--about-section-->
        <section class="ttm-row about-section bg-img6 ttm-bg ttm-bgimage-yes clearfix">
            <div class="container">
                <!--row end-->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="d-inline-block border p-3">
                            <!--ttm_single_image-wrapper-->
                            <div class="ttm_single_image-wrapper">
                                <img class="img-fluid" src="{{ asset('front/images/couple2.png') }}"
                                    title="single-img-three" alt="single-img-three">
                            </div><!--ttm_single_image-wrapper end-->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pt-60 res-991-pt-40 pr-15">
                            <!--section title-->
                            <div class="section-title">
                                <div class="title-header">
                                    <h5>Blanc & Gris Argenté</h5>
                                    <h2 class="title">Nous vous souhaitons la bienvenue dans notre cérémonie de mariage
                                    </h2>
                                </div>
                                <div class="title-desc">
                                    <p>C’est un grand jour pour nous ! Le jour de notre union. Nous comptons sur ta présence
                                        pour rendre ce jour inoubliable. Sur ce site tu retrouveras toutes les informations
                                        concernant notre cérémonie de mariage. Merci de t’enregistrer sur le formulaire de
                                        présence pour confirmer ta présence à cette cérémonie.</p>
                                </div>
                            </div><!--section title end-->
                            <div class="row">
                                <div class="col-md-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-before-title style6">
                                        <div class="featured-icon">
                                            <div
                                                class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-size-sm ttm-icon_element-style-rounded">
                                                <i class="flaticon flaticon-ring"></i>
                                            </div>
                                        </div>
                                        <div class="featured-title">
                                            <h5>La cérémonie</h5>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-desc">
                                                <p>Ce serait un honneur de vous compter parmis nous ce 21 septembre 2024
                                                </p>
                                            </div>
                                        </div>
                                    </div><!--featured-icon-box end-->
                                </div>
                                <div class="col-md-6">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box icon-align-before-title style6">
                                        <div class="featured-icon">
                                            <div
                                                class="ttm-icon ttm-icon_element-fill ttm-icon_element-color-skincolor ttm-icon_element-size-sm ttm-icon_element-style-rounded">
                                                <i class="flaticon flaticon-wedding-cake"></i>
                                            </div>
                                        </div>
                                        <div class="featured-title">
                                            <h5>La Soirée</h5>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-desc">
                                                <p>Venez passer une soirée inoubliable avec nous pour célébrer ce moment
                                                </p>
                                            </div>
                                        </div>
                                    </div><!--featured-icon-box end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--about-section end-->


        <!--saving-section-->
        <section class="ttm-row saving-section bg-img5 ttm-bg ttm-bgimage-yes ttm-bgcolor-grey clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <!--row-->
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <!--featured-imagebox-team-->
                        <div class="featured-imagebox featured-imagebox-team style3">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('front/images/denise.png') }}" alt="image">
                            </div>
                            <div class="featured-content featured-content-team">
                                <div class="featured-title">
                                    <h5><a href="team-details.html">Denise</a></h5>
                                </div>
                                <p class="category">c’est un jour important pour moi, ce sera avec plaisir que je la
                                    célébrerai avec vous .</p>
                                <div class="ttm-social-links-wrapper">
                                    <ul class="social-icons list-inline">
                                        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--featured-imagebox-team end-->
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <!--invitationcard-box-title-->
                        <div class="ttm-invitationcard-box style1 text-center">
                            <p class="ttm-top-heading">Retenez la date</p>
                            <h2 class="ttm-groom-name">Denise</h2>
                            <h5 class="ttm-invitation-separator">et</h5>
                            <h2 class="ttm-groom-name_1">Guy</h2>
                            <p class="ttm-card-date">21. Septembre 2024</p>
                            <p>À 12 heure
                            </p>
                            <p class="ttm-location-place"><a class="tm_element-link"
                                    href="https://goo.gl/maps/pxwL6DYUwz2NCL2j6" title="" target="_blank">Hôtel de
                                    Ville de Libreville</a></p>
                        </div><!--invitationcard-box-title end-->
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <!--featured-imagebox-team-->
                        <div class="featured-imagebox featured-imagebox-team style3">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ asset('front/images/guy.png') }}" alt="image">
                            </div>
                            <div class="featured-content featured-content-team">
                                <div class="featured-title">
                                    <h5><a href="team-details.html">Guy</a></h5>
                                </div>
                                <p class="category">J’aurai plaisir à célébrer l’amour que j’ai pour ma dulcinée en votre
                                    présence. Merci de me faire l’honneur de votre présence.</p>
                                <div class="ttm-social-links-wrapper">
                                    <ul class="social-icons list-inline">
                                        <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!--featured-imagebox-team end-->
                    </div>
                </div><!--row end-->
            </div>
        </section>
        <!--saving-section end-->



        <!--broken-section-->
        <section class="ttm-row broken-section ttm-bg ttm-bgimage-yes ttm-bgcolor-grey clearfix">
            <div class="container">
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
                                        <h5>Invitations</h5>
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
            </div>
        </section>
        <!--broken-section end-->


        <!--event-section-->
        <section class="ttm-row event-section bg-img8 pt-160 res-991-pt-130 ttm-bg ttm-bgimage-yes clearfix">
            <div class="container">
                <!--row-->
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-10 m-auto">
                        <!--section-title-->
                        <div class="section-title title-style-center_text">
                            <div class="title-header">
                                <h5>Les évènements</h5>
                                <h2 class="title">Quand & Où</h2>
                            </div>
                        </div><!--section-title end-->
                    </div>
                </div><!--row end-->
                <div class="row mb_15">
                    <div class="col-md-4">
                        <!--featured-icon-box-->
                        <div class="featured-icon-box icon-align-top-content text-center style5">
                            <div class="featured-icon">
                                <div
                                    class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-style-rounded ttm-icon_element-size-md">
                                    <i class="flaticon flaticon-love"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Le Mariage Civil</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Samedi, 21 Sept 2024</p>
                                    <p>12:00 – 13:00</p>
                                    <p>Hôtel de ville de Libreville</p>
                                    <p>13:00 Tour de ville et photo</p>
                                </div>
                            </div>
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor ttm-icon-btn-right"
                                href="https://goo.gl/maps/pxwL6DYUwz2NCL2j6">Voir le lieu</a>
                        </div><!--featured-icon-box end-->
                    </div>
                    <div class="col-md-4">
                        <!--featured-icon-box-->
                        <div class="featured-icon-box icon-align-top-content text-center style5">
                            <div class="featured-icon">
                                <div
                                    class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-style-rounded ttm-icon_element-size-md">
                                    <i class="flaticon flaticon-wedding-rings"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>Bénédiction Nuptiale & Cocktail</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Samedi, 21 Sept 2024</p>
                                    <p>14:00 – 16:00</p>
                                    <p>La Villa Tarri, À la descente de l’Union</p>
                                </div>
                            </div>
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor ttm-icon-btn-right"
                                href="https://goo.gl/maps/pxwL6DYUwz2NCL2j6">Voir le lieu</a>
                        </div><!--featured-icon-box end-->
                    </div>
                    <div class="col-md-4">
                        <!--featured-icon-box-->
                        <div class="featured-icon-box icon-align-top-content text-center style5">
                            <div class="featured-icon">
                                <div
                                    class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-style-rounded ttm-icon_element-size-md">
                                    <i class="flaticon flaticon-camera-1"></i>
                                </div>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>La soirée</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Samedi, 21 Sept 2024</p>
                                    <p>17:00 – 23:00</p>
                                    <p>Hôtel Boulevard, Acaé</p>
                                </div>
                            </div>
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-rounded ttm-btn-style-fill ttm-btn-color-skincolor ttm-icon-btn-right"
                                href="https://goo.gl/maps/pxwL6DYUwz2NCL2j6">Voir le lieu</a>
                        </div><!--featured-icon-box end-->
                    </div>

                </div>
            </div>
        </section>
        <!--event-section end-->

    </div><!--site-main end-->
@endsection
