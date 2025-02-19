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
class __TwigTemplate_8366226be9f5763387f85bc9a75a4977 extends Template
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
        echo "<hea

";
        // line 3
        if (($context["redirect"] ?? null)) {
            // line 4
            echo "<script>
\tvar redi = '";
            // line 5
            echo ($context["redirect"] ?? null);
            echo "';
\t//window.location.href = '";
            // line 6
            echo ($context["redirect"] ?? null);
            echo "';
</script>
\t";
            // line 8
            if (($context["logged"] ?? null)) {
                // line 9
                echo "\t\t
\t";
            } else {
                // line 11
                echo "\t\t<h2>Zaloguj się lub zarejestruj</h2>

\t\t<div class=\"popup-bottomRegister\" style=\"display: inline-block; margin-bottom:10px\">
\t\t\t<a class=\"icon-wrap account-icon df aic jcc ta2\" href=\"#sign-in\" style=\"width:250px\" data-fancybox>
\t\t\t\t<svg><use xlink:href=\"/catalog/view/theme/noir/img/sprite.svg#user\"></use></svg>&nbsp;
\t\t\t\t<h3>Zaloguj się</h3>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"popup-bottomRegister\" style=\"display: inline-block; margin-bottom:10px\">
\t\t\t<a class=\"icon-wrap account-icon df aic jcc ta2\" href=\"#sign-up\" style=\"width:250px\" data-fancybox=\"\" data-close-popup=\"\">
\t\t\t\t<svg><use xlink:href=\"/catalog/view/theme/noir/img/sprite.svg#user\"></use></svg>&nbsp;
\t\t\t\t<h3>Zarejestruj się</h3>
\t\t\t</a>
\t\t</div>
\t";
            }
        } else {
            // line 27
            echo "<form id=\"wholesale\">
\t<h2 class=\"product-title3\">Twoje dane</h2>
\t<div class=\"wholesale-customer-data df jcsb\">
\t\t<div class=\"column left\">
\t\t\t<h3>Podstawowe dane</h3>
\t\t\t";
            // line 32
            if (($context["addresses"] ?? null)) {
                // line 33
                echo "\t\t\t<div class=\"form-block\"  data-error=\"address_id\">
\t\t\t\t<select name=\"address[address_id]\" id=\"input-address\" data-nice-select>
\t\t\t\t\t<option value=\"\" disabled";
                // line 35
                echo (( !twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "address_id", [], "any", false, false, false, 35)) ? (" selected") : (""));
                echo "> --- Wybierz adres --- </option>
\t\t\t\t\t";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["addresses"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 37
                    echo "\t\t\t\t\t<option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "address_id", [], "any", false, false, false, 37);
                    echo "\"";
                    echo (((twig_get_attribute($this->env, $this->source, $context["item"], "address_id", [], "any", false, false, false, 37) == twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "address_id", [], "any", false, false, false, 37))) ? (" selected") : (""));
                    echo ">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "city", [], "any", false, false, false, 37);
                    echo ", ";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "address_1", [], "any", false, false, false, 37);
                    echo "</option>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "\t\t\t\t</select>
\t\t\t\t<div class=\"form-error\"></div>
\t\t\t</div>
\t\t\t";
            } else {
                // line 43
                echo "\t\t\t<input type=\"hidden\" name=\"address[address_id]\" value=\"0\">
\t\t\t";
            }
            // line 45
            echo "\t\t\t<div class=\"form-block\" data-error=\"firstname\">
\t\t\t\t<input type=\"text\" name=\"address[firstname]\" value=\"";
            // line 46
            echo twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "firstname", [], "any", false, false, false, 46);
            echo "\" placeholder=\"";
            echo ($context["entry_firstname"] ?? null);
            echo "\">
\t\t\t\t<div class=\"form-error\"></div>
\t\t\t</div>
\t\t\t<div class=\"form-block\" data-error=\"lastname\">
\t\t\t\t<input type=\"text\" name=\"address[lastname]\" value=\"";
            // line 50
            echo twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "lastname", [], "any", false, false, false, 50);
            echo "\" placeholder=\"";
            echo ($context["entry_lastname"] ?? null);
            echo "\">
\t\t\t\t<div class=\"form-error\"></div>
\t\t\t</div>
\t\t\t<div class=\"form-block\" data-error=\"email\">
\t\t\t\t<input type=\"email\" name=\"address[email]\" value=\"";
            // line 54
            echo twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "email", [], "any", false, false, false, 54);
            echo "\" placeholder=\"";
            echo ($context["entry_email_address"] ?? null);
            echo "\" />
\t\t\t\t<div class=\"form-error\"></div>
\t\t\t</div>
\t\t\t<div class=\"form-block\" data-error=\"telephone\">
\t\t\t\t<input type=\"text\" name=\"address[telephone]\" value=\"";
            // line 58
            echo twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "telephone", [], "any", false, false, false, 58);
            echo "\" placeholder=\"";
            echo ($context["entry_telephone"] ?? null);
            echo "\" />
\t\t\t\t<div class=\"form-error\"></div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"column right\">
\t\t\t<h3>Dane do wysyłki</h3>
\t\t\t<div class=\"form-block\" data-error=\"address_1\">
\t\t\t\t<div class=\"textarea-wrapper\">
\t\t\t\t\t<textarea name=\"address[address_1]\"  class=\"form-control shipping\">";
            // line 66
            echo twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "address_1", [], "any", false, false, false, 66);
            echo "</textarea>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<h3>Komentarz do zamówienia</h3>
\t\t\t<div class=\"form-block\">
\t\t\t\t<div class=\"textarea-wrapper\">
\t\t\t\t\t<textarea name=\"address[comment]\"  class=\"form-control comment";
            // line 72
            echo ((($context["addresses"] ?? null)) ? (" tall") : (""));
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, ($context["address"] ?? null), "comment", [], "any", false, false, false, 72);
            echo "</textarea>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"wholesale-products\">
\t";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 79
                echo "\t\t<h2 class=\"product-title3\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 79);
                echo "</h2>
\t\t<div class=\"product-list\">
\t\t\t<table>
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Okładka</th>
\t\t\t\t\t\t<th class=\"name\">Nazwa produktu</th>
\t\t\t\t\t\t<th>Ilość opakowań zbiorczych</th>
\t\t\t\t\t\t<th>Sztuk w opakowaniu</th>
\t\t\t\t\t\t<th>Suma</th>
\t\t\t\t\t\t<th>Cena</th>
\t\t\t\t\t\t<th>Wszystko</th>
\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
                // line 95
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 95));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 96
                    echo "\t\t\t\t\t<tr class=\"mobile-item aic\" data-mobile-product=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 96);
                    echo "\">
\t\t\t\t\t\t<td class=\"trigger\" data-product-trigger>
\t\t\t\t\t\t\t<svg class=\"ta\"><use xlink:href=\"/catalog/view/theme/noir/img/sprite.svg#trigger\"></use></svg>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"mobile-image\">
\t\t\t\t\t\t\t<img src=\"";
                    // line 101
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 101);
                    echo "\" alt=\"\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"mobile-name\">";
                    // line 103
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 103);
                    echo "</td>
\t\t\t\t\t\t<td class=\"mobile-mark\"> 
\t\t\t\t\t\t\t<div class=\"buy-mark";
                    // line 105
                    echo ((twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = ($context["cart_products"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 105)] ?? null) : null), "packs", [], "any", false, false, false, 105)) ? (" active") : (""));
                    echo " ta posr\" data-mark>
\t\t\t\t\t\t\t\t<svg class=\"posa\"><use xlink:href=\"/catalog/view/theme/noir/img/sprite.svg#check\"></use></svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr class=\"product-row\" data-product=\"";
                    // line 110
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 110);
                    echo "\" data-price=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price_abs", [], "any", false, false, false, 110);
                    echo "\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"product[";
                    // line 111
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 111);
                    echo "][product_id]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 111);
                    echo "\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"product[";
                    // line 112
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 112);
                    echo "][price]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 112);
                    echo "\">
\t\t\t\t\t\t<td class=\"image\">
\t\t\t\t\t\t\t<img src=\"";
                    // line 114
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 114);
                    echo "\" alt=\"\">
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"name\">
\t\t\t\t\t\t\t";
                    // line 117
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 117);
                    echo "
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"packs\">
\t\t\t\t\t\t\t<div class=\"mobile-label\">Ilość opakowań zbiorczych</div>
\t\t\t\t\t\t\t<div class=\"cart-quantity df\" data-quantity data-min=\"";
                    // line 121
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 121);
                    echo "\" data-max=\"0\">
\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"gnt-btn df jcc aic posr\" data-qnt-btn=\"0\">-</a>
\t\t\t\t\t\t\t\t<input type=\"number\" name=\"product[";
                    // line 123
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 123);
                    echo "][packs]\" data-input-quantity class=\"form-control cnt\" readonly
\t\t\t\t\t\t\t\t\tvalue=\"";
                    // line 124
                    echo ((twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = ($context["cart_products"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 124)] ?? null) : null), "packs", [], "any", false, false, false, 124)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = ($context["cart_products"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 124)] ?? null) : null), "packs", [], "any", false, false, false, 124)) : (0));
                    echo "\">
\t\t\t\t\t\t\t\t<a href=\"javascript:;\" class=\"gnt-btn df jcc aic posr\" data-qnt-btn=\"1\">+</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"pack cnt\">
\t\t\t\t\t\t\t<div class=\"mobile-label\">Sztuk w opakowaniu</div>
\t\t\t\t\t\t\t<span data-inpack>";
                    // line 130
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "in_pack", [], "any", false, false, false, 130);
                    echo "</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"wh-quantity cnt\">
\t\t\t\t\t\t\t<div class=\"mobile-label\">Suma</div>
\t\t\t\t\t\t\t<div class=\"char-value\">
\t\t\t\t\t\t\t\t<input type=\"number\" readonly class=\"input-hidden cnt\" name=\"product[";
                    // line 135
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 135);
                    echo "][quantity]\" data-amount
\t\t\t\t\t\t\t\t\tvalue=\"";
                    // line 136
                    echo ((twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = ($context["cart_products"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 136)] ?? null) : null), "quantity", [], "any", false, false, false, 136)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = ($context["cart_products"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 136)] ?? null) : null), "quantity", [], "any", false, false, false, 136)) : (0));
                    echo "\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"price cnt\">
\t\t\t\t\t\t\t<div class=\"mobile-label\">Cena</div>
\t\t\t\t\t\t\t<span>";
                    // line 141
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price1", [], "any", false, false, false, 141);
                    echo "</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"product-total cnt\">
\t\t\t\t\t\t\t<div class=\"mobile-label\">Wszystko</div>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"product[";
                    // line 145
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 145);
                    echo "][total]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = ($context["cart_products"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 145)] ?? null) : null), "total", [], "any", false, false, false, 145);
                    echo "\" data-total>
\t\t\t\t\t\t\t<b><span data-total-text>";
                    // line 146
                    echo ((twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = ($context["cart_products"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6[twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 146)] ?? null) : null), "total", [], "any", false, false, false, 146)) ? (twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = ($context["cart_products"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 146)] ?? null) : null), "total", [], "any", false, false, false, 146)) : (0));
                    echo "</span> zł</b>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"mark\">
\t\t\t\t\t\t\t<div class=\"buy-mark";
                    // line 149
                    echo ((twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = ($context["cart_products"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8[twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 149)] ?? null) : null), "packs", [], "any", false, false, false, 149)) ? (" active") : (""));
                    echo " ta posr\" data-mark>
\t\t\t\t\t\t\t\t<svg class=\"posa\"><use xlink:href=\"/catalog/view/theme/noir/img/sprite.svg#check\"></use></svg>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>\t
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 155
                echo "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            echo "\t</div>
\t<div class=\"wholesale-totals df jce\">
\t\t<table>
\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<td>Cena</td>
\t\t\t\t\t<td data-totals-subtotal>";
            // line 165
            echo twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), "subtotal", [], "any", false, false, false, 165);
            echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Rabat</td>
\t\t\t\t\t<td data-totals-discount>";
            // line 169
            echo twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), "discount", [], "any", false, false, false, 169);
            echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<td>Wszystko</td>
\t\t\t\t\t<td data-totals-total>";
            // line 173
            echo twig_get_attribute($this->env, $this->source, ($context["totals"] ?? null), "total", [], "any", false, false, false, 173);
            echo "</td>
\t\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t</div>
\t<div class=\"confirm df jce\">
\t\t<button type=\"button\" class=\"btn df aic jcc\" onclick=\"confirm()\">
\t\t\tZamawiam
\t\t\t<svg width=\"24\" height=\"27\"><use xlink:href=\"/catalog/view/theme/noir/img/sprite.svg#cart\"></use></svg>
\t\t</button>
\t</div>
</form>
<script>
var success = 'Dziękujemy za złożenie zamówienia w sklepie. W mailu otrzymasz informacje odnośnie zamówienia';
\tfunction wholesaleUpdate(p, v) {
\t\tconsole.log(p);
\t\tconsole.log(v);
\t\tvar s = parseInt(p.find('[data-inpack]').text()) * v,
\t\t\tt = (Math.round(s * p.data('price')*100) / 100).toFixed(2).replace('.', ','),
\t\t\tpm = \$('#wholesale').find('[data-mobile-product=\"'+p.data('product')+'\"]');
\t\tp.find('[data-amount]').val(s);
\t\tp.find('[data-total]').val(t);
\t\tp.find('[data-total-text]').text(t);
\t\tif(v) {
\t\t\tp.find('[data-mark]').addClass('active');
\t\t\tpm.find('[data-mark]').addClass('active');
\t\t} else {
\t\t\tp.find('[data-mark]').removeClass('active');
\t\t\tpm.find('[data-mark]').removeClass('active');
\t\t}
\t\t\$('body').append(loader);
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/module/nr_wholesale/calculate',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: \$('#wholesale').serialize(),
\t\t\tsuccess: function(json) {
\t\t\t\t\$('#loader').remove();
\t\t\t\t\$('[data-totals-subtotal]').html(json.subtotal);
\t\t\t\t\$('[data-totals-discount]').html(json.discount);
\t\t\t\t\$('[data-totals-total]').html(json.total);
\t\t\t},
\t\t\terror: function(data) {
\t\t\t\t\$('#loader').remove();
\t\t\t\tconsole.log(data.responseText);
\t\t\t}
\t\t});
\t}
\tfunction confirm() {
\t\t\$('[data-error]').removeClass('input-error').find('.form-error').text('').hide();
\t\t\$('body').append(loader);
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/module/nr_wholesale/order',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: \$('#wholesale').serialize(),
\t\t\tsuccess: function(json) {
\t\t\t\t\$('#loader').remove();
\t\t\t\tif(json.error) {
\t\t\t\t\t\$.each(json.error, function(i, v){
\t\t\t\t\t\t\$('[data-error=\"'+i+'\"]').addClass('input-error').find('.form-error').text(v).show();
\t\t\t\t\t});
\t\t\t\t} else if(json.order_id) {
\t\t\t\t\tnrShowMessage(success, 1);
\t\t\t\t}
\t\t\t},
\t\t\terror: function(data) {
\t\t\t\t\$('#loader').remove();
\t\t\t\tconsole.log(data.responseText);
\t\t\t}
\t\t});
\t}
\t\$('#input-address').on('change', function() {
\t\t\$('body').append(loader);
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/module/nr_wholesale/change_address',
\t\t\ttype: 'post',
\t\t\tdata: \$('#wholesale').serialize(),
\t\t\tsuccess: function(data) {window.location.reload();},
\t\t\terror: function(data) {
\t\t\t\t\$('#loader').remove();
\t\t\t\tconsole.log(data.responseText);
\t\t\t}
\t\t});
\t});
</script>
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
        return array (  375 => 173,  368 => 169,  361 => 165,  353 => 159,  344 => 155,  332 => 149,  326 => 146,  320 => 145,  313 => 141,  305 => 136,  301 => 135,  293 => 130,  284 => 124,  280 => 123,  275 => 121,  268 => 117,  262 => 114,  255 => 112,  249 => 111,  243 => 110,  235 => 105,  230 => 103,  225 => 101,  216 => 96,  212 => 95,  192 => 79,  188 => 78,  177 => 72,  168 => 66,  155 => 58,  146 => 54,  137 => 50,  128 => 46,  125 => 45,  121 => 43,  115 => 39,  100 => 37,  96 => 36,  92 => 35,  88 => 33,  86 => 32,  79 => 27,  61 => 11,  57 => 9,  55 => 8,  50 => 6,  46 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/nr_wholesale.twig", "");
    }
}
