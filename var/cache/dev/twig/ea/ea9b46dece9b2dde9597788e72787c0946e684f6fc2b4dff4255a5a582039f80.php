<?php

/* base.html.twig */
class __TwigTemplate_f50e68c550996101dd556a4f6d2f2ff61c1b888372cd050b506bf9406acdbb6b extends Twig_Template
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
        $__internal_d1a4d49ad9a9ef12210f19ccec95b808bddd83d4764329c1a10bcbddd6a57d12 = $this->env->getExtension("native_profiler");
        $__internal_d1a4d49ad9a9ef12210f19ccec95b808bddd83d4764329c1a10bcbddd6a57d12->enter($__internal_d1a4d49ad9a9ef12210f19ccec95b808bddd83d4764329c1a10bcbddd6a57d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" href=\"../../favicon.ico\">

    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\">
    ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    
  </head>

  <body>

    <nav class=\"navbar navbar-inverse\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"/\">IrinaProject</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
          <ul class=\"nav navbar-nav\">
            <li><a href=\"/irina/about\">About me</a></li>
            <li><a href=\"/irina/create\">Add task</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 48
            echo "                  <div class=\"alert alert-success\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
                ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 52
            echo "                  <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "                ";
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "            </div>
        </div>

    </div><!-- /.container -->

    ";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "    
  </body>
</html>

";
        
        $__internal_d1a4d49ad9a9ef12210f19ccec95b808bddd83d4764329c1a10bcbddd6a57d12->leave($__internal_d1a4d49ad9a9ef12210f19ccec95b808bddd83d4764329c1a10bcbddd6a57d12_prof);

    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c885f0a255a4a340a945832564953dc71d12fd50b705f21760840c5ee7fe15c = $this->env->getExtension("native_profiler");
        $__internal_6c885f0a255a4a340a945832564953dc71d12fd50b705f21760840c5ee7fe15c->enter($__internal_6c885f0a255a4a340a945832564953dc71d12fd50b705f21760840c5ee7fe15c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6c885f0a255a4a340a945832564953dc71d12fd50b705f21760840c5ee7fe15c->leave($__internal_6c885f0a255a4a340a945832564953dc71d12fd50b705f21760840c5ee7fe15c_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_64e0a51db42d155f02b6c056500e7ff4962993ecd82ff9d136d797534747caff = $this->env->getExtension("native_profiler");
        $__internal_64e0a51db42d155f02b6c056500e7ff4962993ecd82ff9d136d797534747caff->enter($__internal_64e0a51db42d155f02b6c056500e7ff4962993ecd82ff9d136d797534747caff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_64e0a51db42d155f02b6c056500e7ff4962993ecd82ff9d136d797534747caff->leave($__internal_64e0a51db42d155f02b6c056500e7ff4962993ecd82ff9d136d797534747caff_prof);

    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        $__internal_29124bd1df1afbfc38279bf41967c453efc28cdd98725639c6eda6e1074f3cb2 = $this->env->getExtension("native_profiler");
        $__internal_29124bd1df1afbfc38279bf41967c453efc28cdd98725639c6eda6e1074f3cb2->enter($__internal_29124bd1df1afbfc38279bf41967c453efc28cdd98725639c6eda6e1074f3cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_29124bd1df1afbfc38279bf41967c453efc28cdd98725639c6eda6e1074f3cb2->leave($__internal_29124bd1df1afbfc38279bf41967c453efc28cdd98725639c6eda6e1074f3cb2_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aa03b2cb8dc0461933ea29ffa2b0d1b6eb84c86330c2276f2998ec1b4ed9047b = $this->env->getExtension("native_profiler");
        $__internal_aa03b2cb8dc0461933ea29ffa2b0d1b6eb84c86330c2276f2998ec1b4ed9047b->enter($__internal_aa03b2cb8dc0461933ea29ffa2b0d1b6eb84c86330c2276f2998ec1b4ed9047b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_aa03b2cb8dc0461933ea29ffa2b0d1b6eb84c86330c2276f2998ec1b4ed9047b->leave($__internal_aa03b2cb8dc0461933ea29ffa2b0d1b6eb84c86330c2276f2998ec1b4ed9047b_prof);

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
        return array (  168 => 60,  157 => 54,  146 => 16,  134 => 12,  123 => 61,  121 => 60,  114 => 55,  111 => 54,  102 => 52,  98 => 51,  95 => 50,  86 => 48,  82 => 47,  48 => 17,  46 => 16,  39 => 12,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <link rel="icon" href="../../favicon.ico">*/
/* */
/*     <title>{% block title %}Welcome!{% endblock %}</title>*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">*/
/*     {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     */
/*   </head>*/
/* */
/*   <body>*/
/* */
/*     <nav class="navbar navbar-inverse">*/
/*       <div class="container">*/
/*         <div class="navbar-header">*/
/*           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*           </button>*/
/*           <a class="navbar-brand" href="/">IrinaProject</a>*/
/*         </div>*/
/*         <div id="navbar" class="collapse navbar-collapse">*/
/*           <ul class="nav navbar-nav">*/
/*             <li><a href="/irina/about">About me</a></li>*/
/*             <li><a href="/irina/create">Add task</a></li>*/
/*           </ul>*/
/*         </div><!--/.nav-collapse -->*/
/*       </div>*/
/*     </nav>*/
/* */
/*     <div class="container">*/
/* */
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 {% for flash_message in app.session.flashbag.get('notice') %}*/
/*                   <div class="alert alert-success">{{flash_message}}</div>*/
/*                 {% endfor %}*/
/* */
/*                 {% for flash_message in app.session.flashbag.get('error') %}*/
/*                   <div class="alert alert-danger">{{flash_message}}</div>*/
/*                 {% endfor %}*/
/*                 {% block body %}{% endblock %}*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div><!-- /.container -->*/
/* */
/*     {% block javascripts %}{% endblock %}*/
/*     */
/*   </body>*/
/* </html>*/
/* */
/* */
