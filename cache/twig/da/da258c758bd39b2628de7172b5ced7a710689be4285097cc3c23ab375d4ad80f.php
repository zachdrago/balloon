<?php

/* modular/logo.html.twig */
class __TwigTemplate_b63f6027dfa9fbc7ea8ff9cd2448e2cc75c96924a88f802bdbad9d50edbb1e45 extends Twig_Template
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
        $context["logo_image"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "logo.png", array(), "array");
        // line 3
        echo "
<div class=\"modular-row logo ";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "class", array());
        echo "\" style=\"background-image: url(";
        echo $this->getAttribute((isset($context["hero_image"]) ? $context["hero_image"] : null), "url", array());
        echo ") !important;\">

\t<div class=\"logo-img\">
\t\t<img src=\"";
        // line 7
        echo $this->getAttribute((isset($context["logo_image"]) ? $context["logo_image"] : null), "url", array());
        echo "\" />
\t</div>

</div>

<!-- slideIn";
        // line 12
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "alignment", array());
        echo " -->";
    }

    public function getTemplateName()
    {
        return "modular/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 12,  34 => 7,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
{% set logo_image = page.media['logo.png'] %}

<div class=\"modular-row logo {{ page.header.class}}\" style=\"background-image: url({{ hero_image.url }}) !important;\">

\t<div class=\"logo-img\">
\t\t<img src=\"{{ logo_image.url }}\" />
\t</div>

</div>

<!-- slideIn{{ page.header.alignment}} -->", "modular/logo.html.twig", "/www/sites/grav/root/user/themes/antimatter/templates/modular/logo.html.twig");
    }
}
