<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_68c8ecbf8430ed672fe5bdc40f68026546e1628d0759915aea52c4d6306cadc5 extends Twig_Template
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
        $__internal_3258702b6a86c5a3a3e75243654ea74110745eff52e43b9d05a583304f2c18d3 = $this->env->getExtension("native_profiler");
        $__internal_3258702b6a86c5a3a3e75243654ea74110745eff52e43b9d05a583304f2c18d3->enter($__internal_3258702b6a86c5a3a3e75243654ea74110745eff52e43b9d05a583304f2c18d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3258702b6a86c5a3a3e75243654ea74110745eff52e43b9d05a583304f2c18d3->leave($__internal_3258702b6a86c5a3a3e75243654ea74110745eff52e43b9d05a583304f2c18d3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1e08105abe9b4ed0dddb2946a44d866fdaecc9a7ce725d5cc1d50cfbf2b940b1 = $this->env->getExtension("native_profiler");
        $__internal_1e08105abe9b4ed0dddb2946a44d866fdaecc9a7ce725d5cc1d50cfbf2b940b1->enter($__internal_1e08105abe9b4ed0dddb2946a44d866fdaecc9a7ce725d5cc1d50cfbf2b940b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1e08105abe9b4ed0dddb2946a44d866fdaecc9a7ce725d5cc1d50cfbf2b940b1->leave($__internal_1e08105abe9b4ed0dddb2946a44d866fdaecc9a7ce725d5cc1d50cfbf2b940b1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2f0108bb4aa77924c0e8f30cd5cd91351596c5f1c07afa62fd8c0814dc541cc8 = $this->env->getExtension("native_profiler");
        $__internal_2f0108bb4aa77924c0e8f30cd5cd91351596c5f1c07afa62fd8c0814dc541cc8->enter($__internal_2f0108bb4aa77924c0e8f30cd5cd91351596c5f1c07afa62fd8c0814dc541cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2f0108bb4aa77924c0e8f30cd5cd91351596c5f1c07afa62fd8c0814dc541cc8->leave($__internal_2f0108bb4aa77924c0e8f30cd5cd91351596c5f1c07afa62fd8c0814dc541cc8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_67efd7b7cdb3f87ef851707b47b3b32295f9b83119fc6a42ba169c881a0be0af = $this->env->getExtension("native_profiler");
        $__internal_67efd7b7cdb3f87ef851707b47b3b32295f9b83119fc6a42ba169c881a0be0af->enter($__internal_67efd7b7cdb3f87ef851707b47b3b32295f9b83119fc6a42ba169c881a0be0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_67efd7b7cdb3f87ef851707b47b3b32295f9b83119fc6a42ba169c881a0be0af->leave($__internal_67efd7b7cdb3f87ef851707b47b3b32295f9b83119fc6a42ba169c881a0be0af_prof);

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
