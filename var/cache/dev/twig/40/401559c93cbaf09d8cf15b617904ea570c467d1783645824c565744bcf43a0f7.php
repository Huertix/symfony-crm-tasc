<?php

/* base.html.twig */
class __TwigTemplate_cecfbd0e262d5cd8b3afee44f1458e7b50e07f20607bd3d4ba7e7eae0d88506c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8824f9077be349fec1a49cbe3bcb9cb3bbedafd3d54ca0be1794a29f16e29c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8824f9077be349fec1a49cbe3bcb9cb3bbedafd3d54ca0be1794a29f16e29c7->enter($__internal_d8824f9077be349fec1a49cbe3bcb9cb3bbedafd3d54ca0be1794a29f16e29c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_17daa6908eee9a6095366039fbba796eacb7d5112349828c146ef17b08334e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17daa6908eee9a6095366039fbba796eacb7d5112349828c146ef17b08334e58->enter($__internal_17daa6908eee9a6095366039fbba796eacb7d5112349828c146ef17b08334e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>

    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.gif"), "html", null, true);
        echo "\" height=40 width=90></a>
            </div>
            <div id=\"navbar\" class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\"><span class=\"glyphicon glyphicon-home\"
                                                                  aria-hidden=\"true\"></span> Inicio</a></li>
                    <li><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("clients_list");
        echo "\">
                            <span class=\"glyphicon glyphicon-info-sign\"
                                  aria-hidden=\"true\"></span> Clientes</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                           role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span>
                            Articulos <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\">Lista</a></li>
                            <li><a href=\"#\">Nuevo</a></li>
                            <li><a href=\"#\">Modificar</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li class=\"dropdown-header\">Specials</li>
                            <li><a href=\"#\">Borrar</a></li>
                        </ul>
                    </li>
                    <li ><a href=\"#\"><span class=\"glyphicon glyphicon-envelope\"
                                                        aria-hidden=\"true\"></span> Ayuda</a></li>
                </ul>

                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a id=\"loginModalTrigger\">
                            <span class=\"glyphicon glyphicon-log-in\"></span> Login
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div = id=\"loginModal\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <!-- Modal Content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\">Login </h4>
            </div>
            <div class=\"modal-body\">
                <form class=\"form-inline\"  >

                    <div class=\"form-group\">
                        <label for=\"email\" class=\"sr-only  control-label\">Last Name</label>
                        <div>
                            <input type=\"text\" class=\"form-control input-sm\" id=\"email\" name=\"email\" placeholder=\"Email\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\" class=\"sr-only control-label\">password</label>
                        <div>
                            <input type=\"password\" class=\"form-control input-sm\" id=\"password\" name=\"password\" placeholder=\"Password\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"checkbox\">
                            <label class=\"checkbox-inline\" >
                                <input type=\"checkbox\" name=\"remember\" value=\"\">
                                <strong> Remember me </strong>
                            </label>
                        </div>
                    </div>
                    <button type=\"button\" class=\"btn btn-info btn-sm\">Sign in</button>
                    <button type=\"button\" class=\"btn btn-default btn-sm\" data-dismiss=\"modal\">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    </div>

    <div class=\"main-content\">
        ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 107
            echo "            <div class=\"alert alert-success\">
                ";
            // line 108
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "
        ";
        // line 112
        $this->displayBlock('body', $context, $blocks);
        // line 114
        echo "    </div>

    <div class=\"footer\">
        footer
    </div>

    ";
        // line 120
        $this->displayBlock('javascripts', $context, $blocks);
        // line 133
        echo "</body>
</html>
";
        
        $__internal_d8824f9077be349fec1a49cbe3bcb9cb3bbedafd3d54ca0be1794a29f16e29c7->leave($__internal_d8824f9077be349fec1a49cbe3bcb9cb3bbedafd3d54ca0be1794a29f16e29c7_prof);

        
        $__internal_17daa6908eee9a6095366039fbba796eacb7d5112349828c146ef17b08334e58->leave($__internal_17daa6908eee9a6095366039fbba796eacb7d5112349828c146ef17b08334e58_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9375a7d3008f46d8cf43762e5053a26a7bc00b8e26468fb41959ef1fa1bc69bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9375a7d3008f46d8cf43762e5053a26a7bc00b8e26468fb41959ef1fa1bc69bc->enter($__internal_9375a7d3008f46d8cf43762e5053a26a7bc00b8e26468fb41959ef1fa1bc69bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fe85ff47184eea9e70b26d38e96afb4b07066f6d4424f8b346cb9c88102fc191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe85ff47184eea9e70b26d38e96afb4b07066f6d4424f8b346cb9c88102fc191->enter($__internal_fe85ff47184eea9e70b26d38e96afb4b07066f6d4424f8b346cb9c88102fc191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CRM TASC";
        
        $__internal_fe85ff47184eea9e70b26d38e96afb4b07066f6d4424f8b346cb9c88102fc191->leave($__internal_fe85ff47184eea9e70b26d38e96afb4b07066f6d4424f8b346cb9c88102fc191_prof);

        
        $__internal_9375a7d3008f46d8cf43762e5053a26a7bc00b8e26468fb41959ef1fa1bc69bc->leave($__internal_9375a7d3008f46d8cf43762e5053a26a7bc00b8e26468fb41959ef1fa1bc69bc_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_50ad62b9937c420b36e0da75a44264950a60b6f9e8919b0b5a74b57af6fe9a3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50ad62b9937c420b36e0da75a44264950a60b6f9e8919b0b5a74b57af6fe9a3e->enter($__internal_50ad62b9937c420b36e0da75a44264950a60b6f9e8919b0b5a74b57af6fe9a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a8b26b09ca4f14ed4e4f394e4483bd6d1a6e9b508dafe417a9629a4fd19d88b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8b26b09ca4f14ed4e4f394e4483bd6d1a6e9b508dafe417a9629a4fd19d88b5->enter($__internal_a8b26b09ca4f14ed4e4f394e4483bd6d1a6e9b508dafe417a9629a4fd19d88b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_a8b26b09ca4f14ed4e4f394e4483bd6d1a6e9b508dafe417a9629a4fd19d88b5->leave($__internal_a8b26b09ca4f14ed4e4f394e4483bd6d1a6e9b508dafe417a9629a4fd19d88b5_prof);

        
        $__internal_50ad62b9937c420b36e0da75a44264950a60b6f9e8919b0b5a74b57af6fe9a3e->leave($__internal_50ad62b9937c420b36e0da75a44264950a60b6f9e8919b0b5a74b57af6fe9a3e_prof);

    }

    // line 112
    public function block_body($context, array $blocks = array())
    {
        $__internal_9085f401ea224217e579627c41d40fbf7bae684ca5040dfa18f3cce8edc8cd7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9085f401ea224217e579627c41d40fbf7bae684ca5040dfa18f3cce8edc8cd7d->enter($__internal_9085f401ea224217e579627c41d40fbf7bae684ca5040dfa18f3cce8edc8cd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a82c5599d8f6b92cc1649de4abfd4d29fa4bfbed3c96f0522df0987657ac288d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a82c5599d8f6b92cc1649de4abfd4d29fa4bfbed3c96f0522df0987657ac288d->enter($__internal_a82c5599d8f6b92cc1649de4abfd4d29fa4bfbed3c96f0522df0987657ac288d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 113
        echo "        ";
        
        $__internal_a82c5599d8f6b92cc1649de4abfd4d29fa4bfbed3c96f0522df0987657ac288d->leave($__internal_a82c5599d8f6b92cc1649de4abfd4d29fa4bfbed3c96f0522df0987657ac288d_prof);

        
        $__internal_9085f401ea224217e579627c41d40fbf7bae684ca5040dfa18f3cce8edc8cd7d->leave($__internal_9085f401ea224217e579627c41d40fbf7bae684ca5040dfa18f3cce8edc8cd7d_prof);

    }

    // line 120
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_377e20d1898f17ac0e124e2d368ae9eff56a44dc0d96de06ab1d1815460e902f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_377e20d1898f17ac0e124e2d368ae9eff56a44dc0d96de06ab1d1815460e902f->enter($__internal_377e20d1898f17ac0e124e2d368ae9eff56a44dc0d96de06ab1d1815460e902f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5266764c7f4f57433f5c6a4d82fee830555bb3e1046959043cff31ed135a2370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5266764c7f4f57433f5c6a4d82fee830555bb3e1046959043cff31ed135a2370->enter($__internal_5266764c7f4f57433f5c6a4d82fee830555bb3e1046959043cff31ed135a2370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 121
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
        <script >
            \$(document).ready(function(){
                \$('#loginModalTrigger').click(function() {
                    \$('#loginModal').modal();
                });
            });
        </script>

    ";
        
        $__internal_5266764c7f4f57433f5c6a4d82fee830555bb3e1046959043cff31ed135a2370->leave($__internal_5266764c7f4f57433f5c6a4d82fee830555bb3e1046959043cff31ed135a2370_prof);

        
        $__internal_377e20d1898f17ac0e124e2d368ae9eff56a44dc0d96de06ab1d1815460e902f->leave($__internal_377e20d1898f17ac0e124e2d368ae9eff56a44dc0d96de06ab1d1815460e902f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 123,  275 => 122,  270 => 121,  261 => 120,  251 => 113,  242 => 112,  230 => 12,  226 => 11,  221 => 10,  212 => 9,  194 => 7,  182 => 133,  180 => 120,  172 => 114,  170 => 112,  167 => 111,  158 => 108,  155 => 107,  151 => 106,  75 => 33,  70 => 31,  61 => 27,  44 => 14,  42 => 9,  37 => 7,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>{% block title %}CRM TASC{% endblock %}</title>

    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
        <link rel=\"stylesheet\" href=\"{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>

    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\"><img src=\"{{ asset('images/logo.gif') }}\" height=40 width=90></a>
            </div>
            <div id=\"navbar\" class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"{{ path('homepage') }}\"><span class=\"glyphicon glyphicon-home\"
                                                                  aria-hidden=\"true\"></span> Inicio</a></li>
                    <li><a href=\"{{ path('clients_list') }}\">
                            <span class=\"glyphicon glyphicon-info-sign\"
                                  aria-hidden=\"true\"></span> Clientes</a></li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"
                           role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <span class=\"glyphicon glyphicon-list-alt\" aria-hidden=\"true\"></span>
                            Articulos <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\">Lista</a></li>
                            <li><a href=\"#\">Nuevo</a></li>
                            <li><a href=\"#\">Modificar</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li class=\"dropdown-header\">Specials</li>
                            <li><a href=\"#\">Borrar</a></li>
                        </ul>
                    </li>
                    <li ><a href=\"#\"><span class=\"glyphicon glyphicon-envelope\"
                                                        aria-hidden=\"true\"></span> Ayuda</a></li>
                </ul>

                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a id=\"loginModalTrigger\">
                            <span class=\"glyphicon glyphicon-log-in\"></span> Login
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div = id=\"loginModal\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\" role=\"document\">
        <!-- Modal Content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                <h4 class=\"modal-title\">Login </h4>
            </div>
            <div class=\"modal-body\">
                <form class=\"form-inline\"  >

                    <div class=\"form-group\">
                        <label for=\"email\" class=\"sr-only  control-label\">Last Name</label>
                        <div>
                            <input type=\"text\" class=\"form-control input-sm\" id=\"email\" name=\"email\" placeholder=\"Email\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\" class=\"sr-only control-label\">password</label>
                        <div>
                            <input type=\"password\" class=\"form-control input-sm\" id=\"password\" name=\"password\" placeholder=\"Password\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"checkbox\">
                            <label class=\"checkbox-inline\" >
                                <input type=\"checkbox\" name=\"remember\" value=\"\">
                                <strong> Remember me </strong>
                            </label>
                        </div>
                    </div>
                    <button type=\"button\" class=\"btn btn-info btn-sm\">Sign in</button>
                    <button type=\"button\" class=\"btn btn-default btn-sm\" data-dismiss=\"modal\">Cancel</button>
                </form>
            </div>
        </div>
    </div>
    </div>

    <div class=\"main-content\">
        {% for msg in app.session.flashBag.get('success') %}
            <div class=\"alert alert-success\">
                {{ msg }}
            </div>
        {% endfor %}

        {% block body %}
        {% endblock %}
    </div>

    <div class=\"footer\">
        footer
    </div>

    {% block javascripts %}
        <script src=\"{{ asset('vendor/jquery/dist/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('vendor/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('js/main.js') }}\"></script>
        <script >
            \$(document).ready(function(){
                \$('#loginModalTrigger').click(function() {
                    \$('#loginModal').modal();
                });
            });
        </script>

    {% endblock %}
</body>
</html>
", "base.html.twig", "/vagrant/crm-web/app/Resources/views/base.html.twig");
    }
}
