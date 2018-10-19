<?php

/* D:\xampp\htdocs\vhiweb2/themes/responsiv-clean/pages/home.htm */
class __TwigTemplate_32c7a39c4ffab5d669ae8dc3b3212b30ac7496721049977130d6929594436407 extends Twig_Template
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
        echo "<h1>Home pages</h1>
";
        // line 2
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("listsPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\vhiweb2/themes/responsiv-clean/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Home pages</h1>
{% component 'listsPost' %}", "D:\\xampp\\htdocs\\vhiweb2/themes/responsiv-clean/pages/home.htm", "");
    }
}
