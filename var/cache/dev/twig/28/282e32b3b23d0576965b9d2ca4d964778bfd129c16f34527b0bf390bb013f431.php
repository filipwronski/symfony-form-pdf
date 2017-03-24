<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3fb27f5e9ef4a84442211cf7338302146adb256ef8a175298ef4aacec4ff8c8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3f06655c73047919773d680d8d7a609f1ae2248da4867d0e2155819184513fcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f06655c73047919773d680d8d7a609f1ae2248da4867d0e2155819184513fcd->enter($__internal_3f06655c73047919773d680d8d7a609f1ae2248da4867d0e2155819184513fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_20337a45334fd9e4d40fb35a2b083cfbcda9bbde974346376ea6364e520ef77a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20337a45334fd9e4d40fb35a2b083cfbcda9bbde974346376ea6364e520ef77a->enter($__internal_20337a45334fd9e4d40fb35a2b083cfbcda9bbde974346376ea6364e520ef77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f06655c73047919773d680d8d7a609f1ae2248da4867d0e2155819184513fcd->leave($__internal_3f06655c73047919773d680d8d7a609f1ae2248da4867d0e2155819184513fcd_prof);

        
        $__internal_20337a45334fd9e4d40fb35a2b083cfbcda9bbde974346376ea6364e520ef77a->leave($__internal_20337a45334fd9e4d40fb35a2b083cfbcda9bbde974346376ea6364e520ef77a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ea6bbb78721564cb62ae08d26911b21b839b02a91dc12ded88602784e9471d5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea6bbb78721564cb62ae08d26911b21b839b02a91dc12ded88602784e9471d5f->enter($__internal_ea6bbb78721564cb62ae08d26911b21b839b02a91dc12ded88602784e9471d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_19cf29c860e5e6e9db3e11be0a4844f555c0778b5c49441e0ecc3753953f3928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19cf29c860e5e6e9db3e11be0a4844f555c0778b5c49441e0ecc3753953f3928->enter($__internal_19cf29c860e5e6e9db3e11be0a4844f555c0778b5c49441e0ecc3753953f3928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_19cf29c860e5e6e9db3e11be0a4844f555c0778b5c49441e0ecc3753953f3928->leave($__internal_19cf29c860e5e6e9db3e11be0a4844f555c0778b5c49441e0ecc3753953f3928_prof);

        
        $__internal_ea6bbb78721564cb62ae08d26911b21b839b02a91dc12ded88602784e9471d5f->leave($__internal_ea6bbb78721564cb62ae08d26911b21b839b02a91dc12ded88602784e9471d5f_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_af7262bd548cbb12b746b03d3c506ec0a939eaadb633137aaf66b37a606f96a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af7262bd548cbb12b746b03d3c506ec0a939eaadb633137aaf66b37a606f96a7->enter($__internal_af7262bd548cbb12b746b03d3c506ec0a939eaadb633137aaf66b37a606f96a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3bac4de72d0e8b4148ff8d948bb2bc7b6cc9ce3e8ecd340f60ff47c309dc5a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bac4de72d0e8b4148ff8d948bb2bc7b6cc9ce3e8ecd340f60ff47c309dc5a8f->enter($__internal_3bac4de72d0e8b4148ff8d948bb2bc7b6cc9ce3e8ecd340f60ff47c309dc5a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3bac4de72d0e8b4148ff8d948bb2bc7b6cc9ce3e8ecd340f60ff47c309dc5a8f->leave($__internal_3bac4de72d0e8b4148ff8d948bb2bc7b6cc9ce3e8ecd340f60ff47c309dc5a8f_prof);

        
        $__internal_af7262bd548cbb12b746b03d3c506ec0a939eaadb633137aaf66b37a606f96a7->leave($__internal_af7262bd548cbb12b746b03d3c506ec0a939eaadb633137aaf66b37a606f96a7_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_263bb514a6fd35e1a073dba454bd9c2c11753130e54e75355399c9e7f6a6b16c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_263bb514a6fd35e1a073dba454bd9c2c11753130e54e75355399c9e7f6a6b16c->enter($__internal_263bb514a6fd35e1a073dba454bd9c2c11753130e54e75355399c9e7f6a6b16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9665eaa8446b2f58f1335f7d0f2f514c5d9b9ef3628297e98ad0b9de9b18e37d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9665eaa8446b2f58f1335f7d0f2f514c5d9b9ef3628297e98ad0b9de9b18e37d->enter($__internal_9665eaa8446b2f58f1335f7d0f2f514c5d9b9ef3628297e98ad0b9de9b18e37d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9665eaa8446b2f58f1335f7d0f2f514c5d9b9ef3628297e98ad0b9de9b18e37d->leave($__internal_9665eaa8446b2f58f1335f7d0f2f514c5d9b9ef3628297e98ad0b9de9b18e37d_prof);

        
        $__internal_263bb514a6fd35e1a073dba454bd9c2c11753130e54e75355399c9e7f6a6b16c->leave($__internal_263bb514a6fd35e1a073dba454bd9c2c11753130e54e75355399c9e7f6a6b16c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Library/WebServer/Documents/murapol/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
