<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_49cce42103c4900210b5399953249c84eaa1000b163a3076691d09f40e616a5d extends Twig_Template
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
        $__internal_3685204969cd29cf24635c927b13d792625b2944c7b6840a71930d95636d0b79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3685204969cd29cf24635c927b13d792625b2944c7b6840a71930d95636d0b79->enter($__internal_3685204969cd29cf24635c927b13d792625b2944c7b6840a71930d95636d0b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_cb9756ab7445ae47c97f5698fef2ddb14fa054751c606cc51d1275ab5847abb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb9756ab7445ae47c97f5698fef2ddb14fa054751c606cc51d1275ab5847abb2->enter($__internal_cb9756ab7445ae47c97f5698fef2ddb14fa054751c606cc51d1275ab5847abb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_3685204969cd29cf24635c927b13d792625b2944c7b6840a71930d95636d0b79->leave($__internal_3685204969cd29cf24635c927b13d792625b2944c7b6840a71930d95636d0b79_prof);

        
        $__internal_cb9756ab7445ae47c97f5698fef2ddb14fa054751c606cc51d1275ab5847abb2->leave($__internal_cb9756ab7445ae47c97f5698fef2ddb14fa054751c606cc51d1275ab5847abb2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
