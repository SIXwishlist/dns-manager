<?php

/* /base_auth.twig */
class __TwigTemplate_f6fbe2c4db0d37e81a6206147a8fc24e69758f7a0224117c47d8e1e483934815 extends Twig_Template
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
        $this->displayBlock('content', $context, $blocks);
        // line 3
        $this->env->loadTemplate("/layouts/footer.twig")->display($context);
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "/base_auth.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  24 => 3,  22 => 2,  20 => 1,);
    }
}
