<?php

/* base.html.twig */
class __TwigTemplate_7325c51d710d0448463bcd9b1bf6f1539c6ad53e401dca729be40cf6516a5e57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'Content' => array($this, 'block_Content'),
            'leftContent' => array($this, 'block_leftContent'),
            'rightContent' => array($this, 'block_rightContent'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"description\" content=\"System Udostępniania Wykładów\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <!-- Załączenie stylów Bulmy oraz ikon Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bulma/0.0.14/css/bulma.min.css\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        <!-- Własne style -->
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("includes/style.min.css"), "html", null, true);
        echo "\">
    </head>
    <body>
        <header>
            <div class=\"container\">
                <div class=\"columns\">
                    <div class=\"column is-6\">
                        <h1><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_welcome");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("includes/logo.png"), "html", null, true);
        echo "\" alt=\"System Udostępniania Wykładów\" class=\"logo\"></a></h1>                    </div>
                    <div class=\"column is-6\">
                        ";
        // line 21
        $this->displayBlock('header', $context, $blocks);
        // line 22
        echo "                    </div>
                </div>
            </div>
        </header>
        <section class=\"section is-medium\">
            <main>
                <div class=\"container\">
                    <div class=\"columns\">
                        ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "                    </div>
                </div>
            </main>
        </section>
        <footer class=\"footer\">
            <div class=\"container\">
                <p class=\"\">Created by: <strong>PSIAI GROUP 36B</strong></p>
            </div>
        </footer>
    </body>
</html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "System Udostępniania Wykładów";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_header($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "                            ";
        $this->displayBlock('Content', $context, $blocks);
        // line 32
        echo "                            ";
        $this->displayBlock('leftContent', $context, $blocks);
        // line 33
        echo "                            ";
        $this->displayBlock('rightContent', $context, $blocks);
        // line 34
        echo "                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 31
    public function block_Content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_leftContent($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftContent"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block_rightContent($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightContent"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 33,  150 => 32,  138 => 31,  131 => 34,  128 => 33,  125 => 32,  122 => 31,  116 => 30,  104 => 21,  92 => 5,  75 => 35,  73 => 30,  63 => 22,  61 => 21,  54 => 19,  44 => 12,  34 => 5,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}System Udostępniania Wykładów{% endblock %}</title>
        <meta name=\"description\" content=\"System Udostępniania Wykładów\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <!-- Załączenie stylów Bulmy oraz ikon Font Awesome -->
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bulma/0.0.14/css/bulma.min.css\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\">
        <!-- Własne style -->
        <link rel=\"stylesheet\" href=\"{{ asset('includes/style.min.css') }}\">
    </head>
    <body>
        <header>
            <div class=\"container\">
                <div class=\"columns\">
                    <div class=\"column is-6\">
                        <h1><a href=\"{{ path('_welcome') }}\"><img src=\"{{ asset('includes/logo.png') }}\" alt=\"System Udostępniania Wykładów\" class=\"logo\"></a></h1>                    </div>
                    <div class=\"column is-6\">
                        {% block header %} {% endblock %}
                    </div>
                </div>
            </div>
        </header>
        <section class=\"section is-medium\">
            <main>
                <div class=\"container\">
                    <div class=\"columns\">
                        {% block body %}
                            {% block Content %} {% endblock %}
                            {% block leftContent %} {% endblock %}
                            {% block rightContent %} {% endblock %}
                        {% endblock %}
                    </div>
                </div>
            </main>
        </section>
        <footer class=\"footer\">
            <div class=\"container\">
                <p class=\"\">Created by: <strong>PSIAI GROUP 36B</strong></p>
            </div>
        </footer>
    </body>
</html>", "base.html.twig", "D:\\ZUT\\PSIAI\\projekt\\app\\Resources\\views\\base.html.twig");
    }
}
