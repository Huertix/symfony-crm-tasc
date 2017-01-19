<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_9b04dda7a95ace2243d29e77f3e1a04afa2573b5389641ea8c8b3bec2b19791f extends Twig_Template
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
        $__internal_3d0fa7127a395dda70d99055e7b85638bd7c9b0d946e2008baafaa82fd49aced = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d0fa7127a395dda70d99055e7b85638bd7c9b0d946e2008baafaa82fd49aced->enter($__internal_3d0fa7127a395dda70d99055e7b85638bd7c9b0d946e2008baafaa82fd49aced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_97230b701dd909c5ede15cd261e3b99d00994ecac8562c9e585ece594ba00cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97230b701dd909c5ede15cd261e3b99d00994ecac8562c9e585ece594ba00cc7->enter($__internal_97230b701dd909c5ede15cd261e3b99d00994ecac8562c9e585ece594ba00cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_3d0fa7127a395dda70d99055e7b85638bd7c9b0d946e2008baafaa82fd49aced->leave($__internal_3d0fa7127a395dda70d99055e7b85638bd7c9b0d946e2008baafaa82fd49aced_prof);

        
        $__internal_97230b701dd909c5ede15cd261e3b99d00994ecac8562c9e585ece594ba00cc7->leave($__internal_97230b701dd909c5ede15cd261e3b99d00994ecac8562c9e585ece594ba00cc7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
