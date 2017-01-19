<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_3265b239f3e5ac883adc22120e0cf9434857214764b50266c7f81b4d47405d15 extends Twig_Template
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
        $__internal_850aa96db79a56f74195aa40ccba54466322d26feebc5ff345d8f359a66cb868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_850aa96db79a56f74195aa40ccba54466322d26feebc5ff345d8f359a66cb868->enter($__internal_850aa96db79a56f74195aa40ccba54466322d26feebc5ff345d8f359a66cb868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_510134afe5da996cd0aa34731b5266aa8e0a29dde3dbebdc2057d18a3ec33eee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_510134afe5da996cd0aa34731b5266aa8e0a29dde3dbebdc2057d18a3ec33eee->enter($__internal_510134afe5da996cd0aa34731b5266aa8e0a29dde3dbebdc2057d18a3ec33eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_850aa96db79a56f74195aa40ccba54466322d26feebc5ff345d8f359a66cb868->leave($__internal_850aa96db79a56f74195aa40ccba54466322d26feebc5ff345d8f359a66cb868_prof);

        
        $__internal_510134afe5da996cd0aa34731b5266aa8e0a29dde3dbebdc2057d18a3ec33eee->leave($__internal_510134afe5da996cd0aa34731b5266aa8e0a29dde3dbebdc2057d18a3ec33eee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
