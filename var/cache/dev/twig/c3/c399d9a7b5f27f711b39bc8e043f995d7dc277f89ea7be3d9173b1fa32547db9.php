<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_d048803ae7090ed541e4a46aec0b0a194188f1483838a76e4afa839e4b6951f5 extends Twig_Template
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
        $__internal_bfdb56613d0c19ff35857aad212aa48b16f6ffc4e6ba1344612ff866b2edd82d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfdb56613d0c19ff35857aad212aa48b16f6ffc4e6ba1344612ff866b2edd82d->enter($__internal_bfdb56613d0c19ff35857aad212aa48b16f6ffc4e6ba1344612ff866b2edd82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_1d8de50bcbcf067c2ce391daa59b42307840c93c5a065c8e3986b388db1b22a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d8de50bcbcf067c2ce391daa59b42307840c93c5a065c8e3986b388db1b22a7->enter($__internal_1d8de50bcbcf067c2ce391daa59b42307840c93c5a065c8e3986b388db1b22a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_bfdb56613d0c19ff35857aad212aa48b16f6ffc4e6ba1344612ff866b2edd82d->leave($__internal_bfdb56613d0c19ff35857aad212aa48b16f6ffc4e6ba1344612ff866b2edd82d_prof);

        
        $__internal_1d8de50bcbcf067c2ce391daa59b42307840c93c5a065c8e3986b388db1b22a7->leave($__internal_1d8de50bcbcf067c2ce391daa59b42307840c93c5a065c8e3986b388db1b22a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
