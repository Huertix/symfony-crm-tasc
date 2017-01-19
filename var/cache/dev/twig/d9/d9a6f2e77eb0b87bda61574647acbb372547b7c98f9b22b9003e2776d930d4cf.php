<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_bd4e7bf7dbd27d09470a964619a748193cbaf0edbd5c312b96bb9f7ca5bd264b extends Twig_Template
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
        $__internal_e09886fa5f601c4208d76d858dfda1ce4dc7733799b1c3bf1cd1eac948cc9a70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e09886fa5f601c4208d76d858dfda1ce4dc7733799b1c3bf1cd1eac948cc9a70->enter($__internal_e09886fa5f601c4208d76d858dfda1ce4dc7733799b1c3bf1cd1eac948cc9a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_d1b0486b6a098eacb0d559be5086d6f845074c76e569d0b749d7372906549515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b0486b6a098eacb0d559be5086d6f845074c76e569d0b749d7372906549515->enter($__internal_d1b0486b6a098eacb0d559be5086d6f845074c76e569d0b749d7372906549515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_e09886fa5f601c4208d76d858dfda1ce4dc7733799b1c3bf1cd1eac948cc9a70->leave($__internal_e09886fa5f601c4208d76d858dfda1ce4dc7733799b1c3bf1cd1eac948cc9a70_prof);

        
        $__internal_d1b0486b6a098eacb0d559be5086d6f845074c76e569d0b749d7372906549515->leave($__internal_d1b0486b6a098eacb0d559be5086d6f845074c76e569d0b749d7372906549515_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
