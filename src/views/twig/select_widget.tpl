<select {{ include('formelement.tpl') }} {% if data.name %}name="{{ data.name }}"{% endif %}>
    {% for option in data.options %}
        {{ include(option.template, {data: option}, with_context = false) }}
    {% endfor %}    
</select>
