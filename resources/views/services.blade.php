@extends('layouts.default')

@section('content')
    <div class="jumbotron video_main services">
        <video id="video-background" preload muted autoplay loop>
            <source src="img/movie.webm" type="video/webm">
        </video>
        <div class="container-fluid video-text position-absolute">
            <div class="row">
                <div class="col-md-10 col-sm-12 offset-md-1 text-center">
                    <p class="position-relative">@lang('pages.services.jumbotron')</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid why services">
        <div class="row border-bottom">
            <div class="col-md-6 offset-md-3 col-12 padding-container">
                <div class="text-center why_span">
                    <span class="text-uppercase">@lang('pages.services.e2e')</span>
                </div>
                <div class="text-center why_span-bottom">
                    <p class="bold">@lang('pages.services.approach-p1')</p>
                    <p>@lang('pages.services.approach-p2')</p>
                </div>
            </div>
        </div>
        <div class="container services-drop">
            <div class="row why-row align-items-center justify-content-sm-between">
                <div class="col-12 text-center padding-title-mini">
                    <span class="text-uppercase title-big-mini">@lang('pages.services.our-services')</span>
                </div>
                <div class="col-md-2 col-8 why-content d-flex align-items-center justify-content-center col-hover">
                    <div class="text-center">
                        <span>@lang('pages.services.concept')</span>
                    </div>
                </div>
                <div class="col-md-2 col-8 pl-0 pr-0">
                    <div class="text-center why-content col-hover d-flex align-items-center justify-content-center active">
                        <span>@lang('pages.services.development')</span>
                    </div>
                    <div class="text-right">
                        <ul>
                            <li>CAS / CLASS-A</li>
                            <li>CAD / Construction</li>
                            <li>CAE / Simulation</li>
                            <li>Electronic hardware</li>
                            <li>Electronic software</li>
                            <li>Software</li>
                            <li>Prototyping</li>
                            <li>Learn more</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-8 pl-0 pr-0">
                    <div class="text-center why-content col-hover d-flex align-items-center justify-content-center">
                        <span>@lang('pages.services.simulation')</span>
                    </div>
                </div>
                <div class="col-md-2 col-8 pl-0 pr-0">
                    <div class="text-center why-content col-hover d-flex align-items-center justify-content-center">
                        <span>@lang('pages.services.production')</span>
                    </div>
                </div>
                <div class="col-md-2 col-8 pl-0 pr-0">
                    <div class="text-center why-content col-hover d-flex align-items-center justify-content-center">
                        <span>@lang('pages.services.managment')</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid companies services">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center title-big">
                    <p>@lang('pages.services.sectors')</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-11 companies-hover">
                    <div class="text-center d-flex flex-column align-items-center">
                        <svg width="80px" height="29px" viewBox="0 0 80 29" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="CADM_homepage_UI" transform="translate(-216.000000, -1446.000000)" fill="#E95C1B" fill-rule="nonzero">
                                    <g id="Sectors" transform="translate(0.000000, 1360.500000)">
                                        <g id="Group-17" transform="translate(82.250000, 45.750000)">
                                            <g id="automotive/orange" transform="translate(134.403499, 40.334232)">
                                                <path d="M13.7366305,16.1252714 C17.0166128,16.1252714 19.6747899,18.7834486 19.6739948,22.0626357 C19.6739948,22.2335924 19.6628627,22.4029587 19.6493452,22.5691445 C19.3909224,25.6113778 16.8432707,28 13.7358353,28 C10.7103002,28 8.21910392,25.7362159 7.85095075,22.8092789 C7.81914486,22.5651688 7.79847104,22.3162877 7.79847104,22.0634309 C7.79847104,18.7834486 10.4574433,16.1252714 13.7366305,16.1252714 Z M10.7643702,19.8258866 C10.3874704,20.3228536 10.1401796,20.9128528 10.0527134,21.5585124 L11.7590993,21.5585124 C11.8068082,21.3724479 11.8807569,21.1983107 11.9745842,21.0368958 L10.7643702,19.8258866 Z M10.0447619,22.5866377 C10.1377942,23.2315021 10.390651,23.8215014 10.7667556,24.3144926 L11.9801503,23.1018931 C11.8847326,22.9428637 11.8131694,22.7695216 11.7646654,22.5866377 L10.0447619,22.5866377 Z M13.2229654,25.7521188 L13.2229654,24.0385765 C13.0408767,23.9908677 12.8667394,23.9224851 12.70771,23.8294528 L11.5006765,25.0372815 C11.9952581,25.4102055 12.5796913,25.6622672 13.2229654,25.7521188 Z M13.2229654,20.0882852 L13.2229654,18.3803089 C12.5757155,18.4701606 11.9857163,18.7198368 11.4887493,19.0975317 L12.6981682,20.3069506 C12.8611734,20.2107378 13.0361058,20.1375843 13.2229654,20.0882852 Z M14.2510907,18.3787186 L14.2518859,20.08749 C14.4379503,20.1367891 14.614473,20.2099427 14.776683,20.3061555 L15.9853068,19.0967366 C15.4891349,18.7198368 14.8983406,18.4685703 14.2510907,18.3787186 Z M14.2510907,25.7505285 C14.8935697,25.6606769 15.478798,25.4102055 15.9733796,25.0372815 L14.765551,23.8294528 C14.6065215,23.9232802 14.4339746,23.9908677 14.2510907,24.0393717 L14.2510907,25.7505285 Z M16.7096859,24.3200587 C17.0865857,23.8246819 17.3291056,23.2299118 17.4197524,22.5874329 L15.7133665,22.5874329 C15.6648625,22.7703167 15.5877332,22.9412734 15.4923155,23.101098 L16.7096859,24.3200587 Z M15.7157519,21.5585124 L15.7157519,21.5593075 L17.422933,21.5593075 C17.3338765,20.9128528 17.0865857,20.3228536 16.7120714,19.8258866 L15.500267,21.0368958 C15.5940944,21.1983107 15.6672479,21.3724479 15.7157519,21.5585124 Z M63.0429144,16.1252714 C66.3228967,16.1252714 68.981869,18.7834486 68.9802787,22.0626357 C68.9802787,22.2335924 68.9691467,22.4029587 68.9556292,22.5691445 C68.6964112,25.6113778 66.1487595,28 63.0413241,28 C60.0165841,28 57.5253879,25.7362159 57.1572347,22.8092789 C57.1254288,22.5651688 57.104755,22.3162877 57.104755,22.0634309 C57.104755,18.7834486 59.7637273,16.1252714 63.0429144,16.1252714 Z M60.0706541,19.8258866 C59.6937544,20.3228536 59.4464636,20.9128528 59.3582022,21.5585124 L61.0645882,21.5585124 C61.112297,21.3724479 61.1862457,21.1983107 61.2800731,21.0368958 L60.0706541,19.8258866 Z M59.351841,22.5866377 C59.443283,23.2315021 59.6969349,23.8215014 60.0746299,24.3144926 L61.2872294,23.1018931 C61.1918117,22.9428637 61.1202485,22.7695216 61.0717445,22.5866377 L59.351841,22.5866377 Z M62.5292493,25.7521188 L62.5292493,24.0385765 C62.3471606,23.9908677 62.1730234,23.9224851 62.0139939,23.8294528 L60.8069605,25.0372815 C61.301542,25.4102055 61.8859752,25.6622672 62.5292493,25.7521188 Z M62.5292493,20.0882852 L62.5292493,18.3803089 C61.8812044,18.4701606 61.2920003,18.7198368 60.7950333,19.0975317 L62.0044522,20.3069506 C62.1674574,20.2107378 62.3423897,20.1375843 62.5292493,20.0882852 Z M63.5581698,18.3787186 L63.5581698,20.08749 C63.7442343,20.1351988 63.920757,20.2099427 64.082967,20.3061555 L65.2923859,19.0967366 C64.7962141,18.7198368 64.2054197,18.4685703 63.5581698,18.3787186 Z M63.5581698,25.7505285 C64.1998536,25.6606769 64.7858771,25.4102055 65.2804587,25.0372815 L64.0726301,23.8294528 C63.9136006,23.9232802 63.7410537,23.9908677 63.5581698,24.0393717 L63.5581698,25.7505285 Z M66.0159699,24.3200587 C66.3936648,23.8246819 66.6353896,23.2299118 66.7260364,22.588228 L65.0196504,22.588228 C64.9719416,22.771907 64.8940172,22.9420685 64.7985995,23.1026883 L66.0159699,24.3200587 Z M65.0220359,21.5585124 L65.0220359,21.5593075 L66.729217,21.5593075 C66.6393653,20.9128528 66.3928697,20.3228536 66.0175602,19.8258866 L64.806551,21.0368958 C64.9011735,21.1983107 64.9735319,21.3724479 65.0220359,21.5585124 Z M77.3014944,13.0512323 C77.3014944,13.0512323 78.6937972,14.0610692 78.693002,16.3256485 C78.693002,19.7209271 76.3751479,20.9549956 76.3751479,20.9549956 L70.3232824,22.0944416 L70.1722044,22.107164 C70.1729996,22.0928513 70.1745899,22.0801289 70.1745899,22.0650211 C70.1745899,18.132223 66.9757126,14.9341409 63.0429144,14.9341409 C59.1101163,14.9341409 55.9120342,18.1330181 55.9120342,22.0650211 C55.9120342,22.3457081 55.9319129,22.6399126 55.9740557,22.9595618 C55.9859829,23.052594 56.0066567,23.1432408 56.0225596,23.2346827 L20.625786,23.9471346 C20.625786,23.9471346 20.6122685,23.9471346 20.6067025,23.9471346 C20.7219988,23.5344532 20.8015135,23.1058689 20.8388854,22.6645622 C20.8539932,22.4673656 20.8675107,22.2669885 20.8675107,22.0650211 C20.8675107,18.132223 17.6694286,14.9333457 13.7366305,14.9333457 C9.80383233,14.9333457 6.60575021,18.1330181 6.60575021,22.0650211 C6.60575021,22.344913 6.62562889,22.6383223 6.66777169,22.9595618 C6.68685522,23.1098446 6.71707082,23.2561517 6.74490097,23.4048442 C4.31334077,23.1265427 2.21017637,22.7114758 1.11764409,22.0936464 C0.0457856422,20.3498886 -0.095750563,17.84597 0.0457856422,17.3227631 C0.187321847,16.7995563 0.428251455,15.7992611 1.19636367,13.7374443 C1.96447588,11.6764227 16.3908319,8.66917593 17.8483368,8.63737005 C22.797333,6.54533771 31.2139664,2.52189278 33.0849478,1.87384779 C44.1414699,-1.95876181 55.6854172,1.17888912 58.2457913,1.76650292 C60.8053702,2.35411671 68.1970587,5.48381617 70.1101829,6.07381541 C71.44444,6.48490652 74.4143148,6.98028324 76.08969,7.24268182 C76.7878293,7.35161699 77.3014944,7.95036285 77.3014944,8.65724873 L77.3014944,13.0512323 Z M42.1885883,8.88545598 L43.8862276,1.93348383 C43.8862276,1.93348383 33.2948666,2.09489872 28.0397387,6.86498689 C28.0397387,6.86498689 29.2125808,7.30947419 28.9692658,9.29018591 L42.1885883,8.88545598 Z M57.0244451,8.28034894 L57.6311425,6.09766983 L55.8523981,3.22718836 C55.8523981,3.22718836 52.2957046,1.85317396 46.0697019,1.93427898 L44.9779647,8.68507888 L57.0244451,8.28034894 Z M63.8157975,8.23900129 C63.9621046,7.43192686 63.564531,6.62326214 62.8361762,6.24477206 C61.636299,5.62058149 59.621396,4.63300865 57.1039599,3.63112315 L60.4594811,8.23900129 L63.8157975,8.23900129 Z" id="Combined-Shape"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <span>Automotive</span>
                        <span>We are passionate about automotive, we lead in providing the best solutions</span>
                    </div>
                </div>
                <div class="col-md-3 col-11 companies-hover">
                    <div class="text-center d-flex flex-column align-items-center">
                        <svg width="71px" height="33px" viewBox="0 0 71 33" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="CADM_homepage_UI" transform="translate(-539.000000, -1440.000000)" fill="#2C2E34">
                                    <g id="Sectors" transform="translate(0.000000, 1360.500000)">
                                        <g id="Group-19" transform="translate(427.333333, 80.584232)">
                                            <g id="rolling-stock/dark" transform="translate(111.455882, 0.000000)">
                                                <g id="train" transform="translate(0.000000, 0.000000)">
                                                    <polygon id="Path" fill-rule="nonzero" points="0.387278356 28.7161401 70.4216155 28.7161401 70.4216155 31.3100045 0.387278356 31.3100045"></polygon>
                                                    <polygon id="Path" stroke="#2C2E34" stroke-width="1.88235294" fill-rule="nonzero" points="11.4499719 24.4498487 14.6220096 24.4498487 14.6220096 16.6682557 6.58647626 16.6682557"></polygon>
                                                    <polygon id="Path" stroke="#2C2E34" stroke-width="1.88235294" fill-rule="nonzero" points="1.65268787 16.6682557 1.65268787 24.4498487 8.39002256 24.4498487 3.52652692 16.6682557"></polygon>
                                                    <polygon id="Path" stroke="#2C2E34" stroke-width="1.88235294" fill-rule="nonzero" points="17.2158739 16.6682557 22.4036026 16.6682557 22.4036026 24.4498487 17.2158739 24.4498487"></polygon>
                                                    <path d="M48.2284887,11.4285397 L55.9296567,11.4285397 C49.9978385,7.78788396 43.2852013,5.6094432 36.3458543,5.07369868 C36.1875373,5.06166656 36.030487,5.04900137 35.87407,5.04013554 C34.9501324,4.97870861 34.0255616,4.94134578 33.1009908,4.94134578 L30.0999354,4.94134578 L30.7104054,5.41566322 C35.7239854,9.3026602 41.8850464,11.417141 48.2284887,11.4285397 L48.2284887,11.4285397 Z" id="Path" stroke="#2C2E34" stroke-width="1.88235294" fill-rule="nonzero"></path>
                                                    <path d="M16.6972277,2.04608785 C16.4084576,0.889741023 15.3686322,0.0791584171 14.1774556,0.0810582606 L7.28497053,0.0810582606 C6.09379394,0.0791584171 5.05396852,0.889741023 4.76519846,2.04608785 L4.60941454,2.6749226 L16.8530116,2.6749226 L16.6972277,2.04608785 Z" id="Path" stroke="#2C2E34" stroke-width="0.941176471" fill-rule="nonzero"></path>
                                                    <path d="M24.9974669,16.6891535 L24.9974669,24.4498487 L51.3097383,24.4498487 L42.6035744,20.5812166 C37.056783,18.1114727 31.0679706,16.7879432 24.9974669,16.6891535 Z" id="Path" stroke="#2C2E34" stroke-width="1.88235294" fill-rule="nonzero"></path>
                                                    <path d="M21.1431377,11.4285397 L18.5492734,11.4285397 C17.8330476,11.4285397 17.2158739,12.0013138 17.2158739,12.7883157 L17.2158739,14.2134082 L22.4036026,14.2134082 L22.4036026,12.7883157 C22.4036026,12.0013138 21.8593635,11.4285397 21.1431377,11.4285397 Z" id="Path" stroke="#2C2E34" stroke-width="1.88235294" fill-rule="nonzero"></path>
                                                    <path d="M65.2346609,18.3614551 L63.0131579,16.2596397 C61.9499015,15.2533774 60.8359836,14.3009428 59.6777371,13.4061357 L48.2022939,13.4061357 C41.2819449,13.3947369 34.5604418,11.088376 29.0902759,6.84864899 L25.8498451,4.32761047 L1.65268787,4.32761047 L1.65268787,14.7030678 L15.1125771,14.7239656 L15.1125771,13.4270335 C15.1125771,11.2783563 16.3641289,9.51533915 18.5128061,9.51533915 L21.1066704,9.51533915 C23.2553476,9.51533915 24.4867728,11.2783563 24.4867728,13.4270335 L24.4867728,14.7448634 C30.9207723,14.8430199 37.7787082,16.2216438 43.6579651,18.8376723 L57.6968759,25.0785252 L62.5591049,25.0785252 C64.1524065,25.0791584 65.5854911,24.1077259 66.1750633,22.6277793 C66.7646356,21.1471995 66.3922742,19.4570082 65.2346609,18.3614551 Z M6.84041655,9.51533915 L4.24655221,9.51533915 L4.24655221,6.92147481 L6.84041655,6.92147481 L6.84041655,9.51533915 Z M12.0281452,9.51533915 L9.43428089,9.51533915 L9.43428089,6.92147481 L12.0281452,6.92147481 L12.0281452,9.51533915 Z M61.3115677,21.1877287 L58.7177033,21.1877287 L58.7177033,18.5938643 L61.3115677,18.5938643 L61.3115677,21.1877287 Z" id="Shape" stroke="#2C2E34" stroke-width="0.941176471" fill-rule="nonzero"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <span>Rolling stock</span>
                        <span>We are steaming ahead with changes in the design of rolling stock</span>
                    </div>
                </div>
                <div class="col-md-3 col-11 companies-hover d-flex">
                    <div class="text-center d-flex flex-column align-items-center">
                        <svg width="64px" height="34px" viewBox="0 0 64 34" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                <g id="CADM_homepage_UI" transform="translate(-844.000000, -1442.000000)" fill="#2C2E34" fill-rule="nonzero" stroke="#2C2E34" stroke-width="0.5">
                                    <g id="Sectors" transform="translate(0.000000, 1360.500000)">
                                        <g id="Group-20" transform="translate(734.666667, 82.398646)">
                                            <g id="maritime/dark" transform="translate(109.604370, 0.000000)">
                                                <path d="M18.46558,27.4675323 L18.4611,27.4665523 C18.04936,27.3562323 17.63468,27.2599123 17.21804,27.1731123 C20.2104,27.4125123 23.2967,28.0222123 26.57522,29.0194323 C26.87132,29.1195323 27.16966,29.2154323 27.46926,29.3088123 C24.17464,28.9684723 21.01708,28.1792923 18.46992,27.4689323 L18.46558,27.4675323 Z M30.64236,30.3789723 C30.96772,30.3789723 31.29266,30.3728123 31.61704,30.3611923 C33.17804,30.6710123 34.75864,30.8915123 36.337,31.0170923 C33.84766,31.9499123 31.13502,32.3711723 28.41804,32.3711723 C25.35778,32.3711723 22.2929,31.8381923 19.5349,30.9029923 C16.47408,29.9707323 13.50216,29.4632323 10.54816,29.4630923 C7.1624,29.4629523 3.79988,30.1294923 0.34804,31.5874523 C3.91062,28.9148523 8.23886,27.5919923 12.60084,27.5917123 C14.49028,27.5917123 16.38532,27.8397923 18.22856,28.3338523 C22.34806,29.4829723 26.5244,30.3789723 30.64236,30.3789723 Z M7.8022,23.3613323 C5.35416,24.1467323 3.05004,25.2336923 0.92722,26.5998123 L0.34818,26.5998123 L0.34818,20.9092323 C40.06128,1.39995227 62.79126,3.69259227 62.79126,3.69259227 L51.96856,24.4865123 C49.04578,25.3788723 45.93218,25.8187523 42.57092,25.8187523 C36.39356,25.8187523 30.18456,24.3075923 25.4653,22.9911723 L25.45914,22.9893523 L25.45298,22.9876723 C22.76512,22.2672323 19.99466,21.9019723 17.21846,21.9019723 C13.9888,21.9019723 10.82088,22.3930923 7.8022,23.3613323 Z M47.02026,12.6203923 C46.75216,13.8173923 47.36046,14.8119523 48.37868,14.8419123 C49.39718,14.8715923 50.43948,13.9254723 50.7073,12.7286123 C50.97526,11.5314723 50.3671,10.5373323 49.34902,10.5073723 C48.33066,10.4776923 47.28794,11.4235323 47.02026,12.6203923 Z M16.13486,12.0420523 L14.68964,7.10439227 C34.56194,0.329792272 44.67862,3.60957227 44.67862,3.60957227 C29.2628,5.86553227 16.13486,12.0420523 16.13486,12.0420523 Z M35.88662,1.82009227 C23.84634,2.00657227 14.44884,5.54003227 14.4487,5.54003227 L13.00334,1.02223227 C24.55376,-1.67570773 35.88662,1.82009227 35.88662,1.82009227 Z M25.12622,24.2069323 C30.91578,25.8221123 36.7836,27.0809923 42.57092,27.0809923 C48.07978,27.0809923 53.5157,25.9404123 58.74288,22.8808523 C53.66228,27.8266323 46.56372,29.8808523 39.445,29.8808523 C35.14462,29.8808523 30.83752,29.1317123 26.9619,27.8175323 C22.66068,26.5075523 18.48448,25.7942523 14.33348,25.7941123 C9.57572,25.7938323 4.85044,26.7304323 -1.93267624e-12,28.7794723 C5.00654,25.0234123 11.088,23.1643523 17.21818,23.1643523 C19.873,23.1643523 22.5365,23.5128123 25.12622,24.2069323 Z" id="Combined-Shape"></path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        <span>Maritime</span>
                        <span>We are making waves in maritime industry development</span>
                    </div>
                </div>
                <div class="col-md-3 col-11 companies-hover d-flex">
                    <div class="text-center d-flex flex-column align-items-center">
                        <svg width="52px" height="51px" viewBox="0 0 52 51" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="aerospace/dark" fill="#2C2E34" fill-rule="nonzero">
                                    <path d="M57.4054077,27.7651769 L34.2205337,14.8194788 C33.7014096,14.5330048 33.2651231,13.8144471 33.2507519,13.2226538 L32.61815,-4.11587212 C32.5587673,-5.89911538 31.3806038,-7 30.1749183,-7 C28.9681481,-7 27.7922894,-5.89911538 27.7284327,-4.11600769 L27.0992202,13.2246875 C27.0815952,13.8164808 26.6507317,14.5339538 26.1294385,14.8225971 L2.94334423,27.7651769 C2.42422019,28.051651 2,28.7712933 2,29.3643067 L2,33.4242933 C2,34.0139173 2.46285962,34.3609942 3.03255385,34.1890827 L25.7490096,27.2771 C26.3176192,27.1062731 26.7793942,27.4490115 26.7793942,28.042974 L26.7793942,39.1924135 C26.7793942,39.7852913 26.408049,40.5831615 25.9550865,40.9645394 L22.052776,44.2442808 C21.6008981,44.6278279 21.2284683,45.4246135 21.2284683,46.0153221 L21.2284683,48.5103442 C21.2284683,49.1021375 21.6968865,49.4646702 22.2710548,49.3181115 L30.1749183,47.3620077 L38.0755279,49.3181115 C38.6496962,49.4646702 39.119199,49.1021375 39.119199,48.5103442 L39.119199,46.0164067 C39.119199,45.4256981 38.7467692,44.6278279 38.2927221,44.2453654 L34.3904115,40.965624 C33.9396183,40.5831615 33.5671885,39.786376 33.5671885,39.1934981 L33.5671885,28.0418894 C33.5671885,27.4490115 34.0311327,27.1041038 34.5964885,27.2760154 L57.3140288,34.1878625 C57.8837231,34.3586894 58.3478029,34.0126971 58.3478029,33.4230731 L58.3478029,29.3641712 C58.3476673,28.7702087 57.9234471,28.0505663 57.4054077,27.7651769 Z" id="Path" transform="translate(30.173901, 21.175322) rotate(45.000000) translate(-30.173901, -21.175322) "></path>
                                </g>
                            </g>
                        </svg>
                        <span>Aerospace</span>
                        <span>We are flying aviation to new heights</span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3 col-11 companies-hover  d-flex">
                    <div class="text-center d-flex flex-column align-items-center">
                        <svg width="30px" height="34px" viewBox="0 0 30 34" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="others-icon">
                            <!-- Generator: sketchtool 53.2 (72643) - https://sketchapp.com -->
                            <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Others/dark" fill="#2C2E34" fill-rule="nonzero">
                                    <path d="M2.56207792,13.1206649 L1.35275844,12.980374 C0.953797403,12.9336208 0.654576623,12.5969974 0.654576623,12.1980364 L0.654576623,10.3372571 C0.654576623,9.9382961 0.953797403,9.60167273 1.35275844,9.55491948 L2.49977143,9.42401039 C2.64314805,8.8505039 2.86132987,8.29881558 3.14808312,7.78141299 L2.4312,6.8744 C2.18184935,6.55959481 2.20678442,6.11076364 2.49042078,5.82712727 L3.80574545,4.5118026 C4.08938182,4.23128312 4.53821299,4.20323117 4.85301818,4.45258182 L5.71016104,5.13206234 C6.25873247,4.80478961 6.84782338,4.55543896 7.46496623,4.39024416 L7.58964156,3.32115325 C7.63639481,2.92219221 7.97301818,2.62297143 8.37197922,2.62297143 L10.2327584,2.62297143 C10.6317195,2.62297143 10.9683429,2.92219221 11.0150961,3.32115325 L11.1397714,4.39024416 C11.7412987,4.55232208 12.3148364,4.79232208 12.8509403,5.10712727 L13.6769143,4.45258182 C13.9917195,4.20323117 14.4405506,4.22816623 14.724187,4.5118026 L16.0363948,5.82401039 C16.3169143,6.10764675 16.3449662,6.55647792 16.0956156,6.87128312 L15.4223688,7.72219221 C15.7090909,8.23336104 15.9334753,8.77881558 16.0831169,9.34920519 L17.1771429,9.4769974 C17.5761039,9.52375065 17.8753247,9.86037403 17.8753247,10.2593351 L17.8753247,12.1201143 C17.8753247,12.5190753 17.5761351,12.8556987 17.1771429,12.9024519 L16.0675325,13.0302442 C15.9116883,13.6068675 15.6779221,14.1585247 15.3787013,14.6759584 L16.0987013,15.5892052 C16.3480519,15.9040104 16.3231169,16.3528416 16.0394805,16.6364779 L14.7241558,17.9518026 C14.4405195,18.2323221 13.9916883,18.260374 13.6768831,18.0110234 L12.7511688,17.2785558 C12.2244156,17.5746597 11.6633766,17.8021922 11.0774026,17.9549195 L10.9402597,19.1424519 C10.8935065,19.5413818 10.5568831,19.8406338 10.1579221,19.8406338 L8.29714286,19.8406338 C7.89818182,19.8406338 7.56155844,19.541413 7.51480519,19.1424519 L7.37142857,17.9112831 C6.82597403,17.755439 6.30233766,17.5341714 5.80987013,17.2505039 L4.85298701,18.0079065 C4.53818182,18.2572571 4.08935065,18.2323532 3.80571429,17.9487169 L2.49038961,16.6333922 C2.20987013,16.3497558 2.18181818,15.9009247 2.43116883,15.5861195 L3.19480519,14.6230026 C2.92675325,14.1492364 2.71480519,13.6443013 2.56207792,13.1206649 Z M9.3038961,8.0868987 C7.60831169,8.0868987 6.22753247,9.46767792 6.22753247,11.1632623 C6.22753247,12.8588468 7.60834286,14.239626 9.3038961,14.239626 C10.9994805,14.239626 12.3802597,12.8588468 12.3802597,11.1632623 C12.3802597,9.46767792 10.9994805,8.0868987 9.3038961,8.0868987 Z M27.6997091,13.5788468 C28.0020779,13.8344312 28.0644156,14.2770286 27.8399688,14.6073558 L27.412987,15.2494338 C27.6841247,15.648426 27.9023065,16.0785247 28.0644156,16.5335896 L28.8467532,16.5585247 C29.2425974,16.5709922 29.5636364,16.8795636 29.5979221,17.2722909 L29.707013,18.5533299 C29.7381818,18.9460883 29.4701299,19.3045299 29.0836364,19.3824519 L28.3044156,19.541413 C28.2172052,20.0214442 28.0644468,20.4889766 27.8555844,20.931574 L28.4260052,21.5362182 C28.6971429,21.8229714 28.7096104,22.2686857 28.4540571,22.5710234 L27.6249662,23.5528416 C27.3693506,23.8551792 26.9299013,23.9175169 26.5995117,23.6993351 L25.8919481,23.2318026 C25.4836364,23.509174 25.0410701,23.7335896 24.5735377,23.8987844 L24.5454857,24.7590753 C24.5330182,25.1549506 24.2244468,25.4759584 23.8317195,25.5102442 L22.5506805,25.6193351 C22.1579532,25.6505039 21.7995117,25.3824519 21.7215896,24.9959584 L21.5438961,24.1169974 C21.0888312,24.0297247 20.6462649,23.8832312 20.2254857,23.6868675 L19.5834078,24.288426 C19.2966234,24.5595948 18.8509403,24.5720623 18.5485714,24.3164779 L17.5667532,23.487387 C17.2644468,23.2318026 17.2021091,22.7923221 17.4202909,22.4619325 L17.9096104,21.7232312 C17.657174,21.3523532 17.448374,20.9564779 17.2893506,20.5388156 L16.4135065,20.5107948 C16.0176623,20.4983273 15.6966234,20.1897558 15.6623377,19.7970286 L15.5532468,18.5159896 C15.5220779,18.1232312 15.7901299,17.7647896 16.1766234,17.6868675 L16.987013,17.5216727 C17.0680208,17.0448208 17.2082805,16.580374 17.4046753,16.1377766 L16.8373714,15.5331325 C16.5662338,15.2463792 16.5537662,14.8006649 16.8093818,14.4983273 L17.6384727,13.5102753 C17.894026,13.2079377 18.3334753,13.1456 18.6639273,13.3637818 L19.3122078,13.7939117 C19.7361039,13.4884571 20.2005195,13.2453403 20.6930182,13.0676779 L20.7179221,12.3071584 C20.7303896,11.9113143 21.038961,11.5902753 21.4316883,11.5559896 L22.7127273,11.4468987 C23.1055169,11.4157299 23.4639584,11.6837818 23.5418805,12.0702753 L23.6945455,12.8183273 C24.1963948,12.9087169 24.6826286,13.064561 25.1407792,13.2858597 L25.6831169,12.7778078 C25.969839,12.506639 26.4155844,12.4941714 26.7178909,12.7497558 L27.6997091,13.5788468 Z M22.8717195,20.9845299 C24.2555532,20.8692364 25.2873039,19.6474182 25.1688312,18.2634909 C25.0535377,16.879626 23.8316571,15.8479065 22.447761,15.9663481 C21.0639273,16.0816727 20.0321766,17.3035221 20.1506494,18.6874182 C20.2659429,20.0712831 21.4878234,21.1030026 22.8717195,20.9845299 Z M7.04415584,24.4318338 L7.58957922,24.3757299 C7.68931948,23.9923221 7.84204675,23.6276779 8.03529351,23.2848208 L7.70178701,22.8546597 C7.45867013,22.5398857 7.48983896,22.0972571 7.77347532,21.8198857 L8.34074805,21.2650494 C8.62438442,20.9876779 9.06701299,20.9689455 9.37558442,21.2182961 L9.76519481,21.5362182 C10.132987,21.3243013 10.5288312,21.1621922 10.9402286,21.0562494 L11.0025662,20.5699844 C11.0524675,20.1772571 11.3890909,19.8842701 11.7849351,19.8905039 L12.5735065,19.8998545 C12.9693818,19.9029714 13.2997403,20.2052779 13.3402597,20.5980364 L13.390161,21.087387 C13.7890909,21.1995948 14.1693818,21.3647896 14.5246753,21.5798545 L14.9018494,21.2899844 C15.2166234,21.0468364 15.6592831,21.0780052 15.9366857,21.3616727 L16.4883429,21.9258286 C16.7657455,22.2094649 16.7844468,22.6520623 16.5350961,22.9606338 L16.2202909,23.3471273 C16.4073039,23.6899844 16.5506494,24.0577766 16.6472727,24.4380364 L17.152239,24.5034909 C17.5449662,24.553361 17.8379532,24.8900156 17.8316883,25.2858286 L17.8223688,26.0744312 C17.8192208,26.4702753 17.5169143,26.8006649 17.124187,26.8411844 L16.6067844,26.8941714 C16.4976935,27.2775481 16.3387013,27.6422234 16.132987,27.9850805 L16.4665558,28.4183584 C16.7096416,28.7331636 16.6784727,29.1757922 16.3948364,29.4531636 L15.8306805,30.0048519 C15.5470442,30.2822545 15.1044156,30.3009558 14.7958442,30.0516052 L14.3594805,29.6993974 C14.004187,29.8926442 13.630161,30.0391065 13.2374026,30.135761 L13.1657143,30.7030338 C13.1158442,31.095761 12.7791896,31.3887481 12.3833766,31.3825143 L11.594774,31.3731636 C11.1989299,31.3700468 10.8685403,31.0677091 10.8280208,30.6749818 L10.7656831,30.0765403 C10.4041558,29.9705974 10.0581506,29.817839 9.73087792,29.6245922 L9.26649351,29.9830338 C8.95168831,30.2261506 8.50909091,30.1949818 8.23168831,29.9113455 L7.68,29.3471896 C7.4025974,29.0635532 7.3838961,28.6209247 7.63324675,28.3123844 L8.00727273,27.8510857 C7.82961039,27.5331636 7.69246753,27.1965403 7.59584416,26.8443013 L7.0161039,26.7695273 C6.62337662,26.719626 6.33038961,26.3830026 6.33662338,25.9871584 L6.34597403,25.198587 C6.34909091,24.8027117 6.65142857,24.4723532 7.04415584,24.4318338 Z M12.134026,23.540374 C11.0025974,23.5279377 10.0706494,24.4349506 10.0581506,25.5663481 C10.0457143,26.6978078 10.9526961,27.6297558 12.0841247,27.6422234 C13.2155532,27.6546597 14.1475325,26.7476779 14.16,25.6162494 C14.1724364,24.4848208 13.2654545,23.5528416 12.134026,23.540374 Z" id="Combined-Shape"></path>
                                </g>
                            </g>
                        </svg>
                        <span>Others</span>
                        <span>We support customers from the medical, energy and white goods industries</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid logos">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 d-none d-md-flex align-items-center justify-content-between">
                    <img src="img/catia.png" srcset="img/catia@2x.png 2x, img/catia@3x.png 3x" class="bw">
                    <img src="img/bw_10.png" srcset="img/bw_10@2x.png 2x, img/bw_10@3x.png 3x" class="bw">
                    <img src="img/bw_11.png" srcset="img/bw_11@2x.png 2x, img/bw_11@3x.png 3x" class="bw">
                    <img src="img/bw_12.png" srcset="img/bw_12@2x.png 2x, img/bw_12@3x.png 3x" class="bw">
                    <img src="img/bw_9.png" srcset="img/bw_9@2x.png 2x, img/bw_9@3x.png 3x" class="bw">
                    <img src="img/bw_7.png" srcset="img/bw_7@2x.png 2x, img/bw_7@3x.png 3x" class="bw">
                    <img src="img/bw_13.png" srcset="img/bw_13@2x.png 2x, img/bw_13@3x.png 3x" class="bw">
                </div>
            </div>
            <div class="row text-center">
                <div class="col-12 d-none d-md-flex align-items-center justify-content-between">
                    <img src="img/bw.png" srcset="img/bw@2x.png 2x, img/bw@3x.png 3x" class="bw">
                    <img src="img/bw_13.png" srcset="img/bw_14.png" class="bw">
                    <img src="img/bw_4.png" srcset="img/bw_4@2x.png 2x, img/bw_4@3x.png 3x" class="bw">
                    <img src="img/bw_2.png" srcset="img/bw_2@2x.png 2x, img/bw_2@3x.png 3x" class="bw">
                    <img src="img/bw_13.png" srcset="img/bw_15.png" class="bw">
                    <img src="img/bw_6.png" srcset="img/bw_6@2x.png 2x, img/bw_6@3x.png 3x" class="bw">
                    <img src="img/bw_5.png" srcset="img/bw_5@2x.png 2x, img/bw_5@3x.png 3x" class="bw">
                    <img src="img/bw_3.png" srcset="img/bw_3@2x.png 2x, img/bw_3@3x.png 3x" class="bw">
                </div>
            </div>
            <div class="row text-center d-md-none d-sm-flex">
                <div class="col-12">
                    <img src="img/catia.png" srcset="img/catia@2x.png 2x, img/catia@3x.png 3x" class="bw">
                    <img src="img/bw_10.png" srcset="img/bw_10@2x.png 2x, img/bw_10@3x.png 3x" class="bw">
                    <img src="img/bw_11.png" srcset="img/bw_11@2x.png 2x, img/bw_11@3x.png 3x" class="bw">
                    <img src="img/bw_12.png" srcset="img/bw_12@2x.png 2x, img/bw_12@3x.png 3x" class="bw">
                </div>
                <div class="col-12">
                    <img src="img/bw_9.png" srcset="img/bw_9@2x.png 2x, img/bw_9@3x.png 3x" class="bw">
                    <img src="img/bw_7.png" srcset="img/bw_7@2x.png 2x, img/bw_7@3x.png 3x" class="bw">
                    <img src="img/bw_13.png" srcset="img/bw_13@2x.png 2x, img/bw_13@3x.png 3x" class="bw">
                    <img src="img/bw.png" srcset="img/bw@2x.png 2x, img/bw@3x.png 3x" class="bw">
                </div>
                <div class="col-12">
                    <img src="img/bw_13.png" srcset="img/bw_14.png" class="bw">
                    <img src="img/bw_4.png" srcset="img/bw_4@2x.png 2x, img/bw_4@3x.png 3x" class="bw">
                    <img src="img/bw_2.png" srcset="img/bw_2@2x.png 2x, img/bw_2@3x.png 3x" class="bw">
                    <img src="img/bw_13.png" srcset="img/bw_15.png" class="bw">
                </div>
                <div class="col-12">
                    <img src="img/bw_6.png" srcset="img/bw_6@2x.png 2x, img/bw_6@3x.png 3x" class="bw">
                    <img src="img/bw_5.png" srcset="img/bw_5@2x.png 2x, img/bw_5@3x.png 3x" class="bw">
                    <img src="img/bw_3.png" srcset="img/bw_3@2x.png 2x, img/bw_3@3x.png 3x" class="bw">
                </div>
            </div>

        </div>
    </div>

@endsection
