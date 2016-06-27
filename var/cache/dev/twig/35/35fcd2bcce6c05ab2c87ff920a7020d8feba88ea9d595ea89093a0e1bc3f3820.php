<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_748b5c0a0e455d02d337aba9c2e4b40d7d2689f8e6c81b7431d5afcc624fac97 extends Twig_Template
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
        $__internal_c23c4870b99e31ae6c54ad61b5a46c4644ed0151bc136dc0c631a29081c9e86d = $this->env->getExtension("native_profiler");
        $__internal_c23c4870b99e31ae6c54ad61b5a46c4644ed0151bc136dc0c631a29081c9e86d->enter($__internal_c23c4870b99e31ae6c54ad61b5a46c4644ed0151bc136dc0c631a29081c9e86d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c23c4870b99e31ae6c54ad61b5a46c4644ed0151bc136dc0c631a29081c9e86d->leave($__internal_c23c4870b99e31ae6c54ad61b5a46c4644ed0151bc136dc0c631a29081c9e86d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6d7ea79f54808f71749831453cff139964e1ce876d0a58d8fc00c6a3d6a686b6 = $this->env->getExtension("native_profiler");
        $__internal_6d7ea79f54808f71749831453cff139964e1ce876d0a58d8fc00c6a3d6a686b6->enter($__internal_6d7ea79f54808f71749831453cff139964e1ce876d0a58d8fc00c6a3d6a686b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6d7ea79f54808f71749831453cff139964e1ce876d0a58d8fc00c6a3d6a686b6->leave($__internal_6d7ea79f54808f71749831453cff139964e1ce876d0a58d8fc00c6a3d6a686b6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_549d5f2c4ceb85cf4547d0846f512559f6154e1c80f1025737966522a2e6a0c5 = $this->env->getExtension("native_profiler");
        $__internal_549d5f2c4ceb85cf4547d0846f512559f6154e1c80f1025737966522a2e6a0c5->enter($__internal_549d5f2c4ceb85cf4547d0846f512559f6154e1c80f1025737966522a2e6a0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_549d5f2c4ceb85cf4547d0846f512559f6154e1c80f1025737966522a2e6a0c5->leave($__internal_549d5f2c4ceb85cf4547d0846f512559f6154e1c80f1025737966522a2e6a0c5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cb879f673741355d382e72ee5931b7bb18ab828b1d2307078f2599ef94cb052d = $this->env->getExtension("native_profiler");
        $__internal_cb879f673741355d382e72ee5931b7bb18ab828b1d2307078f2599ef94cb052d->enter($__internal_cb879f673741355d382e72ee5931b7bb18ab828b1d2307078f2599ef94cb052d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cb879f673741355d382e72ee5931b7bb18ab828b1d2307078f2599ef94cb052d->leave($__internal_cb879f673741355d382e72ee5931b7bb18ab828b1d2307078f2599ef94cb052d_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
