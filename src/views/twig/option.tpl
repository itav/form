<option {{ include('formelement.tpl') }}
    {% if data.value %}value="{{ data.value }}"{% endif %} 
    {% if data.selected %}selected="selected" {% endif %}>
    {{ data.label }}
</option>
