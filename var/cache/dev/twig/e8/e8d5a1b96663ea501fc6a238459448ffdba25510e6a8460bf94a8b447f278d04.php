<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_18d05615aae2f2442b9ff6c0b0164d3f5dadb907a47d8c56b6f11a26c894176d extends Twig_Template
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
        $__internal_5069f3a6bbcb54252fe44e960b4906071a6d02735c398c6ad49cabe119419143 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5069f3a6bbcb54252fe44e960b4906071a6d02735c398c6ad49cabe119419143->enter($__internal_5069f3a6bbcb54252fe44e960b4906071a6d02735c398c6ad49cabe119419143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_126094adb6aa56703f8b53ca22a0af9e33384c580114f9b6bfcdc343a1698168 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_126094adb6aa56703f8b53ca22a0af9e33384c580114f9b6bfcdc343a1698168->enter($__internal_126094adb6aa56703f8b53ca22a0af9e33384c580114f9b6bfcdc343a1698168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5069f3a6bbcb54252fe44e960b4906071a6d02735c398c6ad49cabe119419143->leave($__internal_5069f3a6bbcb54252fe44e960b4906071a6d02735c398c6ad49cabe119419143_prof);

        
        $__internal_126094adb6aa56703f8b53ca22a0af9e33384c580114f9b6bfcdc343a1698168->leave($__internal_126094adb6aa56703f8b53ca22a0af9e33384c580114f9b6bfcdc343a1698168_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
