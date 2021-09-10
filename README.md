# Laravel Package Skeleton

After clone this package, you can replace in all files content `Skeleton` with
your Custom NameSpace.

sample:

```bash
find {src,tests,database,config,stubs,composer.json} -type f -exec sed -I '' 's/Skeleton/CustomPackage/g' {} \;
find {src,tests,database,config.stubs,composer.json} -type f -exec sed -I '' 's/skeleton/custom_package/g' {} \;
mv src/SkeletonServiceProvider.php src/CustomPackageServiceProvider.php
composer dump
./vendor/bin/phpunit
```
