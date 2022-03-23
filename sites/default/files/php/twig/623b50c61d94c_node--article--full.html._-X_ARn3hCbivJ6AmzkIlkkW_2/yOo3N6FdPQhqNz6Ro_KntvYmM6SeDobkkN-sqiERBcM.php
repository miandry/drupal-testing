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

/* themes/custom/story/templates/node--article--full.html.twig */
class __TwigTemplate_a815eeccedfed0e98192d66a916b2348e9c6a5c5e93023f76e0b1ab71998d252 extends \Twig\Template
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

<div class=\"container\">
  <div class=\"row cards\">
    <input type=\"hidden\" id=\"story-size\" value=\"";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_length_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_stories", [], "any", false, false, true, 5), 5, $this->source)), "html", null, true);
        echo "\">
    ";
        // line 6
        $context["row"] = 0;
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_stories", [], "any", false, false, true, 7));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["story"]) {
            // line 8
            echo "        ";
            $context["story_nid"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["story"], "value", [], "any", false, false, true, 8), "target_id", [], "any", false, false, true, 8);
            echo "   
        <div data-row=\"";
            // line 9
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["row"] ?? null), 9, $this->source), "html", null, true);
            echo "\" class=\"row-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["row"] ?? null), 9, $this->source), "html", null, true);
            echo " col-sm-6 col-md-6 col-lg-4 card-story \" data-number=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 9, $this->source), "html", null, true);
            echo "\" id=\"story-";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["key"], 9, $this->source), "html", null, true);
            echo "\">
          ";
            // line 10
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Drupal\twig_tweak\TwigTweakExtension::drupalEntity("node", $this->sandbox->ensureToStringAllowed(($context["story_nid"] ?? null), 10, $this->source), "card"), "html", null, true);
            echo "   
        </div>
        
        ";
            // line 13
            if ((0 == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 13) % 3)) {
                // line 14
                echo "            ";
                $context["row"] = (($context["row"] ?? null) + 1);
                // line 15
                echo "        ";
            }
            echo "    
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['story'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "  </div>
</div>
 ";
    }

    public function getTemplateName()
    {
        return "themes/custom/story/templates/node--article--full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 17,  95 => 15,  92 => 14,  90 => 13,  84 => 10,  74 => 9,  69 => 8,  51 => 7,  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<div class=\"container\">
  <div class=\"row cards\">
    <input type=\"hidden\" id=\"story-size\" value=\"{{node.field_stories|length}}\">
    {% set row = 0 %}
    {% for key,story in node.field_stories %}
        {% set story_nid = story.value.target_id %}   
        <div data-row=\"{{row}}\" class=\"row-{{row}} col-sm-6 col-md-6 col-lg-4 card-story \" data-number=\"{{key}}\" id=\"story-{{key}}\">
          {{ drupal_entity('node', story_nid, 'card') }}   
        </div>
        
        {% if loop.index is divisible by(3) %}
            {% set row = row + 1 %}
        {% endif %}    
    {% endfor %}
  </div>
</div>
 ", "themes/custom/story/templates/node--article--full.html.twig", "/Volumes/ARCHIVE/projects/miandy_project/drupal83/themes/custom/story/templates/node--article--full.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 6, "for" => 7, "if" => 13);
        static $filters = array("escape" => 5, "length" => 5);
        static $functions = array("drupal_entity" => 10);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['escape', 'length'],
                ['drupal_entity']
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
