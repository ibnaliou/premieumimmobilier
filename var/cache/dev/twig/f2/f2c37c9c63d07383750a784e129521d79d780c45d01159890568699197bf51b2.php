<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_650fedcf4ce545413cc7315b3ff89393155d9bb002ac7ac70df21c9fb3d99c5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74a6a12500fb5587e235a0a77e63a6bb5cea0e1a1f3efdfabab597c1f59dddec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74a6a12500fb5587e235a0a77e63a6bb5cea0e1a1f3efdfabab597c1f59dddec->enter($__internal_74a6a12500fb5587e235a0a77e63a6bb5cea0e1a1f3efdfabab597c1f59dddec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d820674977e821dff34f07f3b6cfa822fc0b54776e93960fe81fafdd9bcaccfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d820674977e821dff34f07f3b6cfa822fc0b54776e93960fe81fafdd9bcaccfe->enter($__internal_d820674977e821dff34f07f3b6cfa822fc0b54776e93960fe81fafdd9bcaccfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_74a6a12500fb5587e235a0a77e63a6bb5cea0e1a1f3efdfabab597c1f59dddec->leave($__internal_74a6a12500fb5587e235a0a77e63a6bb5cea0e1a1f3efdfabab597c1f59dddec_prof);

        
        $__internal_d820674977e821dff34f07f3b6cfa822fc0b54776e93960fe81fafdd9bcaccfe->leave($__internal_d820674977e821dff34f07f3b6cfa822fc0b54776e93960fe81fafdd9bcaccfe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_523d291a7ee33f339cce8deb878ebeedddd8351c9d02557627d4dfb86fb0ebaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_523d291a7ee33f339cce8deb878ebeedddd8351c9d02557627d4dfb86fb0ebaf->enter($__internal_523d291a7ee33f339cce8deb878ebeedddd8351c9d02557627d4dfb86fb0ebaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_96766d11ffef8fd63788e58787406cb97cffa3097ed5134f93dbf661b918b872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96766d11ffef8fd63788e58787406cb97cffa3097ed5134f93dbf661b918b872->enter($__internal_96766d11ffef8fd63788e58787406cb97cffa3097ed5134f93dbf661b918b872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_96766d11ffef8fd63788e58787406cb97cffa3097ed5134f93dbf661b918b872->leave($__internal_96766d11ffef8fd63788e58787406cb97cffa3097ed5134f93dbf661b918b872_prof);

        
        $__internal_523d291a7ee33f339cce8deb878ebeedddd8351c9d02557627d4dfb86fb0ebaf->leave($__internal_523d291a7ee33f339cce8deb878ebeedddd8351c9d02557627d4dfb86fb0ebaf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1c9e0ba650a8d3b717fa6a1e903a3553cf82076046de205066fec5a1c94f7b03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c9e0ba650a8d3b717fa6a1e903a3553cf82076046de205066fec5a1c94f7b03->enter($__internal_1c9e0ba650a8d3b717fa6a1e903a3553cf82076046de205066fec5a1c94f7b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d854772e227fe95fdb377c72e2b0daf41f0d1f52122515afe8c664980bd06aa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d854772e227fe95fdb377c72e2b0daf41f0d1f52122515afe8c664980bd06aa5->enter($__internal_d854772e227fe95fdb377c72e2b0daf41f0d1f52122515afe8c664980bd06aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d854772e227fe95fdb377c72e2b0daf41f0d1f52122515afe8c664980bd06aa5->leave($__internal_d854772e227fe95fdb377c72e2b0daf41f0d1f52122515afe8c664980bd06aa5_prof);

        
        $__internal_1c9e0ba650a8d3b717fa6a1e903a3553cf82076046de205066fec5a1c94f7b03->leave($__internal_1c9e0ba650a8d3b717fa6a1e903a3553cf82076046de205066fec5a1c94f7b03_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f335be0b7205821989ac78456ceba4a70d69fd3ffceeb79f455899f71a8703ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f335be0b7205821989ac78456ceba4a70d69fd3ffceeb79f455899f71a8703ac->enter($__internal_f335be0b7205821989ac78456ceba4a70d69fd3ffceeb79f455899f71a8703ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5a80e08fd96810e9e991b5b14382eb06ddde693baef9e258552ea0d3d193a3b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a80e08fd96810e9e991b5b14382eb06ddde693baef9e258552ea0d3d193a3b4->enter($__internal_5a80e08fd96810e9e991b5b14382eb06ddde693baef9e258552ea0d3d193a3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5a80e08fd96810e9e991b5b14382eb06ddde693baef9e258552ea0d3d193a3b4->leave($__internal_5a80e08fd96810e9e991b5b14382eb06ddde693baef9e258552ea0d3d193a3b4_prof);

        
        $__internal_f335be0b7205821989ac78456ceba4a70d69fd3ffceeb79f455899f71a8703ac->leave($__internal_f335be0b7205821989ac78456ceba4a70d69fd3ffceeb79f455899f71a8703ac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/Premium_Immobilier/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
