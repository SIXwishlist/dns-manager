<?php

/* /pages/edit-dns.twig */
class __TwigTemplate_de0a949e432dd6c9a883e91a5691ba7cbe6e1feb089af5c5dd4e85e4718ba280 extends Twig_Template
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
        echo "  <div id=\"page-wrapper\">
    <div class=\"container-fluid\">
      <div class=\"row\">
        <div class=\"col-lg-12\">
          <h1 class=\"page-header\">Edit DNS</h1>
          <div class=\"panel-body col-md-4 col-lg-4\">
            <form role=\"form\" method=\"post\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/editDomainNameSystemPOST?";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["domain"]) ? $context["domain"] : null), "dns_id", array()), "html", null, true);
        echo "\">
              <fieldset>
                <label>Data</label>
                <div class=\"form-group\">
                  <input class=\"form-control\" placeholder=\"Host name\" name=\"nameHost\" type=\"text\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["domain"]) ? $context["domain"] : null), "nameHost", array()), "html", null, true);
        echo "\">
                </div>
                <div class=\"form-group\">
                  <input class=\"form-control\" placeholder=\"IP address\" name=\"ipAddress\" type=\"text\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["domain"]) ? $context["domain"] : null), "ipAddress", array()), "html", null, true);
        echo "\">
                </div>

                <label for=\"\">Dns Servers</label>
                <div class=\"form-group\">
                  <input class=\"form-control\" placeholder=\"ns1.example.net\" name=\"dns_server_ns1\" type=\"text\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["domain"]) ? $context["domain"] : null), "dns_server_ns1", array()), "html", null, true);
        echo "\">
                </div>
                <div class=\"form-group\">
                  <input class=\"form-control\" placeholder=\"ns2.example.net\" name=\"dns_server_ns2\" type=\"text\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["domain"]) ? $context["domain"] : null), "dns_server_ns2", array()), "html", null, true);
        echo "\">
                </div>

                <label for=\"\">Mail servers</label>
                <div class=\"form-group\">
                  <input class=\"form-control\" placeholder=\"mail.example.com\" name=\"dns_mail_primary\" type=\"email\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["domain"]) ? $context["domain"] : null), "dns_mail_primary", array()), "html", null, true);
        echo "\">
                </div>
                <div class=\"form-group\">
                  <input class=\"form-control\" placeholder=\"mail-backup.example.com\" name=\"dns_mail_backup\" type=\"email\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["domain"]) ? $context["domain"] : null), "dns_mail_backup", array()), "html", null, true);
        echo "\">
                </div>

                <label for=\"\">Time periods</label>
                <div class=\"form-group\">
                  <input class=\"form-control\" placeholder=\"Refresh time\" name=\"dns_refresh_time\" type=\"numeric\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["domain"]) ? $context["domain"] : null), "dns_refresh_time", array()), "html", null, true);
        echo "\">
                </div>
                <div class=\"form-group\">
                  <input class=\"form-control\" placeholder=\"Retry time\" name=\"dns_retry_time\" type=\"numeric\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["domain"]) ? $context["domain"] : null), "dns_retry_time", array()), "html", null, true);
        echo "\">
                </div>
                <div class=\"form-group\">
                  <input class=\"form-control\" placeholder=\"Expire time\" name=\"dns_expire_time\" type=\"numeric\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["domain"]) ? $context["domain"] : null), "dns_expire_time", array()), "html", null, true);
        echo "\">
                </div>
                <div class=\"form-group\">
                  <input class=\"form-control\" placeholder=\"Min TTL time\" name=\"dns_min_ttl_time\" type=\"numeric\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["domain"]) ? $context["domain"] : null), "dns_min_ttl_time", array()), "html", null, true);
        echo "\">
                </div>
                <button type=\"submit\" class=\"btn btn-md btn-success pull-left\">Update</button>
                <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/downloadFile?";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["domain"]) ? $context["domain"] : null), "dns_id", array()), "html", null, true);
        echo "\" class=\"btn btn-md btn-warning pull-right\" target=\"_blank\">Download .conf file</a>
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
        return "/pages/edit-dns.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 50,  116 => 47,  110 => 44,  104 => 41,  98 => 38,  90 => 33,  84 => 30,  76 => 25,  70 => 22,  62 => 17,  56 => 14,  47 => 10,  39 => 4,  36 => 3,  11 => 1,);
    }
}
