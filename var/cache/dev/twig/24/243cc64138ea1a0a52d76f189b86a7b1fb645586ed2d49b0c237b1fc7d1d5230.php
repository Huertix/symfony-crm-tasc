<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_dcc834ad176128f1c498d73e552c38d7c7ff7d6487491caee7e2465306a5a86c extends Twig_Template
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
        $__internal_f8fac51707ac58bfeb63920512c5be7562384eb9f4cde697cc71913b04f05a33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8fac51707ac58bfeb63920512c5be7562384eb9f4cde697cc71913b04f05a33->enter($__internal_f8fac51707ac58bfeb63920512c5be7562384eb9f4cde697cc71913b04f05a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_2c1559cf5306bb62dfdc0033140fbbb1a0fc41bf5ffb8668e7f1a3530aba8905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c1559cf5306bb62dfdc0033140fbbb1a0fc41bf5ffb8668e7f1a3530aba8905->enter($__internal_2c1559cf5306bb62dfdc0033140fbbb1a0fc41bf5ffb8668e7f1a3530aba8905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_f8fac51707ac58bfeb63920512c5be7562384eb9f4cde697cc71913b04f05a33->leave($__internal_f8fac51707ac58bfeb63920512c5be7562384eb9f4cde697cc71913b04f05a33_prof);

        
        $__internal_2c1559cf5306bb62dfdc0033140fbbb1a0fc41bf5ffb8668e7f1a3530aba8905->leave($__internal_2c1559cf5306bb62dfdc0033140fbbb1a0fc41bf5ffb8668e7f1a3530aba8905_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
