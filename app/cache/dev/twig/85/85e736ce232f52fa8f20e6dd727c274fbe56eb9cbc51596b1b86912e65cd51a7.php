<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_9af8cba3e39a185216d27a8eebbdaf822e2ee0f8c08ee6cb42708c6fb67aed99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66b73c6d4b3474fb1358fecac17a9c80dfa0c07d1aae07a54279bdd6e58b1a79 = $this->env->getExtension("native_profiler");
        $__internal_66b73c6d4b3474fb1358fecac17a9c80dfa0c07d1aae07a54279bdd6e58b1a79->enter($__internal_66b73c6d4b3474fb1358fecac17a9c80dfa0c07d1aae07a54279bdd6e58b1a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_66b73c6d4b3474fb1358fecac17a9c80dfa0c07d1aae07a54279bdd6e58b1a79->leave($__internal_66b73c6d4b3474fb1358fecac17a9c80dfa0c07d1aae07a54279bdd6e58b1a79_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
