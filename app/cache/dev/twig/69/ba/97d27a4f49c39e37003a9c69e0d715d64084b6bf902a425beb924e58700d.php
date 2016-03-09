<?php

/* AdmiScoBundle:Matiere:new.html.twig */
class __TwigTemplate_69ba97d27a4f49c39e37003a9c69e0d715d64084b6bf902a425beb924e58700d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdmiScoBundle::standard_layout.html.twig", "AdmiScoBundle:Matiere:new.html.twig", 1);
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
        echo "<h1>Matiere creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "

        <ul class=\"table table-striped\"data-cache=\"false\" data-height=\"299\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("matiere");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "AdmiScoBundle:Matiere:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 10,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
