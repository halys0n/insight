composer require maatwebsite/excel
php artisan db:seed --class=SalaSeeder
php artisan db:seed --class=DadoSeeder


TO TEST THE CSV READER
in your url
/import-form
select relatorio.csv in \database\csv\relatorio.csv
and go to /import-show in your url.
