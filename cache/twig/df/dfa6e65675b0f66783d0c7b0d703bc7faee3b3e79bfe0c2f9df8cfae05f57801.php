<?php

/* blueprints.yaml.twig */
class __TwigTemplate_03484395b41949e00f1e8fa8febb24f5cabbea76208e191d7be0b5c4891b6ef5 extends Twig_Template
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
        echo "name: ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("title", $this->getAttribute(($context["component"] ?? null), "name", array()));
        echo "
version: 0.1.0
description: ";
        // line 3
        echo $this->getAttribute(($context["component"] ?? null), "description", array());
        echo "
icon: plug
author:
  name: ";
        // line 6
        echo $this->getAttribute($this->getAttribute(($context["component"] ?? null), "author", array()), "name", array());
        echo "
  email: ";
        // line 7
        echo $this->getAttribute($this->getAttribute(($context["component"] ?? null), "author", array()), "email", array());
        echo "
homepage: https://github.com/";
        // line 8
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute($this->getAttribute(($context["component"] ?? null), "author", array()), "githubid", array()));
        echo "/grav-plugin-";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute(($context["component"] ?? null), "name", array()));
        echo "
demo: http://demo.yoursite.com
keywords: grav, plugin, etc
bugs: https://github.com/";
        // line 11
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute($this->getAttribute(($context["component"] ?? null), "author", array()), "githubid", array()));
        echo "/grav-plugin-";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute(($context["component"] ?? null), "name", array()));
        echo "/issues
docs: https://github.com/";
        // line 12
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute($this->getAttribute(($context["component"] ?? null), "author", array()), "githubid", array()));
        echo "/grav-plugin-";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->inflectorFilter("hyphen", $this->getAttribute(($context["component"] ?? null), "name", array()));
        echo "/blob/develop/README.md
license: MIT

form:
  validation: strict
  fields:
    enabled:
      type: toggle
      label: Plugin status
      highlight: 1
      default: 0
      options:
        1: Enabled
        0: Disabled
      validate:
        type: bool
    text_var:
      type: text
      label: Text Variable
      help: Text to add to the top of a page
";
    }

    public function getTemplateName()
    {
        return "blueprints.yaml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  47 => 11,  39 => 8,  35 => 7,  31 => 6,  25 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("name: {{ component.name|titleize }}
version: 0.1.0
description: {{ component.description }}
icon: plug
author:
  name: {{ component.author.name }}
  email: {{ component.author.email }}
homepage: https://github.com/{{ component.author.githubid|hyphenize }}/grav-plugin-{{ component.name|hyphenize }}
demo: http://demo.yoursite.com
keywords: grav, plugin, etc
bugs: https://github.com/{{ component.author.githubid|hyphenize }}/grav-plugin-{{ component.name|hyphenize }}/issues
docs: https://github.com/{{ component.author.githubid|hyphenize }}/grav-plugin-{{ component.name|hyphenize }}/blob/develop/README.md
license: MIT

form:
  validation: strict
  fields:
    enabled:
      type: toggle
      label: Plugin status
      highlight: 1
      default: 0
      options:
        1: Enabled
        0: Disabled
      validate:
        type: bool
    text_var:
      type: text
      label: Text Variable
      help: Text to add to the top of a page
", "blueprints.yaml.twig", "/var/www/html/grav/user/plugins/devtools/components/plugin/blank/blueprints.yaml.twig");
    }
}
