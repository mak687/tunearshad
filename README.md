## PROJECT SETUP STEPS 

Kindly follow below step & run mentioned commands

- Step # 1 Installation of Libraries

	 composer install

- Step # 2 Create Database

	 php artisan db:create tune_arshad

- Step # 3 Run migration

	 php artisan migrate

- Step # 4  Run seeder
	
	php artisan db:seed (this step will take approx 4 - 5 mins)

- Final Step

	php artisan serve 
	
	Above command will assign a url like http://127.0.0.1:8000/. ).

Now open the assigned URL in the browser.


## API

- To Get All List of USER

	<-BASE_URL->/api/employee

- To Get Sepecific User Info By Id
	
	<-BASE_URL->/api/employee/{id}

- To Get Event for All User
	
	<-BASE_URL->/api/showEmployeeEvent



## IMPORTANT NOTE

- I added .env in GIT Repo for plug n play test project although it's not recomended.Because each developer / server using application could require a different environment configuration. Furthermore, this would be a security risk in the event an intruder gains access to your source control repository, since any sensitive credentials would get exposed.

- Currently API is open. Authentication is not applied

- Avatar S3 Image are blocked so i place a logic for displaying Fallback avatar images which is store in employee table.