<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_f3a4e4fefc781fea7b79e6a42c3ccf2a163350a707e86246afcf514c71a36b79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_691b78f9dad68c15eef2339137915b2b5c2662efa8e7f3cd5d0b3df99ec5f2d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_691b78f9dad68c15eef2339137915b2b5c2662efa8e7f3cd5d0b3df99ec5f2d7->enter($__internal_691b78f9dad68c15eef2339137915b2b5c2662efa8e7f3cd5d0b3df99ec5f2d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_a1539d5626e14be187ebc6ae25f084cc0af51563510c3d79fe9e0763aa640af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1539d5626e14be187ebc6ae25f084cc0af51563510c3d79fe9e0763aa640af0->enter($__internal_a1539d5626e14be187ebc6ae25f084cc0af51563510c3d79fe9e0763aa640af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_691b78f9dad68c15eef2339137915b2b5c2662efa8e7f3cd5d0b3df99ec5f2d7->leave($__internal_691b78f9dad68c15eef2339137915b2b5c2662efa8e7f3cd5d0b3df99ec5f2d7_prof);

        
        $__internal_a1539d5626e14be187ebc6ae25f084cc0af51563510c3d79fe9e0763aa640af0->leave($__internal_a1539d5626e14be187ebc6ae25f084cc0af51563510c3d79fe9e0763aa640af0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_27ba9f1ddc8b4e73dee841da7654972cdae65a2b32c7fd5b1cc054bebd16938b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27ba9f1ddc8b4e73dee841da7654972cdae65a2b32c7fd5b1cc054bebd16938b->enter($__internal_27ba9f1ddc8b4e73dee841da7654972cdae65a2b32c7fd5b1cc054bebd16938b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3592093ccba22b263a91b640bdf7636b102f3977703b6bf67ebb897feb273b02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3592093ccba22b263a91b640bdf7636b102f3977703b6bf67ebb897feb273b02->enter($__internal_3592093ccba22b263a91b640bdf7636b102f3977703b6bf67ebb897feb273b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3592093ccba22b263a91b640bdf7636b102f3977703b6bf67ebb897feb273b02->leave($__internal_3592093ccba22b263a91b640bdf7636b102f3977703b6bf67ebb897feb273b02_prof);

        
        $__internal_27ba9f1ddc8b4e73dee841da7654972cdae65a2b32c7fd5b1cc054bebd16938b->leave($__internal_27ba9f1ddc8b4e73dee841da7654972cdae65a2b32c7fd5b1cc054bebd16938b_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_fa61483c461c9056d8d245429afe42ffa8806c239a49e44d363a49d68f28a40c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa61483c461c9056d8d245429afe42ffa8806c239a49e44d363a49d68f28a40c->enter($__internal_fa61483c461c9056d8d245429afe42ffa8806c239a49e44d363a49d68f28a40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fecb0e513ae9ce34c1248ddfa50b07deaaa122fd3c9b8ffebf303726c3036305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fecb0e513ae9ce34c1248ddfa50b07deaaa122fd3c9b8ffebf303726c3036305->enter($__internal_fecb0e513ae9ce34c1248ddfa50b07deaaa122fd3c9b8ffebf303726c3036305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_fecb0e513ae9ce34c1248ddfa50b07deaaa122fd3c9b8ffebf303726c3036305->leave($__internal_fecb0e513ae9ce34c1248ddfa50b07deaaa122fd3c9b8ffebf303726c3036305_prof);

        
        $__internal_fa61483c461c9056d8d245429afe42ffa8806c239a49e44d363a49d68f28a40c->leave($__internal_fa61483c461c9056d8d245429afe42ffa8806c239a49e44d363a49d68f28a40c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_dab9aa51f13bae03409b1161bf5afe0601bbf61c4cede92c301a18b7bc09ec59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dab9aa51f13bae03409b1161bf5afe0601bbf61c4cede92c301a18b7bc09ec59->enter($__internal_dab9aa51f13bae03409b1161bf5afe0601bbf61c4cede92c301a18b7bc09ec59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_37981738a5036df48794750a47c8247834e2e2c6ba5c1df171f6488e2565425d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37981738a5036df48794750a47c8247834e2e2c6ba5c1df171f6488e2565425d->enter($__internal_37981738a5036df48794750a47c8247834e2e2c6ba5c1df171f6488e2565425d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_37981738a5036df48794750a47c8247834e2e2c6ba5c1df171f6488e2565425d->leave($__internal_37981738a5036df48794750a47c8247834e2e2c6ba5c1df171f6488e2565425d_prof);

        
        $__internal_dab9aa51f13bae03409b1161bf5afe0601bbf61c4cede92c301a18b7bc09ec59->leave($__internal_dab9aa51f13bae03409b1161bf5afe0601bbf61c4cede92c301a18b7bc09ec59_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/var/www/html/Premium_Immobilier/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
