<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_4229af677c0c577d2a4135c37717ca78890ca78aa0bc83e4b8357169b898af37 extends Twig_Template
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
        $__internal_ef59ef034427a2376c73f5068ca856b2d695d8cccd20eeb589fc0c658db7e9a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef59ef034427a2376c73f5068ca856b2d695d8cccd20eeb589fc0c658db7e9a1->enter($__internal_ef59ef034427a2376c73f5068ca856b2d695d8cccd20eeb589fc0c658db7e9a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_84847bc76cd6a16af790d029f32d03326c3d0f585fb6839333270ca3b40bbdbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84847bc76cd6a16af790d029f32d03326c3d0f585fb6839333270ca3b40bbdbe->enter($__internal_84847bc76cd6a16af790d029f32d03326c3d0f585fb6839333270ca3b40bbdbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_ef59ef034427a2376c73f5068ca856b2d695d8cccd20eeb589fc0c658db7e9a1->leave($__internal_ef59ef034427a2376c73f5068ca856b2d695d8cccd20eeb589fc0c658db7e9a1_prof);

        
        $__internal_84847bc76cd6a16af790d029f32d03326c3d0f585fb6839333270ca3b40bbdbe->leave($__internal_84847bc76cd6a16af790d029f32d03326c3d0f585fb6839333270ca3b40bbdbe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
