<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_babb4d52e0f7b242229db64d6ca1211cc085f847011390caf1dc52989a2d903c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c081614590367be3e71c9c5a698c75ac695a8b741ba81dcbc699e5077395f470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c081614590367be3e71c9c5a698c75ac695a8b741ba81dcbc699e5077395f470->enter($__internal_c081614590367be3e71c9c5a698c75ac695a8b741ba81dcbc699e5077395f470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_c74900385ec40c7d7e4d94dcaa3c9b47b73eac0e4a0dd12f6411e3798e694cfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74900385ec40c7d7e4d94dcaa3c9b47b73eac0e4a0dd12f6411e3798e694cfe->enter($__internal_c74900385ec40c7d7e4d94dcaa3c9b47b73eac0e4a0dd12f6411e3798e694cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c081614590367be3e71c9c5a698c75ac695a8b741ba81dcbc699e5077395f470->leave($__internal_c081614590367be3e71c9c5a698c75ac695a8b741ba81dcbc699e5077395f470_prof);

        
        $__internal_c74900385ec40c7d7e4d94dcaa3c9b47b73eac0e4a0dd12f6411e3798e694cfe->leave($__internal_c74900385ec40c7d7e4d94dcaa3c9b47b73eac0e4a0dd12f6411e3798e694cfe_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c67d38bc857771a027d8ea96448c52476b37d613c7ecdafd02e0025167518d6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c67d38bc857771a027d8ea96448c52476b37d613c7ecdafd02e0025167518d6d->enter($__internal_c67d38bc857771a027d8ea96448c52476b37d613c7ecdafd02e0025167518d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c9ceffbf7c07113f3b0e7ecf4cd7a1ed9f00a4501a0430bd997ad874f257ff60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9ceffbf7c07113f3b0e7ecf4cd7a1ed9f00a4501a0430bd997ad874f257ff60->enter($__internal_c9ceffbf7c07113f3b0e7ecf4cd7a1ed9f00a4501a0430bd997ad874f257ff60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c9ceffbf7c07113f3b0e7ecf4cd7a1ed9f00a4501a0430bd997ad874f257ff60->leave($__internal_c9ceffbf7c07113f3b0e7ecf4cd7a1ed9f00a4501a0430bd997ad874f257ff60_prof);

        
        $__internal_c67d38bc857771a027d8ea96448c52476b37d613c7ecdafd02e0025167518d6d->leave($__internal_c67d38bc857771a027d8ea96448c52476b37d613c7ecdafd02e0025167518d6d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
