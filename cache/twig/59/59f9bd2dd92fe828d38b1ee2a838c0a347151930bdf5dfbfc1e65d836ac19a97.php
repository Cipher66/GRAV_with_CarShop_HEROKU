<?php

/* @Page:/var/www/html/grav/user/plugins/error/pages */
class __TwigTemplate_9eb915e3be6ac8ebddffbcdcbdc88fe25108c85f62b714d7176992381bf978fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Custom Text added by the **User Information Plugin** plugin (disable plugin to remove)

";
        // line 3
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_ERROR.ERROR_MESSAGE");
        echo "

";
    }

    public function getTemplateName()
    {
        return "@Page:/var/www/html/grav/user/plugins/error/pages";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Custom Text added by the **User Information Plugin** plugin (disable plugin to remove)

{{ 'PLUGIN_ERROR.ERROR_MESSAGE'|t }}

", "@Page:/var/www/html/grav/user/plugins/error/pages", "");
    }
}
