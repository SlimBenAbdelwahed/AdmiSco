<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_7965e3d0d471b1c644c2ca19147c6659b643da44649c9554445b052fa7e61c44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "    


    
";
        // line 11
        $this->displayBlock('form', $context, $blocks);
        // line 34
        echo "  

</html> ";
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo "            
           
            <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/signin.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
           <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" rel=\"stylesheet\">
        ";
    }

    // line 11
    public function block_form($context, array $blocks = array())
    {
        // line 12
        echo "    <body  style=background-color:#eee>
    <div class=\"container\">
<form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" class=\"form-signin\" method=\"post\"role=\"form\">
    
      <h1 class=\"form-signin-heading\">Authentification</h1>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
    
";
        // line 19
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 20
            echo "   <font size=\"3\" face=\"georgia\" color=\"red\"> <h4>\"login ou mot de passe incorrecte\"</h4> </font>
";
        }
        // line 22
        echo " <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" placeholder=\"Login\" autofocus=\"\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />
   
        
    <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Mot De Passe\"  required=\"\" /> 
  
        
    <input type=\"submit\"  id=\"_submit\" name=\"_submit\"class=\"btn btn-lg btn-primary btn-block\" value=\"Login\" /><br>
    
      
</form>
            </div>
            </body>
  ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  74 => 20,  72 => 19,  67 => 17,  61 => 14,  57 => 12,  54 => 11,  48 => 5,  44 => 4,  40 => 2,  37 => 1,  31 => 34,  29 => 11,  23 => 7,  21 => 1,);
    }
}
