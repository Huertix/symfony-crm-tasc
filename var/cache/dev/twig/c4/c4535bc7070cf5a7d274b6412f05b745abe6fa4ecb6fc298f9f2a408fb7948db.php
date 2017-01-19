<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b9cbdb802fcac8e4bd1d0ad17a9042853e100d16c93561188a565405305083b7 extends Twig_Template
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
        $__internal_624074684a72aa2bff42ada1cf3c9bbcdc51c8c1a5678a3d65949b0d7927f686 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_624074684a72aa2bff42ada1cf3c9bbcdc51c8c1a5678a3d65949b0d7927f686->enter($__internal_624074684a72aa2bff42ada1cf3c9bbcdc51c8c1a5678a3d65949b0d7927f686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_3c1fa6e76e83e84e3e2f7036278d5c1b906d9c27e4bd215d942d03cba9a0aea1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c1fa6e76e83e84e3e2f7036278d5c1b906d9c27e4bd215d942d03cba9a0aea1->enter($__internal_3c1fa6e76e83e84e3e2f7036278d5c1b906d9c27e4bd215d942d03cba9a0aea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_624074684a72aa2bff42ada1cf3c9bbcdc51c8c1a5678a3d65949b0d7927f686->leave($__internal_624074684a72aa2bff42ada1cf3c9bbcdc51c8c1a5678a3d65949b0d7927f686_prof);

        
        $__internal_3c1fa6e76e83e84e3e2f7036278d5c1b906d9c27e4bd215d942d03cba9a0aea1->leave($__internal_3c1fa6e76e83e84e3e2f7036278d5c1b906d9c27e4bd215d942d03cba9a0aea1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
