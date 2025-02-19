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

/* default/template/extension/module/nr_wholesale.twig */
class __TwigTemplate_8cc5f563ca96d7d99d8724ca1a288a3e extends Template
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
\t<link href=\"catalog/view/theme/default/stylesheet/common/nr_wholsale.css\" type=\"text/css\" rel=\"stylesheet\"/>
</head>

";
        // line 5
        if (($context["redirect"] ?? null)) {
            // line 6
            echo "\t <script>
\t\t\tvar redi = '";
            // line 7
            echo ($context["redirect"] ?? null);
            echo "';
\t\t\t//window.location.href = '";
            // line 8
            echo ($context["redirect"] ?? null);
            echo "';
\t\t</script>
\t";
            // line 10
            if (($context["logged"] ?? null)) {
                // line 11
                echo "
\t\t";
            } else {
                // line 13
                echo "\t\t\t\t<div class=\"breadcrumbs\">
\t\t\t";
                // line 14
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
                    // line 15
                    echo "\t\t\t\t<div>
\t\t\t\t\t";
                    // line 16
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 16)) {
                        // line 17
                        echo "\t\t\t\t\t\t<span class=\"last\">";
                        echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 17);
                        echo "</span>
\t\t\t\t\t";
                    } else {
                        // line 19
                        echo "\t\t\t\t\t\t<a class=\"link\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 19);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 19);
                        echo "</a>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t/
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<!-- Разделитель -->
\t\t\t\t\t";
                    }
                    // line 25
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
                // line 27
                echo "\t\t</div>
\t\t\t<h2>Zaloguj się lub zarejestruj</h2>

\t\t\t<div class=\"popup-bottomRegister\" style=\"display: inline-block; margin-bottom:10px\">
\t\t\t\t<a class=\"icon-wrap account-icon df aic jcc ta2\" href=\"#sign-in\" style=\"width:250px\" data-fancybox>
\t\t\t\t\t<svg>
\t\t\t\t\t\t<use xlink:href=\"/catalog/view/theme/noir/img/sprite.svg#user\"></use>
\t\t\t\t\t</svg>&nbsp;
\t\t\t\t\t<h3>Zaloguj się</h3>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<div class=\"popup-bottomRegister\" style=\"display: inline-block; margin-bottom:10px\">
\t\t\t\t<a class=\"icon-wrap account-icon df aic jcc ta2\" href=\"#sign-up\" style=\"width:250px\" data-fancybox=\"\" data-close-popup=\"\">
\t\t\t\t\t<svg>
\t\t\t\t\t\t<use xlink:href=\"/catalog/view/theme/noir/img/sprite.svg#user\"></use>
\t\t\t\t\t</svg>&nbsp;
\t\t\t\t\t<h3>Zarejestruj się</h3>
\t\t\t\t</a>
\t\t\t</div>
\t";
            }
        } else {
            // line 48
            echo "\t<form id=\"wholesale\">
\t\t<h2 class=\"product-title3\">Twoje dane</h2>
\t\t<div class=\"wholesale-customer-data df jcsb\">
\t\t\t<div class=\"column left\">
\t\t\t\t<h3>Podstawowe dane</h3>
\t\t\t\t";
            // line 53
            if (($context["addresses"] ?? null)) {
                // line 54
                echo "\t\t\t\t\t<div class=\"form-block\" data-error=\"address_id\">
\t\t\t\t\t\t<select name=\"address[address_id]\" id=\"input-address\" data-nice-select>
\t\t\t\t\t\t\t<option value=\"\" disabled ";
                // line 56
                echo (( !twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "address_id", [], "any", false, false, false, 56)) ? (" selected") : (""));
                echo ">
\t\t\t\t\t\t\t\t--- Wybierz adres ---
\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t";
                // line 59
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 60
                    echo "\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "address_id", [], "any", false, false, false, 60);
                    echo "\" ";
                    echo (((twig_get_attribute($this->env, $this->source, $context["item"], "address_id", [], "any", false, false, false, 60) == twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "address_id", [], "any", false, false, false, 60))) ? (" selected") : (""));
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "city", [], "any", false, false, false, 60);
                    echo ",
\t\t\t\t\t\t\t\t\t";
                    // line 61
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "address_1", [], "any", false, false, false, 61);
                    echo "</option>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "\t\t\t\t\t\t</select>
\t\t\t\t\t\t<div class=\"form-error\"></div>
\t\t\t\t\t</div>
\t\t\t\t";
            } else {
                // line 67
                echo "\t\t\t\t\t<input type=\"hidden\" name=\"address[address_id]\" value=\"0\">
\t\t\t\t";
            }
            // line 69
            echo "\t\t\t\t<div class=\"form-block\" data-error=\"firstname\">
\t\t\t\t\t<input type=\"text\" name=\"address[firstname]\" value=\"";
            // line 70
            echo twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "firstname", [], "any", false, false, false, 70);
            echo "\" placeholder=\"";
            echo ($context["entry_firstname"] ?? null);
            echo "\">
\t\t\t\t\t<div class=\"form-error\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-block\" data-error=\"lastname\">
\t\t\t\t\t<input type=\"text\" name=\"address[lastname]\" value=\"";
            // line 74
            echo twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "lastname", [], "any", false, false, false, 74);
            echo "\" placeholder=\"";
            echo ($context["entry_lastname"] ?? null);
            echo "\">
\t\t\t\t\t<div class=\"form-error\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-block\" data-error=\"email\">
\t\t\t\t\t<input type=\"email\" name=\"address[email]\" value=\"";
            // line 78
            echo twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "email", [], "any", false, false, false, 78);
            echo "\" placeholder=\"";
            echo ($context["entry_email_address"] ?? null);
            echo "\"/>
\t\t\t\t\t<div class=\"form-error\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-block\" data-error=\"telephone\">
\t\t\t\t\t<input type=\"text\" name=\"address[telephone]\" value=\"";
            // line 82
            echo twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "telephone", [], "any", false, false, false, 82);
            echo "\" placeholder=\"";
            echo ($context["entry_telephone"] ?? null);
            echo "\"/>
\t\t\t\t\t<div class=\"form-error\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"column right\">
\t\t\t\t<h3>Dane do wysyłki</h3>
\t\t\t\t<div class=\"form-block\" data-error=\"address_1\">
\t\t\t\t\t<div class=\"textarea-wrapper\">
\t\t\t\t\t\t<textarea name=\"address[address_1]\" class=\"form-control shipping\">";
            // line 90
            echo twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "address_1", [], "any", false, false, false, 90);
            echo "</textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<h3>Komentarz do zamówienia</h3>
\t\t\t\t<div class=\"form-block\">
\t\t\t\t\t<div class=\"textarea-wrapper\">
\t\t\t\t\t\t<textarea name=\"address[comment]\" class=\"form-control comment";
            // line 96
            echo ((($context["addresses"] ?? null)) ? (" tall") : (""));
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "comment", [], "any", false, false, false, 96);
            echo "</textarea>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"wholesale-products\">
\t\t\t";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 103
                echo "\t\t\t\t<h2 class=\"product-title3\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 103);
                echo "</h2>
\t\t\t\t<div class=\"product-list\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th>Okładka</th>
\t\t\t\t\t\t\t\t<th class=\"name\">Nazwa produktu</th>
\t\t\t\t\t\t\t\t<th>Ilość opakowań zbiorczych</th>
\t\t\t\t\t\t\t\t<th>Sztuk w opakowaniu</th>
\t\t\t\t\t\t\t\t<th>Suma</th>
\t\t\t\t\t\t\t\t<th>Cena</th>
\t\t\t\t\t\t\t\t<th>Wszystko</th>
\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</thead>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t";
                // line 119
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 119));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 120
                    echo "\t\t\t\t\t\t\t\t<tr class=\"mobile-item aic\" data-mobile-product=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 120);
                    echo "\">
\t\t\t\t\t\t\t\t\t<td class=\"trigger\" data-product-trigger>
\t\t\t\t\t\t\t\t\t\t<svg class=\"ta\">
\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"/catalog/view/theme/noir/img/sprite.svg#trigger\"></use>
\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"mobile-image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 127
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 127);
                    echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"mobile-name\">";
                    // line 129
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 129);
                    echo "</td>
\t\t\t\t\t\t\t\t\t<td class=\"mobile-mark\">
\t\t\t\t\t\t\t\t\t\t<div class=\"buy-mark";
                    // line 131
                    echo ((twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["cart_products"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 131)] ?? null) : null), "packs", [], "any", false, false, false, 131)) ? (" active") : (""));
                    echo " ta posr\" data-mark>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"posa\">
\t\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"/catalog/view/theme/noir/img/sprite.svg#check\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t<tr class=\"product-row\" data-product=\"";
                    // line 138
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 138);
                    echo "\" data-price=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price_abs", [], "any", false, false, false, 138);
                    echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product[";
                    // line 139
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 139);
                    echo "][product_id]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 139);
                    echo "\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product[";
                    // line 140
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 140);
                    echo "][price]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 140);
                    echo "\">
\t\t\t\t\t\t\t\t\t<td class=\"image\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 142
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 142);
                    echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"name\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 145
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 145);
                    echo "
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"packs\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mobile-label\">Ilość opakowań zbiorczych</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"cart-quantity df\" data-quantity data-min=\"";
                    // line 149
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 149);
                    echo "\" data-max=\"0\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"gnt-btn df jcc aic posr\" data-qnt-btn=\"0\">-</a>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"product[";
                    // line 151
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 151);
                    echo "][packs]\" data-input-quantity class=\"form-control cnt\" readonly value=\"";
                    echo ((twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["cart_products"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 151)] ?? null) : null), "packs", [], "any", false, false, false, 151)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["cart_products"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 151)] ?? null) : null), "packs", [], "any", false, false, false, 151)) : (0));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"gnt-btn df jcc aic posr\" data-qnt-btn=\"1\">+</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"pack cnt\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mobile-label\">Sztuk w opakowaniu</div>
\t\t\t\t\t\t\t\t\t\t<span data-inpack>";
                    // line 157
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "in_pack", [], "any", false, false, false, 157);
                    echo "</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"wh-quantity cnt\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mobile-label\">Suma</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"char-value\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" readonly class=\"input-hidden cnt\" name=\"product[";
                    // line 162
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 162);
                    echo "][quantity]\" data-amount value=\"";
                    echo ((twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["cart_products"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 162)] ?? null) : null), "quantity", [], "any", false, false, false, 162)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["cart_products"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 162)] ?? null) : null), "quantity", [], "any", false, false, false, 162)) : (0));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"price cnt\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mobile-label\">Cena</div>
\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 167
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price1", [], "any", false, false, false, 167);
                    echo "</span>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"product-total cnt\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mobile-label\">Wszystko</div>
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product[";
                    // line 171
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 171);
                    echo "][total]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["cart_products"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 171)] ?? null) : null), "total", [], "any", false, false, false, 171);
                    echo "\" data-total>
\t\t\t\t\t\t\t\t\t\t<b>
\t\t\t\t\t\t\t\t\t\t\t<span data-total-text>";
                    // line 173
                    echo ((twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = ($context["cart_products"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 173)] ?? null) : null), "total", [], "any", false, false, false, 173)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["cart_products"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 173)] ?? null) : null), "total", [], "any", false, false, false, 173)) : (0));
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\tzł</b>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t<td class=\"mark\">
\t\t\t\t\t\t\t\t\t\t<div class=\"buy-mark";
                    // line 177
                    echo ((twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = ($context["cart_products"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 177)] ?? null) : null), "packs", [], "any", false, false, false, 177)) ? (" active") : (""));
                    echo " ta posr\" data-mark>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"posa\">
\t\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"/catalog/view/theme/noir/img/sprite.svg#check\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 185
                echo "\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "\t\t</div>
\t\t<div class=\"wrappeer\">
\t\t\t<div class=\"wholesale-totals df jce\">
\t\t\t\t<table>
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Cena</td>
\t\t\t\t\t\t\t<td data-totals-subtotal>";
            // line 196
            echo twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), "subtotal", [], "any", false, false, false, 196);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Rabat</td>
\t\t\t\t\t\t\t<td data-totals-discount>";
            // line 200
            echo twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), "discount", [], "any", false, false, false, 200);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<td>Wszystko</td>
\t\t\t\t\t\t\t<td data-totals-total>";
            // line 204
            echo twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), "total", [], "any", false, false, false, 204);
            echo "</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"confirm df jce\">
\t\t\t<button type=\"button\" class=\"btn df aic jcc\" onclick=\"confirm()\">
\t\t\t\tZamawiam
\t\t\t\t<svg width=\"24\" height=\"27\">
\t\t\t\t\t<use xlink:href=\"/catalog/view/theme/noir/img/sprite.svg#cart\"></use>
\t\t\t\t</svg>
\t\t\t</button>
\t\t</div>
\t</form>
\t <script>
\t\tvar success = 'Dziękujemy za złożenie zamówienia w sklepie. W mailu otrzymasz informacje odnośnie zamówienia';
\t\t
\t\t\$(document).on('click', '[data-qnt-btn]', function(){
\t\t\tvar th = \$(this),
\t\t\t\tb = th.parents('[data-quantity]'),
\t\t\t\ti = b.find('input'),
\t\t\t\tv = parseInt(i.val());
\t\t\tif(th.data('qnt-btn') > 0) {
\t\t\t\tv++;
\t\t\t\tif(b.data('max') > 0 && v > b.data('max')) return false;
\t\t\t} else {
\t\t\t\tv = v - 1;
\t\t\t\tif(v < b.data('min')) return false;
\t\t\t}
\t\t\ti.val(v);
\t\t\tif(th.parents('[data-cart-item]').length) cart.update(b.data('cart'), v);
\t\t\tif(typeof(wholesaleUpdate) == 'function') wholesaleUpdate(b.parents('[data-product]'), v);
\t\t\tif(typeof(cartUpdate) == 'function') cartUpdate(b.parents('[data-product]'), v);
\t\t});
\t\t\$(document).on('input', '[data-input-quantity]', function(){
\t\t\tvar th = \$(this),
\t\t\t\tb = th.parents('[data-quantity]'),
\t\t\t\tv = parseInt(th.val());
\t\t\tif(v < b.data('min')) th.val(b.data('min'));
\t\t\tif(b.data('max') > 0 && v > b.data('max')) th.val(b.data('max'));
\t\t\tif(th.parents('[data-cart-item]').length) cart.update(b.data('cart'), v);
\t\t\tif(typeof(wholesaleUpdate) == 'function') wholesaleUpdate(b.parents('[data-product]'), v);
\t\t\tif(typeof(cartUpdate) == 'function') cartUpdate(b.parents('[data-product]'), v);
\t\t});
\t\t
\t\t\tfunction wholesaleUpdate(p, v) {
\t\t\t\t//console.log(p);
\t\t\t\t//console.log(v);
\t\t\t\tvar s = parseInt(p.find('[data-inpack]').text()) * v,
\t\t\t\t\tt = (Math.round(s * p.data('price')*100) / 100).toFixed(2).replace('.', ','),
\t\t\t\t\tpm = \$('#wholesale').find('[data-mobile-product=\"'+p.data('product')+'\"]');
\t\t\t\tp.find('[data-amount]').val(s);
\t\t\t\tp.find('[data-total]').val(t);
\t\t\t\tp.find('[data-total-text]').text(t);
\t\t\t\tif(v) {
\t\t\t\t\tp.find('[data-mark]').addClass('active');
\t\t\t\t\tpm.find('[data-mark]').addClass('active');
\t\t\t\t} else {
\t\t\t\t\tp.find('[data-mark]').removeClass('active');
\t\t\t\t\tpm.find('[data-mark]').removeClass('active');
\t\t\t\t}
\t\t\t\t//\$('body').append(loader);
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=extension/module/nr_wholesale/calculate',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tdata: \$('#wholesale').serialize(),
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t//\$('#loader').remove();
\t\t\t\t\t\t\$('[data-totals-subtotal]').html(json.subtotal);
\t\t\t\t\t\t\$('[data-totals-discount]').html(json.discount);
\t\t\t\t\t\t\$('[data-totals-total]').html(json.total);
\t\t\t\t\t},
\t\t\t\t\terror: function(data) {
\t\t\t\t\t\t//\$('#loader').remove();
\t\t\t\t\t\tconsole.log(data.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t\tfunction confirm() {
\t\t\t\t\$('[data-error]').removeClass('input-error').find('.form-error').text('').hide();
\t\t\t\t//\$('body').append(loader);
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=extension/module/nr_wholesale/order',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdataType: 'json',
\t\t\t\t\tdata: \$('#wholesale').serialize(),
\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t//\$('#loader').remove();
\t\t\t\t\t\tif(json.error) {
\t\t\t\t\t\t\t\$.each(json.error, function(i, v){
\t\t\t\t\t\t\t\t\$('[data-error=\"'+i+'\"]').addClass('input-error').find('.form-error').text(v).show();
\t\t\t\t\t\t\t});
\t\t\t\t\t\t} else if(json.order_id) {
\t\t\t\t\t\t\tnrShowMessage(success, 1);
\t\t\t\t\t\t}
\t\t\t\t\t},
\t\t\t\t\terror: function(data) {
\t\t\t\t\t\t//\$('#loader').remove();
\t\t\t\t\t\tconsole.log(data.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t\t\$('#input-address').on('change', function() {
\t\t\t\t//\$('body').append(loader);
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=extension/module/nr_wholesale/change_address',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdata: \$('#wholesale').serialize(),
\t\t\t\t\tsuccess: function(data) {window.location.reload();},
\t\t\t\t\terror: function(data) {
\t\t\t\t\t\t//\$('#loader').remove();
\t\t\t\t\t\tconsole.log(data.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t</script>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/nr_wholesale.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  449 => 204,  442 => 200,  435 => 196,  426 => 189,  417 => 185,  403 => 177,  396 => 173,  389 => 171,  382 => 167,  372 => 162,  364 => 157,  353 => 151,  348 => 149,  341 => 145,  335 => 142,  328 => 140,  322 => 139,  316 => 138,  306 => 131,  301 => 129,  296 => 127,  285 => 120,  281 => 119,  261 => 103,  257 => 102,  246 => 96,  237 => 90,  224 => 82,  215 => 78,  206 => 74,  197 => 70,  194 => 69,  190 => 67,  184 => 63,  176 => 61,  167 => 60,  163 => 59,  157 => 56,  153 => 54,  151 => 53,  144 => 48,  121 => 27,  106 => 25,  94 => 19,  88 => 17,  86 => 16,  83 => 15,  66 => 14,  63 => 13,  59 => 11,  57 => 10,  52 => 8,  48 => 7,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/nr_wholesale.twig", "");
    }
}
