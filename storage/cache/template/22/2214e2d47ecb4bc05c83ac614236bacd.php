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

/* default/template/common/reglament.twig */
class __TwigTemplate_ab62bb703f5ba7f55fa6812d1ed6eb8a extends Template
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
\t<link href=\"catalog/view/theme/default/stylesheet/common/reglament.css\" type=\"text/css\" rel=\"stylesheet\"/>
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
\t\t<h2>§ 1</h2>
\t\t<br>
\t\t<h2>Postanowienia wstępne</h2>
\t\t<p>Sklep internetowy Spichlerz, dostępny pod adresem internetowym spichlerz24.pl., prowadzony jest przez Rymar Sp. Z o.o. z siedzibą w Krakowie wpisanego do Krajowego Rejestru Sądowego przez Sąd Rejonowy w/dla Krakowa Ś ródmieścia w Krakowie, XI Wydział Gospodarczy KRS pod numerem KRS 667282, o kapitale zakładowym 5000 zł, NIP 6783166397, REGON 366740199</p>
\t\t<br>
\t\t<p>Niniejszy Regulamin skierowany jest zarówno do Konsumentów, jak i do Przedsiębiorców korzystających ze Sklepu i określa zasady korzystania ze Sklepu internetowego oraz zasady i tryb zawierania Umów Sprzedaży z Klientem na odległość za pośrednictwem Sklepu.</p>
\t</div>
    <div class=\"block\">
    <h2>§ 2</h2>
    <br>
    <h2>Definicje</h2>
    <p><strong>Konsument</strong> – osoba fizyczna zawierająca ze Sprzedawcą umowę w ramach Sklepu, której przedmiot nie jest związany bezpośrednio z jej działalnością gospodarczą lub zawodową.</p>
    <p><strong>Sprzedawca</strong> – Rymar Sp. Z o.o. z siedzibą w Krakowie wpisanego do Krajowego Rejestru Sądowego przez Sąd Rejonowy w/dla Krakowa Śródmieścia w Krakowie, XI Wydział Gospodarczy KRS pod numerem KRS 667282, o kapitale zakładowym 5000 zł, NIP 6783166397, REGON 366740199.</p>
    <p><strong>Klient</strong> – każdy podmiot dokonujący zakupów za pośrednictwem Sklepu.</p>
    <p><strong>Przedsiębiorca</strong> – osoba fizyczna, osoba prawna i jednostka organizacyjna niebędąca osobą prawną, której odrębna ustawa przyznaje zdolność prawną, wykonująca we własnym imieniu działalność gospodarczą, która korzysta ze Sklepu.</p>
    <p><strong>Sklep</strong> – sklep internetowy prowadzony przez Sprzedawcę pod adresem internetowym spichlerz24.pl.</p>
    <p><strong>Umowa zawarta na odległość</strong> – umowa zawarta z Klientem w ramach zorganizowanego systemu zawierania umów na odległość (w ramach Sklepu), bez jednoczesnej fizycznej obecności stron, z wyłącznym wykorzystaniem jednego lub większej liczby środków porozumiewania się na odległość do chwili zawarcia umowy włącznie.</p>
    <p><strong>Regulamin</strong> – niniejszy regulamin Sklepu.</p>
    <p><strong>Zamówienie</strong> – oświadczenie woli Klienta składane za pomocą Formularza Zamówienia i zmierzające bezpośrednio do zawarcia Umowy Sprzedaży Produktu lub Produktów ze Sprzedawcą.</p>
    <p><strong>Konto</strong> – konto klienta w Sklepie, są w nim gromadzone dane podane przez Klienta oraz informacje o złożonych przez niego Zamówieniach w Sklepie.</p>
    <p><strong>Formularz rejestracji</strong> – formularz dostępny w Sklepie, umożliwiający utworzenie Konta.</p>
    <p><strong>Formularz zamówienia</strong> – interaktywny formularz dostępny w Sklepie umożliwiający złożenie Zamówienia, w szczególności poprzez dodanie Produktów do Koszyka oraz określenie warunków Umowy Sprzedaży, w tym sposobu dostawy i płatności.</p>
    <p><strong>Koszyk</strong> – element oprogramowania Sklepu, w którym widoczne są wybrane przez Klienta Produkty do zakupu, a także istnieje możliwość ustalenia i modyfikacji danych Zamówienia, w szczególności ilości produktów.</p>
    <p><strong>Produkt</strong> – dostępna w Sklepie rzecz ruchoma/usługa będąca przedmiotem Umowy Sprzedaży między Klientem a Sprzedawcą.</p>
    <p><strong>Umowa Sprzedaży</strong> – umowa sprzedaży Produktu zawierana albo zawarta między Klientem a Sprzedawcą za pośrednictwem Sklepu internetowego. Przez Umowę Sprzedaży rozumie się też – stosowanie do cech Produktu – umowę o świadczenie usług i umowę o dzieło.</p>
</div>


</div>
";
        // line 57
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/common/reglament.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 57,  113 => 25,  109 => 23,  94 => 21,  82 => 15,  76 => 13,  74 => 12,  71 => 11,  54 => 10,  51 => 9,  49 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/reglament.twig", "");
    }
}
