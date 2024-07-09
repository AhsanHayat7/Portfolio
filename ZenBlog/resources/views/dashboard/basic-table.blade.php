@extends('dashboard.layouts.app')
@section('main-container')

      <!-- partial -->

        <!-- partial:../../partials/_navbar.html -->

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Basic Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{route('table')}}">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Basic Table</h4>
                    <p class="card-description"> Add class <code>.table</code>
                    </p>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Author</th>
                            <th>Date</th>
                            <th>Category_Id</th>
                            <th>Image</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($articles as $article)
                          <tr>
                            <td>{{$article->title}}</td>
                            <td>{{$article->content}}</td>
                            <td>{{$article->author}}</td>
                            <td>{{$article->formatted_date}}</td>
                            <td>{{$article->category_id}}</td>
                            <td>
                                <a data-fancybox="articles images"  href="{{asset($article->image)}}">
                                    <img src="{{asset($article->image)}}" alt="articles images" style="max-width: 500px;">
                                </a></td>
                                <td>
                                <a href="{{ route('update', ['id' => $article->id]) }}"><button class="btn btn-primary">Update</button></a>
                                </td>
                            </td>
                            <td>
                                <a href="{{route('delete',['id'=>$article->id]) }}"><button class="btn btn-danger">Delete</button></a>
                            </td>
                            <tr>
                          @endforeach
                        </tbody>
                      </table>
                        {{$articles->links('pagination::bootstrap-4')}}

                      </div>
                    </div>
                  </div>
                </div>
              </div>

          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->

    <!-- container-scroller -->
    <!-- plugins:js -->
    @endsection
