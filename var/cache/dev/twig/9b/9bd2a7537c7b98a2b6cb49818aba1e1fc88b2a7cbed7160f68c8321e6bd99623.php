<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* cart/index.html.twig */
class __TwigTemplate_634090b6d5e27c29b6cd448aba80c78db8135a5e0e716a907de6eae1ee39d954 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 3
        $this->displayBlock('title', $context, $blocks);
        // line 4
        echo "    <nav class=\"navbar navbar-dark bg-dark sticky-top\">
        ";
        // line 6
        echo "        <div class=\"navbar-nav\">
            <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        echo "\" class=\"btn btn-light\">
                Cart
            </a>
        </div>
    </nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Cart";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo " <div class=\"container mt-4\">
        <h1>Your Cart</h1>
        ";
        // line 16
        if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 16, $this->source); })()), "items", [], "any", false, false, false, 16), "count", [], "any", false, false, false, 16), 0))) {
            // line 17
            echo "            <div class=\"row mt-4\">
                <div class=\"col-md-8\">
    ";
            // line 19
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start');
            echo "
    <div class=\"card\">
        <div class=\"card-header bg-dark text-white d-flex\">
            <h5>Items</h5>
            <div class=\"ml-auto\">
                ";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "save", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "btn btn-warning"]]);
            echo "
                ";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "clear", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "btn btn-light"]]);
            echo "
            </div>
        </div>
        <ul class=\"list-group list-group-flush\">
            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "items", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 30
                echo "                <li class=\"list-group-item d-flex\">
                    <div class=\"flex-fill mr-2\">
                        <img src=\"https://via.placeholder.com/200x150\" width=\"64\" alt=\"Product image\">
                    </div>
                    <div class=\"flex-fill mr-2\">
                        <h5 class=\"mt-0 mb-0\">";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 35), "data", [], "any", false, false, false, 35), "product", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
                echo "</h5>
                        <small>";
                // line 36
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 36), "data", [], "any", false, false, false, 36), "product", [], "any", false, false, false, 36), "description", [], "any", false, false, false, 36), 0, 50), "html", null, true);
                echo "...</small>
                        <div class=\"form-inline mt-2\">
                            <div class=\"form-group mb-0 mr-2\">
                                ";
                // line 39
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => ("form-control form-control-sm " . ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 41
$context["item"], "quantity", [], "any", false, false, false, 41), "vars", [], "any", false, false, false, 41), "valid", [], "any", false, false, false, 41)) ? ("") : ("is-invalid")))]]);
                // line 43
                echo "
                                <div class=\"invalid-feedback\">
                                    ";
                // line 45
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 45), 'errors');
                echo "
                                </div>
                            </div>
                            ";
                // line 48
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["item"], "remove", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "btn btn-dark btn-sm"]]);
                echo "
                        </div>
                    </div>
                    <div class=\"flex-fill mr-2 text-right\">
                        <b>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 52), "data", [], "any", false, false, false, 52), "product", [], "any", false, false, false, 52), "price", [], "any", false, false, false, 52), "html", null, true);
                echo " €</b>
                    </div>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "        </ul>
    </div>
    ";
            // line 58
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_end', ["render_rest" => false]);
            echo "
</div>
                <div class=\"col-md-8\"></div>
                <div class=\"col-md-4\">
    <div class=\"card mt-4 mt-md-0\">
        <h5 class=\"card-header bg-dark text-white\">Summary</h5>
        <ul class=\"list-group list-group-flush\">
            <li class=\"list-group-item d-flex justify-content-between\">
                <div><b>Total</b></div>
                <span><b>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 67, $this->source); })()), "total", [], "any", false, false, false, 67), "html", null, true);
            echo " €</b></span>
            </li>
        </ul>
        <div class=\"card-body\">
            <a href=\"#\" class=\"btn btn-warning w-100\">Checkout</a>
        </div>
    </div>
</div>
                <div class=\"col-md-4\"></div>
            </div>
        ";
        } else {
            // line 78
            echo "            <div class=\"alert alert-info\">
                Your cart is empty. Go to the <a href=\"";
            // line 79
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\">product list</a>.
            </div>
        ";
        }
        // line 82
        echo "    </div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 82,  236 => 79,  233 => 78,  219 => 67,  207 => 58,  203 => 56,  193 => 52,  186 => 48,  180 => 45,  176 => 43,  174 => 41,  173 => 39,  167 => 36,  163 => 35,  156 => 30,  152 => 29,  145 => 25,  141 => 24,  133 => 19,  129 => 17,  127 => 16,  123 => 14,  113 => 13,  94 => 3,  78 => 7,  75 => 6,  72 => 4,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block header %}
{% block title %}Cart{% endblock %}
    <nav class=\"navbar navbar-dark bg-dark sticky-top\">
        {# ... #}
        <div class=\"navbar-nav\">
            <a href=\"{{ path('cart') }}\" class=\"btn btn-light\">
                Cart
            </a>
        </div>
    </nav>
{% endblock %}
{% block body %}
 <div class=\"container mt-4\">
        <h1>Your Cart</h1>
        {% if cart.items.count > 0 %}
            <div class=\"row mt-4\">
                <div class=\"col-md-8\">
    {{ form_start(form) }}
    <div class=\"card\">
        <div class=\"card-header bg-dark text-white d-flex\">
            <h5>Items</h5>
            <div class=\"ml-auto\">
                {{ form_widget(form.save, {'attr': {'class': 'btn btn-warning'}}) }}
                {{ form_widget(form.clear, {'attr': {'class': 'btn btn-light'}}) }}
            </div>
        </div>
        <ul class=\"list-group list-group-flush\">
            {% for item in form.items %}
                <li class=\"list-group-item d-flex\">
                    <div class=\"flex-fill mr-2\">
                        <img src=\"https://via.placeholder.com/200x150\" width=\"64\" alt=\"Product image\">
                    </div>
                    <div class=\"flex-fill mr-2\">
                        <h5 class=\"mt-0 mb-0\">{{ item.vars.data.product.name }}</h5>
                        <small>{{ item.vars.data.product.description[:50] }}...</small>
                        <div class=\"form-inline mt-2\">
                            <div class=\"form-group mb-0 mr-2\">
                                {{ form_widget(item.quantity, {
                                    'attr': {
                                        'class': 'form-control form-control-sm ' ~ (item.quantity.vars.valid ? '' : 'is-invalid')
                                    }
                                }) }}
                                <div class=\"invalid-feedback\">
                                    {{ form_errors(item.quantity) }}
                                </div>
                            </div>
                            {{ form_widget(item.remove, {'attr': {'class': 'btn btn-dark btn-sm'}}) }}
                        </div>
                    </div>
                    <div class=\"flex-fill mr-2 text-right\">
                        <b>{{ item.vars.data.product.price }} €</b>
                    </div>
                </li>
            {% endfor %}
        </ul>
    </div>
    {{ form_end(form, {'render_rest': false}) }}
</div>
                <div class=\"col-md-8\"></div>
                <div class=\"col-md-4\">
    <div class=\"card mt-4 mt-md-0\">
        <h5 class=\"card-header bg-dark text-white\">Summary</h5>
        <ul class=\"list-group list-group-flush\">
            <li class=\"list-group-item d-flex justify-content-between\">
                <div><b>Total</b></div>
                <span><b>{{ cart.total }} €</b></span>
            </li>
        </ul>
        <div class=\"card-body\">
            <a href=\"#\" class=\"btn btn-warning w-100\">Checkout</a>
        </div>
    </div>
</div>
                <div class=\"col-md-4\"></div>
            </div>
        {% else %}
            <div class=\"alert alert-info\">
                Your cart is empty. Go to the <a href=\"{{ path('home') }}\">product list</a>.
            </div>
        {% endif %}
    </div>
    
{% endblock %}
", "cart/index.html.twig", "/home/msi/symfonyEcommerceSite-/templates/cart/index.html.twig");
    }
}
