<?php

/* README.md.twig */
class __TwigTemplate_735bfef4fbd4142848d5e877b565f68dca74060e8f0ad3078d5f453ed984eeb7 extends Twig_Template
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
        $context["component_title"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("title", $this->getAttribute(($context["component"] ?? null), "name", array()));
        // line 2
        $context["component_hyphenated"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute(($context["component"] ?? null), "name", array()));
        // line 3
        $context["developer_hyphenated"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute($this->getAttribute(($context["component"] ?? null), "author", array()), "githubid", array()));
        // line 4
        echo "# ";
        echo ($context["component_title"] ?? null);
        echo " Plugin

**This README.md file should be modified to describe the features, installation, configuration, and general usage of this plugin.**

The **";
        // line 8
        echo ($context["component_title"] ?? null);
        echo "** Plugin is for [Grav CMS](http://github.com/getgrav/grav). ";
        echo $this->getAttribute(($context["component"] ?? null), "description", array());
        echo "

## Installation

Installing the ";
        // line 12
        echo ($context["component_title"] ?? null);
        echo " plugin can be done in one of two ways. The GPM (Grav Package Manager) installation method enables you to quickly and easily install the plugin with a simple terminal command, while the manual method enables you to do so via a zip file.

### GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install ";
        // line 18
        echo ($context["component_hyphenated"] ?? null);
        echo "

This will install the ";
        // line 20
        echo ($context["component_title"] ?? null);
        echo " plugin into your `/user/plugins` directory within Grav. Its files can be found under `/your/site/grav/user/plugins/";
        echo ($context["component_hyphenated"] ?? null);
        echo "`.

### Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `";
        // line 24
        echo ($context["component_hyphenated"] ?? null);
        echo "`. You can find these files on [GitHub](https://github.com/";
        echo ($context["developer_hyphenated"] ?? null);
        echo "/grav-plugin-";
        echo ($context["component_hyphenated"] ?? null);
        echo ") or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/";
        // line 28
        echo ($context["component_hyphenated"] ?? null);
        echo "
\t
> NOTE: This plugin is a modular component for Grav which requires [Grav](http://github.com/getgrav/grav) and the [Error](https://github.com/getgrav/grav-plugin-error) and [Problems](https://github.com/getgrav/grav-plugin-problems) to operate.

### Admin Plugin

If you use the admin plugin, you can install directly through the admin plugin by browsing the `Plugins` tab and clicking on the `Add` button.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/";
        // line 38
        echo ($context["component_hyphenated"] ?? null);
        echo "/";
        echo ($context["component_hyphenated"] ?? null);
        echo ".yaml` to `user/config/plugins/";
        echo ($context["component_hyphenated"] ?? null);
        echo ".yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
```

Note that if you use the admin plugin, a file with your configuration, and named ";
        // line 46
        echo ($context["component_hyphenated"] ?? null);
        echo ".yaml will be saved in the `user/config/plugins/` folder once the configuration is saved in the admin.

## Usage

**Describe how to use the plugin.**

## Credits

**Did you incorporate third-party code? Want to thank somebody?**

## To Do

- [ ] Future plans, if any

";
    }

    public function getTemplateName()
    {
        return "README.md.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 46,  89 => 38,  76 => 28,  65 => 24,  56 => 20,  51 => 18,  42 => 12,  33 => 8,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set component_title = (component.name|titleize) %}
{% set component_hyphenated = (component.name|hyphenize) %}
{% set developer_hyphenated = (component.author.githubid|hyphenize) %}
# {{ component_title }} Plugin

**This README.md file should be modified to describe the features, installation, configuration, and general usage of this plugin.**

The **{{ component_title }}** Plugin is for [Grav CMS](http://github.com/getgrav/grav). {{ component.description }}

## Installation

Installing the {{ component_title }} plugin can be done in one of two ways. The GPM (Grav Package Manager) installation method enables you to quickly and easily install the plugin with a simple terminal command, while the manual method enables you to do so via a zip file.

### GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install {{ component_hyphenated }}

This will install the {{ component_title }} plugin into your `/user/plugins` directory within Grav. Its files can be found under `/your/site/grav/user/plugins/{{ component_hyphenated }}`.

### Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `{{ component_hyphenated }}`. You can find these files on [GitHub](https://github.com/{{ developer_hyphenated }}/grav-plugin-{{ component_hyphenated }}) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/{{ component_hyphenated }}
\t
> NOTE: This plugin is a modular component for Grav which requires [Grav](http://github.com/getgrav/grav) and the [Error](https://github.com/getgrav/grav-plugin-error) and [Problems](https://github.com/getgrav/grav-plugin-problems) to operate.

### Admin Plugin

If you use the admin plugin, you can install directly through the admin plugin by browsing the `Plugins` tab and clicking on the `Add` button.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/{{ component_hyphenated }}/{{ component_hyphenated }}.yaml` to `user/config/plugins/{{ component_hyphenated }}.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
```

Note that if you use the admin plugin, a file with your configuration, and named {{component_hyphenated}}.yaml will be saved in the `user/config/plugins/` folder once the configuration is saved in the admin.

## Usage

**Describe how to use the plugin.**

## Credits

**Did you incorporate third-party code? Want to thank somebody?**

## To Do

- [ ] Future plans, if any

", "README.md.twig", "/var/www/html/grav/user/plugins/devtools/components/plugin/blank/README.md.twig");
    }
}
