<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c9f78952cac0f06f836bef76a076f48afb0514ecc489dab37a42fd5e69371b77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d6d8d3e82389052e2c8771f94736903ebde3e120a7d5fb9a02c8e07f17c6375 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d6d8d3e82389052e2c8771f94736903ebde3e120a7d5fb9a02c8e07f17c6375->enter($__internal_1d6d8d3e82389052e2c8771f94736903ebde3e120a7d5fb9a02c8e07f17c6375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_836219dee81d498ffbc1cd12eb42729f726f123174ef6bba0e3ae686342ca6d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_836219dee81d498ffbc1cd12eb42729f726f123174ef6bba0e3ae686342ca6d2->enter($__internal_836219dee81d498ffbc1cd12eb42729f726f123174ef6bba0e3ae686342ca6d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_1d6d8d3e82389052e2c8771f94736903ebde3e120a7d5fb9a02c8e07f17c6375->leave($__internal_1d6d8d3e82389052e2c8771f94736903ebde3e120a7d5fb9a02c8e07f17c6375_prof);

        
        $__internal_836219dee81d498ffbc1cd12eb42729f726f123174ef6bba0e3ae686342ca6d2->leave($__internal_836219dee81d498ffbc1cd12eb42729f726f123174ef6bba0e3ae686342ca6d2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dcf905a07ba433ea14f62f242fc6e01b4dcb3a998d3b4beb83ffcb10334a16df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcf905a07ba433ea14f62f242fc6e01b4dcb3a998d3b4beb83ffcb10334a16df->enter($__internal_dcf905a07ba433ea14f62f242fc6e01b4dcb3a998d3b4beb83ffcb10334a16df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_55b1b795ef3635f3593f8f233a9ec3deaa46081af3f39f833c2d4462225bf090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b1b795ef3635f3593f8f233a9ec3deaa46081af3f39f833c2d4462225bf090->enter($__internal_55b1b795ef3635f3593f8f233a9ec3deaa46081af3f39f833c2d4462225bf090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_55b1b795ef3635f3593f8f233a9ec3deaa46081af3f39f833c2d4462225bf090->leave($__internal_55b1b795ef3635f3593f8f233a9ec3deaa46081af3f39f833c2d4462225bf090_prof);

        
        $__internal_dcf905a07ba433ea14f62f242fc6e01b4dcb3a998d3b4beb83ffcb10334a16df->leave($__internal_dcf905a07ba433ea14f62f242fc6e01b4dcb3a998d3b4beb83ffcb10334a16df_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_7c4685638a337bc1762cec35ee90df75797f549ee9b82de47aa2eed6bff7216e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c4685638a337bc1762cec35ee90df75797f549ee9b82de47aa2eed6bff7216e->enter($__internal_7c4685638a337bc1762cec35ee90df75797f549ee9b82de47aa2eed6bff7216e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_37664cd356ebf3f9cea083964697cefaf10d25f660c1a337a7d641741ec9b88f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37664cd356ebf3f9cea083964697cefaf10d25f660c1a337a7d641741ec9b88f->enter($__internal_37664cd356ebf3f9cea083964697cefaf10d25f660c1a337a7d641741ec9b88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_37664cd356ebf3f9cea083964697cefaf10d25f660c1a337a7d641741ec9b88f->leave($__internal_37664cd356ebf3f9cea083964697cefaf10d25f660c1a337a7d641741ec9b88f_prof);

        
        $__internal_7c4685638a337bc1762cec35ee90df75797f549ee9b82de47aa2eed6bff7216e->leave($__internal_7c4685638a337bc1762cec35ee90df75797f549ee9b82de47aa2eed6bff7216e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_87bf78a8369d6579add2d1cd927ff95ff1242b4139732ecccda9e5ccd3dbb5b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87bf78a8369d6579add2d1cd927ff95ff1242b4139732ecccda9e5ccd3dbb5b6->enter($__internal_87bf78a8369d6579add2d1cd927ff95ff1242b4139732ecccda9e5ccd3dbb5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_829cc2409306f1c6bfa53b8eeaf3f281a0297746ec1a425459002825a808d5ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829cc2409306f1c6bfa53b8eeaf3f281a0297746ec1a425459002825a808d5ea->enter($__internal_829cc2409306f1c6bfa53b8eeaf3f281a0297746ec1a425459002825a808d5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_829cc2409306f1c6bfa53b8eeaf3f281a0297746ec1a425459002825a808d5ea->leave($__internal_829cc2409306f1c6bfa53b8eeaf3f281a0297746ec1a425459002825a808d5ea_prof);

        
        $__internal_87bf78a8369d6579add2d1cd927ff95ff1242b4139732ecccda9e5ccd3dbb5b6->leave($__internal_87bf78a8369d6579add2d1cd927ff95ff1242b4139732ecccda9e5ccd3dbb5b6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\Symfony\\alojamiento_rural\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
