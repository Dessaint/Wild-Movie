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
        $__internal_7643529b3006816da27a890014e1e88d37852a31c268c051f4d053f059f7e766 = $this->env->getExtension("native_profiler");
        $__internal_7643529b3006816da27a890014e1e88d37852a31c268c051f4d053f059f7e766->enter($__internal_7643529b3006816da27a890014e1e88d37852a31c268c051f4d053f059f7e766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7643529b3006816da27a890014e1e88d37852a31c268c051f4d053f059f7e766->leave($__internal_7643529b3006816da27a890014e1e88d37852a31c268c051f4d053f059f7e766_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eeeb31a3b58027d01e87754de7e5d7ea0ddb12a8737548b4ebf35de01c724a32 = $this->env->getExtension("native_profiler");
        $__internal_eeeb31a3b58027d01e87754de7e5d7ea0ddb12a8737548b4ebf35de01c724a32->enter($__internal_eeeb31a3b58027d01e87754de7e5d7ea0ddb12a8737548b4ebf35de01c724a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eeeb31a3b58027d01e87754de7e5d7ea0ddb12a8737548b4ebf35de01c724a32->leave($__internal_eeeb31a3b58027d01e87754de7e5d7ea0ddb12a8737548b4ebf35de01c724a32_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_48ae849f675db54e4f3e8dd110b80375a66fb24629150d47deedb72f813fa3b9 = $this->env->getExtension("native_profiler");
        $__internal_48ae849f675db54e4f3e8dd110b80375a66fb24629150d47deedb72f813fa3b9->enter($__internal_48ae849f675db54e4f3e8dd110b80375a66fb24629150d47deedb72f813fa3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_48ae849f675db54e4f3e8dd110b80375a66fb24629150d47deedb72f813fa3b9->leave($__internal_48ae849f675db54e4f3e8dd110b80375a66fb24629150d47deedb72f813fa3b9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e1783be55a846764ba32090c79d67f5c3d719ec26215935e460371893aad64e = $this->env->getExtension("native_profiler");
        $__internal_1e1783be55a846764ba32090c79d67f5c3d719ec26215935e460371893aad64e->enter($__internal_1e1783be55a846764ba32090c79d67f5c3d719ec26215935e460371893aad64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1e1783be55a846764ba32090c79d67f5c3d719ec26215935e460371893aad64e->leave($__internal_1e1783be55a846764ba32090c79d67f5c3d719ec26215935e460371893aad64e_prof);

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
