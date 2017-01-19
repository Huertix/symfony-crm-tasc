<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_f4df5fbff1059ef0d58a6b50af54ca215c05d8f23dd280390aa923bf2eb68bd8 extends Twig_Template
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
        $__internal_ba87d6d79fc2277a0458ba43cbfa40291bfc971c23d1065c4b119e8e8a71dc14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba87d6d79fc2277a0458ba43cbfa40291bfc971c23d1065c4b119e8e8a71dc14->enter($__internal_ba87d6d79fc2277a0458ba43cbfa40291bfc971c23d1065c4b119e8e8a71dc14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_3ea0c9ee53a4f55f202a297a3fe3a102d819f92b0afdb24601b545e0c4a48c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea0c9ee53a4f55f202a297a3fe3a102d819f92b0afdb24601b545e0c4a48c0f->enter($__internal_3ea0c9ee53a4f55f202a297a3fe3a102d819f92b0afdb24601b545e0c4a48c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ba87d6d79fc2277a0458ba43cbfa40291bfc971c23d1065c4b119e8e8a71dc14->leave($__internal_ba87d6d79fc2277a0458ba43cbfa40291bfc971c23d1065c4b119e8e8a71dc14_prof);

        
        $__internal_3ea0c9ee53a4f55f202a297a3fe3a102d819f92b0afdb24601b545e0c4a48c0f->leave($__internal_3ea0c9ee53a4f55f202a297a3fe3a102d819f92b0afdb24601b545e0c4a48c0f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
