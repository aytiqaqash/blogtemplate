## Homestead və hosts ayarlarlaması
 Hosts:
  - 192.168.10.10 voyager.local
  
  Homestead: 
  ---
    ip: "192.168.10.10"
    memory: 2048
    cpus: 2
    provider: virtualbox

    authorize: ~/.ssh/id_rsa.pub

    keys:
        - ~/.ssh/id_rsa

    folders:
        - map: e:/Sites/Code
           to: /home/vagrant/code

    sites:
    - map: voyager.local
       to: /home/vagrant/code/voyager.local/public

    databases:
        - blog

    features:
        - mysql: true
        - mariadb: false
        - postgresql: false
        - ohmyzsh: false
        - webdriver: false


## Install etmə qaydası 

- git clone https://github.com/aytiqaqash/blogtemplate.git voyager.local
- composer install
- config .env
- php artisan key:generate
- php artisan voyager:install --with-dummy

## Admin Panelə baxmaq üçün

link: voyager.local/admin
user: admin@admin.com
password: password

P.S. İnstall etmə qaydasını daha aydın vəziyyətə gətirəcəm.
