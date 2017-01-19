<?php

/* main/homepage.html.twig */
class __TwigTemplate_11df00f454d4fa9a3059941b2cdb35e7f263cebb1f660126f11faf84f3aa0643 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "main/homepage.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bbcd84932325e152e94e377056ecf36ed6019bd2f4fe1e88c115e691fa0088b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbcd84932325e152e94e377056ecf36ed6019bd2f4fe1e88c115e691fa0088b7->enter($__internal_bbcd84932325e152e94e377056ecf36ed6019bd2f4fe1e88c115e691fa0088b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $__internal_09a7d6ec9cb64275deb84ec34173e7b3233cfc838eaead836867c032bb57036c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a7d6ec9cb64275deb84ec34173e7b3233cfc838eaead836867c032bb57036c->enter($__internal_09a7d6ec9cb64275deb84ec34173e7b3233cfc838eaead836867c032bb57036c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbcd84932325e152e94e377056ecf36ed6019bd2f4fe1e88c115e691fa0088b7->leave($__internal_bbcd84932325e152e94e377056ecf36ed6019bd2f4fe1e88c115e691fa0088b7_prof);

        
        $__internal_09a7d6ec9cb64275deb84ec34173e7b3233cfc838eaead836867c032bb57036c->leave($__internal_09a7d6ec9cb64275deb84ec34173e7b3233cfc838eaead836867c032bb57036c_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_67dfce78d916d13773f83bb423d66ea836c0336557d9d6c68774028d2ef0f71c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67dfce78d916d13773f83bb423d66ea836c0336557d9d6c68774028d2ef0f71c->enter($__internal_67dfce78d916d13773f83bb423d66ea836c0336557d9d6c68774028d2ef0f71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_71a62e594f4a2d67a2931cbae27908bdf872dc0197893cf636eed385967d8d50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a62e594f4a2d67a2931cbae27908bdf872dc0197893cf636eed385967d8d50->enter($__internal_71a62e594f4a2d67a2931cbae27908bdf872dc0197893cf636eed385967d8d50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1 class=\"page-header text-center\">
        WEB CRM TASC
    </h1>
";
        
        $__internal_71a62e594f4a2d67a2931cbae27908bdf872dc0197893cf636eed385967d8d50->leave($__internal_71a62e594f4a2d67a2931cbae27908bdf872dc0197893cf636eed385967d8d50_prof);

        
        $__internal_67dfce78d916d13773f83bb423d66ea836c0336557d9d6c68774028d2ef0f71c->leave($__internal_67dfce78d916d13773f83bb423d66ea836c0336557d9d6c68774028d2ef0f71c_prof);

    }

    public function getTemplateName()
    {
        return "main/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block body %}
    <h1 class=\"page-header text-center\">
        WEB CRM TASC
    </h1>
{% endblock %}", "main/homepage.html.twig", "/vagrant/crm-web/app/Resources/views/main/homepage.html.twig");
    }
}
