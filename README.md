<div align="center">
<a href="https://cds.zcu.cz">
  <img src="https://cds.zcu.cz/images/logo.svg" width="200">
</a>
</div>

# PHP Code Style

This repository contains the PHP CS Fixer coding style rules for CDS team PHP projects.

Use the `\Cds\PhpCodeStyle\rules()` function to get all rules as an array. 
You can pass additional rules to extend the set, or override existing ones as needed. 

The rules are also available via the `\Cds\PhpCodeStyle\Rules` constant.

### Usage

```php
# .php-cs-fixer.dist.php
<?php

$finder = PhpCsFixer\Finder::create()
    ->ignoreUnreadableDirs()
    ->exclude('db')
    ->exclude('log')
    ->exclude('temp')
    ->in(__DIR__)
;

return (new PhpCsFixer\Config())
    ->setRules(\Cds\PhpCodeStyle\rules())
    ->setFinder($finder)
;

```
