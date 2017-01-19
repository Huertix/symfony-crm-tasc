<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_5494bbe992c179baa68897d06a669bd0bcb087729a16415d807df77d7c34a3ea extends Twig_Template
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
        $__internal_94591b1d7e728bb09fb308f5d2d3df49dd65730c5dff293555cb3f2187f959ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94591b1d7e728bb09fb308f5d2d3df49dd65730c5dff293555cb3f2187f959ca->enter($__internal_94591b1d7e728bb09fb308f5d2d3df49dd65730c5dff293555cb3f2187f959ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_db8bc85968272dec40ae695b7323063b0723dae30cb9afafc7ef0f5fb46dcdfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db8bc85968272dec40ae695b7323063b0723dae30cb9afafc7ef0f5fb46dcdfb->enter($__internal_db8bc85968272dec40ae695b7323063b0723dae30cb9afafc7ef0f5fb46dcdfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_94591b1d7e728bb09fb308f5d2d3df49dd65730c5dff293555cb3f2187f959ca->leave($__internal_94591b1d7e728bb09fb308f5d2d3df49dd65730c5dff293555cb3f2187f959ca_prof);

        
        $__internal_db8bc85968272dec40ae695b7323063b0723dae30cb9afafc7ef0f5fb46dcdfb->leave($__internal_db8bc85968272dec40ae695b7323063b0723dae30cb9afafc7ef0f5fb46dcdfb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
