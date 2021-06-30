@extends('theme.master')
@section('content')
    {!! $html !!}

    <!-- SEKTÖRLER -->
    <section class="project-style-two sec-pad">
        <div class="bg-layer" style="background-image: url(/assets/images/background/team-bg.jpg);"></div>
        <div class="project-tab">
            <div class="auto-container">
                <div class="sec-title-two light">
                    <p>Latest Projects</p>
                    <h2>Check our innovation projects</h2>
                    <a href="project.html" class="link">View All Projects<i class="fas fa-angle-right"></i></a>
                </div>
                <div class="tab-btn-box centred">
                    <ul class="tab-btns product-tab-btns clearfix">
                        <li class="p-tab-btn active-btn" data-tab="#tab-1">All Category<span>(14)</span></li>
                        <li class="p-tab-btn" data-tab="#tab-2">Application</li>
                        <li class="p-tab-btn" data-tab="#tab-3">Cloud Security</li>
                        <li class="p-tab-btn" data-tab="#tab-4">Network</li>
                        <li class="p-tab-btn" data-tab="#tab-5">Infrastructure</li>
                        <li class="p-tab-btn" data-tab="#tab-6">Website</li>
                    </ul>
                </div>
            </div>
            <div class="outer-container">
                <div class="p-tabs-content">
                    <div class="p-tab active-tab" id="tab-1">
                        <div class="five-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-4.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Application</p>
                                            <h4><a href="project-details.html">Dark Data Discovery</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-5.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Network</p>
                                            <h4><a href="project-details.html">Security Incident Report</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-5.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-6.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Website</p>
                                            <h4><a href="project-details.html">Container Security</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-6.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-7.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Clound Security</p>
                                            <h4><a href="project-details.html">Application Analysis</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-7.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-8.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Infrastructure</p>
                                            <h4><a href="project-details.html">Business Protection</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-8.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-4.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Application</p>
                                            <h4><a href="project-details.html">Dark Data Discovery</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-5.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Network</p>
                                            <h4><a href="project-details.html">Security Incident Report</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-5.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-6.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Website</p>
                                            <h4><a href="project-details.html">Container Security</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-6.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-7.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Clound Security</p>
                                            <h4><a href="project-details.html">Application Analysis</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-7.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-8.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Infrastructure</p>
                                            <h4><a href="project-details.html">Business Protection</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-8.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-tab" id="tab-2">
                        <div class="five-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-4.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Application</p>
                                            <h4><a href="project-details.html">Dark Data Discovery</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-5.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Network</p>
                                            <h4><a href="project-details.html">Security Incident Report</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-5.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-6.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Website</p>
                                            <h4><a href="project-details.html">Container Security</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-6.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-7.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Clound Security</p>
                                            <h4><a href="project-details.html">Application Analysis</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-7.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-8.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Infrastructure</p>
                                            <h4><a href="project-details.html">Business Protection</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-8.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-4.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Application</p>
                                            <h4><a href="project-details.html">Dark Data Discovery</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-5.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Network</p>
                                            <h4><a href="project-details.html">Security Incident Report</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-5.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-6.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Website</p>
                                            <h4><a href="project-details.html">Container Security</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-6.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-7.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Clound Security</p>
                                            <h4><a href="project-details.html">Application Analysis</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-7.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-8.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Infrastructure</p>
                                            <h4><a href="project-details.html">Business Protection</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-8.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-tab" id="tab-3">
                        <div class="five-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-4.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Application</p>
                                            <h4><a href="project-details.html">Dark Data Discovery</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-5.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Network</p>
                                            <h4><a href="project-details.html">Security Incident Report</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-5.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-6.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Website</p>
                                            <h4><a href="project-details.html">Container Security</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-6.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-7.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Clound Security</p>
                                            <h4><a href="project-details.html">Application Analysis</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-7.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-8.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Infrastructure</p>
                                            <h4><a href="project-details.html">Business Protection</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-8.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-4.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Application</p>
                                            <h4><a href="project-details.html">Dark Data Discovery</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-5.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Network</p>
                                            <h4><a href="project-details.html">Security Incident Report</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-5.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-6.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Website</p>
                                            <h4><a href="project-details.html">Container Security</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-6.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-7.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Clound Security</p>
                                            <h4><a href="project-details.html">Application Analysis</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-7.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-8.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Infrastructure</p>
                                            <h4><a href="project-details.html">Business Protection</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-8.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-tab" id="tab-4">
                        <div class="five-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-4.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Application</p>
                                            <h4><a href="project-details.html">Dark Data Discovery</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-5.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Network</p>
                                            <h4><a href="project-details.html">Security Incident Report</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-5.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-6.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Website</p>
                                            <h4><a href="project-details.html">Container Security</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-6.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-7.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Clound Security</p>
                                            <h4><a href="project-details.html">Application Analysis</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-7.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-8.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Infrastructure</p>
                                            <h4><a href="project-details.html">Business Protection</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-8.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-4.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Application</p>
                                            <h4><a href="project-details.html">Dark Data Discovery</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-5.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Network</p>
                                            <h4><a href="project-details.html">Security Incident Report</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-5.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-6.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Website</p>
                                            <h4><a href="project-details.html">Container Security</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-6.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-7.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Clound Security</p>
                                            <h4><a href="project-details.html">Application Analysis</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-7.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-8.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Infrastructure</p>
                                            <h4><a href="project-details.html">Business Protection</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-8.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-tab" id="tab-5">
                        <div class="five-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-4.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Application</p>
                                            <h4><a href="project-details.html">Dark Data Discovery</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-5.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Network</p>
                                            <h4><a href="project-details.html">Security Incident Report</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-5.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-6.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Website</p>
                                            <h4><a href="project-details.html">Container Security</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-6.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-7.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Clound Security</p>
                                            <h4><a href="project-details.html">Application Analysis</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-7.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-8.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Infrastructure</p>
                                            <h4><a href="project-details.html">Business Protection</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-8.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-4.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Application</p>
                                            <h4><a href="project-details.html">Dark Data Discovery</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-5.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Network</p>
                                            <h4><a href="project-details.html">Security Incident Report</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-5.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-6.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Website</p>
                                            <h4><a href="project-details.html">Container Security</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-6.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-7.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Clound Security</p>
                                            <h4><a href="project-details.html">Application Analysis</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-7.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-8.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Infrastructure</p>
                                            <h4><a href="project-details.html">Business Protection</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-8.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-tab" id="tab-6">
                        <div class="five-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-4.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Application</p>
                                            <h4><a href="project-details.html">Dark Data Discovery</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-5.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Network</p>
                                            <h4><a href="project-details.html">Security Incident Report</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-5.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-6.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Website</p>
                                            <h4><a href="project-details.html">Container Security</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-6.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-7.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Clound Security</p>
                                            <h4><a href="project-details.html">Application Analysis</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-7.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-8.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Infrastructure</p>
                                            <h4><a href="project-details.html">Business Protection</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-8.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-4.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Application</p>
                                            <h4><a href="project-details.html">Dark Data Discovery</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-5.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Network</p>
                                            <h4><a href="project-details.html">Security Incident Report</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-5.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-6.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Website</p>
                                            <h4><a href="project-details.html">Container Security</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-6.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-7.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Clound Security</p>
                                            <h4><a href="project-details.html">Application Analysis</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-7.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <figure class="image-box"><img src="/assets/images/gallery/project-8.jpg" alt=""></figure>
                                    <div class="content-box">
                                        <div class="text">
                                            <p>Infrastructure</p>
                                            <h4><a href="project-details.html">Business Protection</a></h4>
                                        </div>
                                        <ul class="link-box">
                                            <li>
                                                <a href="/assets/images/gallery/project-8.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-zoom-in"></i><span>Full View</span></a>
                                            </li>
                                            <li>
                                                <a href="project-details.html"><i class="icon-link"></i><span>More Details</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SEKTÖRLER -->


@endsection
