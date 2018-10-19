<?php

/* D:\xampp\htdocs\vhiweb2/themes/responsiv-clean/layouts/fallback.htm */
class __TwigTemplate_a78adbb1fd5c99d928699785c66bd23924456ffec85983a38d567cddd102e029 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\vhiweb2/themes/responsiv-clean/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "D:\\xampp\\htdocs\\vhiweb2/themes/responsiv-clean/layouts/fallback.htm", "");
    }
}
