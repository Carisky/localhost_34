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

/* default/template/common/cart_list.twig */
class __TwigTemplate_a20341261ebcf068863f1e218aadcca4 extends Template
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
        if (($context["products"] ?? null)) {
            // line 2
            echo "<div class=\"inner\">
";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 4
                echo "<div class=\"cart-item df aic jcsb\" data-cart-item>
\t<a class=\"cart-image\" href=\"";
                // line 5
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 5);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 5);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 5);
                echo "\"></a>
\t<a class=\"cart-name\" href=\"";
                // line 6
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 6);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 6);
                echo "</a>
\t<div class=\"cart-quantity df\" data-quantity data-min=\"";
                // line 7
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 7);
                echo "\" data-max=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 7);
                echo "\" data-cart=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 7);
                echo "\">
\t\t<div class=\"gnt-btn df jcc aic\" data-qnt-btn=\"0\">-</div>
\t\t<input type=\"number\" name=\"quantity\" value=\"";
                // line 9
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 9);
                echo "\" data-input-quantity class=\"form-control cnt\">
\t\t<div class=\"gnt-btn df jcc aic\" data-qnt-btn=\"1\">+</div>
\t</div>
\t<div class=\"cart-sum\">";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 12);
                echo "</div>
\t<div class=\"cart-remove\">
\t\t<button type=\"button\" class=\"btn-hidden\" onclick=\"cart.remove(";
                // line 14
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 14);
                echo ");\">
\t\t\t<svg width=\"16\" height=\"24\"><use xlink:href=\"/catalog/view/theme/noir/img/sprite.svg#trash\"></use></svg>
\t\t</button>
\t</div>
</div>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "</div>
<div class=\"cart-total-wrap df aic jcsb\">
\t<a href=\"";
            // line 22
            echo ($context["checkout"] ?? null);
            echo "\" class=\"btn df aic jcc\">
\t\tZŁÓŻ ZAMÓWIENIE
\t\t<svg width=\"24\" height=\"27\"><use xlink:href=\"/catalog/view/theme/noir/img/sprite.svg#cart\"></use></svg>
\t</a>
\t<div class=\"totals\">
\t\t<label>Wszystko</label>
\t\t<div class=\"cart-total\">";
            // line 28
            echo ($context["total"] ?? null);
            echo "</div>
\t</div>
</div>
";
        } else {
            // line 32
            echo "<p>Koszyk jest pusty</p>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/common/cart_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 32,  108 => 28,  99 => 22,  95 => 20,  83 => 14,  78 => 12,  72 => 9,  63 => 7,  57 => 6,  49 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/cart_list.twig", "");
    }
}
