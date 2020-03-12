<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_c4da13740c7cc737e344577d7ce3412568f90357b0cbb2f1c50854c695753ecc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "locale", [], "any", false, false, false, 2), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"UTF-8\">
         <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"content\"> 
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "        </div>
    </body>
    
    ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 135
        echo "</html>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Sportcity";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"https://js.arcgis.com/4.14/esri/themes/light/main.css\">
            
            ";
        // line 10
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("style");
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "        ";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
        <script src=\"https://js.arcgis.com/4.14/\"></script>
          <script>
               require([
      \"esri/WebMap\",
      \"esri/views/MapView\",
      \"esri/Graphic\",
      \"esri/tasks/RouteTask\",
      \"esri/tasks/support/RouteParameters\",
      \"esri/tasks/support/FeatureSet\",
      \"esri/symbols/SimpleMarkerSymbol\",
      \"esri/widgets/Locate\"
    ], function(WebMap, MapView, Graphic, RouteTask, RouteParameters, FeatureSet,
      SimpleMarkerSymbol, Locate) {
      
      var currentLocation ={x:'',y:''};
      
      var webmap = new WebMap({
        portalItem: {
          id: \"c968e268949b4f788ee40377d8cb3d5f\"
        }
      });
      var view = new MapView({
        container: \"map\",
        map: webmap,
        zoom: 15  
      });

    
      // To allow access to the route service and prevent the user from signing in, do the Challenge step in the lab to set up a service proxy
      var routeTask = new RouteTask({
        url: \"https://utility.arcgis.com/usrsvcs/appservices/uCBvRQrsxatncY9H/rest/services/World/Route/NAServer/Route_World/solve\"
      });
      
      view.on(\"click\", function(event){
        if (view.graphics.length === 0) {
          //addGraphic(\"start\", event.mapPoint);
        } else if (view.graphics.length === 1) {
          addGraphic(\"finish\", event.mapPoint);
          getRoute();
        } else {
          view.graphics.removeAll();
          document.getElementById(\"totalDistance\").innerHTML = \"\";
          document.getElementById(\"totalTime\").innerHTML = \"\";
         // addGraphic(\"start\",event.mapPoint);
        }
      });

      function addGraphic(type, point) {
        var graphic = new Graphic({
          symbol: {
            type: \"simple-marker\",
            color: (type === \"start\") ? \"white\" : \"black\",
            size: \"8px\"
          },
          geometry: point
        });
        view.graphics.add(graphic);
      }

      function getRoute() {
        // Setup the route parameters
        var routeParams = new RouteParameters({
          stops: new FeatureSet({
            features: view.graphics.toArray() // Pass the array of graphics
          }),
          directionsLengthUnits:\"kilometers\",
          returnDirections: true
        });
        // Get the route
        routeTask.solve(routeParams).then(function(data) {
          // Display the route
          data.routeResults.forEach(function(result) {
            result.route.symbol = {
              type: \"simple-line\",
              color: [5, 150, 255],
              width: 3
            };
            view.graphics.add(result.route);
          });


          // Show the directions
          let totalDistance = 0;
         
          totalDistance = data.routeResults[0].route.attributes.Total_Kilometers.toFixed(2)
          let totalTime = data.routeResults[0].route.attributes.Total_TravelTime.toFixed(0)*2;
          document.getElementById(\"totalDistance\").innerHTML = totalDistance + \"KM\";
          document.getElementById(\"totalTime\").innerHTML = totalTime + \"Min\";
          // Add directions to the view
          view.ui.empty(\"top-right\");
 
        });
      }
      

      var locate = new Locate({
        view: view,
        useHeadingEnabled: false,
        goToOverride: function(view, options) {
          options.target.scale = 20000;  // Override the default map scale
          currentLocation.x = options.target.target.x;
          currentLocation.y = options.target.target.y;
          return view.goTo(options.target);
        }
      });

      view.ui.add(locate, \"top-left\");

    });
           
            </script>
        
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  139 => 21,  132 => 20,  120 => 16,  111 => 10,  107 => 8,  100 => 7,  87 => 6,  77 => 135,  75 => 20,  70 => 17,  68 => 16,  60 => 12,  58 => 7,  54 => 6,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale }}\">
    <head>
        <meta charset=\"UTF-8\">
         <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <title>{% block title %}Sportcity{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://js.arcgis.com/4.14/esri/themes/light/main.css\">
            
            {{ encore_entry_link_tags('style') }}
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        <div id=\"content\"> 
        {% block body %}{% endblock %}
        </div>
    </body>
    
    {% block javascripts %}
        {{ encore_entry_script_tags('app') }}
        <script src=\"https://js.arcgis.com/4.14/\"></script>
          <script>
               require([
      \"esri/WebMap\",
      \"esri/views/MapView\",
      \"esri/Graphic\",
      \"esri/tasks/RouteTask\",
      \"esri/tasks/support/RouteParameters\",
      \"esri/tasks/support/FeatureSet\",
      \"esri/symbols/SimpleMarkerSymbol\",
      \"esri/widgets/Locate\"
    ], function(WebMap, MapView, Graphic, RouteTask, RouteParameters, FeatureSet,
      SimpleMarkerSymbol, Locate) {
      
      var currentLocation ={x:'',y:''};
      
      var webmap = new WebMap({
        portalItem: {
          id: \"c968e268949b4f788ee40377d8cb3d5f\"
        }
      });
      var view = new MapView({
        container: \"map\",
        map: webmap,
        zoom: 15  
      });

    
      // To allow access to the route service and prevent the user from signing in, do the Challenge step in the lab to set up a service proxy
      var routeTask = new RouteTask({
        url: \"https://utility.arcgis.com/usrsvcs/appservices/uCBvRQrsxatncY9H/rest/services/World/Route/NAServer/Route_World/solve\"
      });
      
      view.on(\"click\", function(event){
        if (view.graphics.length === 0) {
          //addGraphic(\"start\", event.mapPoint);
        } else if (view.graphics.length === 1) {
          addGraphic(\"finish\", event.mapPoint);
          getRoute();
        } else {
          view.graphics.removeAll();
          document.getElementById(\"totalDistance\").innerHTML = \"\";
          document.getElementById(\"totalTime\").innerHTML = \"\";
         // addGraphic(\"start\",event.mapPoint);
        }
      });

      function addGraphic(type, point) {
        var graphic = new Graphic({
          symbol: {
            type: \"simple-marker\",
            color: (type === \"start\") ? \"white\" : \"black\",
            size: \"8px\"
          },
          geometry: point
        });
        view.graphics.add(graphic);
      }

      function getRoute() {
        // Setup the route parameters
        var routeParams = new RouteParameters({
          stops: new FeatureSet({
            features: view.graphics.toArray() // Pass the array of graphics
          }),
          directionsLengthUnits:\"kilometers\",
          returnDirections: true
        });
        // Get the route
        routeTask.solve(routeParams).then(function(data) {
          // Display the route
          data.routeResults.forEach(function(result) {
            result.route.symbol = {
              type: \"simple-line\",
              color: [5, 150, 255],
              width: 3
            };
            view.graphics.add(result.route);
          });


          // Show the directions
          let totalDistance = 0;
         
          totalDistance = data.routeResults[0].route.attributes.Total_Kilometers.toFixed(2)
          let totalTime = data.routeResults[0].route.attributes.Total_TravelTime.toFixed(0)*2;
          document.getElementById(\"totalDistance\").innerHTML = totalDistance + \"KM\";
          document.getElementById(\"totalTime\").innerHTML = totalTime + \"Min\";
          // Add directions to the view
          view.ui.empty(\"top-right\");
 
        });
      }
      

      var locate = new Locate({
        view: view,
        useHeadingEnabled: false,
        goToOverride: function(view, options) {
          options.target.scale = 20000;  // Override the default map scale
          currentLocation.x = options.target.target.x;
          currentLocation.y = options.target.target.y;
          return view.goTo(options.target);
        }
      });

      view.ui.add(locate, \"top-left\");

    });
           
            </script>
        
    {% endblock %}
</html>


", "base.html.twig", "/Users/t902719/Downloads/sportcity/templates/base.html.twig");
    }
}
