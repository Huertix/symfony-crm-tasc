<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_99795adbe0e084a6d1751a06cbb42b1006ba64d8057eeb51a3277cea3d3b2818 extends Twig_Template
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
        $__internal_0cb8945d36f84b54249db49a0e184a8d6249aa7bbe3a2e3122aed5ebf19684c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cb8945d36f84b54249db49a0e184a8d6249aa7bbe3a2e3122aed5ebf19684c8->enter($__internal_0cb8945d36f84b54249db49a0e184a8d6249aa7bbe3a2e3122aed5ebf19684c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_b69e8b902f4eadd241e9ee170bd905de82674d5395ac272fe1b575fc7c6fb326 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69e8b902f4eadd241e9ee170bd905de82674d5395ac272fe1b575fc7c6fb326->enter($__internal_b69e8b902f4eadd241e9ee170bd905de82674d5395ac272fe1b575fc7c6fb326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_0cb8945d36f84b54249db49a0e184a8d6249aa7bbe3a2e3122aed5ebf19684c8->leave($__internal_0cb8945d36f84b54249db49a0e184a8d6249aa7bbe3a2e3122aed5ebf19684c8_prof);

        
        $__internal_b69e8b902f4eadd241e9ee170bd905de82674d5395ac272fe1b575fc7c6fb326->leave($__internal_b69e8b902f4eadd241e9ee170bd905de82674d5395ac272fe1b575fc7c6fb326_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
