<div class="col-md-3 visible-md-block visible-lg-block">
    <div class="sidebar" role="navigation">
        <div class="sidebar-image align-center">
            <img src='{!! $user->avatar !!}' class="img-circle" width=100 />
        </div>
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li>
                    <a href="/dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="/videos"><i class="fa fa-youtube-play fa-fw"></i></i> Videos </a>
                </li>
                <li>
                    <a href="/messages"><i class="fa fa-envelope fa-fw"></i>
                      Messages
                      <span class='badge' style="background-color:#e89980;">
                        {{ count(Auth::user()->messages()->where('status', 0)->get()) }}
                      </span>
                    </a>
                </li>
                <li>
                    <a href="/profile"><i class="fa fa-user fa-fw"></i> My Profile </a>
                </li>
                <li>
                    <a href="/settings"><i class="fa fa-cog fa-fw"></i> Account Settings</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="visible-xs-block visible-sm col-xs-12 col-sm-12">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
        <div class="sidebar-image align-left col-xs-2 col-sm-2">
            <div style="float:left;"><img src='{!! $user->avatar !!}' class="img-circle" width=32 /></div> 
            <div class="label" style="float:left;">Menu</div>
            <div style="clear:both;"></div>
        </div>

        <div class="collapse navbar-collapse ccol-xs-9 col-sm-9" id="myNavbar">
          <ul class="nav navbar-nav">
                <li>
                    <a href="/dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="/videos"><i class="fa fa-youtube-play fa-fw"></i></i> Videos </a>
                </li>
                <li>
                    <a href="/messages"><i class="fa fa-envelope fa-fw"></i>
                      Messages
                      <span class='badge' style="background-color:#e89980;">
                        {{ count(Auth::user()->messages()->where('status', 0)->get()) }}
                      </span>
                    </a>
                </li>
                <li>
                    <a href="/profile"><i class="fa fa-user fa-fw"></i> My Profile </a>
                </li>
                <li>
                    <a href="/settings"><i class="fa fa-cog fa-fw"></i> Account Settings</a>
                </li>
          </ul>
        </div>
      </div>
    </nav>
</div>
<style type="text/css">
    .nav a{
        color:#111;
    }
    .sidebar-image{
        margin-top:8px;
        margin-bottom:8px;
        margin-left: 5px;
    }
    .sidebar-image .label{
        font-weight: bold;
        color: #fff;
        font-size: 100%;
        margin-top: 8px;
    }
</style>
