# ttow-CC
How to deploy an app in the app engine
- The first step is to create a new project on your Google AppEngine account.
- Open your Developer Dashboard and create a new project by clicking "Create Project"
- Fill in the name of your project, and project ID. Project ID is a unique ID that will be used for the identity of your application.
- Then click "Create" to create a project.
- Once the AppEngine SDK is installed, open Google AppEngine Launcher. Create a new app project with the File -> Create New Application menu
- Then fill in the name of the application to be created, the directory of the project and the runtime to be used, then click Create.
- The next step is to connect your offline project with the project you created earlier in the Google AppEngine Dashboard.
- From Google AppEngine Launcher click "Edit" to set up project manifest (app.yaml), then change the value of "application" with your Project ID in Google AppEngine Dashboard.
- Open your project directory and edit main.php with your php code.
- To run the app offline click the "Run" button on Google AppEngine Launcher.
- To deploy the application to Google AppEngine click the "Deploy" button, then input your google account email and password.
- When the app is successfully deployed, the app will be accessible at <ProjectID>.appspot.com.
