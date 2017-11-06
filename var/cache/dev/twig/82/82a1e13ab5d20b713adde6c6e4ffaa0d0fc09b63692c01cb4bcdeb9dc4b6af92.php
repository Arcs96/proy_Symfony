<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8ece518a7d47cbec3cd793902ac2d1780625c2e915ea685331c4e93ae6c98d3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0d48b1f7dda783cc420303205d522473f65fd12a5fae218f3db52d9b0b5e633 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0d48b1f7dda783cc420303205d522473f65fd12a5fae218f3db52d9b0b5e633->enter($__internal_f0d48b1f7dda783cc420303205d522473f65fd12a5fae218f3db52d9b0b5e633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e30b3c742de5a09605a74bc493991e93fbaa74f4a04b095f4a159a10ec93a400 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30b3c742de5a09605a74bc493991e93fbaa74f4a04b095f4a159a10ec93a400->enter($__internal_e30b3c742de5a09605a74bc493991e93fbaa74f4a04b095f4a159a10ec93a400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0d48b1f7dda783cc420303205d522473f65fd12a5fae218f3db52d9b0b5e633->leave($__internal_f0d48b1f7dda783cc420303205d522473f65fd12a5fae218f3db52d9b0b5e633_prof);

        
        $__internal_e30b3c742de5a09605a74bc493991e93fbaa74f4a04b095f4a159a10ec93a400->leave($__internal_e30b3c742de5a09605a74bc493991e93fbaa74f4a04b095f4a159a10ec93a400_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3c2f7b67d7a8572256208e79faa129ad294f014647036d187bf9a6c1dc46e48e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c2f7b67d7a8572256208e79faa129ad294f014647036d187bf9a6c1dc46e48e->enter($__internal_3c2f7b67d7a8572256208e79faa129ad294f014647036d187bf9a6c1dc46e48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_971ebb42e4e8be64bad68a1b1bd65b752749ad7ce2fb181188d259b5a88f0890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971ebb42e4e8be64bad68a1b1bd65b752749ad7ce2fb181188d259b5a88f0890->enter($__internal_971ebb42e4e8be64bad68a1b1bd65b752749ad7ce2fb181188d259b5a88f0890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_971ebb42e4e8be64bad68a1b1bd65b752749ad7ce2fb181188d259b5a88f0890->leave($__internal_971ebb42e4e8be64bad68a1b1bd65b752749ad7ce2fb181188d259b5a88f0890_prof);

        
        $__internal_3c2f7b67d7a8572256208e79faa129ad294f014647036d187bf9a6c1dc46e48e->leave($__internal_3c2f7b67d7a8572256208e79faa129ad294f014647036d187bf9a6c1dc46e48e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_21865d392e6a8e897e43a3c303cb244293f9026c2c659bded50a6b056e8c5cec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21865d392e6a8e897e43a3c303cb244293f9026c2c659bded50a6b056e8c5cec->enter($__internal_21865d392e6a8e897e43a3c303cb244293f9026c2c659bded50a6b056e8c5cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_830d6cd08a79d248ddc5f9f425250f134142ff6ce7504e481f426bc7870e8177 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_830d6cd08a79d248ddc5f9f425250f134142ff6ce7504e481f426bc7870e8177->enter($__internal_830d6cd08a79d248ddc5f9f425250f134142ff6ce7504e481f426bc7870e8177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_830d6cd08a79d248ddc5f9f425250f134142ff6ce7504e481f426bc7870e8177->leave($__internal_830d6cd08a79d248ddc5f9f425250f134142ff6ce7504e481f426bc7870e8177_prof);

        
        $__internal_21865d392e6a8e897e43a3c303cb244293f9026c2c659bded50a6b056e8c5cec->leave($__internal_21865d392e6a8e897e43a3c303cb244293f9026c2c659bded50a6b056e8c5cec_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc9e7fabaa4d72b0be0c0d550049b9ceeb942e5bcc757d942168eeea8292e470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc9e7fabaa4d72b0be0c0d550049b9ceeb942e5bcc757d942168eeea8292e470->enter($__internal_bc9e7fabaa4d72b0be0c0d550049b9ceeb942e5bcc757d942168eeea8292e470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_234d695dc321044c5c36f4622f6584f761155c32449e249576b45f2e74751d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_234d695dc321044c5c36f4622f6584f761155c32449e249576b45f2e74751d07->enter($__internal_234d695dc321044c5c36f4622f6584f761155c32449e249576b45f2e74751d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_234d695dc321044c5c36f4622f6584f761155c32449e249576b45f2e74751d07->leave($__internal_234d695dc321044c5c36f4622f6584f761155c32449e249576b45f2e74751d07_prof);

        
        $__internal_bc9e7fabaa4d72b0be0c0d550049b9ceeb942e5bcc757d942168eeea8292e470->leave($__internal_bc9e7fabaa4d72b0be0c0d550049b9ceeb942e5bcc757d942168eeea8292e470_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\Symfony\\alojamiento_rural\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
