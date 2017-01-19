<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_b578f2d9d275a594e772d41a0f61ac5d9746bf87275feb3fee10c992f75d465a extends Twig_Template
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
        $__internal_cd8cdadf3793e2f6ee7ce6a1446c7dc0ee9218b33888e5e3037d4b7233608c3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd8cdadf3793e2f6ee7ce6a1446c7dc0ee9218b33888e5e3037d4b7233608c3d->enter($__internal_cd8cdadf3793e2f6ee7ce6a1446c7dc0ee9218b33888e5e3037d4b7233608c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_09b617c7cf645ba2a51d6b30bdbabbe541873faa7688b77f0075380f6a7baf4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09b617c7cf645ba2a51d6b30bdbabbe541873faa7688b77f0075380f6a7baf4c->enter($__internal_09b617c7cf645ba2a51d6b30bdbabbe541873faa7688b77f0075380f6a7baf4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_cd8cdadf3793e2f6ee7ce6a1446c7dc0ee9218b33888e5e3037d4b7233608c3d->leave($__internal_cd8cdadf3793e2f6ee7ce6a1446c7dc0ee9218b33888e5e3037d4b7233608c3d_prof);

        
        $__internal_09b617c7cf645ba2a51d6b30bdbabbe541873faa7688b77f0075380f6a7baf4c->leave($__internal_09b617c7cf645ba2a51d6b30bdbabbe541873faa7688b77f0075380f6a7baf4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
