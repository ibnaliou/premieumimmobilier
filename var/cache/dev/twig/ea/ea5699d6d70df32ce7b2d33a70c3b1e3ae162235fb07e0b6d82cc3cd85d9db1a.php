<?php

/* ::base.html.twig */
class __TwigTemplate_ce3c23e395dbedf98b3aba1c3f0ba6197b95b820c3d6153f7951333addcf13d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44d779cb7f294e3931acfb5553c982f00dd22fdfa51a537bc5944a769899cf63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44d779cb7f294e3931acfb5553c982f00dd22fdfa51a537bc5944a769899cf63->enter($__internal_44d779cb7f294e3931acfb5553c982f00dd22fdfa51a537bc5944a769899cf63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b815b1840ec22e73dcab8a18f82f4b7126d24182f80fd0bb24eb3e0133e5fe45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b815b1840ec22e73dcab8a18f82f4b7126d24182f80fd0bb24eb3e0133e5fe45->enter($__internal_b815b1840ec22e73dcab8a18f82f4b7126d24182f80fd0bb24eb3e0133e5fe45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
\t
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 15
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </body>
</html>
";
        
        $__internal_44d779cb7f294e3931acfb5553c982f00dd22fdfa51a537bc5944a769899cf63->leave($__internal_44d779cb7f294e3931acfb5553c982f00dd22fdfa51a537bc5944a769899cf63_prof);

        
        $__internal_b815b1840ec22e73dcab8a18f82f4b7126d24182f80fd0bb24eb3e0133e5fe45->leave($__internal_b815b1840ec22e73dcab8a18f82f4b7126d24182f80fd0bb24eb3e0133e5fe45_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e1b887b7b9331e5a52a0c3180ffec7b02030be4c61fe1cc09a6b5907954d361 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e1b887b7b9331e5a52a0c3180ffec7b02030be4c61fe1cc09a6b5907954d361->enter($__internal_2e1b887b7b9331e5a52a0c3180ffec7b02030be4c61fe1cc09a6b5907954d361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3ba7bacde25c0134096d63482c578baf635e745bd003c21935088a11d5f71b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba7bacde25c0134096d63482c578baf635e745bd003c21935088a11d5f71b07->enter($__internal_3ba7bacde25c0134096d63482c578baf635e745bd003c21935088a11d5f71b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3ba7bacde25c0134096d63482c578baf635e745bd003c21935088a11d5f71b07->leave($__internal_3ba7bacde25c0134096d63482c578baf635e745bd003c21935088a11d5f71b07_prof);

        
        $__internal_2e1b887b7b9331e5a52a0c3180ffec7b02030be4c61fe1cc09a6b5907954d361->leave($__internal_2e1b887b7b9331e5a52a0c3180ffec7b02030be4c61fe1cc09a6b5907954d361_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1a456d661cd9bfba71b7699e757aaa8739fb25c8403d7ad30eaa10a24fa7cbd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a456d661cd9bfba71b7699e757aaa8739fb25c8403d7ad30eaa10a24fa7cbd0->enter($__internal_1a456d661cd9bfba71b7699e757aaa8739fb25c8403d7ad30eaa10a24fa7cbd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ef946757ef9c35170a4c93bb1bc9fdffe69486dd0b1686cb95852f6bb310868b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef946757ef9c35170a4c93bb1bc9fdffe69486dd0b1686cb95852f6bb310868b->enter($__internal_ef946757ef9c35170a4c93bb1bc9fdffe69486dd0b1686cb95852f6bb310868b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t\t<!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">\t\t";
        
        $__internal_ef946757ef9c35170a4c93bb1bc9fdffe69486dd0b1686cb95852f6bb310868b->leave($__internal_ef946757ef9c35170a4c93bb1bc9fdffe69486dd0b1686cb95852f6bb310868b_prof);

        
        $__internal_1a456d661cd9bfba71b7699e757aaa8739fb25c8403d7ad30eaa10a24fa7cbd0->leave($__internal_1a456d661cd9bfba71b7699e757aaa8739fb25c8403d7ad30eaa10a24fa7cbd0_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7a25619fd8dda81c4cfe80a93a6aa7cf7b355bb5334a333780ba2b647409221 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7a25619fd8dda81c4cfe80a93a6aa7cf7b355bb5334a333780ba2b647409221->enter($__internal_d7a25619fd8dda81c4cfe80a93a6aa7cf7b355bb5334a333780ba2b647409221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e740b663c29e57933a1ef6e56c74d69c8d6c672efcbdcd266a5ea1bcd34f568b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e740b663c29e57933a1ef6e56c74d69c8d6c672efcbdcd266a5ea1bcd34f568b->enter($__internal_e740b663c29e57933a1ef6e56c74d69c8d6c672efcbdcd266a5ea1bcd34f568b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "        ";
        
        $__internal_e740b663c29e57933a1ef6e56c74d69c8d6c672efcbdcd266a5ea1bcd34f568b->leave($__internal_e740b663c29e57933a1ef6e56c74d69c8d6c672efcbdcd266a5ea1bcd34f568b_prof);

        
        $__internal_d7a25619fd8dda81c4cfe80a93a6aa7cf7b355bb5334a333780ba2b647409221->leave($__internal_d7a25619fd8dda81c4cfe80a93a6aa7cf7b355bb5334a333780ba2b647409221_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7b2b5b3cc0d220b9565969e7e2e2dc67eff7e60bceac6e8b75a3477984e03839 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b2b5b3cc0d220b9565969e7e2e2dc67eff7e60bceac6e8b75a3477984e03839->enter($__internal_7b2b5b3cc0d220b9565969e7e2e2dc67eff7e60bceac6e8b75a3477984e03839_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a18dc75f5ac25f789f136d0dbba541f0355d1b9749658a1bfcf91d52a8f3c8c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a18dc75f5ac25f789f136d0dbba541f0355d1b9749658a1bfcf91d52a8f3c8c3->enter($__internal_a18dc75f5ac25f789f136d0dbba541f0355d1b9749658a1bfcf91d52a8f3c8c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "\t\t <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
\t\t 
\t    ";
        
        $__internal_a18dc75f5ac25f789f136d0dbba541f0355d1b9749658a1bfcf91d52a8f3c8c3->leave($__internal_a18dc75f5ac25f789f136d0dbba541f0355d1b9749658a1bfcf91d52a8f3c8c3_prof);

        
        $__internal_7b2b5b3cc0d220b9565969e7e2e2dc67eff7e60bceac6e8b75a3477984e03839->leave($__internal_7b2b5b3cc0d220b9565969e7e2e2dc67eff7e60bceac6e8b75a3477984e03839_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 16,  123 => 15,  113 => 14,  104 => 13,  93 => 7,  84 => 6,  66 => 5,  54 => 19,  51 => 15,  49 => 13,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
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
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
\t\t<!-- Latest compiled and minified CSS -->
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css\" integrity=\"sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ\" crossorigin=\"anonymous\">\t\t{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
\t
        {% block body %}
        {% endblock %}
        {% block javascripts %}
\t\t <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
\t\t 
\t    {% endblock %}
    </body>
</html>
", "::base.html.twig", "/var/www/html/Premium_Immobilier/app/Resources/views/base.html.twig");
    }
}
