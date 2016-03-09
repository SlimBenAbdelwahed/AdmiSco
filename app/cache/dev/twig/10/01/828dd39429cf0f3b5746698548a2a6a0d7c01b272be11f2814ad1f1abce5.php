<?php

/* AdmiScoBundle:Etudiant:new.html.twig */
class __TwigTemplate_1001828dd39429cf0f3b5746698548a2a6a0d7c01b272be11f2814ad1f1abce5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdmiScoBundle::standard_layout.html.twig", "AdmiScoBundle:Etudiant:new.html.twig", 1);
        $this->blocks = array(
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdmiScoBundle::standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Nouveau Etudiant</h1>
    
    
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
    

      <ul class=\"nav nav-pills\">
    <li>
        <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("etudiant");
        echo "\">
            <h4> Retour a la liste </h4> 
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "AdmiScoBundle:Etudiant:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  36 => 7,  31 => 4,  28 => 3,  11 => 1,);
    }
}
