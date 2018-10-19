<?php

/* D:\xampp\htdocs\vhiweb2/themes/responsiv-clean/partials/site/sidebar.htm */
class __TwigTemplate_ddc0546a7f188907a80c0220705b499d94c6772994919061227ba84581eb1762 extends Twig_Template
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
        echo "<div class=\"sidebar-close visible-sm visible-xs\">
    <a href=\"javascript:;\" onclick=\"toggleSidebar()\" class=\"close\">&times;</a>
</div>

<div class=\"sidebar-segment hidden-sm hidden-xs\">
    <h2 class=\"site-name\">
        <a href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a>
    </h2>
    ";
        // line 9
        if (($context["user"] ?? null)) {
            // line 10
            echo "    <br>
    <h2 class=\"site-name\">
        <a href=\"";
            // line 12
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("upload");
            echo "\">Upload</a>
    </h2>
    <br>
    <h2 class=\"site-name\">
        <a href=\"\" data-request=\"onLogout\" data-request-data=\"redirect: '/login'\">Logout</a>
    </h2>
    
    ";
        }
        // line 20
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\vhiweb2/themes/responsiv-clean/partials/site/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 20,  42 => 12,  38 => 10,  36 => 9,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"sidebar-close visible-sm visible-xs\">
    <a href=\"javascript:;\" onclick=\"toggleSidebar()\" class=\"close\">&times;</a>
</div>

<div class=\"sidebar-segment hidden-sm hidden-xs\">
    <h2 class=\"site-name\">
        <a href=\"{{ 'home'|page }}\">Home</a>
    </h2>
    {% if user %}
    <br>
    <h2 class=\"site-name\">
        <a href=\"{{ 'upload'|page }}\">Upload</a>
    </h2>
    <br>
    <h2 class=\"site-name\">
        <a href=\"\" data-request=\"onLogout\" data-request-data=\"redirect: '/login'\">Logout</a>
    </h2>
    
    {% endif %}
</div>", "D:\\xampp\\htdocs\\vhiweb2/themes/responsiv-clean/partials/site/sidebar.htm", "");
    }
}
