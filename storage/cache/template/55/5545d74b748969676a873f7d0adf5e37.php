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

/* default/template/common/shop.twig */
class __TwigTemplate_6a6b45b15ad97496fcbbc487a4d5df35 extends Template
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
\t<link href=\"catalog/view/theme/default//stylesheet/common/product.css\" type=\"text/css\" rel=\"stylesheet\"/>
\t<link href=\"catalog/view/theme/default//stylesheet/common/shop.css\" type=\"text/css\" rel=\"stylesheet\"/>
</head>

";
        // line 7
        echo ($context["header"] ?? null);
        echo "
<div class=\"shop\">
\t";
        // line 9
        if (($context["breadcrumbs"] ?? null)) {
            // line 10
            echo "\t\t<div class=\"breadcrumbs\">
\t\t\t";
            // line 11
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
                // line 12
                echo "\t\t\t\t<div>
\t\t\t\t\t";
                // line 13
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 13)) {
                    // line 14
                    echo "\t\t\t\t\t\t<span class=\"last\">";
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 14);
                    echo "</span>
\t\t\t\t\t";
                } else {
                    // line 16
                    echo "\t\t\t\t\t\t<a class=\"link\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 16);
                    echo "</a>
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t/
\t\t\t\t\t\t</span>
\t\t\t\t\t\t<!-- Разделитель -->
\t\t\t\t\t";
                }
                // line 22
                echo "\t\t\t\t</div>
\t\t\t";
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
            // line 24
            echo "\t\t</div>
\t";
        }
        // line 26
        echo "
\t<div id=\"categories-menu\" class=\"modal-menu\">
\t\t<div class=\"top\">
\t\t\t<div class=\"title\">Kategorie produktów</div>
\t\t\t<span class=\"close-btn\" id=\"categories-menu-close\">&times;</span>
\t\t</div>
\t\t<div class=\"checkbox-container\">
\t\t\t<label><input type=\"checkbox\" class=\"category-checkbox\" value=\"konfitury\">
\t\t\t\tKonfitury</label>
\t\t\t<label><input type=\"checkbox\" class=\"category-checkbox\" value=\"kremy-smarowidla\">
\t\t\t\tKremy i smarowidła</label>
\t\t\t<label><input type=\"checkbox\" class=\"category-checkbox\" value=\"maluchy-w-spichlerzu\">
\t\t\t\tMaluchy w Spichlerzu</label>
\t\t\t<label><input type=\"checkbox\" class=\"category-checkbox\" value=\"miody\">
\t\t\t\tMiody</label>
\t\t\t<label><input type=\"checkbox\" class=\"category-checkbox\" value=\"owoce-w-syropie\">
\t\t\t\tOwoce w syropie</label>
\t\t\t<label><input type=\"checkbox\" class=\"category-checkbox\" value=\"przetwory-warzywne\">
\t\t\t\tPrzetwory warzywne</label>
\t\t\t<label><input type=\"checkbox\" class=\"category-checkbox\" value=\"syropy\">
\t\t\t\tSyropy</label>
\t\t\t<label><input type=\"checkbox\" class=\"category-checkbox\" value=\"zestawy-prezentowe\">
\t\t\t\tZestawy prezentowe</label>
\t\t</div>
\t</div>

\t<div id=\"parameters-menu\" class=\"modal-menu\">
\t\t<div class=\"top\">
\t\t\t<div class=\"title\">Sortowanie</div>
\t\t\t<span class=\"close-btn\" id=\"parameters-menu-close\">&times;</span>
\t\t</div>
\t\t<div class=\"checkbox-container\">
\t\t\t<label><input type=\"checkbox\" class=\"parameters-checkbox\" value=\"default\">
\t\t\t\tDomyślne sortowanie</label>
\t\t\t<label><input type=\"checkbox\" class=\"parameters-checkbox\" value=\"popularity\">
\t\t\t\tSortuj wg popularności</label>
\t\t\t<label><input type=\"checkbox\" class=\"parameters-checkbox\" value=\"rating\">
\t\t\t\tSortuj wg średniej oceny</label>
\t\t\t<label><input type=\"checkbox\" class=\"parameters-checkbox\" value=\"newest\">
\t\t\t\tSortuj od najnowszych</label>
\t\t\t<label><input type=\"checkbox\" class=\"parameters-checkbox\" value=\"price-asc\">
\t\t\t\tSortuj po cenie от najniższej</label>
\t\t\t<label><input type=\"checkbox\" class=\"parameters-checkbox\" value=\"price-desc\">
\t\t\t\tSortuj po cenie od najwyższej</label>
\t\t</div>
\t</div>


\t<div class=\"title\">
\t\tSklep
\t</div>
\t<div class=\"sorters\">
\t\t<div id=\"categories-sort\" class=\"sorter\"><img src=\"image/catalog/assets/categories_ico.svg\"/><p>Kategorie produktów</p>
\t\t</div>
\t\t<div id=\"parameters-sort\" class=\"sorter\"><img src=\"image/catalog/assets/sorting_ico.svg\"/><p>Domyślne sortowanie</p>
\t\t</div>

\t</div>
\t<div id=\"products-list\" class=\"products-list\"></div>
\t<div id=\"pagination\" class=\"pagination\"></div>

\t<div class=\"additional\">
\t\t<div class=\"block\">
\t\t\t<div class=\"additional-info-title\">Konfitury – to nie tylko dżem, to skarb każdej domowej spiżarni</div>
\t\t\t<div class=\"additional-info-plot\">Jak zamknąć słodycz słonecznych dni w szczelnym słoiczku? Znamy odpowiedź na to pytanie. W tej kategorii znajdziesz godne uwagi pyszne i gęste konfitury z malin, konfitury z wiśni, konfitury z kiwi, konfitury z brzoskwini czy powidło śliwkowe. Dzięki którym, w prosty sposób, będziesz mógł cieszyć się smakiem i witaminami przez cały rok. Prezentujemy także przetwory z dodatkiem korzennych przypraw i alkoholu. Bez wątpienia te ostatnie doskonale sprawdzą się na letnim garden party. Otwórz się na smak przeszłości!</div>
\t\t</div>
\t\t<div class=\"block\">
\t\t\t<div class=\"additional-info-title\">Tradycyjne specjały – konfitura z Krakowa</div>
\t\t\t<div class=\"additional-info-plot\">Owocowe przetwory Spichlerz z pewnością rozpromienią każdy pochmurny dzień i umilą wieczory przy filiżance herbaty. Do mięs, do serów lub do herbaty? Nic nie stoi na przeszkodzie, aby wykorzystać konfiturę z kawałkami owoców do smarowania kanapek i naleśników bądź jako dodatek do herbaty, do serów, do mięs, drożdżówek, bułeczek, rogalików, ciast i lodów. Niezależnie od metody podania, domowe bezglutenowe z kiwi, pomarańczy, ananasa czy borówki królują na stole: ich wyjątkowy smak, naturalny kolor i urzekający zapach uwiodą każdego.</div>
\t\t</div>
\t\t<div class=\"block\">
\t\t\t<div class=\"additional-info-title\">Przetwory owocowe domowej roboty – synonim zdrowia</div>
\t\t\t<div class=\"additional-info-plot\">Sklepowe produkty nie mogą równać się z samodzielnie przygotowanymi dżemem. Konfitury Spichlerz powstają w oparciu o tradycyjne receptury, które są stosowane z najstarszych rodzinnych przepisów kulinarnych. Producent przetworów owocowych Spichlerz robi wysokiej klasy produkty. Przede wszystkim próżno szukać w nich sztucznych barwników, polepszaczy smaku – są zrobione bez konserwantów. Każdy dżem przygotowywany jest wyłącznie z dojrzałych i starannie wyselekcjonowanych owoców. Dzięki temu przetwory domowej roboty w słoiczkach są przepełnione owocowym aromatem, ale i obfitują w cenne składniki odżywcze. Miłośnicy naturalnej, zdrowej kuchni mogą więc na stałe wprowadzić do swojej diety słodkie powidła śliwkowe, konfiturę z brzoskwini, mango czy z malin. Proponowane specjały zamknięto w szklanych słoiczkach i ozdobiono etykietami. Dzięki nim w domowej spiżarni od razu zrobi się przytulnie.</div>
\t\t</div>
\t\t<div class=\"block\">
\t\t\t<div class=\"additional-info-title\">Lubisz przetwory domowej roboty? Wypróbuj nowe smaki marki Spichlerz!</div>
\t\t\t<div class=\"additional-info-plot\">Mamy coś dla wielbicieli kiwi, entuzjastów konfitury pomarańczowej i miłośników dżemu z żurawiny. Proponowane przetwory domowej roboty są wolne od konserwantów i sztucznych barwników. Nie znajdziesz też w nich dużej zawartości cukru – dojrzałe owoce same w sobie są słodkie, więc w konfiturach pełnią role naturalnego konserwantu.</div>
\t\t</div>
\t</div>
</div>


";
        // line 108
        echo ($context["footer"] ?? null);
        echo "
<script type=\"text/javascript\" src=\"catalog/view/javascript/common.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/products/createProductCard.js\"></script>
<script type=\"text/javascript\" src=\"catalog/view/javascript/shop/shop.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "default/template/common/shop.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 108,  114 => 26,  110 => 24,  95 => 22,  83 => 16,  77 => 14,  75 => 13,  72 => 12,  55 => 11,  52 => 10,  50 => 9,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/shop.twig", "");
    }
}
