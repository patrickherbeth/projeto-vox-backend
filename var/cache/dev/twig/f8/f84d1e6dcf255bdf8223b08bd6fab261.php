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

/* @JMSSerializer/Collector/handlers.html.twig */
class __TwigTemplate_6de62ea2c8dfee5878790e5114b4ebea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JMSSerializer/Collector/handlers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@JMSSerializer/Collector/handlers.html.twig"));

        // line 1
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 3
        yield "<h2>Type Handlers</h2>

<div class=\"sf-tabs\">
    <div class=\"tab\">
        <h3 class=\"tab-title\">Triggered Handlers <span class=\"badge\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 7, $this->source); })()), "getNumHandlers", ["called"], "method", false, false, false, 7), "html", null, true);
        yield "</span></h3>

        <div class=\"tab-content\">";
        // line 10
        if ((0 == CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 10, $this->source); })()), "getNumHandlers", ["called"], "method", false, false, false, 10))) {
            // line 11
            yield "<div class=\"empty\">
                    <p>No triggered handlers.</p>
                </div>";
        } else {
            // line 15
            yield CoreExtension::callMacro($macros["helper"], "macro_render_table_triggered_handlers", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 15, $this->source); })()), "triggeredHandlers", [], "any", false, false, false, 15)], 15, $context, $this->getSourceContext());
        }
        // line 17
        yield "</div>
    </div>

    <div class=\"tab\">
        <div class=\"tab-title\">Not Triggered Handlers <span class=\"badge\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 21, $this->source); })()), "getNumHandlers", ["not_called"], "method", false, false, false, 21), "html", null, true);
        yield "</span></div>
        <div class=\"tab-content\">
            ";
        // line 23
        yield CoreExtension::callMacro($macros["helper"], "macro_render_not_table_triggered_handlers", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 23, $this->source); })()), "notTriggeredHandlers", [], "any", false, false, false, 23)], 23, $context, $this->getSourceContext());
        yield "
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    // line 28
    public function macro_render_not_table_triggered_handlers($__handlers__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "handlers" => $__handlers__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_not_table_triggered_handlers"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_not_table_triggered_handlers"));

            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["handlers"]) || array_key_exists("handlers", $context) ? $context["handlers"] : (function () { throw new RuntimeError('Variable "handlers" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["direction"] => $context["callsByType"]) {
                // line 30
                yield "<h3>";
                // line 31
                if (($context["direction"] == Twig\Extension\CoreExtension::constant("JMS\\Serializer\\GraphNavigatorInterface::DIRECTION_SERIALIZATION"))) {
                    // line 32
                    yield "Serialization";
                } else {
                    // line 34
                    yield "Deserialization";
                }
                // line 36
                yield "</h3>
        <table>
            <thead>
            <tr>
                <th>Date type</th>
                <th>Handler</th>";
                // line 42
                if (((array_key_exists("called", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["called"]) || array_key_exists("called", $context) ? $context["called"] : (function () { throw new RuntimeError('Variable "called" does not exist.', 42, $this->source); })()), false)) : (false))) {
                    // line 43
                    yield "<th>Calls</th>
                    <th>Total duration (ms)</th>";
                }
                // line 46
                yield "</tr>
            </thead>";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["callsByType"]);
                foreach ($context['_seq'] as $context["type"] => $context["handlers"]) {
                    // line 49
                    yield "<tr>
                    <td>";
                    // line 50
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                    yield "</td>
                    <td>";
                    // line 52
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["handlers"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["handler"]) {
                        // line 53
                        yield $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, $context["handler"]);
                        yield "<br>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['handler'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 55
                    yield "</td>
                </tr>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['handlers'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                yield "</table>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['direction'], $context['callsByType'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 63
    public function macro_render_table_triggered_handlers($__handlers__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "handlers" => $__handlers__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table_triggered_handlers"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table_triggered_handlers"));

            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["handlers"]) || array_key_exists("handlers", $context) ? $context["handlers"] : (function () { throw new RuntimeError('Variable "handlers" does not exist.', 64, $this->source); })()));
            foreach ($context['_seq'] as $context["direction"] => $context["callsByType"]) {
                // line 65
                yield "<h3>";
                // line 66
                if (($context["direction"] == Twig\Extension\CoreExtension::constant("JMS\\Serializer\\GraphNavigatorInterface::DIRECTION_SERIALIZATION"))) {
                    // line 67
                    yield "Serialization";
                } else {
                    // line 69
                    yield "Deserialization";
                }
                // line 71
                yield "</h3>
        <table>
            <thead>
            <tr>
                <th>Date type</th>
                <th>Handler</th>
                <th>Calls</th>
                <th>Total duration (ms)</th>
            </tr>
            </thead>";
                // line 81
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["callsByType"]);
                foreach ($context['_seq'] as $context["type"] => $context["calls"]) {
                    // line 82
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable($context["calls"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
                        // line 83
                        yield "<tr>
                        <td>";
                        // line 84
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                        yield "</td>
                        <td>";
                        // line 85
                        yield $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["call"], "handler", [], "any", false, false, false, 85));
                        yield "</td>

                        <td class=\"text-right\">";
                        // line 87
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["call"], "calls", [], "any", false, false, false, 87), "html", null, true);
                        yield "</td>
                        <td class=\"text-right\">";
                        // line 88
                        ((CoreExtension::getAttribute($this->env, $this->source, $context["call"], "duration", [], "any", false, false, false, 88)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["call"], "duration", [], "any", false, false, false, 88) * 1000), 4), "html", null, true)) : (yield ""));
                        yield "</td>
                    </tr>";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['calls'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                yield "</table>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['direction'], $context['callsByType'], $context['_parent'], $context['loop']);
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
        return "@JMSSerializer/Collector/handlers.html.twig";
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
        return array (  265 => 93,  253 => 88,  249 => 87,  244 => 85,  240 => 84,  237 => 83,  233 => 82,  229 => 81,  218 => 71,  215 => 69,  212 => 67,  210 => 66,  208 => 65,  204 => 64,  186 => 63,  170 => 59,  163 => 55,  156 => 53,  152 => 52,  148 => 50,  145 => 49,  141 => 48,  138 => 46,  134 => 43,  132 => 42,  125 => 36,  122 => 34,  119 => 32,  117 => 31,  115 => 30,  111 => 29,  93 => 28,  78 => 23,  73 => 21,  67 => 17,  64 => 15,  59 => 11,  57 => 10,  52 => 7,  46 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{%- import _self as helper -%}

<h2>Type Handlers</h2>

<div class=\"sf-tabs\">
    <div class=\"tab\">
        <h3 class=\"tab-title\">Triggered Handlers <span class=\"badge\">{{ collector.getNumHandlers('called') }}</span></h3>

        <div class=\"tab-content\">
            {%- if 0 == collector.getNumHandlers('called') -%}
                <div class=\"empty\">
                    <p>No triggered handlers.</p>
                </div>
            {%- else -%}
                {{- helper.render_table_triggered_handlers(collector.triggeredHandlers) -}}
            {%- endif -%}
        </div>
    </div>

    <div class=\"tab\">
        <div class=\"tab-title\">Not Triggered Handlers <span class=\"badge\">{{ collector.getNumHandlers('not_called') }}</span></div>
        <div class=\"tab-content\">
            {{ helper.render_not_table_triggered_handlers(collector.notTriggeredHandlers) }}
        </div>
    </div>
</div>

{%- macro render_not_table_triggered_handlers(handlers) -%}
    {%- for direction, callsByType in handlers -%}
        <h3>
            {%- if direction == constant('JMS\\\\Serializer\\\\GraphNavigatorInterface::DIRECTION_SERIALIZATION') -%}
                Serialization
            {%- else -%}
                Deserialization
            {%- endif -%}
        </h3>
        <table>
            <thead>
            <tr>
                <th>Date type</th>
                <th>Handler</th>
                {%- if called|default(false) -%}
                    <th>Calls</th>
                    <th>Total duration (ms)</th>
                {%- endif -%}
            </tr>
            </thead>
            {%- for type, handlers in callsByType -%}
                <tr>
                    <td>{{ type }}</td>
                    <td>
                        {%- for handler in handlers -%}
                            {{ dump(handler) }}<br>
                        {%- endfor -%}
                    </td>
                </tr>
            {%- endfor -%}

        </table>
    {%- endfor -%}
{%- endmacro -%}

{%- macro render_table_triggered_handlers(handlers) -%}
    {%- for direction, callsByType in handlers -%}
        <h3>
            {%- if direction == constant('JMS\\\\Serializer\\\\GraphNavigatorInterface::DIRECTION_SERIALIZATION') -%}
                Serialization
            {%- else -%}
                Deserialization
            {%- endif -%}
        </h3>
        <table>
            <thead>
            <tr>
                <th>Date type</th>
                <th>Handler</th>
                <th>Calls</th>
                <th>Total duration (ms)</th>
            </tr>
            </thead>
            {%- for type, calls in callsByType -%}
                {%- for call in calls -%}
                    <tr>
                        <td>{{ type }}</td>
                        <td>{{ dump(call.handler) }}</td>

                        <td class=\"text-right\">{{ call.calls }}</td>
                        <td class=\"text-right\">{{ call.duration ?  (call.duration * 1000)|number_format(4) : '' }}</td>
                    </tr>
                {%- endfor -%}
            {%- endfor -%}

        </table>
    {%- endfor -%}
{%- endmacro -%}
", "@JMSSerializer/Collector/handlers.html.twig", "/var/www/html/vox/vox-projeto/vendor/jms/serializer-bundle/Resources/views/Collector/handlers.html.twig");
    }
}
