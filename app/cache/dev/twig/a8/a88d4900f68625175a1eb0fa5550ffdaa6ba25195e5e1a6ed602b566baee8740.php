<?php

/* FrontendBundle:Default:article.html.twig */
class __TwigTemplate_2bf5c259984f1ef079ad6af1a4436f1244ff6c265617667cdf74a0b4050786be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FrontendBundle:Default:article.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9315a85e0ea3cfb32b86d2cf64d6e5c28fdfcf07551879079396261c2ca60f48 = $this->env->getExtension("native_profiler");
        $__internal_9315a85e0ea3cfb32b86d2cf64d6e5c28fdfcf07551879079396261c2ca60f48->enter($__internal_9315a85e0ea3cfb32b86d2cf64d6e5c28fdfcf07551879079396261c2ca60f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9315a85e0ea3cfb32b86d2cf64d6e5c28fdfcf07551879079396261c2ca60f48->leave($__internal_9315a85e0ea3cfb32b86d2cf64d6e5c28fdfcf07551879079396261c2ca60f48_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_01f2157c07d7daf191bc6c2c6452aec470f701adfacdad0e52afee72bdb88718 = $this->env->getExtension("native_profiler");
        $__internal_01f2157c07d7daf191bc6c2c6452aec470f701adfacdad0e52afee72bdb88718->enter($__internal_01f2157c07d7daf191bc6c2c6452aec470f701adfacdad0e52afee72bdb88718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
\t<div class=\" col-md-8 title\"><h2>40 élèves de tous profils formés au code en 5 mois et filmés</h2></div>
\t<div class=\"row\">
\t\t<div class=\"col-md-8 bandeau\">
\t\t\t<div class=\"col-md-12\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/annah.jpg"), "html", null, true);
        echo "\" alt=\"Photo d'Annah\"></div>
\t\t\t<div class=\"col-md-12\"><p>Loin de l’agitation parisienne, le campus accueille en moyenne quarante élèves par session, dont une trentaine qui dorment sur place. Difficile de faire plus immersif. Aucun diplôme n’est requis, et la dernière promotion, qui vient tout juste d’achever son cursus, ne compte qu’un tiers d’étudiants bacheliers. Avec une moyenne d’âge de 29 ans, l’école ne s’adresse pas uniquement aux jeunes en décrochage, mais aussi aux individus en reconversion professionnelle ou aux personnes qui souhaitent tout simplement ajouter cette corde à leur arc. “Nous avons par exemple plusieurs graphistes qui cherchent à acquérir cette compétence qui peut faire leur valeur ajoutée” , observe Anna.</p></div>\t
\t\t</div>
\t\t<div class=\"col-md-4 bandeau-droit\">
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/tronconneuse.jpg"), "html", null, true);
        echo "\" alt=\"Photo d'Annah\">
\t\t\t\t<div class='col-md-12 text'>Massacre à la tronconneuse</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/bud.jpg"), "html", null, true);
        echo "\" alt=\"Photo Air bud\">
\t\t\t\t<div class='col-md-12 text'>Air Bud</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/pont.jpg"), "html", null, true);
        echo "\" alt=\"Photo du pont de la rivière Kwai\">
\t\t\t\t<div class='col-md-12 text'>Le pont de la rivière kwai</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
\t\t\t\t<img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/noel.jpg"), "html", null, true);
        echo "\" alt=\"Photo du père noêl est une ordure\">
\t\t\t\t<div class='col-md-12 text'>Le père noel est une ordure</div>
\t\t\t</div>
\t\t</div>
\t</div>

";
        
        $__internal_01f2157c07d7daf191bc6c2c6452aec470f701adfacdad0e52afee72bdb88718->leave($__internal_01f2157c07d7daf191bc6c2c6452aec470f701adfacdad0e52afee72bdb88718_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 25,  68 => 21,  61 => 17,  54 => 13,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/* 	<div class=" col-md-8 title"><h2>40 élèves de tous profils formés au code en 5 mois et filmés</h2></div>*/
/* 	<div class="row">*/
/* 		<div class="col-md-8 bandeau">*/
/* 			<div class="col-md-12"><img src="{{ asset('img/annah.jpg')}}" alt="Photo d'Annah"></div>*/
/* 			<div class="col-md-12"><p>Loin de l’agitation parisienne, le campus accueille en moyenne quarante élèves par session, dont une trentaine qui dorment sur place. Difficile de faire plus immersif. Aucun diplôme n’est requis, et la dernière promotion, qui vient tout juste d’achever son cursus, ne compte qu’un tiers d’étudiants bacheliers. Avec une moyenne d’âge de 29 ans, l’école ne s’adresse pas uniquement aux jeunes en décrochage, mais aussi aux individus en reconversion professionnelle ou aux personnes qui souhaitent tout simplement ajouter cette corde à leur arc. “Nous avons par exemple plusieurs graphistes qui cherchent à acquérir cette compétence qui peut faire leur valeur ajoutée” , observe Anna.</p></div>	*/
/* 		</div>*/
/* 		<div class="col-md-4 bandeau-droit">*/
/* 			<div class="col-md-12">*/
/* 				<img src="{{ asset('img/tronconneuse.jpg')}}" alt="Photo d'Annah">*/
/* 				<div class='col-md-12 text'>Massacre à la tronconneuse</div>*/
/* 			</div>*/
/* 			<div class="col-md-12">*/
/* 				<img src="{{ asset('img/bud.jpg')}}" alt="Photo Air bud">*/
/* 				<div class='col-md-12 text'>Air Bud</div>*/
/* 			</div>*/
/* 			<div class="col-md-12">*/
/* 				<img src="{{ asset('img/pont.jpg')}}" alt="Photo du pont de la rivière Kwai">*/
/* 				<div class='col-md-12 text'>Le pont de la rivière kwai</div>*/
/* 			</div>*/
/* 			<div class="col-md-12">*/
/* 				<img src="{{ asset('img/noel.jpg')}}" alt="Photo du père noêl est une ordure">*/
/* 				<div class='col-md-12 text'>Le père noel est une ordure</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* {% endblock %}*/
