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

/* catalog/view/template/common/wholesale.twig */
class __TwigTemplate_1359c14cdfb7a9a178415cbb9df49b56 extends Template
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
\t<link href=\"catalog/view/stylesheet/common/breadcrumbs.css\" type=\"text/css\" rel=\"stylesheet\"/>
\t<link href=\"catalog/view/stylesheet/common/wholesale.css\" type=\"text/css\" rel=\"stylesheet\"/>
</head>

";
        // line 6
        echo ($context["header"] ?? null);
        echo "
<main>
\t";
        // line 8
        if (($context["breadcrumbs"] ?? null)) {
            // line 9
            echo "\t\t<div class=\"breadcrumbs\">
\t\t\t";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 11
                echo "\t\t\t\t<div>
\t\t\t\t\t";
                // line 12
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 12)) {
                    // line 13
                    echo "\t\t\t\t\t\t<span class=\"last\">";
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
                    echo "</span>
\t\t\t\t\t";
                } else {
                    // line 15
                    echo "\t\t\t\t\t\t<a class=\"link\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
                    echo "</a>
\t\t\t\t\t\t<span>/</span>
\t\t\t\t\t";
                }
                // line 18
                echo "\t\t\t\t</div>
\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "\t\t</div>
\t";
        }
        // line 22
        echo "
\t<section class=\"checkout-form\">
\t\t<form>
\t\t\t<section class=\"block\">
\t\t\t\t<h1>Twoje dane</h1>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"text\" id=\"first-name\" placeholder=\"Imię *\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"text\" id=\"last-name\" placeholder=\"Nazwisko *\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"tel\" id=\"phone\" placeholder=\"Numer telefonu *\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"email\" id=\"email\" placeholder=\"Adres e-mail *\" required>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<section class=\"block\">
\t\t\t\t<h1>Dane do faktury</h1>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"text\" id=\"firm-name\" placeholder=\"Nazwa firmy *\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"text\" id=\"nip-number\" placeholder=\"Numer NIP *\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"text\" id=\"address\" placeholder=\"Pełny adres *\" required>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<section class=\"block\">
\t\t\t\t<h1>Dane do wysyłki</h1>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"text\" id=\"first-name\" placeholder=\"Imię *\" required>
\t\t\t\t</div>
\t\t\t</section>
\t\t\t<section class=\"block\">
\t\t\t\t<h1>Komentarz do zamówienia</h1>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<input type=\"text\" id=\"comment\" placeholder=\"Komentarz\">
\t\t\t\t</div>
\t\t\t</section>
\t\t</form>
\t</section>

\t";
        // line 67
        if (($context["category_products"] ?? null)) {
            // line 68
            echo "\t\t<div class=\"category-products\">
\t\t\t";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["category_products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 70
                echo "\t\t\t\t<div class=\"category\">
\t\t\t\t\t<h2>";
                // line 71
                echo twig_get_attribute($this->env, $this->source, $context["category"], "category_name", [], "any", false, false, false, 71);
                echo "</h2>
\t\t\t\t\t<!-- Название категории -->

\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>Okładka</th>
\t\t\t\t\t\t\t\t<th>Nazwa produktu</th>
\t\t\t\t\t\t\t\t<th>Ilość opakowań zbiorczych</th>
\t\t\t\t\t\t\t\t<th>Sztuk w opakowaniu</th>
\t\t\t\t\t\t\t\t<th>Suma</th>
\t\t\t\t\t\t\t\t<th>Cena za jedno opakowanie</th>
\t\t\t\t\t\t\t\t<th>Wszystko</th>
\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t<th>Podatek</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
                // line 89
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 89));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 90
                    echo "\t\t\t\t\t\t\t\t<tr data-currency=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "currency_symbol", [], "any", false, false, false, 90);
                    echo "\" data-product-quantity-per-pack=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity_per_pack", [], "any", false, false, false, 90);
                    echo "\" data-product-id=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 90);
                    echo "\" data-price=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price_per_pack", [], "any", false, false, false, 90);
                    echo "\">
\t\t\t\t\t\t\t\t\t<td><img src=\"";
                    // line 91
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 91);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 91);
                    echo "\" class=\"img-thumbnail\"/></td>
\t\t\t\t\t\t\t\t\t<td data-label=\"Nazwa produktu\">
\t\t\t\t\t\t\t\t\t\t<div class=\"data\">";
                    // line 93
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 93);
                    echo "</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"minus\">-</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"value\">1</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"plus\">+</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td data-label=\"Ilość\">";
                    // line 102
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity_per_pack", [], "any", false, false, false, 102);
                    echo "</td>
\t\t\t\t\t\t\t\t\t<td data-label=\"Suma\">
\t\t\t\t\t\t\t\t\t\t<div class=\"quantity_per_pack data sum\">";
                    // line 104
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity_per_pack", [], "any", false, false, false, 104);
                    echo "</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td data-label=\"Cena\">";
                    // line 106
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price_per_pack", [], "any", false, false, false, 106);
                    echo "<span>";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "currency_symbol", [], "any", false, false, false, 106);
                    echo "</span></td>
\t\t\t\t\t\t\t\t\t<td data-label=\"Wszystko\">
\t\t\t\t\t\t\t\t\t\t<div class=\"data total-price\">";
                    // line 108
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price_per_pack", [], "any", false, false, false, 108);
                    echo "</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td data-label=\"Status\"><input type=\"checkbox\"></td>
\t\t\t\t\t\t\t\t\t<td data-label=\"Podatek\">";
                    // line 111
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "tax_rate", [], "any", false, false, false, 111);
                    echo "</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 118
            echo "\t\t</div>
\t";
        } else {
            // line 120
            echo "\t\t<p>Brak produktów w tej kategorii.</p>
\t";
        }
        // line 122
        echo "    <div class=\"checkout\">
        <div class=\"content\">
            <div class=\"price\">
                <div class=\"text\">Cena</div>
\t\t\t\t<div class=\"wrapper\">
\t\t\t\t<div id=\"checkout-price\">0</div>
\t\t\t\t<span class=\"text\">";
        // line 128
        echo ($context["product_currency"] ?? null);
        echo "</span>
\t\t\t\t</div>
                
            </div>
            
            <div id=\"checkout\">Zamawiam</div>
        </div>
    </div>
</main>
";
        // line 137
        echo ($context["footer"] ?? null);
        echo "
 <script type=\"text/javascript\" src=\"catalog/view/javascript/wholesale/wholesale.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/wholesale.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 137,  281 => 128,  273 => 122,  269 => 120,  265 => 118,  256 => 114,  247 => 111,  241 => 108,  234 => 106,  229 => 104,  224 => 102,  212 => 93,  205 => 91,  194 => 90,  190 => 89,  169 => 71,  166 => 70,  162 => 69,  159 => 68,  157 => 67,  110 => 22,  106 => 20,  91 => 18,  82 => 15,  76 => 13,  74 => 12,  71 => 11,  54 => 10,  51 => 9,  49 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/wholesale.twig", "C:\\OSPanel\\domains\\localhost\\catalog\\view\\template\\common\\wholesale.twig");
    }
}
