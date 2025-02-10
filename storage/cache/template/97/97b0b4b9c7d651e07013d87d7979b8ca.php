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
class __TwigTemplate_e36133a1a92ffe14b5e9587aa91397b9 extends Template
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
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<title>Checkout Page</title>
\t\t<link href=\"catalog/view/theme/default/stylesheet/common/checkout.css\" type=\"text/css\" rel=\"stylesheet\"/>
\t</head>
\t<body>
\t\t";
        // line 10
        echo ($context["header"] ?? null);
        echo "
\t\t<main class=\"checkout-container\">
\t\t\t<section class=\"checkout-form\">
\t\t\t\t<h1>Twoje dane</h1>
\t\t\t\t<form>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" id=\"first-name\" placeholder=\"Imię *\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" id=\"last-name\" placeholder=\"Nazwisko *\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" id=\"address\" placeholder=\"Nazwa ulicy, numer budynku / numer lokalu *\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" id=\"zip-code\" placeholder=\"Kod pocztowy *\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" id=\"city\" placeholder=\"Miasto *\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"tel\" id=\"phone\" placeholder=\"Numer telefonu *\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"email\" id=\"email\" placeholder=\"Adres e-mail *\" required>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</section>

\t\t\t<section id=\"checkout-cart\" class=\"checkout-cart\">
\t\t\t\t<h2>Zawartość koszyka</h2>
\t\t\t\t<div
\t\t\t\t\tid=\"checkout-list\"><!-- Товары будут отрисованы через JS -->
\t\t\t\t</div>
\t\t\t\t<div class=\"summary\">
\t\t\t\t\t<h3>Podsumowanie</h3>
\t\t\t\t\t<p id=\"total-price\">Cena: 0 zł</p>
\t\t\t\t\t<p id=\"shipping-cost\">Koszt przesyłki: 0 zł</p>
\t\t\t\t\t<p id=\"grand-total\">Wszystko: 0 zł</p>
\t\t\t\t\t<div class=\"payment_methods\">
\t\t\t\t\t\t";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["payment_methods"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 51
            echo "\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"payment_method\" value=\"";
            // line 52
            echo twig_get_attribute($this->env, $this->source, $context["payment"], "code", [], "any", false, false, false, 52);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["payment"], "title", [], "any", false, false, false, 53);
            echo "
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<button>Kupuję i płacę</button>
\t\t\t\t</div>

\t\t\t</section>
\t\t</main>
\t\t";
        // line 62
        echo ($context["footer"] ?? null);
        echo "
\t\t <script type=\"text/javascript\" src=\"catalog/view/javascript/checkout/checkout.js\"></script>
\t</body>
</html></body></html>
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
        return array (  119 => 62,  111 => 56,  102 => 53,  98 => 52,  95 => 51,  91 => 50,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/checkout.twig", "");
    }
}
