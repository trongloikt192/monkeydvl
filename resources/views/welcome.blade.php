<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta property="qc:admins" content="76325664121654213563757">
        <title>Monkey DVL - @yield('header-title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <meta name="keywords" content="@yield('header-tags')">
        <meta name="description" content="Laravel框架教程,问答,社区">
        <meta name="author" content="@yield('header-author')">
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

        <link rel="stylesheet" href="{{ asset('css/MetroJs.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/demo.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/component.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/owl.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/owl_002.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/pace-theme-flash.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/jquery_002.css') }}" />

        <!-- BEGIN CORE CSS FRAMEWORK -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.css') }}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css" />
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/jquery.css') }}" />
        <!-- END CORE CSS FRAMEWORK -->

        <!-- BEGIN CSS TEMPLATE -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/custom-icon-set.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/magic_space.css') }}" />
        <!-- END CSS TEMPLATE -->

        <!-- 百度统计 -->
        <script type="text/javascript" src="{{ asset('js/hm.js') }}" ></script>
        <script>
        var _hmt = _hmt || [];
        (function() {
          var hm = document.createElement("script");
          hm.src = "//hm.baidu.com/hm.js?6b417905d1f59b0c2dc3e9a3d9bf29da";
          var s = document.getElementsByTagName("script")[0]; 
          s.parentNode.insertBefore(hm, s);
        })();
        </script>

        <link rel="stylesheet" href="{{ asset('css/reset.css') }}" />

        <script type="text/javascript" src="{{ asset('js/embed.js') }}" ></script>
        <script type="text/javascript" src="{{ asset('js/embed.js') }}" ></script>
        <link rel="stylesheet" href="{{ asset('css/embed.css') }}" />
    </head>


    <body class="horizontal-menu  pace-done breakpoint-1024">
        <div class="pace  pace-inactive">
            <div data-progress="99" data-progress-text="100%" style="width: 100%;" class="pace-progress">
                <div class="pace-progress-inner"></div>
            </div>
            <div class="pace-activity"></div>
        </div>



        <!-- BEGIN HEADER -->
        <div class="header navbar navbar-inverse ">
            <!-- BEGIN TOP NAVIGATION BAR -->
            <div class="navbar-inner">
                <div class="header-seperation">
                    <ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display: none;">
                        <li class="dropdown">
                            <a id="horizontal-menu-toggle" href="#" class="">
                                <div class="iconset top-menu-toggle-white"></div>
                            </a>
                        </li>
                    </ul>
                    <!-- BEGIN LOGO -->
                    <a href="http://laravelbase.com/index.html"><img src="{{ asset('img/logo.png') }}" class="logo" alt="" data-src="/front/assets/img/logo.png" data-src-retina="/front/assets/img/logo2x.png" height="21" width="106"></a>
                    <!-- END LOGO -->
                    <ul class="nav pull-right notifcation-center">
                        <li class="dropdown" id="header_task_bar"><a href="http://laravelbase.com/index.html" class="dropdown-toggle active" data-toggle="">
                                <div class="iconset top-home"></div>
                            </a></li>
                        <li style="display: block;" class="dropdown" id="header_inbox_bar"><a href="http://laravelbase.com/email.html" class="dropdown-toggle">
                                <div class="iconset top-messages"></div>
                                <span class="badge animated bounceIn" id="msgs-badge">2</span> </a></li>
                        <li class="dropdown" id="portrait-chat-toggler" style="display: none;"><a href="#sidr" class="chat-menu-toggle">
                                <div class="iconset top-chat-white "></div>
                            </a></li>
                    </ul>
                </div>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <div class="header-quick-nav text-center row">
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="pull-left">
                        <form method="get" action="http://laravelbase.com/api/search">
                        <ul class="nav quick-section">
                            <li class="quicklinks">
                                <a href="#" class="" style="border-left: solid  29px #FA726D">
                                 &nbsp;
                                </a>
                            </li>
                            <!-- <li class="quicklinks"><span class="h-seperate"></span></li>
                            <li class="quicklinks">
                                <a href="http://laravelbase.com/test" class="">
                                    <div class="iconset top-reload"></div>
                                </a>
                            </li> -->
                            <li class="m-r-10 input-prepend inside search-form no-boarder">
                                <span class="add-on"> <span class="iconset top-search"></span></span>

                                    <input name="_token" value="idUY5aBQ4CjPnnJa5RUtuJmQzvLs7WrztUE0eBaM" type="hidden">
                                <input name="query" class="no-boarder" placeholder="搜索本站" style="width:250px;" type="text">

                            </li>
                        </ul>
                        </form>
                    </div>

                    <div class="relogo">

                        <a href="http://laravelbase.com/"><img src="{{ asset('img/logo-b2x.png') }}" class="logo" alt="" data-src="/front/assets/img/logo-b2x.png" data-src-retina="/front/assets/img/logo-b2x.png" height="66" width="347"></a>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                    <!-- BEGIN CHAT TOGGLER -->
                    <div class="pull-right">
                        <ul class="nav quick-section ">
                            <li class="quicklinks">
                                <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">
                                    <i class="fa fa-keyboard-o"></i>
                                </a>
                                <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                                    <li><a href="mailto:7272792@qq.com"> 投稿</a>
                                    </li>

                                </ul>
                            </li>
                           <!-- <li class="quicklinks"><span class="h-seperate"></span></li>-->

                        </ul>
                        
                    </div>
                    <!-- END CHAT TOGGLER -->
                </div>
                <!-- END TOP NAVIGATION MENU -->

            </div>
            <!-- END TOP NAVIGATION BAR -->
        </div>
        <!-- END HEADER -->

        <!-- BEGIN CONTAINER -->
        <div class="page-container row-fluid">
            <!-- BEGIN PAGE CONTAINER-->
            <div class="page-content">

                <div style="overflow: visible;" class="bar">
            <div class="row">
            <div class="bar-inner">
                <ul>
                    
                                <li class="horizontal">

                    
                                        <a href="http://laravelbase.com/">
                            首页 <span class="arrow" style="color: #F4F5F7"></span>
                        </a>
                                    </li>
                    
                                <li class="horizontal">

                    
                                        <a href="http://laravelbase.com/category/54">
                            新手 <span class="arrow" style="color: #F4F5F7"></span>
                        </a>
                                    </li>
                    
                                <li class="horizontal">

                    
                                        <a href="http://laravelbase.com/category/76">
                            进阶 <span class="arrow" style="color: #F4F5F7"></span>
                        </a>
                                    </li>
                    
                                <li class="horizontal">

                    
                                        <a href="http://laravelbase.com/cheatsheet">
                            速查表 <span class="arrow" style="color: #F4F5F7"></span>
                        </a>
                                    </li>
                    
                                <li class="horizontal">

                    
                                        <a href="http://laravelbase.com/category/79">
                            常见实例 <span class="arrow" style="color: #F4F5F7"></span>
                        </a>
                                    </li>
                    
                                <li class="horizontal">

                    
                                        <a href="http://laravelbase.com/category/75">
                            依赖插件 <span class="arrow" style="color: #F4F5F7"></span>
                        </a>
                                    </li>
                    
                                <li class="horizontal">

                    
                                        <a href="http://laravelbase.com/sites">
                            资源 <span class="arrow" style="color: #F4F5F7"></span>
                        </a>
                                    </li>
                    
                                <li class="horizontal">

                    
                                        <a href="javascript:;">
                            专辑 <span class="arrow"></span>
                        </a>

                        <ul class="horizontal">

                           <div class="row"> 

                            
                            <li> 
                                <a href="http://laravelbase.com/%7D">新手专辑</a>
                            </li>
                            
                            <li> 
                                <a href="http://laravelbase.com/%7D">Laravel 4专辑</a>
                            </li>
                            
                            <li> 
                                <a href="http://laravelbase.com/sections/1%7D">Laravel 5专辑</a>
                            </li>
                            
                            </div>
          
                        </ul>
                                    </li>
                                <li class="mega ">
                        <a href="javascript:;">
                            <span class="semi-bold">关于</span><span class="arrow"></span>
                        </a>
                        <ul class="mega ">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-3 ">
                                        <div class="sub-menu-heading bold"><h3>欢迎！Welcome！</h3></div>
                                        <div style="padding:20px">
                                        <img src="{{ asset('img/chimp.jpg') }}" alt="" data-src="/front/assets/img/chimp.jpg" data-src-retina="/front/assets/img/chimp.jpg" height="135" width="130">
        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="sub-menu-heading bold"> 关于</div>

                                        <ul class="sub-menu">
                                                                                <li> <a href="http://laravelbase.com/posts/24%7D">关于LaraBase</a></li>
                                                                                <li> <a href="http://laravelbase.com/posts/25%7D">关于我</a></li>
                                                                                <li> <a href="http://laravelbase.com/%7D">新手指南</a></li>
                                                                                <li> <a href="http://laravelbase.com/remote.hdinnotech.com%7D">自由办公室</a></li>
                                                                                <li> <a href="http://laravelbase.com/posts/23%7D">开发日志</a></li>
                                            
                                        </ul>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="sub-menu-heading bold">官方资源</div>
                                        <ul class="sub-menu">
                                                                                <li> <a href="http://laravel.com/docs/5.0%7D">Laravel官方文档</a></li>
                                                                                <li> <a href="https://laracasts.com/%7D">Laracasts</a></li>
                                                                                <li> <a href="https://laravel-news.com/%7D">Laravel News</a></li>
                                                                            </ul>
                                        <div class="sub-menu-heading bold"> 国内</div>
                                        <ul class="sub-menu">
                                                                                <li> <a href="http://www.golaravel.com/%7D">Laravel中文网</a></li>
                                                                                <li> <a href="https://phphub.org/%7D">PHPHub</a></li>
                                                                            </ul>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="sub-menu-heading bold">重要扩展</div>
                                        <ul class="sub-menu">
                                                                                <li> <a href="https://github.com/JeffreyWay/Laravel-4-Generators%7D">way/generators</a></li>
                                                                                <li> <a href="https://github.com/laracasts/Presenter%7D">laracasts/presenter</a></li>
                                                                                <li> <a href="https://github.com/barryvdh/laravel-ide-helper%7D">barryvdh/laravel-ide-helper</a></li>
                                                                                <li> <a href="https://github.com/CodeSleeve/laravel-stapler%7D">codesleeve/laravel-stapler</a></li>
                                                                                <li> <a href="https://github.com/etrepat/baum%7D">baum/baum</a></li>
                                                                                <li> <a href="https://github.com/hakanersu/amaran-laravel%7D">xuma/laravel-amaran</a></li>
                                                                                <li> <a href="https://github.com/OFFLINE-GmbH/persistent-settings%7D">offline/persistent-settings</a></li>
                                                                            </ul>
                                    </div>
                                </div>
                            </div>
                        </ul>
                    </li>
                </ul>

            </div>
            </div>

        </div>


        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div id="portlet-config" class="modal hide">
            <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button"></button>
                <h3>Widget Settings</h3>
            </div>
            <div class="modal-body"> Widget settings form goes here </div>
        </div>
        <div class="clearfix"></div>
        <div class="content m-b-40">

        
        <div class="row">
        <div class="col-md-9  m-b-10 reset-padding-right-0">

        <div class="row">
        <div class="col-md-6 reset-padding">
            <div class="widget-item ">
              
                <div class="tiles  overflow-hidden full-height" style="max-height:210px">
                    <div class="overlayer bottom-right fullwidth">
                        <div class="overlayer-wrapper">
                            <div class="tiles gradient-black p-l-20 p-r-20 p-b-20 p-t-20">
                                <div class="pull-right"> <a href="#" class="hashtags white"> 新手 </a> </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <img src="{{ asset('img/ika-4.jpg') }}" alt="" class="lazy hover-effect-img image-responsive-width"> </div>
                <div class="tiles white" style="height:215px">
                    <div class="reset-padding-bottom tiles-body ">
                        <div class="row">
                            <div class="user-profile-pic text-left"> <img data-src-retina="/system/App/Models/User/User/avatars/000/000/004/medium/Common-Chimpanzee-Pan-Troglodytes-copia.jpg" data-src="/system/App/Models/User/User/avatars/000/000/004/medium/Common-Chimpanzee-Pan-Troglodytes-copia.jpg" src="{{ asset('img/Common-Chimpanzee-Pan-Troglodytes-copia.jpg') }}" alt="" height="69" width="69">
                                <div class="pull-right m-r-20 m-t-35"> <span class="bold text-black small-text">6月前</span> </div>
                            </div>
                            <div class="col-md-4 no-padding">
                                <div class="user-comment-wrapper">
                                    <div class="comment">
                                        <div class="user-name text-black bold"> Woody</div>
                                        <div class="preview-wrapper">@ HD Tech </div>
                                    </div>
                                    <div class="comment">

                                        <img src="{{ asset('img/psb.jpg') }}" height="100" width="100">
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="col-md-8 no-padding">
                                <div class="clearfix"></div>
                                <div class="m-r-20  m-b-10  m-l-10">
                                    <h4 style="margin-top:2px"><a href="http://laravelbase.com/posts/32" title="2015最流行PHP开发框架 – SitePoint 调查报告"> 2015最流行PHP开发框架 – SitePoint 调查报告</a></h4>
                                    <p class="p-b-10"> <a href="http://laravelbase.com/posts/32" title="2015最流行PHP开发框架 – SitePoint 调查报告" class="muted"> 最近，SitePoint网站进行了每年一度的最流行开发框架评选（原文 ...</a></p>
                                                                <a href="http://laravelbase.com/tag/97" class="hashtags m-b-5"> #Laravel 5 </a>
                                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 reset-padding" id="small_tile">
            <div class="row ">
                <!-- BEGIN ANIMATED TILE -->
                <div style="height: 207px;" class="col-md-6  m-b-10 tile_resize" data-aspect-ratio="true">
                    <div class="live-tile slide ha " data-speed="950" data-delay="116000" data-mode="">
                        <div class="slide-front ha tiles adjust-text">
                            <div class="p-t-20 p-l-20 p-r-20 p-b-20"><i class="fa fa-h-square fa-2x"></i>
                                <p class="text-white-opacity p-t-10 p-b-10">6月前</p>
                                <h4 style="padding-top:20px"><a href="http://laravelbase.com/posts/50" title="Service Container（IOC容器）" style="text-decoration: none"> Service Container（IOC容器）</a></h4>

                            </div>
                            <div class="put-down p-l-20 p-r-20 ">
                            <p class="p-t-20 "><span class="bold">806</span> 点击&nbsp; &nbsp;   <span class="ds-thread-count" data-thread-key="50" data-count-type="comments">2评论</span></p>

                            
        <!-- 多说js加载开始，一个页面只需要加载一次 -->
        <script type="text/javascript">
        var duoshuoQuery = {short_name:"larabase"};
        (function() {
            var ds = document.createElement('script');
            ds.type = 'text/javascript';ds.async = true;
            ds.src = 'http://static.duoshuo.com/embed.js';
            ds.charset = 'UTF-8';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ds);
        })();
        </script>
                            </div>
                        </div>
                        <div class="slide-back ha tiles blue">


                        </div>

                    </div>
                </div>
                <!-- END ANIMATED TILE -->
                <!-- BEGIN ANIMATED TILE -->
                <div style="height: 207px;" class="col-md-6  m-b-10 tile_resize" data-aspect-ratio="true">
                    <div class="live-tile slide ha " data-speed="750" data-delay="1000" data-mode="">
                        <div class="slide-front ha tiles blue ">

                            <div class="p-t-20 p-l-20 p-r-20 p-b-20"> <i class="fa fa-pagelines fa-2x"></i>
                                <p class="text-white-opacity p-t-10">6月前</p>
                                <h4 style="padding-top:20px"><a href="http://laravelbase.com/posts/28" title="(l5) 创建简单文章采集功能" style="text-decoration: none"> (l5) 创建简单文章采集功能</a></h4>

                            </div>
                            <div class="put-down p-l-20 p-r-20 ">
                                <p class="p-t-20 "><span class="bold">1574</span> 点击 &nbsp; &nbsp;   <span class="ds-thread-count" data-thread-key="28" data-count-type="comments">4评论</span></p>
                            </div>
                        </div>
                        <div class="slide-back ha tiles blue">


                        </div>
                    </div>
                </div>
                <!-- END ANIMATED TILE -->
            </div>
            <div class="row">
                <!-- BEGIN ANIMATED TILE -->
                <div style="height: 207px;" class="col-md-6 m-b-10 tile_resize" data-aspect-ratio="true">
                    <div class="live-tile slide ha" data-speed="1050" data-delay="4500" data-mode="">
                        <div class="slide-front ha tiles green">
                            <div class="p-t-20 p-l-20 p-r-20 p-b-20"><!-- <i class="fa fa-map-marker fa-2x"></i>-->
                                <p class="text-white-opacity p-t-10">10月前</p>
                                <p class="text-white-opacity p-t-20"></p><h4 style="padding-top:20px"><a href="http://laravelbase.com/posts/8" title="(L4)Many to Many Relationships(多对多）数据关系设计" style="text-decoration: none"> (L4)Many to Many Relationships(多对多）数据关系设计</a></h4>

                            </div>
                            <div class="put-down p-l-20 p-r-20 ">
                                <p class="p-t-20 "><span class="bold">964</span> 点击&nbsp; &nbsp;   <span class="ds-thread-count" data-thread-key="8" data-count-type="comments">7评论</span></p>
                            </div>
                        </div>
                        <div class="slide-back ha tiles green">


                        </div>
                    </div>
                </div>
                <!-- END ANIMATED TILE -->
                <!-- BEGIN ANIMATED TILE -->
                <div style="height: 207px;" class="col-md-6  m-b-10 tile_resize" data-aspect-ratio="true">
                    <div class="live-tile slide ha  carousel" data-speed="1050" data-delay="8000" data-mode="carousel">
                        <div style="transition-property: transform; transition-duration: 1050ms; transition-timing-function: ease; transform: translate(0%, 0%) translateZ(0px);" class="slide-front ha tiles green  slide active">
                            <div class="overlayer bottom-left fullwidth">
                                <div class="overlayer-wrapper">
                                    <div class="tiles gradient-black p-l-20 p-r-20 p-b-20 p-t-20">

                                        <a href="http://laravelbase.com/posts/10" title="(L4)Laravel 基本控制器简介" style="text-decoration: none"><h5 class="text-white semi-bold "> (L4)Laravel 路由详解</h5>
                                        <p class="text-white semi-bold no-margin"><i class="icon-custom-up "></i> 阅读更多</p></a>
                                    </div>
                                </div>
                            </div>
                            <img src="{{ asset('img/litmus-code-analysis.png') }}" alt="" class="image-responsive-width xs-image-responsive-width"> </div>
                        <div style="transform: translate(0%, -100%) translateZ(0px); transition-duration: 1050ms; transition-property: transform; transition-timing-function: ease;" class="slide-back ha tiles green slide">
                            <div class="overlayer bottom-left fullwidth">
                                <div class="overlayer-wrapper">
                                    <div class="tiles gradient-black p-l-20 p-r-20 p-b-20 p-t-20">

                                        <h5 class="text-white semi-bold "><a href="http://laravelbase.com/posts/11" title="(L4)Laravel 基本控制器简介" style="text-decoration: none"> (L4)Laravel 基本控制器简介</a></h5>
                                        <p class="text-white semi-bold no-margin"><i class="icon-custom-up "></i> 阅读更多</p>
                                    </div>
                                </div>
                            </div>
                            <img src="{{ asset('img/workspace.jpg') }}" alt="" class="image-responsive-width xs-image-responsive-width">
                        </div>
                    </div>
                </div>
                <!-- END ANIMATED TILE -->
            </div>
        </div>

        </div>
        <div class="clearfix"></div>
        <div class="row m-t-20">

            <div class="col-md-4  m-b-10 right-border">
                <h4>热门<span class="semi-bold color-red">标签</span></h4>

                <div class="tag-list">
                                 <a href="http://laravelbase.com/tag/50" title="缓存/Cache" class="hashtags transparent recolor tag-item"> #缓存/Cache </a>

                                 <a href="http://laravelbase.com/tag/51" title="过滤器" class="hashtags transparent recolor tag-item"> #过滤器 </a>

                                 <a href="http://laravelbase.com/tag/52" title="L4" class="hashtags transparent recolor tag-item"> #L4 </a>

                                 <a href="http://laravelbase.com/tag/56" title="分页" class="hashtags transparent recolor tag-item"> #分页 </a>

                                 <a href="http://laravelbase.com/tag/68" title="数据关系" class="hashtags transparent recolor tag-item"> #数据关系 </a>

                                 <a href="http://laravelbase.com/tag/70" title="过滤器Filter" class="hashtags transparent recolor tag-item"> #过滤器Filter </a>

                                 <a href="http://laravelbase.com/tag/71" title="同步令牌模式" class="hashtags transparent recolor tag-item"> #同步令牌模式 </a>

                                 <a href="http://laravelbase.com/tag/72" title="CSRF" class="hashtags transparent recolor tag-item"> #CSRF </a>

                                 <a href="http://laravelbase.com/tag/103" title="图片" class="hashtags transparent recolor tag-item"> #图片 </a>

                                 <a href="http://laravelbase.com/tag/81" title="ORM" class="hashtags transparent recolor tag-item"> #ORM </a>

                                 <a href="http://laravelbase.com/tag/82" title="Eloquent" class="hashtags transparent recolor tag-item"> #Eloquent </a>

                                 <a href="http://laravelbase.com/tag/83" title="路由" class="hashtags transparent recolor tag-item"> #路由 </a>

                                 <a href="http://laravelbase.com/tag/84" title="控制器Controller" class="hashtags transparent recolor tag-item"> #控制器Controller </a>

                                 <a href="http://laravelbase.com/tag/86" title="事件Event" class="hashtags transparent recolor tag-item"> #事件Event </a>

                                 <a href="http://laravelbase.com/tag/87" title="仓库模式" class="hashtags transparent recolor tag-item"> #仓库模式 </a>

                                 <a href="http://laravelbase.com/tag/88" title="Model" class="hashtags transparent recolor tag-item"> #Model </a>

                                 <a href="http://laravelbase.com/tag/91" title="接口Interface" class="hashtags transparent recolor tag-item"> #接口Interface </a>

                                 <a href="http://laravelbase.com/tag/92" title="外观模式Facade" class="hashtags transparent recolor tag-item"> #外观模式Facade </a>

                                 <a href="http://laravelbase.com/tag/93" title="IOC容器" class="hashtags transparent recolor tag-item"> #IOC容器 </a>

                                 <a href="http://laravelbase.com/tag/94" title="依赖注入" class="hashtags transparent recolor tag-item"> #依赖注入 </a>

                                 <a href="http://laravelbase.com/tag/95" title="CRUD" class="hashtags transparent recolor tag-item"> #CRUD </a>

                                 <a href="http://laravelbase.com/tag/96" title="数据库" class="hashtags transparent recolor tag-item"> #数据库 </a>

                                 <a href="http://laravelbase.com/tag/97" title="Laravel 5" class="hashtags transparent recolor tag-item"> #Laravel 5 </a>

                                 <a href="http://laravelbase.com/tag/98" title="Helper" class="hashtags transparent recolor tag-item"> #Helper </a>

                                 <a href="http://laravelbase.com/tag/99" title="生产环境" class="hashtags transparent recolor tag-item"> #生产环境 </a>

                            </div>


            </div>

            <div class="col-md-8  m-b-10">



            <div class="row m-b-20">

                <div class="col-md-3  m-b-10">
            <div class="user-mini-description" style="margin-top: 13px">
                <h5 class="semi-bold text-success">
                            <a href="http://laravelbase.com/category/54" title="新手" class="text-success">  新手 </a>
                            </h5>
                <h5 style="margin-top: 10px">2015-08-05</h5>

            </div>
            </div>


        <div class="col-md-9  m-b-10 reset-right">
            <div class="info-wrapper">
                <h4 class="semi-bold">
                    <a href="http://laravelbase.com/posts/75" title="中间件重定向的问题">  中间件重定向的问题 </a>
                </h4>
                <div class="info">
                   
                    在中间件里面，，redirect后面的路径 不能和 你 应用中间件的 那个路由 一样，还有如果中间件有2个redirect，，不能redirect到同一个路由，否则会 重定向。如果 ...
                </div>
            </div>
        </div>
        </div>
            <div class="row m-b-20">

                <div class="col-md-3  m-b-10">
            <div class="user-mini-description" style="margin-top: 13px">
                <h5 class="semi-bold text-success">
                            <a href="http://laravelbase.com/category/84" title="L5 笔记" class="text-success">  L5 笔记 </a>
                            </h5>
                <h5 style="margin-top: 10px">2015-06-15</h5>

            </div>
            </div>


        <div class="col-md-9  m-b-10 reset-right">
            <div class="info-wrapper">
                <h4 class="semi-bold">
                    <a href="http://laravelbase.com/sections/1/posts/74" title="文档笔记 - Eloquent ORM">  文档笔记 - Eloquent ORM </a>
                </h4>
                <div class="info">
                   
                    Eloquent ORM &nbsp;的内容实在是太多了，也是Laravel的核心魅力所在，可以单独写一本书；我也只能是慢慢记录：lists() 可以以数组的形式列出对象集的指定属性；
          $ ...
                </div>
            </div>
        </div>
        </div>
            <div class="row m-b-20">

                <div class="col-md-3  m-b-10">
            <div class="user-mini-description" style="margin-top: 13px">
                <h5 class="semi-bold text-success">
                            <a href="http://laravelbase.com/category/84" title="L5 笔记" class="text-success">  L5 笔记 </a>
                            </h5>
                <h5 style="margin-top: 10px">2015-05-15</h5>

            </div>
            </div>


        <div class="col-md-9  m-b-10 reset-right">
            <div class="info-wrapper">
                <h4 class="semi-bold">
                    <a href="http://laravelbase.com/sections/1/posts/73" title="文档笔记 - 数据迁移与数据填充（migration and seed）">  文档笔记 - 数据迁移与数据填充（migration and seed） </a>
                </h4>
                <div class="info">
                   
                    一个项目开始的时候，基本都要涉及到这一块；migration 提供了一个很好的的数据库设计，管理，生成的工具；如果要很好的使用，建议先安装：https://github.com/l ...
                </div>
            </div>
        </div>
        </div>
            <div class="row m-b-20">

                <div class="col-md-3  m-b-10">
            <div class="user-mini-description" style="margin-top: 13px">
                <h5 class="semi-bold text-success">
                            <a href="http://laravelbase.com/category/84" title="L5 笔记" class="text-success">  L5 笔记 </a>
                            </h5>
                <h5 style="margin-top: 10px">2015-05-15</h5>

            </div>
            </div>


        <div class="col-md-9  m-b-10 reset-right">
            <div class="info-wrapper">
                <h4 class="semi-bold">
                    <a href="http://laravelbase.com/sections/1/posts/72" title="文档笔记 - 表单验证（Validation）">  文档笔记 - 表单验证（Validation） </a>
                </h4>
                <div class="info">
                   
                    表单验证有很多种方式，但只要你记住一个核心就好；最简单的表单验证由2部分组成；一个是规则：
          
          protected $rules = [
                'name' =&gt; ['required', 'min:3 ...
                </div>
            </div>
        </div>
        </div>
            <div class="row m-b-20">

                <div class="col-md-3  m-b-10">
            <div class="user-mini-description" style="margin-top: 13px">
                <h5 class="semi-bold text-success">
                            <a href="http://laravelbase.com/category/54" title="新手" class="text-success">  新手 </a>
                            </h5>
                <h5 style="margin-top: 10px">2015-05-13</h5>

            </div>
            </div>


        <div class="col-md-9  m-b-10 reset-right">
            <div class="info-wrapper">
                <h4 class="semi-bold">
                    <a href="http://laravelbase.com/posts/70" title="表单那点事">  表单那点事 </a>
                </h4>
                <div class="info">
                   
                    官方文档没有在明显的地方讲讲表单这件事，有点遗憾；在此我们来小结一下这个很容易发生小问题的地方；HTML package，Ｌ５没了（你可以重新安装一下）。我不建议 ...
                </div>
            </div>
        </div>
        </div>
            <div class="row m-b-20">

                <div class="col-md-3  m-b-10">
            <div class="user-mini-description" style="margin-top: 13px">
                <h5 class="semi-bold text-success">
                            <a href="http://laravelbase.com/category/79" title="实例" class="text-success">  实例 </a>
                            </h5>
                <h5 style="margin-top: 10px">2015-05-03</h5>

            </div>
            </div>


        <div class="col-md-9  m-b-10 reset-right">
            <div class="info-wrapper">
                <h4 class="semi-bold">
                    <a href="http://laravelbase.com/posts/69" title="路由的花式玩法——路由模型绑定">  路由的花式玩法——路由模型绑定 </a>
                </h4>
                <div class="info">
                   
                    我们知道，如果要让服务器干点啥事情，路由（URL)是最初的指令，这个指令里会带一些参数指定一些具体的行为。比如http://laravelbase.com/profile/1它可能是想查 ...
                </div>
            </div>
        </div>
        </div>
            <div class="row m-b-20">

                <div class="col-md-3  m-b-10">
            <div class="user-mini-description" style="margin-top: 13px">
                <h5 class="semi-bold text-success">
                            <a href="http://laravelbase.com/category/79" title="实例" class="text-success">  实例 </a>
                            </h5>
                <h5 style="margin-top: 10px">2015-05-02</h5>

            </div>
            </div>


        <div class="col-md-9  m-b-10 reset-right">
            <div class="info-wrapper">
                <h4 class="semi-bold">
                    <a href="http://laravelbase.com/posts/68" title="用Laravel5 开发10个应用（一）——短链接生成器">  用Laravel5 开发10个应用（一）——短链接生成器 </a>
                </h4>
                <div class="info">
                   
                    前言基本上每一个教编程的课程都会以“简易博客”系统为例子，写过太多博客，你是否已经厌烦了？就像学设计的朋友一样，你学会了Photoshop，不一定会设计，因为 ...
                </div>
            </div>
        </div>
        </div>
                <ul class="pager"><li class="disabled"><span>«</span></li> <li><a href="http://laravelbase.com/?page=2" rel="next">»</a></li></ul>
        </div>
        </div>

        </div>

        <div class="col-md-3 m-b-10 reset-padding-left-0">
        <div class="row">

                <div class="col-md-12 reset-padding">
                    <div class="grid simple vertical green pink">
                        <div class="grid-title no-border ">
                            <h4> Collections <span class="semi-bold color-red">专辑</span></h4>
                            <div class="tools">
                                <a href="javascript:;" class="collapse"></a>
                                <a href="javascript:;" class="reload"></a>

                            </div>
                        </div>
                        <div class="grid-body no-border set-bg2">
                            <div class="row-fluid">
                                <a href="http://laravelbase.com/sections/1" style="color: #000000" target="_self">
                                <div class="col-md-12 " style="margin-top: 150px">



                                    <img src="{{ asset('img/laravel-logo.png') }}" width="60"><br>


                                </div>

                                <h2 style="color:black;padding:0 10px; background-color: rgba(229, 234, 239,0.5);">重读Laravel 5官方文档<i class="fa fa-arrow-circle-right"></i><br><br></h2>


                                </a>





                            </div>



                        </div>
                    </div>
                </div>

            <div class="col-md-12 reset-padding">
                <ul class="nav nav-tabs" id="tab-01">
                    <li class="active"><a href="#tab1hellowWorld">阅读最多</a></li>
                    <li><a href="#tab1FollowUs">评论最多</a></li>


                </ul>
                <div class="tab-content">
                    <div class="tab-pane active reset-padding" id="tab1hellowWorld">
                        <div class="row column-seperation add-padding">
                            
                            <blockquote class="margin-top-20">
                            5252  <small> <a href="http://laravelbase.com/posts/32" title="2015最流行PHP开发框架 – SitePoint 调查报告"> 2015最流行PHP开发框架 – SitePoint 调查报告</a></small>
                            </blockquote>
                            
                            <blockquote class="margin-top-20">
                            2293  <small> <a href="http://laravelbase.com/posts/30" title="(L5)Laravel 5.0 - 目录结构和命名空间 "> (L5)Laravel 5.0 - 目录结构和命名空间 </a></small>
                            </blockquote>
                            
                            <blockquote class="margin-top-20">
                            1574  <small> <a href="http://laravelbase.com/posts/28" title="(l5) 创建简单文章采集功能"> (l5) 创建简单文章采集功能</a></small>
                            </blockquote>
                            
                            <blockquote class="margin-top-20">
                            1402  <small> <a href="http://laravelbase.com/posts/68" title="用Laravel5 开发10个应用（一）——短链接生成器"> 用Laravel5 开发10个应用（一）——短链接生成器</a></small>
                            </blockquote>
                            
                            <blockquote class="margin-top-20">
                            1307  <small> <a href="http://laravelbase.com/posts/14" title="(L4)什么是Laravel IOC容器?"> (L4)什么是Laravel IOC容器?</a></small>
                            </blockquote>
                                            </div>
                    </div>
                    <div class="tab-pane reset-padding" id="tab1FollowUs">
                        <div class="row">
                            <div class="col-md-12 p-t-20 p-b-20">

                            <!-- 多说热评文章 start -->
            <div id="ds-top-threads" class="ds-top-threads duoshuo" data-range="monthly" data-num-items="6"><li><a target="_blank" href="http://laravelbase.com/posts/16" title="(L4)Laravel CRUD 操作">(L4)Laravel CRUD 操作</a></li><li><a target="_blank" href="http://laravelbase.com/sections/1/posts/42" title="概览">概览</a></li><li><a target="_blank" href="http://laravelbase.com/posts/8" title="(L4)Many to Many Relationships(多对多）数据关系设计">(L4)Many to Many Relationships(多对多）数据关系设计</a></li><li><a target="_blank" href="http://laravelbase.com/posts/32" title="2015最流行PHP开发框架 – SitePoint 调查报告">2015最流行PHP开发框架 – SitePoint 调查报告</a></li><li><a target="_blank" href="http://laravelbase.com/posts/70" title="表单那点事">表单那点事</a></li><li><a target="_blank" href="http://laravelbase.com/posts/68" title="用Laravel5 开发10个应用（一）——短链接生成器">用Laravel5 开发10个应用（一）——短链接生成器</a></li></div>
        <!-- 多说热评文章 end -->
        <!-- 多说公共JS代码 start (一个网页只需插入一次) -->
        <script type="text/javascript">
        var duoshuoQuery = {short_name:"larabase"};
            (function() {
                var ds = document.createElement('script');
                ds.type = 'text/javascript';ds.async = true;
                ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
                ds.charset = 'UTF-8';
                (document.getElementsByTagName('head')[0] 
                 || document.getElementsByTagName('body')[0]).appendChild(ds);
            })();
            </script>
        <!-- 多说公共JS代码 end -->
                            


                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-12 reset-padding">



            </div>


        </div>

        </div>


        </div>






                </div>

            </div>
            <!-- END PAGE CONTAINER-->
            <div class="section white footer">
            <div class="container">
                <div class="p-t-30 p-b-50">
                    <div class="row">
                        <div class="col-md-2  xs-m-b-20 reset-padding-left-0">
                            <a href="http://laravelbase.com/"> <img src="{{ asset('img/logo2x.png') }}" alt="" data-src="/front/assets/img/logo2x.png" data-src-retina="/front/assets/img/logo2x.png" height="54" width="162"></a>
                        </div>
                        <div class="col-md-4  xs-m-b-20">
                            <address class="xs-no-padding  col-md-6 " style="font-size: 14px">
                                Hand-Crafted with <span class="semi-bold"><a href="http://www.laravel.com/" style="color:white">Laravel 5</a></span> and <span class="semi-bold"><a href="http://www.getbootstrap.com/" style="color:white">Bootstrap 3</a> </span><br><small>Bootstrap 不支持ie8及以下浏览器，作为有节操的程序员，请抛弃IE</small>
                            </address>
                            <div class="xs-no-padding col-md-6 ">
                                <div><img src="{{ asset('img/aliyun.png') }}" width="100"></div>

                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-2 xs-m-b-20" style="font-size: 14px">
                            Copyright ©  2014-2015 <br> HD-InnoTech  <br><a href="http://www.miitbeian.gov.cn/" style="color:white; font-size:12px">沪ICP备15012378号-1</a>
                        </div>
                        <div class="col-md-2  xs-m-b-20" style="font-size: 14px">
                            <div class="bold" style="font-size: 14px">链接</div>
                            <ul class="footer" style="font-size: 14px">
                                <li><a href="http://hdinnotech.com/" class="white">龙隐科技</a></li>
        <li><a href="http://ekan001.com/" class="white">吾爱的博客</a></li>

                            </ul>

                        </div>
                        <div class="col-md-2  " style="font-size: 14px">
                            <div class="bold" style="font-size: 14px">联系方式</div>
                            7272791@qq.com
                        </div>
                    </div>
                </div>
            </div>
        </div>


        </div>
        <!-- END CONTAINER -->



        <!-- BEGIN CORE JS FRAMEWORK-->

        <script type="text/javascript" src="{{ asset('js/jquery-1.js') }}" ></script>
        <script type="text/javascript" src="{{ asset('js/jquery-ui-1.js') }}" ></script>
        <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}" ></script>
        <!--窗口缩放时的事件插件-->
        <script type="text/javascript" src="{{ asset('js/breakpoints.js') }}" ></script>
        <!--lazy load images-->
        <script type="text/javascript" src="{{ asset('js/jquery_002.js') }}" ></script>
        <script type="text/javascript" src="{{ asset('js/jqueryblockui.js') }}" ></script>
        <script type="text/javascript" src="{{ asset('js/jquery_003.js') }}" ></script>
        <script type="text/javascript" src="{{ asset('js/jquery_004.js') }}" ></script>
        <!-- END CORE JS FRAMEWORK -->
        <!-- BEGIN PAGE LEVEL JS -->

        <script type="text/javascript" src="{{ asset('js/pace.js') }}" ></script>
        <script type="text/javascript" src="{{ asset('js/jquery.js') }}" ></script>


        <script type="text/javascript" src="{{ asset('js/owl.js') }}" ></script>

        <script type="text/javascript" src="{{ asset('js/snap.js') }}" ></script>

        <script type="text/javascript" src="{{ asset('js/MetroJs.js') }}" ></script>
        <script type="text/javascript" src="{{ asset('js/jquery-jvectormap-1.js') }}" ></script>
        <script type="text/javascript" src="{{ asset('js/jquery-jvectormap-us-lcc-en.js') }}" ></script>

        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN CORE TEMPLATE JS -->
        <script type="text/javascript" src="{{ asset('js/core.js') }}" ></script>
        <script type="text/javascript" src="{{ asset('js/demo.js') }}" ></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $(".live-tile,.flip-list").liveTile();
            });

        </script>
        <!-- END CORE TEMPLATE JS -->





        <script type="text/javascript" src="{{ asset('js/tabs_accordian.js') }}" ></script>



        <script type="text/javascript">
            $(document).ready(function(){

                


            });
        </script>






    </body>
</html>