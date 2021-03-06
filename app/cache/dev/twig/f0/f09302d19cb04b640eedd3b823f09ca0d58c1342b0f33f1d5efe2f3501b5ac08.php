<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6c5afd28c07867827d7036127d21b771e8e84d3fbd77429fefd03c2391588553 extends Twig_Template
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
        $__internal_e2f70e607604b652abc2df704578a9671757d963d75b9090502e1aaddb296841 = $this->env->getExtension("native_profiler");
        $__internal_e2f70e607604b652abc2df704578a9671757d963d75b9090502e1aaddb296841->enter($__internal_e2f70e607604b652abc2df704578a9671757d963d75b9090502e1aaddb296841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2f70e607604b652abc2df704578a9671757d963d75b9090502e1aaddb296841->leave($__internal_e2f70e607604b652abc2df704578a9671757d963d75b9090502e1aaddb296841_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4061651360c9c1a6eabe132672821e7eb13bb16363f85574c9de80654e7c569b = $this->env->getExtension("native_profiler");
        $__internal_4061651360c9c1a6eabe132672821e7eb13bb16363f85574c9de80654e7c569b->enter($__internal_4061651360c9c1a6eabe132672821e7eb13bb16363f85574c9de80654e7c569b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4061651360c9c1a6eabe132672821e7eb13bb16363f85574c9de80654e7c569b->leave($__internal_4061651360c9c1a6eabe132672821e7eb13bb16363f85574c9de80654e7c569b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_50f1643bc42ce8562b97a7e06ff4e4180bfa0ee6df7f384b954ef6e62d3e0953 = $this->env->getExtension("native_profiler");
        $__internal_50f1643bc42ce8562b97a7e06ff4e4180bfa0ee6df7f384b954ef6e62d3e0953->enter($__internal_50f1643bc42ce8562b97a7e06ff4e4180bfa0ee6df7f384b954ef6e62d3e0953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_50f1643bc42ce8562b97a7e06ff4e4180bfa0ee6df7f384b954ef6e62d3e0953->leave($__internal_50f1643bc42ce8562b97a7e06ff4e4180bfa0ee6df7f384b954ef6e62d3e0953_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_41837198efd286ad4e326f22a6be88345ff82fb61c787f0c3d9bbb21738a6343 = $this->env->getExtension("native_profiler");
        $__internal_41837198efd286ad4e326f22a6be88345ff82fb61c787f0c3d9bbb21738a6343->enter($__internal_41837198efd286ad4e326f22a6be88345ff82fb61c787f0c3d9bbb21738a6343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_41837198efd286ad4e326f22a6be88345ff82fb61c787f0c3d9bbb21738a6343->leave($__internal_41837198efd286ad4e326f22a6be88345ff82fb61c787f0c3d9bbb21738a6343_prof);

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
