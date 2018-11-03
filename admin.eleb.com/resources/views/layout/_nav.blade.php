<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
             @auth
            <a class="navbar-brand" href="#">饿了吧后台</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">饿了吧后台管理 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('shopcategorie.ShopAdd') }}">添加商户</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('shopcategorie.Add') }}">添加分类</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('shop.Mation') }}">审核列表</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('shopcategorie.List') }}">展示分类</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('admin.List') }}">管理员列表</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('user.ShopAdmin') }}">商户登录列表</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            @endauth
            <ul class="nav navbar-nav navbar-right">
                @guest
                <li><a href="{{ route('admin.Login') }}">登录</a></li>
                <li><a href="{{ route('admin.add') }}">注册</a></li>
                @endguest
                @auth
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="glyphicon glyphicon-user"></span>{{ auth()->user()->name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="">个人中心</a></li>
                        <li><a href="#">修改密码</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{ route('admin.LogOut') }}">退出</a></li>
                    </ul>
                </li>
                    @endauth
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>