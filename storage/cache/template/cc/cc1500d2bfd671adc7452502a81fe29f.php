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
class __TwigTemplate_daf3b9ab01a650e6f6e01aa8194f0b68 extends Template
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
        echo "<div class=\"content\">
\t<div class=\"block\">
\t\t<img src=\"/image/catalog/assets/blog1.jpg\"/>
\t\t<div>
\t\t\t<h2>Z czym jeść konfitury? Dania i napoje, z którymi przetwory owocowe smakują najlepiej</h2>
\t\t\t<p>Konfitury to świetny dodatek do wielu potraw. Pasują zarówno do posiłków na słodko, jak i nasłono. Oto dania i napoje, z którymi przetworzy owocowe smakują najlepiej. Konfitury pozwalają przechować smak i wartości odżywcze owoców przez cały rok. Możemy jeprzyrządzać samodzielnie lub sięgnąć po przetwory z...</p>
\t\t</div>
\t</div>
\t<div class=\"block\">

\t\t<div>
\t\t\t<h2>6 niedocenianych konfitur, które warto wprowadzić do jadłospisu</h2>
\t\t\t<p>Konfitury to pyszny i sprawdzony dodatek do potraw. Wiele z nich wciąż jednak nie doczekało się należnego uznania. Oto 6 konfitur, z którymi warto się zapoznać i wprowadzić je na stałe do jadłospisu. Przetwory można przyrządzać z większości owoców i warzyw. Uzyskanie pożądanego smaku często...</p>
\t\t</div>
\t\t<img src=\"/image/catalog/assets/blog1.jpg\"/>
\t</div>
\t<div class=\"block\">
\t\t<img src=\"/image/catalog/assets/blog1.jpg\"/>
\t\t<div>
\t\t\t<h2>Słodkie wspomnienie lata! 7 najlepszych konfitur na zimę</h2>
\t\t\t<p>Pieszczą podniebienie, dostarczają witamin i łagodzą tęsknotę za słońcem. Konfitury to zaklęta w słoiczku esencja lata, która poprawi nam nastrój w czasach chłodu i pobudzi inwencję do eksperymentów kulinarnych. Oto 7 konfitur owocowych, którymi warto osłodzić sobie jesień i zimę. Konfitury to zdrowa alternatywa dla...</p>
\t\t</div>
\t</div>
</div>
";
        // line 49
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
        return array (  139 => 49,  113 => 25,  109 => 23,  94 => 21,  82 => 15,  76 => 13,  74 => 12,  71 => 11,  54 => 10,  51 => 9,  49 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/common/blog.twig", "");
    }
}
