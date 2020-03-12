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

/* frontend/index.html.twig */
class __TwigTemplate_e1d1055a3ba0e2b7d18cce35c178b6ebf33080c3479ef0d0636f0c98ce1ed24b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "frontend/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "frontend/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"map\">
        
    </div>
   
   <div id=\"navigate\">
       <div class=\"child\">
            <button type=\"button\" id=\"add\" class=\"btn btn-primary btn-circle btn-xl\"><span>+</span></button> 
       </div>
       <div class=\"child\" id=\"totalDistance\"></div>
       <div class=\"child\">
            <button type=\"button\" id=\"go\" class=\"btn btn-secondary btn-circle btn-xl\"><span>GO</span></button> 
       </div>
       <div class=\"child\" id=\"totalTime\"></div>
       <div class=\"child\">
            <button type=\"button\" id=\"km\" class=\"btn btn-success btn-circle btn-xl\"><img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/award1.png")), "html", null, true);
        echo "\" alt=\"icon\" /></button> 
        </div>
   </div>    
   
        <div id=\"hidden-go\">
            
            
            
            <h2>Tu penses jouer?</h2>
            <br />
            <div class=\"hidden\">
             <div class=\"child\">
            <button type=\"button\" id=\"onehour\" class=\"btn btn-primary btn-circle btn-xl red\"><span>1h</span></button> 
             </div>
             <div class=\"child\">
            <button type=\"button\" id=\"twohour\" class=\"btn btn-secondary btn-circle btn-xl orange\"><span>2h</span></button> 
             </div>
             <div class=\"child\">
                 <button type=\"button\" id=\"treehour\" class=\"btn btn-success btn-circle btn-xl green\"><span>3h</span></button> 
             </div>
            </div>    
        </div>
        
        <div id=\"hidden-km\">
   
            <div class=\"hidden\">
             <div class=\"child\">
                <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/profil.png")), "html", null, true);
        echo "\" rel=\"preload\" class=\"img-profil\" alt=\"photo-profil\" />
             </div>
             <div class=\"child\">
                 <p>23 actions</p> 
             </div>
             <div class=\"child\">
                 <p>2385 points</p>
            </div>    
            </div>
            <div class=\"hidden\">
               
                <h2>Christophe Levesques</h2> 
                <br />
            </div>
            <div class=\"hidden\">
                <div class=\"point\">
                Sport expert<br />
                10% de remise     600 points <strong>Réclamer</strong>
                </div>
                <div class=\"scan\"><img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/code.png")), "html", null, true);
        echo "\" rel=\"preload\" alt=\"code barre\" /></div>
            </div>    
            <br />
            <br />
             <div class=\"hidden\">
                <div class=\"point\">
                Vélo Acro<br />
                5% de remise     400 points <strong>Réclamer</strong>
                </div>
                <div class=\"scan\"><img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/code.png")), "html", null, true);
        echo "\" rel=\"preload\" alt=\"code barre\" /></div>
            </div>    
        </div>
        
        <div id=\"hidden-add\">
         
            <div class=\"hidden\">
             <div class=\"child\">
                 <div class=\"cercle\">
                     <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/problem.png")), "html", null, true);
        echo "\" rel=\"preload\" />
                 </div>
                 <span>125 pts</span>
                 <br/>
                 <p>Rapporter un problème</p>
             </div>
             <div class=\"child\">
                 <div class=\"cercle\">
                     <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/info.png")), "html", null, true);
        echo "\" rel=\"preload\" />
                 </div>
                <span>100 pts</span>
                  <br/>
                 <p>Ajouter une info</p>
             </div>
             <div class=\"child\">
                 <div class=\"cercle\">
                     <img src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\WebLinkExtension']->preload($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/images/star.png")), "html", null, true);
        echo "\" rel=\"preload\" />
                 </div>
                 <span>10 pts</span>
                   <br/>
                 <p>Avis & notes</p>
             </div>
            </div>    
        </div>
        
    </div>        
 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 112
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 113
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        // line 114
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("homecss");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 117
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 118
        echo "     ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 119
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("home");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "frontend/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 119,  222 => 118,  215 => 117,  206 => 114,  201 => 113,  194 => 112,  175 => 98,  164 => 90,  153 => 82,  141 => 73,  129 => 64,  107 => 45,  77 => 18,  61 => 4,  54 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
    <div id=\"map\">
        
    </div>
   
   <div id=\"navigate\">
       <div class=\"child\">
            <button type=\"button\" id=\"add\" class=\"btn btn-primary btn-circle btn-xl\"><span>+</span></button> 
       </div>
       <div class=\"child\" id=\"totalDistance\"></div>
       <div class=\"child\">
            <button type=\"button\" id=\"go\" class=\"btn btn-secondary btn-circle btn-xl\"><span>GO</span></button> 
       </div>
       <div class=\"child\" id=\"totalTime\"></div>
       <div class=\"child\">
            <button type=\"button\" id=\"km\" class=\"btn btn-success btn-circle btn-xl\"><img src=\"{{ preload(asset('build/images/award1.png')) }}\" alt=\"icon\" /></button> 
        </div>
   </div>    
   
        <div id=\"hidden-go\">
            
            
            
            <h2>Tu penses jouer?</h2>
            <br />
            <div class=\"hidden\">
             <div class=\"child\">
            <button type=\"button\" id=\"onehour\" class=\"btn btn-primary btn-circle btn-xl red\"><span>1h</span></button> 
             </div>
             <div class=\"child\">
            <button type=\"button\" id=\"twohour\" class=\"btn btn-secondary btn-circle btn-xl orange\"><span>2h</span></button> 
             </div>
             <div class=\"child\">
                 <button type=\"button\" id=\"treehour\" class=\"btn btn-success btn-circle btn-xl green\"><span>3h</span></button> 
             </div>
            </div>    
        </div>
        
        <div id=\"hidden-km\">
   
            <div class=\"hidden\">
             <div class=\"child\">
                <img src=\"{{ preload(asset('build/images/profil.png')) }}\" rel=\"preload\" class=\"img-profil\" alt=\"photo-profil\" />
             </div>
             <div class=\"child\">
                 <p>23 actions</p> 
             </div>
             <div class=\"child\">
                 <p>2385 points</p>
            </div>    
            </div>
            <div class=\"hidden\">
               
                <h2>Christophe Levesques</h2> 
                <br />
            </div>
            <div class=\"hidden\">
                <div class=\"point\">
                Sport expert<br />
                10% de remise     600 points <strong>Réclamer</strong>
                </div>
                <div class=\"scan\"><img src=\"{{ preload(asset('build/images/code.png')) }}\" rel=\"preload\" alt=\"code barre\" /></div>
            </div>    
            <br />
            <br />
             <div class=\"hidden\">
                <div class=\"point\">
                Vélo Acro<br />
                5% de remise     400 points <strong>Réclamer</strong>
                </div>
                <div class=\"scan\"><img src=\"{{ preload(asset('build/images/code.png')) }}\" rel=\"preload\" alt=\"code barre\" /></div>
            </div>    
        </div>
        
        <div id=\"hidden-add\">
         
            <div class=\"hidden\">
             <div class=\"child\">
                 <div class=\"cercle\">
                     <img src=\"{{ preload(asset('build/images/problem.png')) }}\" rel=\"preload\" />
                 </div>
                 <span>125 pts</span>
                 <br/>
                 <p>Rapporter un problème</p>
             </div>
             <div class=\"child\">
                 <div class=\"cercle\">
                     <img src=\"{{ preload(asset('build/images/info.png')) }}\" rel=\"preload\" />
                 </div>
                <span>100 pts</span>
                  <br/>
                 <p>Ajouter une info</p>
             </div>
             <div class=\"child\">
                 <div class=\"cercle\">
                     <img src=\"{{ preload(asset('build/images/star.png')) }}\" rel=\"preload\" />
                 </div>
                 <span>10 pts</span>
                   <br/>
                 <p>Avis & notes</p>
             </div>
            </div>    
        </div>
        
    </div>        
 
{% endblock %}  


{% block stylesheets %}
    {{ parent() }}
    {{ encore_entry_link_tags('homecss') }}
{% endblock %}
    
 {% block javascripts %}
     {{ parent() }}
    {{ encore_entry_script_tags('home') }}
{% endblock %}", "frontend/index.html.twig", "/Users/t902719/Downloads/sportcity/templates/frontend/index.html.twig");
    }
}
