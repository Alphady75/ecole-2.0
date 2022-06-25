@extends('layout.app')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url('{{ asset('assets/img/tech.jpg') }}');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Ateliers pratiques</h2>
                <ol>
                    <li><a href="/">Accueil</a></li>
                    <li>Ateliers pratiques</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 posts-list">

                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100">

                            <div class="post-img position-relative overflow-hidden">
                                <iframe class="video-fluid" alt="" src="https://www.youtube.com/embed/W6NZfCO5SIk" frameborder="0"
                                    allowfullscreen style="width: 100%"></iframe>
                                {{-- <span class="post-date">December 12</span> --}}
                            </div>
                            <div class="post-content d-flex flex-column">

                                <!--<h3 class="post-title">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</h3>-->

                                {{-- <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <!-- <i class="bi bi-person"></i> <span class="ps-2">John Doe</span>-->
                                    </div>
                                    <span class="px-3 text-black-50"></span>
                                    <div class="d-flex align-items-center">
                                        <!--<i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>-->
                                    </div>
                                </div> --}}

                                <p>
                                    Similique neque nam consequuntur ad non maxime aliquam quas. Quibusdam animi
                                    praesentium. Aliquam et laboriosam eius aut nostrum quidem aliquid dicta.
                                </p>

                                <hr>

                                <a href="#blog-detail.html"> {{-- class="readmore stretched-link" --}}
                                    <span>en sasoir plus</span><i class="bi bi-arrow-right"></i>
                                </a>

                            </div>

                        </div>
                    </div><!-- End post list item -->

                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100">

                            <div class="post-img position-relative overflow-hidden">
                                <iframe class="video-fluid" alt="" src="https://www.youtube.com/embed/hKB-YGF14SY" frameborder="0"
                                    allowfullscreen style="width: 100%"></iframe>
                                {{-- <span class="post-date">December 12</span> --}}
                            </div>
                            <div class="post-content d-flex flex-column">

                                <!--<h3 class="post-title">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</h3>-->

                                {{-- <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <!-- <i class="bi bi-person"></i> <span class="ps-2">John Doe</span>-->
                                    </div>
                                    <span class="px-3 text-black-50"></span>
                                    <div class="d-flex align-items-center">
                                        <!--<i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>-->
                                    </div>
                                </div> --}}

                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam blanditiis voluptatem nisi ad nesciunt ipsam consectetur aperiam odio. Veritatis, fugit corporis. Ad ut, fugit corrupti delectus ea voluptates explicabo quidem!
                                </p>

                                <hr>

                                <a href="#blog-detail.html"> {{-- class="readmore stretched-link" --}}
                                    <span>en sasoir plus</span><i class="bi bi-arrow-right"></i>
                                </a>

                            </div>

                        </div>
                    </div><!-- End post list item -->

                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100">

                            <div class="post-img position-relative overflow-hidden">
                                <iframe class="video-fluid" alt="" src="https://www.youtube.com/embed/qz0aGYrrlhU" frameborder="0"
                                    allowfullscreen style="width: 100%"></iframe>
                                {{-- <span class="post-date">December 12</span> --}}
                            </div>
                            <div class="post-content d-flex flex-column">

                                <!--<h3 class="post-title">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</h3>-->

                                {{-- <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <!-- <i class="bi bi-person"></i> <span class="ps-2">John Doe</span>-->
                                    </div>
                                    <span class="px-3 text-black-50"></span>
                                    <div class="d-flex align-items-center">
                                        <!--<i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>-->
                                    </div>
                                </div> --}}

                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam blanditiis voluptatem nisi ad nesciunt ipsam consectetur aperiam odio. Veritatis, fugit corporis. Ad ut, fugit corrupti delectus ea voluptates explicabo quidem!
                                </p>

                                <hr>

                                <a href="#blog-detail.html"> {{-- class="readmore stretched-link" --}}
                                    <span>en sasoir plus</span><i class="bi bi-arrow-right"></i>
                                </a>

                            </div>

                        </div>
                    </div><!-- End post list item -->

                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100">

                            <div class="post-img position-relative overflow-hidden">
                                <iframe class="video-fluid" alt="" src="https://www.youtube.com/embed/HXV3zeQKqGY" frameborder="0"
                                    allowfullscreen style="width: 100%"></iframe>
                                {{-- <span class="post-date">December 12</span> --}}
                            </div>
                            <div class="post-content d-flex flex-column">

                                <!--<h3 class="post-title">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</h3>-->

                                {{-- <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <!-- <i class="bi bi-person"></i> <span class="ps-2">John Doe</span>-->
                                    </div>
                                    <span class="px-3 text-black-50"></span>
                                    <div class="d-flex align-items-center">
                                        <!--<i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>-->
                                    </div>
                                </div> --}}

                                <p>
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem, labore illo vero aliquid commodi, eveniet nam recusandae reprehenderit, fugit quisquam eos quos officia accusantium numquam fugiat velit ex tempora ipsum.
                                </p>

                                <hr>

                                <a href="#blog-detail.html"> {{-- class="readmore stretched-link" --}}
                                    <span>en sasoir plus</span><i class="bi bi-arrow-right"></i>
                                </a>

                            </div>

                        </div>
                    </div><!-- End post list item -->

                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100">

                            <div class="post-img position-relative overflow-hidden">
                                <iframe class="video-fluid" alt="" src="https://www.youtube.com/embed/Gbc3SwLOPsA" frameborder="0"
                                    allowfullscreen style="width: 100%"></iframe>
                                {{-- <span class="post-date">December 12</span> --}}
                            </div>
                            <div class="post-content d-flex flex-column">

                                <!--<h3 class="post-title">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</h3>-->

                                {{-- <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <!-- <i class="bi bi-person"></i> <span class="ps-2">John Doe</span>-->
                                    </div>
                                    <span class="px-3 text-black-50"></span>
                                    <div class="d-flex align-items-center">
                                        <!--<i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>-->
                                    </div>
                                </div> --}}

                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt et laudantium sed alias nisi voluptate numquam, odio, quis voluptates veritatis ullam aliquam corrupti ratione. Reiciendis praesentium a ab dolores voluptas.
                                </p>

                                <hr>

                                <a href="#blog-detail.html"> {{-- class="readmore stretched-link" --}}
                                    <span>en sasoir plus</span><i class="bi bi-arrow-right"></i>
                                </a>

                            </div>

                        </div>
                    </div><!-- End post list item -->

                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100">

                            <div class="post-img position-relative overflow-hidden">
                                <iframe class="video-fluid" alt="" src="https://www.youtube.com/embed/WwWgQ7ZXVkg" frameborder="0"
                                    allowfullscreen style="width: 100%"></iframe>
                                {{-- <span class="post-date">December 12</span> --}}
                            </div>
                            <div class="post-content d-flex flex-column">

                                <!--<h3 class="post-title">Dolorum optio tempore voluptas dignissimos cumque fuga qui quibusdam quia</h3>-->

                                {{-- <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <!-- <i class="bi bi-person"></i> <span class="ps-2">John Doe</span>-->
                                    </div>
                                    <span class="px-3 text-black-50"></span>
                                    <div class="d-flex align-items-center">
                                        <!--<i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>-->
                                    </div>
                                </div> --}}

                                <p>
                                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam repudiandae exercitationem hic! Ex, nam quis. Amet dolorem cumque laborum cum totam, et asperiores, inventore facilis eius harum quis obcaecati hic.
                                </p>

                                <hr>

                                <a href="#blog-detail.html"> {{-- class="readmore stretched-link" --}}
                                    <span>en sasoir plus</span><i class="bi bi-arrow-right"></i>
                                </a>

                            </div>

                        </div>
                    </div><!-- End post list item -->

                    

                    <!--</div> End blog posts list -->

                    <!--<div class="blog-pagination">
                  <ul class="justify-content-center">
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                  </ul>
                </div> End blog pagination

              </div>
            </section> -->
                    <!-- End Blog Section -->

    </main><!-- End #main -->
@endsection
