<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_9578d25f12c664c66cb542891e90d8bc022be66feb5461e563adb742df62d818 extends Twig_Template
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
        $__internal_ed1d30467c28eb2d9e65f720ecbafae4e400537b8ca31b7bec99d5c3ee49fc3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed1d30467c28eb2d9e65f720ecbafae4e400537b8ca31b7bec99d5c3ee49fc3c->enter($__internal_ed1d30467c28eb2d9e65f720ecbafae4e400537b8ca31b7bec99d5c3ee49fc3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_bb6aaa1519ee7e53c86b6981d158496a794d975b20d248f79d573264313127cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb6aaa1519ee7e53c86b6981d158496a794d975b20d248f79d573264313127cc->enter($__internal_bb6aaa1519ee7e53c86b6981d158496a794d975b20d248f79d573264313127cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ed1d30467c28eb2d9e65f720ecbafae4e400537b8ca31b7bec99d5c3ee49fc3c->leave($__internal_ed1d30467c28eb2d9e65f720ecbafae4e400537b8ca31b7bec99d5c3ee49fc3c_prof);

        
        $__internal_bb6aaa1519ee7e53c86b6981d158496a794d975b20d248f79d573264313127cc->leave($__internal_bb6aaa1519ee7e53c86b6981d158496a794d975b20d248f79d573264313127cc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
