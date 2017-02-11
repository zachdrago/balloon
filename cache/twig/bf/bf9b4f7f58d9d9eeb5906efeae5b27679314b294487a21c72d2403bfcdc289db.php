<?php

/* modular/form.html.twig */
class __TwigTemplate_10b35b2b72c23f0950962a5bf6dd816ff3b310ac97e9f24c14260918dadb54ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["hero_image"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "hero.jpg", array(), "array");
        // line 2
        echo "
<div class=\"modular-row form ";
        // line 3
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "class", array());
        echo "\" style=\"background-image: url(";
        echo $this->getAttribute((isset($context["hero_image"]) ? $context["hero_image"] : null), "url", array());
        echo ") !important;\">

<div class=\"centered\">
\t<h1>Join the challenge!</h1>
</div>


<div class=\"wow slideInUp hidden\" style=\"position: absolute; bottom: 0; width: 100%; height: 70vh; left: 0;\">

\t<div class=\"centered\">

\t\t<!-- Change the width and height values to suit you best -->
\t\t<div class=\"typeform-widget\" data-url=\"https://postcardstoohio.typeform.com/to/Gi0xfj\" data-text=\"Join the Challenge\" style=\"width:100%;height:70vh;\"></div>
\t\t<script>
\t\t(function() {
\t\t    var qs, js, q, s, d = document,
\t\t        gi = d.getElementById,
\t\t        ce = d.createElement,
\t\t        gt = d.getElementsByTagName,
\t\t        id = 'typef_orm',
\t\t        b = 'https://s3-eu-west-1.amazonaws.com/share.typeform.com/';
\t\t    if (!gi.call(d, id)) {
\t\t        js = ce.call(d, 'script');
\t\t        js.id = id;
\t\t        js.src = b + 'widget.js';
\t\t        q = gt.call(d, 'script')[0];
\t\t        q.parentNode.insertBefore(js, q)
\t\t    }
\t\t})()
\t\t</script>

\t</div>

</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set hero_image = page.media['hero.jpg'] %}

<div class=\"modular-row form {{ page.header.class}}\" style=\"background-image: url({{ hero_image.url }}) !important;\">

<div class=\"centered\">
\t<h1>Join the challenge!</h1>
</div>


<div class=\"wow slideInUp hidden\" style=\"position: absolute; bottom: 0; width: 100%; height: 70vh; left: 0;\">

\t<div class=\"centered\">

\t\t<!-- Change the width and height values to suit you best -->
\t\t<div class=\"typeform-widget\" data-url=\"https://postcardstoohio.typeform.com/to/Gi0xfj\" data-text=\"Join the Challenge\" style=\"width:100%;height:70vh;\"></div>
\t\t<script>
\t\t(function() {
\t\t    var qs, js, q, s, d = document,
\t\t        gi = d.getElementById,
\t\t        ce = d.createElement,
\t\t        gt = d.getElementsByTagName,
\t\t        id = 'typef_orm',
\t\t        b = 'https://s3-eu-west-1.amazonaws.com/share.typeform.com/';
\t\t    if (!gi.call(d, id)) {
\t\t        js = ce.call(d, 'script');
\t\t        js.id = id;
\t\t        js.src = b + 'widget.js';
\t\t        q = gt.call(d, 'script')[0];
\t\t        q.parentNode.insertBefore(js, q)
\t\t    }
\t\t})()
\t\t</script>

\t</div>

</div>
</div>
", "modular/form.html.twig", "/www/sites/grav/root/user/themes/antimatter/templates/modular/form.html.twig");
    }
}
