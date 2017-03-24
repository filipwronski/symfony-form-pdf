<?php

/* pages/institutional.html.twig */
class __TwigTemplate_9536c917be3f31fec5ca36d1505d9397d641958a42ac272fe72340f271aba26a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pages/institutional.html.twig", 1);
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
        $__internal_f265019a4a8f3f7ddf2c837406e0c904ad87667baab83baf161a63d2780892ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f265019a4a8f3f7ddf2c837406e0c904ad87667baab83baf161a63d2780892ce->enter($__internal_f265019a4a8f3f7ddf2c837406e0c904ad87667baab83baf161a63d2780892ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/institutional.html.twig"));

        $__internal_942c787d31bc9025b111dec8c4443c3b427a8de7600892a6505c8ca06a3a81f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_942c787d31bc9025b111dec8c4443c3b427a8de7600892a6505c8ca06a3a81f8->enter($__internal_942c787d31bc9025b111dec8c4443c3b427a8de7600892a6505c8ca06a3a81f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/institutional.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f265019a4a8f3f7ddf2c837406e0c904ad87667baab83baf161a63d2780892ce->leave($__internal_f265019a4a8f3f7ddf2c837406e0c904ad87667baab83baf161a63d2780892ce_prof);

        
        $__internal_942c787d31bc9025b111dec8c4443c3b427a8de7600892a6505c8ca06a3a81f8->leave($__internal_942c787d31bc9025b111dec8c4443c3b427a8de7600892a6505c8ca06a3a81f8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_89b491dbc8c301fac62cb2fc65746ac81e461fbec2ed9b2d4b5d0b0d4a66c5df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89b491dbc8c301fac62cb2fc65746ac81e461fbec2ed9b2d4b5d0b0d4a66c5df->enter($__internal_89b491dbc8c301fac62cb2fc65746ac81e461fbec2ed9b2d4b5d0b0d4a66c5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b0efef0906e047904dc034c6c1f07a8fa20f826490280ea9769db3b4a9fc6e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b0efef0906e047904dc034c6c1f07a8fa20f826490280ea9769db3b4a9fc6e6->enter($__internal_1b0efef0906e047904dc034c6c1f07a8fa20f826490280ea9769db3b4a9fc6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <li>Inwestor</li>
        <li class=\"active\">Formularz</li> 
        <li>Zgody</li>
        <li>Potwierdzenie</li>
      </ul>
    </header>
    <div class=\"form-page\"> 
      <div class=\"form-page__banner form-page__banner--dark\">
        <h1 class=\"form-page__banner__title\"> 
          Dane Klienta Indywidualnego<br><span>(osoba fizyczna)</span>
        </h1>
      </div>
      ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), 'form_start', array("attr" => array("novalidate" => "novalidate", "id" => "form-institutional")));
        echo "  
      <div class=\"grid\">
        <div class=\"col-12\">
          <h2>Wypełnij poprawnie formularz Murapol HRE FIZ AN</h2> 
        </div>
        <div class=\"col-4_sm-12\">
          ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "company_name", array()), 'label');
        echo "
          ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "company_name", array()), 'errors');
        echo "
          ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "company_name", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\">
          ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "company_phone", array()), 'label');
        echo "
          ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "company_phone", array()), 'errors');
        echo "
          ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "company_phone", array()), 'widget');
        echo "
        </div> 
        <div class=\"col-4_sm-12\"> 
          ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "company_mail", array()), 'label');
        echo "
          ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "company_mail", array()), 'errors');
        echo "
          ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "company_mail", array()), 'widget');
        echo "
        </div>

        <div class=\"col-12\">
          <h3>Adres firmy</h3>
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "street", array()), 'label');
        echo "
          ";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "street", array()), 'errors');
        echo "
          ";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "street", array()), 'widget');
        echo " 
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "street_number", array()), 'label');
        echo "
          ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "street_number", array()), 'errors');
        echo "
          ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "street_number", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "flat_number", array()), 'label');
        echo "
          ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "flat_number", array()), 'errors');
        echo "
          ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "flat_number", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "post_code", array()), 'label');
        echo "
          ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "post_code", array()), 'errors');
        echo "
          ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "post_code", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "city", array()), 'label');
        echo "
          ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "city", array()), 'errors');
        echo "
          ";
        // line 69
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "city", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\">
          ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "other_cor", array()), 'label');
        echo "
          ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "other_cor", array()), 'errors');
        echo "
          ";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "other_cor", array()), 'widget');
        echo " 
        </div> 
        <div class=\"col-12 coresponding-address\">
          <div class=\"grid\">
            <div class=\"col-12\">
              <h3>Adres korespondencyjny firmy</h3>
            </div>
            <div class=\"col-4_sm-12\"> 
              ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "cor_street", array()), 'label');
        echo "
              ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "cor_street", array()), 'errors');
        echo "
              ";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "cor_street", array()), 'widget');
        echo "
            </div>
            <div class=\"col-4_sm-12\"> 
              ";
        // line 87
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "cor_street_number", array()), 'label');
        echo "
              ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "cor_street_number", array()), 'errors');
        echo "
              ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "cor_street_number", array()), 'widget');
        echo "
            </div>
            <div class=\"col-4_sm-12\"> 
              ";
        // line 92
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "cor_flat_number", array()), 'label');
        echo "
              ";
        // line 93
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "cor_flat_number", array()), 'errors');
        echo "
              ";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "cor_flat_number", array()), 'widget');
        echo "
            </div>
            <div class=\"col-4_sm-12\"> 
              ";
        // line 97
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "cor_post_code", array()), 'label');
        echo "
              ";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "cor_post_code", array()), 'errors');
        echo "
              ";
        // line 99
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "cor_post_code", array()), 'widget');
        echo "
            </div>
            <div class=\"col-4_sm-12\"> 
              ";
        // line 102
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "cor_city", array()), 'label');
        echo "
              ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "cor_city", array()), 'errors');
        echo "
              ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "cor_city", array()), 'widget');
        echo "
            </div>
          </div>
        </div>
        <div class=\"col-12\"><br></div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 110
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "nip", array()), 'label');
        echo "
          ";
        // line 111
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "nip", array()), 'errors');
        echo "
          ";
        // line 112
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "nip", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 115
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "krs", array()), 'label');
        echo "
          ";
        // line 116
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "krs", array()), 'errors');
        echo "
          ";
        // line 117
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "krs", array()), 'widget');
        echo "
        </div>
        <div class=\"col-12\">
          <div class=\"header-label\">";
        // line 120
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "company_country_check", array()), 'label');
        echo "</div>
          <div class=\"grid\">
            ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "company_country_check", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["input"]) {
            // line 123
            echo "              <div class=\"col-4_sm-12\"> 
                ";
            // line 124
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["input"], 'row');
            echo " 
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['input'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "          </div>
        </div>
        <div class=\"col-12\">
          <div id=\"foregin-company\" class=\"grid\"> 
            <div class=\"col-4_sm-12\"> 
              ";
        // line 132
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "company_country", array()), 'label');
        echo "
              ";
        // line 133
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "company_country", array()), 'errors');
        echo "
              ";
        // line 134
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "company_country", array()), 'widget');
        echo "
            </div>
            <div class=\"col-4_sm-12\"> 
              ";
        // line 137
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "company_number", array()), 'label');
        echo "
              ";
        // line 138
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "company_number", array()), 'errors');
        echo "
              ";
        // line 139
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "company_number", array()), 'widget');
        echo "
            </div> 
          </div>
        </div>
        <div id=\"legal_status_radio\" class=\"col-12\">
          <div class=\"header-label\">";
        // line 144
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "legal_status", array()), 'label');
        echo "</div>
          <div class=\"grid\">
            ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "legal_status", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["input"]) {
            echo " 
              <div class=\"col-4_sm-12\"> 
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
        <div id=\"legal-status\" class=\"col-4_sm-12\"> 
          ";
        // line 154
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "legal_status_name", array()), 'label');
        echo "
          ";
        // line 155
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "legal_status_name", array()), 'errors');
        echo "
          ";
        // line 156
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "legal_status_name", array()), 'widget');
        echo "
        </div> 
        <div class=\"col-12\">
          <div class=\"header-label\">";
        // line 159
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "currency_status", array()), 'label');
        echo "</div>
          <div class=\"grid\">
            ";
        // line 161
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "currency_status", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["input"]) {
            echo " 
              <div class=\"col-4_sm-12\">  
                ";
            // line 163
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["input"], 'row');
            echo " 
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['input'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        echo "          </div>
        </div>  
        <div id=\"currency_country\" class=\"col-4_sm-12\"> 
          ";
        // line 169
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "currency_country", array()), 'label');
        echo "
          ";
        // line 170
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "currency_country", array()), 'errors');
        echo "
          ";
        // line 171
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "currency_country", array()), 'widget');
        echo "
        </div> 
        <div class=\"col-12\"><br></div>
        <div class=\"col-12\">
          <div class=\"grid\">
            <div class=\"col-4_sm-12\"> 
              ";
        // line 177
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "bank_name", array()), 'label');
        echo "
              ";
        // line 178
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "bank_name", array()), 'errors');
        echo " 
              ";
        // line 179
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "bank_name", array()), 'widget');
        echo "
            </div>
            <div class=\"col-4_sm-12\"> 
              ";
        // line 182
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "account_number", array()), 'label');
        echo "
              ";
        // line 183
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "account_number", array()), 'errors');
        echo "
              ";
        // line 184
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "account_number", array()), 'widget');
        echo "
            </div>
          </div> 
        </div> 
        <div class=\"col-12\">
          <div class=\"grid\">
            <div class=\"col-4_sm-12\"> 
              ";
        // line 191
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "amount", array()), 'label');
        echo "
              ";
        // line 192
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "amount", array()), 'errors');
        echo " 
              ";
        // line 193
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "amount", array()), 'widget');
        echo "
            </div>
            <div class=\"col-4_sm-12\"> 
              ";
        // line 196
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "charge", array()), 'label');
        echo "
              ";
        // line 197
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "charge", array()), 'errors');
        echo "
              ";
        // line 198
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "charge", array()), 'widget');
        echo "
            </div>
          </div>
        </div>     
        <div class=\"col-12\">
          <h2>Dane przedstawiciela firmy</h2>
        </div>

        <div class=\"col-4_sm-12\">
          ";
        // line 207
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "representative_name", array()), 'label');
        echo "
          ";
        // line 208
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "representative_name", array()), 'errors');
        echo "
          ";
        // line 209
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "representative_name", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\">
          ";
        // line 212
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "representative_phone", array()), 'label');
        echo "
          ";
        // line 213
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "representative_phone", array()), 'errors');
        echo "
          ";
        // line 214
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "representative_phone", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 217
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "representative_mail", array()), 'label');
        echo "
          ";
        // line 218
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "representative_mail", array()), 'errors');
        echo "
          ";
        // line 219
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "representative_mail", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 222
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "representative_pesel", array()), 'label');
        echo "
          ";
        // line 223
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "representative_pesel", array()), 'errors');
        echo "
          ";
        // line 224
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "representative_pesel", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "representative_id_number", array()), 'label');
        echo "
          ";
        // line 228
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "representative_id_number", array()), 'errors');
        echo "
          ";
        // line 229
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "representative_id_number", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 232
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "representative_nationality", array()), 'label');
        echo "
          ";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "representative_nationality", array()), 'errors');
        echo "
          ";
        // line 234
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "representative_nationality", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 237
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "representative_passport", array()), 'label');
        echo "
          ";
        // line 238
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "representative_passport", array()), 'errors');
        echo "
          ";
        // line 239
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "representative_passport", array()), 'widget');
        echo " 
        </div>
        <div class=\"col-12\">
          <h2>Dane doradcy</h2>
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 245
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "counselor_name", array()), 'label');
        echo "
          ";
        // line 246
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "counselor_name", array()), 'errors');
        echo "
          ";
        // line 247
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "counselor_name", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 250
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "counselor_phone", array()), 'label');
        echo "
          ";
        // line 251
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "counselor_phone", array()), 'errors');
        echo "
          ";
        // line 252
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "counselor_phone", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 255
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "counselor_email", array()), 'label');
        echo "
          ";
        // line 256
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "counselor_email", array()), 'errors');
        echo "
          ";
        // line 257
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "counselor_email", array()), 'widget');
        echo "
        </div>
        <div class=\"col-8_sm-12\"> 
          ";
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "counselor_company", array()), 'label');
        echo "
          ";
        // line 261
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "counselor_company", array()), 'errors');
        echo "
          ";
        // line 262
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "counselor_company", array()), 'widget');
        echo "
        </div>
        <div class=\"col-12\">
          <h3>Adres placówki firmy</h3>
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 268
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "counselor_street", array()), 'label');
        echo "
          ";
        // line 269
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "counselor_street", array()), 'errors');
        echo "
          ";
        // line 270
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "counselor_street", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 273
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "counselor_street_number", array()), 'label');
        echo "
          ";
        // line 274
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "counselor_street_number", array()), 'errors');
        echo "
          ";
        // line 275
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "counselor_street_number", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 278
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "counselor_flat_number", array()), 'label');
        echo "
          ";
        // line 279
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "counselor_flat_number", array()), 'errors');
        echo "
          ";
        // line 280
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "counselor_flat_number", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 283
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "counselor_post_code", array()), 'label');
        echo "
          ";
        // line 284
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "counselor_post_code", array()), 'errors');
        echo "
          ";
        // line 285
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "counselor_post_code", array()), 'widget');
        echo "
        </div>
        <div class=\"col-4_sm-12\"> 
          ";
        // line 288
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "counselor_city", array()), 'label');
        echo "
          ";
        // line 289
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "counselor_city", array()), 'errors');
        echo "
          ";
        // line 290
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "counselor_city", array()), 'widget');
        echo "
        </div>
        <div class=\"col-12\">
          <div class=\"navigation\">
            <div class=\"navigation--right\">
              <a class=\"btn-fill btn-fill--back\" href=\"/\">Wstecz</a>
            </div>
            <div class=\"navigation--left\">
              ";
        // line 298
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "save", array()), 'widget');
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
        // line 310
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), "save", array()), 'widget');
        echo "
  ";
        // line 311
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form_institutional"]) ? $context["form_institutional"] : $this->getContext($context, "form_institutional")), 'form_end');
        echo " 
  ";
        // line 312
        if ((isset($context["fileurl"]) ? $context["fileurl"] : $this->getContext($context, "fileurl"))) {
            // line 313
            echo "    <a href=\"/";
            echo twig_escape_filter($this->env, (isset($context["fileurl"]) ? $context["fileurl"] : $this->getContext($context, "fileurl")), "html", null, true);
            echo "\" class=\"button-fill\">Plik</a>
  ";
        }
        // line 314
        echo " 

";
        
        $__internal_1b0efef0906e047904dc034c6c1f07a8fa20f826490280ea9769db3b4a9fc6e6->leave($__internal_1b0efef0906e047904dc034c6c1f07a8fa20f826490280ea9769db3b4a9fc6e6_prof);

        
        $__internal_89b491dbc8c301fac62cb2fc65746ac81e461fbec2ed9b2d4b5d0b0d4a66c5df->leave($__internal_89b491dbc8c301fac62cb2fc65746ac81e461fbec2ed9b2d4b5d0b0d4a66c5df_prof);

    }

    // line 318
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_820b84b2162fdf52a4f682840585fe9f5fe4d2dd3c3bbee99caecb39230d3394 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_820b84b2162fdf52a4f682840585fe9f5fe4d2dd3c3bbee99caecb39230d3394->enter($__internal_820b84b2162fdf52a4f682840585fe9f5fe4d2dd3c3bbee99caecb39230d3394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3fef991ddca839e6732168c3a47af1173730a460816951f18b109dd8e5559694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fef991ddca839e6732168c3a47af1173730a460816951f18b109dd8e5559694->enter($__internal_3fef991ddca839e6732168c3a47af1173730a460816951f18b109dd8e5559694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 319
        echo "

";
        
        $__internal_3fef991ddca839e6732168c3a47af1173730a460816951f18b109dd8e5559694->leave($__internal_3fef991ddca839e6732168c3a47af1173730a460816951f18b109dd8e5559694_prof);

        
        $__internal_820b84b2162fdf52a4f682840585fe9f5fe4d2dd3c3bbee99caecb39230d3394->leave($__internal_820b84b2162fdf52a4f682840585fe9f5fe4d2dd3c3bbee99caecb39230d3394_prof);

    }

    public function getTemplateName()
    {
        return "pages/institutional.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  812 => 319,  803 => 318,  791 => 314,  785 => 313,  783 => 312,  779 => 311,  775 => 310,  760 => 298,  749 => 290,  745 => 289,  741 => 288,  735 => 285,  731 => 284,  727 => 283,  721 => 280,  717 => 279,  713 => 278,  707 => 275,  703 => 274,  699 => 273,  693 => 270,  689 => 269,  685 => 268,  676 => 262,  672 => 261,  668 => 260,  662 => 257,  658 => 256,  654 => 255,  648 => 252,  644 => 251,  640 => 250,  634 => 247,  630 => 246,  626 => 245,  617 => 239,  613 => 238,  609 => 237,  603 => 234,  599 => 233,  595 => 232,  589 => 229,  585 => 228,  581 => 227,  575 => 224,  571 => 223,  567 => 222,  561 => 219,  557 => 218,  553 => 217,  547 => 214,  543 => 213,  539 => 212,  533 => 209,  529 => 208,  525 => 207,  513 => 198,  509 => 197,  505 => 196,  499 => 193,  495 => 192,  491 => 191,  481 => 184,  477 => 183,  473 => 182,  467 => 179,  463 => 178,  459 => 177,  450 => 171,  446 => 170,  442 => 169,  437 => 166,  428 => 163,  421 => 161,  416 => 159,  410 => 156,  406 => 155,  402 => 154,  397 => 151,  388 => 148,  381 => 146,  376 => 144,  368 => 139,  364 => 138,  360 => 137,  354 => 134,  350 => 133,  346 => 132,  339 => 127,  330 => 124,  327 => 123,  323 => 122,  318 => 120,  312 => 117,  308 => 116,  304 => 115,  298 => 112,  294 => 111,  290 => 110,  281 => 104,  277 => 103,  273 => 102,  267 => 99,  263 => 98,  259 => 97,  253 => 94,  249 => 93,  245 => 92,  239 => 89,  235 => 88,  231 => 87,  225 => 84,  221 => 83,  217 => 82,  206 => 74,  202 => 73,  198 => 72,  192 => 69,  188 => 68,  184 => 67,  178 => 64,  174 => 63,  170 => 62,  164 => 59,  160 => 58,  156 => 57,  150 => 54,  146 => 53,  142 => 52,  136 => 49,  132 => 48,  128 => 47,  118 => 40,  114 => 39,  110 => 38,  104 => 35,  100 => 34,  96 => 33,  90 => 30,  86 => 29,  82 => 28,  73 => 22,  55 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
        <li>Inwestor</li>
        <li class=\"active\">Formularz</li> 
        <li>Zgody</li>
        <li>Potwierdzenie</li>
      </ul>
    </header>
    <div class=\"form-page\"> 
      <div class=\"form-page__banner form-page__banner--dark\">
        <h1 class=\"form-page__banner__title\"> 
          Dane Klienta Indywidualnego<br><span>(osoba fizyczna)</span>
        </h1>
      </div>
      {{ form_start(form_institutional, {'attr': {'novalidate': 'novalidate','id': 'form-institutional'}}) }}  
      <div class=\"grid\">
        <div class=\"col-12\">
          <h2>Wypełnij poprawnie formularz Murapol HRE FIZ AN</h2> 
        </div>
        <div class=\"col-4_sm-12\">
          {{ form_label(form_institutional.company_name) }}
          {{ form_errors(form_institutional.company_name) }}
          {{ form_widget(form_institutional.company_name) }}
        </div>
        <div class=\"col-4_sm-12\">
          {{ form_label(form_institutional.company_phone) }}
          {{ form_errors(form_institutional.company_phone) }}
          {{ form_widget(form_institutional.company_phone) }}
        </div> 
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_institutional.company_mail) }}
          {{ form_errors(form_institutional.company_mail) }}
          {{ form_widget(form_institutional.company_mail) }}
        </div>

        <div class=\"col-12\">
          <h3>Adres firmy</h3>
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_institutional.street) }}
          {{ form_errors(form_institutional.street) }}
          {{ form_widget(form_institutional.street) }} 
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_institutional.street_number) }}
          {{ form_errors(form_institutional.street_number) }}
          {{ form_widget(form_institutional.street_number) }}
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_institutional.flat_number) }}
          {{ form_errors(form_institutional.flat_number) }}
          {{ form_widget(form_institutional.flat_number) }}
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_institutional.post_code) }}
          {{ form_errors(form_institutional.post_code) }}
          {{ form_widget(form_institutional.post_code) }}
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_institutional.city) }}
          {{ form_errors(form_institutional.city) }}
          {{ form_widget(form_institutional.city) }}
        </div>
        <div class=\"col-4_sm-12\">
          {{ form_label(form_institutional.other_cor) }}
          {{ form_errors(form_institutional.other_cor) }}
          {{ form_widget(form_institutional.other_cor) }} 
        </div> 
        <div class=\"col-12 coresponding-address\">
          <div class=\"grid\">
            <div class=\"col-12\">
              <h3>Adres korespondencyjny firmy</h3>
            </div>
            <div class=\"col-4_sm-12\"> 
              {{ form_label(form_institutional.cor_street) }}
              {{ form_errors(form_institutional.cor_street) }}
              {{ form_widget(form_institutional.cor_street) }}
            </div>
            <div class=\"col-4_sm-12\"> 
              {{ form_label(form_institutional.cor_street_number) }}
              {{ form_errors(form_institutional.cor_street_number) }}
              {{ form_widget(form_institutional.cor_street_number) }}
            </div>
            <div class=\"col-4_sm-12\"> 
              {{ form_label(form_institutional.cor_flat_number) }}
              {{ form_errors(form_institutional.cor_flat_number) }}
              {{ form_widget(form_institutional.cor_flat_number) }}
            </div>
            <div class=\"col-4_sm-12\"> 
              {{ form_label(form_institutional.cor_post_code) }}
              {{ form_errors(form_institutional.cor_post_code) }}
              {{ form_widget(form_institutional.cor_post_code) }}
            </div>
            <div class=\"col-4_sm-12\"> 
              {{ form_label(form_institutional.cor_city) }}
              {{ form_errors(form_institutional.cor_city) }}
              {{ form_widget(form_institutional.cor_city) }}
            </div>
          </div>
        </div>
        <div class=\"col-12\"><br></div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_institutional.nip) }}
          {{ form_errors(form_institutional.nip) }}
          {{ form_widget(form_institutional.nip) }}
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_institutional.krs) }}
          {{ form_errors(form_institutional.krs) }}
          {{ form_widget(form_institutional.krs) }}
        </div>
        <div class=\"col-12\">
          <div class=\"header-label\">{{ form_label(form_institutional.company_country_check) }}</div>
          <div class=\"grid\">
            {% for input in form_institutional.company_country_check %}
              <div class=\"col-4_sm-12\"> 
                {{ form_row(input) }} 
              </div>
            {% endfor %}
          </div>
        </div>
        <div class=\"col-12\">
          <div id=\"foregin-company\" class=\"grid\"> 
            <div class=\"col-4_sm-12\"> 
              {{ form_label(form_institutional.company_country) }}
              {{ form_errors(form_institutional.company_country) }}
              {{ form_widget(form_institutional.company_country) }}
            </div>
            <div class=\"col-4_sm-12\"> 
              {{ form_label(form_institutional.company_number) }}
              {{ form_errors(form_institutional.company_number) }}
              {{ form_widget(form_institutional.company_number) }}
            </div> 
          </div>
        </div>
        <div id=\"legal_status_radio\" class=\"col-12\">
          <div class=\"header-label\">{{ form_label(form_institutional.legal_status) }}</div>
          <div class=\"grid\">
            {% for input in form_institutional.legal_status %} 
              <div class=\"col-4_sm-12\"> 
                {{ form_row(input) }} 
              </div>
            {% endfor %}
          </div>
        </div>
        <div id=\"legal-status\" class=\"col-4_sm-12\"> 
          {{ form_label(form_institutional.legal_status_name) }}
          {{ form_errors(form_institutional.legal_status_name) }}
          {{ form_widget(form_institutional.legal_status_name) }}
        </div> 
        <div class=\"col-12\">
          <div class=\"header-label\">{{ form_label(form_institutional.currency_status) }}</div>
          <div class=\"grid\">
            {% for input in form_institutional.currency_status %} 
              <div class=\"col-4_sm-12\">  
                {{ form_row(input) }} 
              </div>
            {% endfor %}
          </div>
        </div>  
        <div id=\"currency_country\" class=\"col-4_sm-12\"> 
          {{ form_label(form_institutional.currency_country) }}
          {{ form_errors(form_institutional.currency_country) }}
          {{ form_widget(form_institutional.currency_country) }}
        </div> 
        <div class=\"col-12\"><br></div>
        <div class=\"col-12\">
          <div class=\"grid\">
            <div class=\"col-4_sm-12\"> 
              {{ form_label(form_institutional.bank_name) }}
              {{ form_errors(form_institutional.bank_name) }} 
              {{ form_widget(form_institutional.bank_name) }}
            </div>
            <div class=\"col-4_sm-12\"> 
              {{ form_label(form_institutional.account_number) }}
              {{ form_errors(form_institutional.account_number) }}
              {{ form_widget(form_institutional.account_number) }}
            </div>
          </div> 
        </div> 
        <div class=\"col-12\">
          <div class=\"grid\">
            <div class=\"col-4_sm-12\"> 
              {{ form_label(form_institutional.amount) }}
              {{ form_errors(form_institutional.amount) }} 
              {{ form_widget(form_institutional.amount) }}
            </div>
            <div class=\"col-4_sm-12\"> 
              {{ form_label(form_institutional.charge) }}
              {{ form_errors(form_institutional.charge) }}
              {{ form_widget(form_institutional.charge) }}
            </div>
          </div>
        </div>     
        <div class=\"col-12\">
          <h2>Dane przedstawiciela firmy</h2>
        </div>

        <div class=\"col-4_sm-12\">
          {{ form_label(form_institutional.representative_name) }}
          {{ form_errors(form_institutional.representative_name) }}
          {{ form_widget(form_institutional.representative_name) }}
        </div>
        <div class=\"col-4_sm-12\">
          {{ form_label(form_institutional.representative_phone) }}
          {{ form_errors(form_institutional.representative_phone) }}
          {{ form_widget(form_institutional.representative_phone) }}
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_institutional.representative_mail) }}
          {{ form_errors(form_institutional.representative_mail) }}
          {{ form_widget(form_institutional.representative_mail) }}
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_institutional.representative_pesel) }}
          {{ form_errors(form_institutional.representative_pesel) }}
          {{ form_widget(form_institutional.representative_pesel) }}
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_institutional.representative_id_number) }}
          {{ form_errors(form_institutional.representative_id_number) }}
          {{ form_widget(form_institutional.representative_id_number) }}
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_institutional.representative_nationality) }}
          {{ form_errors(form_institutional.representative_nationality) }}
          {{ form_widget(form_institutional.representative_nationality) }}
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_institutional.representative_passport) }}
          {{ form_errors(form_institutional.representative_passport) }}
          {{ form_widget(form_institutional.representative_passport) }} 
        </div>
        <div class=\"col-12\">
          <h2>Dane doradcy</h2>
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_institutional.counselor_name) }}
          {{ form_errors(form_institutional.counselor_name) }}
          {{ form_widget(form_institutional.counselor_name) }}
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_institutional.counselor_phone) }}
          {{ form_errors(form_institutional.counselor_phone) }}
          {{ form_widget(form_institutional.counselor_phone) }}
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_institutional.counselor_email) }}
          {{ form_errors(form_institutional.counselor_email) }}
          {{ form_widget(form_institutional.counselor_email) }}
        </div>
        <div class=\"col-8_sm-12\"> 
          {{ form_label(form_institutional.counselor_company) }}
          {{ form_errors(form_institutional.counselor_company) }}
          {{ form_widget(form_institutional.counselor_company) }}
        </div>
        <div class=\"col-12\">
          <h3>Adres placówki firmy</h3>
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_institutional.counselor_street) }}
          {{ form_errors(form_institutional.counselor_street) }}
          {{ form_widget(form_institutional.counselor_street) }}
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_institutional.counselor_street_number) }}
          {{ form_errors(form_institutional.counselor_street_number) }}
          {{ form_widget(form_institutional.counselor_street_number) }}
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_institutional.counselor_flat_number) }}
          {{ form_errors(form_institutional.counselor_flat_number) }}
          {{ form_widget(form_institutional.counselor_flat_number) }}
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_institutional.counselor_post_code) }}
          {{ form_errors(form_institutional.counselor_post_code) }}
          {{ form_widget(form_institutional.counselor_post_code) }}
        </div>
        <div class=\"col-4_sm-12\"> 
          {{ form_label(form_institutional.counselor_city) }}
          {{ form_errors(form_institutional.counselor_city) }}
          {{ form_widget(form_institutional.counselor_city) }}
        </div>
        <div class=\"col-12\">
          <div class=\"navigation\">
            <div class=\"navigation--right\">
              <a class=\"btn-fill btn-fill--back\" href=\"/\">Wstecz</a>
            </div>
            <div class=\"navigation--left\">
              {{ form_widget(form_institutional.save) }}
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
  {{ form_widget(form_institutional.save) }}
  {{ form_end(form_institutional) }} 
  {% if fileurl %}
    <a href=\"/{{fileurl}}\" class=\"button-fill\">Plik</a>
  {% endif %} 

{% endblock %}

{% block stylesheets %}


{% endblock %}", "pages/institutional.html.twig", "/Library/WebServer/Documents/murapol/app/Resources/views/pages/institutional.html.twig");
    }
}
