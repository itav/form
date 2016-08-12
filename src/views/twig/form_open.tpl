<form {{include('formelement.tpl')}}
    {% if data.name %} name="{{data.name}}" {% endif %} 
    {% if data.name %} action="{{data.action}}" {% endif %}
    {% if data.name %} method="{{data.method}}" {% endif %}
    {% if data.name %} enctype="{{data.enctype}}" {% endif %}>

