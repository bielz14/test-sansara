<!DOCTYPE html>
<html lang="ru"><head>
<link rel="stylesheet" type="text/css" href="/public/css/admin_css/main.css">
<title>Панель управления</title>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <ul class="nav ace-nav pull-right">
                <li>
                    <a class="" href="/admin/posts">Новости</a>
                </li>
                <li>
                    <a class="" href="/admin/varieties">Сорта</a>
                </li>
                <li>
                    <a class="" href="/admin/patents">Патенты на сорта</a>
                </li>
                @if (\Auth::user())
                    <li class="red">
                        <a href="/logout"><span class="menu-text">Выход</span></a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
<div class="main-container container-fluid">
    @yield('content')
</div>

</body>
</html>