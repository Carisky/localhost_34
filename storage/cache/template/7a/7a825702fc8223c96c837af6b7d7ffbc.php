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

/* default/template/common/blog.twig */
class __TwigTemplate_f84c5e2e80eeda00823e2f3236e2a84b extends Template
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
\t<link href=\"catalog/view/theme/default/stylesheet/common/blog.css\" type=\"text/css\" rel=\"stylesheet\"/>
</head>

";
        // line 6
        echo ($context["header"] ?? null);
        echo "

";
        // line 8
        if (($context["breadcrumbs"] ?? null)) {
            // line 9
            echo "\t<div class=\"breadcrumbs\">
\t\t";
            // line 10
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
                // line 11
                echo "\t\t\t<div>
\t\t\t\t";
                // line 12
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 12)) {
                    // line 13
                    echo "\t\t\t\t\t<span class=\"last\">";
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 13);
                    echo "</span>
\t\t\t\t";
                } else {
                    // line 15
                    echo "\t\t\t\t\t<a class=\"link\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 15);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
                    echo "</a>
\t\t\t\t\t<span>
\t\t\t\t\t\t/
\t\t\t\t\t</span>
\t\t\t\t\t<!-- Разделитель -->
\t\t\t\t";
                }
                // line 21
                echo "\t\t\t</div>
\t\t";
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
            // line 23
            echo "\t</div>
";
        }
        // line 25
        echo "<h2>Spichlerz - Tradycyjne jedzenie</h2>
<div class=\"content\">
\t<div class=\"block\">
\t\t<h2>Producent przetworów</h2>
\t\t<p>Idealny producent przetworów to Spichlerz. Własne produkty sprzedawane w sklepie internetowym to najszybszy sposób na zapewnienie sobie dostawy zdrowych, starannie przygotowanych przetworów owocowych. Producent zadbał o to, by były one estetycznie zapakowane, dzięki czemu nadają się również na prezent. Spichlerz to gwarancja najwyższej jakości i smaku w każdej łyżeczce. Wśród różnorodności rodzajów przetworów owocowych, producent wybrał najbardziej popularne, zdrowe i smacznie: konfitury, syropy i cytryny w syropie. Spichlerz oferuje gwarantowaną jakość, na której zawsze można polegać. Dlatego kupując proponowane produkty, nie musisz się niczego obawiać. Z pewnością sprawdzą się one dobrze na niejednym stole, nie tylko codziennym, ale również świątecznym.</p>
\t</div>
\t<div class=\"block\">
\t\t<h2>Syropy</h2>
\t\t<p>Syropy to kolejna duża kategoria pysznych produktów, które zadowolą niejedno podniebienie. Szczególnie warte uwagi są syropy do kawy. To one sprawiają, że zwykły, codzienny napój zyska niesamowity smak i wzbudzi zachwyt nawet najbardziej wybrednych osób poszukujących nowych walorów. W ofercie są syropy Monin, marki znanej i lubianej na polskim rynku. Syrop do kawy niejedno ma imię, dlatego spodziewać się można także mniej typowych połączeń, na przykład syropu malinowego do kawy bez mleka. Ta kategoria to również syrop malinowy do herbaty oraz syrop z cytryn,  świetny do lemoniady i różnego rodzaju deserów, w tym do nasączania biszkoptów do tortu. Wysoka jakość produktów jest odczuwalna już na pierwszy rzut oka.</p>
\t</div>
\t<div class=\"block\">
\t\t<h2>Konfitury</h2>
\t\t<p>Domowe konfitury to coś, do czego wiele osób tęskni. Nierzadko są one najlepszym wspomnieniem z dzieciństwa. Pyszne, owocowe dżemy są przygotowywane z poszanowaniem dla naturalnego smaku owoców, z minimalną jedynie dawką cukru podkreślającą ich walory. Przykładem topowego produktu jest konfitura z malin. Świetna jako dodatek do naleśników, placków, kanapek, ale także do deserów albo herbaty. Konfitura malinowa ma mnóstwo walorów zdrowotnych, o których nie wolno zapominać. Jej głęboki smak pokochają młodsi i starsi. To nie jedyna zresztą propozycja konfitury w asortymencie. Sprawdź, jakie możesz wybrać. Wszystkie są zamknięte w estetycznym słoiku, z którego można zrobić słodki, wartościowy prezent na różne okazje. Domowe konfitury spotkają się z pewnością z wielką aprobatą.</p>
\t</div>
\t<div class=\"block\">
\t\t<h2>Owoce w syropie</h2>
\t\t<p>Owoce w syropie to słodki, a przy tym naprawdę zdrowy deser, po który sięgać można częściej. Ich różnorodność przyprawić może o zawrót głowy. W tej kategorii znajdują się ulubione przetwory domowe. Sklep ma swoją ofertę rozszerzoną o takie produkty jak maliny w syropie, wiśnie w syropie, a także inne owoce, nierzadko w ciekawych połączeniach smakowych. Mają one różnorodne zastosowanie kulinarne, nie tylko w daniach słodkich i jako przekąska, ale także jako dodatek do dań wytrawnych, na przykład mięs. Ze względu na brak substancji konserwujących, naturalny smak nie jest niczym zaburzony. Owoce w syropie są ciekawą alternatywą dla dżemów i konfitur.
\t\t\t
\t\t\tOferowane przez nas wyroby słyną z wyjątkowego aromatu i niezapomnianego smaku.  W taki sposób tworzymy markę, która zajmuję solidną pozycję na rynku. Nowoczesna linia produkcyjna daje nam możliwość konkurować na wielkich i wymagających rynkach Unii Europejskiej, z zachowaniem tradycji oraz największej ilości składników odżywczych w naszych wytworach.
\t\t\t
\t\t\t<br><br>Zapraszamy do próbowania. Smacznego!</p>
\t</div>
</div>
";
        // line 48
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/common/blog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 48,  113 => 25,  109 => 23,  94 => 21,  82 => 15,  76 => 13,  74 => 12,  71 => 11,  54 => 10,  51 => 9,  49 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/blog.twig", "");
    }
}
