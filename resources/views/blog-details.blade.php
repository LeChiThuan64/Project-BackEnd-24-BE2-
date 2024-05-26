@extends('blog.app')
@section('title', 'blog details')
@section('content')
    <!-- ============================================== HEADER : END ============================================== -->
    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="{{ url('home') }}">Home</a></li>
                    <li class='active'>Blog Details</li>
                </ul>
            </div><!-- /.breadcrumb-inner -->
        </div><!-- /.container -->
    </div><!-- /.breadcrumb -->

    <div class="body-content">
        <div class="container">
            <div class="row">
                <div class="blog-page">
                    <div class="col-md-12">
                        <div class="blog-post wow fadeInUp">
                            <h1>{{ $blog->title }}</h1>
                            <span class="author">Admin</span>
                            <span class="review">7 Comments</span>
                            <span class="date-time">{{ $blog->create_at }}</span>
                            <?php echo $blog->content; ?>
                            <div class="social-media">
                                <span>share post:</span>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href=""><i class="fa fa-rss"></i></a>
                                <a href="" class="hidden-xs"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                        <div class="blog-review wow fadeInUp" style="margin-top:20px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <h3 class="title-review-comments">16 comments</h3>
                                </div>

                                <div class="col-md-10 col-sm-10 blog-comments outer-bottom-xs comment-view">
                                    @foreach ($comments as $comment)
                                        <div class="blog-comments inner-bottom-xs">
                                            <h4>{{$comment->user_name}}</h4>
                                            <span class="review-action pull-right">
                                                {{$comment->create_at}}&sol;
                                                <a href=""> Repost</a> &sol;
                                                <a href=""> Reply</a>
                                            </span>
                                            <p>{{$comment->content}}</p>
                                        </div>
                                    @endforeach
                                    {{-- <div class="blog-comments-responce outer-top-xs ">
                                        <div class="row">
                                            <div class="col-md-2 col-sm-2">
                                            </div>
                                            <div class="col-md-10 col-sm-10 outer-bottom-xs">
                                                <div class="blog-sub-comments inner-bottom-xs">
                                                    <h4>Sarah Smith</h4>
                                                    <span class="review-action pull-right">
                                                        03 Day ago &sol;
                                                        <a href=""> Repost</a> &sol;
                                                        <a href=""> Reply</a>
                                                    </span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                                                        ad minim veniam</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="post-load-more col-md-12"><a class="btn btn-upper btn-primary"
                                        href="#">Load more</a></div>
                            </div>
                        </div>
                        <div class="blog-write-comment outer-bottom-xs outer-top-xs">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Leave A Comment</h4>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label class="info-title" for="exampleInputComments">Your Comments
                                                <span>*</span></label>
                                            <textarea style="width: 350%" class="form-control unicase-form-control content" id="exampleInputComments"></textarea>
                                    </div>
                                    <div class="col-md-12 outer-bottom-small m-t-20">
                                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button"
                                           id="btn-send" value="{{ $blog->id }}">Submit
                                            Comment </button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 sidebar">



                        <div class="sidebar-module-container">
                            <div class="search-area outer-bottom-small">
                                <form>
                                    <div class="control-group">
                                        <input placeholder="Type to search" class="search-field">
                                        <a href="#" class="search-button"></a>
                                    </div>
                                </form>
                            </div>

                            <div class="home-banner outer-top-n outer-bottom-xs">
                                <img src="{{ asset('app\images\banners\LHS-banner.jpg') }}" alt="Image">
                            </div>
                            <!-- ==============================================CATEGORY============================================== -->
                            <div class="sidebar-widget outer-bottom-xs wow fadeInUp">
                                <h3 class="section-title">Category</h3>
                                <div class="sidebar-widget-body m-t-10">
                                    <div class="accordion">
                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a href="#collapseOne" data-toggle="collapse"
                                                    class="accordion-toggle collapsed">
                                                    Camera
                                                </a>
                                            </div><!-- /.accordion-heading -->
                                            <div class="accordion-body collapse" id="collapseOne" style="height: 0px;">
                                                <div class="accordion-inner">
                                                    <ul>
                                                        <li><a href="#">gaming</a></li>
                                                        <li><a href="#">office</a></li>
                                                        <li><a href="#">kids</a></li>
                                                        <li><a href="#">for women</a></li>
                                                    </ul>
                                                </div><!-- /.accordion-inner -->
                                            </div><!-- /.accordion-body -->
                                        </div><!-- /.accordion-group -->

                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a href="#collapseTwo" data-toggle="collapse"
                                                    class="accordion-toggle collapsed">
                                                    Desktops
                                                </a>
                                            </div><!-- /.accordion-heading -->
                                            <div class="accordion-body collapse" id="collapseTwo" style="height: 0px;">
                                                <div class="accordion-inner">
                                                    <ul>
                                                        <li><a href="#">gaming</a></li>
                                                        <li><a href="#">office</a></li>
                                                        <li><a href="#">kids</a></li>
                                                        <li><a href="#">for women</a></li>
                                                    </ul>
                                                </div><!-- /.accordion-inner -->
                                            </div><!-- /.accordion-body -->
                                        </div><!-- /.accordion-group -->

                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a href="#collapseThree" data-toggle="collapse"
                                                    class="accordion-toggle collapsed">
                                                    Pants
                                                </a>
                                            </div><!-- /.accordion-heading -->
                                            <div class="accordion-body collapse" id="collapseThree" style="height: 0px;">
                                                <div class="accordion-inner">
                                                    <ul>
                                                        <li><a href="#">gaming</a></li>
                                                        <li><a href="#">office</a></li>
                                                        <li><a href="#">kids</a></li>
                                                        <li><a href="#">for women</a></li>
                                                    </ul>
                                                </div><!-- /.accordion-inner -->
                                            </div><!-- /.accordion-body -->
                                        </div><!-- /.accordion-group -->

                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a href="#collapseFour" data-toggle="collapse"
                                                    class="accordion-toggle collapsed">
                                                    Bags
                                                </a>
                                            </div><!-- /.accordion-heading -->
                                            <div class="accordion-body collapse" id="collapseFour" style="height: 0px;">
                                                <div class="accordion-inner">
                                                    <ul>
                                                        <li><a href="#">gaming</a></li>
                                                        <li><a href="#">office</a></li>
                                                        <li><a href="#">kids</a></li>
                                                        <li><a href="#">for women</a></li>
                                                    </ul>
                                                </div><!-- /.accordion-inner -->
                                            </div><!-- /.accordion-body -->
                                        </div><!-- /.accordion-group -->

                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a href="#collapseFive" data-toggle="collapse"
                                                    class="accordion-toggle collapsed">
                                                    Hats
                                                </a>
                                            </div><!-- /.accordion-heading -->
                                            <div class="accordion-body collapse" id="collapseFive" style="height: 0px;">
                                                <div class="accordion-inner">
                                                    <ul>
                                                        <li><a href="#">gaming</a></li>
                                                        <li><a href="#">office</a></li>
                                                        <li><a href="#">kids</a></li>
                                                        <li><a href="#">for women</a></li>
                                                    </ul>
                                                </div><!-- /.accordion-inner -->
                                            </div><!-- /.accordion-body -->
                                        </div><!-- /.accordion-group -->

                                        <div class="accordion-group">
                                            <div class="accordion-heading">
                                                <a href="#collapseSix" data-toggle="collapse"
                                                    class="accordion-toggle collapsed">
                                                    Accessories
                                                </a>
                                            </div><!-- /.accordion-heading -->
                                            <div class="accordion-body collapse" id="collapseSix" style="height: 0px;">
                                                <div class="accordion-inner">
                                                    <ul>
                                                        <li><a href="#">gaming</a></li>
                                                        <li><a href="#">office</a></li>
                                                        <li><a href="#">kids</a></li>
                                                        <li><a href="#">for women</a></li>
                                                    </ul>
                                                </div><!-- /.accordion-inner -->
                                            </div><!-- /.accordion-body -->
                                        </div><!-- /.accordion-group -->

                                    </div><!-- /.accordion -->
                                </div><!-- /.sidebar-widget-body -->
                            </div><!-- /.sidebar-widget -->
                            <!-- ============================================== CATEGORY : END ============================================== -->
                            <div class="sidebar-widget outer-bottom-xs wow fadeInUp">
                                <h3 class="section-title">tab widget</h3>
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#popular" data-toggle="tab">popular post</a></li>
                                    <li><a href="#recent" data-toggle="tab">recent post</a></li>
                                </ul>
                                <div class="tab-content" style="padding-left:0">
                                    <div class="tab-pane active m-t-20" id="popular">
                                        <div class="blog-post inner-bottom-30 ">
                                            <img class="img-responsive"
                                                src="{{ asset('app\images\blog-post\blog_big_01.jpg') }}" alt="">
                                            <h4><a href="blog-details.html">Simple Blog Post</a></h4>
                                            <span class="review">6 Comments</span>
                                            <span class="date-time">12/06/16</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>

                                        </div>
                                        <div class="blog-post">
                                            <img class="img-responsive"
                                                src="{{ asset('app\images\blog-post\blog_big_02.jpg') }}" alt="">
                                            <h4><a href="blog-details.html">Simple Blog Post</a></h4>
                                            <span class="review">6 Comments</span>
                                            <span class="date-time">23/06/16</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>

                                        </div>
                                    </div>

                                    <div class="tab-pane m-t-20" id="recent">
                                        <div class="blog-post inner-bottom-30">
                                            <img class="img-responsive"
                                                src="{{ asset('app\images\blog-post\blog_big_03.jpg') }}" alt="">
                                            <h4><a href="blog-details.html">Simple Blog Post</a></h4>
                                            <span class="review">6 Comments</span>
                                            <span class="date-time">5/06/16</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>

                                        </div>
                                        <div class="blog-post">
                                            <img class="img-responsive"
                                                src="{{ asset('app\images\blog-post\blog_big_01.jpg') }}" alt="">
                                            <h4><a href="blog-details.html">Simple Blog Post</a></h4>
                                            <span class="review">6 Comments</span>
                                            <span class="date-time">10/07/16</span>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================== PRODUCT TAGS ============================================== -->
                            <div class="sidebar-widget product-tag wow fadeInUp">
                                <h3 class="section-title">Product tags</h3>
                                <div class="sidebar-widget-body outer-top-xs">
                                    <div class="tag-list">
                                        <a class="item" title="Phone" href="category.html">Phone</a>
                                        <a class="item active" title="Vest" href="category.html">Vest</a>
                                        <a class="item" title="Smartphone" href="category.html">Smartphone</a>
                                        <a class="item" title="Furniture" href="category.html">Furniture</a>
                                        <a class="item" title="T-shirt" href="category.html">T-shirt</a>
                                        <a class="item" title="Sweatpants" href="category.html">Sweatpants</a>
                                        <a class="item" title="Sneaker" href="category.html">Sneaker</a>
                                        <a class="item" title="Toys" href="category.html">Toys</a>
                                        <a class="item" title="Rose" href="category.html">Rose</a>
                                    </div><!-- /.tag-list -->
                                </div><!-- /.sidebar-widget-body -->
                            </div><!-- /.sidebar-widget -->
                            <!-- ============================================== PRODUCT TAGS : END ============================================== -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================= FOOTER ============================================================= -->
@endsection
