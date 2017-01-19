<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_2b8cb6f86f394cdfc6563a63c111bd6557ff8edca76089304fd5a94971a5f949 extends Twig_Template
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
        $__internal_4ee39103b5423f6482adb27aa62d1004aef717afb5e9a383aaa5da98e8a655f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ee39103b5423f6482adb27aa62d1004aef717afb5e9a383aaa5da98e8a655f6->enter($__internal_4ee39103b5423f6482adb27aa62d1004aef717afb5e9a383aaa5da98e8a655f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_d801a1d319eee1fc1bd5dbc3fc1732c4ab0e291a7841bd0d6fcc3f9a8bd3f565 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d801a1d319eee1fc1bd5dbc3fc1732c4ab0e291a7841bd0d6fcc3f9a8bd3f565->enter($__internal_d801a1d319eee1fc1bd5dbc3fc1732c4ab0e291a7841bd0d6fcc3f9a8bd3f565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_4ee39103b5423f6482adb27aa62d1004aef717afb5e9a383aaa5da98e8a655f6->leave($__internal_4ee39103b5423f6482adb27aa62d1004aef717afb5e9a383aaa5da98e8a655f6_prof);

        
        $__internal_d801a1d319eee1fc1bd5dbc3fc1732c4ab0e291a7841bd0d6fcc3f9a8bd3f565->leave($__internal_d801a1d319eee1fc1bd5dbc3fc1732c4ab0e291a7841bd0d6fcc3f9a8bd3f565_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
