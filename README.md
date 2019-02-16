# Whoops
[READ ONLY] Subtree split of the Zest Whoop component (see https://github.com/zestframework/Zest_Framework)


## usage
Whoops is a PHP library for handling exceptions and errors.

## Requirement
- PHP
- Composer

## Features
- Flexible, stack-based error handling.
- Stand-alone library with (currently) no required dependencies.
- Highlight the error line with red color.
- Show preview code in browser.
- Clean, well-structured & tested code-base.
-   Includes the ability to  [open referenced files directly in your editor and IDE](#open-files-in-an-editor)

## Insallation
Installing this package is very simple, first ensure you have the right PHP version and composer installed then in your terminal/(command prompt) run: 
```composer require zest/whoops```

Register the handler in your code
```php
<?php
$whoops = new Whoops();
```

## usage
Example:
```php
<?php 
use Zest\Whoops;
require '../vendor/autoload.php';
$whoops = new Whoops();
$a = 10;
echo "The value of a is ".valueOfA();

/*Rest of code*/
echo "This is rest of code";
```

## Output

![image](https://raw.githubusercontent.com/zest-framework/Whoops/cca3c4277523797ad75ff6d9f053dc26290f6151/image/error.png)
![image](https://raw.githubusercontent.com/zest-framework/Whoops/cca3c4277523797ad75ff6d9f053dc26290f6151/image/error1.png)

## Open Files In An Editor
Whoops comes with the ability to open referenced files directly in your IDE or editor. This feature only works in case your php-source files are locally accessible to the machine on which the editor is installed.
```php
<?php
$whoops = new Whoops();
$whoops->setEditor('sublime');
//Rest of code....
```
The following editors are currently supported by default.

- ``sublime`` Sublime editor 

Append your own/custom editor
```php
<?php
$whoops = new Whoops();
$whoops->appendEditor("myeditor" , "myeditor://open?url=file://::file&line=::line",)
```
## TODO

- [x] Bootstrap 4 ready.	 
- [x]   Includes the ability to  open referenced files directly in your editor and IDE]
- [ ]  Should add more IDE\Editor support.
- [ ] Add new feature to show Enviroment details.
