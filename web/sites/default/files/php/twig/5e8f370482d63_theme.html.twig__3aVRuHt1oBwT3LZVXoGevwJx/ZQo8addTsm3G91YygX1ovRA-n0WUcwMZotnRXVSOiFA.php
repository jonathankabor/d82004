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

/* @webprofiler/Collector/theme.html.twig */
class __TwigTemplate_0cce9ce76af8208705254d8658d2da827d5708482e81546f7a73cfb5657a1227 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'panel' => [$this, 'block_panel'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 1, "set" => 2];
        $filters = ["raw" => 3, "escape" => 4, "format" => 6, "t" => 8, "default" => 47];
        $functions = ["idelink" => 3, "abbr" => 3, "url" => 8];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'set'],
                ['raw', 'escape', 'format', 't', 'default'],
                ['idelink', 'abbr', 'url']
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@webprofiler/Collector/theme.html.twig"));

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start(function () { return ''; });
        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\webprofiler\Twig\Extension\ProfilerExtension')->getIdeLink($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "themeNegotiator", []), "class", []), "file", [])), $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "themeNegotiator", []), "class", []), "line", []))));
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\webprofiler\Twig\Extension\ProfilerExtension')->getAbbr($this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "themeNegotiator", []), "class", []), "class", []))));
        echo "
        ::";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "themeNegotiator", []), "class", []), "method", [])), "html", null, true);
        echo "</a>
    ";
        $context["negotiator"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 6
        echo "    ";
        $context["time"] = (($this->getAttribute(($context["collector"] ?? null), "templatecount", [])) ? (sprintf("%0.0f ms", $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "time", [])))) : ("n/a"));
        // line 7
        echo "    ";
        ob_start(function () { return ''; });
        // line 8
        echo "    <a href=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("webprofiler.dashboard", ["profile" => ($context["token"] ?? null)], ["fragment" => "theme"]), "html", null, true);
        echo "\" title=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Theme"));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Theme"));
        echo "\"
             src=\"data:image/png;base64,";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "icon", [])), "html", null, true);
        echo "\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status\">";
        // line 11
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "activeTheme", []), "name", [])), "html", null, true);
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        echo "    ";
        ob_start(function () { return ''; });
        // line 15
        echo "
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Name"));
        echo "</b>
        <span>";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "activeTheme", []), "name", [])), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Engine"));
        echo "</b>
        <span>";
        // line 22
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "activeTheme", []), "engine", [])), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 25
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Negotiator"));
        echo "</b>
        <span>";
        // line 26
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["negotiator"] ?? null)), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 29
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Render Time"));
        echo "</b>
        <span>";
        // line 30
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["time"] ?? null)), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 33
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Template Calls"));
        echo "</b>
        <span>";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "templatecount", [])), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Block Calls"));
        echo "</b>
        <span>";
        // line 38
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "blockcount", [])), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Macro Calls"));
        echo "</b>
        <span>";
        // line 42
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["collector"] ?? null), "macrocount", [])), "html", null, true);
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 45
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (((isset($context["icon"]) || array_key_exists("icon", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["icon"] ?? null)), "")) : ("")), "html", null, true);
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 48
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, (((isset($context["text"]) || array_key_exists("text", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["text"] ?? null)), "")) : ("")), "html", null, true);
        echo "</div>
    </div>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    // line 52
    public function block_panel($context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 53
        echo "    <script id=\"theme\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 54
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Theme"));
        echo "</h2>
        <div class=\"panel__container\">
            <table class=\"table--fixed\">
                <tr>
                    <th>";
        // line 58
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Name"));
        echo "</th>
                    <td><%- data.activeTheme.name %> (<a href=\"/admin/appearance/settings/bartik\">";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Edit"));
        echo ")</a>
                    </td>
                </tr>
                <tr>
                    <th>";
        // line 63
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Engine"));
        echo "</th>
                    <td><%- data.activeTheme.engine %></td>
                </tr>
                <tr>
                    <th>";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Base theme"));
        echo "</th>
                    <td><%- data.activeTheme.extension.base_theme %></td>
                </tr>
                <tr>
                    <th>";
        // line 71
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Regions"));
        echo "</th>
                    <td><%= Drupal.webprofiler.helpers.frm(data.activeTheme.regions) %></td>
                </tr>
                <tr>
                    <th>";
        // line 75
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Libraries"));
        echo "</th>
                    <td><%= Drupal.webprofiler.helpers.frm(data.activeTheme.libraries) %></td>
                </tr>
                <tr>
                    <th>";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Style sheets removed"));
        echo "</th>
                    <td><%= Drupal.webprofiler.helpers.frm(data.activeTheme.styleSheetsRemove) %></td>
                </tr>
                <tr>
                    <th>";
        // line 83
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Path"));
        echo "</th>
                    <td><%- data.activeTheme.path %></td>
                </tr>
                <tr>
                    <th>";
        // line 87
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Negotiator"));
        echo "</th>
                    <td><%= Drupal.webprofiler.helpers.classLink(data.negotiator.class) %></td>
                </tr>
            </table>
        </div>

        <div class=\"panel__container\">
            <ul class=\"list--inline\">
                <li><b>";
        // line 95
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Twig statistics"));
        echo "</b></li>
            </ul>

            <table class=\"table--fixed\">
                <tr>
                    <th>";
        // line 100
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Total Render Time"));
        echo "</th>
                    <td><%- Drupal.webprofiler.helpers.printTime(data.twig.render_time) %></td>
                </tr>
                <tr>
                    <th>";
        // line 104
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Template Calls"));
        echo "</th>
                    <td><%- data.twig.template_count %></td>
                </tr>
                <tr>
                    <th>";
        // line 108
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Block Calls"));
        echo "</th>
                    <td><%- data.twig.block_count %></td>
                </tr>
                <tr>
                    <th>";
        // line 112
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Macro Calls"));
        echo "</th>
                    <td><%- data.twig.macro_count %></td>
                </tr>
            </table>
        </div>

        <div class=\"panel__container\">
            <ul class=\"list--inline\">
                <li><b>";
        // line 120
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Twig rendered templates"));
        echo "</b></li>
            </ul>

            <table class=\"table--fixed\">
                <thead>
                <tr>
                    <th>";
        // line 126
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("template"));
        echo "</th>
                    <th>";
        // line 127
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("count"));
        echo "</th>
                </tr>
                </thead>
                <% _.each( data.twig.templates, function( item, key ){ %>
                <tr>
                    <th><%- key %></th>
                    <td><%- item %></td>
                </tr>
                <% }); %>
            </table>
        </div>

        <div class=\"panel__container\">
            <ul class=\"list--inline\">
                <li><b>";
        // line 141
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Twig callgraph"));
        echo "</b></li>
            </ul>

            <%= data.twig.callgraph %>
        </div>
    </script>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  365 => 141,  348 => 127,  344 => 126,  335 => 120,  324 => 112,  317 => 108,  310 => 104,  303 => 100,  295 => 95,  284 => 87,  277 => 83,  270 => 79,  263 => 75,  256 => 71,  249 => 67,  242 => 63,  235 => 59,  231 => 58,  224 => 54,  221 => 53,  215 => 52,  205 => 48,  201 => 47,  197 => 45,  191 => 42,  187 => 41,  181 => 38,  177 => 37,  171 => 34,  167 => 33,  161 => 30,  157 => 29,  151 => 26,  147 => 25,  141 => 22,  137 => 21,  131 => 18,  127 => 17,  123 => 15,  120 => 14,  114 => 11,  110 => 10,  106 => 9,  99 => 8,  96 => 7,  93 => 6,  88 => 4,  81 => 3,  78 => 2,  72 => 1,  65 => 52,  62 => 51,  60 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@webprofiler/Collector/theme.html.twig", "/Applications/MAMP/htdocs/d82004/web/modules/contrib/devel/webprofiler/templates/Collector/theme.html.twig");
    }
}
