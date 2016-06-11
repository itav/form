<form {{include('formelement.twig')}}
    {% if data.name is defined  %} name="{{data.name}}" {% endif %} 
    {% if data.action is defined %} action="{{data.action}}" {% endif %}
    {% if data.method is defined  %} method="{{data.method}}" {% endif %}
    {% if data.enctype is defined  %} enctype="{{data.enctype}}" {% endif %}>
    {% for element in data.elements %}
        {{ include(element.template, {data: element}, with_context = false)}}
    {% endfor %}
</form>

