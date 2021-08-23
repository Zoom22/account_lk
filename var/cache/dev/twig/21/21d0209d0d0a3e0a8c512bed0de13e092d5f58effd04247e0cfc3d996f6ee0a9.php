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

/* index.html.twig */
class __TwigTemplate_bb51047e4e6a1003fe6b52aa5e20738f4fe7b6aa0ff6d8b9009cd15ac7a11e5e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <main>

        <h2 class=\"display-6 text-center mb-4\">Подключенные услуги</h2>

        <div class=\"table-responsive\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th scope=\"col\">Услуга</th>
                    <th scope=\"col\">Ед. измерения</th>
                    <th scope=\"col\">Цена за ед.</th>
                    <th scope=\"col\">Количество</th>
                    <th scope=\"col\">Цена</th>
                    <th scope=\"col\">Действия</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope=\"row\">Вывоз мусора</th>
                    <td>Человек</td>
                    <td>100 руб.</td>
                    <td>2</td>
                    <td>200 руб.</td>
                    <td>
                        <button type=\"button\" class=\"btn btn-primary btn-sm\">Отключить</button>
                    </td>
                </tr>
                <tr>
                    <th scope=\"row\">Лифт</th>
                    <td>Этаж</td>
                    <td>20 руб.</td>
                    <td>8</td>
                    <td>160 руб.</td>
                    <td>
                        <button type=\"button\" class=\"btn btn-primary btn-sm\">Отключить</button>
                    </td>
                </tr>
                <tr>
                    <th scope=\"row\">Домофон</th>
                    <td>Квартира</td>
                    <td>150 руб.</td>
                    <td>1</td>
                    <td>150 руб.</td>
                    <td>
                        <button type=\"button\" class=\"btn btn-primary btn-sm\">Отключить</button>
                    </td>
                </tr>
                <tr>
                    <th scope=\"row\">Видеонаблюдение</th>
                    <td>Квартира</td>
                    <td>400 руб.</td>
                    <td>1</td>
                    <td>400 руб.</td>
                    <td>
                        <button type=\"button\" class=\"btn btn-primary btn-sm\">Отключить</button>
                    </td>
                </tr>
                <tr>
                    <th scope=\"row\">Горячая вода</th>
                    <td>куб.м.</td>
                    <td>300 руб.</td>
                    <td>10</td>
                    <td>3 000 руб.</td>
                    <td>
                        <button type=\"button\" class=\"btn btn-primary btn-sm\">Отключить</button>
                    </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <th scope=\"row\">Итого:</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <th scope=\"row\">3 910 руб.</th>

                </tr>
                </tfoot>

            </table>
        </div>
    </main>

    <div class=\"d-grid gap-2 col-6 mx-auto\">
        <button class=\"btn btn-success\" type=\"button\">Добавить услуги</button>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <main>

        <h2 class=\"display-6 text-center mb-4\">Подключенные услуги</h2>

        <div class=\"table-responsive\">
            <table class=\"table\">
                <thead>
                <tr>
                    <th scope=\"col\">Услуга</th>
                    <th scope=\"col\">Ед. измерения</th>
                    <th scope=\"col\">Цена за ед.</th>
                    <th scope=\"col\">Количество</th>
                    <th scope=\"col\">Цена</th>
                    <th scope=\"col\">Действия</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope=\"row\">Вывоз мусора</th>
                    <td>Человек</td>
                    <td>100 руб.</td>
                    <td>2</td>
                    <td>200 руб.</td>
                    <td>
                        <button type=\"button\" class=\"btn btn-primary btn-sm\">Отключить</button>
                    </td>
                </tr>
                <tr>
                    <th scope=\"row\">Лифт</th>
                    <td>Этаж</td>
                    <td>20 руб.</td>
                    <td>8</td>
                    <td>160 руб.</td>
                    <td>
                        <button type=\"button\" class=\"btn btn-primary btn-sm\">Отключить</button>
                    </td>
                </tr>
                <tr>
                    <th scope=\"row\">Домофон</th>
                    <td>Квартира</td>
                    <td>150 руб.</td>
                    <td>1</td>
                    <td>150 руб.</td>
                    <td>
                        <button type=\"button\" class=\"btn btn-primary btn-sm\">Отключить</button>
                    </td>
                </tr>
                <tr>
                    <th scope=\"row\">Видеонаблюдение</th>
                    <td>Квартира</td>
                    <td>400 руб.</td>
                    <td>1</td>
                    <td>400 руб.</td>
                    <td>
                        <button type=\"button\" class=\"btn btn-primary btn-sm\">Отключить</button>
                    </td>
                </tr>
                <tr>
                    <th scope=\"row\">Горячая вода</th>
                    <td>куб.м.</td>
                    <td>300 руб.</td>
                    <td>10</td>
                    <td>3 000 руб.</td>
                    <td>
                        <button type=\"button\" class=\"btn btn-primary btn-sm\">Отключить</button>
                    </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                    <th scope=\"row\">Итого:</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <th scope=\"row\">3 910 руб.</th>

                </tr>
                </tfoot>

            </table>
        </div>
    </main>

    <div class=\"d-grid gap-2 col-6 mx-auto\">
        <button class=\"btn btn-success\" type=\"button\">Добавить услуги</button>
    </div>

{% endblock %}
", "index.html.twig", "/var/www/account/templates/index.html.twig");
    }
}
