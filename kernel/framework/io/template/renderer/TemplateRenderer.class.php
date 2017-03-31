<?php


































interface TemplateRenderer
{






function render(TemplateData $data,TemplateLoader $loader);





function add_lang(array $lang);
}
?>
