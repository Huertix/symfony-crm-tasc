<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_4010838583a138c2d0e0a9a8cef36e7ee5a8d1ea7b273a74be8113e7cb72ad3a extends Twig_Template
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
        $__internal_c3d33e3637b0580b1ae730c263a9d2215c8fb9e7b19edf2bf58c59b83474db32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3d33e3637b0580b1ae730c263a9d2215c8fb9e7b19edf2bf58c59b83474db32->enter($__internal_c3d33e3637b0580b1ae730c263a9d2215c8fb9e7b19edf2bf58c59b83474db32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_8bbd085adf355772aee0eeaa3818923326ea414f4a6b3d90401c13292626501f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bbd085adf355772aee0eeaa3818923326ea414f4a6b3d90401c13292626501f->enter($__internal_8bbd085adf355772aee0eeaa3818923326ea414f4a6b3d90401c13292626501f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_c3d33e3637b0580b1ae730c263a9d2215c8fb9e7b19edf2bf58c59b83474db32->leave($__internal_c3d33e3637b0580b1ae730c263a9d2215c8fb9e7b19edf2bf58c59b83474db32_prof);

        
        $__internal_8bbd085adf355772aee0eeaa3818923326ea414f4a6b3d90401c13292626501f->leave($__internal_8bbd085adf355772aee0eeaa3818923326ea414f4a6b3d90401c13292626501f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
