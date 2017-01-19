<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_923f64ab6f3bb84fe7fed9ff83e64716c5619b7ff24067bf4e264568ba876b52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af5ad46321939572f4256e14b12045495d06737ed879eae90c54f8c52a1f8aa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af5ad46321939572f4256e14b12045495d06737ed879eae90c54f8c52a1f8aa2->enter($__internal_af5ad46321939572f4256e14b12045495d06737ed879eae90c54f8c52a1f8aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_bac2341b03fbeb568b94930cf6ad1b7d9a3115c1911e24499810ffa546f9d99d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bac2341b03fbeb568b94930cf6ad1b7d9a3115c1911e24499810ffa546f9d99d->enter($__internal_bac2341b03fbeb568b94930cf6ad1b7d9a3115c1911e24499810ffa546f9d99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af5ad46321939572f4256e14b12045495d06737ed879eae90c54f8c52a1f8aa2->leave($__internal_af5ad46321939572f4256e14b12045495d06737ed879eae90c54f8c52a1f8aa2_prof);

        
        $__internal_bac2341b03fbeb568b94930cf6ad1b7d9a3115c1911e24499810ffa546f9d99d->leave($__internal_bac2341b03fbeb568b94930cf6ad1b7d9a3115c1911e24499810ffa546f9d99d_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_9d71c7a8839a0f3ac5a608a96e4f663b720a68c854407b9cd76ee0931254fed5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d71c7a8839a0f3ac5a608a96e4f663b720a68c854407b9cd76ee0931254fed5->enter($__internal_9d71c7a8839a0f3ac5a608a96e4f663b720a68c854407b9cd76ee0931254fed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_91b073d063d83b7f8e11eb174d3537898a768857f7044e7a60214c2ff39d398f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b073d063d83b7f8e11eb174d3537898a768857f7044e7a60214c2ff39d398f->enter($__internal_91b073d063d83b7f8e11eb174d3537898a768857f7044e7a60214c2ff39d398f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_91b073d063d83b7f8e11eb174d3537898a768857f7044e7a60214c2ff39d398f->leave($__internal_91b073d063d83b7f8e11eb174d3537898a768857f7044e7a60214c2ff39d398f_prof);

        
        $__internal_9d71c7a8839a0f3ac5a608a96e4f663b720a68c854407b9cd76ee0931254fed5->leave($__internal_9d71c7a8839a0f3ac5a608a96e4f663b720a68c854407b9cd76ee0931254fed5_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_90fb58fbfbf7a826c91d77b5c48b48d10efb39caf61711fb5daf4bd26db83211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90fb58fbfbf7a826c91d77b5c48b48d10efb39caf61711fb5daf4bd26db83211->enter($__internal_90fb58fbfbf7a826c91d77b5c48b48d10efb39caf61711fb5daf4bd26db83211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a8c82214e0be2ba9e9ae86f256d7f235272a7c6640055cd326113d10c595137f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c82214e0be2ba9e9ae86f256d7f235272a7c6640055cd326113d10c595137f->enter($__internal_a8c82214e0be2ba9e9ae86f256d7f235272a7c6640055cd326113d10c595137f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a8c82214e0be2ba9e9ae86f256d7f235272a7c6640055cd326113d10c595137f->leave($__internal_a8c82214e0be2ba9e9ae86f256d7f235272a7c6640055cd326113d10c595137f_prof);

        
        $__internal_90fb58fbfbf7a826c91d77b5c48b48d10efb39caf61711fb5daf4bd26db83211->leave($__internal_90fb58fbfbf7a826c91d77b5c48b48d10efb39caf61711fb5daf4bd26db83211_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
