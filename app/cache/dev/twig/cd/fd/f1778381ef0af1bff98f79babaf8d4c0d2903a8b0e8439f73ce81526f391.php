<?php

/* testBundle:Default:profile.html.twig */
class __TwigTemplate_cdfdf1778381ef0af1bff98f79babaf8d4c0d2903a8b0e8439f73ce81526f391 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "    <h3>howdy,, ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h3>
    <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["picture"]) ? $context["picture"] : $this->getContext($context, "picture")), "html", null, true);
        echo "\"/>
    <p>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "testBundle:Default:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  44 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
