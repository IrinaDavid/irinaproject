<?php

/* irina/details.html.twig */
class __TwigTemplate_c5270505f880e8a15cda43130a4fa58f5e61c8868afb5124aead9637bf9afb71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "irina/details.html.twig", 1);
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
        $__internal_0d15c12fadbe503aa6201ef04657e49415131a02dcd9d4e3760495ffd5157657 = $this->env->getExtension("native_profiler");
        $__internal_0d15c12fadbe503aa6201ef04657e49415131a02dcd9d4e3760495ffd5157657->enter($__internal_0d15c12fadbe503aa6201ef04657e49415131a02dcd9d4e3760495ffd5157657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "irina/details.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d15c12fadbe503aa6201ef04657e49415131a02dcd9d4e3760495ffd5157657->leave($__internal_0d15c12fadbe503aa6201ef04657e49415131a02dcd9d4e3760495ffd5157657_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d66344082c702976776e8ba94e4e25857e1c915f38e750af79ec1f42dd172036 = $this->env->getExtension("native_profiler");
        $__internal_d66344082c702976776e8ba94e4e25857e1c915f38e750af79ec1f42dd172036->enter($__internal_d66344082c702976776e8ba94e4e25857e1c915f38e750af79ec1f42dd172036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<a class=\"btn btn-default\" href=\"/\">Back To Todo List</a>
<hr>
<h2 class=\"page-header\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "name", array()), "html", null, true);
        echo "</h2>
<ul class=\"list-group\">
<li class=\"list-group-item\">Category: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "category", array()), "html", null, true);
        echo "</li>
<li class=\"list-group-item\">Priority: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "priority", array()), "html", null, true);
        echo "</li>
<li class=\"list-group-item\">Due: <strong>";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "dueDate", array()), "F j, Y, g:i a"), "html", null, true);
        echo "</strong></li>
</ul>
<p>
";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["todo"]) ? $context["todo"] : $this->getContext($context, "todo")), "description", array()), "html", null, true);
        echo "
</p>
";
        
        $__internal_d66344082c702976776e8ba94e4e25857e1c915f38e750af79ec1f42dd172036->leave($__internal_d66344082c702976776e8ba94e4e25857e1c915f38e750af79ec1f42dd172036_prof);

    }

    public function getTemplateName()
    {
        return "irina/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 13,  57 => 10,  53 => 9,  49 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <a class="btn btn-default" href="/">Back To Todo List</a>*/
/* <hr>*/
/* <h2 class="page-header">{{todo.name}}</h2>*/
/* <ul class="list-group">*/
/* <li class="list-group-item">Category: {{todo.category}}</li>*/
/* <li class="list-group-item">Priority: {{todo.priority}}</li>*/
/* <li class="list-group-item">Due: <strong>{{todo.dueDate|date('F j, Y, g:i a')}}</strong></li>*/
/* </ul>*/
/* <p>*/
/* {{todo.description}}*/
/* </p>*/
/* {% endblock %}*/
