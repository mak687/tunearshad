## PROJECT SETUP STEPS 

Go to root directory of project & then follow below steps & run mentioned commands

- <b>Step # 1 Installation of Dependencies</b>

	 <i>composer install</i>

- <b>Step # 2 Create Database</b>

	 <i>php artisan db:create tune_arshad</i>

- <b>Step # 3 Run migration</b>

	<i> php artisan migrate</i>

- <b>Step # 4  Run seeder</b>
	
	<i>php artisan db:seed </i>
	
	 - This step will take approx 4 - 5 mins

- <b>Final Step</b>

	<i>php artisan serve </i>
	
	 - Above command will assign a url like http://127.0.0.1:8000/

Now open the assigned URL in the browser.


## API

- <b>To Get All List of Employee</b>

	<-BASE_URL->/api/employee

- <b>To Get Sepecific Employee Info By Id</b>
	
	<-BASE_URL->/api/employee/{id}

- <b>To Get Event for All Employee</b>
	
	<-BASE_URL->/api/showEmployeeEvent

- <b>To Get Event for All Employee - SORT BY NAME </b>
	
	<-BASE_URL->/api/showEmployeeEvent/employeeName/asc
	<-BASE_URL->/api/showEmployeeEvent/employeeName/desc

- <b>To Get Event for All Employee - SORT BY Impression </b>
	
	<-BASE_URL->/api/showEmployeeEvent/totalImpressions/asc
	<-BASE_URL->/api/showEmployeeEvent/totalImpressions/desc

- <b>To Get Event for All Employee - SORT BY Conversion </b>
	
	<-BASE_URL->/api/showEmployeeEvent/totalConversion/asc
	<-BASE_URL->/api/showEmployeeEvent/totalConversion/desc
	
- <b>To Get Event for All Employee - SORT BY Revenue </b>
	
	<-BASE_URL->/api/showEmployeeEvent/totalRevenue/asc
	<-BASE_URL->/api/showEmployeeEvent/totalRevenue/desc




## IMPORTANT NOTE

- I added .env in GIT Repo for plug n play test project although it's not recomended.Because each developer / server using application could require a different environment configuration. Furthermore, this would be a security risk in the event an intruder gains access to your source control repository, since any sensitive credentials would get exposed.

- Currently API is open. Authentication is not applied

- Avatar S3 Image are blocked so i place a logic for displaying Fallback avatar images which is store in employee table.