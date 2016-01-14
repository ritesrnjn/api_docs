What is it?
-----------
This is an alternate to swagger editor and swagger-ui, to create api documentation. Instead of writing yaml codes,
all you have to do is to fill a simple CRUD form.

How to use?
-----------

1. Pull dependencies
        composer update

2. Update Configuration file -
        http://your-domain/api_docs/generator/config/config.php

3. Migrate the database tables -
        http://your-domain/api_docs/generator/api_docs/generator/migrate

4.  Optional: Seed the tables -
        http://your-domain/api_docs/generator/seed

5. Create Json file -
        http://your-domain/api_docs/generator/makejson

6. Add url to swagger-ui component -
        http://your-domain/api_docs/public/index.html:35

7. open documentation url -
        http://your-domain/api_docs/public

Built using
-----------
1. swagger-ui
2. illuminate/database
3. php mini framework
