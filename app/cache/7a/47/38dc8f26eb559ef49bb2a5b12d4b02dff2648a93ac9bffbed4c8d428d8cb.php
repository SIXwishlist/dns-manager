<?php

/* /pages/dns-list.twig */
class __TwigTemplate_7a4738dc8f26eb559ef49bb2a5b12d4b02dff2648a93ac9bffbed4c8d428d8cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("/base.twig");
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
        return "/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <div id=\"page-wrapper\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\">DNS List</h1>
                    <div class=\"panel-body\">

                      <table class=\"table table-condensed\">
                        <thead>
                        <tr>
                          <th>#</th>
                          <th>Owner</th>
                          <th>Host Name</th>
                          <th>IP</th>
                          <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["domains"]) ? $context["domains"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 25
            echo "                          <tr>
                            <th scope=\"row\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["domain"], "dns_id", array()), "html", null, true);
            echo "</th>
                            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["domain"], "email", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["domain"], "nameHost", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["domain"], "ipAddress", array()), "html", null, true);
            echo "</td>
                            <td>
                              <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/dns_edit?";
            echo twig_escape_filter($this->env, $this->getAttribute($context["domain"], "dns_id", array()), "html", null, true);
            echo "\" class=\"btn btn-primary btn-sm\">Edit</a>
                              <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "/dns_delete?";
            echo twig_escape_filter($this->env, $this->getAttribute($context["domain"], "dns_id", array()), "html", null, true);
            echo "\" class=\"btn btn-danger btn-sm\">Delete</a>
                            </td>
                          </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                        </tbody>
                      </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "/pages/dns-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 36,  91 => 32,  85 => 31,  80 => 29,  76 => 28,  72 => 27,  68 => 26,  65 => 25,  61 => 24,  39 => 4,  36 => 3,  11 => 1,);
    }
}
