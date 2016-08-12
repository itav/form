<fieldset {{include('formelement.tpl')}} >
    {% for element in data.elements %}
        {{ include(element.template, {data: element}, with_context = false)}}
    {% endfor %}
</fieldset>