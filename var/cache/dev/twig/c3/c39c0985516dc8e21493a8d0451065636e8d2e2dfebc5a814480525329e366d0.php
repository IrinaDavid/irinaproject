<?php

/* irina/about.html.twig */
class __TwigTemplate_e4268f7f696785aa813fe35d15073dec36d8cc781832110eff90c85f436b8ebc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "irina/about.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d409bbb6f1320d26f5c1a343af99ff19b661d499f7b252c55cdab34a7ac4a47 = $this->env->getExtension("native_profiler");
        $__internal_2d409bbb6f1320d26f5c1a343af99ff19b661d499f7b252c55cdab34a7ac4a47->enter($__internal_2d409bbb6f1320d26f5c1a343af99ff19b661d499f7b252c55cdab34a7ac4a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "irina/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d409bbb6f1320d26f5c1a343af99ff19b661d499f7b252c55cdab34a7ac4a47->leave($__internal_2d409bbb6f1320d26f5c1a343af99ff19b661d499f7b252c55cdab34a7ac4a47_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_389af1881c41d9a52440b968231d41bc2c101cd8347b04745b818e1c48769132 = $this->env->getExtension("native_profiler");
        $__internal_389af1881c41d9a52440b968231d41bc2c101cd8347b04745b818e1c48769132->enter($__internal_389af1881c41d9a52440b968231d41bc2c101cd8347b04745b818e1c48769132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h2 class= \"page-header\">About me</h2>
";
        
        $__internal_389af1881c41d9a52440b968231d41bc2c101cd8347b04745b818e1c48769132->leave($__internal_389af1881c41d9a52440b968231d41bc2c101cd8347b04745b818e1c48769132_prof);

    }

    public function getTemplateName()
    {
        return "irina/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<h2 class= "page-header">About me</h2>*/
/* {% endblock %}*/
