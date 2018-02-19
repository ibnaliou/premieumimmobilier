<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_10c655f3109ad76fadc16109c8d51996220afd5b182e8327ed819e323ad88e49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_158271d4a25fe8116799ea48ed3167da2fa529f7b15b869f7e1d0f7a5e949808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_158271d4a25fe8116799ea48ed3167da2fa529f7b15b869f7e1d0f7a5e949808->enter($__internal_158271d4a25fe8116799ea48ed3167da2fa529f7b15b869f7e1d0f7a5e949808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e4476dd9523cc7e8329bcdfcab96aee73e1ca2c38efda15e4e9a021a3fcbe4b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4476dd9523cc7e8329bcdfcab96aee73e1ca2c38efda15e4e9a021a3fcbe4b9->enter($__internal_e4476dd9523cc7e8329bcdfcab96aee73e1ca2c38efda15e4e9a021a3fcbe4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_158271d4a25fe8116799ea48ed3167da2fa529f7b15b869f7e1d0f7a5e949808->leave($__internal_158271d4a25fe8116799ea48ed3167da2fa529f7b15b869f7e1d0f7a5e949808_prof);

        
        $__internal_e4476dd9523cc7e8329bcdfcab96aee73e1ca2c38efda15e4e9a021a3fcbe4b9->leave($__internal_e4476dd9523cc7e8329bcdfcab96aee73e1ca2c38efda15e4e9a021a3fcbe4b9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a89dccca34acac869629352073bbe2ed568995cead9c165327410fe868a96408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a89dccca34acac869629352073bbe2ed568995cead9c165327410fe868a96408->enter($__internal_a89dccca34acac869629352073bbe2ed568995cead9c165327410fe868a96408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_72fad4b58ad7389db09847c93d2deb68412eea7523a124e63ec99abd55c2c5ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72fad4b58ad7389db09847c93d2deb68412eea7523a124e63ec99abd55c2c5ac->enter($__internal_72fad4b58ad7389db09847c93d2deb68412eea7523a124e63ec99abd55c2c5ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_72fad4b58ad7389db09847c93d2deb68412eea7523a124e63ec99abd55c2c5ac->leave($__internal_72fad4b58ad7389db09847c93d2deb68412eea7523a124e63ec99abd55c2c5ac_prof);

        
        $__internal_a89dccca34acac869629352073bbe2ed568995cead9c165327410fe868a96408->leave($__internal_a89dccca34acac869629352073bbe2ed568995cead9c165327410fe868a96408_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/html/Premium_Immobilier/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
