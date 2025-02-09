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

/* catalog/view/template/common/contact_us.twig */
class __TwigTemplate_a806300ff40b9427f4960e1293a0f822 extends Template
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
\t<link href=\"catalog/view/stylesheet/common/breadcrumbs.css\" type=\"text/css\" rel=\"stylesheet\"/>
\t<link href=\"catalog/view/stylesheet/common/contact_us.css\" type=\"text/css\" rel=\"stylesheet\"/>
</head>


";
        // line 7
        echo ($context["header"] ?? null);
        echo "
<div class=\"contact-us\">

\t";
        // line 10
        if (($context["breadcrumbs"] ?? null)) {
            // line 11
            echo "\t\t<div class=\"breadcrumbs\">
\t\t\t";
            // line 12
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
                // line 13
                echo "\t\t\t\t<div>
\t\t\t\t\t";
                // line 14
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 14)) {
                    // line 15
                    echo "\t\t\t\t\t\t<span class=\"last\">";
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 15);
                    echo "</span>
\t\t\t\t\t";
                } else {
                    // line 17
                    echo "\t\t\t\t\t\t<a class=\"link\" href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 17);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 17);
                    echo "</a>
\t\t\t\t\t\t<span>/</span>
\t\t\t\t\t";
                }
                // line 20
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
            // line 22
            echo "\t\t</div>
\t";
        }
        // line 24
        echo "\t<main>
\t\t<div class=\"left\">
\t\t\t<div class=\"title\">
\t\t\t\t<p class=\"first\">Masz</p>
\t\t\t\t<p class=\"second\">pytania?</p>
\t\t\t</div>
\t\t\t<form class=\"contact-form\">
\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t<input type=\"text\" name=\"first_name\" placeholder=\"Imię\" required>
\t\t\t\t\t<input type=\"text\" name=\"last_name\" placeholder=\"Nazwisko\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t<input type=\"email\" name=\"email\" placeholder=\"Email\" required>
\t\t\t\t\t<input type=\"text\" name=\"theme\" placeholder=\"Temat\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-row\">
\t\t\t\t\t<textarea name=\"message\" placeholder=\"Wiadomość\" rows=\"4\" required></textarea>
\t\t\t\t</div>
\t\t\t\t<button type=\"submit\" class=\"submit-btn\">Wyślij</button>
\t\t\t</form>
\t\t</div>
\t\t<div class=\"right\">
            <div class=\"data-list\">
                <div class=\"data-row\">Nasze dane</div>
                <div class=\"data-row\"><span>Adres:</span> Poland, woj. Małopolskie, Kraków, ul. Blokowa 2</div>
                <div class=\"data-row\"><span>Zamówienia hurtowe:</span> +48 502 879 474</div>
                <div class=\"data-row\"><span>Biuro:</span> +48 452 329 827</div>
                <div class=\"data-row\"><span>Email:</span> spichlerz24@gmail.com oraz biuro@spichlerz24.pl</div>
            </div>
        </div>
\t</main>
</div>
";
        // line 56
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/contact_us.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 56,  112 => 24,  108 => 22,  93 => 20,  84 => 17,  78 => 15,  76 => 14,  73 => 13,  56 => 12,  53 => 11,  51 => 10,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/contact_us.twig", "C:\\OSPanel\\domains\\localhost\\catalog\\view\\template\\common\\contact_us.twig");
    }
}
