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
class __TwigTemplate_e27b870f0febcb344d61329de4ee2098 extends Template
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
\t\t\t\tvar redi = '";
            // line 7
            echo ($context["redirect"] ?? null);
            echo "';
\t\t\t\t//window.location.href = '";
            // line 8
            echo ($context["redirect"] ?? null);
            echo "';
\t\t\t</script>
\t";
            // line 10
            if (($context["logged"] ?? null)) {
                // line 11
                echo "
\t";
            } else {
                // line 13
                echo "
\t\t</div>
\t\t<div class=\"breadcrumbs\">
\t\t\t";
                // line 16
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
                    // line 17
                    echo "\t\t\t\t<div>
\t\t\t\t\t";
                    // line 18
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 18)) {
                        // line 19
                        echo "\t\t\t\t\t\t<span class=\"last\">";
                        echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 19);
                        echo "</span>
\t\t\t\t\t";
                    } else {
                        // line 21
                        echo "\t\t\t\t\t\t<a class=\"link\" href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 21);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 21);
                        echo "</a>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t/
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<!-- Разделитель -->
\t\t\t\t\t";
                    }
                    // line 27
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
                // line 29
                echo "\t\t\t<h2>Zaloguj się lub zarejestruj</h2>

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
\t\t";
            }
            // line 48
            echo "\t";
        } else {
            // line 49
            echo "\t\t<form id=\"wholesale\">
\t\t\t<h2 class=\"product-title3\">Twoje dane</h2>
\t\t\t<div class=\"wholesale-customer-data df jcsb\">
\t\t\t\t<div class=\"column left\">
\t\t\t\t\t<h3>Podstawowe dane</h3>
\t\t\t\t\t";
            // line 54
            if (($context["addresses"] ?? null)) {
                // line 55
                echo "\t\t\t\t\t\t<div class=\"form-block\" data-error=\"address_id\">
\t\t\t\t\t\t\t<select name=\"address[address_id]\" id=\"input-address\" data-nice-select>
\t\t\t\t\t\t\t\t<option value=\"\" disabled ";
                // line 57
                echo (( !twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "address_id", [], "any", false, false, false, 57)) ? (" selected") : (""));
                echo ">
\t\t\t\t\t\t\t\t\t--- Wybierz adres ---
\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 61
                    echo "\t\t\t\t\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "address_id", [], "any", false, false, false, 61);
                    echo "\" ";
                    echo (((twig_get_attribute($this->env, $this->source, $context["item"], "address_id", [], "any", false, false, false, 61) == twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "address_id", [], "any", false, false, false, 61))) ? (" selected") : (""));
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "city", [], "any", false, false, false, 61);
                    echo ",
\t\t\t\t\t\t\t\t\t\t";
                    // line 62
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "address_1", [], "any", false, false, false, 62);
                    echo "</option>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<div class=\"form-error\"></div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            } else {
                // line 68
                echo "\t\t\t\t\t\t<input type=\"hidden\" name=\"address[address_id]\" value=\"0\">
\t\t\t\t\t";
            }
            // line 70
            echo "\t\t\t\t\t<div class=\"form-block\" data-error=\"firstname\">
\t\t\t\t\t\t<input type=\"text\" name=\"address[firstname]\" value=\"";
            // line 71
            echo twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "firstname", [], "any", false, false, false, 71);
            echo "\" placeholder=\"";
            echo ($context["entry_firstname"] ?? null);
            echo "\">
\t\t\t\t\t\t<div class=\"form-error\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-block\" data-error=\"lastname\">
\t\t\t\t\t\t<input type=\"text\" name=\"address[lastname]\" value=\"";
            // line 75
            echo twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "lastname", [], "any", false, false, false, 75);
            echo "\" placeholder=\"";
            echo ($context["entry_lastname"] ?? null);
            echo "\">
\t\t\t\t\t\t<div class=\"form-error\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-block\" data-error=\"email\">
\t\t\t\t\t\t<input type=\"email\" name=\"address[email]\" value=\"";
            // line 79
            echo twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "email", [], "any", false, false, false, 79);
            echo "\" placeholder=\"";
            echo ($context["entry_email_address"] ?? null);
            echo "\"/>
\t\t\t\t\t\t<div class=\"form-error\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-block\" data-error=\"telephone\">
\t\t\t\t\t\t<input type=\"text\" name=\"address[telephone]\" value=\"";
            // line 83
            echo twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "telephone", [], "any", false, false, false, 83);
            echo "\" placeholder=\"";
            echo ($context["entry_telephone"] ?? null);
            echo "\"/>
\t\t\t\t\t\t<div class=\"form-error\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"column right\">
\t\t\t\t\t<h3>Dane do wysyłki</h3>
\t\t\t\t\t<div class=\"form-block\" data-error=\"address_1\">
\t\t\t\t\t\t<div class=\"textarea-wrapper\">
\t\t\t\t\t\t\t<textarea name=\"address[address_1]\" class=\"form-control shipping\">";
            // line 91
            echo twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "address_1", [], "any", false, false, false, 91);
            echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<h3>Komentarz do zamówienia</h3>
\t\t\t\t\t<div class=\"form-block\">
\t\t\t\t\t\t<div class=\"textarea-wrapper\">
\t\t\t\t\t\t\t<textarea name=\"address[comment]\" class=\"form-control comment";
            // line 97
            echo ((($context["addresses"] ?? null)) ? (" tall") : (""));
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "comment", [], "any", false, false, false, 97);
            echo "</textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"wholesale-products\">
\t\t\t\t";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 104
                echo "\t\t\t\t\t<h2 class=\"product-title3\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 104);
                echo "</h2>
\t\t\t\t\t<div class=\"product-list\">
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Okładka</th>
\t\t\t\t\t\t\t\t\t<th class=\"name\">Nazwa produktu</th>
\t\t\t\t\t\t\t\t\t<th>Ilość opakowań zbiorczych</th>
\t\t\t\t\t\t\t\t\t<th>Sztuk w opakowaniu</th>
\t\t\t\t\t\t\t\t\t<th>Suma</th>
\t\t\t\t\t\t\t\t\t<th>Cena</th>
\t\t\t\t\t\t\t\t\t<th>Wszystko</th>
\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
                // line 120
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 120));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 121
                    echo "\t\t\t\t\t\t\t\t\t<tr class=\"mobile-item aic\" data-mobile-product=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 121);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<td class=\"trigger\" data-product-trigger>
\t\t\t\t\t\t\t\t\t\t\t<svg class=\"ta\">
\t\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"/catalog/view/theme/noir/img/sprite.svg#trigger\"></use>
\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"mobile-image\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 128
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 128);
                    echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"mobile-name\">";
                    // line 130
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 130);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"mobile-mark\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"buy-mark";
                    // line 132
                    echo ((twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["cart_products"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 132)] ?? null) : null), "packs", [], "any", false, false, false, 132)) ? (" active") : (""));
                    echo " ta posr\" data-mark>
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"posa\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"/catalog/view/theme/noir/img/sprite.svg#check\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr class=\"product-row\" data-product=\"";
                    // line 139
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 139);
                    echo "\" data-price=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price_abs", [], "any", false, false, false, 139);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product[";
                    // line 140
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 140);
                    echo "][product_id]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 140);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product[";
                    // line 141
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 141);
                    echo "][price]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 141);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<td class=\"image\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    // line 143
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 143);
                    echo "\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 146
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 146);
                    echo "
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"packs\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mobile-label\">Ilość opakowań zbiorczych</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart-quantity df\" data-quantity data-min=\"";
                    // line 150
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 150);
                    echo "\" data-max=\"0\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"gnt-btn df jcc aic posr\" data-qnt-btn=\"0\">-</a>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" name=\"product[";
                    // line 152
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 152);
                    echo "][packs]\" data-input-quantity class=\"form-control cnt\" readonly value=\"";
                    echo ((twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["cart_products"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 152)] ?? null) : null), "packs", [], "any", false, false, false, 152)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["cart_products"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 152)] ?? null) : null), "packs", [], "any", false, false, false, 152)) : (0));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"gnt-btn df jcc aic posr\" data-qnt-btn=\"1\">+</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"pack cnt\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mobile-label\">Sztuk w opakowaniu</div>
\t\t\t\t\t\t\t\t\t\t\t<span data-inpack>";
                    // line 158
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "in_pack", [], "any", false, false, false, 158);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"wh-quantity cnt\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mobile-label\">Suma</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"char-value\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"number\" readonly class=\"input-hidden cnt\" name=\"product[";
                    // line 163
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 163);
                    echo "][quantity]\" data-amount value=\"";
                    echo ((twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["cart_products"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 163)] ?? null) : null), "quantity", [], "any", false, false, false, 163)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["cart_products"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 163)] ?? null) : null), "quantity", [], "any", false, false, false, 163)) : (0));
                    echo "\">
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"price cnt\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mobile-label\">Cena</div>
\t\t\t\t\t\t\t\t\t\t\t<span>";
                    // line 168
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price1", [], "any", false, false, false, 168);
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"product-total cnt\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mobile-label\">Wszystko</div>
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product[";
                    // line 172
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 172);
                    echo "][total]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["cart_products"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 172)] ?? null) : null), "total", [], "any", false, false, false, 172);
                    echo "\" data-total>
\t\t\t\t\t\t\t\t\t\t\t<b>
\t\t\t\t\t\t\t\t\t\t\t\t<span data-total-text>";
                    // line 174
                    echo ((twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = ($context["cart_products"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 174)] ?? null) : null), "total", [], "any", false, false, false, 174)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["cart_products"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 174)] ?? null) : null), "total", [], "any", false, false, false, 174)) : (0));
                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\tzł</b>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t<td class=\"mark\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"buy-mark";
                    // line 178
                    echo ((twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = ($context["cart_products"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 178)] ?? null) : null), "packs", [], "any", false, false, false, 178)) ? (" active") : (""));
                    echo " ta posr\" data-mark>
\t\t\t\t\t\t\t\t\t\t\t\t<svg class=\"posa\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<use xlink:href=\"/catalog/view/theme/noir/img/sprite.svg#check\"></use>
\t\t\t\t\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 186
                echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 190
            echo "\t\t\t</div>
\t\t\t<div class=\"wrappeer\">
\t\t\t\t<div class=\"wholesale-totals df jce\">
\t\t\t\t\t<table>
\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Cena</td>
\t\t\t\t\t\t\t\t<td data-totals-subtotal>";
            // line 197
            echo twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), "subtotal", [], "any", false, false, false, 197);
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Rabat</td>
\t\t\t\t\t\t\t\t<td data-totals-discount>";
            // line 201
            echo twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), "discount", [], "any", false, false, false, 201);
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td>Wszystko</td>
\t\t\t\t\t\t\t\t<td data-totals-total>";
            // line 205
            echo twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), "total", [], "any", false, false, false, 205);
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t</tbody>
\t\t\t\t\t</table>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"confirm df jce\">
\t\t\t\t<button type=\"button\" class=\"btn df aic jcc\" onclick=\"confirm()\">
\t\t\t\t\tZamawiam
\t\t\t\t\t<svg width=\"24\" height=\"27\">
\t\t\t\t\t\t<use xlink:href=\"/catalog/view/theme/noir/img/sprite.svg#cart\"></use>
\t\t\t\t\t</svg>
\t\t\t\t</button>
\t\t\t</div>
\t\t</form>
\t\t <script>
\t\t\t\tvar success = 'Dziękujemy za złożenie zamówienia w sklepie. W mailu otrzymasz informacje odnośnie zamówienia';
\t\t\t\t
\t\t\t\t\$(document).on('click', '[data-qnt-btn]', function(){
\t\t\t\t\tvar th = \$(this),
\t\t\t\t\t\tb = th.parents('[data-quantity]'),
\t\t\t\t\t\ti = b.find('input'),
\t\t\t\t\t\tv = parseInt(i.val());
\t\t\t\t\tif(th.data('qnt-btn') > 0) {
\t\t\t\t\t\tv++;
\t\t\t\t\t\tif(b.data('max') > 0 && v > b.data('max')) return false;
\t\t\t\t\t} else {
\t\t\t\t\t\tv = v - 1;
\t\t\t\t\t\tif(v < b.data('min')) return false;
\t\t\t\t\t}
\t\t\t\t\ti.val(v);
\t\t\t\t\tif(th.parents('[data-cart-item]').length) cart.update(b.data('cart'), v);
\t\t\t\t\tif(typeof(wholesaleUpdate) == 'function') wholesaleUpdate(b.parents('[data-product]'), v);
\t\t\t\t\tif(typeof(cartUpdate) == 'function') cartUpdate(b.parents('[data-product]'), v);
\t\t\t\t});
\t\t\t\t\$(document).on('input', '[data-input-quantity]', function(){
\t\t\t\t\tvar th = \$(this),
\t\t\t\t\t\tb = th.parents('[data-quantity]'),
\t\t\t\t\t\tv = parseInt(th.val());
\t\t\t\t\tif(v < b.data('min')) th.val(b.data('min'));
\t\t\t\t\tif(b.data('max') > 0 && v > b.data('max')) th.val(b.data('max'));
\t\t\t\t\tif(th.parents('[data-cart-item]').length) cart.update(b.data('cart'), v);
\t\t\t\t\tif(typeof(wholesaleUpdate) == 'function') wholesaleUpdate(b.parents('[data-product]'), v);
\t\t\t\t\tif(typeof(cartUpdate) == 'function') cartUpdate(b.parents('[data-product]'), v);
\t\t\t\t});
\t\t\t\t
\t\t\t\t\tfunction wholesaleUpdate(p, v) {
\t\t\t\t\t\t//console.log(p);
\t\t\t\t\t\t//console.log(v);
\t\t\t\t\t\tvar s = parseInt(p.find('[data-inpack]').text()) * v,
\t\t\t\t\t\t\tt = (Math.round(s * p.data('price')*100) / 100).toFixed(2).replace('.', ','),
\t\t\t\t\t\t\tpm = \$('#wholesale').find('[data-mobile-product=\"'+p.data('product')+'\"]');
\t\t\t\t\t\tp.find('[data-amount]').val(s);
\t\t\t\t\t\tp.find('[data-total]').val(t);
\t\t\t\t\t\tp.find('[data-total-text]').text(t);
\t\t\t\t\t\tif(v) {
\t\t\t\t\t\t\tp.find('[data-mark]').addClass('active');
\t\t\t\t\t\t\tpm.find('[data-mark]').addClass('active');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\tp.find('[data-mark]').removeClass('active');
\t\t\t\t\t\t\tpm.find('[data-mark]').removeClass('active');
\t\t\t\t\t\t}
\t\t\t\t\t\t//\$('body').append(loader);
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=extension/module/nr_wholesale/calculate',
\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t\tdata: \$('#wholesale').serialize(),
\t\t\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\t\t//\$('#loader').remove();
\t\t\t\t\t\t\t\t\$('[data-totals-subtotal]').html(json.subtotal);
\t\t\t\t\t\t\t\t\$('[data-totals-discount]').html(json.discount);
\t\t\t\t\t\t\t\t\$('[data-totals-total]').html(json.total);
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(data) {
\t\t\t\t\t\t\t\t//\$('#loader').remove();
\t\t\t\t\t\t\t\tconsole.log(data.responseText);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\tfunction confirm() {
\t\t\t\t\t\t\$('[data-error]').removeClass('input-error').find('.form-error').text('').hide();
\t\t\t\t\t\t//\$('body').append(loader);
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=extension/module/nr_wholesale/order',
\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t\tdata: \$('#wholesale').serialize(),
\t\t\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\t\t//\$('#loader').remove();
\t\t\t\t\t\t\t\tif(json.error) {
\t\t\t\t\t\t\t\t\t\$.each(json.error, function(i, v){
\t\t\t\t\t\t\t\t\t\t\$('[data-error=\"'+i+'\"]').addClass('input-error').find('.form-error').text(v).show();
\t\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t\t} else if(json.order_id) {
\t\t\t\t\t\t\t\t\tnrShowMessage(success, 1);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(data) {
\t\t\t\t\t\t\t\t//\$('#loader').remove();
\t\t\t\t\t\t\t\tconsole.log(data.responseText);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t\t\$('#input-address').on('change', function() {
\t\t\t\t\t\t//\$('body').append(loader);
\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=extension/module/nr_wholesale/change_address',
\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\tdata: \$('#wholesale').serialize(),
\t\t\t\t\t\t\tsuccess: function(data) {window.location.reload();},
\t\t\t\t\t\t\terror: function(data) {
\t\t\t\t\t\t\t\t//\$('#loader').remove();
\t\t\t\t\t\t\t\tconsole.log(data.responseText);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t});
\t\t\t\t</script>
\t";
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
        return array (  452 => 205,  445 => 201,  438 => 197,  429 => 190,  420 => 186,  406 => 178,  399 => 174,  392 => 172,  385 => 168,  375 => 163,  367 => 158,  356 => 152,  351 => 150,  344 => 146,  338 => 143,  331 => 141,  325 => 140,  319 => 139,  309 => 132,  304 => 130,  299 => 128,  288 => 121,  284 => 120,  264 => 104,  260 => 103,  249 => 97,  240 => 91,  227 => 83,  218 => 79,  209 => 75,  200 => 71,  197 => 70,  193 => 68,  187 => 64,  179 => 62,  170 => 61,  166 => 60,  160 => 57,  156 => 55,  154 => 54,  147 => 49,  144 => 48,  123 => 29,  108 => 27,  96 => 21,  90 => 19,  88 => 18,  85 => 17,  68 => 16,  63 => 13,  59 => 11,  57 => 10,  52 => 8,  48 => 7,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/nr_wholesale.twig", "");
    }
}
