<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_dcdceb948a0533cef4db330b2c9c582ee2557cf0600a0a6d5424e2954ae69a69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9359e30a71b407280c247d45cbef6ce903df4494e3500b2984970aa84821c403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9359e30a71b407280c247d45cbef6ce903df4494e3500b2984970aa84821c403->enter($__internal_9359e30a71b407280c247d45cbef6ce903df4494e3500b2984970aa84821c403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_e116e376e5e7c910a5ca9025cb90e591e7ac447660a7ce5eb6961b68b15a2723 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e116e376e5e7c910a5ca9025cb90e591e7ac447660a7ce5eb6961b68b15a2723->enter($__internal_e116e376e5e7c910a5ca9025cb90e591e7ac447660a7ce5eb6961b68b15a2723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9359e30a71b407280c247d45cbef6ce903df4494e3500b2984970aa84821c403->leave($__internal_9359e30a71b407280c247d45cbef6ce903df4494e3500b2984970aa84821c403_prof);

        
        $__internal_e116e376e5e7c910a5ca9025cb90e591e7ac447660a7ce5eb6961b68b15a2723->leave($__internal_e116e376e5e7c910a5ca9025cb90e591e7ac447660a7ce5eb6961b68b15a2723_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9541670096ff9cd6ba4d80a1725dd1a4b3b643139ca887a75789bdd7bb92793c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9541670096ff9cd6ba4d80a1725dd1a4b3b643139ca887a75789bdd7bb92793c->enter($__internal_9541670096ff9cd6ba4d80a1725dd1a4b3b643139ca887a75789bdd7bb92793c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_976449faf3c697bfbd2e40a5e27ed8fcb9ea8d9db694e85ec4a5a976f68c5aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_976449faf3c697bfbd2e40a5e27ed8fcb9ea8d9db694e85ec4a5a976f68c5aba->enter($__internal_976449faf3c697bfbd2e40a5e27ed8fcb9ea8d9db694e85ec4a5a976f68c5aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_976449faf3c697bfbd2e40a5e27ed8fcb9ea8d9db694e85ec4a5a976f68c5aba->leave($__internal_976449faf3c697bfbd2e40a5e27ed8fcb9ea8d9db694e85ec4a5a976f68c5aba_prof);

        
        $__internal_9541670096ff9cd6ba4d80a1725dd1a4b3b643139ca887a75789bdd7bb92793c->leave($__internal_9541670096ff9cd6ba4d80a1725dd1a4b3b643139ca887a75789bdd7bb92793c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_71ee0978e6b0b52c9e275fbad480d8c9c3dc0d3b534cd8c2fdcea7998afe7ecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71ee0978e6b0b52c9e275fbad480d8c9c3dc0d3b534cd8c2fdcea7998afe7ecc->enter($__internal_71ee0978e6b0b52c9e275fbad480d8c9c3dc0d3b534cd8c2fdcea7998afe7ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7e7fd3ebf610eeae7270dfc06a61da9201b4f0926cf7c9fd6ffb716ecd452d0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e7fd3ebf610eeae7270dfc06a61da9201b4f0926cf7c9fd6ffb716ecd452d0a->enter($__internal_7e7fd3ebf610eeae7270dfc06a61da9201b4f0926cf7c9fd6ffb716ecd452d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_7e7fd3ebf610eeae7270dfc06a61da9201b4f0926cf7c9fd6ffb716ecd452d0a->leave($__internal_7e7fd3ebf610eeae7270dfc06a61da9201b4f0926cf7c9fd6ffb716ecd452d0a_prof);

        
        $__internal_71ee0978e6b0b52c9e275fbad480d8c9c3dc0d3b534cd8c2fdcea7998afe7ecc->leave($__internal_71ee0978e6b0b52c9e275fbad480d8c9c3dc0d3b534cd8c2fdcea7998afe7ecc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/var/www/html/Premium_Immobilier/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
