<?php

/* ::base.html.twig */
class __TwigTemplate_89a461af30b99a5c565c030d55e8884dddb7e9af3ff547d5b3b73c477d0bb8d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
        <style>
            body {
                padding-top: 20px;
                padding-bottom: 20px;
            }

            .navbar {
                margin-bottom: 20px;
            }
        </style>

    </head>
    <body>
        <div class=\"container\">


            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                            <span class=\"sr-only\">toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"#\">friends</a>
                    </div>
                    <div id=\"navbar\" class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"active\"><a href=\"#\">home</a></li>
                            <li><a href=\"#\">profile</a></li>
                            <li><a href=\"#\">contact</a></li>
                            
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li class=\"active\"><a href=\"./\">login / signup <span class=\"sr-only\">(current)</span></a></li>
                            <li><a href=\"../navbar-fixed-top/\">log out</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </nav>



            <div class=\"jumbotron\">
                <h1>....</h1>
            </div>


        ";
        // line 62
        $this->displayBlock('container', $context, $blocks);
        // line 63
        echo "
    </div>
    ";
        // line 65
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "
</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "welcome!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "

        ";
    }

    // line 62
    public function block_container($context, array $blocks = array())
    {
    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        // line 66
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 66,  126 => 65,  121 => 62,  115 => 8,  112 => 7,  106 => 5,  99 => 68,  97 => 65,  93 => 63,  91 => 62,  36 => 11,  34 => 7,  29 => 5,  23 => 1,);
    }
}
