# FontAwesome CakePHP Plugin

Create FontAwesome icons with a CakePHP helper

NB! FontAwesome scripts not included in plugin. You can use FontAwesome kits without downloading assets. See further down.

## Version map:
| Plugin | Branch | Cake | PHP |
|--------| ------ | --- | --- |
| 2.x    | main | 5.x | ^8.1 |
| 1.x    | 1.x | 4.x | ^7.4 \| ^8.0 |

## Supports these Fonts:
* Solid
* Regular
* Light
* Thin
* Duo
* Brand
* Sharp * through passing fa-sharp to class option

## Installation
`composer require avolle/cakephp-font-awesome`

## Usage

Add FontAwe helper to your AppView (`src/View/AppView.php`)
```php
/**
 * Application View
 *
 * @property \Avolle\FontAwesome\View\Helper\FontAweHelper $FontAwe
 */
class AppView extends View
{
    public function initialize(): void
    {
        $this->loadHelper('Avolle/FontAwesome.FontAwe');
    }
}
```

Icons with title (optional)
```php
echo $this->FontAwe->solid('receipt'); // <i class="fas fa-receipt"></i>
echo $this->FontAwe->regular('receipt', 'Title'); // <i class="far fa-receipt"></i> Title
echo $this->FontAwe->light('receipt'); // <i class="fal fa-receipt"></i>
echo $this->FontAwe->duo('receipt'); // <i class="fad fa-receipt"></i>
echo $this->FontAwe->brand('github'); // <i class="fab fa-github"></i>
echo $this->FontAwe->thin('receipt'); // <i class="fat fa-receipt"></i>

```

Alternatively: Icons with title (optional)
```php
echo $this->FontAwe->icon('fas', 'receipt'); // <i class="fas fa-receipt"></i>
echo $this->FontAwe->icon('far', 'receipt', 'Title'); // <i class="far fa-receipt"></i> Title
echo $this->FontAwe->icon('fal', 'receipt'); // <i class="fal fa-receipt"></i>
echo $this->FontAwe->icon('fad', 'receipt'); // <i class="fad fa-receipt"></i>
echo $this->FontAwe->icon('fab', 'github'); // <i class="fab fa-github"></i>
echo $this->FontAwe->icon('fat', 'receipt'); // <i class="fat fa-receipt"></i>

echo $this->FontAwe->icon(FontAweHelper::SOLID, 'receipt'); // <i class="fas fa-receipt"></i>
echo $this->FontAwe->icon(FontAweHelper::REGULAR, 'receipt', 'Title'); // <i class="far fa-receipt"></i> Title
echo $this->FontAwe->icon(FontAweHelper::LIGHT, 'receipt'); // <i class="fal fa-receipt"></i>
echo $this->FontAwe->icon(FontAweHelper::DUO, 'receipt'); // <i class="fad fa-receipt"></i>
echo $this->FontAwe->icon(FontAweHelper::BRAND, 'github'); // <i class="fab fa-github"></i>
echo $this->FontAwe->icon(FontAweHelper::THIN, 'receipt'); // <i class="fat fa-receipt"></i>

```

Links with icon
```php
// Use string urls
echo $this->FontAwe->solidLink('receipt', '/some-url'); // <a href="/some-url"><i class="fas fa-receipt"></i></a>
// Use router urls
echo $this->FontAwe->regularLink('receipt', ['controller' => 'Icons', 'action' => 'index']); // <a href="/icons"><i class="far fa-receipt"></i></a>
// Add a title after the icon
echo $this->FontAwe->lightLink('receipt', '/some-url/', 'Icons'); // <a href="/some-url"><i class="fal fa-receipt"></i> Icons</a>
// Add a class to the icon (not anchor element)
echo $this->FontAwe->duoLink('receipt', '/some-url/', 'Icons', ['icon' => ['class' => 'text-success']]); // <a href="/some-url"><i class="fad fa-receipt text-success"></i> Icons</a>
```

Using the sharp styling
```php
// Icon
echo $this->FontAwe->solid('receipt', null, ['class' => 'fa-sharp']); // <i class="fas fa-receipt fa-sharp"></i>
// Link
echo $this->FontAwe->solidLink('receipt', '/some-url/', null, ['icon' => ['class' => 'fa-sharp']]); // <a href="/some-url"><i class="fas fa-receipt fa-sharp"></i></a>
```

Load a FontAwesome kit script
```php
echo $this->FontAwe->scriptKit('3247824fdhufhd'); //<script src="https://kit.fontawesome.com/3247824fdhufhd.js" crossorigin="anonymous"></script>
```

Load a FontAwesome script (not a kit, but either downloaded or CDN)
```php
echo $this->FontAwe->script(); //<script src="/js/all.js"></script>
echo $this->FontAwe->script('font-awesome'); //<script src="/js/font-awesome.js"></script>
echo $this->FontAwe->script('all', 'font-awesome/'); //<script src="/js/font-awesome/all.js"></script>
```
