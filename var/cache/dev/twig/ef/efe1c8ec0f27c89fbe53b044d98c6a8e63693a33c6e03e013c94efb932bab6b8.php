<?php

/* irina/edit.html.twig */
class __TwigTemplate_860454d0c00d102fc6670105213f7eb9d3511a36757b2b00091d299af4bf5a85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "irina/edit.html.twig", 1);
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
        $__internal_090c29e40b2746b04110251f4a35f70d7a269ffcaee404501c3d512c09ef4a52 = $this->env->getExtension("native_profiler");
        $__internal_090c29e40b2746b04110251f4a35f70d7a269ffcaee404501c3d512c09ef4a52->enter($__internal_090c29e40b2746b04110251f4a35f70d7a269ffcaee404501c3d512c09ef4a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "irina/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_090c29e40b2746b04110251f4a35f70d7a269ffcaee404501c3d512c09ef4a52->leave($__internal_090c29e40b2746b04110251f4a35f70d7a269ffcaee404501c3d512c09ef4a52_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2dfa1cc538d2f53ef172a895356877d70b43b1aff79f97cdb05695558e0a869 = $this->env->getExtension("native_profiler");
        $__internal_b2dfa1cc538d2f53ef172a895356877d70b43b1aff79f97cdb05695558e0a869->enter($__internal_b2dfa1cc538d2f53ef172a895356877d70b43b1aff79f97cdb05695558e0a869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h2 class= \"page-header\">Edit Task</h2>
\t";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_b2dfa1cc538d2f53ef172a895356877d70b43b1aff79f97cdb05695558e0a869->leave($__internal_b2dfa1cc538d2f53ef172a895356877d70b43b1aff79f97cdb05695558e0a869_prof);

    }

    public function getTemplateName()
    {
        return "irina/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<h2 class= "page-header">Edit Task</h2>*/
/* 	{{form_start(form)}}*/
/* 	{{form_widget(form)}}*/
/* 	{{form_end(form)}}*/
/* {% endblock %}*/
