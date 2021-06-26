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
    <!-- testimonial-section -->
    <section class="testimonial-section centred sec-pad bg-color-1">
        <div class="auto-container">
            <div class="sec-title centred">
                <div class="top-title">
                    <div class="shape">
                        <div class="line line-1"></div>
                        <div class="line line-2"></div>
                        <div class="line line-3"></div>
                        <div class="line line-4"></div>
                        <div class="bg-shape" style="background-image: url(/assets/images/icons/bg-shape-5.png);"></div>
                    </div>
                    <p>Müşteri Yorumları</p>
                </div>

            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">

                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="quote-icon"><i class="icon-left-quote"></i></div>
                        <h4>Raff Leonard</h4>
                        <span class="designation">The Craftworks, Founder</span>
                        <p>Blackcats service team is very prompt, courteous and professional. They are committed to doing a quality job & the service</p>
                        <figure class="thumb-box"><img src="/assets/images/resource/testimonial-1.png" alt="SEO HEDEF KELİME 1 + içerik başlığı"></figure>
                    </div>
                </div>
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <div class="quote-icon"><i class="icon-left-quote"></i></div>
                        <h4>Lamont Shaun</h4>
                        <span class="designation">The Humming Tree ,Manager</span>
                        <p>We have been using the security system of blackcats from past 5 years, which is working fine without any issues & good service.</p>
                        <figure class="thumb-box"><img src="/assets/images/resource/testimonial-2.png" alt="SEO HEDEF KELİME 1 + içerik başlığı"></figure>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <!-- testimonial-section end -->
    <!-- html modül -->
    <section class="shop-details sec-pad">
        <div class="auto-container">


            <div class="related-products">

                <div class="row clearfix">
                    HTML MODÜL  (Facebook page plugin, instagram embed  vb. için panelden script,html eklenen modül   )


                </div>
            </div>
        </div>
    </section>
    <!-- html modül -->


    <!-- HARİTA MODÜL ,  Aktif eidldiğinde iletişim kısmına girilen harita kodunu gösterecek şekilde ayarlanacak -->
    <section class="google-map-section">
        <div class="map-inner">
            <div
                class="google-map"
                id="contact-google-map"
                data-map-lat="40.712776"
                data-map-lng="-74.005974"
                data-icon-path="/assets/images/icons/map-marker.png"
                data-map-title="Brooklyn, New York, United Kingdom"
                data-map-zoom="12"
                data-markers='{
                        "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","/assets/images/icons/map-marker.png"]
                    }'>

            </div>
        </div>
    </section>
    <!-- HARİTA MODÜL  -->

@endsection
