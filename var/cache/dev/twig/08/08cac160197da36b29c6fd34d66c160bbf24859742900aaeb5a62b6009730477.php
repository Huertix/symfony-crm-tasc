<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_773c078afe0319c54cdc82a284e5f4e69695a9a7953b09d4eb1982c6870f24e2 extends Twig_Template
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
        $__internal_d4107cd65f04b445237cedd86f0de90d8628bd3aa76033736ce456a35db6f9b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4107cd65f04b445237cedd86f0de90d8628bd3aa76033736ce456a35db6f9b4->enter($__internal_d4107cd65f04b445237cedd86f0de90d8628bd3aa76033736ce456a35db6f9b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_5b5c7c0ef5cf6cf7589d12915c48b3c669e087bf52a84416fd89cc2ed0a4c3c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5c7c0ef5cf6cf7589d12915c48b3c669e087bf52a84416fd89cc2ed0a4c3c1->enter($__internal_5b5c7c0ef5cf6cf7589d12915c48b3c669e087bf52a84416fd89cc2ed0a4c3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_d4107cd65f04b445237cedd86f0de90d8628bd3aa76033736ce456a35db6f9b4->leave($__internal_d4107cd65f04b445237cedd86f0de90d8628bd3aa76033736ce456a35db6f9b4_prof);

        
        $__internal_5b5c7c0ef5cf6cf7589d12915c48b3c669e087bf52a84416fd89cc2ed0a4c3c1->leave($__internal_5b5c7c0ef5cf6cf7589d12915c48b3c669e087bf52a84416fd89cc2ed0a4c3c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
