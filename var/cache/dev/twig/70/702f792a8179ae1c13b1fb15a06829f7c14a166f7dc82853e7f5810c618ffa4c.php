<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_e054b62dfab6647d1992de39163f65cf74cc4c68bae2afee4876646320904494 extends Twig_Template
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
        $__internal_c2ffe84d9e3ae9274da1e44f7f45d5d071d63083d7026d2155387fdead01d3d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2ffe84d9e3ae9274da1e44f7f45d5d071d63083d7026d2155387fdead01d3d2->enter($__internal_c2ffe84d9e3ae9274da1e44f7f45d5d071d63083d7026d2155387fdead01d3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_5ba88270f9ff5c3721bc5fa3b2c1f1e9564e0ff2ac29f8154ded78d18d2b750e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba88270f9ff5c3721bc5fa3b2c1f1e9564e0ff2ac29f8154ded78d18d2b750e->enter($__internal_5ba88270f9ff5c3721bc5fa3b2c1f1e9564e0ff2ac29f8154ded78d18d2b750e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c2ffe84d9e3ae9274da1e44f7f45d5d071d63083d7026d2155387fdead01d3d2->leave($__internal_c2ffe84d9e3ae9274da1e44f7f45d5d071d63083d7026d2155387fdead01d3d2_prof);

        
        $__internal_5ba88270f9ff5c3721bc5fa3b2c1f1e9564e0ff2ac29f8154ded78d18d2b750e->leave($__internal_5ba88270f9ff5c3721bc5fa3b2c1f1e9564e0ff2ac29f8154ded78d18d2b750e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
