<?php

/* D:\xampp\htdocs\vhiweb2/themes/responsiv-clean/pages/login-register.htm */
class __TwigTemplate_00511f3b1a6e794dca8c2a6b4798653586d2a8c137a52f96909829d05df0806e extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("account"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\vhiweb2/themes/responsiv-clean/pages/login-register.htm";
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
        return new Twig_Source("{% component 'account' %}", "D:\\xampp\\htdocs\\vhiweb2/themes/responsiv-clean/pages/login-register.htm", "");
    }
}
