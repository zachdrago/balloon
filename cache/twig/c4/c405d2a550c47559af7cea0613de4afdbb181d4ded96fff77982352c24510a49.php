<?php

/* modular/blogs.html.twig */
class __TwigTemplate_073b8d0371dd3cbbb8fcf51aeb304effa8ef1430d4772d669e358a2875ee5c9b extends Twig_Template
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
        $context["collection"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method");
        // line 2
        echo "
<div class=\"modular-row blogs ";
        // line 3
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "class", array());
        echo "\">

\t";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 6
            echo "\t";
            $context["blog_image"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["page"], "media", array()), "hero.jpg", array(), "array"), "contrast", array(0 => 20), "method"), "brightness", array(0 =>  +30), "method");
            // line 7
            echo "
\t<div class=\"grid-item wow zoomIn\" style=\"background-image: url(";
            // line 8
            echo $this->getAttribute((isset($context["blog_image"]) ? $context["blog_image"] : null), "url", array());
            echo ");\">

\t\t<a href=\"";
            // line 10
            echo $this->getAttribute($context["page"], "url", array());
            echo "\" class=\"grid-title\">
\t\t\t<div>
\t\t\t\t<h2>";
            // line 12
            echo $this->getAttribute($context["page"], "title", array());
            echo "</h2>
\t\t\t\t<time class=\"dt-published\" datetime=\"";
            // line 13
            echo twig_date_format_filter($this->env, $this->getAttribute($context["page"], "date", array()), "c");
            echo "\">
\t                <span>";
            // line 14
            echo twig_date_format_filter($this->env, $this->getAttribute($context["page"], "date", array()), "d");
            echo "</span>
                <em>";
            // line 15
            echo twig_date_format_filter($this->env, $this->getAttribute($context["page"], "date", array()), "M");
            echo "</em>
            </time>
\t\t\t</div>
\t\t</a>
\t</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "modular/blogs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  61 => 15,  57 => 14,  53 => 13,  49 => 12,  44 => 10,  39 => 8,  36 => 7,  33 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set collection = page.collection() %}

<div class=\"modular-row blogs {{ page.header.class}}\">

\t{% for page in collection %}
\t{% set blog_image = page.media['hero.jpg'].contrast(20).brightness(+30) %}

\t<div class=\"grid-item wow zoomIn\" style=\"background-image: url({{ blog_image.url }});\">

\t\t<a href=\"{{ page.url }}\" class=\"grid-title\">
\t\t\t<div>
\t\t\t\t<h2>{{ page.title }}</h2>
\t\t\t\t<time class=\"dt-published\" datetime=\"{{ page.date|date(\"c\") }}\">
\t                <span>{{ page.date|date(\"d\") }}</span>
                <em>{{ page.date|date(\"M\") }}</em>
            </time>
\t\t\t</div>
\t\t</a>
\t</div>
    {% endfor %}

</div>
", "modular/blogs.html.twig", "/www/sites/grav/root/user/themes/antimatter/templates/modular/blogs.html.twig");
    }
}
