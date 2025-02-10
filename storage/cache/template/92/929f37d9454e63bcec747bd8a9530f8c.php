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
class __TwigTemplate_713456214d233d8829b4075b7d6e5412 extends Template
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
<script src=\"catalog/view/javascript/jquery/jquery.oc.ajax.js\"></script>

\t<link href=\"catalog/view/theme/default/stylesheet/common/auth.css\" type=\"text/css\" rel=\"stylesheet\"/>
</head>

";
        // line 7
        echo ($context["header"] ?? null);
        echo "
<div id=\"account-login\" class=\"container\">
\t<div class=\"row\">
\t\t<div class=\"col mb-3\">
\t\t\t<div class=\"border rounded p-3 d-flex flex-column h-100\">
\t\t\t\t<form id=\"form-login\" action=\"";
        // line 12
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
\t\t\t\t\t<h2>ZALOGUJ SIĘ</h2>
\t\t\t\t\t<p>WITAMY Z POWROTEM DO NAS</p>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"email\" value=\"";
        // line 16
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"password\" name=\"password\" value=\"";
        // line 19
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control mb-1\"/>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">";
        // line 23
        echo ($context["button_login"] ?? null);
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 25
        if (($context["redirect"] ?? null)) {
            // line 26
            echo "\t\t\t\t\t\t<input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\"/>
\t\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t</form>
\t\t\t\t<div class=\"text-center mt-3\">
\t\t\t\t\t<a href=\"";
        // line 30
        echo ($context["register"] ?? null);
        echo "\" class=\"btn btn-secondary\">Register</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        // line 36
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
        return array (  103 => 36,  94 => 30,  90 => 28,  84 => 26,  82 => 25,  77 => 23,  68 => 19,  60 => 16,  53 => 12,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/login.twig", "");
    }
}
