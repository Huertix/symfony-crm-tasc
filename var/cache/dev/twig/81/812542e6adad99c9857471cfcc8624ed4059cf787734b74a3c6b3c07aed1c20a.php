<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_f21bba042431c0a7f935e6d162719a712c8fe6f7ec77932895b59d036418ec0a extends Twig_Template
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
        $__internal_7eb8892e878c228b949c9feb8a936ffea203576a4c60a6cd42f3710cc3a2713e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eb8892e878c228b949c9feb8a936ffea203576a4c60a6cd42f3710cc3a2713e->enter($__internal_7eb8892e878c228b949c9feb8a936ffea203576a4c60a6cd42f3710cc3a2713e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_e814713a8199cd951bac53a0913bdcfe9d0d89a4732344d71ea39eade1b6558f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e814713a8199cd951bac53a0913bdcfe9d0d89a4732344d71ea39eade1b6558f->enter($__internal_e814713a8199cd951bac53a0913bdcfe9d0d89a4732344d71ea39eade1b6558f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_7eb8892e878c228b949c9feb8a936ffea203576a4c60a6cd42f3710cc3a2713e->leave($__internal_7eb8892e878c228b949c9feb8a936ffea203576a4c60a6cd42f3710cc3a2713e_prof);

        
        $__internal_e814713a8199cd951bac53a0913bdcfe9d0d89a4732344d71ea39eade1b6558f->leave($__internal_e814713a8199cd951bac53a0913bdcfe9d0d89a4732344d71ea39eade1b6558f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
