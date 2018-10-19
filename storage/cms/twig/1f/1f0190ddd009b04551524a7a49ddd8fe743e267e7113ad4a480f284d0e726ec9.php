<?php

/* D:\xampp\htdocs\vhiweb2/plugins/moctar/post/components/createpost/default.htm */
class __TwigTemplate_09ede64d3ec825f1f7911525889999e4b76fc6953614b30cbf8e3a23520f7a6d extends Twig_Template
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
        echo "<h1>Create a Post</h1>

<form method=\"POST\" action=\"";
        // line 3
        echo url("upload");
        echo "\" accept-charset=\"UTF8\" enctype=\"multipart/form-data\">

\t<input type=\"hidden\" name=\"_handler\" value=\"onSave\">

\t";
        // line 7
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), array("token"));
        echo "
\t";
        // line 8
        echo call_user_func_array($this->env->getFunction('form_sessionKey')->getCallable(), array("sessionKey"));
        echo "

\t<input type=\"hidden\" name=\"user_id\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", array()), "html", null, true);
        echo "\">

\t<div class=\"form-row\">
\t\t<label for=\"title\">Title</label>
\t\t<input type=\"text\" class=\"form-control\" name=\"title\">
\t</div>
\t
\t<div class=\"form-row\">
\t\t<label for=\"slug\">Slug</label>
\t\t<input type=\"text\" class=\"form-control\" name=\"slug\">
\t</div>

\t<div class=\"form-row\">
\t\t<label for=\"content\">Content</label>
\t\t<textarea  class=\"form-control\" name=\"content\"></textarea> 
\t</div>

\t<div class=\"form-row\">
\t\t<label for=\"content\">Image</label>
\t\t<input type=\"file\"  class=\"form-control\" name=\"featuredImage\"></input> 
\t</div>

\t<div class=\"form-row\">
\t\t<br>
\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t</div>
\t<br>

\t";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 38
        $context["type"] = "success"        ;        foreach (Flash::success        () as $message) {
            $context["message"] = $message;            // line 39
            echo "\t\t<p>";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "</p>
\t";
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 41
        echo "</form>";
    }

    public function getTemplateName()
    {
        return "D:\\xampp\\htdocs\\vhiweb2/plugins/moctar/post/components/createpost/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 41,  76 => 39,  74 => 38,  43 => 10,  38 => 8,  34 => 7,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Create a Post</h1>

<form method=\"POST\" action=\"{{ url('upload') }}\" accept-charset=\"UTF8\" enctype=\"multipart/form-data\">

\t<input type=\"hidden\" name=\"_handler\" value=\"onSave\">

\t{{ form_token() }}
\t{{ form_sessionKey() }}

\t<input type=\"hidden\" name=\"user_id\" value=\"{{ user.id }}\">

\t<div class=\"form-row\">
\t\t<label for=\"title\">Title</label>
\t\t<input type=\"text\" class=\"form-control\" name=\"title\">
\t</div>
\t
\t<div class=\"form-row\">
\t\t<label for=\"slug\">Slug</label>
\t\t<input type=\"text\" class=\"form-control\" name=\"slug\">
\t</div>

\t<div class=\"form-row\">
\t\t<label for=\"content\">Content</label>
\t\t<textarea  class=\"form-control\" name=\"content\"></textarea> 
\t</div>

\t<div class=\"form-row\">
\t\t<label for=\"content\">Image</label>
\t\t<input type=\"file\"  class=\"form-control\" name=\"featuredImage\"></input> 
\t</div>

\t<div class=\"form-row\">
\t\t<br>
\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit</button>
\t</div>
\t<br>

\t{% flash success %}
\t\t<p>{{ message }}</p>
\t{% endflash %}
</form>", "D:\\xampp\\htdocs\\vhiweb2/plugins/moctar/post/components/createpost/default.htm", "");
    }
}
