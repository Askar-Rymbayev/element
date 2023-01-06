<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/Helpers.php';

interface TemplateInterface
{
    public function setVariable($name, $value);
    public function getHtml():string;
}

abstract class BaseTemplateClass implements TemplateInterface
{
    protected array $vars;
    protected string $html = '';

    public function __construct($html)
    {
        $this->html = $html;
        $this->vars = [];
    }

    public function setVariable($name, $value)
    {
        $this->vars[$name] = $value;
    }
}

class Twig extends BaseTemplateClass implements TemplateInterface
{
    public function getHtml(): string
    {
        foreach ($this->vars as $name => $value) {
            $this->html = str_replace('{'. $name .'}', $value, $this->html);
        }

        return $this->html;
    }
}

class Blade extends BaseTemplateClass implements TemplateInterface
{
    public function getHtml(): string
    {
        foreach ($this->vars as $name => $value) {
            $this->html = str_replace('{{' . $name . '}}', $value, $this->html);
        }

        return $this->html;
    }
}

$bladeHtml = '<ul>
<li>{{firstItem}}</li>
<li>{{secondItem}}</li>
<li>{{thirdItem}}</li>
</ul>';
$blade = new Blade($bladeHtml);
$blade->setVariable('firstItem', 'Австралия');
$blade->setVariable('secondItem', 'Америка');
$blade->setVariable('thirdItem', 'Пакистан');

$twigHtml = '<ul>
<li>{itemOne}</li>
<li>{itemTwo}</li>
<li>{itemThree}</li>
</ul>';
$twig = new Twig($twigHtml);
$twig->setVariable('itemOne', 'Картошка');
$twig->setVariable('itemTwo', 'Помидор');
$twig->setVariable('itemThree', 'Огурец');

//echo $blade->getHtml();
//echo $twig->getHtml();

/*

config/template.php

[
    'tpl' => 'blade' //twig
]

-------------

index.blade.php

<ul>
<li>{{firstItem}}</li>
<li>{{secondItem}}</li>
<li>{{thirdItem}}</li>
</ul>

[
    'itemOne' => 'Картошка',
    'itemTwo' => 'Помидор',
    'itemThree' => 'Огурец',
]

*/

class PDF
{
    protected TemplateInterface $template;
    public function __construct(TemplateInterface $template)
    {
        $this->template = $template;
    }

    function createPdf()
    {
        pre($this->template->getHtml());
    }
}

$pdf = new PDF($twig);
$pdf->createPdf();