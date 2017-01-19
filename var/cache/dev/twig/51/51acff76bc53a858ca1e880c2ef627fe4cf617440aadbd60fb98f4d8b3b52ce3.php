<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_37bcbea2e76fc12033f94b1d7ae575aaac7c48e57f5fe241aa3c0d881d67ec84 extends Twig_Template
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
        $__internal_b795e4e41fced02ef3da8c3717bdf6d2a141190a63da5e07cb1136b7e05ffdc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b795e4e41fced02ef3da8c3717bdf6d2a141190a63da5e07cb1136b7e05ffdc6->enter($__internal_b795e4e41fced02ef3da8c3717bdf6d2a141190a63da5e07cb1136b7e05ffdc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e187562e7794c8fd3605528fd1966649ff4b142c8777af841fe2c36744dad7b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e187562e7794c8fd3605528fd1966649ff4b142c8777af841fe2c36744dad7b8->enter($__internal_e187562e7794c8fd3605528fd1966649ff4b142c8777af841fe2c36744dad7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b795e4e41fced02ef3da8c3717bdf6d2a141190a63da5e07cb1136b7e05ffdc6->leave($__internal_b795e4e41fced02ef3da8c3717bdf6d2a141190a63da5e07cb1136b7e05ffdc6_prof);

        
        $__internal_e187562e7794c8fd3605528fd1966649ff4b142c8777af841fe2c36744dad7b8->leave($__internal_e187562e7794c8fd3605528fd1966649ff4b142c8777af841fe2c36744dad7b8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_161a5cddd510af6c2e163164bfd1709e0b0b984a18cab8252315a8237fd125ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_161a5cddd510af6c2e163164bfd1709e0b0b984a18cab8252315a8237fd125ed->enter($__internal_161a5cddd510af6c2e163164bfd1709e0b0b984a18cab8252315a8237fd125ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3b049fae0fc7307242446c779581df3b0763389b5f0baa3909872d4fc856bce9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b049fae0fc7307242446c779581df3b0763389b5f0baa3909872d4fc856bce9->enter($__internal_3b049fae0fc7307242446c779581df3b0763389b5f0baa3909872d4fc856bce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
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
        
        $__internal_3b049fae0fc7307242446c779581df3b0763389b5f0baa3909872d4fc856bce9->leave($__internal_3b049fae0fc7307242446c779581df3b0763389b5f0baa3909872d4fc856bce9_prof);

        
        $__internal_161a5cddd510af6c2e163164bfd1709e0b0b984a18cab8252315a8237fd125ed->leave($__internal_161a5cddd510af6c2e163164bfd1709e0b0b984a18cab8252315a8237fd125ed_prof);

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
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
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
", "@WebProfiler/Collector/ajax.html.twig", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
