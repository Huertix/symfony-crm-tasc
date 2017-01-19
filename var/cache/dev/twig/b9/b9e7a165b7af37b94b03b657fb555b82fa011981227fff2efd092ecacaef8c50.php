<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_08593bcc05f4bf996a1bd2ca47369a318c783eaf395f2c67790eea3b80208386 extends Twig_Template
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
        $__internal_951023748b1b16ae3dfa3dd40c52df65db061039de0278f53eb381ca545402ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_951023748b1b16ae3dfa3dd40c52df65db061039de0278f53eb381ca545402ff->enter($__internal_951023748b1b16ae3dfa3dd40c52df65db061039de0278f53eb381ca545402ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_4cdbaf3b0055e7befaec7571ede75119fcd34771cb8e373933baa0089c5ded37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cdbaf3b0055e7befaec7571ede75119fcd34771cb8e373933baa0089c5ded37->enter($__internal_4cdbaf3b0055e7befaec7571ede75119fcd34771cb8e373933baa0089c5ded37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_951023748b1b16ae3dfa3dd40c52df65db061039de0278f53eb381ca545402ff->leave($__internal_951023748b1b16ae3dfa3dd40c52df65db061039de0278f53eb381ca545402ff_prof);

        
        $__internal_4cdbaf3b0055e7befaec7571ede75119fcd34771cb8e373933baa0089c5ded37->leave($__internal_4cdbaf3b0055e7befaec7571ede75119fcd34771cb8e373933baa0089c5ded37_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
