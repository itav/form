<input {{ include('formelement.tpl') }}
    {%if data.name%} name="{{data.name}}"{% endif %} 
    {%if data.type%} type="{{data.type}}"{% endif %} 
    {%if data.value%} value="{{data.value}}"{% endif %}
    {%if data.disabled%} disabled="disabled"{% endif %}
    {%if data.checked%} checked="checked"{% endif %} 
    {%if data.size%} size="{{data.size}}"{% endif %}>    
