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

/* default/template/common/categories_list.twig */
class __TwigTemplate_998be9e1e6fd689a0e6c22d6677cca0a extends Template
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
        echo "<div class=\"categories-list\">
\t<div class=\"container\">
\t\t<img src=\"/image/catalog/assets/gift_packs.jpeg\"/>
\t\t<a href=\"index.php?route=common/shop&category=konfitury\">KONFITURY</a>
\t</div>
\t<div class=\"container\">
\t\t<img src=\"/image/catalog/assets/gift_packs.jpeg\"/>
\t\t<a href=\"index.php?route=common/shop&category=maluchy w spichlerzu\">MALUCHY W SPICHLERZU</a>
\t</div>
\t<div class=\"container\">
\t\t<img src=\"/image/catalog/assets/gift_packs.jpeg\"/>
\t\t<a href=\"index.php?route=common/shop&category=miody\">MIODY</a>
\t</div>
\t<div class=\"container\">
\t\t<img src=\"/image/catalog/assets/gift_packs.jpeg\"/>
\t\t<a href=\"index.php?route=common/shop&category=owoce w syropie\">OWOCE W SYROPIE</a>
\t</div>
\t<div class=\"container\">
\t\t<img src=\"/image/catalog/assets/gift_packs.jpeg\"/>
\t\t<a href=\"index.php?route=common/shop&category=przetwory warzywne\">PRZETWORY WARZYWNE</a>
\t</div>
\t<div class=\"container\">
\t\t<img src=\"/image/catalog/assets/gift_packs.jpeg\"/>
\t<a href=\"index.php?route=common/shop&category=syropy\">SYROPY</a>
\t</div>
\t<div class=\"container\">
\t\t<img src=\"/image/catalog/assets/gift_packs.jpeg\"/>
\t<a href=\"index.php?route=common/shop&category=zestawy prezentowe\">ZESTAWY <br> PREZENTOWE</a>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "default/template/common/categories_list.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/categories_list.twig", "");
    }
}
