<!DOCTYPE html>
<html class="no-js" lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Laravel 5</title>
    <link rel='stylesheet' href="/css/bootstrap.min.css" type='text/css' media='all'/>
    <link rel='stylesheet' href="/css/all.css" type='text/css' media='all'/>
    <script type='text/javascript' src="/js/all.js"></script>
</head>
<body>
<div id="wrapper">

<nav class="nav-container group" id="nav-header">
        <div class="nav-wrap">
            <ul class="nav container group">
                <li class="menu-item">
                    <a href="/article" rel="nofollow" target="">个人博客</a>
                </li>
                <li class="menu-item">
                    <a href="/article/create" rel="nofollow" target="">发布博客</a>
                </li>
                <li class="menu-item">
                    @if (Auth::user()) 
                        <a href="/auth/logout" rel="nofollow" target="">{{ Auth::user()->name }} 退出</a>
                    @else
                        <a href="/auth/login" rel="nofollow" target="">登录</a>
                    @endif
                </li>
            </ul>
        </div>
    </nav>

<body>
    <div class="container">
            <section class="content">
                <div class="pad group">
                    @if ($errors->any())
                    <ul class="list-group">
                        @foreach ($errors->all() as $error) 
                            <li class="list-group-item list-group-item-danger"> {{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif
                    @yield('content')
                </div>
            </section>
        </div>
</body>

    <nav class="nav-container group" id="nav-footer">
        <div class="nav-wrap">
            <ul class="nav container group">
                <li class="menu-item">
                    <a href="/" rel="nofollow" target="_blank">Laravel 5 Blog</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
</body>
</html>