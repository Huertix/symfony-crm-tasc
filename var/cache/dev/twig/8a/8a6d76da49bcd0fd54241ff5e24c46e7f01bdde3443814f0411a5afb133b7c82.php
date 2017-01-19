<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_541a2b1aba494ce79ba2b5de812c7509976c838bb938a6637fd0aa5a3319e110 extends Twig_Template
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
        $__internal_c020f52caa95a0eb6e280150fb7b7adf39b50e9d371f93fba0975bea63a2d2dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c020f52caa95a0eb6e280150fb7b7adf39b50e9d371f93fba0975bea63a2d2dd->enter($__internal_c020f52caa95a0eb6e280150fb7b7adf39b50e9d371f93fba0975bea63a2d2dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_d5dac37b8e719426591435c7ca9b93e5c248d680c7a9010330ef238332e32f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5dac37b8e719426591435c7ca9b93e5c248d680c7a9010330ef238332e32f63->enter($__internal_d5dac37b8e719426591435c7ca9b93e5c248d680c7a9010330ef238332e32f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c020f52caa95a0eb6e280150fb7b7adf39b50e9d371f93fba0975bea63a2d2dd->leave($__internal_c020f52caa95a0eb6e280150fb7b7adf39b50e9d371f93fba0975bea63a2d2dd_prof);

        
        $__internal_d5dac37b8e719426591435c7ca9b93e5c248d680c7a9010330ef238332e32f63->leave($__internal_d5dac37b8e719426591435c7ca9b93e5c248d680c7a9010330ef238332e32f63_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
