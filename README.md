![PHP CLI Template](./banner.png)

### Steps to install and check package on local machine
```bash
php phar-composer.phar build . dist
```

```bash
php phar-composer.phar install . php-cli
```

```bash
php-cli
```

### Steps to publish changes of the package
```bash
php phar-composer.phar build . dist
```

```bash
composer update
```

```bash
git push origin master
```

### Steps to install and check using composer
```bash
composer global require gopibabus/php-cli
```

```bash
php-cli
```

### References
[Reference 1](https://blog.damirmiladinov.com/php/building-and-distributing-a-command-line-php-application.html)

[Reference 2](https://blog.jgrossi.com/2013/creating-your-first-composer-packagist-package/)

> **NOTE**: Update phar-composer.phar regularly!!
