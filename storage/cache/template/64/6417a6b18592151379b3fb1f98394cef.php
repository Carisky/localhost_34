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

/* catalog/view/template/product/product.twig */
class __TwigTemplate_982f550c410fa611bea9af9a8a058a51 extends Template
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
  \t\t<link href=\"catalog/view/stylesheet/common/footer.css\" type=\"text/css\" rel=\"stylesheet\"/>
</head>

<div class=\"product-card\">
    <div class=\"product-header\">
        <span class=\"product-category\">Product</span>
    </div>
    <div class=\"product-image\">
        <img src=\"";
        // line 10
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "image_url", [], "any", false, false, false, 10);
        echo "\" alt=\"";
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 10);
        echo "\">
    </div>
    <div class=\"product-info\">
        <div class=\"product-rating\">
            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 15
            echo "                ";
            if (($context["i"] <= twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "rating", [], "any", false, false, false, 15))) {
                // line 16
                echo "                    <span>★</span>
                ";
            } else {
                // line 18
                echo "                    <span>☆</span>
                ";
            }
            // line 20
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </div>
        <div class=\"product-name\">
            ";
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 23);
        echo "
        </div>
        <div class=\"product-price\">
            ";
        // line 26
        echo twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "price", [], "any", false, false, false, 26);
        echo " zł
        </div>
    </div>
    <div class=\"product-actions\">
        <button class=\"add-to-cart\">
            DO KOSZYKA
        </button>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 26,  82 => 23,  78 => 21,  72 => 20,  68 => 18,  64 => 16,  61 => 15,  57 => 14,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/product.twig", "C:\\OSPanel\\domains\\localhost\\catalog\\view\\template\\product\\product.twig");
    }
}
