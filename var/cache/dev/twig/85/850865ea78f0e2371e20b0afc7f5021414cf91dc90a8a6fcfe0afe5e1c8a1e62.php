<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5bd7f8a780af153f7b032cdcf8ff8bed527ab6abfb102758ecf7625f9382938d extends Twig_Template
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
        $__internal_4159e89449fe41fff7f036c0ee4df9e10f2316aa38b07f3388ddaba1505fee20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4159e89449fe41fff7f036c0ee4df9e10f2316aa38b07f3388ddaba1505fee20->enter($__internal_4159e89449fe41fff7f036c0ee4df9e10f2316aa38b07f3388ddaba1505fee20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b4162752c2d68da8ae1374823d2e06e8525cf13a7dcf69495b8afbbe241bf9be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4162752c2d68da8ae1374823d2e06e8525cf13a7dcf69495b8afbbe241bf9be->enter($__internal_b4162752c2d68da8ae1374823d2e06e8525cf13a7dcf69495b8afbbe241bf9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4159e89449fe41fff7f036c0ee4df9e10f2316aa38b07f3388ddaba1505fee20->leave($__internal_4159e89449fe41fff7f036c0ee4df9e10f2316aa38b07f3388ddaba1505fee20_prof);

        
        $__internal_b4162752c2d68da8ae1374823d2e06e8525cf13a7dcf69495b8afbbe241bf9be->leave($__internal_b4162752c2d68da8ae1374823d2e06e8525cf13a7dcf69495b8afbbe241bf9be_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_05cc784245348f311c05d20c3150fc0088a3a14eba995ca638db799ced6d8767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05cc784245348f311c05d20c3150fc0088a3a14eba995ca638db799ced6d8767->enter($__internal_05cc784245348f311c05d20c3150fc0088a3a14eba995ca638db799ced6d8767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e7ccfa752d4283816ce803465938251a6553a6ee684291f5bf36f7248f217271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7ccfa752d4283816ce803465938251a6553a6ee684291f5bf36f7248f217271->enter($__internal_e7ccfa752d4283816ce803465938251a6553a6ee684291f5bf36f7248f217271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e7ccfa752d4283816ce803465938251a6553a6ee684291f5bf36f7248f217271->leave($__internal_e7ccfa752d4283816ce803465938251a6553a6ee684291f5bf36f7248f217271_prof);

        
        $__internal_05cc784245348f311c05d20c3150fc0088a3a14eba995ca638db799ced6d8767->leave($__internal_05cc784245348f311c05d20c3150fc0088a3a14eba995ca638db799ced6d8767_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_276cb79c9c3e7999d63f2140301cd151353e3e3aecb282e596ba253ffbd41b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276cb79c9c3e7999d63f2140301cd151353e3e3aecb282e596ba253ffbd41b34->enter($__internal_276cb79c9c3e7999d63f2140301cd151353e3e3aecb282e596ba253ffbd41b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8692ea56f1f7933c7f475593117528ae75afdf4ed444334c0d4475d39132b9f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8692ea56f1f7933c7f475593117528ae75afdf4ed444334c0d4475d39132b9f0->enter($__internal_8692ea56f1f7933c7f475593117528ae75afdf4ed444334c0d4475d39132b9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8692ea56f1f7933c7f475593117528ae75afdf4ed444334c0d4475d39132b9f0->leave($__internal_8692ea56f1f7933c7f475593117528ae75afdf4ed444334c0d4475d39132b9f0_prof);

        
        $__internal_276cb79c9c3e7999d63f2140301cd151353e3e3aecb282e596ba253ffbd41b34->leave($__internal_276cb79c9c3e7999d63f2140301cd151353e3e3aecb282e596ba253ffbd41b34_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1d2bbef002e71cad17b3dc4b9ac5b990064464c82e071eb60d43c13d6cd0cb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1d2bbef002e71cad17b3dc4b9ac5b990064464c82e071eb60d43c13d6cd0cb1->enter($__internal_b1d2bbef002e71cad17b3dc4b9ac5b990064464c82e071eb60d43c13d6cd0cb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_098269f3b28d9d4a8f85fb174050328ee243bbb6a081fa2c1726973a23d06cb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_098269f3b28d9d4a8f85fb174050328ee243bbb6a081fa2c1726973a23d06cb9->enter($__internal_098269f3b28d9d4a8f85fb174050328ee243bbb6a081fa2c1726973a23d06cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_098269f3b28d9d4a8f85fb174050328ee243bbb6a081fa2c1726973a23d06cb9->leave($__internal_098269f3b28d9d4a8f85fb174050328ee243bbb6a081fa2c1726973a23d06cb9_prof);

        
        $__internal_b1d2bbef002e71cad17b3dc4b9ac5b990064464c82e071eb60d43c13d6cd0cb1->leave($__internal_b1d2bbef002e71cad17b3dc4b9ac5b990064464c82e071eb60d43c13d6cd0cb1_prof);

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
", "@Twig/Exception/exception_full.html.twig", "C:\\Symfony\\alojamiento_rural\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
