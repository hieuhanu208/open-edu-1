@extends('backend.master')
@section('content')
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Admin CMS</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> {{Auth::user()->email}} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{route('logout')}}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Trang chủ</h1>
        </div>
      </div><!--/.row-->
                    
      <div class="row">
        <div class="col-xs-12 col-md-6 col-lg-3">
          <div class="panel panel-blue panel-widget ">
            <div class="row no-padding">
              <div class="col-sm-3 col-lg-5 widget-left">
                <svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
              </div>
              <div class="col-sm-9 col-lg-7 widget-right">
                <div class="large">120</div>
                <div class="text-muted">Sản phẩm</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
          <div class="panel panel-orange panel-widget">
            <div class="row no-padding">
              <div class="col-sm-3 col-lg-5 widget-left">
                <svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
              </div>
              <div class="col-sm-9 col-lg-7 widget-right">
                <div class="large">52</div>
                <div class="text-muted">Bình luận</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
          <div class="panel panel-teal panel-widget">
            <div class="row no-padding">
              <div class="col-sm-3 col-lg-5 widget-left">
                <svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
              </div>
              <div class="col-sm-9 col-lg-7 widget-right">
                <div class="large">24</div>
                <div class="text-muted">Người dùng</div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-6 col-lg-3">
          <div class="panel panel-red panel-widget">
            <div class="row no-padding">
              <div class="col-sm-3 col-lg-5 widget-left">
                <svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
              </div>
              <div class="col-sm-9 col-lg-7 widget-right">
                <div class="large">25.2k</div>
                <div class="text-muted">Danh mục</div>
              </div>
            </div>
          </div>
        </div>
      </div><!--/.row-->
      
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-red">
            <div class="panel-heading dark-overlay"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg>Lịch</div>
            <div class="panel-body">
              <div id="calendar"></div>
            </div>
          </div>
        </div><!--/.col-->
      </div><!--/.row-->
    </div>	<!--/.main-->


    @endsection