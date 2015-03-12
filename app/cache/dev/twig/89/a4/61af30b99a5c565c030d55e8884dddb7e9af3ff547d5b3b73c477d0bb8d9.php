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
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js\"></script>
        <style>
            body {
                padding-top: 20px;
                padding-bottom: 20px;
                margin-bottom: 60px;
            }

            .navbar {
                margin-bottom: 20px;
            }

            form{
                width: 100%;
                margin-left: auto;
                margin-right: auto;
            }
            html {
                position: relative;
                min-height: 100%;
            }

            .footer {
                position: absolute;
                bottom: 0;
                width: 100%;
                /* Set the fixed height of the footer here */
                height: 45px;
                background-color: #f5f5f5;
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
                        <a class=\"navbar-brand\" href=\"/\">
                            friends
                        </a>
                    </div>
                    <div id=\"navbar\" class=\"navbar-collapse collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"active\"><a href=\"../\">home</a></li>
                            <li id=\"profilenav\"><a href=\"profile\">profile</a></li>


                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li id=\"registernav\"><a href=\"/register\">register<span class=\"sr-only\">(current)</span></a></li>
                            <li id=\"loginnav\"><a href=\"/login\">login<span class=\"sr-only\">(current)</span></a></li>
                            <li><a href=\"/logout\">log out</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container-fluid -->
            </nav>



            <div class=\"jumbotron\">
                <h1 style=\"text-align: center;\">cse friends network</h1>
            </div>


        ";
        // line 87
        $this->displayBlock('container', $context, $blocks);
        // line 88
        echo "
    </div>


    <footer class=\"footer\">
        <div class=\"container\" style=\"text-align: center;\">
            <p class=\"text-muted\">built using awesome <b>symfony framework</b> and <b>bootstrap</b>
            <br>
            <a href=\"https://github.com/wathmal/friends-social-network\">github project</a>
            </p>
            
        </div>
    </footer>

    ";
        // line 102
        $this->displayBlock('javascripts', $context, $blocks);
        // line 105
        echo "
</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "friends";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "

        ";
    }

    // line 87
    public function block_container($context, array $blocks = array())
    {
    }

    // line 102
    public function block_javascripts($context, array $blocks = array())
    {
        // line 103
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
        return array (  166 => 103,  163 => 102,  158 => 87,  152 => 8,  149 => 7,  143 => 5,  136 => 105,  134 => 102,  118 => 88,  116 => 87,  36 => 11,  34 => 7,  29 => 5,  23 => 1,);
    }
}
