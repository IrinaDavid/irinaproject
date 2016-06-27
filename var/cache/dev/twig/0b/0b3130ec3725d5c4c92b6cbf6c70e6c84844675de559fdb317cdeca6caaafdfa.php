<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_17d6bade95c2e5f3c4ce33a5f97e198f8334063151503665bbc68ced1cc313dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7029fb431e3dea201e64f5d2edba98b21f28cefebb5e7cf5f855be345454aa39 = $this->env->getExtension("native_profiler");
        $__internal_7029fb431e3dea201e64f5d2edba98b21f28cefebb5e7cf5f855be345454aa39->enter($__internal_7029fb431e3dea201e64f5d2edba98b21f28cefebb5e7cf5f855be345454aa39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7029fb431e3dea201e64f5d2edba98b21f28cefebb5e7cf5f855be345454aa39->leave($__internal_7029fb431e3dea201e64f5d2edba98b21f28cefebb5e7cf5f855be345454aa39_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1c07b37858b281b11e3f66fb790c0cb848a7ca841ecb3abb25e079a59be50cce = $this->env->getExtension("native_profiler");
        $__internal_1c07b37858b281b11e3f66fb790c0cb848a7ca841ecb3abb25e079a59be50cce->enter($__internal_1c07b37858b281b11e3f66fb790c0cb848a7ca841ecb3abb25e079a59be50cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1c07b37858b281b11e3f66fb790c0cb848a7ca841ecb3abb25e079a59be50cce->leave($__internal_1c07b37858b281b11e3f66fb790c0cb848a7ca841ecb3abb25e079a59be50cce_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9978f3ca99f85d4250d7999a5d7664aa392c2c0592af9aa6d877ff80670507c7 = $this->env->getExtension("native_profiler");
        $__internal_9978f3ca99f85d4250d7999a5d7664aa392c2c0592af9aa6d877ff80670507c7->enter($__internal_9978f3ca99f85d4250d7999a5d7664aa392c2c0592af9aa6d877ff80670507c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9978f3ca99f85d4250d7999a5d7664aa392c2c0592af9aa6d877ff80670507c7->leave($__internal_9978f3ca99f85d4250d7999a5d7664aa392c2c0592af9aa6d877ff80670507c7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_88271e0c76faf22dcee8de6429f4eeef5c5781aff6500b726ae4b1c523cc82e8 = $this->env->getExtension("native_profiler");
        $__internal_88271e0c76faf22dcee8de6429f4eeef5c5781aff6500b726ae4b1c523cc82e8->enter($__internal_88271e0c76faf22dcee8de6429f4eeef5c5781aff6500b726ae4b1c523cc82e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_88271e0c76faf22dcee8de6429f4eeef5c5781aff6500b726ae4b1c523cc82e8->leave($__internal_88271e0c76faf22dcee8de6429f4eeef5c5781aff6500b726ae4b1c523cc82e8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
