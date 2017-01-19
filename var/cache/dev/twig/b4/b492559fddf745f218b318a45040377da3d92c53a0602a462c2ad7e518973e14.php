<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_007689008d65ea0a55aa30420422663565fb723e05bedad15ac5b51fe62221d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6930f0e9bc326b83c3163eb43fa75c933491f93f56db5fe1c7ef0bde9d9efcc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6930f0e9bc326b83c3163eb43fa75c933491f93f56db5fe1c7ef0bde9d9efcc9->enter($__internal_6930f0e9bc326b83c3163eb43fa75c933491f93f56db5fe1c7ef0bde9d9efcc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_27cbc90fe6ce4cf2c2df87c047b773a582d516624eb7d18f5d2e3787cc913ef7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27cbc90fe6ce4cf2c2df87c047b773a582d516624eb7d18f5d2e3787cc913ef7->enter($__internal_27cbc90fe6ce4cf2c2df87c047b773a582d516624eb7d18f5d2e3787cc913ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_6930f0e9bc326b83c3163eb43fa75c933491f93f56db5fe1c7ef0bde9d9efcc9->leave($__internal_6930f0e9bc326b83c3163eb43fa75c933491f93f56db5fe1c7ef0bde9d9efcc9_prof);

        
        $__internal_27cbc90fe6ce4cf2c2df87c047b773a582d516624eb7d18f5d2e3787cc913ef7->leave($__internal_27cbc90fe6ce4cf2c2df87c047b773a582d516624eb7d18f5d2e3787cc913ef7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.atom.twig", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
