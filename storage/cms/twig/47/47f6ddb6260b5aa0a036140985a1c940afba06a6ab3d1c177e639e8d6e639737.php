<?php

/* D:\xampp\htdocs\vhiweb2/plugins/moctar/post/components/detailpost/default.htm */
class __TwigTemplate_642291775e805d14e63f55a9f1d9e148f7a7a3ee68b5af9e0be2a179c5921558 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "show", array());
        // line 2
        echo "

<ul>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 6
            echo "        <h1>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
            echo "</h1>
        <br>        
        <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "image", array()), "html", null, true);
            echo "\" alt=\"Image\" >
        <h4>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", array()), "html", null, true);
            echo "</h4>
    \t<h6>Author: ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "name", array()), "html", null, true);
            echo "</h6>
    \t<h6>Published at: ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", array()), "html", null, true);
            echo "</h6>

    \t<br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\vhiweb2/plugins/moctar/post/components/detailpost/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  52 => 11,  48 => 10,  44 => 9,  40 => 8,  34 => 6,  30 => 5,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set posts = __SELF__.show %}


<ul>
    {% for post in posts %}
        <h1>{{ post.title }}</h1>
        <br>        
        <img src=\"{{ post.image }}\" alt=\"Image\" >
        <h4>{{ post.content }}</h4>
    \t<h6>Author: {{ post.name }}</h6>
    \t<h6>Published at: {{ post.published_at }}</h6>

    \t<br>
    {% endfor %}
</ul>", "D:\\xampp\\htdocs\\vhiweb2/plugins/moctar/post/components/detailpost/default.htm", "");
    }
}
