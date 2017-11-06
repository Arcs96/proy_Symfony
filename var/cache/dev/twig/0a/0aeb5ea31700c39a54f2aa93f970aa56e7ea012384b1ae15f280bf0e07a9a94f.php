<?php

/* basePrincipal.html.twig */
class __TwigTemplate_f5b544daec75bf38d7ae74db16c15a05f8d1ae1fe72e07778964dd2ac8b0b802 extends Twig_Template
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
        $__internal_7d5786a1c9ce6ce2421a03c4fdd9cefb11a4a8d161a24504c5eaa3dfb6a58d11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d5786a1c9ce6ce2421a03c4fdd9cefb11a4a8d161a24504c5eaa3dfb6a58d11->enter($__internal_7d5786a1c9ce6ce2421a03c4fdd9cefb11a4a8d161a24504c5eaa3dfb6a58d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basePrincipal.html.twig"));

        $__internal_b7b782028a26124a1e353dd34fdf64df3941073accfbf6b383a46a57bb32df26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b782028a26124a1e353dd34fdf64df3941073accfbf6b383a46a57bb32df26->enter($__internal_b7b782028a26124a1e353dd34fdf64df3941073accfbf6b383a46a57bb32df26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basePrincipal.html.twig"));

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
    <!-- style=\"background-image :url('../public/img/montañas.jpg');\"-->

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comarca");
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
        
        $__internal_7d5786a1c9ce6ce2421a03c4fdd9cefb11a4a8d161a24504c5eaa3dfb6a58d11->leave($__internal_7d5786a1c9ce6ce2421a03c4fdd9cefb11a4a8d161a24504c5eaa3dfb6a58d11_prof);

        
        $__internal_b7b782028a26124a1e353dd34fdf64df3941073accfbf6b383a46a57bb32df26->leave($__internal_b7b782028a26124a1e353dd34fdf64df3941073accfbf6b383a46a57bb32df26_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_50ff4cb2a034f57b739f2a6f8acf9a2c22817f268658f0a6e8c8407fd56d520d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ff4cb2a034f57b739f2a6f8acf9a2c22817f268658f0a6e8c8407fd56d520d->enter($__internal_50ff4cb2a034f57b739f2a6f8acf9a2c22817f268658f0a6e8c8407fd56d520d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_22b9906c154e4a1fd6b1ef0178759c72ec1556b3877560c54dd58e38b6dd26fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22b9906c154e4a1fd6b1ef0178759c72ec1556b3877560c54dd58e38b6dd26fa->enter($__internal_22b9906c154e4a1fd6b1ef0178759c72ec1556b3877560c54dd58e38b6dd26fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Alojamiento Rural";
        
        $__internal_22b9906c154e4a1fd6b1ef0178759c72ec1556b3877560c54dd58e38b6dd26fa->leave($__internal_22b9906c154e4a1fd6b1ef0178759c72ec1556b3877560c54dd58e38b6dd26fa_prof);

        
        $__internal_50ff4cb2a034f57b739f2a6f8acf9a2c22817f268658f0a6e8c8407fd56d520d->leave($__internal_50ff4cb2a034f57b739f2a6f8acf9a2c22817f268658f0a6e8c8407fd56d520d_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_df58d072580cd0824eec1df5089897dbe2215c3f5cbe47de194aef4ac189c4ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df58d072580cd0824eec1df5089897dbe2215c3f5cbe47de194aef4ac189c4ab->enter($__internal_df58d072580cd0824eec1df5089897dbe2215c3f5cbe47de194aef4ac189c4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_efb83235019e922692f85a17b493ce0dfce27cb46c0eb45dc39171cb97da1524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efb83235019e922692f85a17b493ce0dfce27cb46c0eb45dc39171cb97da1524->enter($__internal_efb83235019e922692f85a17b493ce0dfce27cb46c0eb45dc39171cb97da1524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "      <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">
      <link href=\"http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css\">
      <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/footer.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    ";
        
        $__internal_efb83235019e922692f85a17b493ce0dfce27cb46c0eb45dc39171cb97da1524->leave($__internal_efb83235019e922692f85a17b493ce0dfce27cb46c0eb45dc39171cb97da1524_prof);

        
        $__internal_df58d072580cd0824eec1df5089897dbe2215c3f5cbe47de194aef4ac189c4ab->leave($__internal_df58d072580cd0824eec1df5089897dbe2215c3f5cbe47de194aef4ac189c4ab_prof);

    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4e2f0fa9514b2e97a940a71c9f448c5bfb9cdbcff2a0cab0b63a529d72a3887 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4e2f0fa9514b2e97a940a71c9f448c5bfb9cdbcff2a0cab0b63a529d72a3887->enter($__internal_c4e2f0fa9514b2e97a940a71c9f448c5bfb9cdbcff2a0cab0b63a529d72a3887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2ba79af3fc2c5dbe1b5dc2784867dfeeb699fc0006e34c6fae4302dcae4eec4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba79af3fc2c5dbe1b5dc2784867dfeeb699fc0006e34c6fae4302dcae4eec4f->enter($__internal_2ba79af3fc2c5dbe1b5dc2784867dfeeb699fc0006e34c6fae4302dcae4eec4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 57
        echo "      ";
        
        $__internal_2ba79af3fc2c5dbe1b5dc2784867dfeeb699fc0006e34c6fae4302dcae4eec4f->leave($__internal_2ba79af3fc2c5dbe1b5dc2784867dfeeb699fc0006e34c6fae4302dcae4eec4f_prof);

        
        $__internal_c4e2f0fa9514b2e97a940a71c9f448c5bfb9cdbcff2a0cab0b63a529d72a3887->leave($__internal_c4e2f0fa9514b2e97a940a71c9f448c5bfb9cdbcff2a0cab0b63a529d72a3887_prof);

    }

    // line 125
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4a831949683629278f54514280502c485dfe95f92317478c4157d36231e5bd8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a831949683629278f54514280502c485dfe95f92317478c4157d36231e5bd8e->enter($__internal_4a831949683629278f54514280502c485dfe95f92317478c4157d36231e5bd8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0cde4f240f5adb3f940f0e2c67d30a27b68940022da952a97c4c66800e91de43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cde4f240f5adb3f940f0e2c67d30a27b68940022da952a97c4c66800e91de43->enter($__internal_0cde4f240f5adb3f940f0e2c67d30a27b68940022da952a97c4c66800e91de43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 126
        echo "      <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\" integrity=\"sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa\" crossorigin=\"anonymous\"></script>
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    ";
        
        $__internal_0cde4f240f5adb3f940f0e2c67d30a27b68940022da952a97c4c66800e91de43->leave($__internal_0cde4f240f5adb3f940f0e2c67d30a27b68940022da952a97c4c66800e91de43_prof);

        
        $__internal_4a831949683629278f54514280502c485dfe95f92317478c4157d36231e5bd8e->leave($__internal_4a831949683629278f54514280502c485dfe95f92317478c4157d36231e5bd8e_prof);

    }

    public function getTemplateName()
    {
        return "basePrincipal.html.twig";
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

  <body style=\"background-image :url('http://www.hdfondos.eu/pictures/2014/0416/1/orig_350227.jpg');\">
    <!-- style=\"background-image :url('../public/img/montañas.jpg');\"-->

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
              <li><a href=\"{{path('comarca')}}\">Rural</a></li>
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
", "basePrincipal.html.twig", "C:\\Symfony\\alojamiento_rural\\app\\Resources\\views\\basePrincipal.html.twig");
    }
}
