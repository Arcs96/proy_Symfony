<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c78883b0a794df95bdc741371f79e94d9f33e13589dce19f76379b9c0a0f1d06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_ddff46546cfc4e31ecd69304ce1634d10cce755901b61d2d91d3b9539e47ff6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddff46546cfc4e31ecd69304ce1634d10cce755901b61d2d91d3b9539e47ff6d->enter($__internal_ddff46546cfc4e31ecd69304ce1634d10cce755901b61d2d91d3b9539e47ff6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_86a0f6332d7ea6193259357026ee93a58322c2dd0a71b04af2030404acdab18b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86a0f6332d7ea6193259357026ee93a58322c2dd0a71b04af2030404acdab18b->enter($__internal_86a0f6332d7ea6193259357026ee93a58322c2dd0a71b04af2030404acdab18b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddff46546cfc4e31ecd69304ce1634d10cce755901b61d2d91d3b9539e47ff6d->leave($__internal_ddff46546cfc4e31ecd69304ce1634d10cce755901b61d2d91d3b9539e47ff6d_prof);

        
        $__internal_86a0f6332d7ea6193259357026ee93a58322c2dd0a71b04af2030404acdab18b->leave($__internal_86a0f6332d7ea6193259357026ee93a58322c2dd0a71b04af2030404acdab18b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3af170cbfddda483b6b1bd367dbf3553e1b169593c4d56b39ddc1c7ffeb69548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3af170cbfddda483b6b1bd367dbf3553e1b169593c4d56b39ddc1c7ffeb69548->enter($__internal_3af170cbfddda483b6b1bd367dbf3553e1b169593c4d56b39ddc1c7ffeb69548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_93d7921073ea09f3fd687a80b15ae8cfcc2284e861c47edacb91f9e24c5de0bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d7921073ea09f3fd687a80b15ae8cfcc2284e861c47edacb91f9e24c5de0bf->enter($__internal_93d7921073ea09f3fd687a80b15ae8cfcc2284e861c47edacb91f9e24c5de0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_93d7921073ea09f3fd687a80b15ae8cfcc2284e861c47edacb91f9e24c5de0bf->leave($__internal_93d7921073ea09f3fd687a80b15ae8cfcc2284e861c47edacb91f9e24c5de0bf_prof);

        
        $__internal_3af170cbfddda483b6b1bd367dbf3553e1b169593c4d56b39ddc1c7ffeb69548->leave($__internal_3af170cbfddda483b6b1bd367dbf3553e1b169593c4d56b39ddc1c7ffeb69548_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_755225fffaef7e8a5376da0256754f44e7d1dffdfef2e487c9029953ea189cd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_755225fffaef7e8a5376da0256754f44e7d1dffdfef2e487c9029953ea189cd3->enter($__internal_755225fffaef7e8a5376da0256754f44e7d1dffdfef2e487c9029953ea189cd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_adc0b734a36c9e6bf0d6e9db962fe021c237b37735b8e518774d00e8d737f827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adc0b734a36c9e6bf0d6e9db962fe021c237b37735b8e518774d00e8d737f827->enter($__internal_adc0b734a36c9e6bf0d6e9db962fe021c237b37735b8e518774d00e8d737f827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_adc0b734a36c9e6bf0d6e9db962fe021c237b37735b8e518774d00e8d737f827->leave($__internal_adc0b734a36c9e6bf0d6e9db962fe021c237b37735b8e518774d00e8d737f827_prof);

        
        $__internal_755225fffaef7e8a5376da0256754f44e7d1dffdfef2e487c9029953ea189cd3->leave($__internal_755225fffaef7e8a5376da0256754f44e7d1dffdfef2e487c9029953ea189cd3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f57aa54379528ed00376f0ababb2bbe8438f986abf6fde4999620b14ffc8d4d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f57aa54379528ed00376f0ababb2bbe8438f986abf6fde4999620b14ffc8d4d6->enter($__internal_f57aa54379528ed00376f0ababb2bbe8438f986abf6fde4999620b14ffc8d4d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_48d7d346c41fee2ab2207e967c18dc52a7f15b5c60fe8201591a0930710ba6e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48d7d346c41fee2ab2207e967c18dc52a7f15b5c60fe8201591a0930710ba6e6->enter($__internal_48d7d346c41fee2ab2207e967c18dc52a7f15b5c60fe8201591a0930710ba6e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_48d7d346c41fee2ab2207e967c18dc52a7f15b5c60fe8201591a0930710ba6e6->leave($__internal_48d7d346c41fee2ab2207e967c18dc52a7f15b5c60fe8201591a0930710ba6e6_prof);

        
        $__internal_f57aa54379528ed00376f0ababb2bbe8438f986abf6fde4999620b14ffc8d4d6->leave($__internal_f57aa54379528ed00376f0ababb2bbe8438f986abf6fde4999620b14ffc8d4d6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\Symfony\\alojamiento_rural\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
