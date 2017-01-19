<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4b33586f1a3884fec411e1d47871f9fa47e9bbb94204646152c34b2d3e29d5ee extends Twig_Template
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
        $__internal_f3dd12eaa071f5b7d86cfe22120475062abd5d23673d9aa09e32b6254a5130c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3dd12eaa071f5b7d86cfe22120475062abd5d23673d9aa09e32b6254a5130c3->enter($__internal_f3dd12eaa071f5b7d86cfe22120475062abd5d23673d9aa09e32b6254a5130c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_9127c7ec907b8d56f9926dd4c6a053d4fb6c14c8ad63bec5710ff8afa58b1464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9127c7ec907b8d56f9926dd4c6a053d4fb6c14c8ad63bec5710ff8afa58b1464->enter($__internal_9127c7ec907b8d56f9926dd4c6a053d4fb6c14c8ad63bec5710ff8afa58b1464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f3dd12eaa071f5b7d86cfe22120475062abd5d23673d9aa09e32b6254a5130c3->leave($__internal_f3dd12eaa071f5b7d86cfe22120475062abd5d23673d9aa09e32b6254a5130c3_prof);

        
        $__internal_9127c7ec907b8d56f9926dd4c6a053d4fb6c14c8ad63bec5710ff8afa58b1464->leave($__internal_9127c7ec907b8d56f9926dd4c6a053d4fb6c14c8ad63bec5710ff8afa58b1464_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/vagrant/crm-web/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
