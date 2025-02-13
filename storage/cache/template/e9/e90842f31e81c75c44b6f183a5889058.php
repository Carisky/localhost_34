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

/* default/template/common/checkout.twig */
class __TwigTemplate_1f5dcf7cbd1d11963bdcb225c9230e84 extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<title>Checkout Page</title>
\t<link href=\"catalog/view/theme/default/stylesheet/common/checkout.css\" type=\"text/css\" rel=\"stylesheet\"/>
</head>
<body>
\t";
        // line 10
        echo ($context["header"] ?? null);
        echo "
\t<main class=\"checkout-container\">
\t\t<section class=\"checkout-form\">
\t\t\t<h1>Twoje dane</h1>
\t\t\t<form id=\"checkout-form\">
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"text\" id=\"first-name\" placeholder=\"Imię *\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"text\" id=\"last-name\" placeholder=\"Nazwisko *\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"text\" id=\"address\" placeholder=\"Nazwa ulicy, numer budynku / numer lokalu *\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"text\" id=\"zip-code\" placeholder=\"Kod pocztowy *\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"text\" id=\"city\" placeholder=\"Miasto *\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<select id=\"country\" required>
\t\t\t\t\t\t<option value=\"\">Wybierz kraj *</option>
\t\t\t\t\t\t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 34
            echo "\t\t\t\t\t\t\t<option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", [], "any", false, false, false, 34);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["country"], "name", [], "any", false, false, false, 34);
            echo "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<select id=\"zone\" required>
\t\t\t\t\t\t<option value=\"\">Wybierz region *</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"tel\" id=\"phone\" placeholder=\"Numer telefonu *\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"email\" id=\"email\" placeholder=\"Adres e-mail *\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input id=\"comment\" placeholder=\"Komentarz do zamówienia\"></input>
\t\t\t\t</div>
\t\t\t</form>
\t\t</section>

\t\t<section id=\"checkout-cart\" class=\"checkout-cart\">
\t\t\t<h2>Zawartość koszyka</h2>
\t\t\t<div id=\"checkout-list\"><!-- Товары будут отрисованы через JS --></div>
\t\t\t<div class=\"summary\">
\t\t\t\t<h3>Podsumowanie</h3>
\t\t\t\t<p id=\"total-price\">Cena: 0 zł</p>
\t\t\t\t<p id=\"shipping-cost\">Koszt przesyłki: 0 zł</p>
\t\t\t\t<p id=\"grand-total\">Wszystko: 0 zł</p>

\t\t\t\t<div class=\"shipping_methods\">
\t\t\t\t\t<h4>Wybierz sposób dostawy</h4>
\t\t\t\t\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shipping_methods"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["shipping"]) {
            // line 67
            echo "\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"radio\" name=\"shipping_method\" value=\"";
            // line 68
            echo twig_get_attribute($this->env, $this->source, $context["shipping"], "code", [], "any", false, false, false, 68);
            echo "\">
\t\t\t\t\t\t\t";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["shipping"], "title", [], "any", false, false, false, 69);
            echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "\t\t\t\t</div>

\t\t\t\t<div class=\"payment_methods\">
\t\t\t\t\t<h4>Wybierz sposób płatności</h4>
\t\t\t\t\t";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["payment_methods"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 77
            echo "\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t<input type=\"radio\" name=\"payment_method\" value=\"";
            // line 78
            echo twig_get_attribute($this->env, $this->source, $context["payment"], "code", [], "any", false, false, false, 78);
            echo "\">
\t\t\t\t\t\t\t";
            // line 79
            echo twig_get_attribute($this->env, $this->source, $context["payment"], "title", [], "any", false, false, false, 79);
            echo "
\t\t\t\t\t\t</label>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "\t\t\t\t</div>

\t\t\t\t<button id=\"place-order\">Kupuję i płacę</button>
\t\t\t</div>
\t\t</section>
\t</main>
\t";
        // line 88
        echo ($context["footer"] ?? null);
        echo "
\t<script type=\"text/javascript\" src=\"catalog/view/javascript/checkout/checkout.js\"></script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 88,  167 => 82,  158 => 79,  154 => 78,  151 => 77,  147 => 76,  141 => 72,  132 => 69,  128 => 68,  125 => 67,  121 => 66,  89 => 36,  78 => 34,  74 => 33,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/checkout.twig", "");
    }
}
