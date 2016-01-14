# Swagger Docs


## What is swagger docs?
This is an alternate to swagger editor and swagger-ui, to create api documentation. Instead of writing yaml codes,
all you have to do is to fill a simple CRUD form.


## Requirements

  - PHP 5.3+
  - MySQL
  - mod_rewrite activated


## Installation
Pull dependencies using composer

```
composer update
```


## Use
1. Update Configuration file at ```api_doc/generator/config/config.php```
    ```php
    define('DB_DRIVER', 'mysql');
    define('DB_HOST', '127.0.0.1');
    define('DB_NAME', 'api_docs');
    define('DB_USER', 'root');
    define('DB_PASS', 'root');
    ```

2. Migrate the database tables
    ```
    example.com/api_docs/generator/migrate
    ```

3. *Optional:* Seed the tables
    ```
    example.com/api_docs/generator/seed
    ```

4. Generate JSON file
    ```
    example.com/api_docs/generator/makejson
    ```

6. Add url to swagger-ui component ```api_docs/public/index.html Line:35```
    ```javascript
    $(function () {
          var url = window.location.search.match(/url=([^&]+)/);
          if (url && url.length > 1) {
            url = decodeURIComponent(url[1]);
          } else {
    		url = "http://your-domain/api_docs/generator/storage/appx.json";
          }
    ```
7. All done!
    * To add/update/delete api routes, browse: ```example.com/api_docs/generator```
    * To view/test api routes, browse: ``` example.com/api_docs/public```


## Built using
1. [swagger-ui](https://github.com/swagger-api/swagger-ui)
2. [illuminate/database](https://github.com/illuminate/database)
3. [mini](https://github.com/panique/mini)
