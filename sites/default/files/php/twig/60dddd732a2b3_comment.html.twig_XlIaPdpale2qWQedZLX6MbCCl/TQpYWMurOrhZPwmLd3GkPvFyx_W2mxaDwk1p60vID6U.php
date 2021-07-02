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

/* core/themes/seven/templates/classy/content/comment.html.twig */
class __TwigTemplate_1e151ca0f3e60835ef6d4951b678ba2fbd92383a32bc91f05b063ec3618f34c1 extends \Twig\Template
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
        $tags = array("if" => 67, "set" => 71);
        $filters = array("escape" => 68);
        $functions = array("attach_library" => 68);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
                ['attach_library']
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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 67
        if (($context["threaded"] ?? null)) {
            // line 68
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("seven/classy.indented"), "html", null, true);
            echo "
";
        }
        // line 71
        $context["classes"] = [0 => "comment", 1 => "js-comment", 2 => (((        // line 74
($context["status"] ?? null) != "published")) ? (($context["status"] ?? null)) : ("")), 3 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 75
($context["comment"] ?? null), "owner", [], "any", false, false, true, 75), "anonymous", [], "any", false, false, true, 75)) ? ("by-anonymous") : ("")), 4 => (((        // line 76
($context["author_id"] ?? null) && (($context["author_id"] ?? null) == twig_get_attribute($this->env, $this->source, ($context["commented_entity"] ?? null), "getOwnerId", [], "method", false, false, true, 76)))) ? ((("by-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["commented_entity"] ?? null), "getEntityTypeId", [], "method", false, false, true, 76), 76, $this->source)) . "-author")) : (""))];
        // line 79
        echo "<article";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 79), 79, $this->source), "html", null, true);
        echo ">
  ";
        // line 85
        echo "  <mark class=\"hidden\" data-comment-timestamp=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["new_indicator_timestamp"] ?? null), 85, $this->source), "html", null, true);
        echo "\"></mark>

  <footer class=\"comment__meta\">
    ";
        // line 88
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["user_picture"] ?? null), 88, $this->source), "html", null, true);
        echo "
    <p class=\"comment__submitted\">";
        // line 89
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["submitted"] ?? null), 89, $this->source), "html", null, true);
        echo "</p>

    ";
        // line 96
        echo "    ";
        if (($context["parent"] ?? null)) {
            // line 97
            echo "      <p class=\"parent visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["parent"] ?? null), 97, $this->source), "html", null, true);
            echo "</p>
    ";
        }
        // line 99
        echo "
    ";
        // line 100
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["permalink"] ?? null), 100, $this->source), "html", null, true);
        echo "
  </footer>

  <div";
        // line 103
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => "content"], "method", false, false, true, 103), 103, $this->source), "html", null, true);
        echo ">
    ";
        // line 104
        if (($context["title"] ?? null)) {
            // line 105
            echo "      ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 105, $this->source), "html", null, true);
            echo "
      <h3";
            // line 106
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_attributes"] ?? null), 106, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 106, $this->source), "html", null, true);
            echo "</h3>
      ";
            // line 107
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 107, $this->source), "html", null, true);
            echo "
    ";
        }
        // line 109
        echo "    ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 109, $this->source), "html", null, true);
        echo "
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "core/themes/seven/templates/classy/content/comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 109,  131 => 107,  125 => 106,  120 => 105,  118 => 104,  114 => 103,  108 => 100,  105 => 99,  99 => 97,  96 => 96,  91 => 89,  87 => 88,  80 => 85,  75 => 79,  73 => 76,  72 => 75,  71 => 74,  70 => 71,  64 => 68,  62 => 67,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/seven/templates/classy/content/comment.html.twig", "D:\\Softwares\\soft\\htdocs\\pgcal9.1\\core\\themes\\seven\\templates\\classy\\content\\comment.html.twig");
    }
}
