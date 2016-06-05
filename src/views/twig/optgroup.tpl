<optgroup {{include('formelement.twig')}} 
    label="{{data.label}}" 
    {% if data.disabled %} disabled="disabled" {%endif%}> 
    {% for option in data.options %}
        {{ include(option.template, {data: option}, with_context = false) }}
    {% endfor %} 
</optgroup>

