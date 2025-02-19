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
class __TwigTemplate_5ec7297a55a4454c0a780b56adafce6e extends Template
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
        // line 14
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\"/>
\t\t\t<div id=\"error-firstname\"></div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 19
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\"/>
\t\t\t<div id=\"error-lastname\"></div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<input type=\"email\" name=\"email\" value=\"\" placeholder=\"";
        // line 24
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\"/>
\t\t\t<div id=\"error-email\"></div>
\t\t</div>

\t\t";
        // line 28
        if (($context["config_telephone_display"] ?? null)) {
            // line 29
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<input type=\"tel\" name=\"telephone\" value=\"\" placeholder=\"";
            // line 30
            echo ($context["entry_telephone"] ?? null);
            echo "\" id=\"input-telephone\"/>
\t\t\t\t<div id=\"error-telephone\"></div>
\t\t\t</div>
\t\t";
        }
        // line 34
        echo "
\t\t<div class=\"form-group\">
\t\t\t<input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 36
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
        // line 48
        echo ($context["captcha"] ?? null);
        echo "
\t\t<div class=\"form-group\">
\t\t\t";
        // line 50
        if (($context["text_agree"] ?? null)) {
            // line 51
            echo "\t\t\t\t<div>
\t\t\t\t\t<p>";
            // line 52
            echo ($context["text_agree"] ?? null);
            echo "</p>
\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\"/>
\t\t\t\t</div>
\t\t\t";
        }
        // line 56
        echo "\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<button type=\"submit\">ZAREJESTRUJ SIĘ</button>
\t\t</div>
\t</form>

\t<div>
\t\t<a href=\"";
        // line 63
        echo ($context["login"] ?? null);
        echo "\">";
        echo ($context["text_login_button"] ?? null);
        echo "</a>
\t</div>
</div>

";
        // line 67
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
        return array (  147 => 67,  138 => 63,  129 => 56,  122 => 52,  119 => 51,  117 => 50,  112 => 48,  97 => 36,  93 => 34,  86 => 30,  83 => 29,  81 => 28,  74 => 24,  66 => 19,  58 => 14,  51 => 10,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/register.twig", "");
    }
}
