<?php

/* modular.html.twig */
class __TwigTemplate_c5649615e873c56f98772b65800964be3b4fee7b6cebc8e8f22a79577a982f14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "modular.html.twig", 1);
        $this->blocks = array(
            'bottom' => array($this, 'block_bottom'),
            'header_navigation' => array($this, 'block_header_navigation'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["show_onpage_menu"] = (($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "onpage_menu", array()) == true) || (null === $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "onpage_menu", array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_bottom($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $this->displayParentBlock("bottom", $context, $blocks);
        echo "
";
    }

    // line 10
    public function block_header_navigation($context, array $blocks = array())
    {
        // line 11
        echo "    ";
        $this->displayParentBlock("header_navigation", $context, $blocks);
        echo "
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array());
        echo "
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 17
            echo "        <div id=\"";
            echo $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method");
            echo "\" ";
            if (($this->env->getExtension('Grav\Common\Twig\TwigExtension')->containsFilter($this->getAttribute($this->getAttribute($context["module"], "header", array()), "title", array()), "In Page Navigation") || $this->env->getExtension('Grav\Common\Twig\TwigExtension')->containsFilter($this->getAttribute($this->getAttribute($context["module"], "header", array()), "title", array()), "Showcase"))) {
            } else {
                echo "data-magellan-target=\"";
                echo $this->getAttribute($this, "pageLinkName", array(0 => $this->getAttribute($context["module"], "menu", array())), "method");
            }
            echo "\">
        \t";
            // line 18
            echo $this->getAttribute($context["module"], "content", array());
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 4
    public function getpageLinkName($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_replace_filter(twig_lower_filter($this->env, (isset($context["text"]) ? $context["text"] : null)), array(" " => "_"));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "modular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 4,  76 => 18,  65 => 17,  61 => 16,  56 => 15,  53 => 14,  46 => 11,  43 => 10,  36 => 7,  33 => 6,  29 => 1,  27 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}
{% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}

{% block bottom %}
    {{ parent() }}
{% endblock %}

{% block header_navigation %}
    {{  parent() }}
{% endblock %}

{% block content %}
    {{ page.content }}
    {% for module in page.collection() %}
        <div id=\"{{ _self.pageLinkName(module.menu) }}\" {% if module.header.title|contains('In Page Navigation') or module.header.title|contains('Showcase') %}{% else %}data-magellan-target=\"{{ _self.pageLinkName(module.menu) }}{% endif %}\">
        \t{{ module.content }}
        </div>
    {% endfor %}
{% endblock %}
", "modular.html.twig", "/www/sites/grav/root/user/themes/antimatter/templates/modular.html.twig");
    }
}
