<?php

/* clients/show.html.twig */
class __TwigTemplate_07b9baa88510bb25df03ac4c1c30e84a33cf3759fb37c940b65544a93240d3ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "clients/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b455bc38e1611ce0f2b6d8026a6afbc7328489019d12c8549861bbbb20f19770 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b455bc38e1611ce0f2b6d8026a6afbc7328489019d12c8549861bbbb20f19770->enter($__internal_b455bc38e1611ce0f2b6d8026a6afbc7328489019d12c8549861bbbb20f19770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/show.html.twig"));

        $__internal_eedbe61ececc160fb5cccc06991e4e9e8cdfce5cbe99e4e8ac6db980a0a30d8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eedbe61ececc160fb5cccc06991e4e9e8cdfce5cbe99e4e8ac6db980a0a30d8e->enter($__internal_eedbe61ececc160fb5cccc06991e4e9e8cdfce5cbe99e4e8ac6db980a0a30d8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "clients/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b455bc38e1611ce0f2b6d8026a6afbc7328489019d12c8549861bbbb20f19770->leave($__internal_b455bc38e1611ce0f2b6d8026a6afbc7328489019d12c8549861bbbb20f19770_prof);

        
        $__internal_eedbe61ececc160fb5cccc06991e4e9e8cdfce5cbe99e4e8ac6db980a0a30d8e->leave($__internal_eedbe61ececc160fb5cccc06991e4e9e8cdfce5cbe99e4e8ac6db980a0a30d8e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2c39f6559af59176be822e7c7b3f0292392c0d4e15b3fbd00c77281596ac65ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c39f6559af59176be822e7c7b3f0292392c0d4e15b3fbd00c77281596ac65ac->enter($__internal_2c39f6559af59176be822e7c7b3f0292392c0d4e15b3fbd00c77281596ac65ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0359a433ecc65af84238f8bbf895ca085591bbad6f14ca181ac645c7f56e7311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0359a433ecc65af84238f8bbf895ca085591bbad6f14ca181ac645c7f56e7311->enter($__internal_0359a433ecc65af84238f8bbf895ca085591bbad6f14ca181ac645c7f56e7311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nombre", array()), "html", null, true);
        
        $__internal_0359a433ecc65af84238f8bbf895ca085591bbad6f14ca181ac645c7f56e7311->leave($__internal_0359a433ecc65af84238f8bbf895ca085591bbad6f14ca181ac645c7f56e7311_prof);

        
        $__internal_2c39f6559af59176be822e7c7b3f0292392c0d4e15b3fbd00c77281596ac65ac->leave($__internal_2c39f6559af59176be822e7c7b3f0292392c0d4e15b3fbd00c77281596ac65ac_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd51c95d5ed09ed7d080fdd9c3afdfe669d7aeed4b33a3799f290298c9c29b15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd51c95d5ed09ed7d080fdd9c3afdfe669d7aeed4b33a3799f290298c9c29b15->enter($__internal_fd51c95d5ed09ed7d080fdd9c3afdfe669d7aeed4b33a3799f290298c9c29b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_66c1750078cfb6a2c2908e572e39a91ba3e27406770add26c03fc7ee3edf123a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c1750078cfb6a2c2908e572e39a91ba3e27406770add26c03fc7ee3edf123a->enter($__internal_66c1750078cfb6a2c2908e572e39a91ba3e27406770add26c03fc7ee3edf123a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
        <h2 class=\"genus-name\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["client"]) ? $context["client"] : $this->getContext($context, "client")), "nombre", array()), "html", null, true);
        echo "</h2>
        ";
        // line 9
        echo "        ";
        // line 10
        echo "                ";
        // line 11
        echo "                ";
        // line 12
        echo "                        ";
        // line 13
        echo "                                ";
        // line 14
        echo "                                ";
        // line 15
        echo "                                ";
        // line 16
        echo "                                ";
        // line 17
        echo "                                ";
        // line 18
        echo "                                ";
        // line 19
        echo "                                ";
        // line 20
        echo "                                ";
        // line 21
        echo "                        ";
        // line 22
        echo "                ";
        // line 23
        echo "        ";
        // line 24
        echo "

";
        
        $__internal_66c1750078cfb6a2c2908e572e39a91ba3e27406770add26c03fc7ee3edf123a->leave($__internal_66c1750078cfb6a2c2908e572e39a91ba3e27406770add26c03fc7ee3edf123a_prof);

        
        $__internal_fd51c95d5ed09ed7d080fdd9c3afdfe669d7aeed4b33a3799f290298c9c29b15->leave($__internal_fd51c95d5ed09ed7d080fdd9c3afdfe669d7aeed4b33a3799f290298c9c29b15_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b27a6567a114f4f0bab5f91e0335b79b8ff1ca903c2b1b255b94f86558fbeffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b27a6567a114f4f0bab5f91e0335b79b8ff1ca903c2b1b255b94f86558fbeffb->enter($__internal_b27a6567a114f4f0bab5f91e0335b79b8ff1ca903c2b1b255b94f86558fbeffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_903d541815337e3feb09e41894ce9a9dbba5cf369788850ee4f83a7ca3aeb401 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_903d541815337e3feb09e41894ce9a9dbba5cf369788850ee4f83a7ca3aeb401->enter($__internal_903d541815337e3feb09e41894ce9a9dbba5cf369788850ee4f83a7ca3aeb401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

";
        
        $__internal_903d541815337e3feb09e41894ce9a9dbba5cf369788850ee4f83a7ca3aeb401->leave($__internal_903d541815337e3feb09e41894ce9a9dbba5cf369788850ee4f83a7ca3aeb401_prof);

        
        $__internal_b27a6567a114f4f0bab5f91e0335b79b8ff1ca903c2b1b255b94f86558fbeffb->leave($__internal_b27a6567a114f4f0bab5f91e0335b79b8ff1ca903c2b1b255b94f86558fbeffb_prof);

    }

    public function getTemplateName()
    {
        return "clients/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 30,  118 => 29,  106 => 24,  104 => 23,  102 => 22,  100 => 21,  98 => 20,  96 => 19,  94 => 18,  92 => 17,  90 => 16,  88 => 15,  86 => 14,  84 => 13,  82 => 12,  80 => 11,  78 => 10,  76 => 9,  72 => 7,  69 => 6,  60 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}{{ client.nombre }}{% endblock %}

{% block body %}

        <h2 class=\"genus-name\">{{ client.nombre }}</h2>
        {##}
        {#<div class=\"sea-creature-container\">#}
                {#<div class=\"genus-photo\"></div>#}
                {#<div class=\"genus-details\">#}
                        {#<dl class=\"genus-details-list\">#}
                                {#<dt>Subfamily:</dt>#}
                                {#<dd>{{ genus.subFamily }}</dd>#}
                                {#<dt>Known Species:</dt>#}
                                {#<dd>{{ genus.speciesCount|number_format }}</dd>#}
                                {#<dt>Fun Fact:</dt>#}
                                {#<dd>{{ genus.funFact }}</dd>#}
                                {#<dt>Recent Notes</dt>#}
                                {#<dd>{{ recentNoteCount }}</dd>#}
                        {#</dl>#}
                {#</div>#}
        {#</div>#}


{% endblock %}


{% block javascripts %}
        {{ parent() }}

{% endblock %}", "clients/show.html.twig", "/vagrant/crm-web/app/Resources/views/clients/show.html.twig");
    }
}
