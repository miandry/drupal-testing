<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/story/templates/node--story--card.html.twig */
class __TwigTemplate_db0fa6f70af16bf9434e84024d5b88c3223fb37558d8fbea91dee0a4b25be066 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 2
        $context["cta"] = twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_cta", [], "any", false, false, true, 2)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "value", [], "any", false, false, true, 2);
        // line 3
        $context["img"] = Drupal\twig_tweak\TwigTweakExtension::imageStyleFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_media_image", [], "any", false, false, true, 3)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null), "entity", [], "any", false, false, true, 3), "field_media_image", [], "any", false, false, true, 3)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[0] ?? null) : null), "entity", [], "any", false, false, true, 3), "uri", [], "any", false, false, true, 3)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null), "value", [], "any", false, false, true, 3), 3, $this->source), "236_177");
        // line 4
        echo "<div class=\"card mb-2\">
  <img src=\"";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["img"] ?? null), 5, $this->source), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"...\">
  <div class=\"card-body\">
  <h5 class=\"card-title\">";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 7, $this->source), "html", null, true);
        echo "</h5>
    <div class=\"card-text\">
    ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "
    </div>
    <a href=\"";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cta"] ?? null), "uri", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "\" class=\"btn btn-primary\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["cta"] ?? null), "title", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "</a>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "themes/custom/story/templates/node--story--card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 11,  59 => 9,  54 => 7,  49 => 5,  46 => 4,  44 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% set cta = node.field_cta[0].value %}
{% set img = node.field_media_image[0].entity.field_media_image[0].entity.uri[0].value|image_style('236_177') %}
<div class=\"card mb-2\">
  <img src=\"{{ img }}\" class=\"card-img-top\" alt=\"...\">
  <div class=\"card-body\">
  <h5 class=\"card-title\">{{label}}</h5>
    <div class=\"card-text\">
    {{ content.body}}
    </div>
    <a href=\"{{cta.uri}}\" class=\"btn btn-primary\">{{cta.title}}</a>
  </div>
</div>", "themes/custom/story/templates/node--story--card.html.twig", "/Volumes/ARCHIVE/projects/miandy_project/drupal83/themes/custom/story/templates/node--story--card.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2);
        static $filters = array("image_style" => 3, "escape" => 5);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['image_style', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
