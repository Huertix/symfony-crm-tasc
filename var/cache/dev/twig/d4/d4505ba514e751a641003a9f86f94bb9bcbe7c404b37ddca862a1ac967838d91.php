<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_38251faab25f562890c77e84511a92b7d310d408249335ec60da918b3d576d27 extends Twig_Template
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
        $__internal_a7ec5f939fb44a65c8dd0213bcecdf5ed583e076489f3f6f12fa0218eb785883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7ec5f939fb44a65c8dd0213bcecdf5ed583e076489f3f6f12fa0218eb785883->enter($__internal_a7ec5f939fb44a65c8dd0213bcecdf5ed583e076489f3f6f12fa0218eb785883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_16528804fdfcd53bd842b1ea8d5488a552460d2fe72f3e31b52f5a4ac4d54e77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16528804fdfcd53bd842b1ea8d5488a552460d2fe72f3e31b52f5a4ac4d54e77->enter($__internal_16528804fdfcd53bd842b1ea8d5488a552460d2fe72f3e31b52f5a4ac4d54e77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a7ec5f939fb44a65c8dd0213bcecdf5ed583e076489f3f6f12fa0218eb785883->leave($__internal_a7ec5f939fb44a65c8dd0213bcecdf5ed583e076489f3f6f12fa0218eb785883_prof);

        
        $__internal_16528804fdfcd53bd842b1ea8d5488a552460d2fe72f3e31b52f5a4ac4d54e77->leave($__internal_16528804fdfcd53bd842b1ea8d5488a552460d2fe72f3e31b52f5a4ac4d54e77_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
