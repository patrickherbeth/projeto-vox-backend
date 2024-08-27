<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @JMSSerializer/Collector/events.html.twig */
class __TwigTemplate_2b64e5b136fa7a948ac9d50e86b0197d extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JMSSerializer/Collector/events.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JMSSerializer/Collector/events.html.twig"));

        // line 1
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 3
        yield "<h2>Event Dispatcher</h2>

<div class=\"sf-tabs\">
    <div class=\"tab\">
        <div class=\"tab-title\">Triggered Listeners <span class=\"badge\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 7, $this->source); })()), "getNumListeners", ["called"], "method", false, false, false, 7), "html", null, true);
        yield "</span></div>

        <div class=\"tab-content\">";
        // line 10
        if ((0 == CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "getNumListeners", ["called"], "method", false, false, false, 10))) {
            // line 11
            yield "<div class=\"empty\">
                    <p>No triggered listeners.</p>
                </div>";
        } else {
            // line 15
            yield CoreExtension::callMacro($macros["helper"], "macro_render_table", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 15, $this->source); })()), "triggeredListeners", [], "any", false, false, false, 15)], 15, $context, $this->getSourceContext());
        }
        // line 17
        yield "</div>
    </div>

    <div class=\"tab\">
        <div class=\"tab-title\">Not Called Listeners <span class=\"badge\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 21, $this->source); })()), "getNumListeners", ["not_called"], "method", false, false, false, 21), "html", null, true);
        yield "</span></div>
        <div class=\"tab-content\">
            ";
        // line 23
        yield CoreExtension::callMacro($macros["helper"], "macro_render_table_not_triggered_listeners", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 23, $this->source); })()), "notTriggeredListeners", [], "any", false, false, false, 23)], 23, $context, $this->getSourceContext());
        yield "
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 28
    public function macro_render_table_not_triggered_listeners($__notCalledListenersPerEvent__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "notCalledListenersPerEvent" => $__notCalledListenersPerEvent__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table_not_triggered_listeners"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table_not_triggered_listeners"));

            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notCalledListenersPerEvent"]) || array_key_exists("notCalledListenersPerEvent", $context) ? $context["notCalledListenersPerEvent"] : (function () { throw new RuntimeError('Variable "notCalledListenersPerEvent" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["eventName"] => $context["listeners"]) {
                // line 31
                yield "<h3>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["eventName"], "html", null, true);
                yield "</h3>
            <table>
                <thead>
                    <tr>
                        <th colspan=\"2\">Listener</th>
                    </tr>
                </thead>";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["listeners"]);
                foreach ($context['_seq'] as $context["_key"] => $context["listener"]) {
                    // line 39
                    yield "<tr>
                        <th class=\"colored font-normal\" colspan=\"4\">";
                    // line 40
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, $context["listener"]);
                    yield "</th>
                    </tr>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['listener'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                yield "</table>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['eventName'], $context['listeners'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 48
    public function macro_render_table($__listeners__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "listeners" => $__listeners__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table"));

            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["listeners"]) || array_key_exists("listeners", $context) ? $context["listeners"] : (function () { throw new RuntimeError('Variable "listeners" does not exist.', 50, $this->source); })()));
            foreach ($context['_seq'] as $context["eventName"] => $context["callsPerlistener"]) {
                // line 51
                yield "<h3>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["eventName"], "html", null, true);
                yield "</h3>
        <table>
            <thead>
            <tr>
                <th colspan=\"2\">Class</th>
                <th class=\"text-right\">Calls</th>
                <th class=\"text-right\">Total duration (ms)</th>
            </tr>
            </thead>";
                // line 60
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["callsPerlistener"]);
                foreach ($context['_seq'] as $context["listener"] => $context["callsPerClass"]) {
                    // line 61
                    yield "<tr>
                    <th class=\"colored font-normal\" colspan=\"4\">";
                    // line 62
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, $context["listener"]);
                    yield "</th>
                </tr>";
                    // line 64
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["callsPerClass"]);
                    foreach ($context['_seq'] as $context["className"] => $context["callsInfo"]) {
                        // line 65
                        yield "<tr>
                        <td>&nbsp;</td>
                        <td>";
                        // line 67
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["className"], "html", null, true);
                        yield "</td>
                        <td class=\"text-right\">";
                        // line 68
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["callsInfo"], "calls", [], "any", false, false, false, 68), "html", null, true);
                        yield "</td>
                        <td class=\"text-right\">";
                        // line 69
                        ((CoreExtension::getAttribute($this->env, $this->source, $context["callsInfo"], "duration", [], "any", false, false, false, 69)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["callsInfo"], "duration", [], "any", false, false, false, 69) * 1000), 4), "html", null, true)) : (yield ""));
                        yield "</td>
                    </tr>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['className'], $context['callsInfo'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['listener'], $context['callsPerClass'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                yield "</table>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['eventName'], $context['callsPerlistener'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@JMSSerializer/Collector/events.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  229 => 73,  217 => 69,  213 => 68,  209 => 67,  205 => 65,  201 => 64,  197 => 62,  194 => 61,  190 => 60,  178 => 51,  174 => 50,  156 => 48,  140 => 43,  132 => 40,  129 => 39,  125 => 38,  115 => 31,  111 => 30,  93 => 28,  78 => 23,  73 => 21,  67 => 17,  64 => 15,  59 => 11,  57 => 10,  52 => 7,  46 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- import _self as helper -%}

<h2>Event Dispatcher</h2>

<div class=\"sf-tabs\">
    <div class=\"tab\">
        <div class=\"tab-title\">Triggered Listeners <span class=\"badge\">{{ collector.getNumListeners('called') }}</span></div>

        <div class=\"tab-content\">
            {%- if 0 == collector.getNumListeners('called') -%}
                <div class=\"empty\">
                    <p>No triggered listeners.</p>
                </div>
            {%- else -%}
                {{- helper.render_table(collector.triggeredListeners) -}}
            {%- endif -%}
        </div>
    </div>

    <div class=\"tab\">
        <div class=\"tab-title\">Not Called Listeners <span class=\"badge\">{{ collector.getNumListeners('not_called') }}</span></div>
        <div class=\"tab-content\">
            {{ helper.render_table_not_triggered_listeners(collector.notTriggeredListeners) }}
        </div>
    </div>
</div>

{%- macro render_table_not_triggered_listeners(notCalledListenersPerEvent) -%}

    {%- for eventName, listeners in notCalledListenersPerEvent -%}
        <h3>{{ eventName }}</h3>
            <table>
                <thead>
                    <tr>
                        <th colspan=\"2\">Listener</th>
                    </tr>
                </thead>
                {%- for listener in listeners -%}
                    <tr>
                        <th class=\"colored font-normal\" colspan=\"4\">{{ dump(listener) }}</th>
                    </tr>
                {%- endfor -%}
            </table>
    {%- endfor -%}
{%- endmacro -%}


{%- macro render_table(listeners) -%}

    {%- for eventName, callsPerlistener in listeners -%}
        <h3>{{ eventName }}</h3>
        <table>
            <thead>
            <tr>
                <th colspan=\"2\">Class</th>
                <th class=\"text-right\">Calls</th>
                <th class=\"text-right\">Total duration (ms)</th>
            </tr>
            </thead>
            {%- for listener, callsPerClass in callsPerlistener -%}
                <tr>
                    <th class=\"colored font-normal\" colspan=\"4\">{{ dump(listener) }}</th>
                </tr>
                {%- for className, callsInfo in callsPerClass -%}
                    <tr>
                        <td>&nbsp;</td>
                        <td>{{ className }}</td>
                        <td class=\"text-right\">{{ callsInfo.calls }}</td>
                        <td class=\"text-right\">{{ callsInfo.duration ? (callsInfo.duration * 1000)|number_format(4) : '' }}</td>
                    </tr>
                {%- endfor -%}
            {%- endfor -%}
        </table>
    {%- endfor -%}
{%- endmacro -%}
", "@JMSSerializer/Collector/events.html.twig", "/var/www/html/vox/vox-projeto/vendor/jms/serializer-bundle/Resources/views/Collector/events.html.twig");
    }
}
