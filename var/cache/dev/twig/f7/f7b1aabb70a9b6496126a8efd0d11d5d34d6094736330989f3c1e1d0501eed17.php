<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_4005d879ea0ac0184634b3fff7d95efe176925e1e4c381a17e33996958dbbe89 extends Twig_Template
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
        $__internal_c4bd29847bd32091aed01f696344fc9cf1b9bac9e1ed46714243cbbb1e5234a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4bd29847bd32091aed01f696344fc9cf1b9bac9e1ed46714243cbbb1e5234a9->enter($__internal_c4bd29847bd32091aed01f696344fc9cf1b9bac9e1ed46714243cbbb1e5234a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_801bd57f12acc94877391b3294f9d47f809bbc2ce5a0908f519c2a00ae7dc424 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_801bd57f12acc94877391b3294f9d47f809bbc2ce5a0908f519c2a00ae7dc424->enter($__internal_801bd57f12acc94877391b3294f9d47f809bbc2ce5a0908f519c2a00ae7dc424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_c4bd29847bd32091aed01f696344fc9cf1b9bac9e1ed46714243cbbb1e5234a9->leave($__internal_c4bd29847bd32091aed01f696344fc9cf1b9bac9e1ed46714243cbbb1e5234a9_prof);

        
        $__internal_801bd57f12acc94877391b3294f9d47f809bbc2ce5a0908f519c2a00ae7dc424->leave($__internal_801bd57f12acc94877391b3294f9d47f809bbc2ce5a0908f519c2a00ae7dc424_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
