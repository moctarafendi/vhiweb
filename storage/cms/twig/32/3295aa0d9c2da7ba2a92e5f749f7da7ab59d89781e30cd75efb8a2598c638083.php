<?php

/* D:\xampp\htdocs\vhiweb2/themes/responsiv-clean/pages/upload.htm */
class __TwigTemplate_4fb379fa0e2eecfe93f27d09913eb74791e112ec8ea894412e260b597a9c719a extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("createPost"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\vhiweb2/themes/responsiv-clean/pages/upload.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'createPost' %}", "D:\\xampp\\htdocs\\vhiweb2/themes/responsiv-clean/pages/upload.htm", "");
    }
}
