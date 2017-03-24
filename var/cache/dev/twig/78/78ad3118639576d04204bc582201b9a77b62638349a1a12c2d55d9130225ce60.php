<?php

/* pages/index.html.twig */
class __TwigTemplate_8969b9b344de7d05e1868c23e88ffc70dfb366e8f6c1499c2cdcffac2d58bc87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pages/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35ea625ef499d6fa1c7deee21d3337a7134b24fd8520c133878c9eb7d4346ea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35ea625ef499d6fa1c7deee21d3337a7134b24fd8520c133878c9eb7d4346ea6->enter($__internal_35ea625ef499d6fa1c7deee21d3337a7134b24fd8520c133878c9eb7d4346ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/index.html.twig"));

        $__internal_b2add97141312f8ba75e5d9559e9ae3ddf6764ec1163e579c41faf9e29d68aaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2add97141312f8ba75e5d9559e9ae3ddf6764ec1163e579c41faf9e29d68aaa->enter($__internal_b2add97141312f8ba75e5d9559e9ae3ddf6764ec1163e579c41faf9e29d68aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35ea625ef499d6fa1c7deee21d3337a7134b24fd8520c133878c9eb7d4346ea6->leave($__internal_35ea625ef499d6fa1c7deee21d3337a7134b24fd8520c133878c9eb7d4346ea6_prof);

        
        $__internal_b2add97141312f8ba75e5d9559e9ae3ddf6764ec1163e579c41faf9e29d68aaa->leave($__internal_b2add97141312f8ba75e5d9559e9ae3ddf6764ec1163e579c41faf9e29d68aaa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e16c12e290eb9420ad317117ab3962e95dee16923bc3ae2b5e13eed55f72c2d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e16c12e290eb9420ad317117ab3962e95dee16923bc3ae2b5e13eed55f72c2d6->enter($__internal_e16c12e290eb9420ad317117ab3962e95dee16923bc3ae2b5e13eed55f72c2d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4c9633188465d8a91a7c8ab351c3eda854b755c3b487ec19da61e885cdc3f2d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c9633188465d8a91a7c8ab351c3eda854b755c3b487ec19da61e885cdc3f2d3->enter($__internal_4c9633188465d8a91a7c8ab351c3eda854b755c3b487ec19da61e885cdc3f2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"page-wrapper\">
    <header class=\"header\">
      <figure class=\"logo\">
        <a href=\"/\" title=\"Home\"><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app/img/logo.png"), "html", null, true);
        echo "\" alt=\"Murapol Logo\"></a>
      </figure>
      <ul class=\"menu\">
        <li class=\"active\">Inwestor</li>
        <li>Formularz</li>
        <li>Zgody</li>
        <li>Potwierdzenie</li>
      </ul>
    </header>
    <section class=\"content\">
      <h1 class=\"page-title\">
        Zamówienie Imiennej Propozycji Nabycia Certyfikatów<br>Murapol HRE FIZ AN
      </h1>
      <div class=\"grid-noGutter\"> 
        <div class=\"col-6_sm-12\">
          <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("individual");
        echo "\" class=\"tile tile--left\">
            <h2 class=\"tile__title\">Klient indywidualny<br><span>(osoba fizyczna)</span></h2>
            <button class=\"tile__button\">Wybierz</button>
          </a>  
        </div>
        <div class=\"col-6_sm-12\">
          <a  href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("institutional");
        echo "\" class=\"tile tile--right\">
            <h2 class=\"tile__title\">Klient instytucjonalny<br><span>(osoba prawna)</span></h2>
            <button class=\"tile__button\">Wybierz</button> 
          </a>
        </div>  
      </div>
    </section> 
    <footer class=\"footer\">
      <p class=\"footer__terms\">© 2017 Murapol HRE FIZ AN</p> 
      <a href=\"mailto: zgloszenie@murapolhre.pl\" class=\"footer__mail\">zgloszenie@murapolhre.pl</a> 
    </footer>

  </div>
";
        
        $__internal_4c9633188465d8a91a7c8ab351c3eda854b755c3b487ec19da61e885cdc3f2d3->leave($__internal_4c9633188465d8a91a7c8ab351c3eda854b755c3b487ec19da61e885cdc3f2d3_prof);

        
        $__internal_e16c12e290eb9420ad317117ab3962e95dee16923bc3ae2b5e13eed55f72c2d6->leave($__internal_e16c12e290eb9420ad317117ab3962e95dee16923bc3ae2b5e13eed55f72c2d6_prof);

    }

    // line 43
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8428e50316cfdcb5aedcdaacd1fdc3692436040968f7244c5db7759487c2cd85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8428e50316cfdcb5aedcdaacd1fdc3692436040968f7244c5db7759487c2cd85->enter($__internal_8428e50316cfdcb5aedcdaacd1fdc3692436040968f7244c5db7759487c2cd85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b5b3ed0d76eda9aa9b03ef8eb51a743d72d3edbe8b4373375334a6135b5a92bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b3ed0d76eda9aa9b03ef8eb51a743d72d3edbe8b4373375334a6135b5a92bd->enter($__internal_b5b3ed0d76eda9aa9b03ef8eb51a743d72d3edbe8b4373375334a6135b5a92bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 44
        echo "

";
        
        $__internal_b5b3ed0d76eda9aa9b03ef8eb51a743d72d3edbe8b4373375334a6135b5a92bd->leave($__internal_b5b3ed0d76eda9aa9b03ef8eb51a743d72d3edbe8b4373375334a6135b5a92bd_prof);

        
        $__internal_8428e50316cfdcb5aedcdaacd1fdc3692436040968f7244c5db7759487c2cd85->leave($__internal_8428e50316cfdcb5aedcdaacd1fdc3692436040968f7244c5db7759487c2cd85_prof);

    }

    public function getTemplateName()
    {
        return "pages/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 44,  106 => 43,  82 => 28,  73 => 22,  55 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
  <div class=\"page-wrapper\">
    <header class=\"header\">
      <figure class=\"logo\">
        <a href=\"/\" title=\"Home\"><img src=\"{{ asset('app/img/logo.png') }}\" alt=\"Murapol Logo\"></a>
      </figure>
      <ul class=\"menu\">
        <li class=\"active\">Inwestor</li>
        <li>Formularz</li>
        <li>Zgody</li>
        <li>Potwierdzenie</li>
      </ul>
    </header>
    <section class=\"content\">
      <h1 class=\"page-title\">
        Zamówienie Imiennej Propozycji Nabycia Certyfikatów<br>Murapol HRE FIZ AN
      </h1>
      <div class=\"grid-noGutter\"> 
        <div class=\"col-6_sm-12\">
          <a href=\"{{ path('individual') }}\" class=\"tile tile--left\">
            <h2 class=\"tile__title\">Klient indywidualny<br><span>(osoba fizyczna)</span></h2>
            <button class=\"tile__button\">Wybierz</button>
          </a>  
        </div>
        <div class=\"col-6_sm-12\">
          <a  href=\"{{ path('institutional') }}\" class=\"tile tile--right\">
            <h2 class=\"tile__title\">Klient instytucjonalny<br><span>(osoba prawna)</span></h2>
            <button class=\"tile__button\">Wybierz</button> 
          </a>
        </div>  
      </div>
    </section> 
    <footer class=\"footer\">
      <p class=\"footer__terms\">© 2017 Murapol HRE FIZ AN</p> 
      <a href=\"mailto: zgloszenie@murapolhre.pl\" class=\"footer__mail\">zgloszenie@murapolhre.pl</a> 
    </footer>

  </div>
{% endblock %}

{% block stylesheets %}


{% endblock %}
", "pages/index.html.twig", "/Library/WebServer/Documents/murapol/app/Resources/views/pages/index.html.twig");
    }
}
