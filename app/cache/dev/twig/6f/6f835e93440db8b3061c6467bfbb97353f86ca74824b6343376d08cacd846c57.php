<?php

/* Form/bulma_0_3_x_layout.html.twig */
class __TwigTemplate_7cded217fd3de36072370f1e558a6a49f62b3010b8ee1f524b866fb2cb3cd53e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "Form/bulma_0_3_x_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'number_widget' => array($this, 'block_number_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'submit_widget' => array($this, 'block_submit_widget'),
                'reset_widget' => array($this, 'block_reset_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'form_label' => array($this, 'block_form_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'money_row' => array($this, 'block_money_row'),
                'percent_row' => array($this, 'block_percent_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_widget_container_attributes' => array($this, 'block_form_widget_container_attributes'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Form/bulma_0_3_x_layout.html.twig"));

        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 27
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 43
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 68
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 76
        $this->displayBlock('number_widget', $context, $blocks);
        // line 82
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 85
        echo "
";
        // line 86
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 90
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 105
        $this->displayBlock('date_widget', $context, $blocks);
        // line 112
        $this->displayBlock('time_widget', $context, $blocks);
        // line 119
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 125
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 131
        $this->displayBlock('button_widget', $context, $blocks);
        // line 145
        $this->displayBlock('form_label', $context, $blocks);
        // line 150
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 155
        $this->displayBlock('radio_label', $context, $blocks);
        // line 160
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 184
        echo "
";
        // line 187
        $this->displayBlock('form_row', $context, $blocks);
        // line 197
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 201
        $this->displayBlock('radio_row', $context, $blocks);
        // line 205
        $this->displayBlock('money_row', $context, $blocks);
        // line 210
        $this->displayBlock('percent_row', $context, $blocks);
        // line 217
        $this->displayBlock('form_errors', $context, $blocks);
        // line 227
        $this->displayBlock('form_widget_container_attributes', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        ob_start();
        // line 7
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " input"))));
        }
        // line 10
        $context["size_class"] = "";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "is-small", 1 => "is-medium", 2 => "is-large"));
        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
            if (twig_in_filter($context["size"], (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array()), "")) : ("")))) {
                // line 12
                $context["size_class"] = $context["size"];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        $context["widget_icon"] = (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "bulma_icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "bulma_icon"), false)) : (false));
        // line 15
        echo "<div ";
        $this->displayBlock("form_widget_container_attributes", $context, $blocks);
        echo ">";
        // line 16
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        // line 17
        if ((($context["widget_icon"] ?? $this->getContext($context, "widget_icon")) != false)) {
            // line 18
            echo "<span class=\"";
            echo twig_escape_filter($this->env, twig_trim_filter(("icon " . (((isset($context["size_class"]) || array_key_exists("size_class", $context))) ? (_twig_default_filter(($context["size_class"] ?? $this->getContext($context, "size_class")), "")) : ("")))), "html", null, true);
            echo "\">
                <i class=\"fa fa-";
            // line 19
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["widget_icon"] ?? null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["widget_icon"] ?? null), "icon"), "")) : ("")), "html", null, true);
            echo "\"></i>
            </span>";
        }
        // line 22
        $this->displayBlock("form_errors", $context, $blocks);
        // line 23
        echo "</div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 27
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 28
        ob_start();
        // line 29
        $context["size_class"] = "";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "is-small", 1 => "is-medium", 2 => "is-large"));
        foreach ($context['_seq'] as $context["_key"] => $context["size"]) {
            if (twig_in_filter($context["size"], (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array()), "")) : ("")))) {
                // line 31
                $context["size_class"] = $context["size"];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['size'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        $context["is_multiple_class"] = ((($context["multiple"] ?? $this->getContext($context, "multiple"))) ? (" is-multiple") : (""));
        // line 34
        echo "<div ";
        $this->displayBlock("form_widget_container_attributes", $context, $blocks);
        echo ">
        <span class=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_trim_filter((("select " . ($context["size_class"] ?? $this->getContext($context, "size_class"))) . ($context["is_multiple_class"] ?? $this->getContext($context, "is_multiple_class")))), "html", null, true);
        echo "\">";
        // line 36
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        // line 37
        echo "</span>";
        // line 38
        $this->displayBlock("form_errors", $context, $blocks);
        // line 39
        echo "</div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 43
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 44
        if (twig_in_filter("--inline", (($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array()), "")) : ("")))) {
            // line 45
            $context["inline_choice"] = true;
        }
        // line 48
        if (((((isset($context["inline_choice"]) || array_key_exists("inline_choice", $context))) ? (_twig_default_filter(($context["inline_choice"] ?? $this->getContext($context, "inline_choice")), false)) : (false)) == true)) {
            // line 49
            echo "<div ";
            $this->displayBlock("form_widget_container_attributes", $context, $blocks);
            echo ">";
        }
        // line 52
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " control"))));
        // line 53
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget', array("inline_choice" => ((            // line 56
(isset($context["inline_choice"]) || array_key_exists("inline_choice", $context))) ? (_twig_default_filter(($context["inline_choice"] ?? $this->getContext($context, "inline_choice")), false)) : (false)), "translation_domain" =>             // line 57
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        $this->displayBlock("form_errors", $context, $blocks);
        // line 61
        echo "</div>";
        // line 63
        if (((((isset($context["inline_choice"]) || array_key_exists("inline_choice", $context))) ? (_twig_default_filter(($context["inline_choice"] ?? $this->getContext($context, "inline_choice")), false)) : (false)) == true)) {
            // line 64
            echo "</div>";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 68
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 69
        echo "<div ";
        $this->displayBlock("form_widget_container_attributes", $context, $blocks);
        echo ">";
        // line 70
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " textarea"))));
        // line 71
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        // line 72
        $this->displayBlock("form_errors", $context, $blocks);
        // line 73
        echo "</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 76
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 78
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "text")) : ("text"));
        // line 79
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 82
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 83
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 86
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 90
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " datetime-widget"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget');
            // line 97
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget');
            // line 98
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 99
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 100
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 101
            echo "</div>";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 105
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 106
        if ((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text")) {
            // line 107
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " control is-grouped date-widget"))));
        }
        // line 109
        $this->displayParentBlock("date_widget", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 112
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 113
        if ((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text")) {
            // line 114
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " control is-grouped time-widget"))));
        }
        // line 116
        $this->displayParentBlock("time_widget", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 119
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 120
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 121
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button is-primary"))));
        // line 122
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 125
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 126
        $context["type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 127
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button is-link"))));
        // line 128
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 131
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 132
        $context["btn_class"] = "is-link";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "is-primary", 1 => "is-info", 2 => "is-success", 3 => "is-warning", 4 => "is-danger"));
        foreach ($context['_seq'] as $context["_key"] => $context["color"]) {
            if (twig_in_filter(            // line 134
$context["color"], (($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")))) {
                // line 135
                $context["btn_class"] = $context["color"];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['color'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button ") . ($context["btn_class"] ?? $this->getContext($context, "btn_class"))))));
        // line 138
        echo "<p ";
        $this->displayBlock("form_widget_container_attributes", $context, $blocks);
        echo ">";
        // line 139
        $this->displayParentBlock("button_widget", $context, $blocks);
        // line 140
        echo "</p>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 145
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 146
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " label"))));
        // line 147
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 150
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 151
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " checkbox"))));
        // line 152
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 155
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 156
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " radio"))));
        // line 157
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 160
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 162
        if ((isset($context["widget"]) || array_key_exists("widget", $context))) {
            // line 163
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 164
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 166
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 167
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 168
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 169
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 170
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 173
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 176
            if ( !(((isset($context["inline_choice"]) || array_key_exists("inline_choice", $context))) ? (_twig_default_filter(($context["inline_choice"] ?? $this->getContext($context, "inline_choice")), false)) : (false))) {
                echo "<div class=\"control\">";
            }
            // line 177
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 178
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 179
            echo "</label>";
            // line 180
            $this->displayBlock("form_errors", $context, $blocks);
            // line 181
            if ( !(((isset($context["inline_choice"]) || array_key_exists("inline_choice", $context))) ? (_twig_default_filter(($context["inline_choice"] ?? $this->getContext($context, "inline_choice")), false)) : (false))) {
                echo "</div>";
            }
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 187
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 188
        echo "<div class=\"field\">";
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 190
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 191
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "help_text", array(), "any", true, true)) {
            // line 192
            echo "<p class=\"help\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "attr", array()), "help_text", array()), "html", null, true);
            echo "</p>";
        }
        // line 194
        echo "</div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 197
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 201
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 202
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 205
    public function block_money_row($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_row"));

        // line 206
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 207
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 210
    public function block_percent_row($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_row"));

        // line 211
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 212
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 217
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 220
                echo "<span class=\"help is-danger\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</span>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 227
    public function block_form_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_container_attributes"));

        // line 228
        $context["class"] = "control";
        // line 229
        $context["widget_icon"] = (($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "bulma_icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "bulma_icon"))) : (""));
        // line 230
        if (((isset($context["widget_icon"]) || array_key_exists("widget_icon", $context)) && twig_test_iterable(($context["widget_icon"] ?? $this->getContext($context, "widget_icon"))))) {
            // line 231
            $context["class"] = ((($context["class"] ?? $this->getContext($context, "class")) . " has-icon has-icon-") . twig_trim_filter((($this->getAttribute(($context["widget_icon"] ?? null), "position", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["widget_icon"] ?? null), "position"), "right")) : ("right"))));
        }
        // line 233
        echo "class=\"";
        echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
        echo "\"";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Form/bulma_0_3_x_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  712 => 233,  709 => 231,  707 => 230,  705 => 229,  703 => 228,  697 => 227,  683 => 220,  679 => 219,  677 => 218,  671 => 217,  664 => 212,  662 => 211,  656 => 210,  649 => 207,  647 => 206,  641 => 205,  634 => 202,  628 => 201,  621 => 198,  615 => 197,  608 => 194,  603 => 192,  601 => 191,  599 => 190,  597 => 189,  595 => 188,  589 => 187,  579 => 181,  577 => 180,  575 => 179,  571 => 178,  556 => 177,  552 => 176,  548 => 173,  545 => 170,  544 => 169,  543 => 168,  541 => 167,  539 => 166,  536 => 164,  534 => 163,  532 => 162,  526 => 160,  519 => 157,  517 => 156,  511 => 155,  504 => 152,  502 => 151,  496 => 150,  489 => 147,  487 => 146,  481 => 145,  474 => 140,  472 => 139,  468 => 138,  466 => 137,  459 => 135,  457 => 134,  453 => 133,  451 => 132,  445 => 131,  438 => 128,  436 => 127,  434 => 126,  428 => 125,  421 => 122,  419 => 121,  417 => 120,  411 => 119,  404 => 116,  401 => 114,  399 => 113,  393 => 112,  386 => 109,  383 => 107,  381 => 106,  375 => 105,  367 => 101,  365 => 100,  363 => 99,  361 => 98,  359 => 97,  357 => 96,  353 => 95,  351 => 94,  348 => 92,  346 => 91,  340 => 90,  333 => 87,  327 => 86,  320 => 83,  314 => 82,  307 => 79,  305 => 78,  299 => 76,  292 => 73,  290 => 72,  284 => 71,  282 => 70,  278 => 69,  272 => 68,  264 => 64,  262 => 63,  260 => 61,  258 => 60,  252 => 57,  251 => 56,  250 => 55,  246 => 54,  242 => 53,  240 => 52,  235 => 49,  233 => 48,  230 => 45,  228 => 44,  222 => 43,  213 => 39,  211 => 38,  209 => 37,  207 => 36,  204 => 35,  199 => 34,  197 => 33,  190 => 31,  185 => 30,  183 => 29,  181 => 28,  175 => 27,  166 => 23,  164 => 22,  159 => 19,  154 => 18,  152 => 17,  150 => 16,  146 => 15,  144 => 14,  137 => 12,  132 => 11,  130 => 10,  127 => 8,  125 => 7,  123 => 6,  117 => 5,  110 => 227,  108 => 217,  106 => 210,  104 => 205,  102 => 201,  100 => 197,  98 => 187,  95 => 184,  93 => 160,  91 => 155,  89 => 150,  87 => 145,  85 => 131,  83 => 125,  81 => 119,  79 => 112,  77 => 105,  75 => 90,  73 => 86,  70 => 85,  68 => 82,  66 => 76,  64 => 68,  62 => 43,  60 => 27,  58 => 5,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%- use \"form_div_layout.html.twig\" -%}

{# Widgets #}

{%- block form_widget_simple -%}
    {% spaceless %}
        {%- if type is not defined or type not in ['file', 'hidden'] -%}
            {%- set attr = attr|merge({class: (attr.class|default('') ~ ' input')|trim}) -%}
        {%- endif -%}
        {%- set size_class = '' -%}
        {%- for size in ['is-small', 'is-medium', 'is-large'] if size in form.vars.attr.class|default('') -%}
            {%- set size_class = size -%}
        {%- endfor -%}
        {%- set widget_icon = attribute(form.vars, 'bulma_icon')|default(false) -%}
        <div {{ block('form_widget_container_attributes') }}>
            {{- parent() -}}
            {%- if widget_icon != false -%}
                <span class=\"{{ ('icon ' ~ size_class|default(''))|trim -}}\">
                <i class=\"fa fa-{{ attribute(widget_icon, 'icon')|default('') -}}\"></i>
            </span>
            {%- endif -%}
            {{- block('form_errors') -}}
        </div>
    {% endspaceless %}
{%- endblock form_widget_simple %}

{%- block choice_widget_collapsed -%}
    {% spaceless %}
        {%- set size_class = '' -%}
        {%- for size in ['is-small', 'is-medium', 'is-large'] if size in form.vars.attr.class|default('') -%}
            {%- set size_class = size -%}
        {%- endfor -%}
        {%- set is_multiple_class = multiple ? ' is-multiple' : '' -%}
        <div {{ block('form_widget_container_attributes') }}>
        <span class=\"{{ ('select ' ~ size_class ~ is_multiple_class)|trim }}\">
            {{- parent() -}}
        </span>
            {{- block('form_errors') -}}
        </div>
    {% endspaceless %}
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_expanded -%}
    {%- if '--inline' in form.vars.attr.class|default('') -%}
        {%- set inline_choice = true -%}
    {%- endif -%}

    {%- if inline_choice|default(false) == true -%}
        <div {{ block('form_widget_container_attributes') }}>
    {%- endif -%}

    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' control')|trim}) -%}
    <div {{ block('widget_container_attributes') }}>
        {%- for child in form -%}
            {{- form_widget(child, {
                inline_choice: inline_choice|default(false),
                translation_domain: choice_translation_domain,
            }) -}}
        {%- endfor -%}
        {{- block('form_errors') -}}
    </div>

    {%- if inline_choice|default(false) == true -%}
        </div>
    {%- endif -%}
{%- endblock choice_widget_expanded -%}

{%- block textarea_widget -%}
    <div {{ block('form_widget_container_attributes') }}>
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' textarea')|trim}) -%}
        <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
        {{- block('form_errors') -}}
    </div>
{%- endblock textarea_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{- block('form_widget_simple') -}}
{%- endblock number_widget -%}

{% block checkbox_widget -%}
    {{- form_label(form, null, { widget: parent() }) -}}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {{- form_label(form, null, { widget: parent() }) -}}
{%- endblock radio_widget %}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' datetime-widget')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
            {{- form_errors(form) -}}
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget != 'single_text' -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' control is-grouped date-widget')|trim}) -%}
    {%- endif -%}
    {{- parent() -}}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget != 'single_text' -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' control is-grouped time-widget')|trim}) -%}
    {%- endif -%}
    {{- parent() -}}
{%- endblock time_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' button is-primary')|trim}) -%}
    {{- block('button_widget') -}}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' button is-link')|trim}) -%}
    {{- block('button_widget') -}}
{%- endblock reset_widget -%}

{%- block button_widget -%}
    {%- set btn_class = 'is-link' -%}
    {%- for color in [ 'is-primary', 'is-info', 'is-success', 'is-warning', 'is-danger' ]
        if color in attr.class|default('') -%}
        {%- set btn_class = color -%}
    {%- endfor -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' button ' ~ btn_class)|trim}) -%}
    <p {{ block('form_widget_container_attributes') }}>
        {{- parent() -}}
    </p>
{%- endblock button_widget -%}

{# Labels #}

{%- block form_label -%}
    {%- set label_attr = label_attr|merge({class: (attr.class|default('') ~ ' label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label -%}

{%- block checkbox_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' checkbox')|trim}) -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{%- block radio_label -%}
    {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' radio')|trim}) -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label -%}

{%- block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {%- set label = name|humanize -%}
            {%- endif -%}
        {%- endif -%}
        {%- if not inline_choice|default(false) %}<div class=\"control\">{% endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
        {{- block('form_errors') -}}
        {%- if not inline_choice|default(false) %}</div>{% endif -%}
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{%- block form_row -%}
    <div class=\"field\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {%- if form.vars.attr.help_text is defined -%}
            <p class=\"help\">{{ form.vars.attr.help_text }}</p>
        {%- endif -%}
    </div>
{%- endblock form_row -%}

{%- block checkbox_row -%}
    {{- form_widget(form) -}}
{%- endblock checkbox_row -%}

{%- block radio_row -%}
    {{- form_widget(form) -}}
{%- endblock radio_row -%}

{%- block money_row -%}
    {{- form_label(form) -}}
    {{- block('form_widget_simple') -}}
{%- endblock money_row -%}

{%- block percent_row -%}
    {{- form_label(form) -}}
    {{- block('form_widget_simple') -}}
{%- endblock percent_row -%}

{# Errors #}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
        {%- for error in errors -%}
            <span class=\"help is-danger\">{{ error.message }}</span>
        {%- endfor -%}
    {%- endif -%}
{%- endblock form_errors -%}

{# Support #}

{%- block form_widget_container_attributes -%}
    {%- set class = 'control' -%}
    {%- set widget_icon = attribute(form.vars, 'bulma_icon')|default() -%}
    {%- if widget_icon is defined and widget_icon is iterable -%}
        {%- set class = class ~ ' has-icon has-icon-' ~ (attribute(widget_icon, 'position')|default('right'))|trim -%}
    {%- endif -%}
    class=\"{{ class }}\"
{%- endblock form_widget_container_attributes -%}", "Form/bulma_0_3_x_layout.html.twig", "D:\\ZUT\\PSIAI\\projekt\\app\\Resources\\views\\Form\\bulma_0_3_x_layout.html.twig");
    }
}
