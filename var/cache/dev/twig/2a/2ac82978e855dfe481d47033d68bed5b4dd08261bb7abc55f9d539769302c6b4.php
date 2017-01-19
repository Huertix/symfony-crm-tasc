<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_4cb7c3ad3e0ac53c65408ffc47cc76507397a91a58484dbc65fe7fa48d9114be extends Twig_Template
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
        $__internal_879e24edc5c6fa3b8628a3c46ca10fcbf4a66ed10ac146ded3f7b54d96894b6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_879e24edc5c6fa3b8628a3c46ca10fcbf4a66ed10ac146ded3f7b54d96894b6e->enter($__internal_879e24edc5c6fa3b8628a3c46ca10fcbf4a66ed10ac146ded3f7b54d96894b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_61a9fd8c9c44389161df782fcdc121ff14606f07f90db72da1c80ae331df0511 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61a9fd8c9c44389161df782fcdc121ff14606f07f90db72da1c80ae331df0511->enter($__internal_61a9fd8c9c44389161df782fcdc121ff14606f07f90db72da1c80ae331df0511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_879e24edc5c6fa3b8628a3c46ca10fcbf4a66ed10ac146ded3f7b54d96894b6e->leave($__internal_879e24edc5c6fa3b8628a3c46ca10fcbf4a66ed10ac146ded3f7b54d96894b6e_prof);

        
        $__internal_61a9fd8c9c44389161df782fcdc121ff14606f07f90db72da1c80ae331df0511->leave($__internal_61a9fd8c9c44389161df782fcdc121ff14606f07f90db72da1c80ae331df0511_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
