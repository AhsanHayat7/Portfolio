@extends('layouts.frontend')


@section('content')
    <div class="stunning-header stunning-header-bg-lightviolet">
        <div class="stunning-header-content">
            <h1 class="stunning-header-title">Category : {{ $category->name }}</h1>
        </div>
    </div>


    <div class="container">
        <div class="row medium-padding120">
            <main class="main">

                <div class="row">
                            <div class="case-item-wrap">
                                @foreach ($category->post as $post)


                                    <div class="col-lg-4  col-md-4 col-sm-6 col-xs-12">
                                        <div class="case-item">
                                            <div class="case-item__thumb mouseover poster-3d lightbox shadow animation-disabled" data-offset="5">
                                                <img src="{{asset($post->featured)}}" alt="our case">
                                            </div>
                                            <a href="{{route('post.single',['slug'=> $post->slug])}}"> <h6 class="case-item__title">{{$post->title}}</h6></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                </div>

                <!-- End Post Details -->
                <br>
                <br>
                <br>
                <!-- Sidebar-->

                <div class="col-lg-12">
                    <aside aria-label="sidebar" class="sidebar sidebar-right">
                        <div  class="widget w-tags">
                            <div class="heading text-center">
                                <h4 class="heading-title">ALL BLOG TAGS</h4>
                                <div class="heading-line">
                                    <span class="short-line"></span>
                                    <span class="long-line"></span>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>

                <!-- End Sidebar-->

            </main>
        </div>
    </div>
@endsection
