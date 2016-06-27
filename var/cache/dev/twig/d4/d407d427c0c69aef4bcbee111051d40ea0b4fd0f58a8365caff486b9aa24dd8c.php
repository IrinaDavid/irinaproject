<?php

/* irina/index.html.twig */
class __TwigTemplate_5650527321b5b6c9c679c5e992d4968e6e4b924242405c2d64cc7de4f96a6cc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "irina/index.html.twig", 1);
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
        $__internal_6ac45d536202ebbad11ff50bf1c109fcbeed7103b7a67b7116149763304b4d28 = $this->env->getExtension("native_profiler");
        $__internal_6ac45d536202ebbad11ff50bf1c109fcbeed7103b7a67b7116149763304b4d28->enter($__internal_6ac45d536202ebbad11ff50bf1c109fcbeed7103b7a67b7116149763304b4d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "irina/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ac45d536202ebbad11ff50bf1c109fcbeed7103b7a67b7116149763304b4d28->leave($__internal_6ac45d536202ebbad11ff50bf1c109fcbeed7103b7a67b7116149763304b4d28_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_961d2fd001665da2abe0f1fd56188a5c5c190a562498d9860a44b50e01e3154b = $this->env->getExtension("native_profiler");
        $__internal_961d2fd001665da2abe0f1fd56188a5c5c190a562498d9860a44b50e01e3154b->enter($__internal_961d2fd001665da2abe0f1fd56188a5c5c190a562498d9860a44b50e01e3154b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h2 class=\"page-header\">Latest Todos</h2>
<table class=\"table table-striped\"> 
<thead> 
<tr> 
<th>#</th>
 <th>Todo</th>
  <th>Due Date</th>
  <th></th>
   </tr> 
   </thead> 
   <tbody>
   ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["todos"]) ? $context["todos"] : $this->getContext($context, "todos")));
        foreach ($context['_seq'] as $context["_key"] => $context["todo"]) {
            echo " 
   <tr> 
   <th scope=\"row\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "</th> 
   <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "name", array()), "html", null, true);
            echo "</td> 
   <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["todo"], "dueDate", array()), "F j, Y, g:i a"), "html", null, true);
            echo "</td> 
   <td>
   <a href=\"/irina/details/";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-success\">View</a>
   <a href=\"/irina/edit/";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-default\">Edit</a>
   <a href=\"/irina/delete/";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger\">Delete</a>
   </td>
   </tr> 
   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "   </tbody> 
   </table>
";
        
        $__internal_961d2fd001665da2abe0f1fd56188a5c5c190a562498d9860a44b50e01e3154b->leave($__internal_961d2fd001665da2abe0f1fd56188a5c5c190a562498d9860a44b50e01e3154b_prof);

    }

    public function getTemplateName()
    {
        return "irina/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  81 => 23,  77 => 22,  73 => 21,  68 => 19,  64 => 18,  60 => 17,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <h2 class="page-header">Latest Todos</h2>*/
/* <table class="table table-striped"> */
/* <thead> */
/* <tr> */
/* <th>#</th>*/
/*  <th>Todo</th>*/
/*   <th>Due Date</th>*/
/*   <th></th>*/
/*    </tr> */
/*    </thead> */
/*    <tbody>*/
/*    {% for todo in todos %} */
/*    <tr> */
/*    <th scope="row">{{todo.id}}</th> */
/*    <td>{{todo.name}}</td> */
/*    <td>{{todo.dueDate|date('F j, Y, g:i a')}}</td> */
/*    <td>*/
/*    <a href="/irina/details/{{todo.id}}" class="btn btn-success">View</a>*/
/*    <a href="/irina/edit/{{todo.id}}" class="btn btn-default">Edit</a>*/
/*    <a href="/irina/delete/{{todo.id}}" class="btn btn-danger">Delete</a>*/
/*    </td>*/
/*    </tr> */
/*    {% endfor %}*/
/*    </tbody> */
/*    </table>*/
/* {% endblock %}*/
