<?php

/* base.html.twig */
class __TwigTemplate_46ec375f9412574a4b1648f4d27c7e0c4c3693fb4dba3003e23cdbf45b02ddb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b8eb2ca0c1cb773b5a6ea2be33766130dceedab98ee69476bcf0001c575c8693 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8eb2ca0c1cb773b5a6ea2be33766130dceedab98ee69476bcf0001c575c8693->enter($__internal_b8eb2ca0c1cb773b5a6ea2be33766130dceedab98ee69476bcf0001c575c8693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e34c525985acb7330c98ee36ff25c11c5f6dd5f70b2535b5765c175061acb7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e34c525985acb7330c98ee36ff25c11c5f6dd5f70b2535b5765c175061acb7eb->enter($__internal_e34c525985acb7330c98ee36ff25c11c5f6dd5f70b2535b5765c175061acb7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app/css/styles.css"), "html", null, true);
        echo "\" />
  <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
  <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app/js/vendors/jquery-3.1.1.js"), "html", null, true);
        echo "\"></script> 
  <script src=\"https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js\"></script>
  <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app/js/main.js"), "html", null, true);
        echo "\"></script>
  <script>
    (function (d) {
      var config = {
        kitId: 'rnl6rnm',
        scriptTimeout: 3000,
        async: true
      },
              h = d.documentElement, t = setTimeout(function () {
                h.className = h.className.replace(/\\bwf-loading\\b/g, \"\") + \" wf-inactive\";
              }, config.scriptTimeout), tk = d.createElement(\"script\"), f = false, s = d.getElementsByTagName(\"script\")[0], a;
      h.className += \" wf-loading\";
      tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
      tk.async = true;
      tk.onload = tk.onreadystatechange = function () {
        a = this.readyState;
        if (f || a && a != \"complete\" && a != \"loaded\")
          return;
        f = true;
        clearTimeout(t);
        try {
          Typekit.load(config)
        } catch (e) {
        }
      };
      s.parentNode.insertBefore(tk, s)
    })(document);
  </script>
</head>
<body>
";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "
</body>
</html>
";
        
        $__internal_b8eb2ca0c1cb773b5a6ea2be33766130dceedab98ee69476bcf0001c575c8693->leave($__internal_b8eb2ca0c1cb773b5a6ea2be33766130dceedab98ee69476bcf0001c575c8693_prof);

        
        $__internal_e34c525985acb7330c98ee36ff25c11c5f6dd5f70b2535b5765c175061acb7eb->leave($__internal_e34c525985acb7330c98ee36ff25c11c5f6dd5f70b2535b5765c175061acb7eb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4a779864894a82f42af0090a37adc546f7582302ed7f6c514b49db67656a46f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a779864894a82f42af0090a37adc546f7582302ed7f6c514b49db67656a46f5->enter($__internal_4a779864894a82f42af0090a37adc546f7582302ed7f6c514b49db67656a46f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f7c6b5dfc7ff6f5ebfc2b94947456a17ab390830e96f5c61fcc646f24adc35ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c6b5dfc7ff6f5ebfc2b94947456a17ab390830e96f5c61fcc646f24adc35ed->enter($__internal_f7c6b5dfc7ff6f5ebfc2b94947456a17ab390830e96f5c61fcc646f24adc35ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f7c6b5dfc7ff6f5ebfc2b94947456a17ab390830e96f5c61fcc646f24adc35ed->leave($__internal_f7c6b5dfc7ff6f5ebfc2b94947456a17ab390830e96f5c61fcc646f24adc35ed_prof);

        
        $__internal_4a779864894a82f42af0090a37adc546f7582302ed7f6c514b49db67656a46f5->leave($__internal_4a779864894a82f42af0090a37adc546f7582302ed7f6c514b49db67656a46f5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_702eca178fc5d23546496ffcb0a50a7a0bd4327d52d75bca76c1cf5aef3290a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_702eca178fc5d23546496ffcb0a50a7a0bd4327d52d75bca76c1cf5aef3290a9->enter($__internal_702eca178fc5d23546496ffcb0a50a7a0bd4327d52d75bca76c1cf5aef3290a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_310b378dffa85a8e4f59913c82ceb7721317647fa64cddae833d5c33d5622748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_310b378dffa85a8e4f59913c82ceb7721317647fa64cddae833d5c33d5622748->enter($__internal_310b378dffa85a8e4f59913c82ceb7721317647fa64cddae833d5c33d5622748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_310b378dffa85a8e4f59913c82ceb7721317647fa64cddae833d5c33d5622748->leave($__internal_310b378dffa85a8e4f59913c82ceb7721317647fa64cddae833d5c33d5622748_prof);

        
        $__internal_702eca178fc5d23546496ffcb0a50a7a0bd4327d52d75bca76c1cf5aef3290a9->leave($__internal_702eca178fc5d23546496ffcb0a50a7a0bd4327d52d75bca76c1cf5aef3290a9_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_684d9a24399bba45accb4445fb191ab7cf0aa274e970c92f9d11f232276cc9e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_684d9a24399bba45accb4445fb191ab7cf0aa274e970c92f9d11f232276cc9e4->enter($__internal_684d9a24399bba45accb4445fb191ab7cf0aa274e970c92f9d11f232276cc9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_993211db375e0ef4fde99036a54e290f5b97485a25d63a4194880b82ceaa0b3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_993211db375e0ef4fde99036a54e290f5b97485a25d63a4194880b82ceaa0b3e->enter($__internal_993211db375e0ef4fde99036a54e290f5b97485a25d63a4194880b82ceaa0b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_993211db375e0ef4fde99036a54e290f5b97485a25d63a4194880b82ceaa0b3e->leave($__internal_993211db375e0ef4fde99036a54e290f5b97485a25d63a4194880b82ceaa0b3e_prof);

        
        $__internal_684d9a24399bba45accb4445fb191ab7cf0aa274e970c92f9d11f232276cc9e4->leave($__internal_684d9a24399bba45accb4445fb191ab7cf0aa274e970c92f9d11f232276cc9e4_prof);

    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cdbe7c9160272e8d2099baaa14b56e6e91fd3d316a2120f804833b75a4cd649a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdbe7c9160272e8d2099baaa14b56e6e91fd3d316a2120f804833b75a4cd649a->enter($__internal_cdbe7c9160272e8d2099baaa14b56e6e91fd3d316a2120f804833b75a4cd649a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c3d806f5cc6fbd3f308129e6d9ab552bcea3c0e9c49558ec75b82321b81d1703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3d806f5cc6fbd3f308129e6d9ab552bcea3c0e9c49558ec75b82321b81d1703->enter($__internal_c3d806f5cc6fbd3f308129e6d9ab552bcea3c0e9c49558ec75b82321b81d1703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c3d806f5cc6fbd3f308129e6d9ab552bcea3c0e9c49558ec75b82321b81d1703->leave($__internal_c3d806f5cc6fbd3f308129e6d9ab552bcea3c0e9c49558ec75b82321b81d1703_prof);

        
        $__internal_cdbe7c9160272e8d2099baaa14b56e6e91fd3d316a2120f804833b75a4cd649a->leave($__internal_cdbe7c9160272e8d2099baaa14b56e6e91fd3d316a2120f804833b75a4cd649a_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 42,  140 => 41,  123 => 6,  105 => 5,  92 => 43,  90 => 42,  88 => 41,  55 => 11,  50 => 9,  46 => 8,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Welcome!{% endblock %}</title>
  {% block stylesheets %}{% endblock %}
  <link rel=\"stylesheet\" href=\"{{ asset('app/css/styles.css') }}\" />
  <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
  <script src=\"{{ asset('app/js/vendors/jquery-3.1.1.js') }}\"></script> 
  <script src=\"https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js\"></script>
  <script src=\"{{ asset('app/js/main.js') }}\"></script>
  <script>
    (function (d) {
      var config = {
        kitId: 'rnl6rnm',
        scriptTimeout: 3000,
        async: true
      },
              h = d.documentElement, t = setTimeout(function () {
                h.className = h.className.replace(/\\bwf-loading\\b/g, \"\") + \" wf-inactive\";
              }, config.scriptTimeout), tk = d.createElement(\"script\"), f = false, s = d.getElementsByTagName(\"script\")[0], a;
      h.className += \" wf-loading\";
      tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
      tk.async = true;
      tk.onload = tk.onreadystatechange = function () {
        a = this.readyState;
        if (f || a && a != \"complete\" && a != \"loaded\")
          return;
        f = true;
        clearTimeout(t);
        try {
          Typekit.load(config)
        } catch (e) {
        }
      };
      s.parentNode.insertBefore(tk, s)
    })(document);
  </script>
</head>
<body>
{% block body %}{% endblock %}
{% block javascripts %}{% endblock %}

</body>
</html>
", "base.html.twig", "/Library/WebServer/Documents/murapol/app/Resources/views/base.html.twig");
    }
}
