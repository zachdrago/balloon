<?php

/* modular/hero.html.twig */
class __TwigTemplate_16d581197715cebd24bf1df9039ce2f437ed6cdedfb35cdabe7f0947bdcc3ab9 extends Twig_Template
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
        echo "<!-- ";
        $context["hero_image"] = $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "hero.jpg", array(), "array");
        echo " -->
";
        // line 2
        $context["hero_image"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "hero.jpg", array(), "array"), "contrast", array(0 => 0), "method"), "brightness", array(0 =>  +30), "method");
        // line 3
        echo "
<div class=\"modular-row hero ";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "class", array());
        echo "\" style=\"background-image: url(";
        echo $this->getAttribute((isset($context["hero_image"]) ? $context["hero_image"] : null), "url", array());
        echo ") !important;\">
    <div class=\"hero-text ";
        // line 5
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "alignment", array());
        echo " wow offScreen";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "alignment", array());
        echo " \" style=\"margin-";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "alignment", array());
        echo ": -160px; padding-";
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "alignment", array());
        echo ": 100px;\">
    ";
        // line 6
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
    </div>
</div>

<!-- slideIn";
        // line 10
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "alignment", array());
        echo " -->";
    }

    public function getTemplateName()
    {
        return "modular/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 10,  45 => 6,  35 => 5,  29 => 4,  26 => 3,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- {% set hero_image = page.media['hero.jpg'] %} -->
{% set hero_image = page.media['hero.jpg'].contrast(0).brightness(+30) %}

<div class=\"modular-row hero {{ page.header.class}}\" style=\"background-image: url({{ hero_image.url }}) !important;\">
    <div class=\"hero-text {{ page.header.alignment}} wow offScreen{{ page.header.alignment}} \" style=\"margin-{{page.header.alignment}}: -160px; padding-{{page.header.alignment}}: 100px;\">
    {{ content }}
    </div>
</div>

<!-- slideIn{{ page.header.alignment}} -->", "modular/hero.html.twig", "/www/sites/grav/root/user/themes/antimatter/templates/modular/hero.html.twig");
    }
}
