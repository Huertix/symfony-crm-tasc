<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_77c421da8ebf6dbd8993e82d3651e86aa412980a185d57b38c0048dd2b6ed5cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19f99f5b5ddf6bdb59e0f82ebb1b7b8c4c4fdb5d5a98b061b821bd433e0f3dde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19f99f5b5ddf6bdb59e0f82ebb1b7b8c4c4fdb5d5a98b061b821bd433e0f3dde->enter($__internal_19f99f5b5ddf6bdb59e0f82ebb1b7b8c4c4fdb5d5a98b061b821bd433e0f3dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_74cab40c44e03760395cf38488c01a96e130f7f15e71310b5d565982681b42c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74cab40c44e03760395cf38488c01a96e130f7f15e71310b5d565982681b42c8->enter($__internal_74cab40c44e03760395cf38488c01a96e130f7f15e71310b5d565982681b42c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19f99f5b5ddf6bdb59e0f82ebb1b7b8c4c4fdb5d5a98b061b821bd433e0f3dde->leave($__internal_19f99f5b5ddf6bdb59e0f82ebb1b7b8c4c4fdb5d5a98b061b821bd433e0f3dde_prof);

        
        $__internal_74cab40c44e03760395cf38488c01a96e130f7f15e71310b5d565982681b42c8->leave($__internal_74cab40c44e03760395cf38488c01a96e130f7f15e71310b5d565982681b42c8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f7498d2800c5dc5eae9a2b3a7e28f212e2f416a1d72e2efa1462789242d592c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7498d2800c5dc5eae9a2b3a7e28f212e2f416a1d72e2efa1462789242d592c3->enter($__internal_f7498d2800c5dc5eae9a2b3a7e28f212e2f416a1d72e2efa1462789242d592c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2bbaf970869403ca04c6a1ed0e0bc5307fa2038875e4d013ffdc3cc21f86c8da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bbaf970869403ca04c6a1ed0e0bc5307fa2038875e4d013ffdc3cc21f86c8da->enter($__internal_2bbaf970869403ca04c6a1ed0e0bc5307fa2038875e4d013ffdc3cc21f86c8da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2bbaf970869403ca04c6a1ed0e0bc5307fa2038875e4d013ffdc3cc21f86c8da->leave($__internal_2bbaf970869403ca04c6a1ed0e0bc5307fa2038875e4d013ffdc3cc21f86c8da_prof);

        
        $__internal_f7498d2800c5dc5eae9a2b3a7e28f212e2f416a1d72e2efa1462789242d592c3->leave($__internal_f7498d2800c5dc5eae9a2b3a7e28f212e2f416a1d72e2efa1462789242d592c3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fde4f7fc0aa654d565a035a63b9c064d42c9398cf074ac26d0a126dca1fe878b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fde4f7fc0aa654d565a035a63b9c064d42c9398cf074ac26d0a126dca1fe878b->enter($__internal_fde4f7fc0aa654d565a035a63b9c064d42c9398cf074ac26d0a126dca1fe878b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d9f784d5bd5ae16bf267b56c7cec50d63443e56fc56270d232052d18e69da623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9f784d5bd5ae16bf267b56c7cec50d63443e56fc56270d232052d18e69da623->enter($__internal_d9f784d5bd5ae16bf267b56c7cec50d63443e56fc56270d232052d18e69da623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d9f784d5bd5ae16bf267b56c7cec50d63443e56fc56270d232052d18e69da623->leave($__internal_d9f784d5bd5ae16bf267b56c7cec50d63443e56fc56270d232052d18e69da623_prof);

        
        $__internal_fde4f7fc0aa654d565a035a63b9c064d42c9398cf074ac26d0a126dca1fe878b->leave($__internal_fde4f7fc0aa654d565a035a63b9c064d42c9398cf074ac26d0a126dca1fe878b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_803fae894f504fd9314e024918721299fa72c4c9664de7578d4d82901aa7e650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_803fae894f504fd9314e024918721299fa72c4c9664de7578d4d82901aa7e650->enter($__internal_803fae894f504fd9314e024918721299fa72c4c9664de7578d4d82901aa7e650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0fc31778ac2ff6375825c681735c895f923ee28c16a6d43894e6edf64fbaecbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fc31778ac2ff6375825c681735c895f923ee28c16a6d43894e6edf64fbaecbf->enter($__internal_0fc31778ac2ff6375825c681735c895f923ee28c16a6d43894e6edf64fbaecbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0fc31778ac2ff6375825c681735c895f923ee28c16a6d43894e6edf64fbaecbf->leave($__internal_0fc31778ac2ff6375825c681735c895f923ee28c16a6d43894e6edf64fbaecbf_prof);

        
        $__internal_803fae894f504fd9314e024918721299fa72c4c9664de7578d4d82901aa7e650->leave($__internal_803fae894f504fd9314e024918721299fa72c4c9664de7578d4d82901aa7e650_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
