# laravel new ramesh
# composer install
--install all required libraries from composer (composer.json)

# Json -- txt exe doc xml
-- Json Array []
--Json Object {}

localhost:8000 PORT 80 127.0.0.1

MVC-
Model (app)
View (resources->views)
Controller(app-->http-->controller)

function() /method()--() OOPS\

blade --> template engine html 

aboutusblade.php 
prices.blade.php 

views/pages-->index.blade.php 
views/users-->index.blade.php --user list
views/users-->create.blade.php --create new user
views/users-->edit.blade.php --edit existing user

html ifelse is very difficult in html&php combination so we use blade

blade
@if($user)
<h2>Hi user {{$user->name}}</h2>
@else
<h2>Hi guest </h2>
endif 


push
pull
barnch
merge - make together the changes
master - v1.0.0 
dev - branch


