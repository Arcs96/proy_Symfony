<?php

/* baseRural.html.twig */
class __TwigTemplate_d2828bf76abaa0f2ae27d59ac5a66983dc751137a370897171de4c1378a8f8e1 extends Twig_Template
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
        $__internal_efdf5e628676de51fe479cea5c06c008caa95a68482eddbc573e06a8740ed0b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efdf5e628676de51fe479cea5c06c008caa95a68482eddbc573e06a8740ed0b8->enter($__internal_efdf5e628676de51fe479cea5c06c008caa95a68482eddbc573e06a8740ed0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseRural.html.twig"));

        $__internal_6b5babfdcb91718f9f5a72f6c72bb676084c32c0038b039b89b38a5285b440b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b5babfdcb91718f9f5a72f6c72bb676084c32c0038b039b89b38a5285b440b1->enter($__internal_6b5babfdcb91718f9f5a72f6c72bb676084c32c0038b039b89b38a5285b440b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseRural.html.twig"));

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

  <body style=\"background-image :url('http://www.hdfondos.eu/pictures/2014/0416/1/orig_350227.jpg');\">

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
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Alojaminto Rural</a>
          </div>

          <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
            <ul class=\"nav navbar-nav\">
              <li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("");
        echo "\">Alojamiento</a></li>
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
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "
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
        // line 108
        $this->displayBlock('javascripts', $context, $blocks);
        // line 112
        echo "  </body>
</html>
";
        
        $__internal_efdf5e628676de51fe479cea5c06c008caa95a68482eddbc573e06a8740ed0b8->leave($__internal_efdf5e628676de51fe479cea5c06c008caa95a68482eddbc573e06a8740ed0b8_prof);

        
        $__internal_6b5babfdcb91718f9f5a72f6c72bb676084c32c0038b039b89b38a5285b440b1->leave($__internal_6b5babfdcb91718f9f5a72f6c72bb676084c32c0038b039b89b38a5285b440b1_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_d37f452ad4755da95a5dfe3811b21dc7a977396428e14bd44374360159b07691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d37f452ad4755da95a5dfe3811b21dc7a977396428e14bd44374360159b07691->enter($__internal_d37f452ad4755da95a5dfe3811b21dc7a977396428e14bd44374360159b07691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b8d7e90fce43de03dd811ac6a18833d9142f77870cf1c1334b25f8ca6b0b3a73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8d7e90fce43de03dd811ac6a18833d9142f77870cf1c1334b25f8ca6b0b3a73->enter($__internal_b8d7e90fce43de03dd811ac6a18833d9142f77870cf1c1334b25f8ca6b0b3a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Alojamiento Rural";
        
        $__internal_b8d7e90fce43de03dd811ac6a18833d9142f77870cf1c1334b25f8ca6b0b3a73->leave($__internal_b8d7e90fce43de03dd811ac6a18833d9142f77870cf1c1334b25f8ca6b0b3a73_prof);

        
        $__internal_d37f452ad4755da95a5dfe3811b21dc7a977396428e14bd44374360159b07691->leave($__internal_d37f452ad4755da95a5dfe3811b21dc7a977396428e14bd44374360159b07691_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4f507f4c882909134b4dcecbed41e14a5657250193cf47ec1bad246127bb1a4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f507f4c882909134b4dcecbed41e14a5657250193cf47ec1bad246127bb1a4b->enter($__internal_4f507f4c882909134b4dcecbed41e14a5657250193cf47ec1bad246127bb1a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4469cfba554212f4fd38e20c7d885861fc55b1bedb1437de575af896b2574896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4469cfba554212f4fd38e20c7d885861fc55b1bedb1437de575af896b2574896->enter($__internal_4469cfba554212f4fd38e20c7d885861fc55b1bedb1437de575af896b2574896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "      <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
      <link href=\"http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\">
      <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/footer.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    ";
        
        $__internal_4469cfba554212f4fd38e20c7d885861fc55b1bedb1437de575af896b2574896->leave($__internal_4469cfba554212f4fd38e20c7d885861fc55b1bedb1437de575af896b2574896_prof);

        
        $__internal_4f507f4c882909134b4dcecbed41e14a5657250193cf47ec1bad246127bb1a4b->leave($__internal_4f507f4c882909134b4dcecbed41e14a5657250193cf47ec1bad246127bb1a4b_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_067553fd7434be1bae98dce50d3319ca8aa36091819bd9bc83c89e33e3747cbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_067553fd7434be1bae98dce50d3319ca8aa36091819bd9bc83c89e33e3747cbb->enter($__internal_067553fd7434be1bae98dce50d3319ca8aa36091819bd9bc83c89e33e3747cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e57d2b2f67fe3d26c710f31af9a2ef38a1ccd1af4310b0b995dcd51ec0699e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e57d2b2f67fe3d26c710f31af9a2ef38a1ccd1af4310b0b995dcd51ec0699e8->enter($__internal_0e57d2b2f67fe3d26c710f31af9a2ef38a1ccd1af4310b0b995dcd51ec0699e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 54
        echo "      ";
        
        $__internal_0e57d2b2f67fe3d26c710f31af9a2ef38a1ccd1af4310b0b995dcd51ec0699e8->leave($__internal_0e57d2b2f67fe3d26c710f31af9a2ef38a1ccd1af4310b0b995dcd51ec0699e8_prof);

        
        $__internal_067553fd7434be1bae98dce50d3319ca8aa36091819bd9bc83c89e33e3747cbb->leave($__internal_067553fd7434be1bae98dce50d3319ca8aa36091819bd9bc83c89e33e3747cbb_prof);

    }

    // line 108
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_edbe349d81d0b82c926cb9e5653276cb4264e89fcba2ba229dfd2e3d4d8920b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edbe349d81d0b82c926cb9e5653276cb4264e89fcba2ba229dfd2e3d4d8920b4->enter($__internal_edbe349d81d0b82c926cb9e5653276cb4264e89fcba2ba229dfd2e3d4d8920b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f40bbc5fbf681ec1d5910cb5e9f1eafb93b5b6cd071885a527b6f9601884adfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f40bbc5fbf681ec1d5910cb5e9f1eafb93b5b6cd071885a527b6f9601884adfb->enter($__internal_f40bbc5fbf681ec1d5910cb5e9f1eafb93b5b6cd071885a527b6f9601884adfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 109
        echo "      <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    ";
        
        $__internal_f40bbc5fbf681ec1d5910cb5e9f1eafb93b5b6cd071885a527b6f9601884adfb->leave($__internal_f40bbc5fbf681ec1d5910cb5e9f1eafb93b5b6cd071885a527b6f9601884adfb_prof);

        
        $__internal_edbe349d81d0b82c926cb9e5653276cb4264e89fcba2ba229dfd2e3d4d8920b4->leave($__internal_edbe349d81d0b82c926cb9e5653276cb4264e89fcba2ba229dfd2e3d4d8920b4_prof);

    }

    public function getTemplateName()
    {
        return "baseRural.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 109,  227 => 108,  217 => 54,  208 => 53,  196 => 15,  192 => 13,  183 => 12,  165 => 10,  153 => 112,  151 => 108,  96 => 55,  94 => 53,  77 => 39,  69 => 34,  50 => 17,  48 => 12,  43 => 10,  38 => 8,  29 => 1,);
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

  <body style=\"background-image :url('http://www.hdfondos.eu/pictures/2014/0416/1/orig_350227.jpg');\">

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
              <li><a href=\"{{path('')}}\">Alojamiento</a></li>
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
", "baseRural.html.twig", "C:\\Symfony\\alojamiento_rural\\app\\Resources\\views\\baseRural.html.twig");
    }
}
