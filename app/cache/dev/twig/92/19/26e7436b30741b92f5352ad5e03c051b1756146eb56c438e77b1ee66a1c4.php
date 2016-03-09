<?php

/* AdmiScoBundle:Admin:index.html.twig */
class __TwigTemplate_921926e7436b30741b92f5352ad5e03c051b1756146eb56c438e77b1ee66a1c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdmiScoBundle::standard_layout.html.twig", "AdmiScoBundle:Admin:index.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
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

    // line 2
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 3
        echo "    <h3>
        <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("welcome");
        echo "\">Aller à  l'application</a>
    </h3>
    
    ";
    }

    // line 9
    public function block_form($context, array $blocks = array())
    {
        // line 10
        echo "    <h1>DashBord</h1>

    <table class=\"table table-bordered\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Nom Utilisateur</th>
                <th>Etat</th>
                <th>Derniere Connection</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 24
            echo "            <tr>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "enabled", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "lastLogin", array()), "Y-m-d:H:i:s"), "html", null, true);
            echo "</td>
                <td>
                
                        <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><button type='submit' class='btn-primary'>Afficher </button></a>
                    
                        <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\"><button type='submit' class='btn-primary'>Modifier </button></a>
                   
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

        
            <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("admin_new");
        echo "\">
                <button type='submit' class='btn-primary'>Ajouter </button>
            </a>
       
    ";
    }

    public function getTemplateName()
    {
        return "AdmiScoBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 43,  108 => 39,  97 => 34,  92 => 32,  86 => 29,  82 => 28,  78 => 27,  74 => 26,  68 => 25,  65 => 24,  61 => 23,  46 => 10,  43 => 9,  35 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
