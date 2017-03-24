<?php

/* pages/individual.html.twig */
class __TwigTemplate_ac2eadeab665fffff1f86b986d2cbeeb866ad13adc8150cc10ad1e7fc264b754 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "pages/individual.html.twig", 2);
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
        $__internal_92faa8ccc716214498e3bad5f199c3eee359691ee9aec17d572e7f2e2aa3c300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92faa8ccc716214498e3bad5f199c3eee359691ee9aec17d572e7f2e2aa3c300->enter($__internal_92faa8ccc716214498e3bad5f199c3eee359691ee9aec17d572e7f2e2aa3c300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/individual.html.twig"));

        $__internal_9927fc80c193d7822d4b0ffdd4c2f19d3c451fc946418c219b74ecc1b52d8fa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9927fc80c193d7822d4b0ffdd4c2f19d3c451fc946418c219b74ecc1b52d8fa8->enter($__internal_9927fc80c193d7822d4b0ffdd4c2f19d3c451fc946418c219b74ecc1b52d8fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/individual.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92faa8ccc716214498e3bad5f199c3eee359691ee9aec17d572e7f2e2aa3c300->leave($__internal_92faa8ccc716214498e3bad5f199c3eee359691ee9aec17d572e7f2e2aa3c300_prof);

        
        $__internal_9927fc80c193d7822d4b0ffdd4c2f19d3c451fc946418c219b74ecc1b52d8fa8->leave($__internal_9927fc80c193d7822d4b0ffdd4c2f19d3c451fc946418c219b74ecc1b52d8fa8_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_24a948e517b9ace8a27a53ec95bcb5c58ca6052d4ade4c39cdd9acaaa52ca9e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24a948e517b9ace8a27a53ec95bcb5c58ca6052d4ade4c39cdd9acaaa52ca9e3->enter($__internal_24a948e517b9ace8a27a53ec95bcb5c58ca6052d4ade4c39cdd9acaaa52ca9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41635a6c4a8ede112a758d080013785ad3fecafd0afb5777104a5bc5233e4ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41635a6c4a8ede112a758d080013785ad3fecafd0afb5777104a5bc5233e4ff9->enter($__internal_41635a6c4a8ede112a758d080013785ad3fecafd0afb5777104a5bc5233e4ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "  <div class=\"page-wrapper\">
    <header class=\"header\">
      <figure class=\"logo\">
        <a href=\"/\" title=\"Home\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app/img/logo.png"), "html", null, true);
        echo "\" alt=\"Murapol Logo\"></a>
      </figure>
      <ul class=\"menu\">
        <li>Inwestor</li>
        <li class=\"active\">Formularz</li> 
        <li>Zgody</li>
        <li>Potwierdzenie</li>
      </ul>
    </header>
    <div class=\"form-page\">
      <div class=\"form-page__banner\">
        <h1 class=\"form-page__banner__title\"> 
          Dane Klienta Indywidualnego<br><span>(osoba fizyczna)</span>
        </h1>
      </div>
      ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), 'form_start', array("attr" => array("novalidate" => "novalidate", "id" => "form-individual")));
        echo "
      <div class=\"grid\">
        <div class=\"col-12\">
          <h2>Wypełnij poprawnie formularz Murapol HRE FIZ AN</h2>
        </div>
        <div class=\"col-4_sm-12\">
          ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "name", array()), 'label');
        echo "
          ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "name", array()), 'errors');
        echo "
          ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "name", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\">
          ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "phone", array()), 'label');
        echo "
          ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "phone", array()), 'errors');
        echo "
          ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "phone", array()), 'widget');
        echo "
        </div> 
        <div class=\"col-4_sm-12\"> 
          ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "mail", array()), 'label');
        echo "
          ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "mail", array()), 'errors');
        echo "
          ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "mail", array()), 'widget');
        echo "
        </div>

        <div class=\"col-12\">
          <h3>Adres zamieszkania</h3>
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "street", array()), 'label');
        echo "
          ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "street", array()), 'errors');
        echo "
          ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "street", array()), 'widget');
        echo " 
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "street_number", array()), 'label');
        echo "
          ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "street_number", array()), 'errors');
        echo "
          ";
        // line 55
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "street_number", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "flat_number", array()), 'label');
        echo "
          ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "flat_number", array()), 'errors');
        echo "
          ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "flat_number", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "post_code", array()), 'label');
        echo "
          ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "post_code", array()), 'errors');
        echo "
          ";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "post_code", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "city", array()), 'label');
        echo "
          ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "city", array()), 'errors');
        echo "
          ";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "city", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\">
          ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "other_cor", array()), 'label');
        echo "
          ";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "other_cor", array()), 'errors');
        echo "
          ";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "other_cor", array()), 'widget');
        echo " 
        </div> 
        <div class=\"col-12\"><br></div>
        <div class=\"col-12 coresponding-address\">
          <div class=\"grid\">
            <div class=\"col-12\">
              <h3>Adres korespondencyjny</h3> 
            </div>
            <div class=\"col-4_sm-12\"> 
              ";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "cor_street", array()), 'label');
        echo "
              ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "cor_street", array()), 'errors');
        echo "
              ";
        // line 86
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "cor_street", array()), 'widget');
        echo "
            </div>
            <div class=\"col-4_sm-12\"> 
              ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "cor_street_number", array()), 'label');
        echo "
              ";
        // line 90
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "cor_street_number", array()), 'errors');
        echo "
              ";
        // line 91
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "cor_street_number", array()), 'widget');
        echo "
            </div>
            <div class=\"col-4_sm-12\"> 
              ";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "cor_flat_number", array()), 'label');
        echo "
              ";
        // line 95
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "cor_flat_number", array()), 'errors');
        echo "
              ";
        // line 96
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "cor_flat_number", array()), 'widget');
        echo "
            </div>
            <div class=\"col-4_sm-12\"> 
              ";
        // line 99
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "cor_post_code", array()), 'label');
        echo "
              ";
        // line 100
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "cor_post_code", array()), 'errors');
        echo "
              ";
        // line 101
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "cor_post_code", array()), 'widget');
        echo "
            </div>
            <div class=\"col-4_sm-12\"> 
              ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "cor_city", array()), 'label');
        echo "
              ";
        // line 105
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "cor_city", array()), 'errors');
        echo "
              ";
        // line 106
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "cor_city", array()), 'widget');
        echo "
            </div>
          </div>
        </div>
        <div class=\"col-12\"><br></div>

        <div class=\"col-4_sm-12\"> 
          ";
        // line 113
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "id_number", array()), 'label');
        echo "
          ";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "id_number", array()), 'errors');
        echo "
          ";
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "id_number", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 118
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "id_expiration", array()), 'label');
        echo "
          ";
        // line 119
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "id_expiration", array()), 'errors');
        echo "
          ";
        // line 120
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "id_expiration", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 123
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "nationality", array()), 'label');
        echo "
          ";
        // line 124
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "nationality", array()), 'errors');
        echo "
          ";
        // line 125
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "nationality", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 128
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "pesel", array()), 'label');
        echo "
          ";
        // line 129
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "pesel", array()), 'errors');
        echo "
          ";
        // line 130
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "pesel", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 133
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "birth_date", array()), 'label');
        echo "
          ";
        // line 134
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "birth_date", array()), 'errors');
        echo "
          ";
        // line 135
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "birth_date", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 138
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "birth_country", array()), 'label');
        echo "
          ";
        // line 139
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "birth_country", array()), 'errors');
        echo "
          ";
        // line 140
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "birth_country", array()), 'widget');
        echo "
        </div> 
        <div class=\"col-12\"><br></div>
        <div class=\"col-12\">
          <div class=\"header-label\">";
        // line 144
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "legal_status", array()), 'label');
        echo "</div>
          <div class=\"grid\">
            ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "legal_status", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["input"]) {
            // line 147
            echo "              <div class=\"col-4_sm-12\"> 
                ";
            // line 148
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["input"], 'row');
            echo "
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['input'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "          </div>
        </div> 
        <br>
        <div class=\"col-12\">
          <div class=\"header-label\">";
        // line 155
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "currency_status", array()), 'label');
        echo "</div>
          <div class=\"grid\">
            ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "currency_status", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["input"]) {
            // line 158
            echo "              <div class=\"col-4_sm-12\"> 
                ";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["input"], 'row');
            echo "
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['input'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "          </div>
        </div>
        <br>
        <div class=\"col-12\">
          <div class=\"header-label\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "facta_status", array()), 'label');
        echo "</div>
          <div class=\"grid\">
            ";
        // line 168
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "facta_status", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["input"]) {
            // line 169
            echo "              <div class=\"col-4_sm-12\"> 
                ";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["input"], 'row');
            echo "
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['input'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "          </div>
        </div>
        <div class=\"col-12\">
          <div class=\"grid\">
            <div id=\"tin-number\" class=\"col-4_sm-12\"> 
              ";
        // line 178
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "tin_number", array()), 'label');
        echo "
              ";
        // line 179
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "tin_number", array()), 'errors');
        echo "
              ";
        // line 180
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "tin_number", array()), 'widget');
        echo "
            </div>
            <div id=\"currency_country\" class=\"col-4_sm-12\"> 
              ";
        // line 183
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "currency_country", array()), 'label');
        echo "
              ";
        // line 184
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "currency_country", array()), 'errors');
        echo "
              ";
        // line 185
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "currency_country", array()), 'widget');
        echo " 
            </div> 
            <div class=\"col-4_sm-12\"> 
              ";
        // line 188
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "bank_name", array()), 'label');
        echo "
              ";
        // line 189
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "bank_name", array()), 'errors');
        echo " 
              ";
        // line 190
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "bank_name", array()), 'widget');
        echo "
            </div>
            <div class=\"col-4_sm-12\"> 
              ";
        // line 193
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "account_number", array()), 'label');
        echo "
              ";
        // line 194
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "account_number", array()), 'errors');
        echo "
              ";
        // line 195
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "account_number", array()), 'widget');
        echo "
            </div>
            
          </div>
        </div> 
        <div class=\"col-12\">
          <div class=\"grid\">
            <div class=\"col-4_sm-12\"> 
              ";
        // line 203
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "amount", array()), 'label');
        echo "
              ";
        // line 204
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "amount", array()), 'errors');
        echo " 
              ";
        // line 205
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "amount", array()), 'widget');
        echo "
            </div>
            <div class=\"col-4_sm-12\"> 
              ";
        // line 208
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "charge", array()), 'label');
        echo "
              ";
        // line 209
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "charge", array()), 'errors');
        echo "
              ";
        // line 210
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "charge", array()), 'widget');
        echo "
            </div>
          </div>
        </div> 
        <div class=\"col-12\">
          <h2>Dane doradcy</h2>
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 218
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "counselor_name", array()), 'label');
        echo "
          ";
        // line 219
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "counselor_name", array()), 'errors');
        echo "
          ";
        // line 220
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "counselor_name", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 223
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "counselor_phone", array()), 'label');
        echo "
          ";
        // line 224
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "counselor_phone", array()), 'errors');
        echo "
          ";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "counselor_phone", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 228
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "counselor_email", array()), 'label');
        echo "
          ";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "counselor_email", array()), 'errors');
        echo "
          ";
        // line 230
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "counselor_email", array()), 'widget');
        echo "
        </div>
        <div class=\"col-8_sm-12\"> 
          ";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "counselor_company", array()), 'label');
        echo "
          ";
        // line 234
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "counselor_company", array()), 'errors');
        echo "
          ";
        // line 235
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "counselor_company", array()), 'widget');
        echo "
        </div>
        <div class=\"col-12\">
          <h3>Adres placówki firmy</h3>
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 241
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "counselor_street", array()), 'label');
        echo "
          ";
        // line 242
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "counselor_street", array()), 'errors');
        echo "
          ";
        // line 243
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "counselor_street", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 246
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "counselor_street_number", array()), 'label');
        echo "
          ";
        // line 247
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "counselor_street_number", array()), 'errors');
        echo "
          ";
        // line 248
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "counselor_street_number", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 251
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "counselor_flat_number", array()), 'label');
        echo "
          ";
        // line 252
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "counselor_flat_number", array()), 'errors');
        echo "
          ";
        // line 253
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "counselor_flat_number", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 256
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "counselor_post_code", array()), 'label');
        echo "
          ";
        // line 257
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "counselor_post_code", array()), 'errors');
        echo "
          ";
        // line 258
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "counselor_post_code", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 261
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "counselor_city", array()), 'label');
        echo "
          ";
        // line 262
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "counselor_city", array()), 'errors');
        echo "
          ";
        // line 263
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "counselor_city", array()), 'widget');
        echo "
        </div> 
        <div class=\"col-12\">
          <div class=\"navigation\">
            <div class=\"navigation--right\">
              <a class=\"btn-fill btn-fill--back\" href=\"/\">Wstecz</a>
            </div>
            <div class=\"navigation--left\">
              ";
        // line 271
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "save", array()), 'widget');
        echo "
            </div>
          </div> 
        </div>
      </div>
    </div> 
    <footer class=\"footer\">
      <p class=\"footer__terms\">© 2017 Murapol HRE FIZ AN</p> 
      <a href=\"mailto: zgloszenie@murapolhre.pl\" class=\"footer__mail\">zgloszenie@murapolhre.pl</a> 
    </footer>

  </div>
  ";
        // line 283
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), "save", array()), 'widget');
        echo "
  ";
        // line 284
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form_individual"]) ? $context["form_individual"] : $this->getContext($context, "form_individual")), 'form_end');
        echo "
  ";
        // line 285
        if ((isset($context["fileurl"]) ? $context["fileurl"] : $this->getContext($context, "fileurl"))) {
            // line 286
            echo "    <a href=\"/";
            echo twig_escape_filter($this->env, (isset($context["fileurl"]) ? $context["fileurl"] : $this->getContext($context, "fileurl")), "html", null, true);
            echo "\" class=\"button-fill\">Plik</a>
  ";
        }
        // line 287
        echo " 

";
        
        $__internal_41635a6c4a8ede112a758d080013785ad3fecafd0afb5777104a5bc5233e4ff9->leave($__internal_41635a6c4a8ede112a758d080013785ad3fecafd0afb5777104a5bc5233e4ff9_prof);

        
        $__internal_24a948e517b9ace8a27a53ec95bcb5c58ca6052d4ade4c39cdd9acaaa52ca9e3->leave($__internal_24a948e517b9ace8a27a53ec95bcb5c58ca6052d4ade4c39cdd9acaaa52ca9e3_prof);

    }

    // line 291
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_193a69fcb217d3b8d15cbc7084497b0754315cea9107517907946c9d46ad3587 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_193a69fcb217d3b8d15cbc7084497b0754315cea9107517907946c9d46ad3587->enter($__internal_193a69fcb217d3b8d15cbc7084497b0754315cea9107517907946c9d46ad3587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e21a7ffa0624238d6980ae0da9e49789741760cdcd8b7bcb750741789303ce5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e21a7ffa0624238d6980ae0da9e49789741760cdcd8b7bcb750741789303ce5c->enter($__internal_e21a7ffa0624238d6980ae0da9e49789741760cdcd8b7bcb750741789303ce5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 292
        echo "

";
        
        $__internal_e21a7ffa0624238d6980ae0da9e49789741760cdcd8b7bcb750741789303ce5c->leave($__internal_e21a7ffa0624238d6980ae0da9e49789741760cdcd8b7bcb750741789303ce5c_prof);

        
        $__internal_193a69fcb217d3b8d15cbc7084497b0754315cea9107517907946c9d46ad3587->leave($__internal_193a69fcb217d3b8d15cbc7084497b0754315cea9107517907946c9d46ad3587_prof);

    }

    public function getTemplateName()
    {
        return "pages/individual.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  739 => 292,  730 => 291,  718 => 287,  712 => 286,  710 => 285,  706 => 284,  702 => 283,  687 => 271,  676 => 263,  672 => 262,  668 => 261,  662 => 258,  658 => 257,  654 => 256,  648 => 253,  644 => 252,  640 => 251,  634 => 248,  630 => 247,  626 => 246,  620 => 243,  616 => 242,  612 => 241,  603 => 235,  599 => 234,  595 => 233,  589 => 230,  585 => 229,  581 => 228,  575 => 225,  571 => 224,  567 => 223,  561 => 220,  557 => 219,  553 => 218,  542 => 210,  538 => 209,  534 => 208,  528 => 205,  524 => 204,  520 => 203,  509 => 195,  505 => 194,  501 => 193,  495 => 190,  491 => 189,  487 => 188,  481 => 185,  477 => 184,  473 => 183,  467 => 180,  463 => 179,  459 => 178,  452 => 173,  443 => 170,  440 => 169,  436 => 168,  431 => 166,  425 => 162,  416 => 159,  413 => 158,  409 => 157,  404 => 155,  398 => 151,  389 => 148,  386 => 147,  382 => 146,  377 => 144,  370 => 140,  366 => 139,  362 => 138,  356 => 135,  352 => 134,  348 => 133,  342 => 130,  338 => 129,  334 => 128,  328 => 125,  324 => 124,  320 => 123,  314 => 120,  310 => 119,  306 => 118,  300 => 115,  296 => 114,  292 => 113,  282 => 106,  278 => 105,  274 => 104,  268 => 101,  264 => 100,  260 => 99,  254 => 96,  250 => 95,  246 => 94,  240 => 91,  236 => 90,  232 => 89,  226 => 86,  222 => 85,  218 => 84,  206 => 75,  202 => 74,  198 => 73,  192 => 70,  188 => 69,  184 => 68,  178 => 65,  174 => 64,  170 => 63,  164 => 60,  160 => 59,  156 => 58,  150 => 55,  146 => 54,  142 => 53,  136 => 50,  132 => 49,  128 => 48,  118 => 41,  114 => 40,  110 => 39,  104 => 36,  100 => 35,  96 => 34,  90 => 31,  86 => 30,  82 => 29,  73 => 23,  55 => 8,  50 => 5,  41 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'base.html.twig' %}

{% block body %}
  <div class=\"page-wrapper\">
    <header class=\"header\">
      <figure class=\"logo\">
        <a href=\"/\" title=\"Home\"><img src=\"{{ asset('app/img/logo.png') }}\" alt=\"Murapol Logo\"></a>
      </figure>
      <ul class=\"menu\">
        <li>Inwestor</li>
        <li class=\"active\">Formularz</li> 
        <li>Zgody</li>
        <li>Potwierdzenie</li>
      </ul>
    </header>
    <div class=\"form-page\">
      <div class=\"form-page__banner\">
        <h1 class=\"form-page__banner__title\"> 
          Dane Klienta Indywidualnego<br><span>(osoba fizyczna)</span>
        </h1>
      </div>
      {{ form_start(form_individual, {'attr': {'novalidate': 'novalidate','id': 'form-individual'}}) }}
      <div class=\"grid\">
        <div class=\"col-12\">
          <h2>Wypełnij poprawnie formularz Murapol HRE FIZ AN</h2>
        </div>
        <div class=\"col-4_sm-12\">
          {{ form_label(form_individual.name) }}
          {{ form_errors(form_individual.name) }}
          {{ form_widget(form_individual.name) }}
        </div>
        <div class=\"col-4_sm-12\">
          {{ form_label(form_individual.phone) }}
          {{ form_errors(form_individual.phone) }}
          {{ form_widget(form_individual.phone) }}
        </div> 
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_individual.mail) }}
          {{ form_errors(form_individual.mail) }}
          {{ form_widget(form_individual.mail) }}
        </div>

        <div class=\"col-12\">
          <h3>Adres zamieszkania</h3>
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_individual.street) }}
          {{ form_errors(form_individual.street) }}
          {{ form_widget(form_individual.street) }} 
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_individual.street_number) }}
          {{ form_errors(form_individual.street_number) }}
          {{ form_widget(form_individual.street_number) }}
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_individual.flat_number) }}
          {{ form_errors(form_individual.flat_number) }}
          {{ form_widget(form_individual.flat_number) }}
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_individual.post_code) }}
          {{ form_errors(form_individual.post_code) }}
          {{ form_widget(form_individual.post_code) }}
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_individual.city) }}
          {{ form_errors(form_individual.city) }}
          {{ form_widget(form_individual.city) }}
        </div>
        <div class=\"col-4_sm-12\">
          {{ form_label(form_individual.other_cor) }}
          {{ form_errors(form_individual.other_cor) }}
          {{ form_widget(form_individual.other_cor) }} 
        </div> 
        <div class=\"col-12\"><br></div>
        <div class=\"col-12 coresponding-address\">
          <div class=\"grid\">
            <div class=\"col-12\">
              <h3>Adres korespondencyjny</h3> 
            </div>
            <div class=\"col-4_sm-12\"> 
              {{ form_label(form_individual.cor_street) }}
              {{ form_errors(form_individual.cor_street) }}
              {{ form_widget(form_individual.cor_street) }}
            </div>
            <div class=\"col-4_sm-12\"> 
              {{ form_label(form_individual.cor_street_number) }}
              {{ form_errors(form_individual.cor_street_number) }}
              {{ form_widget(form_individual.cor_street_number) }}
            </div>
            <div class=\"col-4_sm-12\"> 
              {{ form_label(form_individual.cor_flat_number) }}
              {{ form_errors(form_individual.cor_flat_number) }}
              {{ form_widget(form_individual.cor_flat_number) }}
            </div>
            <div class=\"col-4_sm-12\"> 
              {{ form_label(form_individual.cor_post_code) }}
              {{ form_errors(form_individual.cor_post_code) }}
              {{ form_widget(form_individual.cor_post_code) }}
            </div>
            <div class=\"col-4_sm-12\"> 
              {{ form_label(form_individual.cor_city) }}
              {{ form_errors(form_individual.cor_city) }}
              {{ form_widget(form_individual.cor_city) }}
            </div>
          </div>
        </div>
        <div class=\"col-12\"><br></div>

        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_individual.id_number) }}
          {{ form_errors(form_individual.id_number) }}
          {{ form_widget(form_individual.id_number) }}
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_individual.id_expiration) }}
          {{ form_errors(form_individual.id_expiration) }}
          {{ form_widget(form_individual.id_expiration) }}
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_individual.nationality) }}
          {{ form_errors(form_individual.nationality) }}
          {{ form_widget(form_individual.nationality) }}
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_individual.pesel) }}
          {{ form_errors(form_individual.pesel) }}
          {{ form_widget(form_individual.pesel) }}
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_individual.birth_date) }}
          {{ form_errors(form_individual.birth_date) }}
          {{ form_widget(form_individual.birth_date) }}
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_individual.birth_country) }}
          {{ form_errors(form_individual.birth_country) }}
          {{ form_widget(form_individual.birth_country) }}
        </div> 
        <div class=\"col-12\"><br></div>
        <div class=\"col-12\">
          <div class=\"header-label\">{{ form_label(form_individual.legal_status) }}</div>
          <div class=\"grid\">
            {% for input in form_individual.legal_status %}
              <div class=\"col-4_sm-12\"> 
                {{ form_row(input) }}
              </div>
            {% endfor %}
          </div>
        </div> 
        <br>
        <div class=\"col-12\">
          <div class=\"header-label\">{{ form_label(form_individual.currency_status) }}</div>
          <div class=\"grid\">
            {% for input in form_individual.currency_status %}
              <div class=\"col-4_sm-12\"> 
                {{ form_row(input) }}
              </div>
            {% endfor %}
          </div>
        </div>
        <br>
        <div class=\"col-12\">
          <div class=\"header-label\">{{ form_label(form_individual.facta_status) }}</div>
          <div class=\"grid\">
            {% for input in form_individual.facta_status %}
              <div class=\"col-4_sm-12\"> 
                {{ form_row(input) }}
              </div>
            {% endfor %}
          </div>
        </div>
        <div class=\"col-12\">
          <div class=\"grid\">
            <div id=\"tin-number\" class=\"col-4_sm-12\"> 
              {{ form_label(form_individual.tin_number) }}
              {{ form_errors(form_individual.tin_number) }}
              {{ form_widget(form_individual.tin_number) }}
            </div>
            <div id=\"currency_country\" class=\"col-4_sm-12\"> 
              {{ form_label(form_individual.currency_country) }}
              {{ form_errors(form_individual.currency_country) }}
              {{ form_widget(form_individual.currency_country) }} 
            </div> 
            <div class=\"col-4_sm-12\"> 
              {{ form_label(form_individual.bank_name) }}
              {{ form_errors(form_individual.bank_name) }} 
              {{ form_widget(form_individual.bank_name) }}
            </div>
            <div class=\"col-4_sm-12\"> 
              {{ form_label(form_individual.account_number) }}
              {{ form_errors(form_individual.account_number) }}
              {{ form_widget(form_individual.account_number) }}
            </div>
            
          </div>
        </div> 
        <div class=\"col-12\">
          <div class=\"grid\">
            <div class=\"col-4_sm-12\"> 
              {{ form_label(form_individual.amount) }}
              {{ form_errors(form_individual.amount) }} 
              {{ form_widget(form_individual.amount) }}
            </div>
            <div class=\"col-4_sm-12\"> 
              {{ form_label(form_individual.charge) }}
              {{ form_errors(form_individual.charge) }}
              {{ form_widget(form_individual.charge) }}
            </div>
          </div>
        </div> 
        <div class=\"col-12\">
          <h2>Dane doradcy</h2>
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_individual.counselor_name) }}
          {{ form_errors(form_individual.counselor_name) }}
          {{ form_widget(form_individual.counselor_name) }}
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_individual.counselor_phone) }}
          {{ form_errors(form_individual.counselor_phone) }}
          {{ form_widget(form_individual.counselor_phone) }}
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_individual.counselor_email) }}
          {{ form_errors(form_individual.counselor_email) }}
          {{ form_widget(form_individual.counselor_email) }}
        </div>
        <div class=\"col-8_sm-12\"> 
          {{ form_label(form_individual.counselor_company) }}
          {{ form_errors(form_individual.counselor_company) }}
          {{ form_widget(form_individual.counselor_company) }}
        </div>
        <div class=\"col-12\">
          <h3>Adres placówki firmy</h3>
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_individual.counselor_street) }}
          {{ form_errors(form_individual.counselor_street) }}
          {{ form_widget(form_individual.counselor_street) }}
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_individual.counselor_street_number) }}
          {{ form_errors(form_individual.counselor_street_number) }}
          {{ form_widget(form_individual.counselor_street_number) }}
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_individual.counselor_flat_number) }}
          {{ form_errors(form_individual.counselor_flat_number) }}
          {{ form_widget(form_individual.counselor_flat_number) }}
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_individual.counselor_post_code) }}
          {{ form_errors(form_individual.counselor_post_code) }}
          {{ form_widget(form_individual.counselor_post_code) }}
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_individual.counselor_city) }}
          {{ form_errors(form_individual.counselor_city) }}
          {{ form_widget(form_individual.counselor_city) }}
        </div> 
        <div class=\"col-12\">
          <div class=\"navigation\">
            <div class=\"navigation--right\">
              <a class=\"btn-fill btn-fill--back\" href=\"/\">Wstecz</a>
            </div>
            <div class=\"navigation--left\">
              {{ form_widget(form_individual.save) }}
            </div>
          </div> 
        </div>
      </div>
    </div> 
    <footer class=\"footer\">
      <p class=\"footer__terms\">© 2017 Murapol HRE FIZ AN</p> 
      <a href=\"mailto: zgloszenie@murapolhre.pl\" class=\"footer__mail\">zgloszenie@murapolhre.pl</a> 
    </footer>

  </div>
  {{ form_widget(form_individual.save) }}
  {{ form_end(form_individual) }}
  {% if fileurl %}
    <a href=\"/{{fileurl}}\" class=\"button-fill\">Plik</a>
  {% endif %} 

{% endblock %}

{% block stylesheets %}


{% endblock %}
", "pages/individual.html.twig", "/Library/WebServer/Documents/murapol/app/Resources/views/pages/individual.html.twig");
    }
}
