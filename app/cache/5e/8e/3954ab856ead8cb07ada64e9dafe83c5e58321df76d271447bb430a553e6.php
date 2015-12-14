<?php

/* /base.twig */
class __TwigTemplate_5e8e3954ab856ead8cb07ada64e9dafe83c5e58321df76d271447bb430a553e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("/layouts/header.twig")->display($context);
        // line 2
        $this->env->loadTemplate("/layouts/navigation.twig")->display($context);
        // line 3
        $this->displayBlock('content', $context, $blocks);
        // line 4
        $this->env->loadTemplate("/layouts/footer.twig")->display($context);
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "/base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  26 => 4,  24 => 3,  22 => 2,  20 => 1,);
    }
}
