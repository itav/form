<textarea {{ include('formelement.tpl') }}
{% if data.name %} name="{{data.name}}" {% endif %}
{% if data.disabled %} disabled="disabled" {% endif %}
{% if data.rows %} rows="{{data.rows}}" {% endif %}{% if data.cols %} cols="{{data.cols}}"{% endif %}>{% if data.value %}{{data.value}}{% endif %}</textarea>
