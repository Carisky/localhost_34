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
class __TwigTemplate_de70b7a2ad86f4fc7db200846631a1c7 extends Template
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
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 25
            echo "                <a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 25);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 25);
            echo "</a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </div>
    </div>

    <div id=\"parameters-menu\" class=\"modal-menu\">
        <div class=\"top\">
            <div class=\"title\">Sortowanie</div>
            <span class=\"close-btn\" id=\"parameters-menu-close\">&times;</span>
        </div>
        <div class=\"checkbox-container\">
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sorts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sort_option"]) {
            // line 37
            echo "                <label>
                    <input type=\"radio\" name=\"sort\" class=\"parameters-radio\" value=\"";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["sort_option"], "value", [], "any", false, false, false, 38);
            echo "\" 
                    ";
            // line 39
            if ((twig_get_attribute($this->env, $this->source, $context["sort_option"], "value", [], "any", false, false, false, 39) == ($context["sort"] ?? null))) {
                echo "checked";
            }
            echo "> 
                    ";
            // line 40
            echo twig_get_attribute($this->env, $this->source, $context["sort_option"], "text", [], "any", false, false, false, 40);
            echo "
                </label>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
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
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 61
            echo "        <div class=\"product-card\">
            <div class=\"product-header\">
                <div class=\"product-image\">
                    <a href=\"";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 64);
            echo "\">
                        <img src=\"";
            // line 65
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 65);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 65);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 65);
            echo "\" class=\"img-responsive\" />
                    </a>
                </div>
            </div>
            <div class=\"name-price-block\">
                <h4><a class=\"product-name\" href=\"";
            // line 70
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 70);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 70);
            echo "</a></h4>
            </div>
            <div class=\"name-price-block\">
                ";
            // line 73
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 73)) {
                // line 74
                echo "                <p class=\"product-price\">
                    ";
                // line 75
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 75)) {
                    // line 76
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 76);
                    echo "
                    ";
                } else {
                    // line 78
                    echo "                        <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 78);
                    echo "</span>
                        <span class=\"price-old\">";
                    // line 79
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 79);
                    echo "</span>
                    ";
                }
                // line 81
                echo "                </p>
                ";
            }
            // line 83
            echo "            </div>
            <div class=\"product-info\">
                ";
            // line 85
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 85)) {
                // line 86
                echo "                <div class=\"product-rating\">
                    ";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 88
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 88) < $context["i"])) {
                        echo "<span>☆</span>";
                    } else {
                        echo "<span>★</span>";
                    }
                    // line 89
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                echo "                </div>
                ";
            }
            // line 92
            echo "            </div>
            <div class=\"product-actions\">
                <button class=\"add-to-cart\" type=\"button\" onclick=\"cart.add('";
            // line 94
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 94);
            echo "', '";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 94);
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
        // line 101
        echo "    </div>

    <div id=\"pagination\" class=\"pagination\">";
        // line 103
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
        // line 113
        echo ($context["footer"] ?? null);
        echo "

<script type=\"text/javascript\" src=\"catalog/view/javascript/common.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/products/createProductCard.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/shop/shop.js\"></script>
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
        return array (  309 => 113,  296 => 103,  292 => 101,  277 => 94,  273 => 92,  269 => 90,  263 => 89,  256 => 88,  252 => 87,  249 => 86,  247 => 85,  243 => 83,  239 => 81,  234 => 79,  229 => 78,  223 => 76,  221 => 75,  218 => 74,  216 => 73,  208 => 70,  196 => 65,  192 => 64,  187 => 61,  183 => 60,  164 => 43,  155 => 40,  149 => 39,  145 => 38,  142 => 37,  138 => 36,  127 => 27,  116 => 25,  112 => 24,  103 => 17,  99 => 15,  84 => 13,  75 => 10,  69 => 8,  67 => 7,  64 => 6,  47 => 5,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/category.twig", "");
    }
}
