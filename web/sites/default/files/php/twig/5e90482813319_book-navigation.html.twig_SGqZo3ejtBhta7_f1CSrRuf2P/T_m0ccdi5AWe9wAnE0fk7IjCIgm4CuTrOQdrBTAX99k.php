<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* core/themes/classy/templates/navigation/book-navigation.html.twig */
class __TwigTemplate_d15573c64897ec2477c7c016e13bb730e20043093ebec93c921b4effe4007ccf extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 32];
        $filters = ["escape" => 31, "t" => 36];
        $functions = ["attach_library" => 31];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "core/themes/classy/templates/navigation/book-navigation.html.twig"));

        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("classy/book-navigation"), "html", null, true);
        echo "
";
        // line 32
        if ((($context["tree"] ?? null) || ($context["has_links"] ?? null))) {
            // line 33
            echo "  <nav id=\"book-navigation-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["book_id"] ?? null)), "html", null, true);
            echo "\" class=\"book-navigation\" role=\"navigation\" aria-labelledby=\"book-label-";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["book_id"] ?? null)), "html", null, true);
            echo "\">
    ";
            // line 34
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["tree"] ?? null)), "html", null, true);
            echo "
    ";
            // line 35
            if (($context["has_links"] ?? null)) {
                // line 36
                echo "      <h2 class=\"visually-hidden\" id=\"book-label-";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["book_id"] ?? null)), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Book traversal links for"));
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["book_title"] ?? null)), "html", null, true);
                echo "</h2>
      <ul class=\"book-pager\">
      ";
                // line 38
                if (($context["prev_url"] ?? null)) {
                    // line 39
                    echo "        <li class=\"book-pager__item book-pager__item--previous\">
          <a href=\"";
                    // line 40
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prev_url"] ?? null)), "html", null, true);
                    echo "\" rel=\"prev\" title=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to previous page"));
                    echo "\"><b>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("‹"));
                    echo "</b> ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["prev_title"] ?? null)), "html", null, true);
                    echo "</a>
        </li>
      ";
                }
                // line 43
                echo "      ";
                if (($context["parent_url"] ?? null)) {
                    // line 44
                    echo "        <li class=\"book-pager__item book-pager__item--center\">
          <a href=\"";
                    // line 45
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["parent_url"] ?? null)), "html", null, true);
                    echo "\" title=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to parent page"));
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Up"));
                    echo "</a>
        </li>
      ";
                }
                // line 48
                echo "      ";
                if (($context["next_url"] ?? null)) {
                    // line 49
                    echo "        <li class=\"book-pager__item book-pager__item--next\">
          <a href=\"";
                    // line 50
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["next_url"] ?? null)), "html", null, true);
                    echo "\" rel=\"next\" title=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go to next page"));
                    echo "\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["next_title"] ?? null)), "html", null, true);
                    echo " <b>";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("›"));
                    echo "</b></a>
        </li>
      ";
                }
                // line 53
                echo "    </ul>
    ";
            }
            // line 55
            echo "  </nav>
";
        }
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/navigation/book-navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 55,  138 => 53,  126 => 50,  123 => 49,  120 => 48,  110 => 45,  107 => 44,  104 => 43,  92 => 40,  89 => 39,  87 => 38,  77 => 36,  75 => 35,  71 => 34,  64 => 33,  62 => 32,  58 => 31,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/classy/templates/navigation/book-navigation.html.twig", "/Applications/MAMP/htdocs/d82004/web/core/themes/classy/templates/navigation/book-navigation.html.twig");
    }
}
