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
class __TwigTemplate_1fcdc782f3f063cc8216825744a9b208 extends Template
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
  <!-- Форма для сортировки -->
  <form id=\"sortForm\" method=\"get\" action=\"";
        // line 37
        echo ($context["url_current"] ?? null);
        echo "\">
    <div class=\"checkbox-container\">
      ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sorts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sort_option"]) {
            // line 40
            echo "        <label>
          <input type=\"radio\" name=\"sort\" class=\"parameters-radio\" value=\"";
            // line 41
            echo twig_get_attribute($this->env, $this->source, $context["sort_option"], "value", [], "any", false, false, false, 41);
            echo "\"
          ";
            // line 42
            if ((twig_get_attribute($this->env, $this->source, $context["sort_option"], "value", [], "any", false, false, false, 42) == ($context["sort"] ?? null))) {
                echo "checked";
            }
            echo ">
          ";
            // line 43
            echo twig_get_attribute($this->env, $this->source, $context["sort_option"], "text", [], "any", false, false, false, 43);
            echo "
        </label>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort_option'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </div>
  </form>
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
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 66
            echo "        <div class=\"product-card\">
            <div class=\"product-header\">
                <div class=\"product-image\">
                    <a href=\"";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 69);
            echo "\">
                        <img src=\"";
            // line 70
            echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 70);
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 70);
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 70);
            echo "\" class=\"img-responsive\" />
                    </a>
                </div>
            </div>
            <div class=\"name-price-block\">
                <h4><a class=\"product-name\" href=\"";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 75);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 75);
            echo "</a></h4>
            </div>
            <div class=\"name-price-block\">
                ";
            // line 78
            if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 78)) {
                // line 79
                echo "                <p class=\"product-price\">
                    ";
                // line 80
                if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 80)) {
                    // line 81
                    echo "                        ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 81);
                    echo "
                    ";
                } else {
                    // line 83
                    echo "                        <span class=\"price-new\">";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 83);
                    echo "</span>
                        <span class=\"price-old\">";
                    // line 84
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 84);
                    echo "</span>
                    ";
                }
                // line 86
                echo "                </p>
                ";
            }
            // line 88
            echo "            </div>
            <div class=\"product-info\">
                ";
            // line 90
            if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 90)) {
                // line 91
                echo "                <div class=\"product-rating\">
                    ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 93
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 93) < $context["i"])) {
                        echo "<span>☆</span>";
                    } else {
                        echo "<span>★</span>";
                    }
                    // line 94
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "                </div>
                ";
            }
            // line 97
            echo "            </div>
            <div class=\"product-actions\">
                <button class=\"add-to-cart\" type=\"button\" onclick=\"cart.add('";
            // line 99
            echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 99);
            echo "', '";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", [], "any", false, false, false, 99);
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
        // line 106
        echo "    </div>

    <div id=\"pagination\" class=\"pagination\">";
        // line 108
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
        // line 118
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
        return array (  317 => 118,  304 => 108,  300 => 106,  285 => 99,  281 => 97,  277 => 95,  271 => 94,  264 => 93,  260 => 92,  257 => 91,  255 => 90,  251 => 88,  247 => 86,  242 => 84,  237 => 83,  231 => 81,  229 => 80,  226 => 79,  224 => 78,  216 => 75,  204 => 70,  200 => 69,  195 => 66,  191 => 65,  170 => 46,  161 => 43,  155 => 42,  151 => 41,  148 => 40,  144 => 39,  139 => 37,  128 => 28,  117 => 26,  113 => 25,  103 => 17,  99 => 15,  84 => 13,  75 => 10,  69 => 8,  67 => 7,  64 => 6,  47 => 5,  44 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/product/category.twig", "");
    }
}
