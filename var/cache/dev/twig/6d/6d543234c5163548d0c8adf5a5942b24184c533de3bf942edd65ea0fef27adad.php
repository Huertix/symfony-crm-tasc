<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_fa6548139acf03165f71fe6ba497c62c5e44336175382eee6ed6deb6681c39c6 extends Twig_Template
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
        $__internal_0f0f54637d15b3d702f17cfa0dddc5e43d6b866b11ccaf44fed35f2a4bfd5d15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f0f54637d15b3d702f17cfa0dddc5e43d6b866b11ccaf44fed35f2a4bfd5d15->enter($__internal_0f0f54637d15b3d702f17cfa0dddc5e43d6b866b11ccaf44fed35f2a4bfd5d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_b23feef2c5222002095607d7ec258b8450d7f086fc55c64ced7936a111037e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b23feef2c5222002095607d7ec258b8450d7f086fc55c64ced7936a111037e21->enter($__internal_b23feef2c5222002095607d7ec258b8450d7f086fc55c64ced7936a111037e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_0f0f54637d15b3d702f17cfa0dddc5e43d6b866b11ccaf44fed35f2a4bfd5d15->leave($__internal_0f0f54637d15b3d702f17cfa0dddc5e43d6b866b11ccaf44fed35f2a4bfd5d15_prof);

        
        $__internal_b23feef2c5222002095607d7ec258b8450d7f086fc55c64ced7936a111037e21->leave($__internal_b23feef2c5222002095607d7ec258b8450d7f086fc55c64ced7936a111037e21_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
