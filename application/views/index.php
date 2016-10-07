{% extends "layout.php" %}
{% block content %}
<ul>
    {% for val in data %}
    <li>
        <div>
            <h1>{{ val.title }}</h1>
            <p>{{ val.content }}</p>
            <p><span>{{ val.creattime|date('Y-m-d H:i:s') }}</span></p>
            <a href="{{host}}index/del/id/{{val.id}}">删除留言</a>
        </div>
    </li>
    {% endfor %}
</ul>
{% endblock %}