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
class __TwigTemplate_d29d0f74faef5a5aa3c7db97b8058772 extends Template
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
\t\t";
        // line 11
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            // line 12
            echo "\t\t\t<div>
\t\t\t\t<select name=\"customer_group_id\" id=\"input-customer-group\">
\t\t\t\t\t";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 15
                echo "\t\t\t\t\t\t<option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 15);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 15) == ($context["customer_group_id"] ?? null))) {
                    echo " selected ";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 15);
                echo "</option>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "\t\t\t\t</select>
\t\t\t</div>
\t\t";
        }
        // line 20
        echo "
\t\t<div class=\"form-group\">
\t\t\t<input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 22
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\"/>
\t\t\t<div id=\"error-firstname\"></div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 27
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\"/>
\t\t\t<div id=\"error-lastname\"></div>
\t\t</div>

\t\t<div class=\"form-group\">
\t\t\t<input type=\"email\" name=\"email\" value=\"\" placeholder=\"";
        // line 32
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\"/>
\t\t\t<div id=\"error-email\"></div>
\t\t</div>

\t\t";
        // line 36
        if (($context["config_telephone_display"] ?? null)) {
            // line 37
            echo "\t\t\t<div class=\"form-group\">
\t\t\t\t<input type=\"tel\" name=\"telephone\" value=\"\" placeholder=\"";
            // line 38
            echo ($context["entry_telephone"] ?? null);
            echo "\" id=\"input-telephone\"/>
\t\t\t\t<div id=\"error-telephone\"></div>
\t\t\t</div>
\t\t";
        }
        // line 42
        echo "
\t\t<div class=\"form-group\">
\t\t\t<input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 44
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
        // line 56
        echo ($context["captcha"] ?? null);
        echo "
\t\t<div class=\"form-group\">
\t\t\t";
        // line 58
        if (($context["text_agree"] ?? null)) {
            // line 59
            echo "\t\t\t\t<div>
\t\t\t\t\t<p>";
            // line 60
            echo ($context["text_agree"] ?? null);
            echo "</p>
\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\"/>
\t\t\t\t</div>
\t\t\t";
        }
        // line 64
        echo "\t\t</div>
\t\t<div class=\"form-group\">
\t\t\t<button type=\"submit\">ZAREJESTRUJ SIĘ</button>
\t\t</div>
\t</form>

\t<div>
\t\t<a href=\"";
        // line 71
        echo ($context["login"] ?? null);
        echo "\">";
        echo ($context["text_login_button"] ?? null);
        echo "</a>
\t</div>
</div>

";
        // line 75
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
        return array (  178 => 75,  169 => 71,  160 => 64,  153 => 60,  150 => 59,  148 => 58,  143 => 56,  128 => 44,  124 => 42,  117 => 38,  114 => 37,  112 => 36,  105 => 32,  97 => 27,  89 => 22,  85 => 20,  80 => 17,  65 => 15,  61 => 14,  57 => 12,  55 => 11,  51 => 10,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/account/register.twig", "");
    }
}
