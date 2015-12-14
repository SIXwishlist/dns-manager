<?php

/* /auth/register.twig */
class __TwigTemplate_2864fccc74067edb1912b0b5fb4ea1cb7d540bf8b0df06292d96ccb56e011dbf extends Twig_Template
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
                    <h3 class=\"panel-title\">Register</h3>
                </div>

                <div class=\"panel-body\">
                    <form role=\"form\" method=\"post\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/registerPOST\">
                        <fieldset>
                            <div id=\"error-container\" class=\"alert alert-danger\" role=\"alert\" style=\"";
        // line 15
        if ((isset($context["error"]) ? $context["error"] : null)) {
            echo "display: block;";
        }
        echo "\">
                                <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
                                <span class=\"sr-only\">Error:</span>
                                <span id=\"error\">";
        // line 18
        if ((isset($context["error"]) ? $context["error"] : null)) {
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : null), "html", null, true);
        }
        echo "</span>
                            </div>

                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"Firstname\" name=\"firstname\" type=\"text\" autofocus required>
                            </div>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"Lastname\" name=\"lastname\" type=\"text\" autofocus required>
                            </div>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"E-mail\" name=\"email\" type=\"email\" autofocus required>
                            </div>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"Password\" name=\"password\" id=\"password\" type=\"password\" value=\"\">
                            </div>
                            <div class=\"form-group\">
                                <input class=\"form-control\" placeholder=\"Confirm password\" name=\"confirmpassword\" id=\"confirmpassword\" type=\"password\" value=\"\">
                            </div>
                            <div class=\"checkbox\">
                                <label>
                                    <input name=\"remember\" type=\"checkbox\" value=\"Remember Me\">Remember Me
                                </label>
                                <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/login\" class=\"pull-right\">Already registred ?</a>
                            </div>

                            <button type=\"submit\" class=\"btn btn-lg btn-success btn-block\">Register</button>
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
        return "/auth/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 40,  63 => 18,  55 => 15,  50 => 13,  39 => 4,  36 => 3,  11 => 1,);
    }
}
