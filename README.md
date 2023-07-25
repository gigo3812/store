# Store Project
    laravel : 8.45
    node : 16.14.2

## Installation
clone the repository and follow the instructions : 
```s
- git clone git@github.com:gigo3812/store.git
- cp .env.example .env
- config the .env as your creditionals
- composer install
- yarn //just in development mode
- php artisan key:generate
- php artisan storage:link
- php artisan migrate --seed
- all done.
```
the default user name and passwords  :
```s
09157915935 pass: xxxx     --admin
09351629286 pass: 123456789     --manage
09157204871 pass: 123456789     --user
```
## Development Guid
get last changes for breads , menues and ...
```
php artisan iseed data_types,data_rows,menus,menu_items,permissions,users,roles,user_roles,permission_role,settings,posts,categories,products,carts,cart_product --force
```