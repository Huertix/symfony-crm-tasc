<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_4c0a730b85ef2145608a9dc7af1de69714bf933672e1f9ae53af6a5b7e0c17a1 extends Twig_Template
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
        $__internal_dd5b795ea1e20d66b60df0d040c064314f5f827fd4215a4f05c4f4c45fa0ec5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd5b795ea1e20d66b60df0d040c064314f5f827fd4215a4f05c4f4c45fa0ec5e->enter($__internal_dd5b795ea1e20d66b60df0d040c064314f5f827fd4215a4f05c4f4c45fa0ec5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_8680f842dbecece4d7d1bbbdc33b1d2d27756d2a4ae1b62ba0167ec61acb9e51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8680f842dbecece4d7d1bbbdc33b1d2d27756d2a4ae1b62ba0167ec61acb9e51->enter($__internal_8680f842dbecece4d7d1bbbdc33b1d2d27756d2a4ae1b62ba0167ec61acb9e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_dd5b795ea1e20d66b60df0d040c064314f5f827fd4215a4f05c4f4c45fa0ec5e->leave($__internal_dd5b795ea1e20d66b60df0d040c064314f5f827fd4215a4f05c4f4c45fa0ec5e_prof);

        
        $__internal_8680f842dbecece4d7d1bbbdc33b1d2d27756d2a4ae1b62ba0167ec61acb9e51->leave($__internal_8680f842dbecece4d7d1bbbdc33b1d2d27756d2a4ae1b62ba0167ec61acb9e51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
