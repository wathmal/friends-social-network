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


    </head>
    <body>
        <div class=\"container\">
            <div class=\"jumbotron\">
                <h1>friends</h1>
                <p>...</p>
            </div>


        ";
        // line 24
        $this->displayBlock('container', $context, $blocks);
        // line 25
        echo "
    </div>
    ";
        // line 27
        $this->displayBlock('javascripts', $context, $blocks);
        // line 30
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

    // line 24
    public function block_container($context, array $blocks = array())
    {
    }

    // line 27
    public function block_javascripts($context, array $blocks = array())
    {
        // line 28
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
        return array (  91 => 28,  88 => 27,  83 => 24,  77 => 8,  74 => 7,  68 => 5,  61 => 30,  59 => 27,  55 => 25,  53 => 24,  36 => 11,  34 => 7,  29 => 5,  23 => 1,);
    }
}
