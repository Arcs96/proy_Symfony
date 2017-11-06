<?php

/* PrincipalBundle:Default:index.html.twig */
class __TwigTemplate_383331293448d1696e3a119be4e026f28c57b8fc176c2bd4ae724bce0420d98c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("basePrincipal.html.twig", "PrincipalBundle:Default:index.html.twig", 1);
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
        $__internal_1dec05ca339e773ab8f8822cf715bd204da30ce559afa091b4e4202c1227e251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dec05ca339e773ab8f8822cf715bd204da30ce559afa091b4e4202c1227e251->enter($__internal_1dec05ca339e773ab8f8822cf715bd204da30ce559afa091b4e4202c1227e251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrincipalBundle:Default:index.html.twig"));

        $__internal_e1eab3e1f0323f82d367465431d8db4cfb30abf9861d6e7238cf59b28b66fb26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1eab3e1f0323f82d367465431d8db4cfb30abf9861d6e7238cf59b28b66fb26->enter($__internal_e1eab3e1f0323f82d367465431d8db4cfb30abf9861d6e7238cf59b28b66fb26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrincipalBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1dec05ca339e773ab8f8822cf715bd204da30ce559afa091b4e4202c1227e251->leave($__internal_1dec05ca339e773ab8f8822cf715bd204da30ce559afa091b4e4202c1227e251_prof);

        
        $__internal_e1eab3e1f0323f82d367465431d8db4cfb30abf9861d6e7238cf59b28b66fb26->leave($__internal_e1eab3e1f0323f82d367465431d8db4cfb30abf9861d6e7238cf59b28b66fb26_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f8fc298e19ca41bfcc203b3cade3c7ef147513e80fa32422755ba856fca968e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f8fc298e19ca41bfcc203b3cade3c7ef147513e80fa32422755ba856fca968e->enter($__internal_0f8fc298e19ca41bfcc203b3cade3c7ef147513e80fa32422755ba856fca968e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_438d9c55aa29e8040bff02d24a8a39e052c6175624b55dd1736871a64e2d436f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_438d9c55aa29e8040bff02d24a8a39e052c6175624b55dd1736871a64e2d436f->enter($__internal_438d9c55aa29e8040bff02d24a8a39e052c6175624b55dd1736871a64e2d436f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"jumbotron\" style=\"opacity: 0.9\">
  <h2 class=\"display-3\">Estamos</h2>
  <h2 class=\"display-3\">en</h2>
  <h2 class=\"display-3\">Home Principal</h2>
</div>
";
        
        $__internal_438d9c55aa29e8040bff02d24a8a39e052c6175624b55dd1736871a64e2d436f->leave($__internal_438d9c55aa29e8040bff02d24a8a39e052c6175624b55dd1736871a64e2d436f_prof);

        
        $__internal_0f8fc298e19ca41bfcc203b3cade3c7ef147513e80fa32422755ba856fca968e->leave($__internal_0f8fc298e19ca41bfcc203b3cade3c7ef147513e80fa32422755ba856fca968e_prof);

    }

    public function getTemplateName()
    {
        return "PrincipalBundle:Default:index.html.twig";
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
  <h2 class=\"display-3\">Home Principal</h2>
</div>
{% endblock %}
", "PrincipalBundle:Default:index.html.twig", "C:\\Symfony\\alojamiento_rural\\src\\PrincipalBundle/Resources/views/Default/index.html.twig");
    }
}
