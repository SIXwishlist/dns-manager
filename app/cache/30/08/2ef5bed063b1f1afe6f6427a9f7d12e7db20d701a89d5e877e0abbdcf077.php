<?php

/* /auth/login.twig */
class __TwigTemplate_30082ef5bed063b1f1afe6f6427a9f7d12e7db20d701a89d5e877e0abbdcf077 extends Twig_Template
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-4 col-md-offset-4\">
            <div class=\"login-panel panel panel-default\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">Please Sign In</h3>
                </div>
                <div class=\"panel-body\">
                    <form role=\"form\" method=\"post\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/loginPOST\">
                        <fieldset>
                            <div id=\"error-container\" class=\"alert alert-danger\" role=\"alert\" style=\"";
        // line 14
        if ((isset($context["error"]) ? $context["error"] : null)) {
            echo "display: block;";
        }
        echo "\">
                              <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
                              <span class=\"sr-only\">Error:</span>
                              <span id=\"error\">";
        // line 17
        if ((isset($context["error"]) ? $context["error"] : null)) {
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        }
        echo "</span>
                            </div>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"E-mail\" name=\"email\" type=\"email\" autofocus required>
                            </div>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"Password\" name=\"password\" type=\"password\" value=\"\">
                            </div>
                            <div class=\"checkbox\">
                                <label>
                                    <input name=\"remember\" type=\"checkbox\" value=\"Remember Me\">Remember Me
                                </label>
                                <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/register\" class=\"pull-right\">Don't have an account ?</a>
                            </div>
                            <!-- Change this to a button or input when using this as a form -->
                            <button type=\"submit\" class=\"btn btn-lg btn-success btn-block\">Login</button>
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
        return "/auth/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 29,  62 => 17,  54 => 14,  49 => 12,  39 => 4,  36 => 3,  11 => 1,);
    }
}
