<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
</head>
<body>
<header>
    <h1>超简单留言板</h1>
    <div>
        <a href="{{host}}">所有留言</a>
        <a href="{{host}}index/add">添加留言</a>
    </div>
</header>
<div>
    {% block content %}
    {% endblock %}
</div>
<footer>
    <p>&copy 2016 超简单留言板</p>
</footer>
</body>
</html>