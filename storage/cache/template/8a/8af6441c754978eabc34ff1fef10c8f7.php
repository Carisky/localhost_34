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

/* default/template/common/singleproduct.twig */
class __TwigTemplate_1d66fd14d90029612c26603b866673a9 extends Template
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
\t<link href=\"catalog/view/theme/default/stylesheet/common/breadcrumbs.css\" type=\"text/css\" rel=\"stylesheet\"/>
\t<link href=\"catalog/view/theme/default/stylesheet/common/singleproduct.css\" type=\"text/css\" rel=\"stylesheet\"/>
\t<link href=\"catalog/view/theme/default/stylesheet/common/product.css\" type=\"text/css\" rel=\"stylesheet\"/>
</head>

";
        // line 7
        echo ($context["header"] ?? null);
        echo "

<div class=\"single-product\">

\t<div class=\"left\">
\t\t<img class=\"product-image\" src=\"";
        // line 12
        echo ($context["image_url"] ?? null);
        echo "\" alt=\"";
        echo ($context["name"] ?? null);
        echo "\" onerror=\"this.onerror=null; this.src='image/no_image.png';\"/>
\t</div>
\t<div class=\"right\">

\t\t";
        // line 16
        if (($context["breadcrumbs"] ?? null)) {
            // line 17
            echo "\t\t\t<div class=\"breadcrumbs\">
\t\t\t\t";
            // line 18
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
                // line 19
                echo "\t\t\t\t\t<div>
\t\t\t\t\t\t";
                // line 20
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "\t\t\t\t\t\t\t<span class=\"last\">";
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 21);
                    echo "</span>
\t\t\t\t\t\t";
                } else {
                    // line 23
                    echo "\t\t\t\t\t\t\t<a class=\"link\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 23);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 23);
                    echo "</a>
\t\t\t\t\t\t\t<span>/</span>
\t\t\t\t\t\t";
                }
                // line 26
                echo "\t\t\t\t\t</div>
\t\t\t\t";
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
            // line 28
            echo "\t\t\t</div>
\t\t";
        }
        // line 30
        echo "
\t\t<div class=\"product-name\">
\t\t\t";
        // line 32
        echo ($context["name"] ?? null);
        echo "
\t\t</div>

\t\t<div class=\"rating\">
\t\t\t";
        // line 36
        echo ($context["stars"] ?? null);
        echo "
\t\t</div>
\t\t<div class=\"warehouse-info\">
\t\t\t<div>
\t\t\t\t<img src=\"image/catalog/assets/on_stock_ico.svg\"/>
\t\t\t\t<span>";
        // line 41
        echo ($context["quantity"] ?? null);
        echo "&nbsp;</span>
\t\t\t\t<span>w magazynie</span>
\t\t\t</div>
\t\t\t<div class=\"block\">
\t\t\t\t<img src=\"image/catalog/assets/shipment_ico.svg\"/>
\t\t\t\t<span>Termin wysyłki&nbsp;</span>
\t\t\t\t<span>2 dni robocze</span>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"description\">
\t\t\t";
        // line 51
        echo ($context["description"] ?? null);
        echo "
\t\t</div>
\t\t<div class=\"additional-info\">
\t\t\t<div>
\t\t\t\t<span class=\"bold\">Brand :</span>
\t\t\t\t<span class=\"common\">Spichlerz</span>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<span class=\"bold\">SKU :</span>
\t\t\t\t<span class=\"common\">";
        // line 60
        echo ($context["sku"] ?? null);
        echo "</span>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<span class=\"bold\">Category :</span>
\t\t\t\t<span class=\"common\">";
        // line 64
        echo ($context["category"] ?? null);
        echo "</span>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<span class=\"bold\">GTIN :</span>
\t\t\t\t<span class=\"common\"></span>
\t\t\t</div>
\t\t\t<div class=\"price\">
\t\t\t\t";
        // line 71
        echo ($context["price"] ?? null);
        echo "
\t\t\t\tzł
\t\t\t</div>
\t\t</div>
\t\t<div class=\"actions\">
\t\t\t<div class=\"count\">
\t\t\t\t<div class=\"event\" id=\"minus\">-</div>
\t\t\t\t<div id=\"value\">1</div>
\t\t\t\t<div class=\"event\" id=\"add\">+</div>
\t\t\t</div>
\t\t\t<div id=\"addToCartBtn\" class=\"to-cart\" data-product-id=";
        // line 81
        echo ($context["id"] ?? null);
        echo ">
\t\t\t\t<p>DO KOSZYKA</p>
\t\t\t\t<img src=\"image/catalog/assets/add_to_cart_ico.svg\"/>
\t\t\t</div>
\t\t</div>
\t</div>

</div>
<div class=\"accordion\">
\t<div class=\"accordion-item\">
\t\t<button class=\"accordion-header\">Opis produktu</button>
\t\t<div class=\"accordion-content\">
\t\t\t<p>Pełny opis produktu znajduje się tutaj. Możesz dodać dowolną treść.</p>
\t\t</div>
\t</div>
\t<div class=\"accordion-item\">
\t\t<button class=\"accordion-header\">Opinie</button>
\t\t<div class=\"accordion-content\">
\t\t\t<p>Przeczytaj opinie innych użytkowników o tym produkcie.</p>
\t\t</div>
\t</div>
\t<div class=\"accordion-item\">
\t\t<button class=\"accordion-header\">Dodaj opinię</button>
\t\t<div class=\"accordion-content\">
\t\t\t<form action=\"/submit-opinion\" method=\"post\" class=\"opinion-form\">
\t\t\t\t<div class=\"form-control\">
\t\t\t\t\t<label for=\"rating\">Twoja ocena *</label>
\t\t\t\t\t<div class=\"rating-stars\">
\t\t\t\t\t\t<input type=\"radio\" id=\"star5\" name=\"rating\" value=\"5\">
\t\t\t\t\t\t<label for=\"star5\" title=\"5 stars\">
\t\t\t\t\t\t\t<svg width=\"13\" height=\"12\" viewbox=\"0 0 13 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t<path d=\"M6.5 0.618034L7.59607 3.99139C7.72994 4.40341 8.1139 4.68237 8.54713 4.68237H12.0941L9.22453 6.76722C8.87405 7.02186 8.72739 7.47323 8.86126 7.88526L9.95733 11.2586L7.08779 9.17376C6.7373 8.91912 6.2627 8.91912 5.91221 9.17376L3.04267 11.2586L4.13874 7.88525C4.27261 7.47323 4.12595 7.02186 3.77547 6.76722L0.905918 4.68237H4.45287C4.8861 4.68237 5.27006 4.40341 5.40393 3.99139L6.5 0.618034Z\" stroke=\"#C7A992\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<input type=\"radio\" id=\"star4\" name=\"rating\" value=\"4\">
\t\t\t\t\t\t<label for=\"star4\" title=\"4 stars\">
\t\t\t\t\t\t\t<svg width=\"13\" height=\"12\" viewbox=\"0 0 13 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t<path d=\"M6.5 0.618034L7.59607 3.99139C7.72994 4.40341 8.1139 4.68237 8.54713 4.68237H12.0941L9.22453 6.76722C8.87405 7.02186 8.72739 7.47323 8.86126 7.88526L9.95733 11.2586L7.08779 9.17376C6.7373 8.91912 6.2627 8.91912 5.91221 9.17376L3.04267 11.2586L4.13874 7.88525C4.27261 7.47323 4.12595 7.02186 3.77547 6.76722L0.905918 4.68237H4.45287C4.8861 4.68237 5.27006 4.40341 5.40393 3.99139L6.5 0.618034Z\" stroke=\"#C7A992\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<input type=\"radio\" id=\"star3\" name=\"rating\" value=\"3\">
\t\t\t\t\t\t<label for=\"star3\" title=\"3 stars\">
\t\t\t\t\t\t\t<svg width=\"13\" height=\"12\" viewbox=\"0 0 13 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t<path d=\"M6.5 0.618034L7.59607 3.99139C7.72994 4.40341 8.1139 4.68237 8.54713 4.68237H12.0941L9.22453 6.76722C8.87405 7.02186 8.72739 7.47323 8.86126 7.88526L9.95733 11.2586L7.08779 9.17376C6.7373 8.91912 6.2627 8.91912 5.91221 9.17376L3.04267 11.2586L4.13874 7.88525C4.27261 7.47323 4.12595 7.02186 3.77547 6.76722L0.905918 4.68237H4.45287C4.8861 4.68237 5.27006 4.40341 5.40393 3.99139L6.5 0.618034Z\" stroke=\"#C7A992\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<input type=\"radio\" id=\"star2\" name=\"rating\" value=\"2\">
\t\t\t\t\t\t<label for=\"star2\" title=\"2 stars\">
\t\t\t\t\t\t\t<svg width=\"13\" height=\"12\" viewbox=\"0 0 13 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t<path d=\"M6.5 0.618034L7.59607 3.99139C7.72994 4.40341 8.1139 4.68237 8.54713 4.68237H12.0941L9.22453 6.76722C8.87405 7.02186 8.72739 7.47323 8.86126 7.88526L9.95733 11.2586L7.08779 9.17376C6.7373 8.91912 6.2627 8.91912 5.91221 9.17376L3.04267 11.2586L4.13874 7.88525C4.27261 7.47323 4.12595 7.02186 3.77547 6.76722L0.905918 4.68237H4.45287C4.8861 4.68237 5.27006 4.40341 5.40393 3.99139L6.5 0.618034Z\" stroke=\"#C7A992\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</label>
\t\t\t\t\t\t<input type=\"radio\" id=\"star1\" name=\"rating\" value=\"1\">
\t\t\t\t\t\t<label for=\"star1\" title=\"1 star\">
\t\t\t\t\t\t\t<svg width=\"13\" height=\"12\" viewbox=\"0 0 13 12\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
\t\t\t\t\t\t\t\t<path d=\"M6.5 0.618034L7.59607 3.99139C7.72994 4.40341 8.1139 4.68237 8.54713 4.68237H12.0941L9.22453 6.76722C8.87405 7.02186 8.72739 7.47323 8.86126 7.88526L9.95733 11.2586L7.08779 9.17376C6.7373 8.91912 6.2627 8.91912 5.91221 9.17376L3.04267 11.2586L4.13874 7.88525C4.27261 7.47323 4.12595 7.02186 3.77547 6.76722L0.905918 4.68237H4.45287C4.8861 4.68237 5.27006 4.40341 5.40393 3.99139L6.5 0.618034Z\" stroke=\"#C7A992\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</label>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<div class=\"form-control\">
\t\t\t\t\t<input placeholder=\"Twoje imię *\" type=\"text\" id=\"name\" name=\"name\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-control\">
\t\t\t\t\t<textarea placeholder=\"Twoja opinia *\" id=\"opinion\" name=\"opinion\" required></textarea>
\t\t\t\t</div>
\t\t\t\t<div class=\"button-container\">
\t\t\t\t\t<button type=\"submit\" class=\"submit-button\">
\t\t\t\t\t\t<div>Wyślij</div><img src=\"image/catalog/assets/arrow_right.svg\"/></button>
\t\t\t\t</div>
\t\t\t\t<div class=\"separator\"></div>
\t\t\t</form>
\t\t</div>
\t</div>

</div>
<div class=\"products-container-wrapper\">
\t<div class=\"header\">
\t\t<p class=\"title-mobile\">Może Ci się spodobać również</p>
\t\t<p class=\"title\">
\t\t\tMoże Ci się spodobać również
\t\t</p>

\t\t<div class=\"nav-to\">
\t\t\t<p>WZYSTKO</p>
\t\t\t<img src=\"image/catalog/assets/arrow_right.svg\"/>
\t\t</div>

\t</div>

\t<div class=\"main\">
\t\t<div id=\"products-container\" class=\"products-container\"></div>
\t</div>
</div>
";
        // line 176
        echo ($context["footer"] ?? null);
        echo "
 <script type=\"text/javascript\" src=\"catalog/view/javascript/products/createProductCard.js\"></script>
 <script type=\"text/javascript\" src=\"catalog/view/javascript/singleproduct/singleproduct.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/singleproduct.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 176,  197 => 81,  184 => 71,  174 => 64,  167 => 60,  155 => 51,  142 => 41,  134 => 36,  127 => 32,  123 => 30,  119 => 28,  104 => 26,  95 => 23,  89 => 21,  87 => 20,  84 => 19,  67 => 18,  64 => 17,  62 => 16,  53 => 12,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/singleproduct.twig", "");
    }
}
