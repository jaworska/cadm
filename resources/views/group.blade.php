@extends('layouts.default')

@section('content')
    <div class="jumbotron video_main group">
        <div class="container-fluid video-text position-absolute">
            <div class="row">
                <div class="col-md-10 col-sm-12 offset-md-1 text-center d-flex justify-content-center">
                    <p class="position-relative">{!! trans('pages.group.jumbotron') !!}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid why group">
        <div id="about-us" class="group-scroll-fix"></div>
        <div class="container">
            <div class="row">
                <div class="offset-md-1 col-md-10 col-12">
                    <div class="text-center why_span">
                        <span>@lang('pages.group.why')</span>
                    </div>
                    <div class="text-center symbol">
                        <p>@lang('pages.group.why-span')</p>
                        <p>@lang('pages.group.why-span2')</p>
                    </div>
                    <div class="text-center why_span why_span-bottom">
                        <span>@lang('pages.group.why-cadm')</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row why-row align-items-center justify-content-sm-center">
                <div class="col-md-3 col-8 why-content d-flex align-items-center justify-content-center col-hover">
                    <div class="text-center">
                        <span>@lang('pages.group.complexity')</span>
                        <p>@lang('pages.group.complexity-span')</p>
                    </div>
                </div>
                <div class="col-md-3 col-8 why-content d-flex align-items-center justify-content-center col-hover">
                    <div class="text-center">
                        <span>{!! trans('pages.group.approach') !!}</span>
                        <p>@lang('pages.group.approach-span')</p>
                    </div>
                </div>
                <div class="col-md-3 col-8 why-content mr-0 d-flex align-items-center justify-content-center col-hover">
                    <div class="text-center">
                        <span>@lang('pages.group.individually')</span>
                        <p>@lang('pages.group.individually-span')</p>
                    </div>
                </div>
            </div>

            <div class="row why-row align-items-center justify-content-sm-center">
                <div class="col-md-3 col-8 why-content d-flex align-items-center justify-content-center col-hover">
                    <div class="text-center">
                        <span>@lang('pages.group.improvement')</span>
                        <p>@lang('pages.group.improvement-span')</p>
                    </div>
                </div>
                <div class="col-md-3 col-8 why-content d-flex align-items-center justify-content-center col-hover">
                    <div class="text-center">
                        <span>@lang('pages.group.portfolio')</span>
                    </div>
                </div>
                <div class="col-md-3 col-8 why-content mr-0 d-flex align-items-center justify-content-center col-hover">
                    <div class="text-center">
                        <span>@lang('pages.group.customers')</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid group grow">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center title-big">
                        <span>@lang('pages.group.growing')</span>
                    </div>
                </div>
                <div class="col-6 text-md-right text-center grow-click empl">
                    <span class="active">@lang('pages.group.num-employee')</span>
                </div>
                <div class="col-6 text-md-left text-center grow-click proj">
                    <span>@lang('pages.group.num-projects')</span>
                </div>
                <div class="col-md-8 col-12 d-flex img-col">
                    <img src="/img/projects.png" class="img-project position-absolute transparent"/>
                    <img src="/img/employees.png" class="img-employee position-absolute"/>
                    <img src="/img/osie.png" class="img-background-chart position-absolute"/>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid logos group d-sm-flex flex-column position-relative">
        <div id="customers" class="group-scroll-fix"></div>
        <div class="row text-center align-items-center">
            <div class="col-md-6 col-12 logos-col">
                <div class="row">
                    <div class="row mb-4 align-items-center justify-content-between w-100">
                        <div class="col-3">
                            <img src="/img/volkswagen2.png" class="bw volkswagen">
                        </div>
                        <div class="col-3">
                            <img src="/img/varroc2.png" class="bw varroc">
                        </div>
                        <div class="col-3">
                            <img src="/img/magna2.png" class="bw magna">
                        </div>
                        <div class="col-3">
                            <img src="/img/alstom-logo2.png" class="bw alstom-logo">
                        </div>
                    </div>
                    <div class="row mb-4 align-items-center justify-content-between w-100">
                        <div class="col-3">
                            <img src="/img/aptiv2.png" class="bw aptiv-logo">
                        </div>
                        <div class="col-3">
                            <img src="/img/csi2.png" class="bw csi">
                        </div>
                        <div class="col-3">
                            <img src="/img/semcon2.png" class="bw semcon">
                        </div>
                        <div class="col-3">
                            <img src="/img/saargummi2.png" class="bw saargummi">
                        </div>
                    </div>
                    <div class="row mb-4 align-items-center justify-content-between w-100">
                        <div class="col-3">
                            <img src="/img/valmet2.png" class="bw valmet">
                        </div>
                        <div class="col-3">
                            <img src="/img/ktp2.png" class="bw ktp">
                        </div>
                        <div class="col-3">
                            <img src="/img/antolin2.png" class="bw antolin">
                        </div>
                        <div class="col-3">
                            <img src="/img/yanfeng2.png" class="bw yanfeng">
                        </div>
                    </div>
                    <div class="row mb-4 align-items-center justify-content-between w-100">
                        <div class="col-3">
                            <img src="/img/bos2.png" class="bw bos">
                        </div>
                         <div class="col-3">
                            <img src="/img/phiaro2.png" class="bw phiaro">
                        </div>
                        <div class="col-3">
                            <img src="/img/stogda2.png" class="bw stogda">
                        </div>
                        <div class="col-3">
                            <img src="/img/mielec2.png" class="bw mielec">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12 text-logos">
                <div class="text-left title-big">
                    <span>@lang('pages.group.worldwide')</span>
                </div>
                <div class="text-left">
                    <p class="bold">@lang('pages.group.we-offer')</p>
                    <p >{!! trans('pages.group.we-conduct') !!}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid team group">
        <div class="container">
            <div class="row">
                <div class="col-12 image-col">
                    <video id="video-group" preload autoplay controls loop>
                        <source src="/img/movie.webm" type="video/webm">
                    </video>
                </div>
                <div class="col-md-10 offset-md-1 col-12 d-flex flex-column justify-content-center team-box position-relative">
                    <p class="text-left">@lang('pages.group.forbes')</p>
                    <span class="text-right">{!! trans('pages.group.forbes-span') !!}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid values group">
        <div id="our-values" class="group-scroll-fix"></div>
        <div class="row">
            <div class="col-md-4 offset-md-1 col-12 value-change">
                <div class="text-left title-big">
                    <span>@lang('pages.group.value')</span>
                </div>
                <div class="text-left">
                    <p>@lang('pages.group.values')</p>
                    <p>@lang('pages.group.values2')</p>
                </div>
            </div>
            <div class="col-md-4 offset-md-1 col-12 values-circle">
                <div class="row justify-content-center">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <div class="values-box position-relative d-flex flex-column justify-content-center align-items-center unactive-top">
                            <svg width="28px" height="37px" viewBox="0 0 28 37" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="lock">
                                <g id="Group" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="CADM_group_do-UI-" transform="translate(-928.000000, -3720.000000)" fill="#2C2E34" fill-rule="nonzero">
                                        <g id="Group-27" transform="translate(-227.000000, 2415.000000)">
                                            <g id="Group-14" transform="translate(0.000000, 0.000000)">
                                                <g id="Group-32" transform="translate(226.000000, 1199.969336)">
                                                    <g id="Group-30" transform="translate(731.375717, 0.000000)">
                                                        <g id="trust-icomn/dark" transform="translate(197.855997, 105.864997)">
                                                            <path d="M26.2499766,13.5 L23.9999766,13.5 L23.9999766,10.4999766 C23.9999766,4.71023437 19.2898125,0 13.5,0 C7.7101875,0 3.00002344,4.71023437 3.00002344,10.4999766 L3.00002344,13.5 L0.750023438,13.5 C0.335460938,13.5 0,13.8354609 0,14.2500234 L0,33.0000469 C0,34.6545703 1.34542969,36 3.00002344,36 L24.0000469,36 C25.6545703,36 27,34.6545703 27,32.9999766 L27,14.2500234 C27,13.8354609 26.6645391,13.5 26.2499766,13.5 Z M15.7456406,29.1672422 C15.7690547,29.3788828 15.7009922,29.5912969 15.5588906,29.7502734 C15.4167891,29.9091797 15.2131641,30.0000234 15.0000469,30.0000234 L12.0000234,30.0000234 C11.7869062,30.0000234 11.5832812,29.9091797 11.4411797,29.7502734 C11.2990781,29.5913672 11.2309453,29.3789531 11.2544297,29.1672422 L11.7275625,24.9126328 C10.9592578,24.3537891 10.5000469,23.46975 10.5000469,22.5 C10.5000469,20.8454766 11.8454766,19.4999766 13.5000703,19.4999766 C15.1546641,19.4999766 16.5000937,20.8454062 16.5000937,22.5 C16.5000937,23.46975 16.0408828,24.3537891 15.2725781,24.9126328 L15.7456406,29.1672422 Z M19.4999766,13.5 L7.50002344,13.5 L7.50002344,10.4999766 C7.50002344,7.19163281 10.1916563,4.5 13.5,4.5 C16.8083437,4.5 19.4999766,7.19163281 19.4999766,10.4999766 L19.4999766,13.5 L19.4999766,13.5 Z" id="Shape"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <span class="d-none orange">Trust</span>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="d-flex flex-column justify-content-center align-items-center ">
                        <div class="values-box position-relative  d-flex flex-column justify-content-center align-items-center unactive-left">
                            <svg width="37px" height="37px" viewBox="0 0 37 37" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="puzzle">
                                <g id="Group" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="CADM_group_do-UI-" transform="translate(-799.000000, -3819.000000)" fill="#2C2E34" fill-rule="nonzero">
                                        <g id="Group-27" transform="translate(-227.000000, 2415.000000)">
                                            <g id="Group-14" transform="translate(0.000000, 0.000000)">
                                                <g id="Group-32" transform="translate(226.000000, 1199.969336)">
                                                    <g id="Group-30" transform="translate(731.375717, 0.000000)">
                                                        <g id="responsibility/dark" transform="translate(69.366516, 204.860083)">
                                                            <path d="M16.8534845,36 L1.50195254,35.9999249 C0.6724617,35.9999249 -4.08917344e-12,35.3275008 -4.08917344e-12,34.4979724 L-4.08917344e-12,19.51731 C-4.08917344e-12,18.6878192 0.6724617,18.0153575 1.50195254,18.0153575 L6.75386753,18.0153575 C6.61745269,17.7771102 6.39640282,17.4512992 6.18263743,17.140395 C5.74301592,16.5009763 5.41495194,15.7622034 5.41495194,14.9260288 C5.41495194,12.9502478 7.01644638,11.3485656 8.99226494,11.3487158 C9.00904926,11.3487158 9.02613397,11.3488285 9.04295584,11.3490538 C10.9717257,11.375751 12.5450586,12.9512992 12.5693151,14.8800691 C12.5800541,15.7353184 12.2469585,16.4904626 11.7996771,17.1432487 C11.5683764,17.4808126 11.3670021,17.777298 11.2306624,18.0153575 L16.8581406,18.0153575 L16.8535596,22.713465 C16.2418144,22.4328627 15.5718684,22.2839817 14.890733,22.2839817 C14.8706819,22.2839817 14.8508186,22.2840568 14.8307675,22.2843947 C13.6024707,22.2998273 12.4445029,22.7892761 11.5699534,23.662699 C10.6953665,24.5360844 10.2043782,25.6934139 10.1873686,26.9214854 C10.1697957,28.1908606 10.6507209,29.3874287 11.5415665,30.2906654 C11.9740538,30.7291604 12.479611,31.0737834 13.0440823,31.3149594 C13.6290928,31.5648468 14.2503755,31.691574 14.8906954,31.691574 C15.5717558,31.691574 16.2417768,31.5427681 16.8534845,31.2620907 L16.8534845,35.9800616 L16.8534845,36 Z M31.251164,19.1110318 L35.9644413,19.1109567 L35.9644413,34.4781466 C35.9644413,35.3076374 35.2920171,35.9800991 34.4624887,35.9800991 L19.1109192,35.9800991 L18.547687,35.9800991 L17.9844548,35.9800991 L17.9798738,35.9800991 L17.9798738,29.2527035 L17.9798738,29.2262316 C17.7809402,29.3401172 17.4707119,29.5706669 17.0735206,29.8219435 C16.4288825,30.2298363 15.7124512,30.5651472 14.8905828,30.5651472 C13.5566987,30.5651472 12.3935116,29.8350481 11.7783869,28.7527411 C11.4746546,28.2182337 11.3044458,27.5979273 11.3136077,26.9371057 C11.3403424,25.0083734 12.9158531,23.435003 14.844623,23.4107465 C14.8600556,23.4105212 14.8752628,23.4104461 14.8905828,23.4104461 C15.7124512,23.4104461 16.445742,23.7204491 17.0736708,24.1536497 C17.4126615,24.3874287 17.7810153,24.635401 17.9799489,24.7492866 L17.9792731,19.1109567 L18.5477996,19.1109567 L19.1110318,19.1109567 L22.7023506,19.1109567 C22.41345,19.7405377 22.2646816,20.4313232 22.2734305,21.1338991 C22.288863,22.3620081 22.7783494,23.5200135 23.6517348,24.3945629 C24.5251953,25.2691123 25.6824497,25.7601006 26.9105587,25.7771102 C26.9327125,25.7774106 26.9550165,25.7775608 26.9769075,25.7775608 C28.2334034,25.7775608 29.4146515,25.2883749 30.3030565,24.39997 C31.1914239,23.511565 31.6806473,22.3303169 31.6806473,21.073821 C31.6806473,20.3927606 31.5318038,19.7227396 31.251164,19.1110318 Z M34.4671448,2.30926389e-14 C35.2966732,2.30926389e-14 35.9690973,0.6724617 35.9691349,1.50195254 L35.9691349,17.3455617 L35.9691349,17.9845674 L35.8664389,17.9845674 L29.2153049,17.9845674 C29.2174827,17.9883223 29.2195104,17.9917768 29.2217257,17.9955317 C29.3327576,18.1888705 29.5401021,18.4957945 29.8144713,18.8954266 C30.2452313,19.5228297 30.5541829,20.2541304 30.5541829,21.0738961 C30.5541829,22.1246245 30.1013067,23.0695029 29.379994,23.7240162 C28.7449685,24.3000901 27.90196,24.6512466 26.9769075,24.6512466 C26.9600105,24.6512466 26.9429634,24.6510964 26.9261415,24.6508711 C24.9974091,24.6240988 23.4240388,23.0485882 23.3997822,21.1198934 C23.3893436,20.2828928 23.6905602,19.5289877 24.1381796,18.8968159 C24.3846876,18.5486257 24.6862797,18.0912812 24.738435,17.984605 L19.1109943,17.984605 L17.9845299,17.984605 L17.9845299,11.0843346 C17.9845299,11.0843346 18.588465,11.6073145 18.7816536,11.7442926 C19.4014719,12.2596125 20.1979198,12.569578 21.0669871,12.569578 C21.0823445,12.569578 21.0977396,12.5694653 21.1130595,12.5692776 C23.0418294,12.5450586 24.6173776,10.9716882 24.6440748,9.04295584 C24.6716732,7.04400721 23.05959,5.41491439 21.0670246,5.41491439 C20.19807,5.41491439 19.4015095,5.72491739 18.7816912,6.24019976 C18.5886152,6.37721538 17.9845299,6.90019525 17.9845299,6.90019525 L17.9845299,2.30926389e-14 L34.4671448,2.30926389e-14 Z" id="Combined-Shape"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <span class="d-none orange">Responsibility</span>
                        </div>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center middle-circle-div">
                        <div class="values-box position-relative  active position-relative d-flex flex-column justify-content-center align-items-center middle-circle">
                            <svg width="29px" height="37px" viewBox="0 0 29 37" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="quality">
                            <g id="Group" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="CADM_group_do-UI-" transform="translate(-927.000000, -3824.000000)" fill="#E95C1B" fill-rule="nonzero">
                                    <g id="Group-27" transform="translate(-227.000000, 2415.000000)">
                                        <g id="Group-14" transform="translate(0.000000, 0.000000)">
                                            <g id="Group-32" transform="translate(226.000000, 1199.969336)">
                                                <g id="Group-30" transform="translate(731.375717, 0.000000)">
                                                    <g id="Group-3" transform="translate(123.355997, 166.569477)">
                                                        <g id="quality-icon/orange" transform="translate(73.989250, 43.295508)">
                                                            <path d="M27.6105,7.27163699 L14.112375,0.0791369861 C13.912125,-0.0277379899 13.672125,-0.0262380859 13.473375,0.0828869381 L0.34875,7.27538694 C0.133499952,7.39351196 -1.43884904e-13,7.61926201 -1.43884904e-13,7.86488694 L-1.43884904e-13,17.260137 C0.007875024,24.983262 4.58362498,31.970262 11.659875,35.0643869 L13.481625,35.858262 C13.651875,35.932512 13.84575,35.9328869 14.016375,35.859012 L16.069125,34.972512 C23.276625,31.945512 27.965625,24.891012 27.966375,17.0737619 L27.966375,7.86488694 C27.966375,7.61663699 27.8295,7.38826201 27.6105,7.27163699 L27.6105,7.27163699 Z M20.5725,15.212637 L12.30525,21.938262 C12.0225,22.168512 11.607375,22.131012 11.370375,21.853512 L7.82062498,17.696637 C7.57949995,17.414262 7.61287502,16.990137 7.89525,16.749012 C8.17762498,16.508262 8.60175,16.541637 8.84287502,16.823637 L11.96625,20.4813869 L19.723875,14.170137 C20.011875,13.9357619 20.43525,13.979262 20.66925,14.267262 C20.903625,14.555262 20.860125,14.978637 20.572125,15.212637 L20.5725,15.212637 Z" id="Shape"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                            <span class="value-title text-center quality">@lang('pages.group.quality')</span>
                        </div>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center  ">
                        <div class="values-box position-relative  d-flex flex-column justify-content-center align-items-center unactive-right">
                            <svg width="39px" height="33px" viewBox="0 0 39 33" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="arrow-up">
                                <g id="Group" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="CADM_group_do-UI-" transform="translate(-1037.000000, -3820.000000)" fill="#2C2E34" fill-rule="nonzero">
                                        <g id="Group-27" transform="translate(-227.000000, 2415.000000)">
                                            <g id="Group-14" transform="translate(0.000000, 0.000000)">
                                                <g id="Group-32" transform="translate(226.000000, 1199.969336)">
                                                    <g id="Group-30" transform="translate(731.375717, 0.000000)">
                                                        <g id="consequence-icon/dark" transform="translate(307.355997, 205.864997)">
                                                            <path d="M2.54457831,25.1142169 C3.53927711,25.0448193 4.46457831,24.6284337 5.18939759,23.9113253 L8.6053012,20.4954217 L8.6053012,31.1980723 C8.6053012,31.5759036 8.29686747,31.8766265 7.92674699,31.8766265 L3.22313253,31.8766265 C2.8453012,31.8766265 2.54457831,31.5681928 2.54457831,31.1980723 L2.54457831,25.1142169 Z M10.9493976,20.4183133 L14.180241,23.6491566 C14.9359036,24.4048193 15.9383133,24.8289157 17.0101205,24.8520482 L17.0101205,31.1980723 C17.0101205,31.5759036 16.7016867,31.8766265 16.3315663,31.8766265 L11.6279518,31.8766265 C11.2501205,31.8766265 10.9493976,31.5681928 10.9493976,31.1980723 L10.9493976,20.4183133 Z M19.3542169,24.1812048 C19.593253,24.026988 19.8168675,23.8496386 20.0250602,23.6414458 L25.4149398,18.2515663 L25.4149398,31.1980723 C25.4149398,31.5759036 25.106506,31.8766265 24.7363855,31.8766265 L20.0327711,31.8766265 C19.6549398,31.8766265 19.3542169,31.5681928 19.3542169,31.1980723 L19.3542169,24.1812048 Z M33.3648193,10.2939759 L33.4650602,10.3942169 C33.5498795,10.4713253 33.6655422,10.586988 33.819759,10.7180723 L33.819759,31.1980723 C33.819759,31.5759036 33.5113253,31.8766265 33.1412048,31.8766265 L28.4375904,31.8766265 C28.059759,31.8766265 27.7590361,31.5681928 27.7590361,31.1980723 L27.7590361,15.899759 L33.3648193,10.2939759 Z M37.2125301,0.362409639 C37.4515663,0.609156627 37.5518072,0.956144578 37.5286747,1.40337349 L37.4284337,3.53927711 C37.3590361,4.96578313 37.2896386,6.38457831 37.2279518,7.80337349 C37.2125301,8.13493976 37.1508434,8.55903614 36.8192771,8.89060241 C36.726747,8.98313253 36.6187952,9.06024096 36.4954217,9.12963855 C36.3103614,9.22987952 36.133012,9.27614458 35.9556627,9.27614458 C35.5315663,9.27614458 35.2539759,8.99855422 35.053494,8.79807229 L33.3648193,7.11710843 L18.4366265,22.0453012 C18.0742169,22.4 17.6038554,22.6004819 17.0949398,22.6004819 C16.5860241,22.6004819 16.1079518,22.4 15.753253,22.0453012 L9.80819277,16.100241 L3.58554217,22.3228916 C3.23084337,22.6775904 2.76048193,22.8780723 2.25156627,22.8780723 C1.7426506,22.8780723 1.26457831,22.6775904 0.909879518,22.3228916 L0.555180723,21.9681928 C-0.185060241,21.2279518 -0.185060241,20.0327711 0.555180723,19.2925301 L8.47421687,11.3812048 C8.82891566,11.026506 9.29927711,10.8260241 9.80819277,10.8260241 C10.3171084,10.8260241 10.7951807,11.026506 11.1498795,11.3812048 L17.0949398,17.3262651 L30.326747,4.08674699 C29.9412048,3.70891566 29.5556627,3.32337349 29.1778313,2.93783133 L28.6303614,2.3826506 C28.4144578,2.16674699 27.9595181,1.71180723 28.2833735,1.01012048 C28.3450602,0.871325301 28.4221687,0.755662651 28.5224096,0.655421687 C28.8385542,0.339277108 29.2395181,0.323855422 29.5325301,0.308433735 C31.7224096,0.208192771 33.9045783,0.100240964 36.0944578,-2.54729571e-12 C36.133012,-2.54729571e-12 36.1792771,-2.54729571e-12 36.2178313,-2.54729571e-12 C36.6496386,-2.54729571e-12 36.9889157,0.123373494 37.2125301,0.362409639 Z" id="Combined-Shape"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <span class="d-none orange">Consequence</span>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <div class="values-box position-relative d-flex flex-column justify-content-center align-items-center unactive-bottom-left">
                            <svg width="44px" height="35px" viewBox="0 0 44 35" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="chats">
                                <g id="Group" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="CADM_group_do-UI-" transform="translate(-850.000000, -3946.000000)" fill="#2C2E34" fill-rule="nonzero">
                                        <g id="Group-27" transform="translate(-227.000000, 2415.000000)">
                                            <g id="Group-14" transform="translate(0.000000, 0.000000)">
                                                <g id="Group-32" transform="translate(226.000000, 1199.969336)">
                                                    <g id="Group-30" transform="translate(731.375717, 0.000000)">
                                                        <g id="communication-icon/dark" transform="translate(120.355997, 331.569477)">
                                                            <path d="M25.5350415,23.0717519 C22.9192658,24.1745912 20.0737884,24.7255879 16.9989474,24.7244885 C15.6146474,24.7244885 14.1980402,24.5957675 12.7493797,24.3381564 C10.7533591,25.7545944 8.51562725,26.7852924 6.03660704,27.4288972 C5.45719358,27.5739409 4.76487441,27.7026618 3.96015698,27.8153138 L3.88767744,27.8153138 C3.71041126,27.8153138 3.54557739,27.7511225 3.39275296,27.6225707 C3.23984396,27.4931731 3.14732049,27.3244489 3.11509796,27.1154676 C3.09869069,27.0669224 3.09074078,27.0148251 3.09074078,26.9586682 C3.09074078,26.9025114 3.09480031,26.849822 3.10291937,26.8018688 C3.11086928,26.753239 3.12727655,26.7057087 3.1511263,26.6570789 L3.21159639,26.5367307 C3.21159639,26.5367307 3.23984396,26.4924987 3.29616996,26.4038657 C3.35249595,26.3153171 3.38471847,26.2750601 3.39283753,26.2837712 C3.40078745,26.2912982 3.43698493,26.2512949 3.50151456,26.1627464 C3.56595961,26.0741979 3.59818214,26.0377467 3.59818214,26.0539003 C3.67852702,25.957571 3.86374312,25.7563705 4.15357671,25.4504679 C4.44349488,25.1451573 4.65272987,24.9071673 4.7815354,24.7381894 C4.91042551,24.5697188 5.09132835,24.336465 5.32475138,24.0383432 C5.55834356,23.7403059 5.75937491,23.4306821 5.92852203,23.1087952 C6.09758458,22.7864007 6.2625876,22.4327141 6.42344651,22.0460438 C4.42751048,20.8872169 2.85790976,19.4623215 1.71515181,17.7724572 C0.572309285,16.0822546 -8.31335001e-13,14.2785543 -8.31335001e-13,12.3631323 C-8.31335001e-13,10.1254004 0.756679648,8.05715398 2.26978522,6.15737809 C3.78272165,4.25785591 5.84724684,2.75675978 8.4630225,1.65392055 C11.0790519,0.551504189 13.924191,-2.0250468e-13 16.9987783,-2.0250468e-13 C20.0736192,-2.0250468e-13 22.9187584,0.551165895 25.5346186,1.65392055 C28.1504788,2.75684436 30.2149194,4.25794049 31.7277713,6.15737809 C33.2412152,8.05681569 33.9977257,10.1254004 33.9977257,12.3630477 C33.9977257,14.6006104 33.2412152,16.6690259 31.7283633,18.568379 C30.2153423,20.4681549 28.1505634,21.9690819 25.5350415,23.0717519 Z M41.5555573,23.9649333 C40.412884,25.6476089 38.8437061,27.068191 36.8476009,28.2282019 C37.0085444,28.6142802 37.1735474,28.9685589 37.3425254,29.2904459 C37.511588,29.612502 37.7130422,29.9224641 37.9462961,30.2199939 C38.1796345,30.5181157 38.3607911,30.7513695 38.4895966,30.9204321 C38.6184022,31.0894101 38.8272989,31.326808 39.1173016,31.6323723 C39.406966,31.9383595 39.592013,32.1394754 39.6724424,32.236143 C39.6886806,32.2522965 39.7210722,32.2888323 39.76911,32.3446509 C39.8177398,32.400554 39.8536836,32.4410647 39.8773642,32.4650836 C39.9017214,32.4891025 39.9337747,32.5299515 39.9740318,32.5857701 C40.0145425,32.6419269 40.0417752,32.6864972 40.0585208,32.7182968 L40.1187371,32.8387296 C40.1187371,32.8387296 40.1349752,32.8870211 40.1667749,32.9837733 C40.1986591,33.0801871 40.2027187,33.1327919 40.1789535,33.1404035 C40.1546809,33.1480997 40.1471538,33.2011273 40.1546809,33.2977949 C40.1066431,33.5229297 40.0018565,33.6995193 39.840913,33.8282403 C39.6800541,33.9570458 39.5026187,34.0134564 39.3095373,33.9973028 C38.5046507,33.8847354 37.8124161,33.7562682 37.2329181,33.6109708 C34.754067,32.9666894 32.5162506,31.9369217 30.5203146,30.5198917 C29.0714003,30.7774182 27.6549623,30.9064775 26.2704086,30.9064775 C21.9081889,30.9064775 18.10906,29.8437261 14.8736138,27.7193228 C15.8071368,27.7835987 16.5155249,27.815483 16.9982708,27.815483 C19.5900276,27.815483 22.0772514,27.4530007 24.4591812,26.7288818 C26.8417876,26.0042556 28.9666983,24.9662843 30.8340825,23.6141222 C32.8461721,22.1329008 34.3915847,20.4267138 35.4700668,18.495392 C36.54931,16.5634781 37.0878744,14.5190815 37.0878744,12.3622019 C37.0878744,11.1224381 36.9027429,9.89908156 36.5328182,8.69187855 C38.6091836,9.83480565 40.2513485,11.2677355 41.4588052,12.9898223 C42.6656699,14.7120783 43.2700326,16.5644085 43.2700326,18.5446138 C43.2700326,20.4765277 42.6988227,22.2828498 41.5555573,23.9649333 Z" id="Combined-Shape"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <span class="d-none orange">Communication</span>
                        </div>
                    </div>
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <div class="values-box position-relative d-flex flex-column justify-content-center align-items-center unactive-bottom-right">
                            <svg width="47px" height="49px" viewBox="0 0 47 49" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="bulb">
                                <g id="Group" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="CADM_group_do-UI-" transform="translate(-987.000000, -3936.000000)" fill="#2C2E34" fill-rule="nonzero">
                                        <g id="Group-27" transform="translate(-227.000000, 2415.000000)">
                                            <g id="Group-14" transform="translate(0.000000, 0.000000)">
                                                <g id="Group-32" transform="translate(226.000000, 1199.969336)">
                                                    <g id="Group-30" transform="translate(731.375717, 0.000000)">
                                                        <g id="creativity-icon/dark" transform="translate(257.212787, 321.569477)">
                                                            <path d="M28.5037037,41.945679 L28.5037037,43.3481481 C28.5037037,44.4641975 27.6839506,45.3925926 26.617284,45.5506173 L26.2716049,46.8246914 C26.0839506,47.5160494 25.4617284,48 24.7407407,48 L21.3135802,48 C20.5925926,48 19.9703704,47.5160494 19.782716,46.8246914 L19.4469136,45.5506173 C18.3703704,45.382716 17.5506173,44.4641975 17.5506173,43.3382716 L17.5506173,41.9358025 C17.5506173,41.1851852 18.1530864,40.582716 18.9037037,40.582716 L27.1506173,40.582716 C27.9012346,40.5925926 28.5037037,41.1950617 28.5037037,41.945679 Z M34.854321,23.0419753 C34.854321,26.2320988 33.5901235,29.1259259 31.5358025,31.2493827 C29.9753086,32.8691358 28.9679012,34.9333333 28.6320988,37.1358025 C28.4839506,38.0839506 27.6641975,38.7851852 26.6962963,38.7851852 L19.3580247,38.7851852 C18.4,38.7851852 17.5703704,38.0938272 17.4320988,37.145679 C17.0864198,34.9432099 16.0691358,32.8493827 14.508642,31.2395062 C12.4938272,29.145679 11.2395062,26.3012346 11.2098765,23.1703704 C11.1407407,16.5925926 16.3753086,11.2691358 22.9530864,11.2197531 C29.5209877,11.1703704 34.854321,16.4839506 34.854321,23.0419753 Z M24.3654321,15.8814815 C24.3654321,15.1506173 23.7728395,14.5481481 23.0320988,14.5481481 C18.3308642,14.5481481 14.4987654,18.3703704 14.4987654,23.0814815 C14.4987654,23.8123457 15.091358,24.4148148 15.8320988,24.4148148 C16.562963,24.4148148 17.1654321,23.8222222 17.1654321,23.0814815 C17.1654321,19.8419753 19.8024691,17.2148148 23.0320988,17.2148148 C23.7728395,17.2148148 24.3654321,16.6222222 24.3654321,15.8814815 Z M23.0320988,7.3382716 C23.762963,7.3382716 24.3654321,6.74567901 24.3654321,6.00493827 L24.3654321,1.33333333 C24.3654321,0.602469136 23.7728395,7.10542736e-15 23.0320988,7.10542736e-15 C22.291358,7.10542736e-15 21.6987654,0.592592593 21.6987654,1.33333333 L21.6987654,6.00493827 C21.6987654,6.74567901 22.3012346,7.3382716 23.0320988,7.3382716 Z M7.3382716,23.0320988 C7.3382716,22.3012346 6.74567901,21.6987654 6.00493827,21.6987654 L1.33333333,21.6987654 C0.602469136,21.6987654 -1.67688086e-12,22.291358 -1.67688086e-12,23.0320988 C-1.67688086e-12,23.762963 0.592592593,24.3654321 1.33333333,24.3654321 L6.00493827,24.3654321 C6.74567901,24.3654321 7.3382716,23.7728395 7.3382716,23.0320988 Z M44.7308642,21.6987654 L40.0592593,21.6987654 C39.3283951,21.6987654 38.7259259,22.291358 38.7259259,23.0320988 C38.7259259,23.762963 39.3185185,24.3654321 40.0592593,24.3654321 L44.7308642,24.3654321 C45.4617284,24.3654321 46.0641975,23.7728395 46.0641975,23.0320988 C46.0641975,22.3012346 45.4716049,21.6987654 44.7308642,21.6987654 Z M10.054321,34.1333333 L6.74567901,37.4419753 C6.22222222,37.9654321 6.22222222,38.8049383 6.74567901,39.3283951 C7.00246914,39.5851852 7.34814815,39.7135802 7.68395062,39.7135802 C8.01975309,39.7135802 8.3654321,39.5851852 8.62222222,39.3283951 L11.9308642,36.0197531 C12.454321,35.4962963 12.454321,34.6567901 11.9308642,34.1333333 C11.417284,33.6098765 10.5679012,33.6098765 10.054321,34.1333333 Z M35.0716049,12.3259259 C35.4074074,12.3259259 35.7530864,12.1975309 36.0098765,11.9407407 L39.3185185,8.63209877 C39.8419753,8.10864198 39.8419753,7.2691358 39.3185185,6.74567901 C38.7950617,6.22222222 37.9555556,6.22222222 37.4320988,6.74567901 L34.1234568,10.054321 C33.6,10.5777778 33.6,11.417284 34.1234568,11.9407407 C34.3901235,12.1975309 34.7259259,12.3259259 35.0716049,12.3259259 Z M10.054321,11.9308642 C10.3111111,12.1876543 10.6567901,12.3160494 10.9925926,12.3160494 C11.3283951,12.3160494 11.6740741,12.1876543 11.9308642,11.9308642 C12.454321,11.4074074 12.454321,10.5679012 11.9308642,10.0444444 L8.62222222,6.73580247 C8.09876543,6.21234568 7.25925926,6.21234568 6.73580247,6.73580247 C6.21234568,7.25925926 6.21234568,8.09876543 6.73580247,8.62222222 L10.054321,11.9308642 Z M36.0098765,34.1333333 C35.4864198,33.6098765 34.6469136,33.6098765 34.1234568,34.1333333 C33.6,34.6567901 33.6,35.4962963 34.1234568,36.0197531 L37.4320988,39.3283951 C37.6888889,39.5851852 38.0345679,39.7135802 38.3703704,39.7135802 C38.7061728,39.7135802 39.0518519,39.5851852 39.308642,39.3283951 C39.8320988,38.8049383 39.8320988,37.9654321 39.308642,37.4419753 L36.0098765,34.1333333 Z" id="XMLID_49_"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                            <span class="d-none orange">Creativity</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid group ethics">
        <div id="code-of-ethics" class="group-scroll-fix"></div>
        <div class="row">
            <div class="col-md-5 col-12 pl-0 order-sm-2 order-md-1">
                <img src="/img/group-4.jpg" class=""/>
            </div>
            <div class="col-md-7 col-12 order-sm-1 order-md-2">
                <div class="text-left title-big">
                    <span>@lang('pages.group.ethics')</span>
                </div>
                <div class="text-left">
                    <p class="ethics-text">@lang('pages.group.ethics-text')</p>
                </div>

                <div class="row">
                    <div class="col-md-4 col-12 text-left">
                        <p class="bold">@lang('pages.group.employees')</p>
                    </div>
                    <div class="col-md-4 col-12 text-left">
                        <p class="bold">@lang('pages.group.suppliers')</p>
                    </div>
                    <div class="col-md-4 col-12 text-left">
                        <p class="bold">@lang('pages.group.market')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid group grants">
        <div id="eu-grants" class="group-scroll-fix"></div>
        <div class="container faded">
            <div class="row">
                <div class="col-12">
                    <div class="title-big">
                        <span class="text-center eu-title">@lang('pages.group.grants')</span>
                        <span class="text-right float-right"> <img src="/img/fe-ir-rgb-2.png" srcset="/img/fe-ir-rgb-2@2x.png 2x, img/fe-ir-rgb-2@3x.png 3x" class="FE_IR_rgb-2"></span>
                    </div>
                    <p class="bold text-center">@lang('pages.group.grants-p')</p>
                    <p class="text-center">{!! trans('pages.group.grants-p2') !!}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid help group">
        <div id="we-love-to-help" class="group-scroll-fix"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12 offset-md-2">
                    <div class="title-big text-center">
                        <span class="">@lang('pages.group.help')</span>
                    </div>
                    <p class="text-center bold">@lang('pages.group.help-p')</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid group carousel-group d-none d-md-block">
        <div id="partners" class="group-scroll-fix"></div>
        <div id="carousel-example-multi" class="carousel slide carousel-multi-item v-2" data-ride="carousel">

            <div class="carousel-inner v-2" role="listbox">

                <div class="carousel-item active">
                    <figure class="col-md-4 d-md-inline-block">
                        <img src="/img/img-group1.jpg" class="img-fluid position-relative img-top">
                    </figure>
                </div>
                <div class="carousel-item">
                    <figure class="col-md-4 d-md-inline-block">
                        <img src="/img/img-group2.jpg" class="img-fluid">
                    </figure>
                </div>
                <div class="carousel-item">
                    <figure class="col-md-4 d-md-inline-block">
                        <img src="/img/img-group3.jpg" class="img-fluid">
                    </figure>
                </div>
                <div class="carousel-item">
                    <figure class="col-md-4 d-md-inline-block">
                        <img src="/img/img-group4.jpg" class="img-fluid">
                    </figure>
                </div>
                <div class="carousel-item">
                    <figure class="col-md-4 d-md-inline-block">
                        <img src="/img/img-group5.jpg" class="img-fluid">
                    </figure>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#carousel-example-multi" data-slide="prev">
                <img src="/img/arrow-left.png">
            </a>
            <a class="carousel-control-next" href="#carousel-example-multi" data-slide="next">
                <img src="/img/arrow-right.png">
            </a>

        </div>

    </div>

    <div class="container-fluid group carousel-group-mobile d-md-none d-sm-block">
        <div id="slides" class="carousel slide" data-ride="carousel">
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/img-group5.jpg" alt="">
                </div>
                <div class="carousel-item">
                    <img src="/img/img-group3.jpg" alt="">
                </div>
                <div class="carousel-item">
                    <img src="/img/img-group4.jpg" alt="">
                </div>
                <div class="carousel-item">
                    <img src="/img/img-group2.jpg" alt="">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#slides" data-slide="prev">
                <img src="/img/arrow-left.png">
            </a>
            <a class="carousel-control-next" href="#slides" data-slide="next">
                <img src="/img/arrow-right.png">
            </a>
        </div>
    </div>

    <div class="container-fluid help partners group">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-12 offset-md-2">
                    <div class="title-big text-center">
                        <span class="">@lang('pages.group.partners')</span>
                    </div>
                    <p class="text-center bold">@lang('pages.group.open')</p>
                </div>
            </div>
            <div class="row logos-partners">
                <div class="col-md-3 col-6 text-center">
                    <img src="/img/agh2.png" class="bw agh">
                </div>
                <div class="col-md-3 col-6 text-center">
                    <img src="/img/fundacja2.png" class="bw fundacja">
                </div>
                <div class="col-md-3 col-6 text-center">
                    <img src="/img/klaster2.png" class="bw klaster">
                </div>
                <div class="col-md-3 col-6 text-center">
                    <img src="/img/politechnika2.png" class="bw politechnika">
                </div>
            </div>
        </div>
    </div>



@endsection
