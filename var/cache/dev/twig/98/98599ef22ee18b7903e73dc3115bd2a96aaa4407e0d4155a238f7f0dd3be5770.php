<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_f25e1c363a52055f5e58f09eab00f611b6013f4fd3a197e4ecfe44fe55486c8c extends Twig_Template
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
        $__internal_abefd08f32140c806ccae74e8e396220c575495ae79902a67776dfaf94e4616a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abefd08f32140c806ccae74e8e396220c575495ae79902a67776dfaf94e4616a->enter($__internal_abefd08f32140c806ccae74e8e396220c575495ae79902a67776dfaf94e4616a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_a9bbc3c9be718c2c187cd3ca0afcd2d7d875918da060ea808d7eae17546ab599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9bbc3c9be718c2c187cd3ca0afcd2d7d875918da060ea808d7eae17546ab599->enter($__internal_a9bbc3c9be718c2c187cd3ca0afcd2d7d875918da060ea808d7eae17546ab599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abefd08f32140c806ccae74e8e396220c575495ae79902a67776dfaf94e4616a->leave($__internal_abefd08f32140c806ccae74e8e396220c575495ae79902a67776dfaf94e4616a_prof);

        
        $__internal_a9bbc3c9be718c2c187cd3ca0afcd2d7d875918da060ea808d7eae17546ab599->leave($__internal_a9bbc3c9be718c2c187cd3ca0afcd2d7d875918da060ea808d7eae17546ab599_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_38a732fe084f02fbb0a5c9bb5fefdb6c6191a8e97228068ca4feaeba41882264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38a732fe084f02fbb0a5c9bb5fefdb6c6191a8e97228068ca4feaeba41882264->enter($__internal_38a732fe084f02fbb0a5c9bb5fefdb6c6191a8e97228068ca4feaeba41882264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d7e3e6baa8b7aa718579ea6fe844f6800e67f5c20fa2f33b7116ac117077d55c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e3e6baa8b7aa718579ea6fe844f6800e67f5c20fa2f33b7116ac117077d55c->enter($__internal_d7e3e6baa8b7aa718579ea6fe844f6800e67f5c20fa2f33b7116ac117077d55c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_d7e3e6baa8b7aa718579ea6fe844f6800e67f5c20fa2f33b7116ac117077d55c->leave($__internal_d7e3e6baa8b7aa718579ea6fe844f6800e67f5c20fa2f33b7116ac117077d55c_prof);

        
        $__internal_38a732fe084f02fbb0a5c9bb5fefdb6c6191a8e97228068ca4feaeba41882264->leave($__internal_38a732fe084f02fbb0a5c9bb5fefdb6c6191a8e97228068ca4feaeba41882264_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d2f2ab4ae198e7ec434f88f9512443136f2a4e5f66bdbbf750a58c0b1c29a29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d2f2ab4ae198e7ec434f88f9512443136f2a4e5f66bdbbf750a58c0b1c29a29->enter($__internal_6d2f2ab4ae198e7ec434f88f9512443136f2a4e5f66bdbbf750a58c0b1c29a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_393d1d8f360de1a5018a359fe8692bebedd051563e04c135704141ebf88e7dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_393d1d8f360de1a5018a359fe8692bebedd051563e04c135704141ebf88e7dff->enter($__internal_393d1d8f360de1a5018a359fe8692bebedd051563e04c135704141ebf88e7dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_393d1d8f360de1a5018a359fe8692bebedd051563e04c135704141ebf88e7dff->leave($__internal_393d1d8f360de1a5018a359fe8692bebedd051563e04c135704141ebf88e7dff_prof);

        
        $__internal_6d2f2ab4ae198e7ec434f88f9512443136f2a4e5f66bdbbf750a58c0b1c29a29->leave($__internal_6d2f2ab4ae198e7ec434f88f9512443136f2a4e5f66bdbbf750a58c0b1c29a29_prof);

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
", "@WebProfiler/Profiler/open.html.twig", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
