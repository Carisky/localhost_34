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

/* default/template/common/categories_carousel.twig */
class __TwigTemplate_e67fa351264951eb492a476b9ed0f47f extends Template
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
\t<link href=\"catalog/view/theme/default/stylesheet/common/categories_carousel.css\" type=\"text/css\" rel=\"stylesheet\"/>

</head>

<div class=\"categories-carousel\">

\t<div class=\"content\" id=\"carousel-content\">
\t\t<div class=\"slide\">
\t\t\t<div class=\"text\">
\t\t\t\t<p class=\"title\">Konfitury</p>
\t\t\t\t<a href=\"#\" class=\"link\">
\t\t\t\t\t<div id=\"promo-link\" class=\"content\">
\t\t\t\t\t\t<p class=\"text\">DO SKLEPU</p>
\t\t\t\t\t\t<img src=\"image/catalog/assets/arrow_right.svg\"/>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<img src=\"image/catalog/assets/konfitures.png\"/>
\t\t</div>
\t\t<div class=\"slide\">
\t\t\t<div class=\"text\">
\t\t\t\t<p class=\"title\">Konfitury</p>
\t\t\t\t<a href=\"#\" class=\"link\">
\t\t\t\t\t<div id=\"promo-link\" class=\"content\">
\t\t\t\t\t\t<p class=\"text\">DO SKLEPU</p>
\t\t\t\t\t\t<img src=\"image/catalog/assets/arrow_right.svg\"/>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<img src=\"image/catalog/assets/konfitures.png\"/>
\t\t</div>
\t\t<div class=\"slide\">
\t\t\t<div class=\"text\">
\t\t\t\t<p class=\"title\">Konfitury</p>
\t\t\t\t<a href=\"#\" class=\"link\">
\t\t\t\t\t<div id=\"promo-link\" class=\"content\">
\t\t\t\t\t\t<p class=\"text\">DO SKLEPU</p>
\t\t\t\t\t\t<img src=\"image/catalog/assets/arrow_right.svg\"/>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<img src=\"image/catalog/assets/konfitures.png\"/>
\t\t</div>
\t\t<div class=\"slide\">
\t\t\t<div class=\"text\">
\t\t\t\t<p class=\"title\">Konfitury</p>
\t\t\t\t<a href=\"#\" class=\"link\">
\t\t\t\t\t<div id=\"promo-link\" class=\"content\">
\t\t\t\t\t\t<p class=\"text\">DO SKLEPU</p>
\t\t\t\t\t\t<img src=\"image/catalog/assets/arrow_right.svg\"/>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<img src=\"image/catalog/assets/konfitures.png\"/>
\t\t</div>
\t\t<div class=\"slide\">
\t\t\t<div class=\"text\">
\t\t\t\t<p class=\"title\">Konfitury</p>
\t\t\t\t<a href=\"#\" class=\"link\">
\t\t\t\t\t<div id=\"promo-link\" class=\"content\">
\t\t\t\t\t\t<p class=\"text\">DO SKLEPU</p>
\t\t\t\t\t\t<img src=\"image/catalog/assets/arrow_right.svg\"/>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<img src=\"image/catalog/assets/konfitures.png\"/>
\t\t</div>
\t\t<div class=\"slide\">
\t\t\t<div class=\"text\">
\t\t\t\t<p class=\"title\">Konfitury</p>
\t\t\t\t<a href=\"#\" class=\"link\">
\t\t\t\t\t<div id=\"promo-link\" class=\"content\">
\t\t\t\t\t\t<p class=\"text\">DO SKLEPU</p>
\t\t\t\t\t\t<img src=\"image/catalog/assets/arrow_right.svg\"/>
\t\t\t\t\t</div>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t<img src=\"image/catalog/assets/konfitures.png\"/>
\t\t</div>
\t</div>
\t<div class=\"pagination\" id=\"carousel-pagination\"></div>

</div>
<div class=\"categories-carousel-mobile\">
\t<img id=\"categories-carousel-mobile-slide\" src=\"image/catalog/assets/mobile_categories_demo.png\"/>
\t<div>
\t\t<p class=\"categories-carousel-mobile-active-slide-text\">
\t\t\tKonfitury
\t\t</p>
\t</div>
\t<div>
\t\t<p class=\"categories-carousel-mobile-slide-text\">
\t\t\tKremy i smarowidła
\t\t</p>
\t</div>
\t<div>
\t\t<p class=\"categories-carousel-mobile-slide-text\">
\t\t\tMaluchy w Spichlerzu
\t\t</p>
\t</div>
\t<div>
\t\t<p class=\"categories-carousel-mobile-slide-text\">
\t\t\tMiody
\t\t</p>
\t</div>
\t<div>
\t\t<p class=\"categories-carousel-mobile-slide-text\">
\t\t\tOwoce w syropie
\t\t</p>
\t</div>
\t<div>
\t\t<p class=\"categories-carousel-mobile-slide-text\">
\t\t\tPrzetwory warzywne
\t\t</p>
\t</div>
\t<div>
\t\t<p class=\"categories-carousel-mobile-slide-text\">
\t\t\tSyropy
\t\t</p>
\t</div>
\t<div>
\t\t<p class=\"categories-carousel-mobile-slide-text\">
\t\t\tZestawy prezentowe
\t\t</p>
\t</div>
</div>

 <script type=\"text/javascript\" src=\"catalog/view/javascript/categories_carousel/categories_carousel.js\"></script>
 <script type=\"text/javascript\" src=\"catalog/view/javascript/categories_carousel/categories_carousel_mobile.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/categories_carousel.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/categories_carousel.twig", "");
    }
}
