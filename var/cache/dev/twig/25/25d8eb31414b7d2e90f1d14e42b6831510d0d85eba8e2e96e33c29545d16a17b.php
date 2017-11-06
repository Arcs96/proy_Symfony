<?php

/* RuralBundle:Default:nosotros.html.twig */
class __TwigTemplate_7ff0e1f5e54f528234b32fd8ef8e1833d4425ec208d1d13d9c9274216cf00b7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "RuralBundle:Default:nosotros.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31605505e15711cdd359d60c3f28dea2d02a72a9eb6ae19a0a86650e66498664 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31605505e15711cdd359d60c3f28dea2d02a72a9eb6ae19a0a86650e66498664->enter($__internal_31605505e15711cdd359d60c3f28dea2d02a72a9eb6ae19a0a86650e66498664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RuralBundle:Default:nosotros.html.twig"));

        $__internal_55965e2a5643971ab26bbc6c16eb5a688b3429b0489b9fb075452ff2d125169c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55965e2a5643971ab26bbc6c16eb5a688b3429b0489b9fb075452ff2d125169c->enter($__internal_55965e2a5643971ab26bbc6c16eb5a688b3429b0489b9fb075452ff2d125169c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RuralBundle:Default:nosotros.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31605505e15711cdd359d60c3f28dea2d02a72a9eb6ae19a0a86650e66498664->leave($__internal_31605505e15711cdd359d60c3f28dea2d02a72a9eb6ae19a0a86650e66498664_prof);

        
        $__internal_55965e2a5643971ab26bbc6c16eb5a688b3429b0489b9fb075452ff2d125169c->leave($__internal_55965e2a5643971ab26bbc6c16eb5a688b3429b0489b9fb075452ff2d125169c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2bd71e82f2fc9936439f0935a0e0262c1e29647299cdb61d4a97a1d63d390f86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bd71e82f2fc9936439f0935a0e0262c1e29647299cdb61d4a97a1d63d390f86->enter($__internal_2bd71e82f2fc9936439f0935a0e0262c1e29647299cdb61d4a97a1d63d390f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6187cf80296b8454e7e088a91720d541338b2e42d434fca58f1ed612256defbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6187cf80296b8454e7e088a91720d541338b2e42d434fca58f1ed612256defbc->enter($__internal_6187cf80296b8454e7e088a91720d541338b2e42d434fca58f1ed612256defbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"jumbotron\" style=\"opacity: 0.9\">
  <h2 class=\"display-3\">Estamos</h2>
  <h2 class=\"display-3\">en</h2>
  <h2 class=\"display-3\">Sobre nosotros</h2>
</div>
";
        
        $__internal_6187cf80296b8454e7e088a91720d541338b2e42d434fca58f1ed612256defbc->leave($__internal_6187cf80296b8454e7e088a91720d541338b2e42d434fca58f1ed612256defbc_prof);

        
        $__internal_2bd71e82f2fc9936439f0935a0e0262c1e29647299cdb61d4a97a1d63d390f86->leave($__internal_2bd71e82f2fc9936439f0935a0e0262c1e29647299cdb61d4a97a1d63d390f86_prof);

    }

    public function getTemplateName()
    {
        return "RuralBundle:Default:nosotros.html.twig";
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
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
<div class=\"jumbotron\" style=\"opacity: 0.9\">
  <h2 class=\"display-3\">Estamos</h2>
  <h2 class=\"display-3\">en</h2>
  <h2 class=\"display-3\">Sobre nosotros</h2>
</div>
{% endblock %}
", "RuralBundle:Default:nosotros.html.twig", "C:\\Symfony\\alojamiento_rural\\src\\RuralBundle/Resources/views/Default/nosotros.html.twig");
    }
}
