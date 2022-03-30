<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="LeaderTalk - Lắng nghe, Trao đổi, Trả lời, Giải quyết">
    <meta name="author" content="Sweetsica">
    <title>LeaderTalk - Lắng nghe, Trao đổi, Trả lời, Giải quyết</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('assets/img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('assets/img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('assets/img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('assets/img/apple-touch-icon-144x144-precomposed.png')}}">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/icon_fonts/css/all_icons_min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/magnific-popup.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/skins/square/yellow.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">

</head>

<body>

<div id="loader_form">
    <div data-loader="circle-side-2"></div>
</div><!-- /Loader_form -->

<header>
    <div id="logo_home">
        <h1><a href="{{route('index')}}" title="Quote">LeaderTalk - Lắng nghe, Trao đổi, Trả lời, Giải quyết</a></h1>
    </div>

    <a id="menu-button-mobile" class="cmn-toggle-switch cmn-toggle-switch__htx" href="javascript:void(0);"><span>Menu mobile</span></a>
    <nav class="main_nav">
        <ul class="nav nav-tabs">
            <li><a href="#tab_1" data-toggle="tab">Đặt câu hỏi</a></li>
            <li><a href="#tab_2" data-toggle="tab">Về chúng tôi</a></li>
            <li><a href="#tab_3" data-toggle="tab">Liên hệ</a></li>
        </ul>
    </nav>
</header><!-- /header -->

<div class="intro_txt animated fadeInUp">
    <h2>Chào mừng tới LeaderTalk Mastertran</h2>
    <p>Nơi tổng hợp các ý kiến giúp các đồng chí Lãnh đạo - Trưởng bộ phân lắng nghe, trao đổi, trả lời một cách công tâm. Qua đó giải quyết những vướng mắc, tâm tư, nguyện vọng chính đáng!</p>
    <p><i><b>"Vì một Mastertran đoàn kết. Một Việt Nam - nơi sức khoẻ người tiêu dùng được nâng tầm bởi thương hiệu Doppelherz!"</b></i></p>
</div><!-- /intro_txt -->

<video id="my-video" class="video" loop muted autoplay playsinline>
    <source src="{{asset('assets/media/demo.mp4')}}" type="video/mp4">
    <source src="{{asset('assets/media/demo.ogv')}}" type="video/ogg">
    <source src="{{asset('assets/media/demo.webm')}}" type="video/webm">
</video><!-- /video -->
<div class="video_fallback"></div>

<div class="layer"></div><!-- /mask -->

<div id="main_container">

    <div id="header_in">
        <a href="#0" class="close_in "><i class="pe-7s-close-circle"></i></a>
    </div>

    <div class="wrapper_in">
        <div class="container-fluid">
            <div class="tab-content">
                <div class="tab-pane fade" id="tab_1">
                    <div class="subheader" id="quote"></div>
                    <div class="row">
                        <aside class="col-xl-3 col-lg-4">
                            <h2>Để lại câu hỏi cho các bộ phận quản lý</h2>
                            <p class="lead">An mei sadipscing dissentiet, eos ea partem viderer facilisi.</p>
                            <ul class="list_ok">
                                <li>Delicata persecuti ei nec, et his minim omnium, aperiam placerat ea vis.</li>
                                <li>Suavitate vituperatoribus pro ad, cum in quis propriae abhorreant.</li>
                                <li>Aperiri deterruisset ei mea, sed cu laudem intellegat, eu mutat iuvaret voluptatum mei.</li>
                            </ul>
                        </aside><!-- /aside -->

                        <div class="col-xl-9 col-lg-8">
                            <div id="wizard_container">
                                <div id="top-wizard">
                                    <strong>Progress</strong>
                                    <div id="progressbar"></div>
                                </div><!-- /top-wizard -->

                                <form name="example-1" id="wrappedd" method="POST" action="{{route('send.question')}}">
                                    @csrf
                                    <input id="website" name="website" type="text" value=""><!-- Leave for security protection, read docs for details -->
                                    <div id="middle-wizard">
                                        <div class="step">
                                            <h3 class="main_question"><strong>1/4</strong>Vấn đề của bạn thuộc phòng ban nào phụ trách?</h3>

                                            <div class="form-group radio_questions">
                                                <label>1. Marketing
                                                    <input name="category" type="radio" value="Marketing" class="icheck required">
                                                </label>
                                            </div>
                                            <div class="form-group radio_questions">
                                                <label>2. Dịch vụ bán hàng
                                                    <input name="category" type="radio" value="Dịch vụ bán hàng" class="icheck required">
                                                </label>
                                            </div>
                                            <div class="form-group radio_questions">
                                                <label>3. Kế toán
                                                    <input name="category" type="radio" value="Kế toán" class="icheck required">
                                                </label>
                                            </div>
                                            <div class="form-group radio_questions">
                                                <label>4. Khác
                                                    <input name="category" type="radio" value="Khác" class="icheck required">
                                                </label>
                                            </div>

                                        </div><!-- /step 1-->

                                        <div class="step">
                                            <h3 class="main_question"><strong>2/4</strong>Vấn đề bạn đang gặp phải?</h3>
                                            <div class="form-group textarea_info">
                                                <label>Mô tả vấn đề</label>
                                                <textarea name="addtional_info" class="form-control" style="height:150px;" placeholder="Vui lòng ghi rõ..."></textarea>
                                            </div>
                                        </div><!-- /step 2-->

                                        <div class="step">
                                            <h3 class="main_question"><strong>3/4</strong>Thông tin bổ sung</h3>

                                            <div class="row">

                                                <div class="col-lg-10">
                                                    <div class="form-group select">
                                                        <label>Tự đánh giá mức độ khẩn cấp cho vấn đề: (1 bình thường - 3 nghiêm trọng)</label>
                                                        <div class="styled-select">
                                                            <select class="required" name="level_problem">
                                                                <option value="" selected>-Chọn-</option>
                                                                <option value="Bình thường">1</option>
                                                                <option value="Quan trọng">2</option>
                                                                <option value="Nghiêm trọng">3</option>
                                                            </select>
                                                        </div>
                                                    </div><!-- /select-->

                                                    <div class="form-group select">
                                                        <label>Bạn có phương án giải quyết không?</label>
                                                        <div class="styled-select">
                                                            <select class="required" name="select_2">
                                                                <option value="" selected>-Chọn-</option>
                                                                <option value="Hosting Plan 1 year + Mysql database 500MB">Có</option>
                                                                <option value="Hosting Plan 2 year + Mysql database 500MB">Không</option>
                                                            </select>
                                                        </div>
                                                    </div><!-- /select-->

                                                    <div class="form-group select">
                                                        <label>Bạn muốn gửi kiến nghị ẩn danh hay không?</label>
                                                        <div class="styled-select">
                                                            <select class="required" name="select_3">
                                                                <option value="" selected>-Chọn-</option>
                                                                <option value="Mailchimp">Có</option>
                                                                <option value="CampaignMonitor">Không</option>
                                                            </select>
                                                        </div>
                                                    </div><!-- /select-->
                                                </div>
                                            </div><!-- /row-->
                                        </div><!-- /step 3-->

                                        <div class="submit step">

                                            <h3 class="main_question"><strong>4/4</strong>Hoàn tất thông tin:</h3>
                                            <p><i>*Nếu bạn chọn đăng ẩn danh, có thể bỏ qua bước này</i></p>
                                            <div class="row">

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="text" name="lastname" class=" form-control" placeholder="Tên">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" name="telephone" class=" form-control" placeholder="Số điện thoại">
                                                    </div>
                                                </div><!-- /col-sm-6 -->

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <input type="email" name="email" class=" form-control" placeholder="Địa chỉ email">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="styled-select">
                                                            <select name="country">
                                                                <option value="" selected>Thuộc bộ phận</option>
                                                                <option value="Marketing">Marketing</option>
                                                                <option value="Sale">Sale</option>
                                                                <option value="Accountant">Accountant</option>
                                                                <option value="Other">Khác</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div><!-- /col-sm-6 -->
                                            </div><!-- /row -->

                                            <div class="form-group checkbox_questions">
                                                <input name="terms" type="checkbox" class="icheck required" value="yes">
                                                <label>Tôi đồng ý với <a href="#" data-toggle="modal" data-target="#terms-txt">điều khoản và quy định</a> của công ty Mastertran.
                                                </label>
                                            </div>

                                        </div><!-- /step 4-->

                                    </div><!-- /middle-wizard -->
                                    <div id="bottom-wizard">
                                        <button type="button" name="backward" class="backward">Trở lại </button>
                                        <button type="button" name="forward" class="forward">Tiếp</button>
                                        <button type="submit" name="process" class="submit">Gửi kiến nghị</button>
                                    </div><!-- /bottom-wizard -->
                                </form>
                            </div><!-- /Wizard container -->

                        </div><!-- /col -->
                    </div><!-- /row -->
                </div><!-- /TAB 1:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

                <div class="tab-pane fade" id="tab_2">
                    <div class="subheader" id="about"></div>
                    <div class="row">
                        <div class="col-lg-8">
                            <h2>Chào mừng đến với LeaderTalk Mastertran</h2>
                            <p class="lead">An mei sadipscing dissentiet, eos ea partem viderer facilisi. Brute nostrud democritum in vis, nam ei erat zril mediocrem. No postea diceret vix. Mei eu scripta dolorum voluptatibus, id omnes repudiare pri.</p>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="box_feat" id="icon_1">
                                        <span></span>
                                        <h3>Responsive site design</h3>
                                        <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box_feat" id="icon_2">
                                        <span></span>
                                        <h3>Web site check</h3>
                                        <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel.</p>
                                    </div>
                                </div>
                            </div><!-- /row -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="box_feat" id="icon_3">
                                        <h3>Email campaigns</h3>
                                        <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box_feat" id="icon_4">
                                        <h3>Seo optimization</h3>
                                        <p>Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel.</p>
                                    </div>
                                </div>
                            </div><!-- /row -->
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="about_info">
                                        <i class="pe-7s-news-paper"></i>
                                        <h4>A brief about Quote<span>Suas summo id sed, erat erant oporteat cu pri.</span></h4>
                                        <p>Cum iusto nonumes dignissim ad, movet vocent ceteros nec ut. Eu putent utroque ius, ei usu purto doctus, ludus nostrud consectetuer ex pri. Maiorum petentium similique duo id. Sea ex nostro offendit, ius sumo electram theophrastus et. Nam eu dolore aliquid laoreet, ei eos tacimates assueverit inciderint. His deserunt recteque consequat in. Vis mucius virtute consequat ad, suavitate interesset an mei, oporteat temporibus at sea.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="about_info">
                                        <i class="pe-7s-light"></i>
                                        <h4>Mission<span>Suas summo id sed, erat erant oporteat cu pri.</span></h4>
                                        <p>Cum iusto nonumes dignissim ad, movet vocent ceteros nec ut. Eu putent utroque ius, ei usu purto doctus, ludus nostrud consectetuer ex pri. Maiorum petentium similique duo id. Sea ex nostro offendit, ius sumo electram theophrastus et. Nam eu dolore aliquid laoreet, ei eos tacimates assueverit inciderint. His deserunt recteque consequat in. Vis mucius virtute consequat ad, suavitate interesset an mei, oporteat temporibus at sea.</p>
                                    </div>
                                </div>
                            </div><!-- /row -->
                        </div><!-- /col -->

                        <aside class="col-lg-4">
                            <div class="more_padding_left">
                                <div class="widget" id="review">
                                    <h4>reviews</h4>
                                    <div class="owl-carousel owl-theme add_bottom_30">
                                        <div class="item">
                                            <blockquote class="testimonial">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Donec hendrerit vehicula est, in consequat. Donec hendrerit vehicula est, in consequat.
                                                </p>
                                            </blockquote>
                                            <div class="testimonial-arrow-down">
                                            </div>
                                            <div class="testimonial-author">
                                                <div class="img-thumbnail img-thumbnail-small">
                                                    <img src="img/avatar1.jpg" alt="">
                                                </div>
                                                <p>
                                                    <strong>Mark Smith</strong><span>October 2016</span>
                                                </p>
                                            </div>
                                        </div><!-- /item -->
                                        <div class="item">
                                            <blockquote class="testimonial">
                                                <p>
                                                    Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Donec hendrerit vehicula est, in consequat. Donec hendrerit vehicula est, in consequat.
                                                </p>
                                            </blockquote>
                                            <div class="testimonial-arrow-down">
                                            </div>
                                            <div class="testimonial-author">
                                                <div class="img-thumbnail img-thumbnail-small">
                                                    <img src="img/avatar2.jpg" alt="">
                                                </div>
                                                <p>
                                                    <strong>Mark Smith</strong><span>September 2016</span>
                                                </p>
                                            </div>
                                        </div><!-- /item -->
                                        <div class="item">
                                            <blockquote class="testimonial">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Donec hendrerit vehicula est, in consequat.
                                                </p>
                                            </blockquote>
                                            <div class="testimonial-arrow-down">
                                            </div>
                                            <div class="testimonial-author">
                                                <div class="img-thumbnail img-thumbnail-small">
                                                    <img src="img/avatar3.jpg" alt="">
                                                </div>
                                                <p>
                                                    <strong>Mark Smith</strong><span>July 2016</span>
                                                </p>
                                            </div>
                                        </div><!-- /item -->
                                    </div><!-- /carousel -->
                                </div><!-- /reviews -->
                                <div class="widget" id="gallery">
                                    <h4>gallery</h4>
                                    <ul class="magnific-gallery">
                                        <li>
                                            <a href="{{asset('assets/img/gallery/large_1.jpg')}}" title="image title">
                                                <figure><img src="img/gallery/thumb_1.jpg" alt="thumb"></figure>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{asset('assets/img/gallery/large_2.jpg')}}" title="image title">
                                                <figure><img src="img/gallery/thumb_2.jpg" alt="thumb"></figure>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{asset('assets/img/gallery/large_3.jpg')}}" title="image title">
                                                <figure><img src="img/gallery/thumb_3.jpg" alt="thumb"></figure>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{asset('assets/img/gallery/large_4.jpg')}}" title="image title">
                                                <figure><img src="{{asset('assets/img/gallery/thumb_2.jpg')}}" alt="thumb"></figure>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{asset('assets/img/gallery/large_5.jpg')}}" title="image title">
                                                <figure><img src="{{asset('assets/img/gallery/thumb_3.jpg')}}" alt="thumb"></figure>
                                            </a>
                                        </li>
                                    </ul>
                                </div><!-- /gallery -->
                                <div class="widget" id="follow">
                                    <h4>follow us</h4>
                                    <ul>
                                        <li><a href="#"><i class="icon-facebook"></i>Facebook</a></li>
                                        <li><a href="#"><i class="icon-twitter"></i>Twitter</a></li>
                                        <li><a href="#"><i class="icon-google"></i>Google plus</a></li>
                                        <li><a href="#"><i class="icon-instagram"></i>Instagram</a></li>
                                    </ul>
                                </div><!-- /follow -->
                            </div><!-- /more padding left -->
                        </aside>
                    </div><!-- /row -->
                </div><!-- /TAB 2:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

                <div class="tab-pane fade" id="tab_3">

                    <div id="map_contact"></div><!-- /map -->

                    <div id="contact_info">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="box_contact">
                                    <i class="pe-7s-map-marker"></i>
                                    <h4>Address</h4>
                                    <p>Văn phòng giao dịch.</p>
                                    <p>Tầng 06, tháp A, tòa nhà Central Point số 219 Trung Kính, Phường Yên Hòa, Quận Cầu Giấy, TP Hà Nội</p>
                                    <a href="https://www.google.com/maps/dir//11+5th+Ave,+New+York,+NY+10003,+Stati+Uniti/@40.7322935,-73.9981148,17z/data=!4m9!4m8!1m0!1m5!1m1!1s0x89c25990b3af8bb9:0x854ae1d3553155!2m2!1d-73.9959261!2d40.7322935!3e0" class="btn_1" target="_blank">Get directions</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box_contact">
                                    <i class="pe-7s-mail-open-file"></i>
                                    <h4>Email and website</h4>
                                    <p>Vui lòng liên hệ trong giờ hành chính để được xử lý nhanh nhất.</p>
                                    <p>
                                        <strong>Email:</strong> <a href="#0">baonn@doppelherz.vn</a><br>
                                        <strong>Website:</strong> <a href="#0">https://doppelherz.vn</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="box_contact">
                                    <i class="pe-7s-call"></i>
                                    <h4>Thông tin</h4>
                                    <p>0105381169 Giấy phép: Đăng ký thay đổi lần thứ 8, ngày 28 tháng 12 năm 2021</p>
                                    <p>
                                        <strong>Tel:</strong> <a href="#0">+18001770</a><br>
                                        <strong>Fax:</strong> <a href="#0">+18001770</a>
                                    </p>
                                </div>
                            </div>
                        </div><!-- / row-->
                        <hr>
                        <div id="social">
                            <ul>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-google"></i></a></li>
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                            </ul>
                        </div><!-- /social -->
                    </div>
                </div><!-- /TAB 3:::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: -->

            </div><!-- /tab content -->
        </div><!-- /container-fluid -->
    </div><!-- /wrapper_in -->
</div><!-- /main_container -->

<div id="additional_links">
    <ul>
        <li>© 2022 Sweetsica</li>
        <li><a href="https://zalo.me/0327350489" class="animated_link">Liên hệ tác giả</a></li>
{{--        <li><a href="index_2.html" class="animated_link">Demo Slider</a></li>--}}
{{--        <li><a href="index_3.html" class="animated_link">With UPLOAD</a></li>--}}
{{--        <li><a href="index_4.html" class="animated_link"><With></With> Branch</a></li>--}}
{{--        <li><a href="index_5.html" class="animated_link">Full Page View</a></li>--}}
{{--        <li><a href="shortcodes.html" class="animated_link">Shortcodes</a></li>--}}
    </ul>
</div><!-- /add links -->

<!-- Modal terms -->
<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Terms and conditions</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn_1" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- SCRIPTS -->
<!-- Jquery-->
<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<!-- Common script -->
<script src="{{asset('assets/js/common_scripts_min.js')}}"></script>
<!-- Theme script -->
<script src="{{asset('assets/js/functions.js')}}"></script>
<!-- Google map -->
<script src="http://maps.googleapis.com/maps/api/js')}}"></script>
<script src="{{asset('assets/js/mapmarker.jquery.js')}}"></script>
<script src="{{asset('assets/js/mapmarker_func.jquery.js')}}"></script>

</body>

</html>
