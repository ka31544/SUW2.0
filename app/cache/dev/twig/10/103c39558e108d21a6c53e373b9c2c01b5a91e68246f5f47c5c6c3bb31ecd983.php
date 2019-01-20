<?php

/* main/index.html.twig */
class __TwigTemplate_038349aaf4f9748e297829b106e4c78b60b842a86418aa9f570bd9b3cc849a37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'leftContent' => array($this, 'block_leftContent'),
            'rightContent' => array($this, 'block_rightContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SUW";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_register");
        echo "\" id=\"registerButton\" class=\"primary-button\">Zarejestruj</a>
    <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_login");
        echo "\" id=\"loginButton\" class=\"primary-button\">Zaloguj</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_leftContent($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftContent"));

        // line 11
        echo "    <div class=\"column is-6\">
        <h2 class=\"title\">Opis systemu</h2>
        <p>SUW - System Udostępniania Wykładów</p>
        <p>System służy do udostępniania wykładów Studentom. Wszystkie pliki są zabezpieczone przed kopiowaniem i drukowaniem.</p>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_rightContent($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightContent"));

        // line 19
        echo "    <div class=\"column is-6\">
        <h2 class=\"title\">Statystyki</h2>
        <h3 class=\"subtitle\"><i class=\"fa fa-users fa-fw\"></i>Liczba użytkowników</h3>

        ";
        // line 24
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\DumpExtension')->dump($this->env, $context, $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()));
        echo "

        <ul class=\"list-items\">
            <li class=\"items\">Razem<br>";
        // line 27
        echo twig_escape_filter($this->env, ($context["count"] ?? $this->getContext($context, "count")), "html", null, true);
        echo "</li>
        </ul>
        <h3 class=\"subtitle\"><i class=\"fa fa-download fa-fw\"></i>Pobrania</h3>
        <ul class=\"list-items\">
            <li class=\"items\">Dzień<br></li>
            <li class=\"items\">Tydzień<br></li>
            <li class=\"items\">Miesiąc<br></li>
            <li class=\"items\">Semestr<br></li>
        </ul>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 27,  99 => 24,  93 => 19,  87 => 18,  75 => 11,  69 => 10,  60 => 7,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}SUW{% endblock %}

{% block header %}
    <a href=\"{{ path('_register') }}\" id=\"registerButton\" class=\"primary-button\">Zarejestruj</a>
    <a href=\"{{ path('_login') }}\" id=\"loginButton\" class=\"primary-button\">Zaloguj</a>
{% endblock %}

{% block leftContent %}
    <div class=\"column is-6\">
        <h2 class=\"title\">Opis systemu</h2>
        <p>SUW - System Udostępniania Wykładów</p>
        <p>System służy do udostępniania wykładów Studentom. Wszystkie pliki są zabezpieczone przed kopiowaniem i drukowaniem.</p>
    </div>
{% endblock %}

{% block rightContent %}
    <div class=\"column is-6\">
        <h2 class=\"title\">Statystyki</h2>
        <h3 class=\"subtitle\"><i class=\"fa fa-users fa-fw\"></i>Liczba użytkowników</h3>

        {#{{ user.login }}#}
        {{ dump(app.user) }}

        <ul class=\"list-items\">
            <li class=\"items\">Razem<br>{{ count }}</li>
        </ul>
        <h3 class=\"subtitle\"><i class=\"fa fa-download fa-fw\"></i>Pobrania</h3>
        <ul class=\"list-items\">
            <li class=\"items\">Dzień<br></li>
            <li class=\"items\">Tydzień<br></li>
            <li class=\"items\">Miesiąc<br></li>
            <li class=\"items\">Semestr<br></li>
        </ul>
    </div>
{% endblock %}", "main/index.html.twig", "D:\\ZUT\\PSIAI\\projekt\\app\\Resources\\views\\main\\index.html.twig");
    }
}
