{% if data.label is defined and data.name is defined%}
    <label for="{{ data.name }}">{{ data.label }}</label>
{% endif %}