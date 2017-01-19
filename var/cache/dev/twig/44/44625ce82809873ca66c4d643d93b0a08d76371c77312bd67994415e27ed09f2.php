<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_91679c6b82566d918bbe555b32bdda57b5b264e06e17ba340799689bbd579db7 extends Twig_Template
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
        $__internal_048086ab3fec217e9f1521a9e872785bdc2d5dd62680e90671b2a856df255885 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_048086ab3fec217e9f1521a9e872785bdc2d5dd62680e90671b2a856df255885->enter($__internal_048086ab3fec217e9f1521a9e872785bdc2d5dd62680e90671b2a856df255885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e0b3fefe9a1ce0331583b25f62e9c6ed27d91efa9f2e682c35c27ecc6d1a9066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0b3fefe9a1ce0331583b25f62e9c6ed27d91efa9f2e682c35c27ecc6d1a9066->enter($__internal_e0b3fefe9a1ce0331583b25f62e9c6ed27d91efa9f2e682c35c27ecc6d1a9066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_048086ab3fec217e9f1521a9e872785bdc2d5dd62680e90671b2a856df255885->leave($__internal_048086ab3fec217e9f1521a9e872785bdc2d5dd62680e90671b2a856df255885_prof);

        
        $__internal_e0b3fefe9a1ce0331583b25f62e9c6ed27d91efa9f2e682c35c27ecc6d1a9066->leave($__internal_e0b3fefe9a1ce0331583b25f62e9c6ed27d91efa9f2e682c35c27ecc6d1a9066_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
