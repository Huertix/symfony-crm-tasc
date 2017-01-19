<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_921125c73e0003623b6636f2e91e95d814c3e72aafd6c1c81752c64d88adbe16 extends Twig_Template
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
        $__internal_17582b97a393e69f3c8339fb72f1375fb9d18f3923e4a5bd927f63bc005d9966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17582b97a393e69f3c8339fb72f1375fb9d18f3923e4a5bd927f63bc005d9966->enter($__internal_17582b97a393e69f3c8339fb72f1375fb9d18f3923e4a5bd927f63bc005d9966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_b822ab133bebaf33974c5258302944e15f8e00163866823255b10ae779da9229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b822ab133bebaf33974c5258302944e15f8e00163866823255b10ae779da9229->enter($__internal_b822ab133bebaf33974c5258302944e15f8e00163866823255b10ae779da9229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_17582b97a393e69f3c8339fb72f1375fb9d18f3923e4a5bd927f63bc005d9966->leave($__internal_17582b97a393e69f3c8339fb72f1375fb9d18f3923e4a5bd927f63bc005d9966_prof);

        
        $__internal_b822ab133bebaf33974c5258302944e15f8e00163866823255b10ae779da9229->leave($__internal_b822ab133bebaf33974c5258302944e15f8e00163866823255b10ae779da9229_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
