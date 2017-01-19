<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_3ef6e62721d94d25ff51238f0004488140e4d75d5395ce13a350b6b50bc1c1ea extends Twig_Template
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
        $__internal_864630497eaedae0b82b40d800db828eded8985d5552671bef550996eddb0f2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_864630497eaedae0b82b40d800db828eded8985d5552671bef550996eddb0f2d->enter($__internal_864630497eaedae0b82b40d800db828eded8985d5552671bef550996eddb0f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_ce89ba41e9cd2611f9df1987b94554a1d050373952bac7feddf8cba9cee0d4ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce89ba41e9cd2611f9df1987b94554a1d050373952bac7feddf8cba9cee0d4ab->enter($__internal_ce89ba41e9cd2611f9df1987b94554a1d050373952bac7feddf8cba9cee0d4ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_864630497eaedae0b82b40d800db828eded8985d5552671bef550996eddb0f2d->leave($__internal_864630497eaedae0b82b40d800db828eded8985d5552671bef550996eddb0f2d_prof);

        
        $__internal_ce89ba41e9cd2611f9df1987b94554a1d050373952bac7feddf8cba9cee0d4ab->leave($__internal_ce89ba41e9cd2611f9df1987b94554a1d050373952bac7feddf8cba9cee0d4ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
