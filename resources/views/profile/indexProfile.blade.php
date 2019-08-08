@extends('layouts.app', ['activePage' => 'locations-management', 'titlePage' => __('User Profile')])

@section('content')
<style>
body{padding-top:30px;}

.glyphicon {  margin-bottom: 10px;margin-right: 10px;}

small {
display: block;
line-height: 1.428571429;
color: #999;
}
</style>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header card-header-primary">
                <h4 class="card-title ">{{ __('Profile') }}</h4>
                <!-- <p class="card-category"> {{ __('WKWKWKWKWKWKWKWK') }}</p> -->
              </div>
              <div class="card-body">
                     @if (session('status'))
                            <div class="row">
                              <div class="col-sm-12">
                                  <div class="alert alert-success">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                      <i class="material-icons">close</i>
                                    </button>
                                    <span>{{ session('status') }}</span>
                                  </div>
                                </div>
                            </div>
                     @endif
                      <div class="row">
                          <div class="col-12 text-right">
                            <!-- <a href="{{ route('locations.create') }}" class="btn btn-sm btn-primary">{{ __('Tambahkan   ') }}</a> -->
                          </div>
                      </div>
              <div class="row">
                      <div class="col-sm-6 col-md-4">
                          <img src="http://placehold.it/200x200" alt="" class="img-rounded img-responsive" />
                      </div>
                      <br>
                          <div class="col-sm-3 col-md-5">
                                    <h4> {{auth()->user()->name}}</h4>
                                    <!-- <small><cite title="San Francisco, USA">San Francisco, USA <i class="glyphicon glyphicon-map-marker">
                                        </i></cite></small> -->
                                        <p>
                                            <i class="glyphicon glyphicon-envelope"></i> {{auth()->user()->email}}
                                            <br />
                                            <i class="glyphicon glyphicon-gift"></i>Joined since {{auth()->user()->created_at->diffForHumans()}}</p>
                                  <!-- Split button -->
                                      <div class="btn-group">
                                          <button type="button" class="btn btn-primary">
                                              Social</button>
                                          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                              <span class="caret"></span><span class="sr-only">Social</span>
                                          </button>
                                          <ul class="dropdown-menu" role="menu">
                                              <li><a href="#">Twitter</a></li>
                                              <li><a href="https://plus.google.com/+Jquery2dotnet/posts">Google +</a></li>
                                              <li><a href="https://www.facebook.com/jquery2dotnet">Facebook</a></li>
                                              <li class="divider"></li>
                                              <li><a href="#">Github</a></li>
                                          </ul>
                          </div>
                </div>
              </div>
         </div>
       </div>
     </div>
    </div>
    </div>
  
@endsection