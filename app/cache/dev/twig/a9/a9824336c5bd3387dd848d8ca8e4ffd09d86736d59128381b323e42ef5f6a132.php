<?php

/* user/show.html.twig */
class __TwigTemplate_62150c48165764cf8d5132c284ae1503221ad1f0a5f30eeabe6a4e0688403b01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "user/show.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"column is-6\">
    <h2 class=\"title\">Użytkownik</h2>

    <table class=\"table is-hoverable is-striped\">
        <tbody>
            <tr>
                <th>ID</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Login</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "login", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Typ konta</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "typeAccount", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status aktywności</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "active", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_index");
        echo "\" class=\"primary-button\">Wróć do listy użytkowników</a>
        </li>
        <li>
            <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_edit", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" class=\"primary-button\">Edytuj</a>
        </li>
        <li>
            ";
        // line 36
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Usuń\" class=\"primary-button\">
            ";
        // line 38
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["delete_form"] ?? $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "user/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 38,  92 => 36,  86 => 33,  80 => 30,  70 => 23,  63 => 19,  56 => 15,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
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
<div class=\"column is-6\">
    <h2 class=\"title\">Użytkownik</h2>

    <table class=\"table is-hoverable is-striped\">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ user.id }}</td>
            </tr>
            <tr>
                <th>Login</th>
                <td>{{ user.login }}</td>
            </tr>
            <tr>
                <th>Typ konta</th>
                <td>{{ user.typeAccount }}</td>
            </tr>
            <tr>
                <th>Status aktywności</th>
                <td>{{ user.active }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('user_index') }}\" class=\"primary-button\">Wróć do listy użytkowników</a>
        </li>
        <li>
            <a href=\"{{ path('user_edit', { 'id': user.id }) }}\" class=\"primary-button\">Edytuj</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Usuń\" class=\"primary-button\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
</div>
{% endblock %}
", "user/show.html.twig", "D:\\ZUT\\PSIAI\\projekt\\app\\Resources\\views\\user\\show.html.twig");
    }
}
