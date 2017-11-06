<?php

/* RuralBundle2.html.twig */
class __TwigTemplate_e8c874ffd2815b5dca6dd5b95d707f442eb3666e7cfc64a12ccb1fe498dfe2df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e043e38eed7ba971c9db987b6832201d19b68c94d90469c4503ed770da0c2d71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e043e38eed7ba971c9db987b6832201d19b68c94d90469c4503ed770da0c2d71->enter($__internal_e043e38eed7ba971c9db987b6832201d19b68c94d90469c4503ed770da0c2d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RuralBundle2.html.twig"));

        $__internal_3c65a4dcca1ab3c8637b2899ef368f8d90e146c6f4149e7b4e8637045d8a6b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c65a4dcca1ab3c8637b2899ef368f8d90e146c6f4149e7b4e8637045d8a6b77->enter($__internal_3c65a4dcca1ab3c8637b2899ef368f8d90e146c6f4149e7b4e8637045d8a6b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RuralBundle2.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"es\">
  <head>

    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Bootstrap CSS -->
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
  </head>
  <body >

    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\" style=\"opacity:0.9;\">

      <a class=\"navbar-brand\" href=\"#\">RURALCU</a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comarca");
        echo "\"> Alojamiento <span class=\"sr-only\">(current)</span></a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#home\"> Contacto </a>
          </li>
        </ul>
        <form class=\"form-inline my-2 my-lg-0\">
          <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
          <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
      </div>

    </nav>

    <main role=\"main\">
      ";
        // line 45
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "    </main>

    <footer class=\"fixed-bottom container\">
      <hr>
      <p>&copy; Company 2017</p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    ";
        // line 56
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "    
  </body>
</html>
";
        
        $__internal_e043e38eed7ba971c9db987b6832201d19b68c94d90469c4503ed770da0c2d71->leave($__internal_e043e38eed7ba971c9db987b6832201d19b68c94d90469c4503ed770da0c2d71_prof);

        
        $__internal_3c65a4dcca1ab3c8637b2899ef368f8d90e146c6f4149e7b4e8637045d8a6b77->leave($__internal_3c65a4dcca1ab3c8637b2899ef368f8d90e146c6f4149e7b4e8637045d8a6b77_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f5f0947bcb6528671ea3bc8ceb8df073ee827de00b145c14cf6301633f1e9e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f5f0947bcb6528671ea3bc8ceb8df073ee827de00b145c14cf6301633f1e9e5->enter($__internal_8f5f0947bcb6528671ea3bc8ceb8df073ee827de00b145c14cf6301633f1e9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_370bc31567353d4c6b2e28e0aca72c0037e41bccd8924befb1288651d2f2ce42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_370bc31567353d4c6b2e28e0aca72c0037e41bccd8924befb1288651d2f2ce42->enter($__internal_370bc31567353d4c6b2e28e0aca72c0037e41bccd8924befb1288651d2f2ce42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Alojamiento Rural";
        
        $__internal_370bc31567353d4c6b2e28e0aca72c0037e41bccd8924befb1288651d2f2ce42->leave($__internal_370bc31567353d4c6b2e28e0aca72c0037e41bccd8924befb1288651d2f2ce42_prof);

        
        $__internal_8f5f0947bcb6528671ea3bc8ceb8df073ee827de00b145c14cf6301633f1e9e5->leave($__internal_8f5f0947bcb6528671ea3bc8ceb8df073ee827de00b145c14cf6301633f1e9e5_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b80274484302d2b94ebce339804c463d89fce6e53e5f81d0433e2e2967cdb26b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b80274484302d2b94ebce339804c463d89fce6e53e5f81d0433e2e2967cdb26b->enter($__internal_b80274484302d2b94ebce339804c463d89fce6e53e5f81d0433e2e2967cdb26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_aa2d00eea2087a2fbc58d24615e24c7767a7264fe8b87785636cc31a24965cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa2d00eea2087a2fbc58d24615e24c7767a7264fe8b87785636cc31a24965cca->enter($__internal_aa2d00eea2087a2fbc58d24615e24c7767a7264fe8b87785636cc31a24965cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "      <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
      <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/ruralStyle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    ";
        
        $__internal_aa2d00eea2087a2fbc58d24615e24c7767a7264fe8b87785636cc31a24965cca->leave($__internal_aa2d00eea2087a2fbc58d24615e24c7767a7264fe8b87785636cc31a24965cca_prof);

        
        $__internal_b80274484302d2b94ebce339804c463d89fce6e53e5f81d0433e2e2967cdb26b->leave($__internal_b80274484302d2b94ebce339804c463d89fce6e53e5f81d0433e2e2967cdb26b_prof);

    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        $__internal_6574805753b69f0831080bd39b6b428cd8abece2e7b85659b9e829bd6489b196 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6574805753b69f0831080bd39b6b428cd8abece2e7b85659b9e829bd6489b196->enter($__internal_6574805753b69f0831080bd39b6b428cd8abece2e7b85659b9e829bd6489b196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a2fcadfe06f4df6c254597444a9c4980adb32a2f4f40d410867d560c3f8895f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2fcadfe06f4df6c254597444a9c4980adb32a2f4f40d410867d560c3f8895f4->enter($__internal_a2fcadfe06f4df6c254597444a9c4980adb32a2f4f40d410867d560c3f8895f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 46
        echo "      ";
        
        $__internal_a2fcadfe06f4df6c254597444a9c4980adb32a2f4f40d410867d560c3f8895f4->leave($__internal_a2fcadfe06f4df6c254597444a9c4980adb32a2f4f40d410867d560c3f8895f4_prof);

        
        $__internal_6574805753b69f0831080bd39b6b428cd8abece2e7b85659b9e829bd6489b196->leave($__internal_6574805753b69f0831080bd39b6b428cd8abece2e7b85659b9e829bd6489b196_prof);

    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e1fd9fd10a42420137af9a0314afe8b8b08204642c8621e737284515cbe926b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1fd9fd10a42420137af9a0314afe8b8b08204642c8621e737284515cbe926b3->enter($__internal_e1fd9fd10a42420137af9a0314afe8b8b08204642c8621e737284515cbe926b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_83e40533b5d036a7e44587eaf96dd2764ff86982e763ed634ff31a9636679f8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83e40533b5d036a7e44587eaf96dd2764ff86982e763ed634ff31a9636679f8b->enter($__internal_83e40533b5d036a7e44587eaf96dd2764ff86982e763ed634ff31a9636679f8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 57
        echo "      <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
      <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
    ";
        
        $__internal_83e40533b5d036a7e44587eaf96dd2764ff86982e763ed634ff31a9636679f8b->leave($__internal_83e40533b5d036a7e44587eaf96dd2764ff86982e763ed634ff31a9636679f8b_prof);

        
        $__internal_e1fd9fd10a42420137af9a0314afe8b8b08204642c8621e737284515cbe926b3->leave($__internal_e1fd9fd10a42420137af9a0314afe8b8b08204642c8621e737284515cbe926b3_prof);

    }

    public function getTemplateName()
    {
        return "RuralBundle2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 57,  170 => 56,  160 => 46,  151 => 45,  139 => 14,  136 => 13,  127 => 12,  109 => 5,  96 => 61,  94 => 56,  83 => 47,  81 => 45,  63 => 30,  47 => 16,  45 => 12,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"es\">
  <head>

    <title>{% block title %}Alojamiento Rural{% endblock %}</title>

    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

    <!-- Bootstrap CSS -->
    {% block stylesheets %}
      <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css\" integrity=\"sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb\" crossorigin=\"anonymous\">
      <link href=\"{{ asset('public/css/ruralStyle.css') }}\" rel=\"stylesheet\" />
    {% endblock %}

  </head>
  <body >

    <nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\" style=\"opacity:0.9;\">

      <a class=\"navbar-brand\" href=\"#\">RURALCU</a>
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarsExampleDefault\" aria-controls=\"navbarsExampleDefault\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse\" id=\"navbarsExampleDefault\">
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"{{path('comarca')}}\"> Alojamiento <span class=\"sr-only\">(current)</span></a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"#home\"> Contacto </a>
          </li>
        </ul>
        <form class=\"form-inline my-2 my-lg-0\">
          <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
          <button class=\"btn btn-outline-success my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
      </div>

    </nav>

    <main role=\"main\">
      {% block body %}
      {% endblock %}
    </main>

    <footer class=\"fixed-bottom container\">
      <hr>
      <p>&copy; Company 2017</p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {% block javascripts %}
      <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
      <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js\" integrity=\"sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh\" crossorigin=\"anonymous\"></script>
      <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js\" integrity=\"sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ\" crossorigin=\"anonymous\"></script>
    {% endblock %}
    
  </body>
</html>
", "RuralBundle2.html.twig", "C:\\Symfony\\alojamiento_rural\\app\\Resources\\views\\RuralBundle2.html.twig");
    }
}
