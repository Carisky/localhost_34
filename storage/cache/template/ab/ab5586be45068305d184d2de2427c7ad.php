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

/* catalog/view/template/common/auth.twig */
class __TwigTemplate_9e7336b7019009d624bff4cddfc795e0 extends Template
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
    <link href=\"catalog/view/stylesheet/common/auth.css\" type=\"text/css\" rel=\"stylesheet\"/>
</head>

";
        // line 5
        echo ($context["header"] ?? null);
        echo "
<main class=\"auth-container\">
    <div class=\"auth-forms\">
        <!-- Форма входа -->
        <section class=\"login-form\">
            <h2>Login</h2>
            <form action=\"";
        // line 11
        echo ($context["action_login"] ?? null);
        echo "\" method=\"post\">
                <label for=\"email\">Email:</label>
                <input type=\"email\" name=\"email\" id=\"email\" required>

                <label for=\"password\">Password:</label>
                <input type=\"password\" name=\"password\" id=\"password\" required>

                <button type=\"submit\">Login</button>

                <p><a href=\"";
        // line 20
        echo ($context["forgot_password"] ?? null);
        echo "\">Forgot Password?</a></p>
            </form>
        </section>

<!-- Форма регистрации -->
        <section class=\"register-form\">
            <h2>Register</h2>
            <form action=\"";
        // line 27
        echo ($context["action_register"] ?? null);
        echo "\" method=\"post\">
                <label for=\"firstname\">First Name:</label>
                <input type=\"text\" name=\"firstname\" id=\"firstname\" required>

                <label for=\"lastname\">Last Name:</label>
                <input type=\"text\" name=\"lastname\" id=\"lastname\" required>

                <label for=\"reg_email\">Email:</label>
                <input type=\"email\" name=\"email\" id=\"reg_email\" required>

                <label for=\"telephone\">Telephone:</label>
                <input type=\"text\" name=\"telephone\" id=\"telephone\" required>

                <label for=\"reg_password\">Password:</label>
                <input type=\"password\" name=\"password\" id=\"reg_password\" required>

                <label for=\"confirm_password\">Confirm Password:</label>
                <input type=\"password\" name=\"confirm_password\" id=\"confirm_password\" required>

                <!-- Согласие с условиями -->
                <label>
                    <input type=\"checkbox\" name=\"agree\" required>
                    I agree to the <a href=\"";
        // line 49
        echo ($context["terms_and_conditions_link"] ?? null);
        echo "\">terms and conditions</a>
                </label>

                <button type=\"submit\">Register</button>
            </form>
        </section>
    </div>
</main>
";
        // line 57
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/auth.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 57,  99 => 49,  74 => 27,  64 => 20,  52 => 11,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/auth.twig", "C:\\OSPanel\\domains\\localhost\\catalog\\view\\template\\common\\auth.twig");
    }
}
