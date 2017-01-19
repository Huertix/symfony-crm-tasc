<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_faa6f29f3aa2f3666a7c568512cc66aec5cd0febb8fc9169c318c84f876bc4f4 extends Twig_Template
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
        $__internal_4f8761df51564fda4a4df4e8d40b41c517dc1cf2df3e2e182e9236b712719b7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f8761df51564fda4a4df4e8d40b41c517dc1cf2df3e2e182e9236b712719b7b->enter($__internal_4f8761df51564fda4a4df4e8d40b41c517dc1cf2df3e2e182e9236b712719b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_d81e56ff56de453e8afadfca68926d4d12c9148a93717043d96dcb230ec5e45e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d81e56ff56de453e8afadfca68926d4d12c9148a93717043d96dcb230ec5e45e->enter($__internal_d81e56ff56de453e8afadfca68926d4d12c9148a93717043d96dcb230ec5e45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4f8761df51564fda4a4df4e8d40b41c517dc1cf2df3e2e182e9236b712719b7b->leave($__internal_4f8761df51564fda4a4df4e8d40b41c517dc1cf2df3e2e182e9236b712719b7b_prof);

        
        $__internal_d81e56ff56de453e8afadfca68926d4d12c9148a93717043d96dcb230ec5e45e->leave($__internal_d81e56ff56de453e8afadfca68926d4d12c9148a93717043d96dcb230ec5e45e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
