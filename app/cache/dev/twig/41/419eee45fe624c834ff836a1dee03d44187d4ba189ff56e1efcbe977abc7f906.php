<?php

/* main/main.html.twig */
class __TwigTemplate_193cb3d23ddb00dc91d6434374bab7a392e48b755a1848dad70dbb7f3908256f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/main.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/main.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Logowanie - SUW";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <a href=\"\" id=\"logButton\" class=\"primary-button\">Logi</a>
    <a href=\"\" id=\"settingsButton\"><i class=\"fa fa-cog fa-3x\" title=\"Ustawienia\"></i></a>
    <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_welcome");
        echo "\" id=\"logoutButton\" class=\"primary-button\">Wyloguj</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_leftContent($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "leftContent"));

        // line 12
        echo "    <div class=\"column is-6\">
        <h2 class=\"title\">Kursy</h2>
        <ul class=\"list-items\">

        </ul>
        <form action=\"\" method=\"post\" class=\"primary-form\">
            <label for=\"nameCourse\">Utwórz kurs</label>
            <input type=\"text\" name=\"nameCourse\" placeholder=\"Podaj nazwę [4-100]\" class=\"input is-large\">
            <input type=\"submit\" name=\"insertCourse\" value=\"Utwórz\" class=\"primary-button\">
        </form>
        <form action=\"\" method=\"post\" class=\"primary-form\">
            <label for=\"idCourse\">Usuń kurs</label>
            <input type=\"text\" name=\"idCourse\" placeholder=\"Podaj nr ID\" class=\"input is-large\">
            <input type=\"submit\" name=\"deleteCourse\" value=\"Usuń\" class=\"primary-button\">
        </form>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 30
    public function block_rightContent($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "rightContent"));

        // line 31
        echo "    <div class=\"column is-6\">
        <h2 class=\"title\">Wykłady</h2>
        <ul class=\"list-items\">

        </ul>
        <div>
            <form enctype=\"multipart/form-data\" accept-charset=\"UTF-8\" action=\"sendwyklad.php\" method=\"POST\" class=\"primary-form\">
                <label for=\"nrkursu\">Dodaj wykład:</label>
                <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"500000\" />
                <input type=\"text\" name=\"nrkursu\" placeholder=\"Numer Kursu\" class=\"input is-large\">
                <input name=\"plik\" type=\"file\" />
                <input type=\"submit\" value=\"Wyślij wyklad\" class=\"primary-button\"/>
            </form>
        </div>
        <div>
            <form method=\"post\" action=\"delete.php\" class=\"primary-form\">
                <label for=\"filename1\">Usuń wykład:</label>
                <input type=\"text\" name=\"filename1\" placeholder=\"Podaj nazwe pliku\" class=\"input is-large\"> <br>
                <input type=\"submit\" value=\"Usuń\" class=\"primary-button\">
            </form>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "main/main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 31,  97 => 30,  74 => 12,  68 => 11,  59 => 8,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
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

{% block title %}Logowanie - SUW{% endblock %}

{% block header %}
    <a href=\"\" id=\"logButton\" class=\"primary-button\">Logi</a>
    <a href=\"\" id=\"settingsButton\"><i class=\"fa fa-cog fa-3x\" title=\"Ustawienia\"></i></a>
    <a href=\"{{ path('_welcome') }}\" id=\"logoutButton\" class=\"primary-button\">Wyloguj</a>
{% endblock %}

{% block leftContent %}
    <div class=\"column is-6\">
        <h2 class=\"title\">Kursy</h2>
        <ul class=\"list-items\">

        </ul>
        <form action=\"\" method=\"post\" class=\"primary-form\">
            <label for=\"nameCourse\">Utwórz kurs</label>
            <input type=\"text\" name=\"nameCourse\" placeholder=\"Podaj nazwę [4-100]\" class=\"input is-large\">
            <input type=\"submit\" name=\"insertCourse\" value=\"Utwórz\" class=\"primary-button\">
        </form>
        <form action=\"\" method=\"post\" class=\"primary-form\">
            <label for=\"idCourse\">Usuń kurs</label>
            <input type=\"text\" name=\"idCourse\" placeholder=\"Podaj nr ID\" class=\"input is-large\">
            <input type=\"submit\" name=\"deleteCourse\" value=\"Usuń\" class=\"primary-button\">
        </form>
    </div>
{% endblock %}

{% block rightContent %}
    <div class=\"column is-6\">
        <h2 class=\"title\">Wykłady</h2>
        <ul class=\"list-items\">

        </ul>
        <div>
            <form enctype=\"multipart/form-data\" accept-charset=\"UTF-8\" action=\"sendwyklad.php\" method=\"POST\" class=\"primary-form\">
                <label for=\"nrkursu\">Dodaj wykład:</label>
                <input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"500000\" />
                <input type=\"text\" name=\"nrkursu\" placeholder=\"Numer Kursu\" class=\"input is-large\">
                <input name=\"plik\" type=\"file\" />
                <input type=\"submit\" value=\"Wyślij wyklad\" class=\"primary-button\"/>
            </form>
        </div>
        <div>
            <form method=\"post\" action=\"delete.php\" class=\"primary-form\">
                <label for=\"filename1\">Usuń wykład:</label>
                <input type=\"text\" name=\"filename1\" placeholder=\"Podaj nazwe pliku\" class=\"input is-large\"> <br>
                <input type=\"submit\" value=\"Usuń\" class=\"primary-button\">
            </form>
        </div>
    </div>
{% endblock %}", "main/main.html.twig", "D:\\ZUT\\PSIAI\\projekt\\app\\Resources\\views\\main\\main.html.twig");
    }
}
