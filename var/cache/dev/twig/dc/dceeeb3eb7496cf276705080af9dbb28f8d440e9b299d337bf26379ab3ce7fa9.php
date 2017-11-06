<?php

/* base.html.twig */
class __TwigTemplate_551c2a089b13ddf4e0ac2282d0eb2712a2ea82e32b4a08ce8ba8a82a0817cbe0 extends Twig_Template
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
        $__internal_5fa02cd9d2cc012ae3e9b33ff414e1615e4c05bf9dcdc7ea0bba0cde9773dd06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fa02cd9d2cc012ae3e9b33ff414e1615e4c05bf9dcdc7ea0bba0cde9773dd06->enter($__internal_5fa02cd9d2cc012ae3e9b33ff414e1615e4c05bf9dcdc7ea0bba0cde9773dd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ecd9593554f1231ebcb086cf6eef1724dd9da598dcd4a6d6f954d9f58ad05e08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd9593554f1231ebcb086cf6eef1724dd9da598dcd4a6d6f954d9f58ad05e08->enter($__internal_ecd9593554f1231ebcb086cf6eef1724dd9da598dcd4a6d6f954d9f58ad05e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
  </head>

  <body>
    <!-- style=\"background-image :url('public/img/montañas.jpg');\"-->

    <div class=\"container\" style=\"padding-top: 2em;\">
      <div class=\"header clearfix\">

        <nav class=\"navbar navbar-default\" role=\"navigation\" style=\"opacity: 0.9\">
          <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                data-target=\".navbar-ex1-collapse\">
                <span class=\"sr-only\">Desplegar navegación</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Alojaminto Rural</a>
          </div>

          <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
            <ul class=\"nav navbar-nav\">
              <li><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nosotros");
        echo "\">Nosotros</a></li>
              <li><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contacto");
        echo "\">Contacto</a></li>
              <li><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rural");
        echo "\">Rural</a></li>
            </ul>

            <form class=\"navbar-form pull-right\" role=\"search\">
              <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Buscar\">
              </div>
              <button type=\"submit\" class=\"btn btn-default\">Enviar</button>
            </form>
          </div>
        </nav>

      </div>

      ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "
      <div class=\"row marketing\">

        <div class=\"col-lg-6\">
          <h4>Subheading1</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
        </div>

        <div class=\"col-lg-6\">
          <h4>Subheading2</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
        </div>

      </div>

      <br><br>

      <footer id=\"myFooter\">
          <div class=\"container\">
              <div class=\"row\">
                  <div class=\"col-sm-3\">
                      <h2 class=\"logo\"><a href=\"#\"> LOGO </a></h2>
                  </div>
                  <div class=\"col-sm-2\">
                      <h5>Get started</h5>
                      <ul>
                          <li><a href=\"#\">Home</a></li>
                          <li><a href=\"#\">Sign up</a></li>
                          <li><a href=\"#\">Downloads</a></li>
                      </ul>
                  </div>
                  <div class=\"col-sm-2\">
                      <h5>About us</h5>
                      <ul>
                          <li><a href=\"#\">Company Information</a></li>
                          <li><a href=\"#\">Contact us</a></li>
                          <li><a href=\"#\">Reviews</a></li>
                      </ul>
                  </div>
                  <div class=\"col-sm-2\">
                      <h5>Support</h5>
                      <ul>
                          <li><a href=\"#\">FAQ</a></li>
                          <li><a href=\"#\">Help desk</a></li>
                          <li><a href=\"#\">Forums</a></li>
                      </ul>
                  </div>
                  <div class=\"col-sm-3\">
                      <div class=\"social-networks\">
                          <a href=\"#\" class=\"twitter\"><i class=\"fa fa-twitter\"></i></a>
                          <a href=\"#\" class=\"facebook\"><i class=\"fa fa-facebook\"></i></a>
                          <a href=\"#\" class=\"google\"><i class=\"fa fa-google-plus\"></i></a>
                      </div>
                      <button type=\"button\" class=\"btn btn-default\">Contact us</button>
                  </div>
              </div>
          </div>
          <div class=\"footer-copyright\">
              <p>© 2017 Copyright Adraca </p>
          </div>
      </footer>

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    ";
        // line 125
        $this->displayBlock('javascripts', $context, $blocks);
        // line 129
        echo "  </body>
</html>
";
        
        $__internal_5fa02cd9d2cc012ae3e9b33ff414e1615e4c05bf9dcdc7ea0bba0cde9773dd06->leave($__internal_5fa02cd9d2cc012ae3e9b33ff414e1615e4c05bf9dcdc7ea0bba0cde9773dd06_prof);

        
        $__internal_ecd9593554f1231ebcb086cf6eef1724dd9da598dcd4a6d6f954d9f58ad05e08->leave($__internal_ecd9593554f1231ebcb086cf6eef1724dd9da598dcd4a6d6f954d9f58ad05e08_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_54ea45961b7ba1e41fe205897308af89d34bbb7103f1e6892f8cd31b8869ae2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54ea45961b7ba1e41fe205897308af89d34bbb7103f1e6892f8cd31b8869ae2e->enter($__internal_54ea45961b7ba1e41fe205897308af89d34bbb7103f1e6892f8cd31b8869ae2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_29d6e204853c8d17183ecc1f6991800145c99c1b04e7fa8e67f089db15752c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29d6e204853c8d17183ecc1f6991800145c99c1b04e7fa8e67f089db15752c24->enter($__internal_29d6e204853c8d17183ecc1f6991800145c99c1b04e7fa8e67f089db15752c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Alojamiento Rural";
        
        $__internal_29d6e204853c8d17183ecc1f6991800145c99c1b04e7fa8e67f089db15752c24->leave($__internal_29d6e204853c8d17183ecc1f6991800145c99c1b04e7fa8e67f089db15752c24_prof);

        
        $__internal_54ea45961b7ba1e41fe205897308af89d34bbb7103f1e6892f8cd31b8869ae2e->leave($__internal_54ea45961b7ba1e41fe205897308af89d34bbb7103f1e6892f8cd31b8869ae2e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_865f44b83c56736bd5bfb46784bca917b76391d2380ddde2c9cbfb833af77939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_865f44b83c56736bd5bfb46784bca917b76391d2380ddde2c9cbfb833af77939->enter($__internal_865f44b83c56736bd5bfb46784bca917b76391d2380ddde2c9cbfb833af77939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7a1915718155026e3081914769eb7e8cde23d8ff2c5fd4f1e0fd81553f4c691b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a1915718155026e3081914769eb7e8cde23d8ff2c5fd4f1e0fd81553f4c691b->enter($__internal_7a1915718155026e3081914769eb7e8cde23d8ff2c5fd4f1e0fd81553f4c691b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "      <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
      <link href=\"http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\">
      <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/footer.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    ";
        
        $__internal_7a1915718155026e3081914769eb7e8cde23d8ff2c5fd4f1e0fd81553f4c691b->leave($__internal_7a1915718155026e3081914769eb7e8cde23d8ff2c5fd4f1e0fd81553f4c691b_prof);

        
        $__internal_865f44b83c56736bd5bfb46784bca917b76391d2380ddde2c9cbfb833af77939->leave($__internal_865f44b83c56736bd5bfb46784bca917b76391d2380ddde2c9cbfb833af77939_prof);

    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        $__internal_030ae335e0d16deff81be9c7631478a7d80dcf9c9623c9025b7abc4556115c08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_030ae335e0d16deff81be9c7631478a7d80dcf9c9623c9025b7abc4556115c08->enter($__internal_030ae335e0d16deff81be9c7631478a7d80dcf9c9623c9025b7abc4556115c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_07d7e6b75efed44f5a6b4f9731950a920a1c6cf9f3ffc5355b67a88e1d4d734f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d7e6b75efed44f5a6b4f9731950a920a1c6cf9f3ffc5355b67a88e1d4d734f->enter($__internal_07d7e6b75efed44f5a6b4f9731950a920a1c6cf9f3ffc5355b67a88e1d4d734f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 57
        echo "      ";
        
        $__internal_07d7e6b75efed44f5a6b4f9731950a920a1c6cf9f3ffc5355b67a88e1d4d734f->leave($__internal_07d7e6b75efed44f5a6b4f9731950a920a1c6cf9f3ffc5355b67a88e1d4d734f_prof);

        
        $__internal_030ae335e0d16deff81be9c7631478a7d80dcf9c9623c9025b7abc4556115c08->leave($__internal_030ae335e0d16deff81be9c7631478a7d80dcf9c9623c9025b7abc4556115c08_prof);

    }

    // line 125
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_978d5c5bec58e08a2a968a8dce61697d14531c34a1f4c216e0b90bf3a26fd1b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_978d5c5bec58e08a2a968a8dce61697d14531c34a1f4c216e0b90bf3a26fd1b7->enter($__internal_978d5c5bec58e08a2a968a8dce61697d14531c34a1f4c216e0b90bf3a26fd1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_906d2ac7916c84eda5f968adbf4f6f09b4aa8d464fa1a2b977a960dd18a1b3a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_906d2ac7916c84eda5f968adbf4f6f09b4aa8d464fa1a2b977a960dd18a1b3a2->enter($__internal_906d2ac7916c84eda5f968adbf4f6f09b4aa8d464fa1a2b977a960dd18a1b3a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 126
        echo "      <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    ";
        
        $__internal_906d2ac7916c84eda5f968adbf4f6f09b4aa8d464fa1a2b977a960dd18a1b3a2->leave($__internal_906d2ac7916c84eda5f968adbf4f6f09b4aa8d464fa1a2b977a960dd18a1b3a2_prof);

        
        $__internal_978d5c5bec58e08a2a968a8dce61697d14531c34a1f4c216e0b90bf3a26fd1b7->leave($__internal_978d5c5bec58e08a2a968a8dce61697d14531c34a1f4c216e0b90bf3a26fd1b7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 126,  250 => 125,  240 => 57,  231 => 56,  219 => 15,  215 => 13,  206 => 12,  188 => 10,  176 => 129,  174 => 125,  105 => 58,  103 => 56,  86 => 42,  82 => 41,  78 => 40,  70 => 35,  50 => 17,  48 => 12,  43 => 10,  38 => 8,  29 => 1,);
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
<html lang=\"es\">
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    <title>{% block title %}Alojamiento Rural{% endblock %}</title>

    {% block stylesheets %}
      <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
      <link href=\"http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\">
      <link href=\"{{ asset('public/css/footer.css') }}\" rel=\"stylesheet\" />
    {% endblock %}

  </head>

  <body>
    <!-- style=\"background-image :url('public/img/montañas.jpg');\"-->

    <div class=\"container\" style=\"padding-top: 2em;\">
      <div class=\"header clearfix\">

        <nav class=\"navbar navbar-default\" role=\"navigation\" style=\"opacity: 0.9\">
          <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                data-target=\".navbar-ex1-collapse\">
                <span class=\"sr-only\">Desplegar navegación</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{path('home')}}\">Alojaminto Rural</a>
          </div>

          <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
            <ul class=\"nav navbar-nav\">
              <li><a href=\"{{path('nosotros')}}\">Nosotros</a></li>
              <li><a href=\"{{path('contacto')}}\">Contacto</a></li>
              <li><a href=\"{{path('rural')}}\">Rural</a></li>
            </ul>

            <form class=\"navbar-form pull-right\" role=\"search\">
              <div class=\"form-group\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Buscar\">
              </div>
              <button type=\"submit\" class=\"btn btn-default\">Enviar</button>
            </form>
          </div>
        </nav>

      </div>

      {% block body %}
      {% endblock %}

      <div class=\"row marketing\">

        <div class=\"col-lg-6\">
          <h4>Subheading1</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
        </div>

        <div class=\"col-lg-6\">
          <h4>Subheading2</h4>
          <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
        </div>

      </div>

      <br><br>

      <footer id=\"myFooter\">
          <div class=\"container\">
              <div class=\"row\">
                  <div class=\"col-sm-3\">
                      <h2 class=\"logo\"><a href=\"#\"> LOGO </a></h2>
                  </div>
                  <div class=\"col-sm-2\">
                      <h5>Get started</h5>
                      <ul>
                          <li><a href=\"#\">Home</a></li>
                          <li><a href=\"#\">Sign up</a></li>
                          <li><a href=\"#\">Downloads</a></li>
                      </ul>
                  </div>
                  <div class=\"col-sm-2\">
                      <h5>About us</h5>
                      <ul>
                          <li><a href=\"#\">Company Information</a></li>
                          <li><a href=\"#\">Contact us</a></li>
                          <li><a href=\"#\">Reviews</a></li>
                      </ul>
                  </div>
                  <div class=\"col-sm-2\">
                      <h5>Support</h5>
                      <ul>
                          <li><a href=\"#\">FAQ</a></li>
                          <li><a href=\"#\">Help desk</a></li>
                          <li><a href=\"#\">Forums</a></li>
                      </ul>
                  </div>
                  <div class=\"col-sm-3\">
                      <div class=\"social-networks\">
                          <a href=\"#\" class=\"twitter\"><i class=\"fa fa-twitter\"></i></a>
                          <a href=\"#\" class=\"facebook\"><i class=\"fa fa-facebook\"></i></a>
                          <a href=\"#\" class=\"google\"><i class=\"fa fa-google-plus\"></i></a>
                      </div>
                      <button type=\"button\" class=\"btn btn-default\">Contact us</button>
                  </div>
              </div>
          </div>
          <div class=\"footer-copyright\">
              <p>© 2017 Copyright Adraca </p>
          </div>
      </footer>

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    {% block javascripts %}
      <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    {% endblock %}
  </body>
</html>
", "base.html.twig", "C:\\Symfony\\alojamiento_rural\\app\\Resources\\views\\base.html.twig");
    }
}
