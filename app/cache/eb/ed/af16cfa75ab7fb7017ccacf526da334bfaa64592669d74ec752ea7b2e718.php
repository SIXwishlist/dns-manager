<?php

/* /auth/profile.twig */
class __TwigTemplate_ebedaf16cfa75ab7fb7017ccacf526da334bfaa64592669d74ec752ea7b2e718 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("/base_auth.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "/base_auth.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"page-wrapper\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">Profile</h1>
                <div class=\"panel-body col-md-4 col-lg-4\">
                    <form role=\"form\" method=\"post\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/profilePOST\">
                        <fieldset>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"First Name\" name=\"firstname\" type=\"text\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "firstname", array()), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"Last Name\" name=\"lastname\" type=\"text\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "lastname", array()), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"E-mail\" name=\"email\" type=\"email\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "email", array()), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"Old Password\" name=\"password\" type=\"password\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "password", array()), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"New Password\" name=\"newpassword\" type=\"password\">
                            </div>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"Confirm Password\" name=\"confirmpassword\" type=\"password\">
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button type=\"submit\" class=\"btn btn-lg btn-success btn-block\">Update</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/auth/profile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 22,  65 => 19,  59 => 16,  53 => 13,  47 => 10,  39 => 4,  36 => 3,  11 => 1,);
    }
}
