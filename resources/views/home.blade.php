@extends('layouts/master')

@section('content')
	<div class="row m-b-20">
        <div class="col-md-2  m-b-10">
            <div class="user-mini-description" style="margin-top: 13px">
                <h5 class="semi-bold text-success">
                    <a href="http://laravelbase.com/category/54" title="新手" class="text-success">  新手 </a>
                </h5>
                <h5 style="margin-top: 10px">2015-08-05</h5>
            </div>
        </div>

        <div class="col-md-4  m-b-10">
            <a href="#" class="thumbnail">
        		<img src="http://lorempixel.com/640/480/" alt="">
        	</a>
        </div>

        <div class="col-md-6  m-b-10 reset-right">
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
        <div class="col-md-2  m-b-10">
            <div class="user-mini-description" style="margin-top: 13px">
                <h5 class="semi-bold text-success">
                    <a href="http://laravelbase.com/category/54" title="新手" class="text-success">  新手 </a>
                </h5>
                <h5 style="margin-top: 10px">2015-08-05</h5>
            </div>
        </div>

        <div class="col-md-4  m-b-10">
            <a href="#" class="thumbnail">
        		<img src="http://lorempixel.com/640/480/" alt="">
        	</a>
        </div>

        <div class="col-md-6  m-b-10 reset-right">
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

    <ul class="pager">
    	<li class="disabled"><span>«</span></li> 
    	<li><a href="http://laravelbase.com/?page=2" rel="next">»</a></li>
    </ul>
@stop
