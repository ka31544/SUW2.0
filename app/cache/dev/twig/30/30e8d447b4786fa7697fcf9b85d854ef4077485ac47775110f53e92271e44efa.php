<?php

/* course/index.html.twig */
class __TwigTemplate_c26a1282ca1b28830857d28a8db036d893a4979ad8c78b2a11ae645e5ab0b738 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "course/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"column is-12\">
    <h2 class=\"title\">Lista kursów</h2>

    <table class=\"table is-hoverable is-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nazwa</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "nazwa", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\" class=\"primary-button inline-block\">Pokaż</a>
                    <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_edit", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\" class=\"primary-button inline-block\">Edytuj</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_new");
        echo "\" class=\"primary-button\">Utwórz nowy kurs</a>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "course/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  86 => 26,  76 => 22,  72 => 21,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
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

{% block body %}
<div class=\"column is-12\">
    <h2 class=\"title\">Lista kursów</h2>

    <table class=\"table is-hoverable is-striped\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nazwa</th>
                <th>Akcje</th>
            </tr>
        </thead>
        <tbody>
        {% for course in courses %}
            <tr>
                <td><a href=\"{{ path('course_show', { 'id': course.id }) }}\">{{ course.id }}</a></td>
                <td>{{ course.nazwa }}</td>
                <td>
                    <a href=\"{{ path('course_show', { 'id': course.id }) }}\" class=\"primary-button inline-block\">Pokaż</a>
                    <a href=\"{{ path('course_edit', { 'id': course.id }) }}\" class=\"primary-button inline-block\">Edytuj</a>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('course_new') }}\" class=\"primary-button\">Utwórz nowy kurs</a>

</div>
{% endblock %}
", "course/index.html.twig", "D:\\ZUT\\PSIAI\\projekt\\app\\Resources\\views\\course\\index.html.twig");
    }
}
