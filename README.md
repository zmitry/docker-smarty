## DOCKER SMARTY

```
docker build -t smarty-php .
docker run -ti -p 80:80 --rm -v (PWD)/src:/var/www/html/ smarty-php
```
