<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_9b833e00a3137bcac4c81d5050ee484a524b14252e462747ca9475267289c053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_efa4917dca3b77c63dcf7d9a1b1a693f8740fbfcec91642864833ab910372b1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efa4917dca3b77c63dcf7d9a1b1a693f8740fbfcec91642864833ab910372b1e->enter($__internal_efa4917dca3b77c63dcf7d9a1b1a693f8740fbfcec91642864833ab910372b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_e10da3e6ca14d6553758abf36047bd735d8227628d648f05afcf6afff493c2e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e10da3e6ca14d6553758abf36047bd735d8227628d648f05afcf6afff493c2e1->enter($__internal_e10da3e6ca14d6553758abf36047bd735d8227628d648f05afcf6afff493c2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_efa4917dca3b77c63dcf7d9a1b1a693f8740fbfcec91642864833ab910372b1e->leave($__internal_efa4917dca3b77c63dcf7d9a1b1a693f8740fbfcec91642864833ab910372b1e_prof);

        
        $__internal_e10da3e6ca14d6553758abf36047bd735d8227628d648f05afcf6afff493c2e1->leave($__internal_e10da3e6ca14d6553758abf36047bd735d8227628d648f05afcf6afff493c2e1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_382125d31bc3157450c4537c85a1cef5b3886d492252d77223c1961e0db11843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382125d31bc3157450c4537c85a1cef5b3886d492252d77223c1961e0db11843->enter($__internal_382125d31bc3157450c4537c85a1cef5b3886d492252d77223c1961e0db11843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8e0660c809cbcc080cea48c37c9161ae38c84b5eaf8b8f4c52fcecd9a6cbc23b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e0660c809cbcc080cea48c37c9161ae38c84b5eaf8b8f4c52fcecd9a6cbc23b->enter($__internal_8e0660c809cbcc080cea48c37c9161ae38c84b5eaf8b8f4c52fcecd9a6cbc23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8e0660c809cbcc080cea48c37c9161ae38c84b5eaf8b8f4c52fcecd9a6cbc23b->leave($__internal_8e0660c809cbcc080cea48c37c9161ae38c84b5eaf8b8f4c52fcecd9a6cbc23b_prof);

        
        $__internal_382125d31bc3157450c4537c85a1cef5b3886d492252d77223c1961e0db11843->leave($__internal_382125d31bc3157450c4537c85a1cef5b3886d492252d77223c1961e0db11843_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7373f09867dae26e956622830f685eff1ae591760c3b78e4b887c4b219b1c14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7373f09867dae26e956622830f685eff1ae591760c3b78e4b887c4b219b1c14->enter($__internal_c7373f09867dae26e956622830f685eff1ae591760c3b78e4b887c4b219b1c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f91db47fc1ef3ad7b324c2b2c86c868ffa41a415e52c56396d59cd852d01d89c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f91db47fc1ef3ad7b324c2b2c86c868ffa41a415e52c56396d59cd852d01d89c->enter($__internal_f91db47fc1ef3ad7b324c2b2c86c868ffa41a415e52c56396d59cd852d01d89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_f91db47fc1ef3ad7b324c2b2c86c868ffa41a415e52c56396d59cd852d01d89c->leave($__internal_f91db47fc1ef3ad7b324c2b2c86c868ffa41a415e52c56396d59cd852d01d89c_prof);

        
        $__internal_c7373f09867dae26e956622830f685eff1ae591760c3b78e4b887c4b219b1c14->leave($__internal_c7373f09867dae26e956622830f685eff1ae591760c3b78e4b887c4b219b1c14_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
