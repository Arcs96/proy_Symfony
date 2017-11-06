<?php

/* PrincipalBundle:Default:nosotros.html.twig */
class __TwigTemplate_36bae4d63059a6f06a6a5d4e120154e99bf47d58cdca035bdaf5bcadcaf872b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("basePrincipal.html.twig", "PrincipalBundle:Default:nosotros.html.twig", 1);
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
        $__internal_1bcc7009ce040feb07fe60643ba6eef84dc5e56a656490d966e674b748f2d994 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bcc7009ce040feb07fe60643ba6eef84dc5e56a656490d966e674b748f2d994->enter($__internal_1bcc7009ce040feb07fe60643ba6eef84dc5e56a656490d966e674b748f2d994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrincipalBundle:Default:nosotros.html.twig"));

        $__internal_610a4df4b8511114ce291add2ffed6977b9938ef9341291c0d5724021dbd3c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_610a4df4b8511114ce291add2ffed6977b9938ef9341291c0d5724021dbd3c75->enter($__internal_610a4df4b8511114ce291add2ffed6977b9938ef9341291c0d5724021dbd3c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrincipalBundle:Default:nosotros.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bcc7009ce040feb07fe60643ba6eef84dc5e56a656490d966e674b748f2d994->leave($__internal_1bcc7009ce040feb07fe60643ba6eef84dc5e56a656490d966e674b748f2d994_prof);

        
        $__internal_610a4df4b8511114ce291add2ffed6977b9938ef9341291c0d5724021dbd3c75->leave($__internal_610a4df4b8511114ce291add2ffed6977b9938ef9341291c0d5724021dbd3c75_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a39ea38b9ff08d164e3c3bbc66637b86b276c1c9200e012da958ae7f8c13623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a39ea38b9ff08d164e3c3bbc66637b86b276c1c9200e012da958ae7f8c13623->enter($__internal_4a39ea38b9ff08d164e3c3bbc66637b86b276c1c9200e012da958ae7f8c13623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c901e5d778be61adc207a91be5f32dc0ee0d4c0e7506304824599eb7dcf1aa73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c901e5d778be61adc207a91be5f32dc0ee0d4c0e7506304824599eb7dcf1aa73->enter($__internal_c901e5d778be61adc207a91be5f32dc0ee0d4c0e7506304824599eb7dcf1aa73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"jumbotron\" style=\"opacity: 0.9\">
  <h2 class=\"display-3\">Estamos</h2>
  <h2 class=\"display-3\">en</h2>
  <h2 class=\"display-3\">Nosotros</h2>
</div>
";
        
        $__internal_c901e5d778be61adc207a91be5f32dc0ee0d4c0e7506304824599eb7dcf1aa73->leave($__internal_c901e5d778be61adc207a91be5f32dc0ee0d4c0e7506304824599eb7dcf1aa73_prof);

        
        $__internal_4a39ea38b9ff08d164e3c3bbc66637b86b276c1c9200e012da958ae7f8c13623->leave($__internal_4a39ea38b9ff08d164e3c3bbc66637b86b276c1c9200e012da958ae7f8c13623_prof);

    }

    public function getTemplateName()
    {
        return "PrincipalBundle:Default:nosotros.html.twig";
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
  <h2 class=\"display-3\">Nosotros</h2>
</div>
{% endblock %}
", "PrincipalBundle:Default:nosotros.html.twig", "C:\\Symfony\\alojamiento_rural\\src\\PrincipalBundle/Resources/views/Default/nosotros.html.twig");
    }
}
