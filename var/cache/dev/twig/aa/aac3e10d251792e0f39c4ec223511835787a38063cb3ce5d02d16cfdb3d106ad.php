<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_16f81aababb64102ebf223bc3f88038d70b8a167117a46a86fee760c718016dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9100e3bb80c294602bedc20293de10b236edcf7fc08e627d174ca3ac3449ae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9100e3bb80c294602bedc20293de10b236edcf7fc08e627d174ca3ac3449ae5->enter($__internal_a9100e3bb80c294602bedc20293de10b236edcf7fc08e627d174ca3ac3449ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_c47479e87a1d0409f5cc376aef44912d7e20d20eec6683966bbba0e12caed527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c47479e87a1d0409f5cc376aef44912d7e20d20eec6683966bbba0e12caed527->enter($__internal_c47479e87a1d0409f5cc376aef44912d7e20d20eec6683966bbba0e12caed527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9100e3bb80c294602bedc20293de10b236edcf7fc08e627d174ca3ac3449ae5->leave($__internal_a9100e3bb80c294602bedc20293de10b236edcf7fc08e627d174ca3ac3449ae5_prof);

        
        $__internal_c47479e87a1d0409f5cc376aef44912d7e20d20eec6683966bbba0e12caed527->leave($__internal_c47479e87a1d0409f5cc376aef44912d7e20d20eec6683966bbba0e12caed527_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_182f60b05e7642dee6bc84f44af00911a5cb0d72bb9798c3900c20d67b314969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_182f60b05e7642dee6bc84f44af00911a5cb0d72bb9798c3900c20d67b314969->enter($__internal_182f60b05e7642dee6bc84f44af00911a5cb0d72bb9798c3900c20d67b314969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_cc68dc8f05318e18a2f9feda0697cc187ae497e1fd23207cdb40a4f0a4abd19a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc68dc8f05318e18a2f9feda0697cc187ae497e1fd23207cdb40a4f0a4abd19a->enter($__internal_cc68dc8f05318e18a2f9feda0697cc187ae497e1fd23207cdb40a4f0a4abd19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_cc68dc8f05318e18a2f9feda0697cc187ae497e1fd23207cdb40a4f0a4abd19a->leave($__internal_cc68dc8f05318e18a2f9feda0697cc187ae497e1fd23207cdb40a4f0a4abd19a_prof);

        
        $__internal_182f60b05e7642dee6bc84f44af00911a5cb0d72bb9798c3900c20d67b314969->leave($__internal_182f60b05e7642dee6bc84f44af00911a5cb0d72bb9798c3900c20d67b314969_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b397594bca3c1c5ec39d789755ef18c814619c534da3fd9342d26411ff4bd2dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b397594bca3c1c5ec39d789755ef18c814619c534da3fd9342d26411ff4bd2dc->enter($__internal_b397594bca3c1c5ec39d789755ef18c814619c534da3fd9342d26411ff4bd2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dfdfdb68f068d93a0620c7f447587c72353626e3cecd42d0e95c8ba06b67c2d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfdfdb68f068d93a0620c7f447587c72353626e3cecd42d0e95c8ba06b67c2d4->enter($__internal_dfdfdb68f068d93a0620c7f447587c72353626e3cecd42d0e95c8ba06b67c2d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_dfdfdb68f068d93a0620c7f447587c72353626e3cecd42d0e95c8ba06b67c2d4->leave($__internal_dfdfdb68f068d93a0620c7f447587c72353626e3cecd42d0e95c8ba06b67c2d4_prof);

        
        $__internal_b397594bca3c1c5ec39d789755ef18c814619c534da3fd9342d26411ff4bd2dc->leave($__internal_b397594bca3c1c5ec39d789755ef18c814619c534da3fd9342d26411ff4bd2dc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c548c44c559a810b708bcd432f9f84e8ea5847cbcff3cd1b119e0261ae8892eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c548c44c559a810b708bcd432f9f84e8ea5847cbcff3cd1b119e0261ae8892eb->enter($__internal_c548c44c559a810b708bcd432f9f84e8ea5847cbcff3cd1b119e0261ae8892eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_da66c39c9b61049fe5062381ed4807096147c8374f4b8f97d05687f980f864dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da66c39c9b61049fe5062381ed4807096147c8374f4b8f97d05687f980f864dd->enter($__internal_da66c39c9b61049fe5062381ed4807096147c8374f4b8f97d05687f980f864dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_da66c39c9b61049fe5062381ed4807096147c8374f4b8f97d05687f980f864dd->leave($__internal_da66c39c9b61049fe5062381ed4807096147c8374f4b8f97d05687f980f864dd_prof);

        
        $__internal_c548c44c559a810b708bcd432f9f84e8ea5847cbcff3cd1b119e0261ae8892eb->leave($__internal_c548c44c559a810b708bcd432f9f84e8ea5847cbcff3cd1b119e0261ae8892eb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Library/WebServer/Documents/murapol/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
