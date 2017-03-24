<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c04aae403a0f20b772cf8876df3d12a345a6f2d0fc4211b26c942dd4104714b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_cc3cced6527568155ceb4e274186062b125d638f55a078acb634d632c2f68cf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc3cced6527568155ceb4e274186062b125d638f55a078acb634d632c2f68cf2->enter($__internal_cc3cced6527568155ceb4e274186062b125d638f55a078acb634d632c2f68cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_236278b55b8fff1a652caf0fd123dbf80a3dbd3e204cf89b4869e500acee4377 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_236278b55b8fff1a652caf0fd123dbf80a3dbd3e204cf89b4869e500acee4377->enter($__internal_236278b55b8fff1a652caf0fd123dbf80a3dbd3e204cf89b4869e500acee4377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc3cced6527568155ceb4e274186062b125d638f55a078acb634d632c2f68cf2->leave($__internal_cc3cced6527568155ceb4e274186062b125d638f55a078acb634d632c2f68cf2_prof);

        
        $__internal_236278b55b8fff1a652caf0fd123dbf80a3dbd3e204cf89b4869e500acee4377->leave($__internal_236278b55b8fff1a652caf0fd123dbf80a3dbd3e204cf89b4869e500acee4377_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5187b48bbf389ff48458207f46bfcf32ddaa9882549a24097567946fe5971894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5187b48bbf389ff48458207f46bfcf32ddaa9882549a24097567946fe5971894->enter($__internal_5187b48bbf389ff48458207f46bfcf32ddaa9882549a24097567946fe5971894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_050b3176a6289226b4a1fc3414ca4f48629ae1af8325e8ec5592af85a0505a51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_050b3176a6289226b4a1fc3414ca4f48629ae1af8325e8ec5592af85a0505a51->enter($__internal_050b3176a6289226b4a1fc3414ca4f48629ae1af8325e8ec5592af85a0505a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_050b3176a6289226b4a1fc3414ca4f48629ae1af8325e8ec5592af85a0505a51->leave($__internal_050b3176a6289226b4a1fc3414ca4f48629ae1af8325e8ec5592af85a0505a51_prof);

        
        $__internal_5187b48bbf389ff48458207f46bfcf32ddaa9882549a24097567946fe5971894->leave($__internal_5187b48bbf389ff48458207f46bfcf32ddaa9882549a24097567946fe5971894_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a10c0cc8d5a6bf167bb2a7802fa8a5631a1aacf16a5c2968e23450806b826134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a10c0cc8d5a6bf167bb2a7802fa8a5631a1aacf16a5c2968e23450806b826134->enter($__internal_a10c0cc8d5a6bf167bb2a7802fa8a5631a1aacf16a5c2968e23450806b826134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5573eb4c3020a81fb76ecb40d4929039110699800998ad368db44e5df085aa67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5573eb4c3020a81fb76ecb40d4929039110699800998ad368db44e5df085aa67->enter($__internal_5573eb4c3020a81fb76ecb40d4929039110699800998ad368db44e5df085aa67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5573eb4c3020a81fb76ecb40d4929039110699800998ad368db44e5df085aa67->leave($__internal_5573eb4c3020a81fb76ecb40d4929039110699800998ad368db44e5df085aa67_prof);

        
        $__internal_a10c0cc8d5a6bf167bb2a7802fa8a5631a1aacf16a5c2968e23450806b826134->leave($__internal_a10c0cc8d5a6bf167bb2a7802fa8a5631a1aacf16a5c2968e23450806b826134_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dead4a3d3c9c2b474fd3743ad81ca8ae026877c9c585130df854e26416b903b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dead4a3d3c9c2b474fd3743ad81ca8ae026877c9c585130df854e26416b903b3->enter($__internal_dead4a3d3c9c2b474fd3743ad81ca8ae026877c9c585130df854e26416b903b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a23d106e2dd16cc5ab33478ecf1209725e7c6b4804bb042048cba383cd89c462 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23d106e2dd16cc5ab33478ecf1209725e7c6b4804bb042048cba383cd89c462->enter($__internal_a23d106e2dd16cc5ab33478ecf1209725e7c6b4804bb042048cba383cd89c462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a23d106e2dd16cc5ab33478ecf1209725e7c6b4804bb042048cba383cd89c462->leave($__internal_a23d106e2dd16cc5ab33478ecf1209725e7c6b4804bb042048cba383cd89c462_prof);

        
        $__internal_dead4a3d3c9c2b474fd3743ad81ca8ae026877c9c585130df854e26416b903b3->leave($__internal_dead4a3d3c9c2b474fd3743ad81ca8ae026877c9c585130df854e26416b903b3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Library/WebServer/Documents/murapol/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
