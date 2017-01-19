<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_3a8ade9edf16950e8ab6c184caccff5c0b4f4f114ede523037736d9b8f160bb0 extends Twig_Template
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
        $__internal_7ba3ed3301d5b86d8ee64ae41711b9899880b021c2164ff4ad899d4014741479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ba3ed3301d5b86d8ee64ae41711b9899880b021c2164ff4ad899d4014741479->enter($__internal_7ba3ed3301d5b86d8ee64ae41711b9899880b021c2164ff4ad899d4014741479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_85c501c17b6135e4a93c766be39d3eb7b07492efa6b894fc846e3b9d05137ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c501c17b6135e4a93c766be39d3eb7b07492efa6b894fc846e3b9d05137ee5->enter($__internal_85c501c17b6135e4a93c766be39d3eb7b07492efa6b894fc846e3b9d05137ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7ba3ed3301d5b86d8ee64ae41711b9899880b021c2164ff4ad899d4014741479->leave($__internal_7ba3ed3301d5b86d8ee64ae41711b9899880b021c2164ff4ad899d4014741479_prof);

        
        $__internal_85c501c17b6135e4a93c766be39d3eb7b07492efa6b894fc846e3b9d05137ee5->leave($__internal_85c501c17b6135e4a93c766be39d3eb7b07492efa6b894fc846e3b9d05137ee5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
