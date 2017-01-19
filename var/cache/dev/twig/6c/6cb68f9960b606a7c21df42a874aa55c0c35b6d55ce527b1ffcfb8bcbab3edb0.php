<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6baf843bb98cedd7578fc82474abc59c2b43b1313c009fa82fbc8e19e6d5c298 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0e7997badc90a26491fb0725a2fb854cfac3688ae9ce5cfa58babfdc849afbad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e7997badc90a26491fb0725a2fb854cfac3688ae9ce5cfa58babfdc849afbad->enter($__internal_0e7997badc90a26491fb0725a2fb854cfac3688ae9ce5cfa58babfdc849afbad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_0057c0976251e8b55b8ca15dd3b7d146bda3ac6c3696160a407be65c651c916e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0057c0976251e8b55b8ca15dd3b7d146bda3ac6c3696160a407be65c651c916e->enter($__internal_0057c0976251e8b55b8ca15dd3b7d146bda3ac6c3696160a407be65c651c916e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e7997badc90a26491fb0725a2fb854cfac3688ae9ce5cfa58babfdc849afbad->leave($__internal_0e7997badc90a26491fb0725a2fb854cfac3688ae9ce5cfa58babfdc849afbad_prof);

        
        $__internal_0057c0976251e8b55b8ca15dd3b7d146bda3ac6c3696160a407be65c651c916e->leave($__internal_0057c0976251e8b55b8ca15dd3b7d146bda3ac6c3696160a407be65c651c916e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5a5dc03083e5a069514f5afb644e5b8a1627efa04786cf0505b1cb52a41655dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a5dc03083e5a069514f5afb644e5b8a1627efa04786cf0505b1cb52a41655dc->enter($__internal_5a5dc03083e5a069514f5afb644e5b8a1627efa04786cf0505b1cb52a41655dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_380290855a2c27adba4fe3af02193143cc1a568b111f4550c18f4b5008bd6e3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_380290855a2c27adba4fe3af02193143cc1a568b111f4550c18f4b5008bd6e3a->enter($__internal_380290855a2c27adba4fe3af02193143cc1a568b111f4550c18f4b5008bd6e3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_380290855a2c27adba4fe3af02193143cc1a568b111f4550c18f4b5008bd6e3a->leave($__internal_380290855a2c27adba4fe3af02193143cc1a568b111f4550c18f4b5008bd6e3a_prof);

        
        $__internal_5a5dc03083e5a069514f5afb644e5b8a1627efa04786cf0505b1cb52a41655dc->leave($__internal_5a5dc03083e5a069514f5afb644e5b8a1627efa04786cf0505b1cb52a41655dc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dd4029f185e5fa4672d703784618b8d12056dc1f5615e3e552281039807fe5b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd4029f185e5fa4672d703784618b8d12056dc1f5615e3e552281039807fe5b1->enter($__internal_dd4029f185e5fa4672d703784618b8d12056dc1f5615e3e552281039807fe5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_22c8abfde2e9d8e7715d3dd0e503b64e9fdeb0ca6116054d4dd20eae64f4b298 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22c8abfde2e9d8e7715d3dd0e503b64e9fdeb0ca6116054d4dd20eae64f4b298->enter($__internal_22c8abfde2e9d8e7715d3dd0e503b64e9fdeb0ca6116054d4dd20eae64f4b298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_22c8abfde2e9d8e7715d3dd0e503b64e9fdeb0ca6116054d4dd20eae64f4b298->leave($__internal_22c8abfde2e9d8e7715d3dd0e503b64e9fdeb0ca6116054d4dd20eae64f4b298_prof);

        
        $__internal_dd4029f185e5fa4672d703784618b8d12056dc1f5615e3e552281039807fe5b1->leave($__internal_dd4029f185e5fa4672d703784618b8d12056dc1f5615e3e552281039807fe5b1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d05b56ea31a9665593b731448c53f6919f05869d5c4fc1a4224e5e1944ed843d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d05b56ea31a9665593b731448c53f6919f05869d5c4fc1a4224e5e1944ed843d->enter($__internal_d05b56ea31a9665593b731448c53f6919f05869d5c4fc1a4224e5e1944ed843d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_96aa69c970853bbaee966a7bdb5a5935d5dc8ef97ab82a318254bc6393407f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96aa69c970853bbaee966a7bdb5a5935d5dc8ef97ab82a318254bc6393407f23->enter($__internal_96aa69c970853bbaee966a7bdb5a5935d5dc8ef97ab82a318254bc6393407f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_96aa69c970853bbaee966a7bdb5a5935d5dc8ef97ab82a318254bc6393407f23->leave($__internal_96aa69c970853bbaee966a7bdb5a5935d5dc8ef97ab82a318254bc6393407f23_prof);

        
        $__internal_d05b56ea31a9665593b731448c53f6919f05869d5c4fc1a4224e5e1944ed843d->leave($__internal_d05b56ea31a9665593b731448c53f6919f05869d5c4fc1a4224e5e1944ed843d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
