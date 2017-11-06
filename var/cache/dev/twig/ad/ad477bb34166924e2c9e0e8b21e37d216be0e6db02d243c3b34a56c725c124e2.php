<?php

/* RuralBundle:Default:index.html.twig */
class __TwigTemplate_3442dc7530e9f470509f5cf5f07e563a3e8914ee8a816e93554093f4e3f6665d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseRural.html.twig", "RuralBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseRural.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_51bb5f2fc15c5dcfd77f720f4f0cfded316cbb36708c039ccc66b91a0e9cf07e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51bb5f2fc15c5dcfd77f720f4f0cfded316cbb36708c039ccc66b91a0e9cf07e->enter($__internal_51bb5f2fc15c5dcfd77f720f4f0cfded316cbb36708c039ccc66b91a0e9cf07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RuralBundle:Default:index.html.twig"));

        $__internal_d85286e9120534ad8e1e742383e0d2fab49d1bacec8551297c422de23f09c3bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d85286e9120534ad8e1e742383e0d2fab49d1bacec8551297c422de23f09c3bf->enter($__internal_d85286e9120534ad8e1e742383e0d2fab49d1bacec8551297c422de23f09c3bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RuralBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51bb5f2fc15c5dcfd77f720f4f0cfded316cbb36708c039ccc66b91a0e9cf07e->leave($__internal_51bb5f2fc15c5dcfd77f720f4f0cfded316cbb36708c039ccc66b91a0e9cf07e_prof);

        
        $__internal_d85286e9120534ad8e1e742383e0d2fab49d1bacec8551297c422de23f09c3bf->leave($__internal_d85286e9120534ad8e1e742383e0d2fab49d1bacec8551297c422de23f09c3bf_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_e60654476cfe349db2c8075af943fc52de6c07ce29c6bf86c380af829227561f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e60654476cfe349db2c8075af943fc52de6c07ce29c6bf86c380af829227561f->enter($__internal_e60654476cfe349db2c8075af943fc52de6c07ce29c6bf86c380af829227561f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4ceb1fbb80cf80b7b7e2994ab1161b97fdff6ae0996fd529ae51db56d528ce5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ceb1fbb80cf80b7b7e2994ab1161b97fdff6ae0996fd529ae51db56d528ce5d->enter($__internal_4ceb1fbb80cf80b7b7e2994ab1161b97fdff6ae0996fd529ae51db56d528ce5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"jumbotron\" style=\"opacity: 0.9\">
  <h2 class=\"display-3\">Estamos</h2>
  <h2 class=\"display-3\">en</h2>
  <h2 class=\"display-3\">Home Rural</h2>
</div>
";
        
        $__internal_4ceb1fbb80cf80b7b7e2994ab1161b97fdff6ae0996fd529ae51db56d528ce5d->leave($__internal_4ceb1fbb80cf80b7b7e2994ab1161b97fdff6ae0996fd529ae51db56d528ce5d_prof);

        
        $__internal_e60654476cfe349db2c8075af943fc52de6c07ce29c6bf86c380af829227561f->leave($__internal_e60654476cfe349db2c8075af943fc52de6c07ce29c6bf86c380af829227561f_prof);

    }

    public function getTemplateName()
    {
        return "RuralBundle:Default:index.html.twig";
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
        return new Twig_Source("{% extends 'baseRural.html.twig' %}
{% block body %}
<div class=\"jumbotron\" style=\"opacity: 0.9\">
  <h2 class=\"display-3\">Estamos</h2>
  <h2 class=\"display-3\">en</h2>
  <h2 class=\"display-3\">Home Rural</h2>
</div>
{% endblock %}
", "RuralBundle:Default:index.html.twig", "C:\\Symfony\\alojamiento_rural\\src\\RuralBundle/Resources/views/Default/index.html.twig");
    }
}
