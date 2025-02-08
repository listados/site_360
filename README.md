# ✨ A Empresa
O Site Listados é o site institucional onde é mostrado o que é o o projeto Listados e seus vários produtos, em especial nessa primeira etapa o sistema de tour virtual chamado 360

## 🧭 INSTALAÇÃO

### 🖥️ AMBIENTE DESENVOLVIMENTO
Para ambiente de desenvolvimento a máquina deve ter o php 8.4 e o composer instalado. Ideal seguir e [documentação oficial](https://laravel.com/docs/11.x#sail-on-linux)  do Laravel. Então seguir os seguintes comandos:
- `composer install`
- Criar arquivo .env da seguinte forma `cp .env.example .env`
- ./vendor/bin/sail up
- ./vendor/bin/sail artisan  migrate
- ./vendor/bin/sail artisan  breeze:install
- ./vendor/bin/sail artisan migrate
- ./vendor/bin/sail npm install
- ./vendor/bin/sail npm run dev

###  🚀 AMBIENTE DE PRODUÇÃO
Então seguir os seguintes comandos:
- ./start-prod.sh
- docker exec php_site php artisan  migrate
- docker exec php_site npm run build


Tudo ocorrendo certo, deve acessar na seguinte url: http://localhost:8083/tour
