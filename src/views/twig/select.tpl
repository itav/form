{% if data.label and data.name %}
    <label for="{{ data.name }}">{{ data.label }}</label>
{% endif %}
<select {{ include('formelement.twig') }} {% if data.name %}name="{{ data.name }}"{% endif %}>
    {% for option in data.options %}
        {{ include(option.template, {data: option}, with_context = false) }}
    {% endfor %}    
</select>
