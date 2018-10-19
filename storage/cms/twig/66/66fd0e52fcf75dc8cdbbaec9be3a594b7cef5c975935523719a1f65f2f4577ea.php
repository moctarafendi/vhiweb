<?php

/* D:\xampp\htdocs\vhiweb2/plugins/moctar/post/components/listspost/default.htm */
class __TwigTemplate_34b0fbc90d0c87ba3c9b2654c6626f974a469608c263aa75b5b2efbe0ecd841d extends Twig_Template
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
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "onLoad", array());
        // line 2
        echo "
<ul>
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "    \t";
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array()) == twig_get_attribute($this->env, $this->source, $context["post"], "user_id", array()))) {
                // line 6
                echo "        \t<a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("post", array("slug" => twig_get_attribute($this->env, $this->source, $context["post"], "slug", array())));
                echo "\" style=\"font-size: 24px;\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
                echo "</a>
        ";
            }
            // line 8
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array()) != twig_get_attribute($this->env, $this->source, $context["post"], "user_id", array()))) {
                // line 9
                echo "        \t<a href=\"\" style=\"font-size: 24px;\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", array()), "html", null, true);
                echo "</a>
        ";
            }
            // line 11
            echo "        <br>        
        <img src=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "image", array()), "html", null, true);
            echo "\" alt=\"Image\" >
        <h4>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", array()), "html", null, true);
            echo "</h4>
    \t<h6>Author: ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "name", array()), "html", null, true);
            echo "</h6>
    \t<h6>Published at: ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "published_at", array()), "html", null, true);
            echo "</h6>
    \t<br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\vhiweb2/plugins/moctar/post/components/listspost/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 18,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  53 => 11,  47 => 9,  44 => 8,  36 => 6,  33 => 5,  29 => 4,  25 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set posts = __SELF__.onLoad %}

<ul>
    {% for post in posts %}
    \t{% if user.id == post.user_id %}
        \t<a href=\"{{ 'post'|page({ slug: post.slug }) }}\" style=\"font-size: 24px;\">{{ post.title }}</a>
        {% endif %}
        {% if user.id != post.user_id %}
        \t<a href=\"\" style=\"font-size: 24px;\">{{ post.title }}</a>
        {% endif %}
        <br>        
        <img src=\"{{ post.image }}\" alt=\"Image\" >
        <h4>{{ post.content }}</h4>
    \t<h6>Author: {{ post.name }}</h6>
    \t<h6>Published at: {{ post.published_at }}</h6>
    \t<br>
    {% endfor %}
</ul>
", "D:\\xampp\\htdocs\\vhiweb2/plugins/moctar/post/components/listspost/default.htm", "");
    }
}
