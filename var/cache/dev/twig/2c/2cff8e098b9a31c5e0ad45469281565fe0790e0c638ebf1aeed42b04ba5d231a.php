<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a6105d6f253dd3a1b7c119604b210340bc0c93a2028eff5cc694f2a2d03ab4a4 extends Twig_Template
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
        $__internal_60b268b75644a5042c3e608a8dc7a87282c7371ccd3eab108336cd2d6ed27589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60b268b75644a5042c3e608a8dc7a87282c7371ccd3eab108336cd2d6ed27589->enter($__internal_60b268b75644a5042c3e608a8dc7a87282c7371ccd3eab108336cd2d6ed27589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_a30abe3251daeeda33e5cda830f8b9b6fdef93ec8d5aa36838a63936f5042965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a30abe3251daeeda33e5cda830f8b9b6fdef93ec8d5aa36838a63936f5042965->enter($__internal_a30abe3251daeeda33e5cda830f8b9b6fdef93ec8d5aa36838a63936f5042965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_60b268b75644a5042c3e608a8dc7a87282c7371ccd3eab108336cd2d6ed27589->leave($__internal_60b268b75644a5042c3e608a8dc7a87282c7371ccd3eab108336cd2d6ed27589_prof);

        
        $__internal_a30abe3251daeeda33e5cda830f8b9b6fdef93ec8d5aa36838a63936f5042965->leave($__internal_a30abe3251daeeda33e5cda830f8b9b6fdef93ec8d5aa36838a63936f5042965_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
