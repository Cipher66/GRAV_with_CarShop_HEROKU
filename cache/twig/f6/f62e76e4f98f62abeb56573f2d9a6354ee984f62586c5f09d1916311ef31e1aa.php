<?php

/* plugin.php.twig */
class __TwigTemplate_ea4a71f592158df20a548ef4c7c46ce63c6e391bcc60f8b02881a6bc7b227182 extends Twig_Template
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
        echo "<?php
namespace Grav\\Plugin;

use Grav\\Common\\Plugin;
use RocketTheme\\Toolbox\\Event\\Event;

/**
 * Class ";
        // line 8
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("camel", $this->getAttribute(($context["component"] ?? null), "name", array()));
        echo "Plugin
 * @package Grav\\Plugin
 */
class ";
        // line 11
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("camel", $this->getAttribute(($context["component"] ?? null), "name", array()));
        echo "Plugin extends Plugin
{
    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0]
        ];
    }

    /**
     * Initialize the plugin
     */
    public function onPluginsInitialized()
    {
        // Don't proceed if we are in the admin plugin
        if (\$this->isAdmin()) {
            return;
        }

        // Enable the main event we are interested in
        \$this->enable([
            'onPageContentRaw' => ['onPageContentRaw', 0]
        ]);
    }

    /**
     * Do some work for this event, full details of events can be found
     * on the learn site: http://learn.getgrav.org/plugins/event-hooks
     *
     * @param Event \$e
     */
    public function onPageContentRaw(Event \$e)
    {
        // Get a variable from the plugin configuration
        \$text = \$this->grav['config']->get('plugins.";
        // line 55
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute(($context["component"] ?? null), "name", array()));
        echo ".text_var');

        // Get the current raw content
        \$content = \$e['page']->getRawContent();

        // Prepend the output with the custom text and set back on the page
        \$e['page']->setRawContent(\$text . \"\\n\\n\" . \$content);
    }
}
";
    }

    public function getTemplateName()
    {
        return "plugin.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 55,  34 => 11,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php
namespace Grav\\Plugin;

use Grav\\Common\\Plugin;
use RocketTheme\\Toolbox\\Event\\Event;

/**
 * Class {{ component.name|camelize }}Plugin
 * @package Grav\\Plugin
 */
class {{ component.name|camelize }}Plugin extends Plugin
{
    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0]
        ];
    }

    /**
     * Initialize the plugin
     */
    public function onPluginsInitialized()
    {
        // Don't proceed if we are in the admin plugin
        if (\$this->isAdmin()) {
            return;
        }

        // Enable the main event we are interested in
        \$this->enable([
            'onPageContentRaw' => ['onPageContentRaw', 0]
        ]);
    }

    /**
     * Do some work for this event, full details of events can be found
     * on the learn site: http://learn.getgrav.org/plugins/event-hooks
     *
     * @param Event \$e
     */
    public function onPageContentRaw(Event \$e)
    {
        // Get a variable from the plugin configuration
        \$text = \$this->grav['config']->get('plugins.{{ component.name|hyphenize }}.text_var');

        // Get the current raw content
        \$content = \$e['page']->getRawContent();

        // Prepend the output with the custom text and set back on the page
        \$e['page']->setRawContent(\$text . \"\\n\\n\" . \$content);
    }
}
", "plugin.php.twig", "/var/www/html/grav/user/plugins/devtools/components/plugin/blank/plugin.php.twig");
    }
}
