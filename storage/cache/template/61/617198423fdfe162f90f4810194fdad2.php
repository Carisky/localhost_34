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

/* default/template/account/register.twig */
class __TwigTemplate_3e88b67c943f100476cb9456f8c67930 extends Template
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
<div id=\"account-register\">
\t<h1>ZAREJESTRUJ SIĘ</h1>
\t<p>masz już konto<a href=\"index.php?route=account/login\"> zaloguj się</a></p>

\t<form id=\"form-register\" action=\"";
        // line 10
        echo ($context["register"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">

\t\t<div class=\"form-group\">
\t\t\t<input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 13
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\"/>
\t\t\t<div id=\"error-firstname\"></div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 18
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\"/>
\t\t\t<div id=\"error-lastname\"></div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<input type=\"email\" name=\"email\" value=\"\" placeholder=\"";
        // line 23
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\"/>
\t\t\t<div id=\"error-email\"></div>
\t\t</div>

\t\t";
        // line 27
        if (($context["config_telephone_display"] ?? null)) {
            // line 28
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<input type=\"tel\" name=\"telephone\" value=\"\" placeholder=\"";
            // line 29
            echo ($context["entry_telephone"] ?? null);
            echo "\" id=\"input-telephone\"/>
\t\t\t\t<div id=\"error-telephone\"></div>
\t\t\t</div>
\t\t";
        }
        // line 33
        echo "
\t\t<div class=\"form-group\">
\t\t\t<input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 35
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\"/>
\t\t\t<div id=\"error-password\"></div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<div>
\t\t\t\t<p>Newsletter</p>
\t\t\t\t<input type=\"hidden\" name=\"newsletter\" value=\"0\"/>
\t\t\t\t<input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"input-newsletter\"/>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 47
        echo ($context["captcha"] ?? null);
        echo "
\t\t<div class=\"form-group\">
\t\t\t";
        // line 49
        if (($context["text_agree"] ?? null)) {
            // line 50
            echo "\t\t\t\t<div>
\t\t\t\t\t<p>Przeczytałem i zgadzam się z Regulamin sklepu</p>
\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\"/>
\t\t\t\t</div>
\t\t\t";
        }
        // line 55
        echo "\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<button type=\"submit\">ZAREJESTRUJ SIĘ</button>
\t\t</div>
\t</form>

\t<div>
\t\t<a href=\"";
        // line 62
        echo ($context["login"] ?? null);
        echo "\">";
        echo ($context["text_login_button"] ?? null);
        echo "</a>
\t</div>
</div>

";
        // line 66
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/account/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 66,  134 => 62,  125 => 55,  118 => 50,  116 => 49,  111 => 47,  96 => 35,  92 => 33,  85 => 29,  82 => 28,  80 => 27,  73 => 23,  65 => 18,  57 => 13,  51 => 10,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/register.twig", "");
    }
}
