<?php

/* /pages/add-dns.twig */
class __TwigTemplate_04c67ac4213c07c1968c104e60654940707e59edc02b0d090e1ca307f2009405 extends Twig_Template
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
        echo "    <div id=\"page-wrapper\">
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1 class=\"page-header\">Add DNS</h1>
                    <div class=\"panel-body col-md-4 col-lg-4\">
                        <form role=\"form\" method=\"post\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "/addDomainNameSystemPOST\">
                            <fieldset>
                                <label>Data</label>
                                <div class=\"form-group\">
                                    <input class=\"form-control\" placeholder=\"Domain name\" name=\"nameHost\" type=\"text\">
                                </div>
                                <div class=\"form-group\">
                                    <input class=\"form-control\" placeholder=\"IP address\" name=\"ipAddress\" type=\"numeric\">
                                </div>

                                <label for=\"\">Dns Servers</label>
                                <div class=\"form-group\">
                                  <input class=\"form-control\" placeholder=\"ns1.example.net\" name=\"dns_server_ns1\" type=\"text\">
                                </div>
                                <div class=\"form-group\">
                                  <input class=\"form-control\" placeholder=\"ns2.example.net\" name=\"dns_server_ns2\" type=\"text\">
                                </div>

                                <label for=\"\">Mail servers</label>
                                <div class=\"form-group\">
                                  <input class=\"form-control\" placeholder=\"mail.example.com\" name=\"dns_mail_primary\" type=\"email\">
                                </div>
                                <div class=\"form-group\">
                                  <input class=\"form-control\" placeholder=\"mail-backup.example.com\" name=\"dns_mail_backup\" type=\"email\">
                                </div>

                                <label for=\"\">Time periods</label>
                                <div class=\"form-group\">
                                  <input class=\"form-control\" placeholder=\"Refresh time\" name=\"dns_refresh_time\" type=\"numeric\">
                                </div>
                                <div class=\"form-group\">
                                  <input class=\"form-control\" placeholder=\"Retry time\" name=\"dns_retry_time\" type=\"numeric\">
                                </div>
                                <div class=\"form-group\">
                                  <input class=\"form-control\" placeholder=\"Expire time\" name=\"dns_expire_time\" type=\"numeric\">
                                </div>
                                <div class=\"form-group\">
                                  <input class=\"form-control\" placeholder=\"Min TTL time\" name=\"dns_min_ttl_time\" type=\"numeric\">
                                </div>

                                <button type=\"submit\" class=\"btn btn-lg btn-success\">Add</button>
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
        return "/pages/add-dns.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 10,  39 => 4,  36 => 3,  11 => 1,);
    }
}
