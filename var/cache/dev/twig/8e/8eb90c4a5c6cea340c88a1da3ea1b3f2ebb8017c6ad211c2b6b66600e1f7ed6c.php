<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_88f4be8294d976fa0854566182da86f97b7fdb6c5830e5fd2e2bd50b9ec3688c extends Twig_Template
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
        $__internal_f3a0f716fa72dfddd8007826d25eebd745865933aa4fc570bc88172b03cfd909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3a0f716fa72dfddd8007826d25eebd745865933aa4fc570bc88172b03cfd909->enter($__internal_f3a0f716fa72dfddd8007826d25eebd745865933aa4fc570bc88172b03cfd909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_144b4b7efe00e67c21626f7cfb503e95445e4dcf135a8a90f6a78e9d0b0e77a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_144b4b7efe00e67c21626f7cfb503e95445e4dcf135a8a90f6a78e9d0b0e77a7->enter($__internal_144b4b7efe00e67c21626f7cfb503e95445e4dcf135a8a90f6a78e9d0b0e77a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_f3a0f716fa72dfddd8007826d25eebd745865933aa4fc570bc88172b03cfd909->leave($__internal_f3a0f716fa72dfddd8007826d25eebd745865933aa4fc570bc88172b03cfd909_prof);

        
        $__internal_144b4b7efe00e67c21626f7cfb503e95445e4dcf135a8a90f6a78e9d0b0e77a7->leave($__internal_144b4b7efe00e67c21626f7cfb503e95445e4dcf135a8a90f6a78e9d0b0e77a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
