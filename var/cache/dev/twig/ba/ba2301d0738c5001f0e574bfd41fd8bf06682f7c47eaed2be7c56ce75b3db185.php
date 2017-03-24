<?php

/* pages/business.html.twig */
class __TwigTemplate_538cc9f8d89501a892396ac0bbc6324548aff1fadc5014e7fc8d4c1c3d9392cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pages/business.html.twig", 1);
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
        $__internal_b5e63d076e1e8741f76f14688e081fd2d46116441ed0586624ba38ba67d891a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5e63d076e1e8741f76f14688e081fd2d46116441ed0586624ba38ba67d891a3->enter($__internal_b5e63d076e1e8741f76f14688e081fd2d46116441ed0586624ba38ba67d891a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/business.html.twig"));

        $__internal_58ca4bd283ae6722fc6b7ca857088043a606e57077e62727bad8677d63962940 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ca4bd283ae6722fc6b7ca857088043a606e57077e62727bad8677d63962940->enter($__internal_58ca4bd283ae6722fc6b7ca857088043a606e57077e62727bad8677d63962940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pages/business.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5e63d076e1e8741f76f14688e081fd2d46116441ed0586624ba38ba67d891a3->leave($__internal_b5e63d076e1e8741f76f14688e081fd2d46116441ed0586624ba38ba67d891a3_prof);

        
        $__internal_58ca4bd283ae6722fc6b7ca857088043a606e57077e62727bad8677d63962940->leave($__internal_58ca4bd283ae6722fc6b7ca857088043a606e57077e62727bad8677d63962940_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_518d540140854a80e12ccc50c64d89a07dd8986273c1ec6d50ccd3f0610062c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_518d540140854a80e12ccc50c64d89a07dd8986273c1ec6d50ccd3f0610062c9->enter($__internal_518d540140854a80e12ccc50c64d89a07dd8986273c1ec6d50ccd3f0610062c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_705c5c5382eb151d39dc8876f118636143c7344ce276edfeaccc60a51c238a96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_705c5c5382eb151d39dc8876f118636143c7344ce276edfeaccc60a51c238a96->enter($__internal_705c5c5382eb151d39dc8876f118636143c7344ce276edfeaccc60a51c238a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <div class=\"form-page\">
    ";
        // line 5
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"grid\">
      <div class=\"col-12\">
        <h2>Wypełnij poprawnie formularz Murapol HRE FIZ AN</h2>
      </div>
      <div class=\"col-4_sm-12\">
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
      </div>
      <div class=\"col-4_sm-12\">
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'label');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'errors');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget');
        echo "
      </div> 
      <div class=\"col-4_sm-12\"> 
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'label');
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'errors');
        echo "
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mail", array()), 'widget');
        echo "
      </div>

      <div class=\"col-12\">
        <h3>Adres zamieszkania</h3>
      </div>
      <div class=\"col-4_sm-12\"> 
        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "street", array()), 'label');
        echo "
        ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "street", array()), 'errors');
        echo "
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "street", array()), 'widget');
        echo " 
      </div>
      <div class=\"col-4_sm-12\"> 
        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "street_number", array()), 'label');
        echo "
        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "street_number", array()), 'errors');
        echo "
        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "street_number", array()), 'widget');
        echo "
      </div>
      <div class=\"col-4_sm-12\"> 
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "flat_number", array()), 'label');
        echo "
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "flat_number", array()), 'errors');
        echo "
        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "flat_number", array()), 'widget');
        echo "
      </div>
      <div class=\"col-4_sm-12\"> 
        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "post_code", array()), 'label');
        echo "
        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "post_code", array()), 'errors');
        echo "
        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "post_code", array()), 'widget');
        echo "
      </div>
      <div class=\"col-4_sm-12\"> 
        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), 'label');
        echo "
        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), 'errors');
        echo "
        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), 'widget');
        echo "
      </div>
      <div class=\"col-12\"><br></div>
      <div class=\"col-4_sm-12\"> 
        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cor_street", array()), 'label');
        echo "
        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cor_street", array()), 'errors');
        echo "
        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cor_street", array()), 'widget');
        echo "
      </div>
      <div class=\"col-4_sm-12\"> 
        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cor_street_number", array()), 'label');
        echo "
        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cor_street_number", array()), 'errors');
        echo "
        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cor_street_number", array()), 'widget');
        echo "
      </div>
      <div class=\"col-4_sm-12\"> 
        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cor_flat_number", array()), 'label');
        echo "
        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cor_flat_number", array()), 'errors');
        echo "
        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cor_flat_number", array()), 'widget');
        echo "
      </div>
      <div class=\"col-4_sm-12\"> 
        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cor_post_code", array()), 'label');
        echo "
        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cor_post_code", array()), 'errors');
        echo "
        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cor_post_code", array()), 'widget');
        echo "
      </div>
      <div class=\"col-4_sm-12\"> 
        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cor_city", array()), 'label');
        echo "
        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cor_city", array()), 'errors');
        echo "
        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cor_city", array()), 'widget');
        echo "
      </div>
      <div class=\"col-12\"><br></div>

      <div class=\"col-4_sm-12\"> 
        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id_number", array()), 'label');
        echo "
        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id_number", array()), 'errors');
        echo "
        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id_number", array()), 'widget');
        echo "
      </div>
      <div class=\"col-4_sm-12\"> 
        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id_expiration", array()), 'label');
        echo "
        ";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id_expiration", array()), 'errors');
        echo "
        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id_expiration", array()), 'widget');
        echo "
      </div>
      <div class=\"col-4_sm-12\"> 
        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nationality", array()), 'label');
        echo "
        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nationality", array()), 'errors');
        echo "
        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nationality", array()), 'widget');
        echo "
      </div>
      <div class=\"col-4_sm-12\"> 
        ";
        // line 98
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pesel", array()), 'label');
        echo "
        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pesel", array()), 'errors');
        echo "
        ";
        // line 100
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pesel", array()), 'widget');
        echo "
      </div>
      <div class=\"col-4_sm-12\"> 
        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birth_date", array()), 'label');
        echo "
        ";
        // line 104
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birth_date", array()), 'errors');
        echo "
        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birth_date", array()), 'widget');
        echo "
      </div>
      <div class=\"col-4_sm-12\"> 
        ";
        // line 108
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birth_country", array()), 'label');
        echo "
        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birth_country", array()), 'errors');
        echo "
        ";
        // line 110
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "birth_country", array()), 'widget');
        echo "
      </div> 
      <div class=\"col-12\"><br></div>
      <div class=\"col-12\">
        <div class=\"header-label\">";
        // line 114
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "legal_status", array()), 'label');
        echo "</div>
        <div class=\"grid\">
          ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "legal_status", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["input"]) {
            // line 117
            echo "            <div class=\"col-4_sm-12\"> 
              ";
            // line 118
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["input"], 'row');
            echo "
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['input'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "        </div>
      </div> 
      <br>
      <div class=\"col-12\">
        <div class=\"header-label\">";
        // line 125
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "currency_status", array()), 'label');
        echo "</div>
        <div class=\"grid\">
          ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "currency_status", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["input"]) {
            // line 128
            echo "            <div class=\"col-4_sm-12\"> 
              ";
            // line 129
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["input"], 'row');
            echo "
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['input'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "        </div>
      </div>
      <br>
      <div class=\"col-12\">
        <div class=\"header-label\">";
        // line 136
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "facta_status", array()), 'label');
        echo "</div>
        <div class=\"grid\">
          ";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "facta_status", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["input"]) {
            // line 139
            echo "            <div class=\"col-4_sm-12\"> 
              ";
            // line 140
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["input"], 'row');
            echo "
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['input'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "        </div>
      </div>
      <div class=\"col-12\">
        <div class=\"grid\">
          <div class=\"col-4_sm-12\"> 
            ";
        // line 148
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bank_name", array()), 'label');
        echo "
            ";
        // line 149
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bank_name", array()), 'errors');
        echo " 
            ";
        // line 150
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bank_name", array()), 'widget');
        echo "
          </div>
          <div class=\"col-4_sm-12\"> 
            ";
        // line 153
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "account_number", array()), 'label');
        echo "
            ";
        // line 154
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "account_number", array()), 'errors');
        echo "
            ";
        // line 155
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "account_number", array()), 'widget');
        echo "
          </div>
          <div class=\"col-4_sm-12\"> 
            ";
        // line 158
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tin_number", array()), 'label');
        echo "
            ";
        // line 159
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tin_number", array()), 'errors');
        echo "
            ";
        // line 160
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tin_number", array()), 'widget');
        echo "
          </div>
        </div>
      </div> 
      <div class=\"col-12\">
        <div class=\"grid\">
          <div class=\"col-4_sm-12\"> 
            ";
        // line 167
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "amount", array()), 'label');
        echo "
            ";
        // line 168
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "amount", array()), 'errors');
        echo " 
            ";
        // line 169
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "amount", array()), 'widget');
        echo "
          </div>
          <div class=\"col-4_sm-12\"> 
            ";
        // line 172
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "charge", array()), 'label');
        echo "
            ";
        // line 173
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "charge", array()), 'errors');
        echo "
            ";
        // line 174
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "charge", array()), 'widget');
        echo "
          </div>
        </div>
      </div> 
      <div class=\"col-12\">
        <h2>Dane doradcy</h2>
      </div>
      <div class=\"col-4_sm-12\"> 
        ";
        // line 182
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "counselor_name", array()), 'label');
        echo "
        ";
        // line 183
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "counselor_name", array()), 'errors');
        echo "
        ";
        // line 184
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "counselor_name", array()), 'widget');
        echo "
      </div>
      <div class=\"col-4_sm-12\"> 
        ";
        // line 187
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "counselor_phone", array()), 'label');
        echo "
        ";
        // line 188
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "counselor_phone", array()), 'errors');
        echo "
        ";
        // line 189
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "counselor_phone", array()), 'widget');
        echo "
      </div>
      <div class=\"col-4_sm-12\"> 
        ";
        // line 192
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "counselor_email", array()), 'label');
        echo "
        ";
        // line 193
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "counselor_email", array()), 'errors');
        echo "
        ";
        // line 194
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "counselor_email", array()), 'widget');
        echo "
      </div>
      <div class=\"col-8_sm-12\"> 
        ";
        // line 197
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "counselor_company", array()), 'label');
        echo "
        ";
        // line 198
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "counselor_company", array()), 'errors');
        echo "
        ";
        // line 199
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "counselor_company", array()), 'widget');
        echo "
      </div>
      <div class=\"col-12\">
        <h3>Adres placówki firmy</h3>
      </div>
      <div class=\"col-4_sm-12\"> 
        ";
        // line 205
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "counselor_street", array()), 'label');
        echo "
        ";
        // line 206
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "counselor_street", array()), 'errors');
        echo "
        ";
        // line 207
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "counselor_street", array()), 'widget');
        echo "
      </div>
      <div class=\"col-4_sm-12\"> 
        ";
        // line 210
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "counselor_street_number", array()), 'label');
        echo "
        ";
        // line 211
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "counselor_street_number", array()), 'errors');
        echo "
        ";
        // line 212
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "counselor_street_number", array()), 'widget');
        echo "
      </div>
      <div class=\"col-4_sm-12\"> 
        ";
        // line 215
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "counselor_flat_number", array()), 'label');
        echo "
        ";
        // line 216
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "counselor_flat_number", array()), 'errors');
        echo "
        ";
        // line 217
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "counselor_flat_number", array()), 'widget');
        echo "
      </div>
      <div class=\"col-4_sm-12\"> 
        ";
        // line 220
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "counselor_post_code", array()), 'label');
        echo "
        ";
        // line 221
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "counselor_post_code", array()), 'errors');
        echo "
        ";
        // line 222
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "counselor_post_code", array()), 'widget');
        echo "
      </div>
      <div class=\"col-4_sm-12\"> 
        ";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "counselor_city", array()), 'label');
        echo "
        ";
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "counselor_city", array()), 'errors');
        echo "
        ";
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "counselor_city", array()), 'widget');
        echo "
      </div>
      <div class=\"col-12\">
        <div class=\"navigation\">
          <div class=\"navigation--right\">
            <a class=\"btn-fill btn-fill--back\" href=\"/\">Wstecz</a>
          </div>
          <div class=\"navigation--left\">
            ";
        // line 235
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
          </div>
        </div> 
      </div>
    </div>
    ";
        // line 240
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
    ";
        // line 241
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    ";
        // line 242
        if ((isset($context["fileurl"]) ? $context["fileurl"] : $this->getContext($context, "fileurl"))) {
            // line 243
            echo "      <a href=\"/";
            echo twig_escape_filter($this->env, (isset($context["fileurl"]) ? $context["fileurl"] : $this->getContext($context, "fileurl")), "html", null, true);
            echo "\" class=\"button-fill\">Plik</a>
    ";
        }
        // line 244
        echo " 

  ";
        
        $__internal_705c5c5382eb151d39dc8876f118636143c7344ce276edfeaccc60a51c238a96->leave($__internal_705c5c5382eb151d39dc8876f118636143c7344ce276edfeaccc60a51c238a96_prof);

        
        $__internal_518d540140854a80e12ccc50c64d89a07dd8986273c1ec6d50ccd3f0610062c9->leave($__internal_518d540140854a80e12ccc50c64d89a07dd8986273c1ec6d50ccd3f0610062c9_prof);

    }

    // line 248
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7dcf2bd384f7ce54674259d6bce91696abf85f73f16bafb2e9207e7901e44c2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dcf2bd384f7ce54674259d6bce91696abf85f73f16bafb2e9207e7901e44c2b->enter($__internal_7dcf2bd384f7ce54674259d6bce91696abf85f73f16bafb2e9207e7901e44c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b2e680cbd74f7a634b944f3ff4b86e1d70cb8c3eb16b57bfc81f4e8bb4b56344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e680cbd74f7a634b944f3ff4b86e1d70cb8c3eb16b57bfc81f4e8bb4b56344->enter($__internal_b2e680cbd74f7a634b944f3ff4b86e1d70cb8c3eb16b57bfc81f4e8bb4b56344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 249
        echo "

  ";
        
        $__internal_b2e680cbd74f7a634b944f3ff4b86e1d70cb8c3eb16b57bfc81f4e8bb4b56344->leave($__internal_b2e680cbd74f7a634b944f3ff4b86e1d70cb8c3eb16b57bfc81f4e8bb4b56344_prof);

        
        $__internal_7dcf2bd384f7ce54674259d6bce91696abf85f73f16bafb2e9207e7901e44c2b->leave($__internal_7dcf2bd384f7ce54674259d6bce91696abf85f73f16bafb2e9207e7901e44c2b_prof);

    }

    public function getTemplateName()
    {
        return "pages/business.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  676 => 249,  667 => 248,  655 => 244,  649 => 243,  647 => 242,  643 => 241,  639 => 240,  631 => 235,  620 => 227,  616 => 226,  612 => 225,  606 => 222,  602 => 221,  598 => 220,  592 => 217,  588 => 216,  584 => 215,  578 => 212,  574 => 211,  570 => 210,  564 => 207,  560 => 206,  556 => 205,  547 => 199,  543 => 198,  539 => 197,  533 => 194,  529 => 193,  525 => 192,  519 => 189,  515 => 188,  511 => 187,  505 => 184,  501 => 183,  497 => 182,  486 => 174,  482 => 173,  478 => 172,  472 => 169,  468 => 168,  464 => 167,  454 => 160,  450 => 159,  446 => 158,  440 => 155,  436 => 154,  432 => 153,  426 => 150,  422 => 149,  418 => 148,  411 => 143,  402 => 140,  399 => 139,  395 => 138,  390 => 136,  384 => 132,  375 => 129,  372 => 128,  368 => 127,  363 => 125,  357 => 121,  348 => 118,  345 => 117,  341 => 116,  336 => 114,  329 => 110,  325 => 109,  321 => 108,  315 => 105,  311 => 104,  307 => 103,  301 => 100,  297 => 99,  293 => 98,  287 => 95,  283 => 94,  279 => 93,  273 => 90,  269 => 89,  265 => 88,  259 => 85,  255 => 84,  251 => 83,  243 => 78,  239 => 77,  235 => 76,  229 => 73,  225 => 72,  221 => 71,  215 => 68,  211 => 67,  207 => 66,  201 => 63,  197 => 62,  193 => 61,  187 => 58,  183 => 57,  179 => 56,  172 => 52,  168 => 51,  164 => 50,  158 => 47,  154 => 46,  150 => 45,  144 => 42,  140 => 41,  136 => 40,  130 => 37,  126 => 36,  122 => 35,  116 => 32,  112 => 31,  108 => 30,  98 => 23,  94 => 22,  90 => 21,  84 => 18,  80 => 17,  76 => 16,  70 => 13,  66 => 12,  62 => 11,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
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
  <div class=\"form-page\">
    {{ form_start(form) }}
    <div class=\"grid\">
      <div class=\"col-12\">
        <h2>Wypełnij poprawnie formularz Murapol HRE FIZ AN</h2>
      </div>
      <div class=\"col-4_sm-12\">
        {{ form_label(form.name) }}
        {{ form_errors(form.name) }}
        {{ form_widget(form.name) }}
      </div>
      <div class=\"col-4_sm-12\">
        {{ form_label(form.phone) }}
        {{ form_errors(form.phone) }}
        {{ form_widget(form.phone) }}
      </div> 
      <div class=\"col-4_sm-12\"> 
        {{ form_label(form.mail) }}
        {{ form_errors(form.mail) }}
        {{ form_widget(form.mail) }}
      </div>

      <div class=\"col-12\">
        <h3>Adres zamieszkania</h3>
      </div>
      <div class=\"col-4_sm-12\"> 
        {{ form_label(form.street) }}
        {{ form_errors(form.street) }}
        {{ form_widget(form.street) }} 
      </div>
      <div class=\"col-4_sm-12\"> 
        {{ form_label(form.street_number) }}
        {{ form_errors(form.street_number) }}
        {{ form_widget(form.street_number) }}
      </div>
      <div class=\"col-4_sm-12\"> 
        {{ form_label(form.flat_number) }}
        {{ form_errors(form.flat_number) }}
        {{ form_widget(form.flat_number) }}
      </div>
      <div class=\"col-4_sm-12\"> 
        {{ form_label(form.post_code) }}
        {{ form_errors(form.post_code) }}
        {{ form_widget(form.post_code) }}
      </div>
      <div class=\"col-4_sm-12\"> 
        {{ form_label(form.city) }}
        {{ form_errors(form.city) }}
        {{ form_widget(form.city) }}
      </div>
      <div class=\"col-12\"><br></div>
      <div class=\"col-4_sm-12\"> 
        {{ form_label(form.cor_street) }}
        {{ form_errors(form.cor_street) }}
        {{ form_widget(form.cor_street) }}
      </div>
      <div class=\"col-4_sm-12\"> 
        {{ form_label(form.cor_street_number) }}
        {{ form_errors(form.cor_street_number) }}
        {{ form_widget(form.cor_street_number) }}
      </div>
      <div class=\"col-4_sm-12\"> 
        {{ form_label(form.cor_flat_number) }}
        {{ form_errors(form.cor_flat_number) }}
        {{ form_widget(form.cor_flat_number) }}
      </div>
      <div class=\"col-4_sm-12\"> 
        {{ form_label(form.cor_post_code) }}
        {{ form_errors(form.cor_post_code) }}
        {{ form_widget(form.cor_post_code) }}
      </div>
      <div class=\"col-4_sm-12\"> 
        {{ form_label(form.cor_city) }}
        {{ form_errors(form.cor_city) }}
        {{ form_widget(form.cor_city) }}
      </div>
      <div class=\"col-12\"><br></div>

      <div class=\"col-4_sm-12\"> 
        {{ form_label(form.id_number) }}
        {{ form_errors(form.id_number) }}
        {{ form_widget(form.id_number) }}
      </div>
      <div class=\"col-4_sm-12\"> 
        {{ form_label(form.id_expiration) }}
        {{ form_errors(form.id_expiration) }}
        {{ form_widget(form.id_expiration) }}
      </div>
      <div class=\"col-4_sm-12\"> 
        {{ form_label(form.nationality) }}
        {{ form_errors(form.nationality) }}
        {{ form_widget(form.nationality) }}
      </div>
      <div class=\"col-4_sm-12\"> 
        {{ form_label(form.pesel) }}
        {{ form_errors(form.pesel) }}
        {{ form_widget(form.pesel) }}
      </div>
      <div class=\"col-4_sm-12\"> 
        {{ form_label(form.birth_date) }}
        {{ form_errors(form.birth_date) }}
        {{ form_widget(form.birth_date) }}
      </div>
      <div class=\"col-4_sm-12\"> 
        {{ form_label(form.birth_country) }}
        {{ form_errors(form.birth_country) }}
        {{ form_widget(form.birth_country) }}
      </div> 
      <div class=\"col-12\"><br></div>
      <div class=\"col-12\">
        <div class=\"header-label\">{{ form_label(form.legal_status) }}</div>
        <div class=\"grid\">
          {% for input in form.legal_status %}
            <div class=\"col-4_sm-12\"> 
              {{ form_row(input) }}
            </div>
          {% endfor %}
        </div>
      </div> 
      <br>
      <div class=\"col-12\">
        <div class=\"header-label\">{{ form_label(form.currency_status) }}</div>
        <div class=\"grid\">
          {% for input in form.currency_status %}
            <div class=\"col-4_sm-12\"> 
              {{ form_row(input) }}
            </div>
          {% endfor %}
        </div>
      </div>
      <br>
      <div class=\"col-12\">
        <div class=\"header-label\">{{ form_label(form.facta_status) }}</div>
        <div class=\"grid\">
          {% for input in form.facta_status %}
            <div class=\"col-4_sm-12\"> 
              {{ form_row(input) }}
            </div>
          {% endfor %}
        </div>
      </div>
      <div class=\"col-12\">
        <div class=\"grid\">
          <div class=\"col-4_sm-12\"> 
            {{ form_label(form.bank_name) }}
            {{ form_errors(form.bank_name) }} 
            {{ form_widget(form.bank_name) }}
          </div>
          <div class=\"col-4_sm-12\"> 
            {{ form_label(form.account_number) }}
            {{ form_errors(form.account_number) }}
            {{ form_widget(form.account_number) }}
          </div>
          <div class=\"col-4_sm-12\"> 
            {{ form_label(form.tin_number) }}
            {{ form_errors(form.tin_number) }}
            {{ form_widget(form.tin_number) }}
          </div>
        </div>
      </div> 
      <div class=\"col-12\">
        <div class=\"grid\">
          <div class=\"col-4_sm-12\"> 
            {{ form_label(form.amount) }}
            {{ form_errors(form.amount) }} 
            {{ form_widget(form.amount) }}
          </div>
          <div class=\"col-4_sm-12\"> 
            {{ form_label(form.charge) }}
            {{ form_errors(form.charge) }}
            {{ form_widget(form.charge) }}
          </div>
        </div>
      </div> 
      <div class=\"col-12\">
        <h2>Dane doradcy</h2>
      </div>
      <div class=\"col-4_sm-12\"> 
        {{ form_label(form.counselor_name) }}
        {{ form_errors(form.counselor_name) }}
        {{ form_widget(form.counselor_name) }}
      </div>
      <div class=\"col-4_sm-12\"> 
        {{ form_label(form.counselor_phone) }}
        {{ form_errors(form.counselor_phone) }}
        {{ form_widget(form.counselor_phone) }}
      </div>
      <div class=\"col-4_sm-12\"> 
        {{ form_label(form.counselor_email) }}
        {{ form_errors(form.counselor_email) }}
        {{ form_widget(form.counselor_email) }}
      </div>
      <div class=\"col-8_sm-12\"> 
        {{ form_label(form.counselor_company) }}
        {{ form_errors(form.counselor_company) }}
        {{ form_widget(form.counselor_company) }}
      </div>
      <div class=\"col-12\">
        <h3>Adres placówki firmy</h3>
      </div>
      <div class=\"col-4_sm-12\"> 
        {{ form_label(form.counselor_street) }}
        {{ form_errors(form.counselor_street) }}
        {{ form_widget(form.counselor_street) }}
      </div>
      <div class=\"col-4_sm-12\"> 
        {{ form_label(form.counselor_street_number) }}
        {{ form_errors(form.counselor_street_number) }}
        {{ form_widget(form.counselor_street_number) }}
      </div>
      <div class=\"col-4_sm-12\"> 
        {{ form_label(form.counselor_flat_number) }}
        {{ form_errors(form.counselor_flat_number) }}
        {{ form_widget(form.counselor_flat_number) }}
      </div>
      <div class=\"col-4_sm-12\"> 
        {{ form_label(form.counselor_post_code) }}
        {{ form_errors(form.counselor_post_code) }}
        {{ form_widget(form.counselor_post_code) }}
      </div>
      <div class=\"col-4_sm-12\"> 
        {{ form_label(form.counselor_city) }}
        {{ form_errors(form.counselor_city) }}
        {{ form_widget(form.counselor_city) }}
      </div>
      <div class=\"col-12\">
        <div class=\"navigation\">
          <div class=\"navigation--right\">
            <a class=\"btn-fill btn-fill--back\" href=\"/\">Wstecz</a>
          </div>
          <div class=\"navigation--left\">
            {{ form_widget(form.save) }}
          </div>
        </div> 
      </div>
    </div>
    {{ form_widget(form.save) }}
    {{ form_end(form) }}
    {% if fileurl %}
      <a href=\"/{{fileurl}}\" class=\"button-fill\">Plik</a>
    {% endif %} 

  {% endblock %}

  {% block stylesheets %}


  {% endblock %}
", "pages/business.html.twig", "/Library/WebServer/Documents/murapol/app/Resources/views/pages/business.html.twig");
    }
}
