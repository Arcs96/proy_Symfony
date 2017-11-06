<?php

/* PrincipalBundle:Default:contacto.html.twig */
class __TwigTemplate_24484a9fa13c52f6e3b69d1b36fef36d703cda4b5b16d63798064aecb6cffc94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("basePrincipal.html.twig", "PrincipalBundle:Default:contacto.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "basePrincipal.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_299ac6e7882180bf03c074898554ccc1c71f54073e9e5181db2b98542f42590b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_299ac6e7882180bf03c074898554ccc1c71f54073e9e5181db2b98542f42590b->enter($__internal_299ac6e7882180bf03c074898554ccc1c71f54073e9e5181db2b98542f42590b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrincipalBundle:Default:contacto.html.twig"));

        $__internal_5c1746e8542be7506b821e4fcc03bd2a73b6c254f19a6ae326e0e9a8d45095ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c1746e8542be7506b821e4fcc03bd2a73b6c254f19a6ae326e0e9a8d45095ae->enter($__internal_5c1746e8542be7506b821e4fcc03bd2a73b6c254f19a6ae326e0e9a8d45095ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrincipalBundle:Default:contacto.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_299ac6e7882180bf03c074898554ccc1c71f54073e9e5181db2b98542f42590b->leave($__internal_299ac6e7882180bf03c074898554ccc1c71f54073e9e5181db2b98542f42590b_prof);

        
        $__internal_5c1746e8542be7506b821e4fcc03bd2a73b6c254f19a6ae326e0e9a8d45095ae->leave($__internal_5c1746e8542be7506b821e4fcc03bd2a73b6c254f19a6ae326e0e9a8d45095ae_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1ef8d0e674c2f87a010629b077106f60129e40a4c17af7e047ea05efab8cee7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ef8d0e674c2f87a010629b077106f60129e40a4c17af7e047ea05efab8cee7->enter($__internal_d1ef8d0e674c2f87a010629b077106f60129e40a4c17af7e047ea05efab8cee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a2af3a78d597113edf87a0372090ca1d40fc82fd5e9d0cda642a9ca2cc5998f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2af3a78d597113edf87a0372090ca1d40fc82fd5e9d0cda642a9ca2cc5998f3->enter($__internal_a2af3a78d597113edf87a0372090ca1d40fc82fd5e9d0cda642a9ca2cc5998f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"jumbotron\" style=\"opacity: 0.9\">
  <h2 class=\"display-3\">Estamos</h2>
  <h2 class=\"display-3\">en</h2>
  <h2 class=\"display-3\">Contacto</h2>
</div>
";
        
        $__internal_a2af3a78d597113edf87a0372090ca1d40fc82fd5e9d0cda642a9ca2cc5998f3->leave($__internal_a2af3a78d597113edf87a0372090ca1d40fc82fd5e9d0cda642a9ca2cc5998f3_prof);

        
        $__internal_d1ef8d0e674c2f87a010629b077106f60129e40a4c17af7e047ea05efab8cee7->leave($__internal_d1ef8d0e674c2f87a010629b077106f60129e40a4c17af7e047ea05efab8cee7_prof);

    }

    public function getTemplateName()
    {
        return "PrincipalBundle:Default:contacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'basePrincipal.html.twig' %}
{% block body %}
<div class=\"jumbotron\" style=\"opacity: 0.9\">
  <h2 class=\"display-3\">Estamos</h2>
  <h2 class=\"display-3\">en</h2>
  <h2 class=\"display-3\">Contacto</h2>
</div>
{% endblock %}
", "PrincipalBundle:Default:contacto.html.twig", "C:\\Symfony\\alojamiento_rural\\src\\PrincipalBundle/Resources/views/Default/contacto.html.twig");
    }
}
