<?php

/* irina/create.html.twig */
class __TwigTemplate_c2a8e6d8a5b5aa56c356d36b464c33dd508153658fe1eda62d4086cd562664ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "irina/create.html.twig", 1);
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
        $__internal_a6ff6838cac51e1f666cc28b2231b6bb8679f3ae8688e15b15b0e66f1b06cd21 = $this->env->getExtension("native_profiler");
        $__internal_a6ff6838cac51e1f666cc28b2231b6bb8679f3ae8688e15b15b0e66f1b06cd21->enter($__internal_a6ff6838cac51e1f666cc28b2231b6bb8679f3ae8688e15b15b0e66f1b06cd21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "irina/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6ff6838cac51e1f666cc28b2231b6bb8679f3ae8688e15b15b0e66f1b06cd21->leave($__internal_a6ff6838cac51e1f666cc28b2231b6bb8679f3ae8688e15b15b0e66f1b06cd21_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0cd38e4a4d24ef8691476d891c8702cdd4e20a4509631ffa2fd60f552ce1bdd = $this->env->getExtension("native_profiler");
        $__internal_d0cd38e4a4d24ef8691476d891c8702cdd4e20a4509631ffa2fd60f552ce1bdd->enter($__internal_d0cd38e4a4d24ef8691476d891c8702cdd4e20a4509631ffa2fd60f552ce1bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h2 class= \"page-header\">Add Task</h2>
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
        
        $__internal_d0cd38e4a4d24ef8691476d891c8702cdd4e20a4509631ffa2fd60f552ce1bdd->leave($__internal_d0cd38e4a4d24ef8691476d891c8702cdd4e20a4509631ffa2fd60f552ce1bdd_prof);

    }

    public function getTemplateName()
    {
        return "irina/create.html.twig";
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
/* 	<h2 class= "page-header">Add Task</h2>*/
/* 	{{form_start(form)}}*/
/* 	{{form_widget(form)}}*/
/* 	{{form_end(form)}}*/
/* {% endblock %}*/
