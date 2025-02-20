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

/* default/template/product/category.twig */
class __TwigTemplate_bece0029fdefdcf3ff83b1acfe67344b extends Template
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
        echo ($context["header"] ?? null);
        echo "
<div class=\"shop\">
    ";
        // line 3
        if (($context["breadcrumbs"] ?? null)) {
            // line 4
            echo "        <div class=\"breadcrumbs\">
            ";
            // line 5
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
                // line 6
                echo "                <div>
                    ";
                // line 7
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 7)) {
                    // line 8
                    echo "                        <span class=\"last\">";
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 8);
                    echo "</span>
                    ";
                } else {
                    // line 10
                    echo "                        <a class=\"link\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 10);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 10);
                    echo "</a>
                        <span>/</span>
                    ";
                }
                // line 13
                echo "                </div>
            ";
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
            // line 15
            echo "        </div>
    ";
        }
        // line 17
        echo "

    <div id=\"categories-menu\" class=\"modal-menu\">
        <div class=\"top\">
            <div class=\"title\">Kategorie produktów</div>
            <span class=\"close-btn\" id=\"categories-menu-close\">&times;</span>
        </div>
        <div class=\"categories-list\">
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 26
            echo "                <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 26);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 26);
            echo "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </div>
    </div>

    <div id=\"parameters-menu\" class=\"modal-menu\">
        <div class=\"top\">
            <div class=\"title\">Sortowanie</div>
            <span class=\"close-btn\" id=\"parameters-menu-close\">&times;</span>
        </div>
        <div class=\"checkbox-container\">
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sorts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sort_option"]) {
            // line 38
            echo "                <label>
                    <input type=\"radio\" name=\"sort\" class=\"parameters-radio\" value=\"";
            // line 39
            echo twig_get_attribute($this->env, $this->source, $context["sort_option"], "value", [], "any", false, false, false, 39);
            echo "\"
                    ";
            // line 40
            if ((twig_get_attribute($this->env, $this->source, $context["sort_option"], "value", [], "any", false, false, false, 40) == ($context["sort"] ?? null))) {
                echo "checked";
            }
            echo ">
                    ";
            // line 41
            echo twig_get_attribute($this->env, $this->source, $context["sort_option"], "text", [], "any", false, false, false, 41);
            echo "
                </label>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </div>
    </div>

    <div class=\"title\">Sklep</div>

    <div class=\"sorters\">
        <div id=\"categories-sort\" class=\"sorter\">
            <img src=\"image/catalog/assets/categories_ico.svg\"/>
            <p>Kategorie produktów</p>
        </div>
        <div id=\"parameters-sort\" class=\"sorter\">
            <img src=\"image/catalog/assets/sorting_ico.svg\"/>
            <p>Domyślne sortowanie</p>
        </div>
    </div>

    <div id=\"products-list\" class=\"products-list\">
        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 62
            echo "        <div class=\"product-card\">
            <div class=\"product-header\">
                <div class=\"product-image\">
                    <a href=\"";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 65);
            echo "\">
                        <img src=\"";
            // line 66
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 66);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 66);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 66);
            echo "\" class=\"img-responsive\" />
                    </a>
                </div>
            </div>
            <div class=\"name-price-block\">
                <h4><a class=\"product-name\" href=\"";
            // line 71
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 71);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 71);
            echo "</a></h4>
            </div>
            <div class=\"name-price-block\">
                ";
            // line 74
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 74)) {
                // line 75
                echo "                <p class=\"product-price\">
                    ";
                // line 76
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 76)) {
                    // line 77
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 77);
                    echo "
                    ";
                } else {
                    // line 79
                    echo "                        <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 79);
                    echo "</span>
                        <span class=\"price-old\">";
                    // line 80
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 80);
                    echo "</span>
                    ";
                }
                // line 82
                echo "                </p>
                ";
            }
            // line 84
            echo "            </div>
            <div class=\"product-info\">
                ";
            // line 86
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 86)) {
                // line 87
                echo "                <div class=\"product-rating\">
                    ";
                // line 88
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 89
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 89) < $context["i"])) {
                        echo "<span>☆</span>";
                    } else {
                        echo "<span>★</span>";
                    }
                    // line 90
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 91
                echo "                </div>
                ";
            }
            // line 93
            echo "            </div>
            <div class=\"product-actions\">
                <button class=\"add-to-cart\" type=\"button\" onclick=\"cart.add('";
            // line 95
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 95);
            echo "', '";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 95);
            echo "');\">
                    DO KOSZYKA
                    <img src=\"image/catalog/assets/add_to_cart_ico.svg\" />
                </button>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "    </div>

    <div id=\"pagination\" class=\"pagination\">";
        // line 104
        echo ($context["pagination"] ?? null);
        echo "</div>

    <div class=\"additional\">
        <div class=\"block\">
            <div class=\"additional-info-title\">Konfitury – to nie tylko dżem, to skarb każdej domowej spiżarni</div>
            <div class=\"additional-info-plot\">Jak zamknąć słodycz słonecznych dni w szczelnym słoiczku?...</div>
        </div>
    </div>
</div>

";
        // line 114
        echo ($context["footer"] ?? null);
        echo "

<script type=\"text/javascript\" src=\"catalog/view/javascript/common.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/products/createProductCard.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/category/category.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "default/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 114,  297 => 104,  293 => 102,  278 => 95,  274 => 93,  270 => 91,  264 => 90,  257 => 89,  253 => 88,  250 => 87,  248 => 86,  244 => 84,  240 => 82,  235 => 80,  230 => 79,  224 => 77,  222 => 76,  219 => 75,  217 => 74,  209 => 71,  197 => 66,  193 => 65,  188 => 62,  184 => 61,  165 => 44,  156 => 41,  150 => 40,  146 => 39,  143 => 38,  139 => 37,  128 => 28,  117 => 26,  113 => 25,  103 => 17,  99 => 15,  84 => 13,  75 => 10,  69 => 8,  67 => 7,  64 => 6,  47 => 5,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/category.twig", "");
    }
}
