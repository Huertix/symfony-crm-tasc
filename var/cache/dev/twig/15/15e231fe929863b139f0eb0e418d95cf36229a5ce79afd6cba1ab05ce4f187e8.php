<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_e4bf08a29dc80e403ff9fbdbbc135be9d3e951bd72610f2476cc3783df8ab300 extends Twig_Template
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
        $__internal_9445e03e64582e1e024b2a00fea5f5475f9e569873cd9143e4c4013428722275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9445e03e64582e1e024b2a00fea5f5475f9e569873cd9143e4c4013428722275->enter($__internal_9445e03e64582e1e024b2a00fea5f5475f9e569873cd9143e4c4013428722275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_b396e32d4a57294f1c79d9858c11df45f4a5aad42c1e57e7accf22cbad6c8cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b396e32d4a57294f1c79d9858c11df45f4a5aad42c1e57e7accf22cbad6c8cc7->enter($__internal_b396e32d4a57294f1c79d9858c11df45f4a5aad42c1e57e7accf22cbad6c8cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_9445e03e64582e1e024b2a00fea5f5475f9e569873cd9143e4c4013428722275->leave($__internal_9445e03e64582e1e024b2a00fea5f5475f9e569873cd9143e4c4013428722275_prof);

        
        $__internal_b396e32d4a57294f1c79d9858c11df45f4a5aad42c1e57e7accf22cbad6c8cc7->leave($__internal_b396e32d4a57294f1c79d9858c11df45f4a5aad42c1e57e7accf22cbad6c8cc7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
