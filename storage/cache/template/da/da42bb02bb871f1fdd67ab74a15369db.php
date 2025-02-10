<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default/template/account/login.twig */
class __TwigTemplate_dd2fd18b25d50a2119e44263057c4b47 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<head>
\t<link href=\"catalog/view/theme/default/stylesheet/common/auth.css\" type=\"text/css\" rel=\"stylesheet\"/>
</head>

";
        // line 5
        echo ($context["header"] ?? null);
        echo "
<div id=\"account-login\" class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col mb-3\">
\t\t\t<div class=\"border rounded p-3 d-flex flex-column h-100\">
\t\t\t\t<form id=\"form-login\" action=\"";
        // line 10
        echo ($context["action"] ?? null);
        echo "/validate\" method=\"post\" data-oc-toggle=\"ajax\">
\t\t\t\t\t<h2>ZALOGUJ SIĘ</h2>
\t\t\t\t\t<p>WITAMY Z POWROTEM DO NAS</p>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"email\" value=\"";
        // line 14
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"";
        // line 17
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control mb-1\"/>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">";
        // line 21
        echo ($context["button_login"] ?? null);
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 23
        if (($context["redirect"] ?? null)) {
            // line 24
            echo "\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\"/>
\t\t\t\t\t";
        }
        // line 26
        echo "\t\t\t\t</form>
\t\t\t\t<div class=\"text-center mt-3\">
\t\t\t\t\t<a href=\"";
        // line 28
        echo ($context["register"] ?? null);
        echo "\" class=\"btn btn-secondary\">Register</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 34
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/account/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 34,  92 => 28,  88 => 26,  82 => 24,  80 => 23,  75 => 21,  66 => 17,  58 => 14,  51 => 10,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/login.twig", "");
    }
}
