{include 'Templates/header.tpl'}


{foreach from=$noticias item=p}
<li>{$p->titulo}</li>
{/foreach}

{include 'Templates/footer.tpl'}