<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_634f801d4c90d6907193010dff683fe56ef6601a92c1d699993605c534fb0633 extends Twig_Template
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
        $__internal_9c7cc14356864ee2a355db2aab544695fa9b8e6e701f249bf0cd8c59a1af0ec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c7cc14356864ee2a355db2aab544695fa9b8e6e701f249bf0cd8c59a1af0ec7->enter($__internal_9c7cc14356864ee2a355db2aab544695fa9b8e6e701f249bf0cd8c59a1af0ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_54f7e7935ba4c0d6882bc48e648cafd8f3b3c0aaedcb2ca79bce84d18e58a296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f7e7935ba4c0d6882bc48e648cafd8f3b3c0aaedcb2ca79bce84d18e58a296->enter($__internal_54f7e7935ba4c0d6882bc48e648cafd8f3b3c0aaedcb2ca79bce84d18e58a296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_9c7cc14356864ee2a355db2aab544695fa9b8e6e701f249bf0cd8c59a1af0ec7->leave($__internal_9c7cc14356864ee2a355db2aab544695fa9b8e6e701f249bf0cd8c59a1af0ec7_prof);

        
        $__internal_54f7e7935ba4c0d6882bc48e648cafd8f3b3c0aaedcb2ca79bce84d18e58a296->leave($__internal_54f7e7935ba4c0d6882bc48e648cafd8f3b3c0aaedcb2ca79bce84d18e58a296_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
