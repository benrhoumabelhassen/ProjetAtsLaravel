create new DB : erp_rh_data  (Config tell9ahom fi .env )

php artisan migrate 

php artisan db:seed

php artisan serve

localhost:8000/api/v1/employees

localhost:8000/api/v1/employees?include=conge
localhost:8000/api/v1/employees?include=certification
GET:
localhost:8000/api/v1/employees/1?include=certification


YOU CAN NOW perform GET(to read) / POST(to create) / PUT(to update) methods


/*
|--------------------------------------------------------------------------
| API STATISTIQUES
|--------------------------------------------------------------------------
|
| all request starts with api/v1/statistic/

       http://localhost:8000/api/v1/statistic/employee
            
           returns 
                count   : number of elements
                statut  : elements ranged by Job

       http://localhost:8000/api/v1/statistic/certification
       
           returns 
                count   : number of elements
                employee  : elements ranged by employee
                formation  : elements ranged by formation
                year  : elements ranged by year
                month  : elements ranged by month
                week  : elements ranged by week

       http://localhost:8000/api/v1/statistic/formation
       
            returns 
                count   : number of elements
                employee  : elements ranged by employee
                formation  : elements ranged by formation
                titre  : elements ranged by titre
                formateur  : elements ranged by formateur
                dure  : elements ranged by dure
                lieu  : elements ranged by lieu
                year  : elements ranged by year
                month  : elements ranged by month
                week  : elements ranged by week
                
       http://localhost:8000/api/v1/statistic/conge
       
            returns 
                count   : number of elements
                employee  : elements ranged by employee
                certification  : elements ranged by certification ( certified or not )
                type  : elements ranged by type
                debut  
                    year  : elements ranged by  debut year
                    month  : elements ranged by debut month
                    week  : elements ranged by debut week  
                fin  
                    year  : elements ranged by fin year
                    month  : elements ranged by fin month
                    week  : elements ranged by fin week  
                                

       http://localhost:8000/api/v1/statistic/paiement
       
           returns 
                count   : number of elements
                salaire  : elements ranged by salaire
                year  : elements ranged by year
                month  : elements ranged by month
                week  : elements ranged by week
                
       http://localhost:8000/api/v1/statistic/pointage
       
           returns 
                count   : number of elements
                emlpoyee  : elements ranged by employee
                year  : elements ranged by year
                month  : elements ranged by month
                week  : elements ranged by week
                
       http://localhost:8000/api/v1/statistic/condidat
           returns 
                count   : number of elements

       http://localhost:8000/api/v1/statistic/utilisateur
              
           returns 
                count   : number of elements
                statut  : elements ranged by statut 'RH' or not

|
*/# ProjetAtsLaravel
