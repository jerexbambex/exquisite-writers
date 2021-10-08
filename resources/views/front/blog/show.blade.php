@extends('layouts.front.template')

@section('content')
    <!-- Breadcrumb -->
    <section class="bg-half-170 d-table w-100 bg-blue-light" style="background: url('images/bg/page.png') top center;">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row mt-5">
                <!-- /col -->
                <div class="col-lg-12">
                    <div class="title-heading text-center text-md-center">
                        <h3>Blog Post</h3>
                        <p class="text-muted text-center text-md-center mt-2 mb-0">
                            {{ $blog->title }}
                        </p>
                        <nav aria-label="breadcrumb" class="d-inline-block mt-2">
                            <ul class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="{{ route('blogIndex') }}">Blogs</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ $blog->id }}</li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </section>
    <!-- /Breadcrumb -->

    <!-- Blog -->
    <section class="blog-details-area pt-100 pb-50">
        <!-- Container -->
        <div class="container">
            <!-- row -->
            <div class="row justify-content-center">
                <!-- col -->
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-desc">
                        <div class="article-image">
                            <img src="{{ $blog->avatar() }}" alt="image">
                        </div>

                        <div class="article-content">
                            <div class="entry-meta">
                                <ul>
                                    <li>
                                        <i class="ri-folder-line"></i>
                                        <span>Category</span>
                                        @foreach ($blog->categories as $category)
                                            <button class="btn btn-sm btn-light">{{ $category->name }}</button>
                                        @endforeach
                                    </li>

                                    <li>
                                        <i class="ri-calendar-line"></i>
                                        <span>Last Updated</span>
                                        <a href="#">{{ $blog->updated_at->diffForHumans() }}</a>
                                    </li>
                                </ul>
                            </div>

                            <h1 class="mt-3">{{ $blog->title }}</h1>

                            {!! nl2br($blog->body) !!}
                        </div>

                        <div class="article-footer">
                            <div class="article-tags">
                                <span><i class="las la-tags"></i></span>
                                @foreach ($blog->categories as $category)
                                    <a href="#">{{ $category->name }}</a>,
                                @endforeach
                            </div>

                            <div class="article-share">
                                <ul class="social">
                                    <li><span>Share:</span></li>
                                    <li><a href="#" target="_blank"><i class="lab la-facebook-f"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="lab la-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="lab la-linkedin-in"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="lab la-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="article-author">
                            <div class="author-profile-header"></div>
                            <div class="author-profile">
                                <div class="author-profile-title">
                                    <img src="/assets/front/images/blog/user.png" class="shadow-sm" alt="image">
                                    <h4>Jason T. Williams</h4>
                                    <span class="d-block">Photographer, Author, Writer</span>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempus eleifend
                                        tortor, vel molestie orci feugiat sit amet. </p>
                                </div>
                            </div>
                        </div>

                        <div class="aloa-post-navigation">
                            <div class="prev-link-wrapper">
                                <div class="info-prev-link-wrapper">
                                    @if($previous !== null)
                                    <a href="{{ route('blogShow', $previous->path()) }}">
                                        <span class="image-prev">
                                            <img src="{{ $previous->avatar() }}" class="img-fluid" alt="image">
                                            <span class="post-nav-title">Prev</span>
                                        </span>

                                        <span class="prev-link-info-wrapper">
                                            <span class="prev-title">{{ $previous->title }}</span>
                                            <span class="meta-wrapper">
                                                <span class="date-post">{{ $previous->updated_at->diffForHumans() }}</span>
                                            </span>
                                        </span>
                                    </a>
                                    @endif
                                </div>
                            </div>

                            <div class="next-link-wrapper">
                                <div class="info-next-link-wrapper">
                                    @if($next !== null)
                                        <a href="{{ route('blogShow', $next->path()) }}">
                                            <span class="next-link-info-wrapper">
                                                <span class="next-title">{{ $next->title }}</span>
                                                <span class="meta-wrapper">
                                                    <span class="date-post">{{ $next->updated_at->diffForHumans() }}</span>
                                                </span>
                                            </span>

                                            <span class="image-next">
                                                <img src="{{ $next->avatar() }}" class="img-fluid" alt="image">
                                                <span class="post-nav-title">Next</span>
                                            </span>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        {{-- <div class="comments-area">
                            <h3 class="comments-title">2 Comments:</h3>

                            <ol class="comment-list">
                                <li class="comment">
                                    <div class="comment-body">
                                        <footer class="comment-meta">
                                            <div class="comment-author vcard">
                                                <img src="/assets/front/images/blog/comments1.png" class="avatar" alt="image">
                                                <b class="fn">John Jones</b>
                                                <span class="says">says:</span>
                                            </div>

                                            <div class="comment-metadata">
                                                <a href="#">
                                                    <span>Dec 15, 2020 at 11:24am</span>
                                                </a>
                                            </div>
                                        </footer>

                                        <div class="comment-content">
                                            <p>Lorem Ipsum has been the industry’s standard dummy text ever since the
                                                1500s, when an unknown printer took a galley of type and scrambled it to
                                                make a type specimen.</p>
                                        </div>

                                        <div class="reply">
                                            <a href="#" class="comment-reply-link">Reply</a>
                                        </div>
                                    </div>

                                    <ol class="children">
                                        <li class="comment">
                                            <div class="comment-body">
                                                <footer class="comment-meta">
                                                    <div class="comment-author vcard">
                                                        <img src="/assets/front/images/blog/comments2.png" class="avatar" alt="image">
                                                        <b class="fn">Steven Smith</b>
                                                        <span class="says">says:</span>
                                                    </div>

                                                    <div class="comment-metadata">
                                                        <a href="#">
                                                            <span>Dec 15, 2020 at 11:24am</span>
                                                        </a>
                                                    </div>
                                                </footer>

                                                <div class="comment-content">
                                                    <p>Lorem Ipsum has been the industry’s standard dummy text ever
                                                        since the 1500s, when an unknown printer took a galley of type
                                                        and scrambled it to make a type specimen.</p>
                                                </div>

                                                <div class="reply">
                                                    <a href="#" class="comment-reply-link">Reply</a>
                                                </div>
                                            </div>

                                            <ol class="children">
                                                <li class="comment">
                                                    <div class="comment-body">
                                                        <footer class="comment-meta">
                                                            <div class="comment-author vcard">
                                                                <img src="/assets/front/images/blog/me.png" class="avatar"
                                                                    alt="image">
                                                                <b class="fn">Sarah Taylor</b>
                                                                <span class="says">says:</span>
                                                            </div>

                                                            <div class="comment-metadata">
                                                                <a href="#">
                                                                    <span>Dec 15, 2020 at 11:24am</span>
                                                                </a>
                                                            </div>
                                                        </footer>

                                                        <div class="comment-content">
                                                            <p>Lorem Ipsum has been the industry’s standard dummy text
                                                                ever since the 1500s, when an unknown printer took a
                                                                galley of type and scrambled it to make a type specimen.
                                                            </p>
                                                        </div>

                                                        <div class="reply">
                                                            <a href="#" class="comment-reply-link">Reply</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                        </li>
                                    </ol>
                                </li>
                            </ol>

                            <div class="comment-respond">
                                <h3 class="comment-reply-title">Leave a Reply</h3>

                                <form class="comment-form">
                                    <p class="comment-notes">
                                        <span id="email-notes">Your email address will not be published.</span>
                                        Required fields are marked
                                        <span class="required">*</span>
                                    </p>
                                    <p class="comment-form-author">
                                        <label>Name <span class="required">*</span></label>
                                        <input type="text" id="author" placeholder="Your Name*" name="author"
                                            required="required">
                                    </p>
                                    <p class="comment-form-email">
                                        <label>Email <span class="required">*</span></label>
                                        <input type="email" id="email" placeholder="Your Email*" name="email"
                                            required="required">
                                    </p>
                                    <p class="comment-form-url">
                                        <label>Website</label>
                                        <input type="url" id="url" placeholder="Website" name="url">
                                    </p>
                                    <p class="comment-form-comment">
                                        <label>Comment</label>
                                        <textarea name="comment" id="comment" cols="45" placeholder="Your Comment..."
                                            rows="5" maxlength="65525" required="required"></textarea>
                                    </p>
                                    <p class="comment-form-cookies-consent">
                                        <input type="checkbox" value="yes" name="wp-comment-cookies-consent"
                                            id="wp-comment-cookies-consent">
                                        <label for="wp-comment-cookies-consent">Save my name, email, and website in this
                                            browser for the next time I comment.</label>
                                    </p>
                                    <p class="form-submit">
                                        <input type="submit" name="submit" id="submit" class="submit"
                                            value="Post A Comment">
                                    </p>
                                </form>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <!-- /col -->
                <!-- col -->
                {{-- <div class="col-lg-4 col-md-12">
                    <aside class="widget-area">
                        <section class="widget widget_search">
                            <h3 class="widget-title">Search</h3>

                            <form class="search-form">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="search-field" placeholder="Search...">
                                </label>
                                <button type="submit"><i class="ri-search-line"></i></button>
                            </form>
                        </section>

                        <section class="widget widget_aloa_posts_thumb">
                            <h3 class="widget-title">Popular Posts</h3>

                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg1" role="img"></span>
                                </a>
                                <div class="info">
                                    <span>June 10, 2020</span>
                                    <h4 class="title usmall"><a href="#">Lorem ipsum dolor sit amet</a></h4>
                                </div>

                                <div class="clear"></div>
                            </article>

                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg2" role="img"></span>
                                </a>
                                <div class="info">
                                    <span>June 21, 2020</span>
                                    <h4 class="title usmall"><a href="#">Lorem ipsum dolor sit amet</a></h4>
                                </div>

                                <div class="clear"></div>
                            </article>

                            <article class="item">
                                <a href="#" class="thumb">
                                    <span class="fullimage cover bg3" role="img"></span>
                                </a>
                                <div class="info">
                                    <span>June 30, 2020</span>
                                    <h4 class="title usmall"><a href="#">Lorem ipsum dolor sit amet</a></h4>
                                </div>

                                <div class="clear"></div>
                            </article>
                        </section>

                        <section class="widget widget_categories">
                            <h3 class="widget-title">Categories</h3>

                            <ul>
                                <li><a href="#">Design <span class="post-count">(03)</span></a></li>
                                <li><a href="#">Lifestyle <span class="post-count">(05)</span></a></li>
                                <li><a href="#">Script <span class="post-count">(10)</span></a></li>
                                <li><a href="#">Device <span class="post-count">(08)</span></a></li>
                                <li><a href="#">Tips <span class="post-count">(01)</span></a></li>
                            </ul>
                        </section>

                        <section class="widget widget_tag_cloud">
                            <h3 class="widget-title">Popular Tags</h3>

                            <div class="tagcloud">
                                <a href="#">Business <span class="tag-link-count"> (3)</span></a>
                                <a href="#">Design <span class="tag-link-count"> (3)</span></a>
                                <a href="#">Braike <span class="tag-link-count"> (2)</span></a>
                                <a href="#">Fashion <span class="tag-link-count"> (2)</span></a>
                                <a href="#">Travel <span class="tag-link-count"> (1)</span></a>
                                <a href="#">Smart <span class="tag-link-count"> (1)</span></a>
                                <a href="#">Marketing <span class="tag-link-count"> (1)</span></a>
                                <a href="#">Tips <span class="tag-link-count"> (2)</span></a>
                            </div>
                        </section>
                    </aside>
                </div> --}}
                <!-- col -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
    <!-- /Blog -->
@endsection
