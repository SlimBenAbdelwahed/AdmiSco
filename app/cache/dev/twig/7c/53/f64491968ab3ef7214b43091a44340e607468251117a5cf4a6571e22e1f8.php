<?php

/* AdmiScoBundle:Default:response.html.twig */
class __TwigTemplate_7c53f64491968ab3ef7214b43091a44340e607468251117a5cf4a6571e22e1f8 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\">
    <title>AdmiSco | ISIMM</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />    
    <!-- FontAwesome 4.3.0 -->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Ionicons 2.0.0 -->
    <link href=\"http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" />    
    <!-- Theme style -->
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- iCheck -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/plugins/iCheck/flat/blue.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Morris chart -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/plugins/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- jvectormap -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Date Picker -->
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/plugins/datepicker/datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Daterange picker -->
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/plugins/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body class=\"skin-blue\">
    <div class=\"wrapper\">
      
      <header class=\"main-header\">
        <!-- Logo -->
        <a href=\"index2.html\" class=\"logo\"><b>Administration</b>ISIMM</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
          <!-- Sidebar toggle button-->
          <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
            <span class=\"sr-only\">Toggle navigation</span>
          </a>
          <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">
         
              <!-- User Account: style can be found in dropdown.less -->
              <li class=\"dropdown user user-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/dist/img/user_male.png"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\"/>
                  <span class=\"hidden-xs\">Utlisateur</span>
                </a>
                <ul class=\"dropdown-menu\">
             
                  <!-- Menu Footer-->
                  <li class=\"user-footer\">
                    <div class=\"pull-left\">
                      <a href=\"#\" class=\"btn btn-default btn-flat\">Profil</a>
                    </div>
                    <div class=\"pull-right\">
                      <a href=\"/Admisco/web/app_dev.php/logout\" class=\"btn btn-default btn-flat\">Déconnexion</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
          <!-- Sidebar user panel -->
          <div class=\"user-panel\">
            <div class=\"pull-left image\">
              <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/dist/img/user_male.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
            </div>
            <div class=\"pull-left info\">
              <p>Utlisateur</p>

              <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action=\"#\" method=\"post\" class=\"sidebar-form\" >
            <div class=\"input-group\">
              <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
              <span class=\"input-group-btn\">
                <button type='submit' name='search' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class=\"sidebar-menu\">
            <li class=\"header\">MENU NAVIGATION</li>
\t\t\t  <li class=\"treeview\">
              <a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("annee");
        echo "\">
                <i class=\"fa fa-files-o\"></i>
                <span>Préparer Année Scolaire</span>
                
              </a>
             
            </li>
\t\t\t
              <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-edit\"></i> <span>Gérer Etudiant</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a> 
                  <ul class=\"treeview-menu\">
                      <li> <a href=\"#\"><i class=\"fa fa-circle-o\"></i>Affichage<i class=\"fa fa-angle-left pull-right\"></i></a> 
                 
              <ul class=\"treeview-menu\">
                <li><a href=\"Etudiant_affichage.html\"><i class=\"fa fa-circle-o\"></i>Informatique<i class=\"fa fa-angle-left pull-right\"></i></a>
\t\t\t\t <ul class=\"treeview-menu\">
                <li><a href=\"Etudiant_affichage.html\"><i class=\"fa fa-circle-o\"></i>Licence Fondamentale</a>
\t\t\t\t <ul class=\"treeview-menu\">
                <li><a href=\"";
        // line 126
        echo $this->env->getExtension('routing')->getPath("etudiant");
        echo "\"><i class=\"fa fa-circle-o\"></i>L1</a></li>
                <li><a href=\"";
        // line 127
        echo $this->env->getExtension('routing')->getPath("etudiant2");
        echo "\"><i class=\"fa fa-circle-o\"></i>L2</a></li>
\t\t\t\t<li><a href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("etudiant3");
        echo "\"><i class=\"fa fa-circle-o\"></i>L3</a></li>
\t\t\t\t</ul>\t
\t\t\t\t</li>
                <li><a href=\"forms/advanced.html\"><i class=\"fa fa-circle-o\"></i>Licence Appliquée</a>
\t\t\t\t <ul class=\"treeview-menu\">
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>L1</a></li>
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>L2</a></li>
\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>L3</a></li>
\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"forms/advanced.html\"><i class=\"fa fa-circle-o\"></i>Master Professionnel</a>
\t\t\t\t <ul class=\"treeview-menu\">
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>M1</a></li>
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>M2</a></li>
\t\t\t\t
\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t</ul>\t\t\t\t
\t\t\t\t</li>
                <li><a href=\"forms/advanced.html\"><i class=\"fa fa-circle-o\"></i> Electronique<i class=\"fa fa-angle-left pull-right\"></i></a>
\t\t\t\t<ul class=\"treeview-menu\">
                <li><a href=\"Etudiant_affichage.html\"><i class=\"fa fa-circle-o\"></i>Licence Fondamentale</a>
\t\t\t\t <ul class=\"treeview-menu\">
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>L1</a></li>
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>L2</a></li>
\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>L3</a></li>
\t\t\t\t</ul>
\t\t\t\t</li>
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>Licence Appliquée</a>
\t\t\t\t <ul class=\"treeview-menu\">
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>L1</a></li>
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>L2</a></li>
\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>L3</a></li>
\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>Master Professionnel  </a> <ul class=\"treeview-menu\">
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>M1</a></li>
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>M2</a></li>
\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>Master de Recherche </a>
\t\t\t\t <ul class=\"treeview-menu\">
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>M1</a></li>
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>M2</a></li>
\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>Ingénieurie </a>
\t\t\t\t <ul class=\"treeview-menu\">
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>ING1</a></li>
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>ING2</a></li>
\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>ING3</a></li>
\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t</li>\t\t\t\t\t
\t\t\t\t<li><a href=\"forms/editors.html\"><i class=\"fa fa-circle-o\"></i>Mathématique <i class=\"fa fa-angle-left pull-right\"></i> </a>
\t\t\t\t<ul class=\"treeview-menu\">
                <li><a href=\"Etudiant_affichage.html\"><i class=\"fa fa-circle-o\"></i> Licence Fondamentale</a>
\t\t\t\t <ul class=\"treeview-menu\">
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>L1</a></li>
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>L2</a></li>
\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>L3</a></li>
\t\t\t\t</ul>
\t\t\t\t</li>
                <li><a href=\"forms/advanced.html\"><i class=\"fa fa-circle-o\"></i>Licence Appliquée</a>
\t\t\t\t <ul class=\"treeview-menu\">
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>L1</a></li>
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>L2</a></li>
\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-circle-o\"></i>L3</a></li>
\t\t\t\t</ul>
\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t\t</li>
              </ul>
            </li>
                  </li>
                  <li><a href=\"";
        // line 204
        echo $this->env->getExtension('routing')->getPath("etudiant_new");
        echo "\"><i class=\"fa fa-circle-o\"></i> Enregistrement</a></li>
          </ul>
\t\t\t  <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-edit\"></i> <span>Gérer Enseignant</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
        // line 212
        echo $this->env->getExtension('routing')->getPath("enseignant");
        echo "\"><i class=\"fa fa-circle-o\"></i> Affichage</a></li>
                <li><a href=\"";
        // line 213
        echo $this->env->getExtension('routing')->getPath("enseignant_new");
        echo "\"><i class=\"fa fa-circle-o\"></i> Enregistrement</a></li>
               
              </ul>
            </li>
\t\t\t
\t\t\t <li class=\"treeview \">
              <a href=\"";
        // line 219
        echo $this->env->getExtension('routing')->getPath("emploi");
        echo "\">
                <i class=\"fa fa-table\"></i> <span>Emlpoi du temps</span>
              
              </a>
             
            </li>
             <li class=\"treeview\">
              <a href=\"";
        // line 226
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">
                <i class=\"fa fa-envelope-o\"></i> <span>Contact</span>
         
              </a>
            </li>
\t\t\t
\t\t\t  <li class=\"treeview\">
              <a href=\"";
        // line 233
        echo $this->env->getExtension('routing')->getPath("note");
        echo "\">
                <i class=\"fa fa-folder\"></i> <span>Notes</span>
         
              </a>
            </li>
\t\t\t
\t\t\t<li class=\"treeview\">
              <a href=\"";
        // line 240
        echo $this->env->getExtension('routing')->getPath("resultat");
        echo "\">
                <i class=\"fa fa-folder\"></i> <span>Résultats</span>
              
              </a>
            </li>
            \t\t
\t\t\t
\t\t\t <li><a href=\"../../documentation/index.html\"><i class=\"fa fa-book\"></i> Propos</a></li>
\t\t\t
\t\t\t
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

   <!-- Content Wrapper. Contains page content -->
      <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
          <h1>
            Page d'Acceuil
            <small>Panel de Control</small>
          </h1>
          <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i>Acceuil</a></li>
            <li class=\"active\">Acceuil</li>
          </ol>
        </section>
\t\t<section class=\"content\">
          <div class=\"row\">
            <div class=\"col-xs-12\">
                 <form   action=\"\" method=\"post\" ";
        // line 271
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " >
                <div>
                <div>
                  <h3 >Compose New Message</h3>
                </div><!-- /.box-header -->
                <div>
                   
                  <div class=\"form-group\">
                    <input class=\"form-control\" placeholder=\"To:\" ";
        // line 279
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sendTo", array()), 'widget');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sendTo", array()), 'errors');
        echo "
                  </div>
                  <div class=\"form-group\">
                    <input class=\"form-control\"  placeholder=\"Subject:\" ";
        // line 282
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'widget');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'errors');
        echo "
                  </div>
                  <div class=\"form-group\">
                    <textarea id=\"compose-textarea\"  class=\"form-control\" style=\"height: 300px\" ";
        // line 285
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'widget');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'errors');
        echo "
                     
                    </textarea>
                  </div>
                 
                </div><!-- /.box-body -->
                <div >
                  <div class=\"pull-right\">
                    
                    <input type=\"submit\" class=\"btn btn-primary\" value=\"Send\"> 
                    ";
        // line 295
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
                  </div>
                </div><!-- /.box-footer -->
\t\t\t   
\t\t\t   </div></form>
\t\t\t</div>
\t\t\t</section>
\t 
           
              
            
         
        
      \t\t   
       
      </div><!-- /.content-wrapper -->
      <footer class=\"main-footer\">
        <div class=\"pull-right hidden-xs\">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2015-2016 <a href=\"http://www.isimm.rnu.tn\">ISIMM</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

      <!-- jQuery 2.1.3 -->
    <script src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- DATA TABES SCRIPT -->
    <script src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- SlimScroll -->
    <script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/dist/js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/dist/js/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"http://listjs.com/no-cdn/list.js\"></script>  
    <!-- Bootstrap WYSIHTML5 -->
    <script src=\"";
        // line 337
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- page script -->
    
    <script>
      \$(function () {
        //Add text editor
        \$(\"#compose-textarea\").wysihtml5();
      });
    </script>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "AdmiScoBundle:Default:response.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  471 => 337,  465 => 334,  460 => 332,  455 => 330,  450 => 328,  445 => 326,  441 => 325,  436 => 323,  431 => 321,  427 => 320,  399 => 295,  384 => 285,  376 => 282,  368 => 279,  357 => 271,  323 => 240,  313 => 233,  303 => 226,  293 => 219,  284 => 213,  280 => 212,  269 => 204,  190 => 128,  186 => 127,  182 => 126,  158 => 105,  133 => 83,  103 => 56,  73 => 29,  68 => 27,  63 => 25,  58 => 23,  53 => 21,  48 => 19,  43 => 17,  37 => 14,  28 => 8,  19 => 1,);
    }
}
