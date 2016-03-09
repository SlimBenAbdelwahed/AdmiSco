<?php

/* AdmiScoBundle:Matiere:index.html.twig */
class __TwigTemplate_cb7584885fd14d6d73dc3a4838c49c0d7dee692a7728b5311f4123ed6936ae0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form' => array($this, 'block_form'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
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
                      <a href=\"#\" class=\"btn btn-default btn-flat\">Déconnexion</a>
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
          <form action=\"#\" method=\"get\" class=\"sidebar-form\">
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
                <i class=\"fa fa-table\"></i> <span>Emploi du temps</span>
              
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
            \t  <li class=\"treeview\">
              <a href=\"";
        // line 232
        echo $this->env->getExtension('routing')->getPath("note");
        echo "\">
                <i class=\"fa fa-folder\"></i> <span>Notes</span>
         
              </a>
            </li>
\t
\t\t\t<li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-folder\"></i> <span>Résultats</span>
              
              </a>
            </li>
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

";
        // line 258
        $this->displayBlock('form', $context, $blocks);
        // line 299
        echo "

\t\t </section>
\t\t<section class=\"content\">
          <div class=\"row\">
            <div class=\"col-xs-12\">
             
\t\t\t   
\t\t\t   </div>
\t\t\t 
\t\t\t</div>
\t\t\t</section>
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
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
   <script src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- DATA TABES SCRIPT -->
    <script src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- SlimScroll -->
    <script src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "\"></script>
    <!-- AdminLTE App -->
    <script src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/dist/js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"";
        // line 336
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/admisco/dist/js/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"http://listjs.com/no-cdn/list.js\"></script>   
    <!-- page script -->
    
    <script type=\"text/javascript\">
      var options = {
  valueNames: [ 'name' ,'born']
};

var userList = new List('users', options);
    </script>
  </body>
</html>


\t\t 
\t\t 
\t\t 
\t\t 
\t\t 





";
    }

    // line 258
    public function block_form($context, array $blocks = array())
    {
        // line 259
        echo "    <h1>Matières</h1>

    <table class=\"table table-striped\"data-cache=\"false\" data-height=\"299\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nommatiere</th>
                <th>Typematiere</th>
                <th>Coefficient</th>
                <th>Duree</th>
                <th>Enseignant</th>
               
            </tr>
        </thead>
        <tbody>
        ";
        // line 274
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 275
            echo "            <tr>
                <td><a href=\"";
            // line 276
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("matiere_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 277
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nomMatiere", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 278
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "typeMatiere", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 279
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "coefficient", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 280
            if ($this->getAttribute($context["entity"], "duree", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "duree", array()), " H:i:s"), "html", null, true);
            }
            echo "</td>
               
               <td>";
            // line 282
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "idEnseignant", array()), "html", null, true);
            echo "</td>
                
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 286
        echo "        </tbody>
    </table>

        
            <a href=\"";
        // line 290
        echo $this->env->getExtension('routing')->getPath("matiere_new");
        echo "\">
                <button class=\"btn btn-primary\">Ajouter</button>
            </a>
               
               <a href=\"";
        // line 294
        echo $this->env->getExtension('routing')->getPath("annee");
        echo "\">
              <h4> Retour </h4>
            </a>
      
    ";
    }

    public function getTemplateName()
    {
        return "AdmiScoBundle:Matiere:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  512 => 294,  505 => 290,  499 => 286,  489 => 282,  482 => 280,  478 => 279,  474 => 278,  470 => 277,  464 => 276,  461 => 275,  457 => 274,  440 => 259,  437 => 258,  407 => 336,  402 => 334,  397 => 332,  392 => 330,  387 => 328,  383 => 327,  378 => 325,  373 => 323,  369 => 322,  344 => 299,  342 => 258,  313 => 232,  304 => 226,  294 => 219,  285 => 213,  281 => 212,  270 => 204,  191 => 128,  187 => 127,  183 => 126,  159 => 105,  134 => 83,  104 => 56,  74 => 29,  69 => 27,  64 => 25,  59 => 23,  54 => 21,  49 => 19,  44 => 17,  38 => 14,  29 => 8,  20 => 1,);
    }
}
