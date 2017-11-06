<?php

/* RuralBundle:Default:contacto.html.twig */
class __TwigTemplate_705cc832c10872dd6fb178a542ac1d7935fecc8a1faff160ba9224ce1cc29fb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "RuralBundle:Default:contacto.html.twig", 1);
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
        $__internal_bf001b003a5d5aa7c6eeef2e9f0ee9a5233c04ca079cb2b9c805cc5e41c10527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf001b003a5d5aa7c6eeef2e9f0ee9a5233c04ca079cb2b9c805cc5e41c10527->enter($__internal_bf001b003a5d5aa7c6eeef2e9f0ee9a5233c04ca079cb2b9c805cc5e41c10527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RuralBundle:Default:contacto.html.twig"));

        $__internal_e60baec69e090fb5badc7593dc036c615c3c3d95ec69fecc3a5f93b697644a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e60baec69e090fb5badc7593dc036c615c3c3d95ec69fecc3a5f93b697644a1d->enter($__internal_e60baec69e090fb5badc7593dc036c615c3c3d95ec69fecc3a5f93b697644a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RuralBundle:Default:contacto.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf001b003a5d5aa7c6eeef2e9f0ee9a5233c04ca079cb2b9c805cc5e41c10527->leave($__internal_bf001b003a5d5aa7c6eeef2e9f0ee9a5233c04ca079cb2b9c805cc5e41c10527_prof);

        
        $__internal_e60baec69e090fb5badc7593dc036c615c3c3d95ec69fecc3a5f93b697644a1d->leave($__internal_e60baec69e090fb5badc7593dc036c615c3c3d95ec69fecc3a5f93b697644a1d_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_36c6d8a3e5f20a9a078696b447563ed0772c09b38831c97127f779aa2869e1c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36c6d8a3e5f20a9a078696b447563ed0772c09b38831c97127f779aa2869e1c4->enter($__internal_36c6d8a3e5f20a9a078696b447563ed0772c09b38831c97127f779aa2869e1c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1c26dcb6a14fa29125aea56681783262633115b7116c793cd6f051426240621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c26dcb6a14fa29125aea56681783262633115b7116c793cd6f051426240621->enter($__internal_f1c26dcb6a14fa29125aea56681783262633115b7116c793cd6f051426240621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"jumbotron\" style=\"opacity: 0.9\">
  <h2 class=\"display-3\">Estamos</h2>
  <h2 class=\"display-3\">en</h2>
  <h2 class=\"display-3\">Contacto</h2>
</div>
";
        
        $__internal_f1c26dcb6a14fa29125aea56681783262633115b7116c793cd6f051426240621->leave($__internal_f1c26dcb6a14fa29125aea56681783262633115b7116c793cd6f051426240621_prof);

        
        $__internal_36c6d8a3e5f20a9a078696b447563ed0772c09b38831c97127f779aa2869e1c4->leave($__internal_36c6d8a3e5f20a9a078696b447563ed0772c09b38831c97127f779aa2869e1c4_prof);

    }

    public function getTemplateName()
    {
        return "RuralBundle:Default:contacto.html.twig";
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
  <h2 class=\"display-3\">Contacto</h2>
</div>
{% endblock %}
", "RuralBundle:Default:contacto.html.twig", "C:\\Symfony\\alojamiento_rural\\src\\RuralBundle/Resources/views/Default/contacto.html.twig");
    }
}
