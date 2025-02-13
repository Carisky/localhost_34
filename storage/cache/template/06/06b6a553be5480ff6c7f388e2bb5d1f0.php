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

/* default/template/common/home.twig */
class __TwigTemplate_3d30e93c9ebec95c9630a7a76c9c9c64 extends Template
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
<div id=\"common-home\" class=\"container\">
\t<div id=\"content\" class=\"col\">

\t\t";
        // line 5
        echo ($context["carousel"] ?? null);
        echo "
\t\t<div class=\"jam-promo-container\">
\t\t\t<div class=\"jam-promo\">
\t\t\t\t<img src=\"image/catalog/assets/Adobe-horizontal (2).jpg\" class=\"pear-on-tree\"/>
\t\t\t\t<img src=\"image/catalog/assets/Adobe-vertical (1).jpg\" class=\"pear-jam\"/>
\t\t\t\t<div class=\"jam-promo-description\">
\t\t\t\t\t<p class=\"o-nas\">O NAS</p>
\t\t\t\t\t<p class=\"title\">Idealny producent przetworów to</p>
\t\t\t\t\t<p class=\"owner\">Spichlerz</p>
\t\t\t\t\t<p class=\"description\">
\t\t\t\t\t\tWłasne produkty sprzedawane w sklepie internetowym to najszybszy sposób na zapewnienie sobie dostawy zdrowych, starannie przygotowanych przetworów owocowych.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"jam-promo-container-mobile\">
\t\t\t<div class=\"jam-promo-mobile\">
\t\t\t\t<div class=\"jam-promo-description-mobile\">
\t\t\t\t\t<p class=\"o-nas\">O NAS</p>
\t\t\t\t\t<p class=\"title\">Idealny producent przetworów to</p>
\t\t\t\t\t<p class=\"owner\">Spichlerz</p>
\t\t\t\t\t<p class=\"description\">
\t\t\t\t\t\tWłasne produkty sprzedawane w sklepie internetowym to najszybszy sposób na zapewnienie sobie dostawy zdrowych, starannie przygotowanych przetworów owocowych.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<img src=\"image/catalog/assets/pear_on_tree.png\" class=\"pear-on-tree-mobile\"/>
\t\t\t\t<img src=\"image/catalog/assets/pear_jam.png\" class=\"pear-jam\"/>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"about-owner\">
\t\t\t<div class=\"popularity\">
\t\t\t\t<div class=\"left\">
\t\t\t\t\t<p class=\"line-1\">Dlaczego Spichlerz jest</p>
\t\t\t\t\t<p class=\"line-2\">tak popularni?</p>
\t\t\t\t\t<p class=\"line-3\">Oferowane przez nas wyroby słyną z wyjątkowego aromatu i niezapomnianego smaku. W taki sposób tworzymy markę, która zajmuję solidną pozycję na rynku. Nowoczesna linia produkcyjna daje nam możliwość konkurować na wielkich i wymagających rynkach Unii Europejskiej, z zachowaniem tradycji oraz największej ilości składników odżywczych w naszych wytworach.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"right\">
\t\t\t\t\t<p class=\"line-1\">Producent zadbał o to, by były one estetycznie zapakowane, dzięki czemu nadają się również na prezent. Spichlerz to gwarancja najwyższej jakości i smaku w każdej łyżeczce. Wśród różnorodności rodzajów przetworów owocowych, producent wybrał najbardziej popularne, zdrowe i smacznie: konfitury, syropy i cytryny w syropie. Spichlerz oferuje gwarantowaną jakość, na której zawsze można polegać. Dlatego kupując proponowane produkty, nie musisz się niczego obawiać. Z pewnością sprawdzą się one dobrze na niejednym stole, nie tylko codziennym, ale również świątecznym.</p>
\t\t\t\t\t<div class=\"line-2\">
\t\t\t\t\t\t<a href=\"#\" class=\"link\">
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<p class=\"text\">POZNAJ NAS</p>
\t\t\t\t\t\t\t\t<img src=\"image/catalog/assets/arrow_right.svg\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"about-owner-mobile\">
\t\t\t<div class=\"popularity\">
\t\t\t\t<div class=\"left\">
\t\t\t\t\t<p class=\"line-1\">Dlaczego Spichlerz jest</p>
\t\t\t\t\t<p class=\"line-2\">tak popularni?</p>
\t\t\t\t\t<p class=\"line-3\">Oferowane przez nas wyroby słyną z wyjątkowego aromatu i niezapomnianego smaku. W taki sposób tworzymy markę, która zajmuję solidną pozycję na rynku. Nowoczesna linia produkcyjna daje nam możliwość konkurować na wielkich i wymagających rynkach Unii Europejskiej, z zachowaniem tradycji oraz największej ilości składników odżywczych w naszych wytworach.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"right\">
\t\t\t\t\t<p class=\"line-1\">Producent zadbał o to, by były one estetycznie zapakowane, dzięki czemu nadają się również na prezent. Spichlerz to gwarancja najwyższej jakości i smaku w każdej łyżeczce. Wśród różnorodności rodzajów przetworów owocowych, producent wybrał najbardziej popularne, zdrowe i smacznie: konfitury, syropy i cytryny w syropie. Spichlerz oferuje gwarantowaną jakość, na której zawsze można polegać. Dlatego kupując proponowane produkty, nie musisz się niczego obawiać. Z pewnością sprawdzą się one dobrze na niejednym stole, nie tylko codziennym, ale również świątecznym.</p>
\t\t\t\t\t<div class=\"line-2\">
\t\t\t\t\t\t<a href=\"#\" class=\"link\">
\t\t\t\t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t\t<p class=\"text\">POZNAJ NAS</p>
\t\t\t\t\t\t\t\t<img src=\"image/catalog/assets/arrow_right.svg\"/>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"advantages\">
\t\t\t<div class=\"card\">
\t\t\t\t<img src=\"image/catalog/assets/natural.svg\"/>
\t\t\t\t<p class=\"text\">Naturalne produkty</p>
\t\t\t</div>
\t\t\t<div class=\"card\">
\t\t\t\t<img src=\"image/catalog/assets/quality_guarantee.svg\"/>
\t\t\t\t<p class=\"text\">Gwarancja jakości</p>
\t\t\t</div>
\t\t\t<div class=\"card\">
\t\t\t\t<img src=\"image/catalog/assets/recepi.svg\"/>
\t\t\t\t<p class=\"text\">Receptura własna</p>
\t\t\t</div>
\t\t\t<div class=\"card\">
\t\t\t\t<img src=\"image/catalog/assets/courier.svg\"/>
\t\t\t\t<p class=\"text\">Wysyłka w 24h</p>
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 98
        echo ($context["categories_list"] ?? null);
        echo "

\t<div class=\"products-container-wrapper\">
\t\t<div class=\"header\">

\t\t\t<p class=\"title\">
\t\t\t\tPOLECANE PRODUCTY
\t\t\t</p>

\t\t\t<div class=\"nav-to\">
\t\t\t\t<p>WZYSTKO</p>
\t\t\t\t<img src=\"image/catalog/assets/arrow_right.svg\"/>
\t\t\t</div>

\t\t</div>

\t\t<div class=\"main\">
\t\t\t<img src=\"image/catalog/assets/arrow_left_.svg\" class=\"products-container-control\" id=\"prev-button\"/>
\t\t\t<div id=\"products-container\" class=\"products-container\"></div>
\t\t\t<img src=\"image/catalog/assets/arrow_right_.svg\" class=\"products-container-control\" id=\"next-button\"/>
\t\t</div>
\t</div>


\t";
        // line 122
        echo ($context["promotion"] ?? null);
        echo "

\t<div class=\"products-container-wrapper\">
\t\t<div class=\"header\">

\t\t\t<p class=\"title\">
\t\t\t\tPOPULARNE PRODUCTY
\t\t\t</p>

\t\t\t<div class=\"nav-to\">
\t\t\t\t<p>WZYSTKO</p>
\t\t\t\t<img src=\"image/catalog/assets/arrow_right.svg\"/>
\t\t\t</div>

\t\t</div>

\t\t<div class=\"main\">
\t\t\t<img id=\"prev-promo-button\" src=\"image/catalog/assets/arrow_left_.svg\" class=\"products-container-control\" id=\"prev-button\"/>
\t\t\t<div id=\"products-container-promo\" class=\"products-container\"></div>
\t\t\t<img id=\"next-promo-button\" src=\"image/catalog/assets/arrow_right_.svg\" class=\"products-container-control\" id=\"next-button\"/>
\t\t</div>
\t</div>

\t<div class=\"new-product-demo-mobile\">
\t\t<img class=\"image\" src=\"image/catalog/assets/new_product_demo.png\"/>
\t\t<div class=\"description\">
\t\t\t<p class=\"title\">
\t\t\t\tPromocja
\t\t\t</p>
\t\t\t<p class=\"main-text\">
\t\t\t\tNajnowsze
\t\t\t</p>
\t\t\t<p class=\"sub-main-text\">
\t\t\t\tproducty
\t\t\t</p>
\t\t\t<p class=\"sub-text\">
\t\t\t\tSpróbuj najpierw naturalne konfitury, syropy oraz owoce w syropie
\t\t\t</p>
\t\t\t<a href=\"#\">Zobacz produkty
\t\t\t\t<img src=\"image/catalog/assets/arrow_right.svg\"/></a>
\t\t</div>
\t</div>

\t<div class=\"new-product-demo\">
\t\t<img src=\"image/catalog/assets/new_product_demo.png\"/>
\t\t<div class=\"description\">
\t\t\t<p class=\"title\">
\t\t\t\tPromocja
\t\t\t</p>
\t\t\t<p class=\"main-text\">
\t\t\t\tNajnowsze
\t\t\t</p>
\t\t\t<p class=\"sub-main-text\">
\t\t\t\tproducty
\t\t\t</p>
\t\t\t<p class=\"sub-text\">
\t\t\t\tSpróbuj najpierw naturalne konfitury, syropy oraz owoce w syropie
\t\t\t</p>
\t\t\t<a href=\"#\">Zobacz produkty
\t\t\t\t<img src=\"image/catalog/assets/arrow_right.svg\"/></a>
\t\t</div>
\t</div>
\t";
        // line 184
        echo ($context["footer"] ?? null);
        echo "

\t <script type=\"text/javascript\" src=\"catalog/view/javascript/products/pagination.js\"></script>
\t <script type=\"text/javascript\" src=\"catalog/view/javascript/products/createProductCard.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 184,  167 => 122,  140 => 98,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/home.twig", "");
    }
}
